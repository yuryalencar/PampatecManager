<?php

namespace App\Http\Controllers\AccessControl;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Models\BusinessPartners;
use App\Http\Controllers\Controller;

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

    public function destroyCompany($id)
    {
        $companyToDelete = BusinessPartners::findOrfail($id);
        try {
            $isDeleted = $companyToDelete->delete();
            return $isDeleted ? Helper::throwSuccess(Helper::msg("delete"), redirect()->route('control.access.company.index')) :
                Helper::throwError(Helper::msg("error.delete"));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error.default"));
        }

    }

    public function destroyResearchGroup($id)
    {
        $researchGroupToDelete = BusinessPartners::findOrfail($id);
        try {
            $isDeleted = $researchGroupToDelete->delete();
            return $isDeleted ? Helper::throwSuccess(Helper::msg("delete"), redirect()->route('control.access.research.index')) :
                Helper::throwError(Helper::msg("error.delete"));
        } catch (\Exception $e) {
            return Helper::throwError(Helper::msg("error.default"));
        }

    }
}
