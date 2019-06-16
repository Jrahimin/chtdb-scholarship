<html>
<head>
    <meta charset="UTF-8"/>
    <title>খোঁজ করুন</title>

    <style type="text/css">
        *{margin:0;padding:0;font-family:verdana;}
        a{text-decoration:none;}
        body{padding:3px;} .menubar{margin:0;width:100%;height:auto;background:url('images/back.jpg') no-repeat;background-size:cover; border:none;}.mymenu{width:98%;
                                                                                                                                               background:url('images/back.jpg') no-repeat;background-size:cover;border:none;}
        .menuleft{width:70%;border:none;} .menuright{width:32%;border:none;} .plink{color:rgb(237,255,200);text-decoration:none;padding:18px;font-weight:bold;border:none;}
        .setright{text-align:right;border:none;}
        .bdesh{ color: white;padding: 10px 12px; text-align: center; text-decoration: none;font-size:1.2em;border-radius:5px;border:1px solid rgb(3,33,78);font-size:1.2em;padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold;
            background-color: #6EB0E9;background-image: -webkit-gradient(linear, left top, left bottom, from(#6EB0E9), to(#699314));background-image: -webkit-linear-gradient(top, #6EB0E9, rgb(5,50,70)); background-image: -moz-linear-gradient(top, #6EB0E9, rgb(5,50,70));background-image: -ms-linear-gradient(top, #6EB0E9, rgb(5,50,70)); background-image: -o-linear-gradient(top, #6EB0E9, rgb(5,50,70));background-image: linear-gradient(to bottom, #6EB0E9, rgb(5,50,70));}.bdesh:hover{cursor:pointer;}.plink:hover{text-shadow: -1px -1px 0 rgba(0,0,0,0.3); border-radius:5px;background-color:rgb(77,149,72);border-bottom:solid 1px white;}.sear{width:100%;} .form-group{width:70%;min-height:400px; padding:22px; margin:0 auto;border-radius:16px;border:solid 2px rgb(37,90,85);box-shadow:1px 1px 20px 4px rgb(37,90,85);} .lbl{font-weight:bold; color:rgb(34,83,78);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     text-shadow:2px 2px 2px rgb(77,149,72); font-size:2em;text-align:right;} .oye{text-align:right;}.inpu{width:320px;height:35px;background-color:rgb(238,251,227);text-align:right;}
        .inpu:focus{background-color: rgb(228,248,209);box-shadow:inset 2px 2px 2px 1px rgb(184,227,122);}				.page{padding:8px;color:rgb(216,246,254);font-size:2em;font-weight:bold;height:auto;text-shadow: -1px -1px 5px rgba(0,0,0,0.3);}.menuleft{width:50%;} .menuright{width:50%;}
        #sday{font-size:0.9em;padding:5px;text-align:center;}.opt{width:150px;background-color:rgb(228,248,209);}
        .hd{font-weight:bold; color:rgb(34,83,78); font-size:1.1em;text-align:right;padding-bottom:8px;}
        .sear{background:url('images/back2.jpg') no-repeat; background-size:cover;}
        .tab{width:100%;} .tabq{width:100%;}
        .a1, .a2, .a3{width:33%;} #upz{padding:5px;}
        .logout{
            background-color: #a7cfdf; background-image: -webkit-gradient(linear, left top, left bottom, from(#a7cfdf), to(#23538a));
            background-image: -webkit-linear-gradient(top, #a7cfdf, #23538a);
            background-image: -moz-linear-gradient(top, #a7cfdf, #23538a);
            background-image: -ms-linear-gradient(top, #a7cfdf, #23538a);
            background-image: -o-linear-gradient(top, #a7cfdf, #23538a);
            background-image: linear-gradient(to bottom, #a7cfdf, #23538a);
            border:solid 1px rgb(3,33,78);
        } .lbl, .hd{text-shadow:1px 1px 4px rgb(121,200,192);}

        37,90,85

        @media (max-width:940px){.menuleft{width:50%;}.menuright{width:50%;}}
        @media (max-width:700px){.menuleft{width:50%;}.menuright{width:50%;} .page{font-size:1.5em;}}
        @media (max-width:300px){.page{font-size:1.2em;}}
    </style>
</head>

<body onLoad="setvalue()">

<div class="menubar" style="font-family:verdana;">
    <center>
        <table class="mymenu">
            <br/>
            <tr class="fc">
                <td class="menuleft">
                    <p class="page" id="page">তথ্য খোঁজ</p>
                </td>

                <td class="menuright">

                    <p class="setright">
                        <a href="index.php" class="plink" onClick="donto(event)">মূল পাতা</a>
                        <a href="{{ route('form') }}" class="plink">নিবন্ধন</a>
                    </p>

                <td/>
            </tr>

        </table>
    </center>

</div>

<div class="sear">

    <br/><br/><br/><br/><br/>

    <div class="form-group">
        <h3 style="color: rgb(34,83,78)">বর্তমান অর্থবছরে আবেদনকারীঃ {{ $totalApplicantThisYear }} জন</h3>
        <table width="100%">
            <tr>

                <td width="50%">
                    <br/>

                    <form action="{{ route('search_result') }}" method="get" enctype="multipart/form-data" accept-charset="UTF-8">
                        <br/>

                        <p class="lbl">আইডি দিয়ে বিস্তারিত খোঁজ করুন</p><br/>

                        <br/>
                        <br/>
                        <p class="hd">
                            আইডি
                        </p>

                        <p class="oye">
                            <input type="text" id="id" class="inpu" name="id" placeholder=" আইডি..." required/>
                        </p>

                        <br/>

                        <p class="oye">

                            <input type="submit" class="bdesh" name="submit" id="mybt" value="খোঁজ করুন" />
                        </p>

                    </form>
                </td>

                <td width="50%">

                    <form action="{{ route('search_result') }}" method="get" enctype="multipart/form-data" accept-charset="UTF-8">

                        <br/>
                        <p class="lbl">বিস্তারিত খোঁজ করুন</p><br/>

                        <br/>


                        <br/>

                        <p class="hd">
                            অর্থবছর
                        </p>
                        <p class="oye">
                            <select class="opt" name="financial_year" style="font-size:1em;text-align:center;padding:5px;" id="financial_year">
                                <option value="২০১৭-২০১৮">২০১৭-২০১৮</option>
                                <option value="২০১৮-২০১৯" selected>২০১৮-২০১৯</option>
                                <option value="২০১৯-২০২০">২০১৯-২০২০</option>
                                <option value="২০২০-২০২১">২০২০-২০২১</option>
                                <option value="২০২১-২০২২">২০২১-২০২২</option>
                                <option value="২০২২-২০২৩">২০২২-২০২৩</option>
                                <option value="২০২৩-২০২৪">২০২৩-২০২৪</option>
                                <option value="২০২৪-২০২৫">২০২৪-২০২৫</option>
                            </select>

                            <br/><br/>
                        </p>

                        <p class="oye">

                        <p class="hd">
                            জেলা
                        </p>

                        <p class="oye">
                            <select class="opt" name="dist" onChange="changekar(this.value)" id="sday" style="font-size:1em;">
                                <option value=""></option>
                                <option value="রাঙামাটি">রাঙামাটি</option>
                                <option value="বান্দরবান">বান্দরবান</option>
                                <option value="খাগড়াছড়ি">খাগড়াছড়ি</option>
                            </select>
                        </p>
                        </p>

                        <br/>
                        <p class="hd">
                            উপজেলা
                        </p>


                        <p class="oye">


<span id="hideranga" style="display:none;">
	<option value=""></option>
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

                            <span id="hidebandar" style="display:none;">
	<option value=""></option>
	<option value="বান্দরবান সদর">বান্দরবান সদর</option>
	<option value="লামা">লামা</option>
	<option value="আলী কদম">আলী কদম</option>
	<option value="নাইক্ষ্যংছড়ি">নাইক্ষ্যংছড়ি</option>
	<option value="রুমা">রুমা</option>
	<option value="থানচি ">থানচি</option>
	<option value="রোয়াংছড়ি">রোয়াংছড়ি</option>
</span>

                            <span id="hidekhag" style="display:none;">
	<option value=""></option>
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

                            <span id="upoz">


<select class="opt" name="subdist" id="upz" style="font-size:1em;text-align:center;">
	<option value=""></option>
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

                            <br/>

                        <p class="hd">
                            সম্প্রদায়
                        </p>

                        <p class="oye">

                            <select class="opt" onChange="comcheck(this.value)" name="comm" id="comm" style="font-size:1em;padding:5px;text-align:center;">
                                <option value=""></option>
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
                            </select>

                            <br/>

                            <table class="tab">
                                <tr class="tabq">

                                    <td class="a1"></td>
                                    <td class="a2"></td>

                                    <td class="a3">
                        <p class="oye">
                            <input type="text" class="inpu" id="comtext" name="commus" placeholder="অন্যান্য সম্প্রদায়..." style="display:none;"/>
                        </p>
                </td>
            </tr>
        </table>
        <br/>

        </p>

        <p class="hd">
            বর্তমান  শিক্ষা পর্যায়
        </p>

        <p class="oye">
            <select class="opt" name="edu" style="font-size:1em;text-align:center;padding:5px;" id="current">
                <option value=""></option>
                <option value="এইচএসসি/সমমান">এইচএসসি/সমমান</option>
                <option value="ডিপ্লোমা">ডিপ্লোমা</option>
                <option value="এমবিবিএস/বিডিএস">এমবিবিএস/বিডিএস</option>
                <option value="ডিভিএম">ডিভিএম</option>
                <option value="ইঞ্জিনিয়ারিং">ইঞ্জিনিয়ারিং</option>
                <option value="স্নাতক (পাশ)">স্নাতক (পাশ)</option>
                <option value="স্নাতক/সম্মান">স্নাতক/সম্মান</option>
                <option value="স্নাতকোত্তর">স্নাতকোত্তর</option>
            </select>

            <br/><br/><br/>

            <input type="submit" class="bdesh" name="submit" id="mybt" value="খোঁজ করুন" />

        </p>

        </form>

        <br/><br/><br/>
        </td>
        </tr>

        </table>

        <br/>
        <hr/><hr/>

        </form>

        <form action="{{ route('search_result') }}" method="get" enctype="multipart/form-data" accept-charset="UTF-8">
            <br/><br/>
            <p class="lbl">সিনোপসিস আকারে খোঁজ করুন</p>

            <br/><br/>
            <p class="hd">
                অর্থবছর
            </p>
            <p class="oye">
                <select class="opt" name="financial_year" style="font-size:1em;text-align:center;padding:5px;" id="financial_year">
                    <option value="২০১৭-২০১৮">২০১৭-২০১৮</option>
                    <option value="২০১৮-২০১৯" selected>২০১৮-২০১৯</option>
                    <option value="২০১৯-২০২০">২০১৯-২০২০</option>
                    <option value="২০২০-২০২১">২০২০-২০২১</option>
                    <option value="২০২১-২০২২">২০২১-২০২২</option>
                    <option value="২০২২-২০২৩">২০২২-২০২৩</option>
                    <option value="২০২৩-২০২৪">২০২৩-২০২৪</option>
                    <option value="২০২৪-২০২৫">২০২৪-২০২৫</option>
                </select>

                <br/><br/>
            </p>

            <p class="hd">
                বর্তমান  শিক্ষা পর্যায়
            </p>

            <p class="oye">
                <select class="opt" name="edu" style="font-size:1em;text-align:center;padding:5px;" id="current">
                    <option value=""></option>
                    <option value="এইচএসসি/সমমান">এইচএসসি/সমমান</option>
                    <option value="ডিপ্লোমা">ডিপ্লোমা</option>
                    <option value="এমবিবিএস/বিডিএস">এমবিবিএস/বিডিএস</option>
                    <option value="ডিভিএম">ডিভিএম</option>
                    <option value="ইঞ্জিনিয়ারিং">ইঞ্জিনিয়ারিং</option>
                    <option value="স্নাতক (পাশ)">স্নাতক (পাশ)</option>
                    <option value="স্নাতক/সম্মান">স্নাতক/সম্মান</option>
                    <option value="স্নাতকোত্তর">স্নাতকোত্তর</option>
                </select>

            </p>
            <br/>

            <p class="hd">
                জেলা
            </p>

            <p class="oye">
                <select class="opt" name="dist" onChange="changekar2(this.value)" id="sday2" style="font-size:1em;text-align:center;padding:5px;">
                    <option value=""></option>
                    <option value="রাঙামাটি">রাঙামাটি</option>
                    <option value="বান্দরবান">বান্দরবান</option>
                    <option value="খাগড়াছড়ি">খাগড়াছড়ি</option>
                </select>
            </p>
            <br/>
            <p class="hd">
                উপজেলা
            </p>

            <p class="oye">

                <select class="opt" name="subdist" id="upz2" style="font-size:1em;text-align:center;padding:5px;">
                    <option value=""></option>
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
            </p>

            <br/>

            <p class="hd">
                বিশেষ কোটা
            </p>
            <p class="oye">
                <select class="opt" name="quota" id="qt" style="width:120px;font-size:1.1em;padding:5px;text-align:center;">
                    <option value=""> </option>
                    <option value="মুক্তিযোদ্ধা">মুক্তিযোদ্ধা</option>
                    <option value="প্রতিবন্ধী">প্রতিবন্ধী</option>
                    <option value="এতিম">এতিম</option>
                    <option value="পোষ্য">পোষ্য</option>
                </select>
            </p>
            <br/>
            <p class="hd">
                সম্প্রদায়
            </p>

            <p class="oye">
                <select class="opt" onChange="comcheck2(this.value)" name="commus" id="comm2" style="font-size:1em;padding:5px;text-align:center;">
                    <option value=""></option>
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
                </select>

            </p>

            <br/>
            <table>
                <tr>
                    <td width="34%">

                    </td>
                    <td width="50%">

                    </td>

                    <td width="34%">
                        <p class="hd">
                            <input type="text" class="inpu" id="comtext2" name="comm" placeholder="অন্যান্য সম্প্রদায়..." style="display:none;"/>
                        </p>
                    </td>
                </tr>
            </table>

            <br/>

            <p class="oye">

                <input type="submit" class="bdesh" id ="mybt2" name="subtable" value="খোঁজ করুন" />

            </p>
            <br/><br/>

        </form>

        <br/><br/>
    </div>

    <br/><br/>
    <form action="{{ route('logout') }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
        @csrf
        <p class="oye" >
            <input type="submit" class="bdesh logout" style="margin-right:15%;" id="mybt3" name="logout" value=" লগ আউট"/>
        </p>
    </form>

    <br/><br/><br/><br/>


    <br/>
    <br/><br/><br/><br/><br/><br/><br/><br/>

    <span id="hideshow" style="display:none;">hidden</span>


</div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript">

    $(document).ready(function(){

        $("*").css("font-family","solaiman");

    });

    function check(event){
        {
            var ck = document.getElementById("id").value;
            var ck1 = document.getElementById("sday").value;
            var ck2 = document.getElementById("upz").value;
            var ck3 = document.getElementById("comtext").value;
            var ck4 = document.getElementById("current").value;

            if(!ck && !ck1 && !ck2 && !ck3 && !ck4){
                event.preventDefault();
            }
        }
    }

    function check2(event){
        var chk = document.getElementById("sday2").value;
        var chk2 = document.getElementById("upz2").value;

        if(!chk && !chk2){
            event.preventDefault();
        }
    }

    function check3(event){
        //var chk3 = document.getElementById("sday3").value;
        var chk4 = document.getElementById("upz3").value;

        if(!chk4){
            event.preventDefault();
        }
    }


    function comcheck(ak){

        var ha = document.getElementById("comm").value;

        switch(ha){
            case ""	: van("");break;
            case "চাকমা" : van("চাকমা");break;
            case "মারমা" : van("মারমা");break;
            case "ত্রিপুরা" : van("ত্রিপুরা");break;
            case "তঞ্চঙ্গা" : van("তঞ্চঙ্গা");break;
            case "পাংখো" : van("পাংখো");break;
            case "খুমি" :	van("খুমি");break;
            case "লুসাই" :	van("লুসাই");break;
            case "বম" :	van("বম");break;
            case "ম্রো" :	van("ম্রো");break;
            case "খিয়াং" :	van("খিয়াং");break;
            case "চাক" :	van("চাক");break;
            case "বাঙালি" :	van("বাঙালি");break;
            case "অন্যান্য" : blk();break;

        }
    }


    function comcheck2(al){

        var ha2 = document.getElementById("comm2").value;

        switch(ha2){
            case ""	: van2("");break;
            case "চাকমা" : van2("চাকমা");break;
            case "মারমা" : van2("মারমা");break;
            case "ত্রিপুরা" : van2("ত্রিপুরা");break;
            case "তঞ্চঙ্গা" : van2("তঞ্চঙ্গা");break;
            case "পাংখো" : van2("পাংখো");break;
            case "খুমি" :	van2("খুমি");break;
            case "লুসাই" :	van2("লুসাই");break;
            case "বম" :	van2("বম");break;
            case "ম্রো" :	van2("ম্রো");break;
            case "খিয়াং" :	van2("খিয়াং");break;
            case "চাক" :	van2("চাক");break;
            case "বাঙালি" :	van2("বাঙালি");break;
            case "অন্যান্য" : blk2();break;

        }
    }

    function blk(a){
        document.getElementById('comtext').value = "";
        document.getElementById('comtext').style.display="block";
    }

    function van(a){
        document.getElementById('comtext').value = a;
        document.getElementById('comtext').style.display="none";
    }

    function blk2(b){
        document.getElementById('comtext2').value = "";
        document.getElementById('comtext2').style.display="block";
    }

    function van2(b){
        document.getElementById('comtext2').value = b;
        document.getElementById('comtext2').style.display="none";
    }


    function setvalue(){

        var blank = "<select class=\"opt\" name=\"subdist\" id=\"upz\"> <option value=\"\">&nbsp;</option></select>";
        var blank2 = "<select class=\"opt\" name=\"subdist2\" id=\"upz2\"> <option value=\"\">&nbsp;</option></select>";
        var blank3 = "<select class=\"opt\" name=\"subdist2\" id=\"upz3\"> <option value=\"\">&nbsp;</option></select>";

        document.getElementById("sday").value="";
        document.getElementById("sday2").value="";
        //document.getElementById("sday3").value="";
        document.getElementById("upz").innerHTML = blank;
        document.getElementById("upz2").innerHTML = blank2;
        document.getElementById("upz3").innerHTML = blank3;
        document.getElementById("comm").value="";
        document.getElementById("current").value="";
    }

    function changekar(x){var ranga = document.getElementById("hideranga").innerHTML;
        var bandar = document.getElementById("hidebandar").innerHTML;
        var khag  = document.getElementById("hidekhag").innerHTML;
        var xyz = document.getElementById("sday").value;
        switch(xyz)
        {
            case  "":
                document.getElementById("upz").innerHTML ="";
                document.getElementById("upz").innerHTML = blank;break;
            case  "রাঙামাটি":
                document.getElementById("upz").innerHTML ="";
                document.getElementById("upz").innerHTML = ranga;break;
            case  "বান্দরবান":
                document.getElementById("upz").innerHTML ="";
                document.getElementById("upz").innerHTML = bandar;break;

            case "খাগড়াছড়ি":
                document.getElementById("upz").innerHTML ="";
                document.getElementById("upz").innerHTML = khag;break;
        }}


    function changekar2(x){var ranga = document.getElementById("hideranga").innerHTML;
        var bandar = document.getElementById("hidebandar").innerHTML;
        var khag  = document.getElementById("hidekhag").innerHTML;
        var xyz = document.getElementById("sday2").value;
        switch(xyz)
        {
            case  "":
                document.getElementById("upz2").innerHTML ="";
                document.getElementById("upz2").innerHTML = blank2;break;
            case  "রাঙামাটি":
                document.getElementById("upz2").innerHTML ="";
                document.getElementById("upz2").innerHTML = ranga;break;
            case  "বান্দরবান":
                document.getElementById("upz2").innerHTML ="";
                document.getElementById("upz2").innerHTML = bandar;break;

            case "খাগড়াছড়ি":
                document.getElementById("upz2").innerHTML ="";
                document.getElementById("upz2").innerHTML = khag;break;
        }}

    function changekar3(x){var ranga = document.getElementById("hideranga").innerHTML;
        var bandar = document.getElementById("hidebandar").innerHTML;
        var khag  = document.getElementById("hidekhag").innerHTML;
        // var xyz = document.getElementById("sday3").value;
        // switch(xyz)
        // {
        // case  "":
        // document.getElementById("upz3").innerHTML ="";
        // document.getElementById("upz3").innerHTML = blank3;break;
        // case  "রাঙামাটি":
        // document.getElementById("upz3").innerHTML ="";
        // document.getElementById("upz3").innerHTML = ranga;break;
        // case  "বান্দরবান":
        // document.getElementById("upz3").innerHTML ="";
        // document.getElementById("upz3").innerHTML = bandar;break;

        // case "খাগড়াছড়ি":
        // document.getElementById("upz3").innerHTML ="";
        // document.getElementById("upz3").innerHTML = khag;break;
        // }

    }

</script>

</p>
</body>

</html>
