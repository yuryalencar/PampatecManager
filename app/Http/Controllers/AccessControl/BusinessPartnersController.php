<?php

namespace App\Http\Controllers\AccessControl;

use App\Helpers\Helper;
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\ResearchGroupRequest;
use Illuminate\Http\Request;
use App\Models\BusinessPartners;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BusinessPartnersController extends Controller
{
    public function indexResearchGroup()
    {
        $allResearchGroups = BusinessPartners::researchGroup()->paginate();
        return view('control_access.research_group.index', compact('allResearchGroups'));
    }

    public function indexCompany()
    {
        $allCompanies = BusinessPartners::company()->paginate();
        return view('control_access.company.index', compact('allCompanies'));
    }

    public function createResearchGroup()
    {
        return view('control_access.research_group.form');
    }

    public function storeResearchGroup(ResearchGroupRequest $request)
    {
        $researchGroupToSave = $request->except('_token');
        array_set($researchGroupToSave, "is_company", 0);
        array_set($researchGroupToSave, "is_research_group", 1);

        DB::beginTransaction();
        try {
            $isSaved = BusinessPartners::create($researchGroupToSave);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        }

        DB::commit();

        return $isSaved ? Helper::throwSuccess(Helper::msg("create"), redirect()->route('control.access.research.index')) :
            Helper::throwError(Helper::msg("error.save"));
    }

    public function updateResearchGroup(ResearchGroupRequest $request)
    {
        $dataForUpdateResearchGroup = $request->except('_token');
        $researchGroupToUpdate = BusinessPartners::find($request->id);

        DB::beginTransaction();
        try {
            $isUpdated = $researchGroupToUpdate->update($dataForUpdateResearchGroup);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        }
        DB::commit();

        return $isUpdated ? Helper::throwSuccess(Helper::msg("update"), redirect()->route('control.access.research.index')) :
            Helper::throwError(Helper::msg("error.update"));
    }

    public function editResearchGroup($id)
    {
        try {
            $researchGroup = BusinessPartners::findOrfail($id);
            return view('control_access.research_group.form', compact('researchGroup'));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error"));
        }
    }

    public function destroyPartnerById($id)
    {
        $partnersToDelete = BusinessPartners::findOrfail($id);
        try {
            $isCompany = $partnersToDelete->is_company == 1;
            $isDeleted = $partnersToDelete->delete();
            if ($isDeleted) {
                return $isCompany ? Helper::throwSuccess(Helper::msg("delete"), redirect()->route('control.access.company.index')) :
                    Helper::throwSuccess(Helper::msg("delete"), redirect()->route('control.access.research.index'));
            }
            return Helper::throwError(Helper::msg("error.delete"));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error.default"));
        }

    }

    public function createCompany()
    {
        return view('control_access.company.form');
    }

    public function storeCompany(CompanyRequest $request)
    {
        $companyToSave = $request->except('_token');
        array_set($companyToSave, "is_company", 1);
        array_set($companyToSave, "is_research_group", 0);

        DB::beginTransaction();
        try {
            $isSaved = BusinessPartners::create($companyToSave);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.save"));
        }

        DB::commit();

        return $isSaved ? Helper::throwSuccess(Helper::msg("create"), redirect()->route('control.access.company.index')) :
            Helper::throwError(Helper::msg("error.save"));
    }

    public function updateCompany(CompanyRequest $request)
    {
        $dataForUpdateCompany = $request->except('_token');
        $companyToUpdate = BusinessPartners::find($request->id);

        DB::beginTransaction();
        try {
            $isUpdated = $companyToUpdate->update($dataForUpdateCompany);
        } catch (\Exception $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        } catch (\Error $e) {
            DB::rollback();
            return Helper::throwError(Helper::msg("error.update"));
        }
        DB::commit();

        return $isUpdated ? Helper::throwSuccess(Helper::msg("update"), redirect()->route('control.access.company.index')) :
            Helper::throwError(Helper::msg("error.update"));
    }

    public function editCompany($id)
    {
        try {
            $company = BusinessPartners::findOrfail($id);
            return view('control_access.company.form', compact('company'));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error"));
        }
    }

}
