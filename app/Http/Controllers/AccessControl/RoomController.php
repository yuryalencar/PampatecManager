<?php

namespace App\Http\Controllers\AccessControl;

use App\Helpers\Helper;
use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::paginate();
        return view('control_access.room.index', compact('rooms'));
    }

    public function create()
    {
        return view('control_access.room.form');
    }

    public function store(RoomRequest $request)
    {
        $dataToSave = $request->except('_token');
        DB::beginTransaction();
        try {
            $isSaved = Room::create($dataToSave);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        }

        DB::commit();

        return $isSaved ? Helper::throwSuccess(Helper::msg("create"), redirect()->route('control.access.room.index')) :
            Helper::throwError(Helper::msg("error.save"));
    }

    public function edit($id)
    {
        try {
            $room = Room::findOrfail($id);
            return view('control_access.room.form', compact('room'));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error"));
        }
    }

    public function update(RoomRequest $request)
    {
        $dataForUpdate = $request->except('_token');

        DB::beginTransaction();
        try {
            $roomToUpdate = Room::findOrFail($request->id);
            $isUpdated = $roomToUpdate->update($dataForUpdate);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        }
        DB::commit();

        return $isUpdated ? Helper::throwSuccess(Helper::msg("update"), redirect()->route('control.access.room.index')) :
            Helper::throwError(Helper::msg("error.update"));
    }

    public function destroy($id)
    {
        try {
            $room = Room::findOrfail($id);
            $result = $room->delete();
            if ($result) {
                return Helper::throwSuccess(Helper::msg("delete"), redirect()->route('control.access.room.index'));
            } else {
                return Helper::throwError(Helper::msg("error.delete"));
            }
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error.restore"));
        }
    }
}
