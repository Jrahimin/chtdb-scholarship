<html>
<head>
    <meta charset="UTF-8"/>
    <title>আবেদনকারীর তথ্য</title>

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font-family: verdana, sans-serif;
        }

        body {
            padding: 3px;
        }

        a {
            text-decoration: none;
        }

        .menubarhq {
            margin: 0;
            width: 100%;
            height: auto;
            background: url(back.jpg) no-repeat;
            background-size: cover;
            border: none;
        }

        .mymenuhq {
            width: 98%;
            background: url(back.jpg) no-repeat;
            background-size: cover;
            border: none;
        }

        .menulefthq {
            width: 70%;
            border: none;
        }

        .pagehq {
            padding: 8px;
            color: rgb(216, 246, 254);
            font-size: 2em;
            font-weight: bold;
            height: auto;
            text-shadow: -1px -1px 5px rgba(0, 0, 0, 0.3);
        }

        .menurighthq {
            width: 50%;
        }

        .setrighthq {
            text-align: right;
            border: none;
        }

        .plinkhq {
            color: rgb(237, 255, 200);
            text-decoration: none;
            padding: 18px;
            font-weight: bold;
            border: none;
        }

        .plinkhq:hover {
            text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            background-color: rgb(77, 149, 72);
            border-bottom: solid 1px white;
        }

        .bdesh {
            color: white;
            padding: 10px 12px;
            text-align: center;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
            border: 1px solid #8bcf54;
            padding: 10px 10px 10px 10px;
            text-decoration: none;
            display: inline-block;
            text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.3);
            font-weight: bold;
            background-color: #8AC611;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#8AC611), to(#699314));
            background-image: -webkit-linear-gradient(top, #8AC611, #699314);
            background-image: -moz-linear-gradient(top, #8AC611, #699314);
            background-image: -ms-linear-gradient(top, #8AC611, #699314);
            background-image: -o-linear-gradient(top, #8AC611, #699314);
            background-image: linear-gradient(to bottom, #8AC611, #699314);
        }

        .bdesh:hover {
            cursor: pointer;
        }

        .wrapper {
            width: 100%;
            height: auto;
            background: url(back2.jpg) repeat-y;
            background-size: cover;
        }

        .heading {
            width: 100%;
        }

        .tab {
            width: 96%;
            background-color: rgb(185, 234, 119);
            text-align: center;
            table-layout: fixed;
        }

        .info {
            text-shadow: 2px 2px 3px rgb(37, 69, 1);
            font-size: 2.4em;
            color: white;
            text-align: center;
        }

        .headd {
            background-color: rgb(176, 231, 103);
            font-weight: bold;
        }

        .bld {
            font-weight: bold;
            margin-top: 12px;
        }

        .headd, .bld {
            font-size: 0.8em;
        }

        .please {
            color: rgb(220, 35, 35);
            font-weight: bold;
            text-shadow: 2px 2px 1px rgb(180, 180, 180);
        }

        .intoin {
            background-color: rgb(186, 235, 150);
            display: inline-block;
            padding: 10px 16px;
            border-radius: 10px;
            border: solid 2px black;
        }

        .wrapit {
            width: 100%;
            min-height: 950px;
            background: url(back2.jpg) no-repeat;
            background-size: cover;
        )
        }

        .det {
            background-color: rgb(198, 237, 143);
        }

        td {
            word-wrap: break-word;
        }

        .myback {
            background: rgba(83, 157, 2, 1);
            background: -webkit-linear-gradient(left, rgb(213, 239, 175), rgba(83, 157, 2, 1), rgb(213, 239, 175));
            background: -o-linear-gradient(left, rgb(213, 239, 175), rgba(83, 157, 2, 1), rgb(213, 239, 175));
            background: -moz-linear-gradient(left, rgb(213, 239, 175), rgba(83, 157, 2, 1), rgb(213, 239, 175));
            background: linear-gradient(to right, rgb(213, 239, 175), rgba(83, 157, 2, 1), rgb(213, 239, 175));
        }

    </style>
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
                        <a href="new-form.php" class="plinkhq">নিবন্ধন</a>
                        <a href="search.php" class="plinkhq">তথ্য খুঁজুন</a>
                    </p>

                <td/>
            </tr>

        </table>
    </center>

</div>

<hr/>
<hr/>
<div id="fordoc1">
    <div class="heading">
        <p class="info myback">
            আবেদনকারীদের তথ্য
        </p>
    </div>
    <hr/>
    <hr/>


    <?php
    include "connect.php";
    include "data_input_query.php";
    ?>

    <div class="wrapper">
        <br/><br/>
        <center>

            <table class="tab" border="1">

                <tr class="headd">


                    <td width="5%">
                        ক্রমিক নং
                    </td>

                    <td width="5%">
                        আইডি নং
                    </td>

                    <td width="10%">
                        ছাত্র/ছাত্রীর নাম <br/> পিতার নাম <br/> মাতার নাম
                    </td>

                    <td width="10%">
                        স্থায়ী ঠিকানা- <br/> বাড়ির নং/রোড নং <br/> গ্রাম/ওয়ার্ড <br/> উপজেলা <br/> জেলা
                    </td>

                    <td width="10%">
                        বর্তমান<br/>অধ্যয়নরত <br/> শ্রেণী/বিভাগ <br/> সেমিস্টার/বর্ষ
                    </td>

                    <td width="10%">
                        বর্তমান শিক্ষা প্রতিষ্ঠানের<br/>নাম
                    </td>

                    <td width="10%">
                        সর্বশেষ পরীক্ষার প্রাপ্ত ফলাফল <br/> জিপিএ/প্রাপ্ত নম্বর <br/> শ্রেণী/ডিগ্রি <br/>
                        সেমিস্টার/বর্ষ
                    </td>

                    <td width="10%">
                        অভিভাবকের<br/>বার্ষিক আয়
                    </td>

                    <td width="10%">
                        মোবাইল নং ও<br/>ই-মেইল ঠিকানা
                    </td>

                    <td width="10%">
                        ব্যাংক হিসাবের নম্বর <br/> হিসাবধারীর নাম <br/> ব্যাংকের নাম <br/> শাখা
                    </td>

                    <td width="5%">
                        কোটা
                    </td>

                    <td width="5%">
                        মন্তব্য
                    </td>

                </tr>
            </table>
    </div>


    <?php
    if($_SESSION['userid'])
    {
    if(isset($_POST['subtable'])){
    $communitySelect = $_POST['comm2'];
    $db_fields = array('presentClass', 'district', 'upazilla', 'quota', 'community');
    $db_table = array('qualification', 'address', 'address', 'applicant', 'applicant');
    $form_fields = array('cr_edu', 'dist2', 'subdist2', 'quota', 'commus2');
    $conditions = array();

    // loop through the defined fields
    $i = 0;
    foreach ($form_fields as $field) {
        /*if($field=='quota' && $_POST[$field]=='')
        {
            $conditions[]="applicant.quota=''";
        }*/
        // if the field is set and not empty
        if (isset($_POST[$field]) && $_POST[$field] != '') {
            // create a new condition while escaping the value inputed by the user
            $conditions[] = "$db_table[$i].$db_fields[$i]='$_POST[$field]'";
            $i++;
        } else {
            if ($field === 'commus2' && $communitySelect === 'অন্যান্য') {
                $conditions[] = "applicant.community <>'চাকমা' AND applicant.community <> 'মারমা' AND applicant.community <> 'ত্রিপুরা' AND applicant.community <> 'তঞ্চঙ্গা' AND applicant.community <> 'পাংখো'  AND applicant.community <> 'খুমি' AND applicant.community <> 'লুসাই' AND applicant.community <> 'বম' AND applicant.community <> 'ম্রো' AND applicant.community <> 'খিয়াং'  AND applicant.community <> 'চাক' AND applicant.community <> 'বাঙালি'";
            }
            $i++;
            continue;
        }
    }
    // builds the query
    $query = "SELECT * FROM applicant inner join family on applicant.id=family.applicant_id inner join bank_info on applicant.id=bank_info.applicant_id inner join qualification on applicant.id=qualification.applicant_id  inner join address on applicant.id=address.applicant_id ";
    // if there are conditions defined
    if (count($conditions) > 0) {
        // append the conditions
        $query .= "WHERE " . implode(' AND ', $conditions);
        if ($_POST['quota'] == '') {
            $query .= " AND applicant.quota=''";
        }
    } else {
        $query .= "WHERE applicant.quota=''";
    }

    $query .= " ORDER BY applicant.point DESC";
    $result = mysqli_query($connection, $query);
    $count = 0;

    while($row = mysqli_fetch_array($result)){
    $applicant_id = $row['id'];
    $applicant_name = $row['applicantname'];
    $applicant_nameBang = $row['applicantnameBang'];
    $gender = $row['gender'];
    $quota = $row['quota'];
    $dob = $row['dob'];
    $app_mobile = $row['appMobile'];
    $app_email = $row['email'];
    $app_nid = $row['nid'];
    $app_bid = $row['bid'];
    $community = $row['community'];
    $app_pic = $row['personImageID'];
    $app_sign = $row['signImageID'];
    $quota_pic = $row['quotaImageId'];

    //family
    $fathers_name = $row['fathersNname'];
    $f_occu = $row['fathersOcc'];
    $f_mobile = $row['fathersMobile'];
    $mothers_name = $row['mothersName'];
    $m_occu = $row['mothersOcc'];
    $g_name = $row['guardianName'];
    $g_relation = $row['relation'];
    $g_y_income = $row['guardiansIncome'];
    $g_mobile = $row['guardiansMobile'];
    $father_income_attachment = $row['incomeImageId'];

    //bank_info
    $b_ac = $row['bankAcc'];
    $b_ac_name = $row['accName'];
    $b_dist = $row['bankName'];
    $b_branch = $row['branchName'];

    //address
    $pa_house = $row['roadNo'];
    $pr_house = $row['roadNo2'];
    $pa_post = $row['postOffice'];
    $pr_post = $row['postOffice2'];
    $pa_subdist = $row['upazilla'];

    $pr_subdist = $row['upazilla2'];
    $pa_vill = $row['village'];
    $pr_vill = $row['village2'];
    $com_attachment = $row['residentImageId'];

    //district
    $pa_dist = $row['district'];

    //district2
    $pr_dist = $row['district2'];

    //qualification
    $ssc_roll = $row['sscRoll'];
    $ssc_gpa = $row['sscGpa'];
    $ssc_year = $row['sscYear'];
    $ssc_board = $row['sscBoard'];

    $hsc_roll = $row['hscRoll'];
    $hsc_cgpa = $row['hscGpa'];
    $hsc_year = $row['hscYear'];
    $hsc_board = $row['hscBoard'];

    $grad_roll = $row['gradRoll'];
    $grad_cgpa = $row['gradGpa'];
    $grad_year = $row['gradYear'];
    $grad_board = $row['gradUni'];

    $master_roll = $row['postgradRoll'];
    $master_cgpa = $row['postgradGpa'];
    $master_year = $row['postgradYear'];
    $master_board = $row['postgradUni'];

    $cr_degree = $row['presentClass'];  //pesent class/degree name
    $cr_what = $row['prYear'];
    $last_degree = $row['lastDegree'];
    $last_what = $row['yearSemester'];
    $last_semester = $row['lastSemester'];
    $cr_subject = $row['subject'];
    $cr_semester = $row['semester'];
    $cr_address = $row['presentYear'];  //present class year name
    $exam_sheet_attachment = $row['certificateImageId'];
    $inst_attachment = $row['studentshipImageId'];

    //institute
    $cr_inst = $row['institution'];
    $cr_address2 = $row['instituteAddress'];  //present class address name
    $count++;
    ?>
    <div class="wrapper">
        <center>
            <table class="tab" border="1">
                <tr class="det">

                    <td width="5%">
                        <?php echo $count; ?>.
                    </td>

                    <td width="5%">
                        <?php echo $applicant_id; ?>
                    </td>

                    <td width="10%">

                        <?php echo $applicant_nameBang; ?><br/>
                        <?php echo $fathers_name; ?><br/>
                        <?php echo $mothers_name; ?>

                        <br/><br/>
                    </td>
                    <td width="10%">
                        <br/>

                        <?php echo $pa_house;?> <br/>
                        <?php echo $pa_vill; ?> <br/>
                        <?php echo $pa_post; ?> <br/>
                        <?php echo $pa_subdist; ?> <br/>
                        <?php echo $pa_dist; ?>
                        <br/><br/>
                    </td>

                    <td width="10%">
                        <?php echo $cr_degree; ?><br/>
                        <?php echo $cr_semester; ?>&nbsp;<?php echo $cr_what; ?><br/>
                        <?php echo $cr_subject; ?>

                    </td>

                    <td width="10%">
                        <?php echo $cr_inst; ?>
                    </td>

                    <td width="10%">
                        <?php echo $cr_address; ?> <br/>
                        <?php echo $last_degree; ?><br/>
                        <?php echo $last_semester; ?>&nbsp;<?php echo $last_what; ?>
                    </td>

                    <td width="10%">

                        <?php echo $g_y_income; ?>
                    </td>

                    <td width="10%">
                        <?php echo $app_mobile; ?> <br/>
                        <?php echo $app_email; ?>
                    </td>

                    <td width="10%">
                        <?php echo $b_ac; ?> <br/>
                        <?php echo $b_ac_name; ?> <br/>
                        <?php echo $b_dist; ?> <br/>
                        <?php echo $b_branch; ?> <br/>
                    </td>

                    <td width="5%">
                        <?php echo $quota; ?>
                    </td>


                    <td width="5%">

                    </td>

                </tr>
            </table>
        </center>
    </div>

    <?php
    }

    }

    ?>
</div>

<hr/>
<hr/>
<div style="background:url(back2.jpg) no-repeat">
    <br/><br/>
    <center>


        <a class="word-export" href="javascript:void(0)">
            <button class="bdesh">ডক আকারে ফাইল নামাতে ক্লিক করুন</button>
        </a>

        <a href="search.php" style="text-decoration:none;margin-left:50px;">
            <button class="bdesh">পুনরায় খোঁজ করুন</button>
        </a>

    </center>

    <br/>
</div>

<div id="page-content" style="display:none;">

</div>

<?php
}
else
{
?>

<html>
<div class="wrapit">

    </br></br></br></br></br></br></br></br></br></br></br></br></br><br/><br/>

    <center>
        <div class="intoin">
            <a href="search.php"><h2 class="please">অনুগ্রহ করে লগ ইন করুন</h2></a>
        </div>
    </center>

</div>

</html>
<?php
}
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="FileSaver.js"></script>
<script src="jquery.wordexport.js"></script>

<script type="text/javascript">


    $("a.word-export").click(function (event) {

        var a = document.getElementById("fordoc1").innerHTML;

        var c = a;

        document.getElementById("page-content").innerHTML = c;

        $("#page-content").wordExport("সিনোপসিস");

    });


</script>

</html>


</html>
