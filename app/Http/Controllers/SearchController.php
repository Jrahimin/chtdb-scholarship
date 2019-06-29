<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function index()
    {
        $presentFinancialYear = Applicant::latest('id')->first()->financial_year;
        $totalApplicantThisYear = Applicant::where('financial_year', $presentFinancialYear)->count();

        return view('search', compact('totalApplicantThisYear'));
    }

    public function searchResult(Request $request)
    {
        try{
            ini_set('memory_limit', '512M');
            ini_set('max_execution_time', 300);

            $applicants = Applicant::with('address', 'bankInfo', 'family', 'qualification');
            if($request->id){
                $applicant = $applicants->where('id', $request->id)->firstOrFail();
                return view('showform_all', compact('applicant'));
            }

            //filtering data
            $applicants = $this->filterData($request, $applicants);
            $applicants = $applicants->orderBy('point', 'Desc')->get();
            $count = $applicants->count();

            // if data in tabular format
            if($request->filled('subtable'))
                return view('showform_datatable', compact('applicants','count'));

            return view('showform', compact('applicants','count'));
        }
        catch (\Exception $e){
            Log::error($e->getFile()." ".$e->getLine()." ".$e->getMessage());

            if($e instanceof ModelNotFoundException )
                abort(404);
        }
    }

    protected function filterData(Request $request, $applicants)
    {
        if($request->commus)
            $applicants->where('community', $request->commus);
        if($request->financial_year)
            $applicants->where('financial_year', $request->financial_year);
        if($request->dist)
            $applicants->whereHas('address', function ($query) use($request){
                $query->where('district', $request->dist);
            });
        if($request->subdist)
            $applicants->whereHas('address', function ($query) use($request){
                $query->where('upazilla', $request->subdist);
            });
        if($request->edu)
            $applicants->whereHas('qualification', function ($query) use($request){
                $query->where('presentClass', $request->edu);
            });

        // filter for tabular format
        if($request->quota)
            $applicants->where('quota', $request->quota);

        return $applicants;
    }
}
