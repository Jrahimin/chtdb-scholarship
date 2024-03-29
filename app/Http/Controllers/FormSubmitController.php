<?php

namespace App\Http\Controllers;

use App\Address;
use App\Applicant;
use App\BankInfo;
use App\Family;
use App\Qualification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FormSubmitController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $success = false;
            $currentYearRange = (date('Y') - 1) . "-" . date('Y');
            $financialYear = (string)$this->convertChar($currentYearRange, true);
            $gpaPoint = (float)$this->convertChar($request->cr_point);
            $mark = (float)$this->convertChar($request->cr_marks);
            $gpaRangeFloat = (float)$this->convertChar($request->gpa_range);
            $gpaOrMark = $request->cr_point ? $request->cr_point : $request->cr_marks;

            $isDuplicate = $this->checkIfDuplicateApplicant($request, $financialYear);
            if ($isDuplicate)
                return view('submit-response', compact('isDuplicate', 'success'));

            if ($gpaPoint > 9 && $gpaPoint < 100)
                $gpaPoint = $gpaPoint / 10;
            if ($gpaPoint > 99)
                $gpaPoint = $gpaPoint / 100;

            if ($request->definecr === 'জিপিএ') {
                $gpaPoint = $gpaPoint * (5 / $gpaRangeFloat);
                $point = $gpaPoint;
            } else if ($request->definecr === 'বিভাগ') {
                $point = $mark;
            }

            $filePathPersonal = $request->hasFile('app_pic') ? $this->saveFile($request->file('app_pic'), "Personal_image") : null;
            $filePathAppSign = $request->hasFile('app_sign') ? $this->saveFile($request->file('app_sign'), "signature") : null;
            $filePathFatherIncome = $request->hasFile('father_income_attachment') ? $this->saveFile($request->file('father_income_attachment'), "income_attachment") : null;
            $filePathExamSheet = $request->hasFile('exam_sheet_attachment') ? $this->saveFile($request->file('exam_sheet_attachment'), "marksheet_image") : null;
            $filePathInstitute = $request->hasFile('inst_attachment') ? $this->saveFile($request->file('inst_attachment'), "inst_image") : null;
            $filePathResident = $request->hasFile('com_attachment') ? $this->saveFile($request->file('com_attachment'), "resident_image") : null;
            $filePathQuota = $request->hasFile('quota_pic') ? $this->saveFile($request->file('quota_pic'), "quota_image") : null;
            $filePathQuotaFatherNid = $request->hasFile('father_nid_pic') ? $this->saveFile($request->file('father_nid_pic'), "father_nid_image") : null;

            DB::beginTransaction();

            $applicant = Applicant::create([
                'applicantname' => $request->app_eng,
                'applicantnameBang' => $request->app_bang,
                'gender' => $request->gender,
                'quota' => $request->quota,
                'dob' => $request->dob,
                'appMobile' => $request->app_mobile,
                'email' => $request->app_email,
                'nid' => $request->app_nid,
                'bid' => $request->app_bid,
                'community' => $request->community,
                'personImageID' => $filePathPersonal,
                'signImageID' => $filePathAppSign,
                'quotaImageId' => $filePathQuota,
                'quota_father_nid_image_id' => $filePathQuotaFatherNid,
                'quota_relation' => $request->quota_relation ?? '',
                'point' => $point,
                'financial_year' => $financialYear,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            Qualification::create([
                'sscGroup' => $request->ssc_group,
                'sscRoll' => $request->ssc_roll,
                'sscGpa' => $request->ssc_p . " (৫ এর মধ্যে)",
                'sscYear' => $request->ssc_year,
                'sscBoard' => $request->ssc_board,
                'hscGroup' => $request->hsc_group,
                'hscRoll' => $request->hsc_roll,
                'hscGpa' => $request->hsc_cgpa,
                'hscYear' => $request->hsc_year,
                'hscBoard' => $request->hsc_board,
                'gradGroup' => $request->grad_group,
                'gradRoll' => $request->grad_roll,
                'gradGpa' => $request->grad_cgpa,
                'gradYear' => $request->grad_year,
                'gradUni' => $request->grad_board,
                'presentClass' => $request->cr_degree,
                'prYear' => $request->cr_what,
                'lastDegree' => $request->last_degree,
                'lastDegreeYear' => $request->last_degree_year,
                'yearSemester' => $request->last_what,
                'lastSemester' => $request->last_semester,
                'subject' => $request->cr_subject,
                'semester' => $request->cr_semester,
                'presentYear' => $gpaOrMark,
                'institution' => $request->cr_inst,
                'instituteAddress' => $request->cr_address2 ?? '',
                'certificateImageId' => $filePathExamSheet,
                'studentshipImageId' => $filePathInstitute,
                'applicant_id' => $applicant->id
            ]);

            Family::create([
                'fathersNname' => $request->fathers_name,
                'fathersOcc' => $request->f_occu,
                'fathersMobile' => $request->f_mobile,
                'mothersName' => $request->mothers_name,
                'mothersOcc' => $request->m_occu,
                'guardianName' => $request->g_name,
                'relation' => $request->g_relation,
                'guardiansIncome' => $request->g_y_income,
                'guardiansMobile' => $request->g_mobile,
                'incomeImageId' => $filePathFatherIncome,
                'applicant_id' => $applicant->id
            ]);

            Address::create([
                'roadNo' => $request->pa_house,
                'village' => $request->pa_vill,
                'village2' => $request->pr_vill,
                'postOffice' => $request->pa_post,
                'upazilla' => $request->pa_subdist,
                'roadNo2' => $request->pr_house,
                'postOffice2' => $request->pr_post,
                'upazilla2' => $request->pr_subdist,
                'district' => $request->pa_dist,
                'district2' => $request->pr_dist,
                'union' => $request->pa_union,
                'union2' => $request->pr_union,
                'residentImageId' => $filePathResident,
                'applicant_id' => $applicant->id
            ]);

            BankInfo::create([
                'bankAcc' => $request->b_ac,
                'accName' => $request->b_ac_name,
                'bankName' => $request->b_dist,
                'branchName' => $request->b_branch,
                'relation_with_applicant' => $request->relation_with_applicant,
                'applicant_id' => $applicant->id
            ]);

            DB::commit();

            $success = true;
            return view('submit-response', compact('success', 'applicant', 'isDuplicate'));
        } catch (\Exception $e) {
            Log::error($e->getFile() . " " . $e->getLine() . " " . $e->getMessage());
            Log::critical("request: " . json_encode($request->all()));

            $success = false;
            $isDuplicate = false;
            return view('submit-response', compact('success', 'isDuplicate'));
        }
    }

    protected function saveFile($file, $destinationFolder)
    {
        $fileNamePersonal = "{$destinationFolder}_" . time() . "_" . str_random(4) . "." . $file->getClientOriginalExtension();
        $destinationPath = "uploads/" . Carbon::now()->format('Y') . "/" . $destinationFolder . "/";

        if (!is_dir(public_path($destinationPath)))
            mkdir(public_path($destinationPath), 0777, true);

        $file->move(public_path($destinationPath), $fileNamePersonal);

        return $destinationPath . $fileNamePersonal;
    }

    protected function convertChar($char, $convertToBangla = false)
    {
        $banglaChar = array("০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯");
        $engChar = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");

        if ($convertToBangla)
            return str_replace($engChar, $banglaChar, $char);
        else
            return str_replace($banglaChar, $engChar, $char);
    }

    protected function checkIfDuplicateApplicant(Request $request, $financialYear)
    {
        $duplicateQualification = Qualification::where('sscRoll', $request->ssc_roll)->where('sscYear', $request->ssc_year)->where('sscBoard', $request->ssc_board)
            ->whereHas('applicant', function ($query) use ($financialYear) {
                $query->where('financial_year', $financialYear);
            })->first();

        if ($duplicateQualification) {
            Log::debug("qualification duplicate for applicant id: " . $duplicateQualification->applicant_id);
            Log::debug("request: " . json_encode($request->all()));
            return $duplicateQualification->applicant_id;
        }

        return false;
    }
}
