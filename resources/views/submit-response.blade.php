<html>
<head>
    <meta charset="UTF-8"/>
    <title>অভিনন্দন!</title>

    <style type="text/css">
        *{margin:0;padding:0;font-family:verdana;}
        a{text-decoration:none;}
        body{padding:3px;} .menubar{margin:0;width:100%;height:auto;background:{{public_path('images/back.jpg')}} no-repeat;background-size:cover; border:none;}.mymenu{width:98%;
                                                                                                                                               background:{{public_path('images/back.jpg')}} no-repeat;background-size:cover;border:none;}
        .menuleft{width:70%;border:none;} .menuright{width:32%;border:none;} .plink{color:rgb(237,255,200);text-decoration:none;padding:18px;font-weight:bold;border:none;}
        .setright{text-align:right;border:none;}
        .bdesh{ color: white;padding: 10px 12px; text-align: center; text-decoration: none;font-size:1.2em;border-radius:5px;border:1px solid rgb(3,33,78);font-size:1.2em;padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold;
            background-color: #6EB0E9;background-image: -webkit-gradient(linear, left top, left bottom, from(#6EB0E9), to(#699314));background-image: -webkit-linear-gradient(top, #6EB0E9, rgb(5,50,70)); background-image: -moz-linear-gradient(top, #6EB0E9, rgb(5,50,70));background-image: -ms-linear-gradient(top, #6EB0E9, rgb(5,50,70)); background-image: -o-linear-gradient(top, #6EB0E9, rgb(5,50,70));background-image: linear-gradient(to bottom, #6EB0E9, rgb(5,50,70));}.bdesh:hover{cursor:pointer;}.plink:hover{text-shadow: -1px -1px 0 rgba(0,0,0,0.3); border-radius:5px;background-color:rgb(77,149,72);border-bottom:solid 1px white;}.sear{width:100%;} .form-group{width:70%;min-height:400px; padding:22px; margin:0 auto;border-radius:16px;border:solid 2px rgb(37,90,85);box-shadow:1px 1px 20px 4px rgb(37,90,85);} .lbl{font-weight:bold; color:rgb(34,83,78);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     text-shadow:2px 2px 2px rgb(77,149,72); font-size:2em;text-align:right;} .oye{text-align:right;}.inpu{width:320px;height:35px;background-color:rgb(238,251,227);text-align:right;}
        .inpu:focus{background-color: rgb(228,248,209);box-shadow:inset 2px 2px 2px 1px rgb(184,227,122);}				.page{padding:8px;color:rgb(216,246,254);font-size:2em;font-weight:bold;height:auto;text-shadow: -1px -1px 5px rgba(0,0,0,0.3);}.menuleft{width:50%;} .menuright{width:50%;}
        #sday{font-size:0.9em;padding:5px;text-align:center;}.opt{width:150px;background-color:rgb(228,248,209);}
        .hd{font-weight:bold; color:rgb(34,83,78); font-size:1.1em;text-align:right;padding-bottom:8px;}
        .sear{background:{{public_path('images/back2.jpg')}} no-repeat; background-size:cover;min-height:1080px;}
        .tab{width:100%;} .tabq{width:100%;}
        .a1, .a2, .a3{width:33%;}
        .message{width:78%;border:solid 2px rgb(26,87,132);border-radius:40px;margin:0 auto;
            box-shadow:2px 2px 10px 2px rgb(26,87,132);}
        .congrats{color:rgb(26,87,132);font-size:1.8em;font-weight:bold;text-align:center;}

        @media (max-width:940px){.menuleft{width:50%;}.menuright{width:50%;}}
        @media (max-width:700px){.menuleft{width:50%;}.menuright{width:50%;} .page{font-size:1.5em;}}
        @media (max-width:300px){.page{font-size:1.2em;}}
    </style>
</head>

<body>

<div class="menubar" style="font-family:verdana;">
    <center>
        <table class="mymenu">
            <br/>
            <tr class="fc">
                <td class="menuleft">
                    <p class="page" id="page">নিবন্ধন</p>
                </td>

                <td class="menuright">

                    <p class="setright">
                        <a href="{{ route('form') }}" class="plink" onClick="donto(event)">নিবন্ধন</a>
                    </p>

                <td/>
            </tr>

        </table>
    </center>

</div>

<div class="sear">

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <div class="message">

        <br/><br/><br/><br/><br/><br/>
        @if($success)
            <p class="congrats">
                অভিনন্দন! আপনার আবেদন প্রক্রিয়া সম্পন্ন হয়েছে। আপনার আইডি নং  <b>{{ $applicant->id }}</b>। আইডি নম্বরটি সংগ্রহে রাখুন।
            </p>
        @else
            <p class="congrats">
                দুঃখিত! আপনার আবেদন প্রক্রিয়া সফল হয়নি। পুনরায় সতর্কতার সাথে আবেদন ফর্ম পূরণ করুন।
            </p>
        @endif

        <br/><br/><br/><br/><br/><br/>

    </div>

</div>




</body>

</html>
