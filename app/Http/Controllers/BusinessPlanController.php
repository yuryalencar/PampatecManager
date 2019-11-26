<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Controllers\Auth\RegisterController;
use App\Mail\SendMailInvitedUser;
use App\Models\BusinessPlan;
use App\Models\Help;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BusinessPlanController extends Controller
{

    public function index()
    {
        $allplans = BusinessPlan::all();
        return view('plano_de_negocio/planosexistentes', compact('allplans'));
    }

    public function novoplano()
    {
        $allhelp = Help::all();
        return view('plano_de_negocio/novoplano', compact("allhelp"));
    }

    public function store(Request $request)
    {
        $dataToStore = $request->except('_token', 'entrepreneursEmail', 'emails');
        DB::beginTransaction();

        try {
            $result = BusinessPlan::create($dataToStore);
            if (isset($request->emails)) {
                foreach ($request->emails as $email) {
                    try {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $password = substr(md5(microtime()), 1, rand(8, 12));
                            $user = User::where('email', $email)->first();
                            if (isset($user)) {
                                $user->plans()->attach($result);
                                Mail::to($user->email)->send(new SendMailInvitedUser($user, 'Sua própria senha'));
                            } else {
                                $user = new User();
                                $user->password = bcrypt($password);
                                $user->name = "Empreendedor Convidado";
                                $user->email = "$email";

                                $user->save();

                                $user->roles()->attach(Role::getEntrepreneur());
                                $user->plans()->attach($result);
                                Mail::to($user->email)->send(new SendMailInvitedUser($user, $password));
                            }
                        }
                    } catch (\Exception $exception) {
                    }
                }
            }
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        }

        DB::commit();
        if ($result) {
            return Helper::throwSuccess(Helper::msg("store"), redirect()->route('listar.plano'));
        } else {
            return Helper::throwError(Helper::msg("error.update"));
        }
    }

    public function edit($id)
    {
        $allhelp = Help::all();
        $plano = BusinessPlan::where('id', $id)->first();
        $users = $plano->users;
        return view('plano_de_negocio/novoplano', compact('plano', 'allhelp', 'users'));
    }

    public function update(Request $request)
    {
        $dataToStore = $request->except('_token', 'entrepreneursEmail', 'emails');
        DB::beginTransaction();

        try {
            $result = BusinessPlan::where('id', $request->id)->first()->update($dataToStore);
            $plan = BusinessPlan::where('id', $request->id)->first();
            $users = $plan->users;
            $plan->users()->detach();

            if (isset($request->emails)) {
                foreach ($request->emails as $email) {
                    try {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $password = substr(md5(microtime()), 1, rand(8, 12));
                            $user = User::where('email', $email)->first();
                            if (isset($user)) {
                                $user->plans()->attach($plan);
                                $inProject = false;
                                foreach ($users  as $userOld) {
                                    if($user->email === $userOld->email){
                                        $inProject = true;
                                    }
                                }

                                if ($inProject == false) {
                                    Mail::to($user->email)->send(new SendMailInvitedUser($user, 'Sua própria senha'));
                                }
                            } else {
                                $user = new User();
                                $user->password = bcrypt($password);
                                $user->name = "Empreendedor Convidado";
                                $user->email = "$email";

                                $user->save();

                                $user->roles()->attach(Role::getEntrepreneur());
                                $user->plans()->attach($plan);
                                Mail::to($user->email)->send(new SendMailInvitedUser($user, $password));
                            }
                        }
                    } catch (\Exception $exception) {
                    }
                }
            }
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        }

        DB::commit();
        if ($result) {
            return Helper::throwSuccess(Helper::msg("update"), redirect()->route('listar.plano'));
        } else {
            return Helper::throwError(Helper::msg("error.update"));
        }
    }

    public function destroy(Request $request)
    {

        DB::beginTransaction();

        try {
            $planDestroyed = BusinessPlan::findOrfail($request->id);
            $result = $planDestroyed->delete();
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.delete"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.delete"));
        }

        DB::commit();
        if ($result) {
            return Helper::throwSuccess(Helper::msg("delete"), redirect()->route('listar.plano'));
        } else {
            return Helper::throwError(Helper::msg("error.delete"));
        }
    }

}
