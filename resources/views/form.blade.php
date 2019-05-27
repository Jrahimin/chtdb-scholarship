<?php
session_start();
?>

<html>
<head><title>আবেদন ফরম</title>
    <meta charset="UTF-8">
</head>
<body onLoad="setvalue()">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
<link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet"/>
<link href="{{asset('css/index-ui.css')}}" rel="stylesheet"/>

<div class="menubar" style="font-family:verdana;">
    <center>
        <table class="mymenu">
            <br/>
            <tr class="fc">
                <td class="menuleft">
                    <p class="page" id="page">নিবন্ধন</p>
                </td>

                </td>

                <td class="menuright">

                    <p class="setright">
                        <a href="index.php" class="plink" onClick="donto(event)">মূল পাতা</a>
                        <a href="scan0020.pdf" class="plink" target="_blank">নির্দেশিকা</a>

                    </p>

                <td/>
            </tr>

        </table>
    </center>

</div>
<br/>
<label style="color:#A52A2A; font-weight:bold; margin-left:1%">*ফর্ম পূরণ করার পূর্বে অনুগ্রহ করে  <a href="scan0020.pdf" style="color:#6B8E23" target="_blank">নির্দেশিকা</a> পড়ে নিন</label>
<br/><br/>
<form name="form" action="{{ route('form_submit') }}" method="post" enctype="multipart/form-data"  accept-charset="UTF-8">
    @csrf
<span id="tesla" style="display:none;">

</span>

    <div>
        <table class="table table-hover table-responsive table-bordered" >
            <tbody class="CSSTableGenerator" >

            <div class="setback">

                <tr>
                    <td bgcolor="#CCCCCC" style="background:#89D850; padding:10px"><div class="headd">ব্যক্তিগত তথ্য</div>
                        <div class="bck">
                            <table border="0" width="100%" cellspacing="1" cellpadding="1" bgcolor="#FFFFFF">
                                <tbody>
                                <tr>
                                    <td valign="top" width="69%" class="myself" style="color:white;font-size:1.1em;">
                                        <strong>
                                            *পাসপোর্ট সাইজের রঙিন ছবি  (ছবির আকার ৩০০x৩০০ এবং  100 KB এর চেয়ে ছোট হতে হবে)
                                        </strong></td>
                                    <td width="31%"><input name="app_pic" required="required" type="file" id="app_pic" class="btna" onchange="readURL(this);" /></td>
                                </tr>
                                </tbody>
                            </table>

                            <table width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
                                <tbody>
                                <tr>
                                    <td valign="top" width="31%"><strong>*আবেদনকারীর নাম :</strong></td>
                                    <td width="31%"><input required="required" name="app_bang" type="text" id="app_bang"  /></td>
                                    <td width="13%" style="border:none;"></td>
                                    <td width="25%" style="border:none;"></td>
                                </tr>

                                <tr>
                                    <td valign="top" width="31%"><strong>*আবেদনকারীর নাম (ইংরেজিতে):</strong></td>
                                    <td width="31%"><input required="required" onKeyUp="up(this.value)" name="app_eng" type="text" id="app_eng"  /></td>
                                    <td width="13%" style="border:none;"></td>
                                    <td width="25%" style="border:none;"></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>*জন্ম  তারিখ:</strong></td>
                                    <td><input name="dob" required="required" class="dob" type="text" id="dob" placeholder=" Y-m-d"/>
                                    </td>
                                    <td style="border:none;"></td>
                                    <td style="border:none;"></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>* মোবাইল নম্বর :</strong></td>
                                    <td><input required="required" type="text" name="app_mobile" id="app_mobile" /></td>
                                    <td style="border:none;"></td>
                                    <td style="border:none;"></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>*ই-মেইল :</strong></td>
                                    <td><input name="app_email" type="email" id="app_email" placeholder="email@example.com" required="required" style="font-size:1.5em;width:250px;"/></td>
                                    <td style="border:none;"></td>
                                    <td style="border:none;"></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>জাতীয় পরিচয় পত্র নম্বর (যদি থাকে):</strong></td>
                                    <td><input name="app_nid" type="text" id="app_nid" /></td>
                                    <td style="border:none;"></td>
                                    <td style="border:none;"></td>
                                </tr>

                                <tr>
                                    <td valign="top"><strong>*জন্ম নিবন্ধন নম্বর :</strong></td>
                                    <td><input name="app_bid" type="text" id="app_bid" required="required"/></td>
                                    <td><strong>*লিঙ্গ :</strong></td>
                                    <td><input type="radio" class="gender" name="gender" value="পুরুষ" required="required"> &nbsp;&nbsp;পুরুষ<br/>
                                        <input type="radio" class="gender" name="gender" value="মহিলা" style="margin-top:5px;"> &nbsp;&nbsp;মহিলা<br/>
                                        <input type="radio" class="gender" name="gender" value="তৃতীয় লিঙ্গ" style="margin-top:5px;"> &nbsp;&nbsp;তৃতীয় লিঙ্গ
                                    </td>

                                </tr>
                                <tr>
                                    <td valign="top" style="border:none;"><strong>বিশেষ কোটা  :</strong></td>
                                    <td style="border:none;">
                                        <center>
                                            <select class="opt" name="quota" id="qt" onChange="qtchange()" style="width:120px;font-size:1.1em;padding:5px;text-align:center;">
                                                <option value="">প্রযোজ্য নয় </option>
                                                <option value="মুক্তিযোদ্ধা">মুক্তিযোদ্ধা</option>
                                                <option value="প্রতিবন্ধী">প্রতিবন্ধী</option>
                                                <option value="এতিম">এতিম</option>
                                                <option value="পোষ্য">পোষ্য</option>
                                            </select>
                                        </center>
                                    </td>

                                    <td id="quota_relation_label" valign="top" style="border:none; display: none;"><strong>কোটাধারীর সাথে আবেদনকারীর সম্পর্ক : </strong></td>
                                    <td id="quota_relation_option" style="display: none;">
                                        <input type="text" class="quota" name="quota_relation">
                                    </td>

                                    <td style="border:none;">
                                    </td>
                                    <td style="border:none;"></td>
                                </tr>


                                <tr style="border:none;">
                                    <td width="100%" colspan="4" style="border:none;">
                                    </td>
                                </tr>

                            </table>

                            <table id="mytd" width="100%" style="display:none;">
                                <td id="top" valign="top" colspan="2">
                                    *বিশেষ কোটার স্বপক্ষে প্রমাণপত্র   ( ছবির আকার ১০০০x৭৫০ এবং  300 KB এর চেয়ে ছোট হতে হবে)
                                </td>
                                <td style="border:solid 1px #386F11;" colspan="2">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="quota_pic" class="epic" type="file" id="qt_pic" class="btna" onchange="readURL6(this);" />
                                </td>
                            </table>

                            <table>

                                <tr>
                                    <td valign="top"><strong>*সম্প্রদায় :</strong></td>
                                    <td style="border-right:none;">
                                        <center>
                                            <select class="opt commut" onChange="comcheck(this.value)" required="required" id="comm" style="width:100px;font-size:1.1em;padding:5px;text-align:center;">



                                            </select></center>
                                    </td>
                                    <td colspan="2" style="border-left:none;border-top:none;border-right:none;padding:1px;">
                                        <input type ="text" class="inpu" id="comtext" name="community" placeholder="অন্যান্য সম্প্রদায়..." style="width:250px;display:none;"/>
                                    </td>
                                    <td style="border-left:none;"></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>*পিতার নাম   :</strong></td>
                                    <td valign="top"><input name="fathers_name" required="required" type="text" id="fathers_name" /></td>
                                    <td valign="top"><strong>পেশা  :</strong></td>
                                    <td valign="top"><input name="f_occu" type="text" id="f_occu" /></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>পিতা/মাতার মোবাইল নম্বর :</strong></td>
                                    <td valign="top"><input type="text" name="f_mobile" id="f_mobile" /></td>
                                    <td valign="top"></td>
                                    <td valign="top"></td>
                                </tr>

                                <tr>
                                    <td valign="top"><strong>*মাতার নাম  :</strong></td>
                                    <td valign="top"><input name="mothers_name" required="required" type="text" id="mothers_name" /></td>
                                    <td valign="top" style="border-top:solid 1px #386F11;"><strong>পেশা  :</strong></td>
                                    <td valign="top" style="border-top:solid 1px #386F11;"><input name="m_occu" type="text" id="m_occu"/></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>*অভিভাবকের নাম  :</strong></td>
                                    <td valign="top"><input name="g_name" required="required" type="text" id="g_name" /></td>
                                    <td valign="top"><strong>*আবেদনকারীর সাথে সম্পর্ক  :</strong></td>
                                    <td valign="top"><input name="g_relation" required="required" type="text" id="g_relation" /></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>*পিতা/অভিভাবকের বাৎসরিক আয় :</strong></td>
                                    <td valign="top"><input name="g_y_income" required="required" type="text" id="g_y_income" /></td>
                                    <td valign="top"><strong>*মোবাইল নম্বর:</strong></td>
                                    <td valign="top"><input required="required" type="text" name="g_mobile" id="g_mobile" /></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="headd">*আবেদনকারী/অভিভাবকের ব্যাংক হিসাবের বিবরণ  :</div>
                            <table border="1" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
                                <tbody>
                                <tr>
                                    <td width="31%" valign="top"><strong>ব্যাংক  হিসাব নম্বর :</strong></td>
                                    <td width="27%"><input name="b_ac" type="text" id="b_ac" required="required" /></td>
                                    <td width="17%" valign="top"><strong>হিসাবধারীর নাম :</strong></td>
                                    <td width="25%"><input name="b_ac_name" type="text" id="b_ac_name" required="required" /></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>ব্যাংকের নাম :</strong></td>
                                    <td><input name="b_dist" type="text" id="b_dist" required="required" /></td>
                                    <td valign="top"><strong>শাখা :</strong></td>
                                    <td><input name="b_branch" type="text" id="b_branch" required="required" /></td>
                                </tr>
                                <tr>
                                    <td><strong>*হিসাবধারীর সাথে আবেদনকারীর সম্পর্ক  :</strong></td>
                                    <td>
                                        <input type="radio" class="relation_with_applicant" name="relation_with_applicant" value="মা" style="margin-top:5px;"> মা
                                        <input type="radio" class="relation_with_applicant" name="relation_with_applicant" value="বাবা" style="margin-top:5px;"> বাবা
                                        <input type="radio" class="relation_with_applicant" name="relation_with_applicant" value="নিজস্ব" style="margin-top:5px;"> নিজস্ব
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="headd">*ঠিকানা :</div>
                            <table border="1" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
                                <tbody>
                                <tr>
                                    <td valign="top" width="24%"><strong>বিবরণ</strong></td>
                                    <td valign="top" width="38%"><strong>স্থায়ী</strong></td>
                                    <td valign="top" width="38%"><strong>বর্তমান  <input type="checkbox" id="mycheck" onClick="changeit()" style="margin-left:62px;"/>&nbsp;&nbsp;স্থায়ী ঠিকানার অনুরূপ</strong></td>
                                </tr>
                                <tr>
                                    <td valign="top" height="24"><strong>বাড়ি নং/রোড নং.</strong></td>
                                    <td><input name="pa_house" type="text" id="pa_house"  required="required"/></td>
                                    <td><input name="pr_house" type="text" id="pr_house" onKeyUp="house()" required="required" /></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>গ্রাম/ওয়ার্ড</strong></td>
                                    <td><input name="pa_vill" type="text" id="pa_vill" required="required" /></td>
                                    <td><input name="pr_vill" type="text" id="pr_vill" onKeyUp="vill()" required="required" /></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>ডাকঘর</strong></td>
                                    <td><input name="pa_post" type="text" id="pa_post" required="required" /></td>
                                    <td><input name="pr_post" type="text" id="pr_post" onKeyUp="pst()" required="required"/></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>জেলা</strong></td>
                                    <td>
                                        <select class="opt pa_dist" name="pa_dist" onChange="changekar(this.value)" id="sday"  required="required">

                                        </select>
                                    </td>

                                    <span id="hideranga" style="display:none;">
	<option value="">-নির্বাচন করুন-</option>
	<option value="রাঙামাটি সদর">রাঙামাটি সদর</option>
	<option value="বরকল">বরকল</option>
	<option value="বিলাইছড়ি">বিলাইছড়ি</option>
	<option value="জুরাইছড়ি">জুরাইছড়ি</option>
	<option value="বাঘাইছড়ি">বাঘাইছড়ি</option>
	<option value="কাপ্তাই">কাপ্তাই</option>
	<option value="কাউখালী">কাউখালী</option>
	<option value="নানিয়ারচর">নানিয়ারচর</option>
	<option value="রাজস্থলী">রাজস্থলী</option>
	<option value="লংগদু">লংগদু</option>

</span>

                                    <span id="hidebandar" style="display:none;">
	<option value="">-নির্বাচন করুন-</option>
	<option value="বান্দরবান সদর">বান্দরবান সদর</option>
	<option value="লামা">লামা</option>
	<option value="আলী কদম">আলী কদম</option>
	<option value="নাইক্ষ্যংছড়ি">নাইক্ষ্যংছড়ি</option>
	<option value="রুমা">রুমা</option>
	<option value="থানচি ">থানচি</option>
	<option value="রোয়াংছড়ি">রোয়াংছড়ি</option>
</span>



                                    <span id="hidekhag" style="display:none;">
	<option value="">-নির্বাচন করুন-</option>
	<option value="খাগড়াছড়ি সদর">খাগড়াছড়ি সদর</option>
	<option value="দীঘিনালা">দীঘিনালা</option>
	<option value="লক্ষ্মীছড়ি">লক্ষ্মীছড়ি</option>
	<option value="মহালছড়ি">মহালছড়ি</option>
	<option value="মাটিরাঙা">মাটিরাঙা</option>
	<option value="গুইমারা ">গুইমারা</option>
	<option value="পানছড়ি">পানছড়ি</option>
	<option value="মানিকছড়ি">মানিকছড়ি</option>
	<option value="রামগড়">রামগড়</option>
</span>

                                    <td>
                                        <input name="pr_dist" type="text" id="pr_dist" required="required" />
                                    </td>
                                </tr>


                                <tr>
                                    <td valign="top"><strong>উপজেলা</strong></td>
                                    <td>

<span id="upoz">

<select class="opt pa_subdist" name="pa_subdist" id="upz"  required="required">
	<option value="">-নির্বাচন করুন-</option>
	<option value="রাঙামাটি সদর">রাঙামাটি সদর</option>
	<option value="বরকল">বরকল</option>
	<option value="বিলাইছড়ি">বিলাইছড়ি</option>
	<option value="জুরাইছড়ি">জুরাইছড়ি</option>
	<option value="বাঘাইছড়ি">বাঘাইছড়ি</option>
	<option value="কাপ্তাই">কাপ্তাই</option>
	<option value="কাউখালী">কাউখালী</option>
	<option value="নানিয়ারচর">নানিয়ারচর</option>
	<option value="রাজস্থলী">রাজস্থলী</option>
	<option value="লংগদু">লংগদু</option>
</select>

</span>

                                    </td>

                                    <td>

                                        <input name="pr_subdist" type="text" id="pr_subdist" required="required" />

                                    </td>

                                </tr>
                                </tbody>
                            </table>

                            <div class="headd">
                                শিক্ষাগত যোগ্যতা:</div>
                            <table border="1" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
                                <tbody>
                                <tr>

                                    <td valign="top" width="12.5%"><strong><center>পরীক্ষার নাম</center></strong></td>
                                    <td valign="top" width="12.5%"><strong><center>বিষয়/বিভাগ</center></strong></td>
                                    <td valign="top" width="12.5%"><strong><center>রোল নং </center></strong></td>
                                    <td valign="top" width="12.5%"><strong><center>বিভাগ/জিপিএ</center></strong></td>
                                    <td valign="top" width="12.5%" style="text-align:center;font-weight:bold;">
                                        ফলাফল
                                    </td>
                                    <td valign="top" width="12.5%" class="quote" style="text-align:center;font-weight:bold;">
                                        কত এর মধ্যে
                                    </td>
                                    <td valign="top" width="12.5%"><strong><center>পাশের সাল</center></strong></td>
                                    <td valign="top" width="12.5%"><strong><center>বোর্ড/বিশ্ববিদ্যালয়</center></strong></td>

                                </tr>
                                <tr>
                                    <td valign="top"><strong>*এস.এস.সি/সমমান :</strong></td>
                                    <td><input name="ssc_group" type="text" id="ssc_group" required="required"/></td>
                                    <td><input name="ssc_roll" type="text" id="ssc_roll" required="required"/></td>
                                    <td style="text-align:center;">
                                        <select style="text-align:center;padding:5px;font-size:1.1em;" id="definessc">
                                            <option value="জিপিএ">জিপিএ</option>
                                        </select>

                                        <input name="ssc_gpa" type="text" id="ssc_gpa" style="display:none;"/>

                                    </td>

                                    <td style="text-align:center;">
                                        <center>
                                            <input type="text" name="ssc_p" class="ssc_p" id="ssc_p" placeholder="জিপিএ..." required="required"/>
                                        </center>
                                    </td>
                                    <td style="text-align:center;">

                                        <select style="text-align:center;padding:5px;font-size:1.1em;" id="sscrange" onChange="ssc_range(this.value)">
                                            <option value="৫">৫</option>
                                        </select>


                                    </td>

                                    <td><input name="ssc_year" type="text" id="ssc_year" required="required"/></td>
                                    <td><input name="ssc_board" type="text" id="ssc_board" required="required"/></td>
                                </tr>
                                <tr>
                                    <td valign="top"><strong>এইচ.এস.সি/সমমান/ ডিপ্লোমা :</strong></td>
                                    <td><input name="hsc_group" type="text" id="hsc_group"/></td>
                                    <td><input name="hsc_roll" type="text" id="hsc_roll"/></td>

                                    <td style="text-align:center;">
                                        <select style="text-align:center;padding:5px;font-size:1.1em;" id="definehsc">
                                            <option value="জিপিএ">জিপিএ</option>
                                        </select>

                                        <input name="hsc_cgpa" type="text" id="hsc_cgpa" style="display:none;"/>

                                    </td>

                                    <td style="text-align:center;">
                                        <center>

                                            <input type="text" class="hsc_p" id="hsc_p" onKeyUp="hscp()" placeholder="জিপিএ..."/>

                                        </center>

                                    </td>
                                    <td style="text-align:center;">

                                        <select style="text-align:center;padding:5px;font-size:1.1em;" id="hscrange" onChange="hsc_range(this.value)">
                                            <option value="">- নির্বাচন করুন -</option>
                                            <option value="৪">৪</option>
                                            <option value="৫">৫</option>
                                        </select>


                                    </td>
                                    <td><input name="hsc_year" type="text" id="hsc_year"/></td>
                                    <td><input name="hsc_board" type="text" id="hsc_board"/></td>
                                </tr>
                                <td valign="top"><strong>স্নাতক/সমমান :</strong></td>
                                <td><input name="grad_group" type="text" id="grad_group"/></td>
                                <td><input name="grad_roll" type="text" id="grad_roll" /></td>

                                <td style="text-align:center;">
                                    <select style="text-align:center;padding:5px;font-size:1.1em;" id="definegrad" onChange="gradcheck(this.value)">
                                        <option value="বিভাগ">বিভাগ</option>
                                        <option value="জিপিএ">জিপিএ</option>
                                    </select>

                                    <input name="grad_cgpa" type="text" id="grad_cgpa" style="display:none;"/>

                                </td>

                                <td style="text-align:center;">
                                    <center>
                                        <select style="text-align:center;padding:5px;font-size:1.1em;" class="grad_select" id="grad_select" onchange="graddiv(this.value)">
                                            <option value=""></option>
                                            <option value="১ম">১ম</option>
                                            <option value="২য়">২য়</option>
                                            <option value="৩য়">৩য়</option>
                                        </select>

                                        <input type="text" class="grad_p" id="grad_p" onKeyUp="gradp()" placeholder="জিপিএ..." style="display:none;"/>

                                    </center>

                                </td>
                                <td style="text-align:center;">

                                    <p class="grad_range" style="display:none;">
                                        <select style="text-align:center;padding:5px;font-size:1.1em;" id="gradrange" onChange="grad_range(this.value)">
                                            <option value="৪">৪</option>

                                        </select>
                                    </p>

                                    <p class="nottograd">
                                        -
                                    </p>

                                </td>

                                <td><input name="grad_year" type="text" id="grad_year" /></td>
                                <td><input name="grad_board" type="text" id="grad_board" /></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="headd">*বর্তমান পড়াশোনার  বিবরণ :</div>
                            <table border="1" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
                                <tbody>
                                <tr>
                                    <td width="21%" valign="top"><strong>শ্রেণী/ডিগ্রি (অধ্যয়নরত):</strong></td>
                                    <td width="28%">
                                        <select name="cr_degree" style="font-size:1.2em;" onChange="current()" id="crdegree" required="required">
                                            <option value="">- নির্বাচন করুন -</option>
                                            <option value="এইচএসসি/সমমান">এইচএসসি/সমমান</option>
                                            <option value="ডিপ্লোমা">ডিপ্লোমা</option>
                                            <option value="এমবিবিএস/বিডিএস">এমবিবিএস/বিডিএস</option>
                                            <option value="ডিভিএম">ডিভিএম</option>
                                            <option value="ইঞ্জিনিয়ারিং">ইঞ্জিনিয়ারিং</option>
                                            <option value="স্নাতক (পাশ)">স্নাতক (পাশ)</option>
                                            <option value="স্নাতক/সম্মান">স্নাতক/সম্মান</option>
                                            <option value="স্নাতকোত্তর">স্নাতকোত্তর</option>
                                        </select>

                                    </td>
                                    <td width="21%" valign="top"><strong>বিভাগ/বিষয় (অধ্যয়নরত):</strong></td>
                                    <td width="30%"><input name="cr_subject" type="text" id="cr_subject" required="required" /></td>
                                </tr>

                                <tr>
                                    <td valign="top"><strong>সেমিস্টার /বর্ষ (অধ্যয়নরত):</strong></td>
                                    <td>
                                        <select name="cr_what" style="font-size:1.2em;padding:5px;text-align:center;" onChange ="chrome()" id="crwhat" required="required">
                                            <option value="">- নির্বাচন করুন -</option>
                                            <option value="বর্ষ">বর্ষ</option>
                                        </select>

                                        <select name="cr_semester" style="font-size:1.2em;margin-left:20px;padding:5px;text-align:center;" id="crsemester">
                                            <option value="">- নির্বাচন করুন -</option>
                                            <option value="১ম">১ম</option>
                                            <option value="২য়">২য়</option>
                                        </select>
                                    </td>


                                    <span id="yrhsc" style="display:none">
	<option value="">- নির্বাচন করুন -</option>
	<option value="১ম">১ম</option>
	<option value="২য়">২য়</option>
</span>

                                    <span id="semall" style="display:none">
	<option value="">- নির্বাচন করুন -</option>
	<option value="১ম">১ম</option>
	<option value="২য়">২য়</option>
	<option value="৩য়">৩য়</option>
	<option value="৪র্থ">৪র্থ</option>
	<option value="৫ম">৫ম</option>
	<option value="৬ষ্ঠ">৬ষ্ঠ</option>
	<option value="৭ম">৭ম</option>
	<option value="৮ম">৮ম</option>
	<option value="৯ম">৯ম</option>
	<option value="১০ম">১০ম</option>
	<option value="১১তম">১১তম</option>
	<option value="১২তম">১২তম</option>
</span>

                                    <span id="yrall" style="display:none">
	<option value="">- নির্বাচন করুন -</option>
	<option value="১ম">১ম</option>
	<option value="২য়">২য়</option>
	<option value="৩য়">৩য়</option>
	<option value="৪র্থ">৪র্থ</option>
	<option value="৫ম">৫ম</option>
</span>


                                    <span id="semall2" style="display:none">
	<option value="">- নির্বাচন করুন -</option>
	<option value="১ম">১ম</option>
	<option value="২য়">২য়</option>
	<option value="৩য়">৩য়</option>
	<option value="৪র্থ">৪র্থ</option>
</span>

                                    <span id="yrall2" style="display:none">
	<option value="">- নির্বাচন করুন -</option>
	<option value="১ম">১ম</option>
	<option value="২য়">২য়</option>
</span>


                                    <span id="hidehsc" style="display:none">
<option value="">- নির্বাচন করুন -</option>
	<option value="বর্ষ">বর্ষ</option>
</span>

                                    <span id="hidessc" style="display:none">
	<option value=""></option>
</span>

                                    <span id="hiderest" style="display:none">
<option value="">- নির্বাচন করুন -</option>
	<option value="বর্ষ">বর্ষ</option>
	<option value="সেমিস্টার">সেমিস্টার</option>
</span>

                                    <td valign="top">&nbsp;</td>
                                    <td style="border-left:none;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="21%" valign="top"><strong>সর্বশেষ উত্তীর্ণ শ্রেণী/ডিগ্রি :</strong></td>
                                    <td width="28%">
                                        <select name="last_degree" style="font-size:1.2em;" onChange="current2()" id="ldegree" required="required">
                                            <option value="">- নির্বাচন করুন -</option>
                                            <option value="এসএসসি/সমমান">এসএসসি/সমমান</option>
                                            <option value="এইচএসসি/সমমান">এইচএসসি/সমমান</option>
                                            <option value="ডিপ্লোমা">ডিপ্লোমা</option>
                                            <option value="এমবিবিএস/বিডিএস">এমবিবিএস/বিডিএস</option>
                                            <option value="ডিভিএম">ডিভিএম</option>
                                            <option value="ইঞ্জিনিয়ারিং">ইঞ্জিনিয়ারিং</option>
                                            <option value="স্নাতক (পাশ)">স্নাতক (পাশ)</option>
                                            <option value="স্নাতক/সম্মান">স্নাতক/সম্মান</option>
                                        </select>
                                    </td>
                                    <td width="21%" valign="top"><strong>সর্বশেষ উত্তীর্ণ সেমিষ্টার/ বর্ষঃ</strong></td>
                                    <td width="30%">
                                        <select name="last_what" style="font-size:1.2em;padding:5px;text-align:center;" onChange="chrome2()" id="lwhat">
                                            <option value=""></option>
                                        </select>

                                        <select name="last_semester" style="font-size:1.2em;margin-left:20px;padding:5px;text-align:center;" id="lsemester">
                                            <option value=""></option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td valign="top" id="impotext" style="font-weight:bold;">সর্বশেষ উত্তীর্ণ শ্রেণি/ডিগ্রি অথবা সেমিষ্টার/বর্ষের জিপিএ/বিভাগঃ</td>
                                    <td>

                                        <p id="mygpa">
                                            <strong>জিপিএ/বিভাগ :&nbsp;&nbsp;&nbsp;</strong>
                                            <select style="text-align:center;padding:5px;font-size:1.1em;" name="definecr" id="definecr" onChange="crcheck(this.value)" required="required">
                                                <option value="">- নির্বাচন করুন -</option>
                                                <option value="বিভাগ">বিভাগ</option>
                                                <option value="জিপিএ">জিপিএ</option>
                                            </select>

                                        </p>

                                        <input name="cr_address" type="text" id="cr_address"  required="required" style="display:none;"/>

                                    </td>

                                    <td>

                                        <p id="mygpa2">

                                            <strong>ফলাফল :&nbsp;&nbsp;&nbsp;</strong>
                                            <select style="text-align:center;padding:5px;font-size:1.1em;" class="cr_select" name="cr_division" id="cr_select" onchange="crdiv(this.value)">
                                                <option value="">- নির্বাচন করুন -</option>
                                                <option value="১ম">১ম</option>
                                                <option value="২য়">২য়</option>
                                                <option value="৩য়">৩য়</option>
                                            </select>

                                            <input type="text" name="cr_point" class="cr_p" id="cr_p" onKeyUp="crp()" placeholder="জিপিএ..." style="display:none"/>

                                        </p>
                                    </td>

                                    <td style="border-right:none;">

<span id="mygpa3">

<strong>কত এর মধ্যে :&nbsp;&nbsp;&nbsp;</strong>

<p class="cr_range" id="cr_range" style="display:none;">
<select style="text-align:center;padding:5px;font-size:1.1em;" name="gpa_range" id="crrange" onChange="cr_range(this.value)">
		<option value="৫">৫</option>
</select>

</p>

<span class="nottocr">
-
</span>

</span>

                                    </td>

                                </tr>


                                <tr>
                                    <td valign="top"><strong>নম্বর (যদি থাকে):</strong></td>

                                    <td>

                                        <input type="text" id="carlmarks" name="cr_marks" />

                                    </td>


                                    <span id="yrhsc" style="display:none">
	<option value="১ম">১ম</option>
	<option value="২য়">২য়</option>
</span>

                                    <td valign="top">&nbsp;</td>
                                    <td style="border-left:none;">&nbsp;</td>
                                </tr>

                                <tr>
                                    <td valign="top"><strong>বর্তমান শিক্ষা প্রতিষ্ঠান :</strong></td>
                                    <td><input name="cr_inst" type="text" id="cr_inst" required/></td>
                                    <td valign="top"><strong>ঠিকানা :</strong></td>
                                    <td valign="top"><input name="cr_address2" type="text" id="cr_address2" required/></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="headd">*আবেদনকারীর স্বাক্ষরের ছবি   ( ছবির আকার ৩০০x৮০ এবং 100 KB এর চেয়ে ছোট হতে হবে)  : </div>
                            <table border="1" width="100%" bgcolor="#FFFFFF">
                                <tbody>
                                <tr>
                                    <td><input name="app_sign" type="file" id="signature" onchange="readURLa(this);" class="btna" required="required" /></td>
                                </tr>
                                </tbody>
                            </table>
                            <table border="1" width="100%">
                                <tbody>
                                <tr>
                                    <td bgcolor="#83C93D"><div class="headd">নিম্নোক্ত কাগজসমূহের ছবি আপলোড করুন   ( ছবির আকার ১০০০x৭৫০ এবং  300 KB এর চেয়ে ছোট হতে হবে) :</div></td>
                                </tr>
                                <tr>
                                    <td bgcolor="#FFFFFF"><table width="100%" border="1">
                                            <tr>
                                                <td valign="top">*  ১. উপজেলা চেয়ারম্যান/ পৌরসভা মেয়র / ইউপি চেয়ারম্যান / প্রতিষ্ঠানের প্রধানের  (যদি পিতা/অভিভাবক চাকুরীজীবী হোন)  পক্ষ হতে পিতা/অভিভাবকের আয় সংক্রান্ত প্রত্যয়নপত্র : </td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><input name="father_income_attachment" onchange="readURL1(this);"  type="file" id="father_income_attachment"  class="btna" required="required"/></td>
                                            </tr>
                                            <tr>
                                                <td valign="top">*  ২. সর্বশেষ সেমিস্টার/লেভেল/বর্ষের নম্বরপত্র অথবা সার্টিফিকেট :</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><input name="exam_sheet_attachment" onchange="readURL2(this);"  type="file" id="exam_sheet_attachment" class="btna" required="required" /></td>
                                            </tr>
                                            <tr>
                                                <td valign="top">*  ৩. শিক্ষা প্রতিষ্ঠানে অধ্যয়নের স্বপক্ষে প্রতিষ্ঠান প্রধান/বিভাগীয় প্রধানের প্রত্যয়ন পত্র :</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><input name="inst_attachment" type="file" onchange="readURL3(this);"  id="inst_attachment"  class="btna" required="required"/></td>
                                            </tr>
                                            <tr>
                                                <td valign="top">*  ৪.  স্থায়ী বাসিন্দার স্বপক্ষে সনদপত্র  (জেলা প্রশাসক / সার্কেল চিফ কর্তৃক প্রদত্ত)</td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><input name="com_attachment" type="file" onchange="readURL4(this);"  id="com_attachment" class="btna" required="required" /></td>
                                            </tr>
                                            <tr>
                                                <td valign="top"><table width="100%" border="0">
                                                        <tr>
                                                            <td>
                                                                * চিহ্নিত তথ্যগুলো  পূরণ করা আবশ্যক ।<br/><br/>
                                                                <input type="checkbox" id="hello"  name="checkbox" value="checkbox" />
                                                                আমি সাক্ষ্য দিচ্ছি যে উল্লিখিত সকল তথ্য সত্য এবং সঠিক। যদি কোনো তথ্য মিথ্যা প্রমাণিত হয় তবে আমি  কর্তৃপক্ষের নেয়া যে কোনো ব্যবস্থা মেনে নেবো
                                                            </td>
                                                        </tr>
                                                    </table></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table border="1" width="100%" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
                                <tbody>
                                <tr>
                                    <td width="31%"><strong>কোডটি প্রবেশ করান : &nbsp;&nbsp;&nbsp;<p id="code"></p></strong></td>
                                    <td width="69%"><input name="code_id" type="text" id="myinput" /></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="subbut" id="dekhao">
                                <input name="submit" id="gapply" type="submit" value="আবেদন করুন" class="btnsub" onClick="check(event)" style="font-weight:bold;border-radius:8px;box-shadow:2px 2px 3px 4px rgb(83,157,2)"/>
                            </div>
                        </div>
                    </td>
                </tr>
</form>
</div>

</tbody>
</table>

<div id=footer>
    <a href="http://banglasofttech.com"><h3 id="footerLine">© Developed by BanglaSoftTech</h3></a>
</div>


<span id="store" style="display:none;"></span>
<span id="store2" style="display:none">unchecked</span>
<span id="pwidth" style="display:none"></span>
<span id="pheight" style="display:none"></span>
<span id="swidth" style="display:none"></span>
<span id="sheight" style="display:none"></span>
<span id="width1" style="display:none"></span>
<span id="height1" style="display:none"></span>
<span id="width2" style="display:none"></span>
<span id="height2" style="display:none"></span>
<span id="width3" style="display:none"></span>
<span id="height3" style="display:none"></span>
<span id="width4" style="display:none"></span>
<span id="height4" style="display:none"></span>
<span id="qwidth" style="display:none"></span>
<span id="qheight" style="display:none"></span>
<span class="hideselect" id="hideselect" style="display:none">
		<option value=""></option>
		<option value="১ম">১ম</option>
		<option value="২য়">২য়</option>
		<option value="৩য়">৩য়</option>
</span>

<span id="hideoption" style="display:none;">
	<option value="বিভাগ">বিভাগ</option>
	<option value="জিপিএ">জিপিএ</option>
</span>
<span id="p1" style="display:none"></span>
<span id="p2" style="display:none"></span>
<span id="p3" style="display:none"></span>
<span id="p4" style="display:none"></span>
<span id="p5" style="display:none"></span>
<span id="p6" style="display:none"></span>
<span id="q6" style="display:none"></span>

<span id="gpatext" style="display:none;">সর্বশেষ উত্তীর্ণ সেমিস্টার/বর্ষের জিপিএ/বিভাগ :</span>
<span id="medicaltext" style="display:none;">সর্বশেষ বর্ষের নম্বর<br/> (শুধুমাত্র এমবিবিএস/বিডিএস ছাত্র/ছাত্রীদের জন্য) : </span>
</div>

<span id="takecomm" style="display:none;">
	<option value="">-নির্বাচন করুন-</option>
	<option value="চাকমা">চাকমা</option>
	<option value="মারমা">মারমা</option>
	<option value="ত্রিপুরা">ত্রিপুরা</option>
	<option value="তঞ্চঙ্গা">তঞ্চঙ্গা</option>
	<option value="লুসাই">লুসাই</option>
	<option value="পাংখো">পাংখো</option>
	<option value="বম">বম</option>
	<option value="ম্রো">ম্রো</option>
	<option value="খিয়াং">খিয়াং</option>
	<option value="খুমি">খুমি</option>
	<option value="চাক">চাক</option>
	<option value="বাঙালি">বাঙালি</option>
	<option value="অন্যান্য">অন্যান্য</option>
</span>

<span id="bringranga" style="display:none;">
	<option value="">-নির্বাচন করুন-</option>
	<option value="রাঙামাটি">রাঙামাটি</option>
	<option value="বান্দরবান">বান্দরবান</option>
	<option value="খাগড়াছড়ি">খাগড়াছড়ি</option>
</span>


<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/index_jQuery.js?v1.1') }}"></script>

<script>

    $(document).ready(function(){

        $("*").css("font-family","solaiman");

        $("#dob").datepicker({
            dateFormat: "yy-mm-dd",
            yearRange:"1960:2020",
            changeMonth: true,
            changeYear: true
        });

        $("#crwhat").change(function(e){
            if($(this).val()==="বর্ষ" && $("#crdegree").val()==="স্নাতকোত্তর"){
                $("#crsemester").html($("#yrall2").html());
            }else if($(this).val()==="সেমিস্টার" && $("#crdegree").val()==="স্নাতকোত্তর"){
                $("#crsemester").html($("#semall2").html());
            }
        });
    });

</script>
</body>

</html>
