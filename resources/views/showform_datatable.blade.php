<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>আবেদনকারীর তথ্য</title>

        <style type="text/css">
            *{margin:0;padding:0;font-family:verdana, sans-serif;} body{padding:3px;}
            a{text-decoration:none;}

            .menubarhq{margin:0;width:100%;height:auto;background:url('images/back.jpg') no-repeat;background-size:cover; border:none;}
            .mymenuhq{width:98%;background:url('images/back.jpg') no-repeat;background-size:cover;border:none;}
            .menulefthq{width:70%;border:none;}
            .pagehq{padding:8px;color:rgb(216,246,254);font-size:2em;font-weight:bold;height:auto;text-shadow: -1px -1px 5px rgba(0,0,0,0.3);} .menurighthq{width:50%;} .setrighthq{text-align:right;border:none;}
            .plinkhq{color:rgb(237,255,200);text-decoration:none;padding:18px;font-weight:bold;border:none;}
            .plinkhq:hover{text-shadow: -1px -1px 0 rgba(0,0,0,0.3); border-radius:5px;background-color:rgb(77,149,72);border-bottom:solid 1px white;}
            .bdesh{ color: white;padding: 10px 12px; text-align: center; text-decoration: none;font-size:1.2em;border-radius:5px;border:1px solid #8bcf54;padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold;
                background-color: #8AC611;background-image: -webkit-gradient(linear, left top, left bottom, from(#8AC611), to(#699314));background-image: -webkit-linear-gradient(top, #8AC611, #699314); background-image: -moz-linear-gradient(top, #8AC611, #699314);background-image: -ms-linear-gradient(top, #8AC611, #699314); background-image: -o-linear-gradient(top, #8AC611, #699314);background-image: linear-gradient(to bottom, #8AC611, #699314);}.bdesh:hover{cursor:pointer;}
            .wrapper{width:100%;height:auto;background:url('images/back2.jpg') repeat-y;background-size:cover;} .heading{width:100%;}
            .tab{width:96%;background-color:rgb(185,234,119);text-align:center;table-layout:fixed;}
            .info{text-shadow:2px 2px 3px rgb(37,69,1);font-size:2.4em;color:white;text-align:center;}
            .headd{background-color:rgb(176,231,103);font-weight:bold;}
            .bld{font-weight:bold;margin-top:12px;} .headd, .bld{font-size:0.8em;}

            .please{color:rgb(220,35,35);font-weight:bold;text-shadow:2px 2px 1px rgb(180,180,180);}
            .intoin{background-color:rgb(186,235,150);display:inline-block;padding:10px 16px;border-radius:10px;
                border:solid 2px black;} .wrapit{width:100%;min-height:950px;background:url('images/back2.jpg') no-repeat;background-size:cover;)}
            .det{background-color:rgb(198,237,143);}
            td{word-wrap: break-word;}
            .myback {
                background: rgba(83,157,2,1);
                background: -webkit-linear-gradient(left,rgb(213,239,175),rgba(83,157,2,1),rgb(213,239,175));
                background: -o-linear-gradient(left,rgb(213,239,175),rgba(83,157,2,1),rgb(213,239,175));
                background: -moz-linear-gradient(left,rgb(213,239,175),rgba(83,157,2,1),rgb(213,239,175));
                background: linear-gradient(to right, rgb(213,239,175),rgba(83,157,2,1),rgb(213,239,175));
            }

        </style>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
    </head>

<body>
<div class="menubarhq" style="font-family:verdana;">
    <center>
        <table class="mymenuhq">
            <br/>
            <tr class="fchq">
                <td class="menulefthq">
                    <p class="pagehq" id="page">নিবন্ধন</p>
                </td>

                <td class="menurighthq">

                    <p class="setrighthq">
                        <a href="index.php" class="plinkhq" onClick="donto(event)">মূল পাতা</a>
                        <a href="{{ route('form') }}" class="plinkhq">নিবন্ধন</a>
                        <a href="{{ route('search') }}" class="plinkhq">তথ্য খুঁজুন</a>
                    </p>

                <td/>
            </tr>

        </table>
    </center>

</div>

<hr/><hr/>
<div id="fordoc1">
    <div class="heading">
        <div class="info myback">
            <p style="text-align: center; display: inline-block;">আবেদনকারীর তথ্য</p>
            <p style="float: right; color: palegoldenrod; font-size: 20px">আবেদনকারীঃ {{ $count }} জন</p>
        </div>
    </div>
    <hr/><hr/>

<div class="col-md-10">
<table class="table" id="info">
    <thead>
        <tr>
            <th>ক্রমিক নং</th>
            <th>আইডি নং</th>
            <th>ছাত্র/ছাত্রীর নাম <br/> পিতার নাম <br/> মাতার নাম</th>
            <th>স্থায়ী ঠিকানা- <br/> বাড়ির নং/রোড নং <br/> গ্রাম/ওয়ার্ড <br/> উপজেলা <br/> জেলা</th>
            <th>বর্তমান<br/>অধ্যয়নরত  <br/> শ্রেণী/বিভাগ <br/> সেমিস্টার/বর্ষ </th>
            <th>বর্তমান শিক্ষা প্রতিষ্ঠানের<br/>নাম</th>
            <th>সর্বশেষ পরীক্ষার প্রাপ্ত ফলাফল <br/> জিপিএ/প্রাপ্ত নম্বর <br/> শ্রেণী/ডিগ্রি  <br/> সেমিস্টার/বর্ষ</th>
            <th>অভিভাবকের<br/>বার্ষিক আয়</th>
            <th>মোবাইল নং ও<br/>ই-মেইল ঠিকানা</th>
            <th>ব্যাংক হিসাবের নম্বর <br/> হিসাবধারীর নাম <br/> ব্যাংকের নাম <br/> শাখা</th>
            <th>কোটা</th>
            <th>মন্তব্য</th>
        </tr>
    </thead>

    <tbody>

    <?php
        $count = 0;
        foreach ($applicants as $applicant) {
            $applicant_id = $applicant->id;
            $applicant_name = $applicant->applicantname;
            $applicant_nameBang = $applicant->applicantnameBang;
            $gender = $applicant->gender;
            $quota = $applicant->quota;
            $quota_relation =   $applicant->quota_relation;
            $dob = $applicant->dob;
            $app_mobile = $applicant->appMobile;
            $app_email = $applicant->email;
            $app_nid = $applicant->nid;
            $app_bid = $applicant->bid;
            $community = $applicant->community;
            $app_pic = $applicant->personImageID;
            $app_sign = $applicant->signImageID;

            $quota_pic = $applicant->quotaImageId;
            //family
            $fathers_name = $applicant->family->fathersNname;
            $f_occu = $applicant->family->fathersOcc;
            $f_mobile = $applicant->family->fathersMobile;
            $mothers_name = $applicant->family->mothersName;
            $m_occu = $applicant->family->mothersOcc;
            $g_name = $applicant->family->guardianName;
            $g_relation = $applicant->family->relation;
            $g_y_income = $applicant->family->guardiansIncome;
            $g_mobile = $applicant->family->guardiansMobile;

            $father_income_attachment = $applicant->family->incomeImageId;
            //bank_info
            $b_ac = $applicant->bankInfo->bankAcc;
            $b_ac_name = $applicant->bankInfo->accName;
            $b_dist = $applicant->bankInfo->bankName;

            $b_branch = $applicant->bankInfo->branchName;
            //address
            $pa_house = $applicant->address->roadNo;
            $pr_house = $applicant->address->roadNo2;
            $pa_post = $applicant->address->postOffice;
            $pr_post = $applicant->address->postOffice2;

            $pa_subdist = $applicant->address->upazilla;
            $pr_subdist = $applicant->address->upazilla2;
            $pa_vill = $applicant->address->village;
            $pr_vill = $applicant->address->village2;

            $com_attachment = $applicant->address->residentImageId;
            //district

            $pa_dist = $applicant->address->district;
            //district2

            $pr_dist = $applicant->address->district2;
            //qualification
            $ssc_roll= $applicant->qualification->sscRoll;
            $ssc_gpa= $applicant->qualification->sscGpa;
            $ssc_year= $applicant->qualification->sscYear;

            $ssc_board= $applicant->qualification->sscBoard;
            $ssc_group= $applicant->qualification->sscGroup;
            $hsc_roll= $applicant->qualification->hscRoll;
            $hsc_cgpa= $applicant->qualification->hscGpa;

            $hsc_year= $applicant->qualification->hscYear;
            $hsc_board= $applicant->qualification->hscBoard;
            $hsc_group= $applicant->qualification->hscGroup;
            $grad_roll= $applicant->qualification->gradRoll;

            $grad_cgpa= $applicant->qualification->gradGpa;
            $grad_year= $applicant->qualification->gradYear;
            $grad_board= $applicant->qualification->gradUni;
            $grad_group= $applicant->qualification->gradGroup;

            $master_roll= $applicant->qualification->postgradRoll;
            $master_cgpa= $applicant->qualification->postgradGpa;
            $master_year= $applicant->qualification->postgradYear;
            $master_board= $applicant->qualification->postgradUni;
            $master_group= $applicant->qualification->postgradGroup;
            $cr_degree= $applicant->qualification->presentClass;  //pesent class/degree name
            $cr_what= $applicant->qualification->prYear;
            $last_degree= $applicant->qualification->lastDegree;
            $last_what= $applicant->qualification->yearSemester;
            $last_semester= $applicant->qualification->lastSemester;

            $cr_subject= $applicant->qualification->subject;
            $cr_semester= $applicant->qualification->semester;
            $cr_address= $applicant->qualification->presentYear;  //present class year name
            //institute
            $cr_inst= $applicant->qualification->institution;
            $cr_address2= $applicant->qualification->instituteAddress;  //present class address name
            ?>

            <tr>
                <td>
                    <?php echo ++$count; ?>.
                </td>

                <td>
                    <?php echo $applicant_id; ?>
                </td>

                <td>
                    <?php echo $applicant_nameBang.", ".$fathers_name.", ".$mothers_name; ?>
                </td>
                <td>
                    <?php echo $pa_house.", ".$pa_vill.", ".$pa_post.", ".$pa_subdist.", ".$pa_dist;?>
                </td>

                <td>
                    <?php echo $cr_degree.", ".$cr_semester.", ".$cr_what.", ".$cr_subject; ?>
                </td>

                <td>
                    <?php echo $cr_inst; ?>
                </td>

                <td>
                    <?php echo $cr_address.", ".$last_degree.", ".$last_semester.", ".$last_what; ?>
                </td>

                <td>
                    <?php echo $g_y_income; ?>
                </td>

                <td>
                    <?php echo $app_mobile.", ".$app_email; ?>
                </td>

                <td>
                    <?php echo $b_ac.", ".$b_ac_name.", ".$b_dist.", ".$b_branch; ?>
                </td>

                <td>
                    <?php echo $quota; ?>
                </td>


                <td>

                </td>
            </tr>

            <?php
        }
        ?>
    </tbody>

</table>
</div>

<!-- jQuery library -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#info').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'print'
            ]
        });
    });
</script>

</body>

