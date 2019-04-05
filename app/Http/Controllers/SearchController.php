<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function searchResult(Request $request)
    {
        try{
            ini_set('memory_limit', '512M');
            $applicants = Applicant::with('address', 'bankInfo', 'family', 'qualification');
            if($request->id){
                $applicant = $applicants->where('id', $request->id)->firstOrFail();
                //dd($applicant);
                return view('showform_all', compact('applicant'));
            }

            //filtering starts
            if($request->commus)
                $applicants->where('community', $request->commus);
            if($request->financial_year)
                $applicants->where('financial_year', $request->financial_year);
            if($request->dist)
                $applicants->whereHas('address', function ($query) use($request){
                    $query->where('district2', $request->dist);
                });
            if($request->subdist)
                $applicants->whereHas('address', function ($query) use($request){
                    $query->where('upazilla2', $request->subdist);
                });
            if($request->edu)
                $applicants->whereHas('qualification', function ($query) use($request){
                    $query->where('presentClass', $request->edu);
                });
            //filtering ends

            // if data in tabular format
            if($request->filled('subtable')){
                if($request->quota)
                    $applicants->where('quota', $request->quota);
                else
                    $applicants->where('quota', '');

                $applicants = $applicants->get();

                return view('showform_datatable', compact('applicants'));
            }

            $applicants = $applicants->get();

            return view('showform', compact('applicants'));
        }
        catch (\Exception $e){
            Log::error($e->getFile()." ".$e->getLine());
            Log::error($e->getMessage());
        }
    }
}
