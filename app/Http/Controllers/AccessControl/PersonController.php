<?php

namespace App\Http\Controllers\AccessControl;

use App\Helpers\Helper;
use App\Http\Requests\PersonRequest;
use App\Models\Person;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::paginate();
        return view('control_access.persons.index', compact('people'));
    }

    public function create()
    {
        return view('control_access.persons.form');
    }

    public function store(PersonRequest $request)
    {
        $dataToSave = $request->except('_token');
        DB::beginTransaction();
        try {
            $isSaved = Person::create($dataToSave);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        }

        DB::commit();

        return $isSaved ? Helper::throwSuccess(Helper::msg("create"), redirect()->route('control.access.people.index')) :
            Helper::throwError(Helper::msg("error.save"));
    }

    public function edit($id)
    {
        try {
            $person = Person::findOrfail($id);
            return view('control_access.persons.form', compact('person'));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error"));
        }
    }


    public function update(PersonRequest $request)
    {
        $dataForUpdate = $request->except('_token');

        DB::beginTransaction();
        try {
            $personToUpdate = Person::findOrFail($request->id);
            $isUpdated = $personToUpdate->update($dataForUpdate);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        }
        DB::commit();

        return $isUpdated ? Helper::throwSuccess(Helper::msg("update"), redirect()->route('control.access.people.index')) :
            Helper::throwError(Helper::msg("error.update"));
    }

    public function destroy($id)
    {
        try {
            $person = Person::findOrfail($id);
            $result = $person->delete();
            if ($result) {
                return Helper::throwSuccess(Helper::msg("delete"), redirect()->route('control.access.people.index'));
            } else {
                return Helper::throwError(Helper::msg("error.delete"));
            }
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error.restore"));
        }
    }

    public function permissionsIndex($id)
    {
        try {
            $person = Person::findOrFail($id);
            $rooms = $person->rooms()->paginate();
            return view('control_access.persons.indexPermissions', compact('person', 'rooms'));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error"));
        }
    }

    public function permissionsNew($id)
    {
        try {
            $person = Person::findOrFail($id);
            $rooms = Room::paginate();
            return view('control_access.persons.newPermission', compact('person', 'rooms'));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error"));
        }
    }

    public function permissionsStore($id, $idRoom)
    {
        try {
            $person = Person::findOrFail($id);
            $person->rooms()->attach(Room::findOrFail($idRoom));
            return Helper::throwSuccess(Helper::msg("save"), redirect()->route('control.access.people.permissions', $id));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error.save"));
        }
    }

    public function permissionsDestroy($id, $idRoom)
    {
        try {
            $person = Person::findOrFail($id);
            $person->rooms()->detach(Room::findOrFail($idRoom));
            return Helper::throwSuccess(Helper::msg("delete"), redirect()->route('control.access.people.permissions', $id));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error.delete"));
        }
    }

}
