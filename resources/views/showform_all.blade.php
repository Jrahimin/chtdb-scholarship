<?php
session_start();
?>

<html>
<head>
    <meta charset="UTF-8"/>
    <title>আবেদনকারীর তথ্য</title>

    <style type="text/css">
        *{margin:0;padding:0;font-family:verdana, sans-serif;} body{padding:3px;}
        a{text-decoration:none;}

        .bdesh{ color: white;padding: 10px 12px; text-align: center; text-decoration: none;font-size:1.2em;border-radius:5px;border:1px solid #8bcf54;font-size:1.2em;padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold;
            background-color: #8AC611;background-image: -webkit-gradient(linear, left top, left bottom, from(#8AC611), to(#699314));background-image: -webkit-linear-gradient(top, #8AC611, #699314); background-image: -moz-linear-gradient(top, #8AC611, #699314);background-image: -ms-linear-gradient(top, #8AC611, #699314); background-image: -o-linear-gradient(top, #8AC611, #699314);background-image: linear-gradient(to bottom, #8AC611, #699314);}.bdesh:hover{cursor:pointer;}.plink:hover{text-shadow: -1px -1px 0 rgba(0,0,0,0.3); border-radius:5px;background-color:rgb(129,171,41);border-bottom:solid 1px white;} 			.page{padding:8px;color:rgb(216,246,254);font-size:2em;font-weight:bold;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    background:url(back.jpg) no-repeat;background-size:cover;height:auto;text-shadow: -1px -1px 5px rgba(0,0,0,0.3);}
        .papers{width:50%;}

        .wrapper{width:99%;height:auto;padding:0.5%;margin:0 auto;background-color:rgb(156,204,105);position:relative;}
        .init{width:98%;background-color:white;border:solid 1px black;}				.info{padding:8px;color:white;font-size:1.8em;font-weight:bold;background-color:rgb(106,142,34);border-bottom:solid 1px black;}.personal{font-size:1.3em;text-align:left;background-color:rgb(117,161,28);}
        .personcont{width:100%;height:auto;background:url(back2.jpg) no-repeat;};.tableft{width:70%;}.tabright{width:30%;border:solid 2px rgb(117,161,28);}
        .cover{width:100%;} .line{color:rgb(117,161,28);}.tab{width:100%;}.therow{width:100%;}
        .tleft{width:32%;}.tright{width:70%;border-left:solid 1px rgb(117,161,28);}
        .headline{font-size:1em;font-weight:bold;color:rgb(15,40,69);padding:8px;text-align:right;}
        .inf{font-size:1em;margin-left:30px;}.person2,.account{width:100%;background:url(back2.jpg) no-repeat; background-size:cover;} .tab2{width:100%;} .infowale{width:100%} .store{22.45%;} .store1{width:30%;border-left:solid 1px rgb(117,161,28);} .store2{width:30%;border-left:solid 1px rgb(117,161,28);} .store3{width:17.55%;}.store4,.store5{width:38.775%;border-left:solid 1px rgb(117,161,28);}
        .ab, .cd, .bgc{width:17.5%;}.ef{width:25.05%;} .ab, .cd, .bgc, .ef{border-left:solid 1px rgb(117,161,28);}
        .pose, .pose2{text-align:right;} .pose2{margin-right:25px;font-weight:bold;}
        .pass{width:48%;padding:4px;border:solid 1px rgb(91,158,208);}.sign{margin-right:15px;border:solid 2px rgb(64,193,217);}.sign{width:22%;padding:5px;} .pass:hover,.sign:hover{padding:5px;border:solid 2px rgb(117,161,28);}.mine{border-bottom:solid 1px rgb(117,161,28);}.xy{text-align:center;} .gd{margin:0;text-align:center;} .ij, .kl{width:23.775%}; .mn{width:30%};
        .menuleft{width:50%;} .menuright{width:50%;}
        .page{padding:8px;color:rgb(216,246,254);font-size:2em;font-weight:bold;height:auto;text-shadow: -1px -1px 5px rgba(0,0,0,0.3);}
        .please{color:rgb(220,35,35);font-weight:bold;text-shadow:2px 2px 1px rgb(180,180,180);}
        .intoin{background-color:rgb(186,235,150);display:inline-block;padding:10px 16px;border-radius:10px;
            border:solid 2px black;} .wrapit{width:100%;min-height:950px;background:url(back2.jpg) no-repeat;background-size:cover;)}

        .menubarhq{margin:0;width:100%;height:auto;background:url(back.jpg) no-repeat;background-size:cover; border:none;}
        .mymenuhq{width:98%;background:url(back.jpg) no-repeat;background-size:cover;border:none;}
        .menulefthq{width:70%;border:none;}
        .pagehq{padding:8px;color:rgb(216,246,254);font-size:2em;font-weight:bold;height:auto;text-shadow: -1px -1px 5px rgba(0,0,0,0.3);} .menurighthq{width:50%;} .setrighthq{text-align:right;border:none;}
        .plinkhq{color:rgb(237,255,200);text-decoration:none;padding:18px;font-weight:bold;border:none;}
        .plinkhq:hover{text-shadow: -1px -1px 0 rgba(0,0,0,0.3); border-radius:5px;background-color:rgb(77,149,72);border-bottom:solid 1px white;}
        .point{font-size:1em;font-weight:bold;color:rgb(15,40,69);padding:8px;text-align:left;margin-top:12px;}
        .info{text-shadow:2px 2px 3px rgb(37,69,1);}
        .personal{background: rgb(54,159,0);
            background: -webkit-linear-gradient(left,rgba(83,157,2,0),rgba(83,157,2,1));
            background: -o-linear-gradient(right,rgba(83,157,2,0),rgba(83,157,2,1));
            background: -moz-linear-gradient(right,rgba(83,157,2,0),rgba(83,157,2,1));
            background: linear-gradient(to left, rgba(83,157,2,0), rgba(83,157,2,1));}

        .myback {
            background: rgba(83,157,2,1);
            background: -webkit-linear-gradient(left,white,rgba(83,157,2,1),white);
            background: -o-linear-gradient(left,white,rgba(83,157,2,1),white);
            background: -moz-linear-gradient(left,white,rgba(83,157,2,1),white);
            background: linear-gradient(to right, white,rgba(83,157,2,1),white);
        }

    </style>
</head>

<body onLoad="checkquota()">


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


<?php
include "connect.php";
include "data_input_query.php";
?>

<?php
if(isset($_POST['submit'])){
$db_fields = array('id', 'community', 'district2', 'upazilla2', 'presentClass');
$db_table = array('applicant', 'applicant', 'address', 'address', 'qualification');
$form_fields = array('id', 'commus', 'dist', 'subdist', 'edu');
$conditions = array();

$i=0;
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
// builds the query
$query = "SELECT * FROM applicant inner join family on applicant.id=family.applicant_id inner join bank_info on applicant.id=bank_info.applicant_id inner join qualification on applicant.id=qualification.applicant_id  inner join address on applicant.id=address.applicant_id ";
// if there are conditions defined
if(count($conditions) > 0) {
    // append the conditions
    $query .= "WHERE " . implode (' AND ', $conditions);
}
$query .= " ORDER BY applicant.point DESC";
$result = mysqli_query($connection, $query);

while($row=mysqli_fetch_array($result)){
$applicant_id=$row['applicant_id'];
$applicant_name=$row['applicantname'];
$applicant_nameBang=$row['applicantnameBang'];
$gender=$row['gender'];
$quota=$row['quota'];
$quota_relation = $row['quota_relation'];
$dob=$row['dob'];
$app_mobile=$row['appMobile'];
$app_email=$row['email'];
$app_nid=$row['nid'];
$app_bid=$row['bid'];
$community=$row['community'];
$app_pic=$row['personImageID'];
$app_sign=$row['signImageID'];
$quota_pic=$row['quotaImageId'];

//family
$fathers_name=$row['fathersNname'];
$f_occu=$row['fathersOcc'];
$f_mobile=$row['fathersMobile'];
$mothers_name=$row['mothersName'];
$m_occu=$row['mothersOcc'];
$g_name=$row['guardianName'];
$g_relation=$row['relation'];
$g_y_income=$row['guardiansIncome'];
$g_mobile=$row['guardiansMobile'];
$father_income_attachment=$row['incomeImageId'];

//bank_info
$b_ac=$row['bankAcc'];
$b_ac_name=$row['accName'];
$b_dist=$row['bankName'];
$b_branch=$row['branchName'];

//address
$pa_house=$row['roadNo'];
$pr_house=$row['roadNo2'];
$pa_post=$row['postOffice'];
$pr_post=$row['postOffice2'];
$pa_subdist=$row['upazilla'];
$pr_subdist=$row['upazilla2'];
$pa_vill=$row['village'];
$pr_vill=$row['village2'];
$com_attachment=$row['residentImageId'];

//district
$pa_dist=$row['district'];

//district2
$pr_dist=$row['district2'];

//qualification
$ssc_roll= $row['sscRoll'];
$ssc_gpa= $row['sscGpa'];
$ssc_year= $row['sscYear'];
$ssc_board= $row['sscBoard'];
$ssc_group= $row['sscGroup'];

$hsc_roll= $row['hscRoll'];
$hsc_cgpa= $row['hscGpa'];
$hsc_year= $row['hscYear'];
$hsc_board= $row['hscBoard'];
$hsc_group= $row['hscGroup'];

$grad_roll= $row['gradRoll'];
$grad_cgpa= $row['gradGpa'];
$grad_year= $row['gradYear'];
$grad_board= $row['gradUni'];
$grad_group= $row['gradGroup'];

$master_roll= $row['postgradRoll'];
$master_cgpa= $row['postgradGpa'];
$master_year= $row['postgradYear'];
$master_board= $row['postgradUni'];
$master_group= $row['postgradGroup'];

$cr_degree= $row['presentClass'];  //pesent class/degree name
$cr_what= $row['prYear'];
$last_degree= $row['lastDegree'];
$last_what= $row['yearSemester'];
$last_semester= $row['lastSemester'];
$cr_subject= $row['subject'];
$cr_semester= $row['semester'];
$cr_address= $row['presentYear'];  //present class year name
$exam_sheet_attachment=$row['certificateImageId'];
$inst_attachment=$row['studentshipImageId'];

//institute
$cr_inst= $row['institution'];
$cr_address2= $row['instituteAddress'];  //present class address name
?>

<center>
    <div class="wrapper">

        <div class="init">
            <div class="detail">
                <p class="info myback" style="text-align:center;">আবেদনকারীর তথ্য</p>
            </div>
            <div class="detail">
                <p class="info personal">ব্যক্তিগত তথ্য</p>
                <hr color="white"/>
                <hr class="line"/>
            </div>

            <div class="personcont">

                <table class="cover">
                    <tr>
                        <td class="tableft">

                            <table class="tab" >
                                <tr class="therow">
                                    <td class="tleft">
                                        <p class="headline">আবেদনকারীর আইডি নং</p>
                                    </td>
                                    <td class="tright">
                                        <p class="inf">
                                            <?php echo $applicant_id; ?>
                                        </p>
                                    </td>
                                <tr/>
                            </table>

                            <table class="tab" >
                                <tr class="therow">
                                    <td class="tleft">
                                        <p class="headline">আবেদনকারীর নাম (বাংলায়)</p>
                                    </td>
                                    <td class="tright">
                                        <p class="inf">
                                            <?php echo $applicant_nameBang; ?>
                                        </p>
                                    </td>
                                <tr/>
                            </table>

                            <table class="tab" >
                                <tr class="therow">
                                    <td class="tleft">
                                        <p class="headline">আবেদনকারীর নাম (ইংরেজিতে)</p>
                                    </td>
                                    <td class="tright">
                                        <p class="inf">
                                            <?php echo $applicant_name; ?>
                                        </p>
                                    </td>
                                <tr/>
                            </table>

                            <table class="tab">
                                <tr class="therow">
                                    <td class="tleft">
                                        <p class="headline">জন্মতারিখ</p>
                                    </td>
                                    <td class="tright">
                                        <p class="inf">
                                            <?php echo $dob; ?>
                                        </p>
                                    </td>
                                <tr/>
                            </table>


                            <table class="tab">
                                <tr class="therow">
                                    <td class="tleft">
                                        <p class="headline">মোবাইল নম্বর</p>
                                    </td>
                                    <td class="tright">
                                        <p class="inf">
                                            <?php echo $app_mobile; ?>
                                        </p>
                                    </td>
                                <tr/>
                            </table>



                            <table class="tab">
                                <tr class="therow">
                                    <td class="tleft">
                                        <p class="headline">ই-মেইল</p>
                                    </td>
                                    <td class="tright">
                                        <p class="inf">
                                            <?php echo $app_email; ?>
                                        </p>
                                    </td>
                                <tr/>
                            </table>

                            <table class="tab">
                                <tr class="therow">
                                    <td class="tleft">
                                        <p class="headline">জাতীয় পরিচয়পত্র নম্বর</p>
                                    </td>
                                    <td class="tright">
                                        <p class="inf">
                                            <?php echo $app_nid; ?>
                                        </p>
                                    </td>
                                <tr/>
                            </table>

                        </td>

                        <td class="tabright">
                            <p class="pose">
                            <center>
                                <img src="personal_image/<?php echo  $app_pic;?>" height="300" width="300"/>
                            </center>
                            </p>
                        </td>

                    </tr>
                </table>

            </div>

            <div class="person2">

                <table class="tab2">
                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                জন্ম নিবন্ধন নম্বর
                            </p>
                        </td>
                        <td class="store1">
                            <p class="inf">
                                <?php echo $app_bid; ?>
                            </p>
                        </td>
                        <td class="store3">
                            <p class="headline">
                                লিঙ্গ
                            </p>
                        </td>
                        <td class="store2">
                            <p class="inf">
                                <?php echo $gender; ?>
                            </p>
                        </td>

                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                সম্প্রদায়
                            </p>
                        </td>
                        <td class="store1">
                            <p class="inf">
                                <?php echo $community; ?>
                            </p>
                        </td>
                        <td class="store3">
                            <p class="headline">
                            </p>
                        </td>
                        <td class="store2"  style="border-left:none;">
                            <p class="inf">


                            </p>
                        </td>

                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                কোটা
                            </p>
                        </td>
                        <td class="store1">
                            <p class="inf">
                                <?php echo $quota; ?>
                            </p>
                        </td>

                        <?php
                        if($quota_relation) {
                            ?>
                            <td class="store3">
                                <p class="headline">
                                    কোটাধারীর সাথে সম্পর্ক
                                </p>
                            </td>
                            <td class="store2">
                                <p class="inf">
                                    <?php echo $quota_relation; ?>
                                </p>
                            </td>
                            <?php
                        }
                        ?>


                        <td class="store3">
                            <p class="headline">
                            </p>
                        </td>
                        <td class="store2"  style="border-left:none;">
                            <p class="inf">


                            </p>
                        </td>

                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                পিতার নাম
                            </p>
                        </td>
                        <td class="store1">
                            <p class="inf">
                                <?php echo $fathers_name; ?>
                            </p>
                        </td>
                        <td class="store3">
                            <p class="headline">
                                পেশা
                            </p>
                        </td>
                        <td class="store2">
                            <p class="inf">
                                <?php echo $f_occu; ?>
                            </p>
                        </td>

                    </tr>
                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                মোবাইল নম্বর
                            </p>
                        </td>
                        <td class="store1">
                            <p class="inf">
                                <?php echo $f_mobile; ?>
                            </p>
                        </td>
                        <td class="store3">
                            <p class="headline">
                            </p>
                        </td>
                        <td class="store2"  style="border-left:none;">
                            <p class="inf">


                            </p>
                        </td>

                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                মাতার নাম
                            </p>
                        </td>
                        <td class="store1">
                            <p class="inf">
                                <?php echo $mothers_name; ?>
                            </p>
                        </td>
                        <td class="store3">
                            <p class="headline">
                                পেশা
                            </p>
                        </td>
                        <td class="store2">
                            <p class="inf">
                                <?php echo $m_occu; ?>
                            </p>
                        </td>
                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                অভিভাবকের নাম
                            </p>
                        </td>
                        <td class="store1">
                            <p class="inf">
                                <?php echo $g_name; ?>
                            </p>
                        </td>

                        <td class="store3">
                            <p class="headline">
                                আবেদনকারীর সাথে সম্পর্ক
                            </p>
                        </td>
                        <td class="store2">
                            <p class="inf">
                                <?php echo $g_relation; ?>
                            </p>
                        </td>
                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                পিতা/অভিভাবকের বাৎসরিক আয়
                            </p>
                        </td>
                        <td class="store1">
                            <p class="inf">
                                <?php echo $g_y_income; ?>
                            </p>
                        </td>
                        <td class="store3">
                            <p class="headline">
                                মোবাইল নম্বর
                            </p>
                        </td>
                        <td class="store2">
                            <p class="inf">
                                <?php echo $g_mobile; ?>

                            </p>
                        </td>
                    </tr>
                </table>
                <br/>
            </div>

            <hr color="black"/>
            <div class="account">
                <p class="info personal">
                    আবেদনকারীর ব্যাংক হিসাবের বিবরণ
                </p>
                <hr color="white"/>
                <hr class="line"/>

                <table class="tab2">
                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                ব্যাংক হিসাব নম্বর
                            </p>
                        </td>
                        <td class="store1">
                            <p class="inf">
                                <?php echo $b_ac; ?>
                            </p>
                        </td>
                        <td class="store3">
                            <p class="headline">
                                হিসাবধারীর নাম
                            </p>
                        </td>
                        <td class="store2">
                            <p class="inf">
                                <?php echo $b_ac_name; ?>
                            </p>
                        </td>
                    </tr>


                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                ব্যাংকের নাম
                            </p>
                        </td>

                        <td class="store1">
                            <p class="inf">
                                <?php echo $b_dist; ?>
                            </p>
                        </td>
                        <td class="store3">
                            <p class="headline">
                                শাখা
                            </p>
                        </td>

                        <td class="store2">
                            <p class="inf">
                                <?php echo $b_branch; ?>

                            </p>
                        </td>
                    </tr>
                </table>
            </div>

            <hr color="black"/>
            <div class="account">
                <p class="info personal">
                    ঠিকানা
                </p>
                <hr color="white"/>
                <hr class="line"/>

                <table class="tab2">
                    <tr class="infowale">
                        <td class="store">
                            <p class="headline mine">
                                বিবরণ
                            </p>
                        </td>

                        <td class="store4">
                            <p class="headline mine xy">
                                স্থায়ী
                            </p>
                        </td>

                        <td class="store5">
                            <p class="headline mine xy">
                                বর্তমান
                            </p>
                        </td>
                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                বাড়ি নং / রোড নং
                            </p>
                        </td>

                        <td class="store4">
                            <p class="inf gd" style="">
                                <?php echo $pa_house; ?>
                            </p>
                        </td>

                        <td class="store5">
                            <p class="inf gd">

                                <?php echo $pr_house; ?>
                            </p>
                        </td>
                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                গ্রাম / ওয়ার্ড
                            </p>
                        </td>

                        <td class="store4">
                            <p class="inf gd">
                                <?php echo $pa_vill; ?>
                            </p>
                        </td>

                        <td class="store5">
                            <p class="inf gd">
                                <?php echo $pr_vill; ?>
                            </p>
                        </td>
                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                পোস্ট অফিস
                            </p>
                        </td>

                        <td class="store4">
                            <p class="inf gd">
                                <?php echo $pa_post; ?>
                            </p>
                        </td>

                        <td class="store5">
                            <p class="inf gd">
                                <?php echo $pr_post; ?>
                            </p>
                        </td>
                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                উপজেলা
                            </p>
                        </td>

                        <td class="store4">
                            <p class="inf gd">
                                <?php echo $pa_subdist; ?>
                            </p>
                        </td>

                        <td class="store5">
                            <p class="inf gd">
                                <?php echo $pr_subdist; ?>
                            </p>
                        </td>
                    </tr>
                    <tr class="infowale">

                        <td class="store">
                            <p class="headline">
                                জেলা
                            </p>
                        </td>

                        <td class="store4">
                            <p class="inf gd">
                                <?php echo $pa_dist; ?>
                            </p>
                        </td>

                        <td class="store5">
                            <p class="inf gd">
                                <?php echo $pr_dist; ?>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>

            <hr color="black"/>
            <div class="account">
                <p class="info personal">
                    শিক্ষাগত যোগ্যতা
                </p>
                <hr color="white"/>
                <hr class="line"/>

                <table class="tab2">
                    <tr class="infowale">
                        <td class="store">

                            <p class="headline mine" style="border-right:solid 1px rgb(117,161,28);">
                                পরীক্ষার নাম
                            </p>
                        </td>

                        <td class="akbk">
                            <p class="headline mine">
                                বিষয় / বিভাগ
                            </p>
                        </td>

                        <td class="ab">
                            <p class="headline mine gd">
                                রোল নং
                            </p>
                        </td>

                        <td class="cd">
                            <p class="headline mine gd" style="font-size:0.95em;">
                                জিপিএ/সিজিপিএ/বিভাগ
                            </p>
                        </td>

                        <td class="bgc">
                            <p class="headline mine gd">
                                সাল
                            </p>
                        </td>


                        <td class="ef">
                            <p class="headline mine gd">
                                বোর্ড/বিশ্ববিদ্যালয়
                            </p>
                        </td>
                    </tr>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline" style="border-right:solid 1px rgb(117,161,28);">
                                এস.এস.সি./সমমান
                            </p>
                        </td>

                        <td class="akbk">
                            <p class="inf gd">
                                <?php echo $ssc_group; ?>
                            </p>

                        <td class="ab">
                            <p class="inf gd">
                                <?php echo $ssc_roll; ?>
                            </p>
                        </td>

                        <td class="cd">
                            <p class="inf gd">
                                <?php echo $ssc_gpa; ?>
                            </p>
                        </td>

                        <td class="bgc">
                            <p class="inf gd">
                                <?php echo $ssc_year; ?>
                            </p>
                        </td>


                        <td class="ef">
                            <p class="inf gd">
                                <?php echo $ssc_board; ?>
                            </p>
                        </td>
                    </tr>

					<?php
						if($hsc_roll!=""){
					?>
                    <tr class="infowale">
                        <td class="store">
                            <p class="headline" style="border-right:solid 1px rgb(117,161,28);">
                                এইচ.এস.সি./সমমান
                            </p>
                        </td>


                        <td class="akbk">
                            <p class="inf gd">
                                <?php echo $hsc_group; ?>
                            </p>

                        <td class="ab">
                            <p class="inf gd">
                                <?php echo $hsc_roll; ?>
                            </p>
                        </td>

                        <td class="cd">
                            <p class="inf gd">
                                <?php echo $hsc_cgpa; ?>
                            </p>
                        </td>

                        <td class="bgc">
                            <p class="inf gd">
                                <?php echo $hsc_year; ?>
                            </p>
                        </td>

                        <td class="ef">
                            <p class="inf gd">
                                <?php echo $hsc_board; ?>
                            </p>
                        </td>
                    </tr>
					
					<?php
						}
						
					if($grad_roll!=""){
					?>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline" style="border-right:solid 1px rgb(117,161,28);">
                                স্নাতক/সমমান
                            </p>
                        </td>

                        <td class="akbk">
                            <p class="inf gd">
                                <?php echo $grad_group; ?>
                            </p>

                        <td class="ab">
                            <p class="inf gd">
                                <?php echo $grad_roll; ?>
                            </p>
                        </td>

                        <td class="cd">
                            <p class="inf gd">
                                <?php echo $grad_cgpa; ?>
                            </p>
                        </td>

                        <td class="bgc">
                            <p class="inf gd">
                                <?php echo $grad_year; ?>
                            </p>
                        </td>


                        <td class="ef">
                            <p class="inf gd">
                                <?php echo $grad_board; ?>
                            </p>
                        </td>
                    </tr>
					
					<?php
						}
						
					if($master_roll!=""){	
					?>

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline" style="border-right:solid 1px rgb(117,161,28);">
                                স্নাতকোত্তর
                            </p>
                        </td>

                        <td class="akbk">
                            <p class="inf gd">
                                <?php echo $master_group; ?>
                            </p>

                        <td class="ab">
                            <p class="inf gd">
                                <?php echo $master_roll; ?>
                            </p>
                        </td>

                        <td class="cd">
                            <p class="inf gd">
                                <?php echo $master_cgpa; ?>
                            </p>
                        </td>

                        <td class="bgc">
                            <p class="inf gd">
                                <?php echo $master_year; ?>
                            </p>
                        </td>

                        <td class="ef">
                            <p class="inf gd">
                                <?php echo $master_board; ?>
                            </p>
                        </td>
                    </tr>
					
					<?php
						}
					?>
					
                </table>
            </div>

            <hr color="black"/>
            <div class="account">
                <p class="info personal">
                    বর্তমান পড়াশোনার বিবরণ
                </p>

                <hr color="white"/>
                <hr class="line"/>
                <table class="tab2">

                    <tr class="infowale">
                        <td class="store">
                            <p class="headline">
                                শ্রেণী/ডিগ্রি
                            </p>
                        </td>

                        <td class="store1">
                            <p class="inf gd">
                                <?php echo $cr_degree; ?>
                            </p>
                        </td>

                        <td class="store3">
                            <p class="headline">
                                বিভাগ/বিষয়
                            </p>
                        </td>

                        <td class="store2">
                            <p class="inf gd">
                                <?php echo $cr_subject; ?>
                            </p>
                        </td>
                    </tr>

                    <tr class="infowale">

                        <td class="store">
                            <p class="headline">
                                সেমিস্টার/বর্ষ
                            </p>
                        </td>

                        <td class="store1">
                            <p class="inf gd">
                                <?php echo $cr_semester; ?>&nbsp;<?php echo $cr_what; ?>
                            </p>
                        </td>

                        <td class="store3" style="border-left:none;">
                            <p class="headline">

                            </p>
                        </td>

                        <td class="store2">
                            <p class="inf gd">

                            </p>
                        </td>

                    </tr>

                    <tr class="infowale">

                        <td class="store">
                            <p class="headline">
                                সর্বশেষ উত্তীর্ণ শ্রেণী/ডিগ্রি
                            </p>
                        </td>

                        <td class="store1">
                            <p class="inf gd">
                                <?php echo $last_degree; ?>
                            </p>
                        </td>

                        <td class="store3" style="border-left:none;">
                            <p class="headline">
                                সর্বশেষ সেমিস্টার/বর্ষ
                            </p>
                        </td>

                        <td class="store2">
                            <p class="inf gd">
                                <?php echo $last_semester; ?>&nbsp;<?php echo $last_what; ?>
                            </p>
                        </td>

                    </tr>

                    <tr class="infowale">

                        <td class="store">
                            <p class="headline">
                                সর্বশেষ সেমিস্টার/বর্ষের জিপিএ/নম্বর
                            </p>
                        </td>

                        <td class="store1">
                            <p class="inf gd">
                                <?php echo $cr_address; ?>
                            </p>
                        </td>

                        <td class="store3" style="border-left:none;">
                            <p class="headline">

                            </p>
                        </td>

                        <td class="store2">
                            <p class="inf gd">

                            </p>
                        </td>

                    </tr>

                    <tr class="infowale">

                        <td class="store">
                            <p class="headline">
                                বর্তমান শিক্ষা প্রতিষ্ঠান
                            </p>
                        </td>

                        <td class="store1">
                            <p class="inf gd">
                                <?php echo $cr_inst; ?>
                            </p>
                        </td>

                        <td class="store3">
                            <p class="headline">
                                ঠিকানা
                            </p>
                        </td>

                        <td class="store2">
                            <p class="inf gd">
                                <?php echo $cr_address2; ?>
                            </p>
                        </td>
                    </tr>
                </table>
            </div>

            <hr color="black"/>
            <?php
                $extension = substr($quota_pic, -3);
            if($extension=="jpg" || $extension=="png"){
                echo $quota_pic;
                ?>
                <div class="account" id="forquota">
                    <p class="info personal">
                        বিশেষ কোটার স্বপক্ষে প্রমাণপত্র
                    </p>
                    <hr color="white"/>
                    <hr class="line"/>
                    <img class="papers" src="quota_image/<?php echo  $quota_pic; ?>"/>
                </div>

            <?php }  ?>

            <span id="hidevalue" style="display:none;"><?php echo  $quota_pic; ?></span>

            <div class="account">
                <p class="info personal">
                    আবেদনকারী কর্তৃক প্রদত্ত দলিলসমূহ
                </p>
                <hr color="white"/>
                <hr class="line"/>
                <p class="point">
                    ১. উপজেলা চেয়ারম্যান/ পৌরসভা মেয়র / প্রতিষ্ঠানের প্রধানের (যদি পিতা/অভিভাবক চাকুরীজীবী হোন) পক্ষ হতে পিতা/অভিভাকের আয় সংক্রান্ত প্রত্যয়নপত্র :
                </p>
                <br/>
                <img class="papers" src="income_attachment/<?php echo  $father_income_attachment; ?>"/>
                <br/><br/>
                <hr/>
                <p class="point">
                    ২. সর্বশেষ সেমিস্টার/লেভেল/বর্ষের নম্বরপত্র অথবা সার্টিফিকেট :
                </p>
                <br/>
                <img class="papers" src="marksheet_image/<?php echo  $exam_sheet_attachment; ?>"/>
                <br/><br/>
                <hr/>
                <p class="point">
                    ৩. শিক্ষা প্রতিষ্ঠানের প্রধানের স্বাক্ষরযুক্ত ছাত্রত্ব সনদ :
                </p>
                <br/>
                <img class="papers" src="inst_image/<?php echo  $inst_attachment; ?>"/>
                <br/><br/>
                <hr/>
                <p class="point">
                    ৪.  স্থায়ী ঠিকানার ডেপুটি কমিশনার/সার্কেল চিফের স্বাক্ষরযুক্ত সনদপত্র :
                </p>
                <br/>

                <img class="papers" src="resident_image/<?php echo  $com_attachment; ?>"/>
                <br/><br/>
                <hr/>


            </div>

            <hr color="black"/>

            <div class="account">
                <p class="info personal">
                    আবেদনকারীর স্বাক্ষর
                </p>
                <hr color="white"/>
                <hr class="line"/>


                <p class="pose">
                    <br/>
                    <img src="signature/<?php echo  $app_sign; ?>"/>
                    <br/><br/><br/>
                </p>
                <p class="pose2">											(<?php echo $applicant_nameBang; ?> &nbsp; এর স্বাক্ষর)
                </p>

                <br/><br/>

            </div>

        </div>

    </div>
</center>

<script type="text/javascript">
    function checkquota(){
        var a = document.getElementById("hidevalue").innerHTML;

        if(a=="null"){
            document.getElementById("forquota").style.display="none";
        }
    }
</script>

</body>
<?php
}
?>


<div style="background:url(back2.jpg) no-repeat; background-size:cover;">
    <br/><br/><br/>
    <center>
        <a href="search.php" style="text-decoration:none;">
            <button class="bdesh">পুনরায় খোঁজ করুন</button>
        </a>
    </center><br/><br/><br/><br/>
</div>

<?php
}


?>

<?php
?>

</html>
