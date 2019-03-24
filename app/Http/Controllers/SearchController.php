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

    public function searchResultBrief()
    {
        return view('showform');
    }

    public function searchResultFull(Request $request)
    {
        try{
            $db_fields = array('id', 'community', 'district2', 'upazilla2', 'presentClass');
            $db_table = array('applicant', 'applicant', 'address', 'address', 'qualification');
            $form_fields = array('id', 'commus', 'dist', 'subdist', 'edu');
            $conditions = array();

            $applicants = Applicant::with('address', 'bankInfo', 'family', 'qualification');
            if($request->id){
                $applicant = $applicants->where('id', $request->id)->firstOrFail();
                return view('showform_all', compact('applicant'));
            }

            foreach($form_fields as $field){

                if(isset($_POST[$field]) && $_POST[$field] != ''){
                    if($field==='id')
                    {
                        $conditions[]= "$db_table[$i].$db_fields[$i]=$_POST[$field]";
                        continue;
                    }
                    $conditions[] = "$db_table[$i].$db_fields[$i] LIKE '%" .$_POST[$field]. "%'";
                    $i++;
                }
                else{
                    $i++;
                    continue;
                }
            }

            return view('showform');
        }
        catch (\Exception $e){
            Log::error($e->getFile()." ".$e->getLine());
            Log::error($e->getMessage());
        }
    }
}
