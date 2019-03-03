function setvalue(){
				
					document.getElementById("crdegree").value="";
					document.getElementById("qt").value="";
					document.getElementById("app_mobile").value="";
					document.getElementById("f_mobile").value="";
					document.getElementById("g_mobile").value="";
					document.getElementById("comtext").value="";
					
					
					
					var community = document.getElementById("takecomm").innerHTML;
					document.getElementById("comm").innerHTML = community;
					
					var rangamati = document.getElementById("hideranga").innerHTML;
					document.getElementById("upz").innerHTML = rangamati;
					
					var ranga_dist = document.getElementById("bringranga").innerHTML;
					document.getElementById("sday").innerHTML = ranga_dist;
					
					
					
			var today = new Date();
			
			sec = today.getSeconds();			
			
			
			switch (sec){
					case 0: case 34: setthem('QDKLM78'); break;
					case 1: case 33: setthem('QDKLM78'); break;
					case 2: case 32: setthem('AALFH79'); break;
					case 3: case 31: setthem('SCMLK56'); break;
					case 4: case 36: setthem('DCEAP32'); break;
					case 5: case 37: setthem('FGKWM48'); break;
					case 6: case 39: setthem('GPBCI36'); break;
					case 7: case 38: setthem('HZBWM36'); break;
					case 8: case 35: setthem('QYCCP94'); break;
					case 9: case 40: setthem('SLEQM73'); break;
					case 10: case 41: setthem('HCTOI65'); break;
					case 11: case 43: setthem('ICDMW49'); break;
					case 12: case 45: setthem('BUBCI38'); break;
					case 13: case 47: setthem('LDOMW37'); break;
					case 14: case 49: setthem('UEXDO08'); break;
					case 15: case 42: setthem('JLFOC15'); break;
					case 16: case 46: setthem('ULDQM73'); break;
					case 17: case 48: setthem('NHBOA19'); break;
					case 18: case 44: setthem('YRRAS73'); break;
					case 19: case 50: setthem('EKGPA94'); break;
					case 20: case 51: setthem('DUEHQ19'); break;
					case 21: case 53: setthem('RLVJR21'); break;
					case 22: case 59: setthem('ADQSW57'); break;
					case 23: case 52: setthem('HXAMK47'); break;
					case 24: case 57: setthem('IBIAR39'); break;
					case 25: case 54: setthem('MCBBI54'); break;
					case 26: case 56: setthem('IXAZZ13'); break;
					case 27: case 58: setthem('IBWNI38'); break;
					case 28: case 55: setthem('QOMAL38'); break;
					case 29:setthem('ZMARE84'); break;
					case 30: setthem('PASGF87'); break;
					
				}
				
				var dgpa = "";
			
			document.getElementById("ssc_gpa").value = dgpa;
			document.getElementById("hsc_cgpa").value = dgpa;
			document.getElementById("grad_cgpa").value = dgpa;	
			document.getElementById("cr_address").value = dgpa;
		
				
			}
			
			
			
			function setthem(mycode){			
					document.getElementById('code').innerHTML = mycode;
					document.getElementById('store').innerHTML = mycode;
			}
			
		function check(event){		
        var pa = document.getElementById('app_pic');
        var pb = document.getElementById('signature');
		var pc = document.getElementById('father_income_attachment');
		var pd = document.getElementById('exam_sheet_attachment');
		var pe = document.getElementById('inst_attachment');
		var pf = document.getElementById('com_attachment');
		var qf = document.getElementById('qt_pic');
		var x = document.getElementById("hello").checked;
		
		var carlmarks = document.getElementById("carlmarks").value;
		var craddress = document.getElementById("cr_address").value;
		
		var lastdegree = document.getElementById("ldegree").value;
		
		var pointValue= document.getElementById("cr_p").value;
		
		if(pointValue==="" && carlmarks==="")
		{
			alert("অনুগ্রহ করে সর্বশেষ উত্তীর্ণ শ্রেণি/ডিগ্রি অথবা সেমিষ্টার/বর্ষের জিপিএ/বিভাগ প্রদান করুন");event.preventDefault();
		}
		
		if(lastdegree == "এমবিবিএস/বিডিএস"){			
			document.getElementById("cr_address").value = carlmarks + " নম্বর";		
		}
		
		else{
			document.getElementById("cr_address").value = craddress +" - "+ carlmarks + " নম্বর";
		}
		
		var statement="আবেদনকারীর ছবি এবং স্বাক্ষরের সাইজ 100 KB এর চেয়ে কম হতে হবে";
		var statement2="উল্লিখিত কাগজসমূহের ছবির সাইজ 300 KB এর চেয়ে কম হতে হবে";
		

        if (pa.files.length > 0) {
            for (var i = 0; i <= pa.files.length - 1; i++) {
                var pasize = pa.files.item(i).size;   
				var a = Math.round((pasize / 1024));	
            }
        }
		
		if (pb.files.length > 0) {
            for (var j = 0; j <= pb.files.length - 1; j++) {
                var pbsize = pb.files.item(j).size;   				
				var b = Math.round((pbsize / 1024));
            }
        }		
		if (pc.files.length > 0) {
            for (var k = 0; k <= pc.files.length - 1; k++) {
                var pcsize = pc.files.item(k).size;   				
				var c = Math.round((pcsize / 1024));
            }
        }
		if (pd.files.length > 0) {
            for (var l = 0; l <= pd.files.length - 1; l++) {
                var pdsize = pd.files.item(l).size;   				
				var d = Math.round((pdsize / 1024));
            }
        }		
		if (pe.files.length > 0) {
            for (var m = 0; m <= pe.files.length - 1; m++) {
                var pesize = pe.files.item(m).size;   				
				var e = Math.round((pesize / 1024));
            }
        }		
		if (pf.files.length > 0) {
            for (var n = 0; n <= pf.files.length - 1; n++) {
                var pfsize = pf.files.item(n).size;   				
				var f = Math.round((pfsize / 1024));
			}
        }
		
		 if (qf.files.length > 0) {
            for (var i = 0; i <= qf.files.length - 1; i++) {
                var qasize = qf.files.item(i).size;   
				var g = Math.round((qasize / 1024));	
            }
        }
		
						var m = document.getElementById("app_mobile").value;
						var n = document.getElementById("f_mobile").value;
						var o = document.getElementById("g_mobile").value;
            			var bank_ac_no = document.getElementById("b_ac").value;

						
						var pwidth1 = document.getElementById("pwidth").innerHTML;
						var pheight1 = document.getElementById("pheight").innerHTML;
						var swidth1 = document.getElementById("swidth").innerHTML;
						var sheight1 = document.getElementById("sheight").innerHTML;
						var width11 = document.getElementById("width1").innerHTML;
						var width21 = document.getElementById("width2").innerHTML;
						var width31 = document.getElementById("width3").innerHTML;
						var width41 = document.getElementById("width4").innerHTML;
						var height11 = document.getElementById("height1").innerHTML;
						var height21 = document.getElementById("height2").innerHTML;
						var height31 = document.getElementById("height3").innerHTML;
						var height41 = document.getElementById("height4").innerHTML;
						var qwidth = document.getElementById("qwidth").innerHTML;
						var qheight = document.getElementById("qheight").innerHTML;
						
						var k1 = document.getElementById("p1").innerHTML;
						var k2 = document.getElementById("p2").innerHTML;
						var k3 = document.getElementById("p3").innerHTML;
						var k4 = document.getElementById("p4").innerHTML;
						var k5 = document.getElementById("p5").innerHTML;
						var k6 = document.getElementById("p6").innerHTML;
						var q6 = document.getElementById("q6").innerHTML;
						
						var bang1 = document.getElementById("app_bang").value;
						var bang2 = document.getElementById("app_eng").value;
						var bang3 = document.getElementById("f_occu").value;
						var bang4 = document.getElementById("mothers_name").value;
						var bang5 = document.getElementById("m_occu").value;
						var bang6 = document.getElementById("g_name").value;
						var bang7 = document.getElementById("g_relation").value;
						
						var eng1 = document.getElementById("app_eng").value;
						var eng2 = document.getElementById("app_email").value;
						
						var s = m.length;
						var t = n.length;
						var u = o.length;
						var bank_acc_len = bank_ac_no.length;
		
		if(a>100 || b>100){alert(statement);event.preventDefault();}
		
		else if( c>300 || d>300 || e>300 || f>300 || g>300){alert(statement2);event.preventDefault();}
		else if(k1){
				if(pwidth1!=300 || pheight1!=300){
					alert("আবেদনকারীর ছবির আকার ৩০০x৩০০ হতে হবে");event.preventDefault();}}
		else if(k2){	
			if(swidth1!=300 || sheight1!=80){
		alert("আবেদনকারীর স্বাক্ষরের ছবির আকার ৩০০X৮০ হতে হবে");
		event.preventDefault();}}
		
		else if(k3){		
		if(width11!=1000 || height11!=750){
		alert("দলিলসমূহের ছবির আকার ১০০০x৭৫০ হতে হবে");
		event.preventDefault();}}
		
		else if(k4){		
		if(width21!=1000 || height21!=750){
		alert("দলিলসমূহের ছবির আকার ১০০০x৭৫০ হতে হবে");
		event.preventDefault();}}
		
		else if(k5){		
		if(width31!=1000 || height31!=750){
		alert("দলিলসমূহের ছবির আকার ১০০০x৭৫০ হতে হবে");
		event.preventDefault();}}
		
		else if(k6){		
		if(width41!=1000 || height41!=750){
		alert("দলিলসমূহের ছবির আকার ১০০০x৭৫০ হতে হবে");
		event.preventDefault();}}
		
		else if(q6){		
		if(qwidth!=1000 || qheight!=750){
		alert("দলিলসমূহের ছবির আকার ১০০০x৭৫০ হতে হবে");
		event.preventDefault();}}

		else if(bank_acc_len>16 || bank_acc_len<13){
            alert('দয়া করে ব্যাংক একাউন্ট নাম্বার চেক করুন। ১৩ থেকে ১৬ ডিজিটের ব্যাংক একাউন্ট নম্বর দিন');
            event.preventDefault();
		}
		else if( s!= 11 || t!=11 || u!= 11){	
							
						{alert('দয়া করে মোবাইল নম্বরগুলো চেক করুন। ১১ ডিজিটের মোবাইল নম্বর দিন');
						event.preventDefault();}
						}
		
		else if(bang1!=0 || bang2!=0 || bang3!=0 || bang4!=0 || bang5!=0 || bang6!=0 || bang7!=0 || eng1!=0 || eng2!=0){
						charcheck(bang1);
						charcheck(bang2);
						charcheck(bang3);
						charcheck(bang4);
						charcheck(bang5);
						charcheck(bang6);
						charcheck(bang7);
						
						charcheck2(eng1);
						charcheck2(eng2);
		}
		
		
				else if(!x){
					alert('দয়া করে চুক্তির শর্তে টিক চিহ্ন দিন');
					event.preventDefault();}
					
				else{var y = document.getElementById('myinput').value;
					var data = document.getElementById('store').innerHTML;
				
						if(y!=data){alert('আপনার দেয়া কোডটি ভুল');
						event.preventDefault();}}
								
}

			function comcheck(ak){
				
				var ha = document.getElementById("comm").value;
				
				switch(ha){
									case "" : van("");break;
									case "চাকমা" : van("চাকমা");break;
									case "মারমা" : van("মারমা");break;
									case "ত্রিপুরা" : van("ত্রিপুরা");break;
									case "তঞ্চঙ্গা" : van("তঞ্চঙ্গা");break;
									case "লুসাই" : van("লুসাই");break;
									case "পাংখো" : van("পাংখো");break;
									case "বম" : van("বম");break;
									case "ম্রো" : van("ম্রো");break;
									case "খিয়াং" : van("খিয়াং");break;
									case "খুমি" :	van("খুমি");break;
									case "চাক" :	van("চাক");break;
									case "বাঙালি" :	van("বাঙালি");break;
									case "অন্যান্য" : blk();break;
					
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
				
			function up(myname){				
				document.getElementById('upper').value = myname.toUpperCase();			
		}
					
				
					
			
			function changeit(){
						
						var getval = document.getElementById("store2").innerHTML;
						
						console.log(getval);
						
						switch(getval){
							case "unchecked":
							
							
						document.getElementById("pr_house").value = document.getElementById("pa_house").value;
						document.getElementById("pr_vill").value = document.getElementById("pa_vill").value;
						document.getElementById("pr_post").value = document.getElementById("pa_post").value;						
						document.getElementById("pr_dist").value = $(".pa_dist").val();
						document.getElementById("pr_subdist").value = $(".pa_subdist").val();
												
						document.getElementById("store2").innerHTML="checked";
						
						break;
						
						case "checked":
								document.getElementById("store2").innerHTML="unchecked";break;
						}
			}			
			 function readURL(input) {
				 
									if (input.files) {
									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var img = new Image;
										
										img.onload = function() {
										  
										  document.getElementById("pwidth").innerHTML = img.width;
										  document.getElementById("pheight").innerHTML = img.height;
										  document.getElementById("p1").innerHTML = "1";
										  
										};
										
										img.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
					}
					
					function readURL6(input) {
				 
									if (input.files) {
									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var img6 = new Image;
										
										img6.onload = function() {
										  
										  document.getElementById("qwidth").innerHTML = img6.width;
										  document.getElementById("qheight").innerHTML = img6.height;
										  document.getElementById("q6").innerHTML = "1";
										  
										};
										
										img6.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
					}
				
				 function readURLa(input) {
				 
									if (input.files) {
									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var img2 = new Image;
										
										img2.onload = function() {
										  
										  document.getElementById("swidth").innerHTML = img2.width;
										  document.getElementById("sheight").innerHTML = img2.height;
										  document.getElementById("p2").innerHTML = "1";
										  
										};
										
										img2.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
					}
				
				 function readURL1(input) {
				 
									if (input.files) {
									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var imga = new Image;
										
										imga.onload = function() {
										  
										  document.getElementById("width1").innerHTML = imga.width;
										  document.getElementById("height1").innerHTML = imga.height;
										  document.getElementById("p3").innerHTML = "1";
										};
										
										imga.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
					}
				
				 function readURL2(input) {
				 
									if (input.files) {
									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var imgb = new Image;
										
										imgb.onload = function() {
										  
										  document.getElementById("width2").innerHTML = imgb.width;
										  document.getElementById("height2").innerHTML = imgb.height;
										  document.getElementById("p4").innerHTML = "1";
										};
										
										imgb.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
					}
					
				 function readURL3(input) {
				 
									if (input.files) {
									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var imgc = new Image;
										
										imgc.onload = function() {
										  
										  document.getElementById("width3").innerHTML = imgc.width;
										  document.getElementById("height3").innerHTML = imgc.height;
										  document.getElementById("p5").innerHTML = "1";
										};
										
										imgc.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
				}
				
				 function readURL4(input) {
				 
									if (input.files) {
									
									  var reader = new FileReader();
									  reader.onload = function (e) {
										var imgd = new Image;
										
										imgd.onload = function() {
										  
											document.getElementById("width4").innerHTML = imgd.width;
											document.getElementById("height4").innerHTML = imgd.height;
											document.getElementById("p6").innerHTML = "1";
										};
										
										imgd.src = reader.result;
									  };
									  reader.readAsDataURL(input.files[0]);
									}
				}
				
				
				function charcheck(mychar){
				
									var n1;
									
									for (var i = 0, n1 = mychar.length; i < n1; i++) {
									if (mychar.charCodeAt( i ) <= 255) {
												alert("’আবেদনকারীর নাম (ইংরেজি)’ এবং ইমেইল ব্যতীত কোনো তথ্য ইংরেজিতে দেয়া যাবে না");break;
								}
							}
				}
				
				function charcheck2(mychar2){
				
									var n2;
									
									for (var i = 0, n2 = mychar2.length; i < n2; i++) {
									if (mychar2.charCodeAt( i ) > 255) {
												alert("’আবেদনকারীর নাম (ইংরেজি)’ এবং ইমেইল ইংরেজিতে লিখতে হবে");break;
								}
							}
				}
				
				function up(x){
							var y = x.toUpperCase();
							
							document.getElementById("app_eng").value = y;
				}
				
			
			function house(){
					var ahouse = document.getElementById("pa_house").value;
					var bhouse = document.getElementById("pr_house").value;
					
					if(ahouse!=bhouse){
							document.getElementById("mycheck").checked = false;
							document.getElementById("store2").innerHTML="unchecked";
					}
			}
			
			function vill(){
					var avill = document.getElementById("pa_vill").value;
					var bvill = document.getElementById("pr_vill").value;
					
					if(avill!=bvill){
							document.getElementById("mycheck").checked = false;
							document.getElementById("store2").innerHTML="unchecked";
					}
			}
			
			function pst(){
					var apost = document.getElementById("pa_post").value;
					var bpost = document.getElementById("pr_post").value;
					
					if(apost!=bpost){
							document.getElementById("mycheck").checked = false;
							document.getElementById("store2").innerHTML="unchecked";
					}
			}
			
					
					
function current(){
	var gotmine = document.getElementById("crdegree").value;	
	var yrhsc = document.getElementById("yrhsc").innerHTML;
	var semall = document.getElementById("semall").innerHTML;
	var yrall = document.getElementById("yrall").innerHTML;
	var hidehsc = document.getElementById("hidehsc").innerHTML;
	var hiderest = document.getElementById("hiderest").innerHTML;
	
	switch(gotmine){
		case "এইচএসসি/সমমান":
						document.getElementById("crwhat").innerHTML = hidehsc;
						document.getElementById("crsemester").innerHTML = yrhsc;
						break;
		case "ডিপ্লোমা":
		case "এমবিবিএস/বিডিএস":
		case "ডিভিএম":
		case "ইঞ্জিনিয়ারিং":
		case "স্নাতক (পাশ)":
		case "স্নাতক/সম্মান":
		case "স্নাতকোত্তর":
						document.getElementById("crwhat").innerHTML = hiderest;
						document.getElementById("crsemester").innerHTML = yrall;
						break;
	}
}

function chrome(){
	var crwhat = document.getElementById("crwhat").value;
	
	var yrhsc1 = document.getElementById("yrhsc").innerHTML;
	var semall1 = document.getElementById("semall").innerHTML;
	var yrall1 = document.getElementById("yrall").innerHTML;
	var hidehsc1 = document.getElementById("hidehsc").innerHTML;
	var hiderest1 = document.getElementById("hiderest").innerHTML;
	
	switch(crwhat){
		case "সেমিস্টার":				
						document.getElementById("crsemester").innerHTML = semall1;
						break;
		case "বর্ষ":				
						document.getElementById("crsemester").innerHTML = yrall1;
						break;
	}	
}

function current2(){
	var gotmine = document.getElementById("ldegree").value;	
	var yrhsc = document.getElementById("yrhsc").innerHTML;
	var semall = document.getElementById("semall").innerHTML;
	var yrall = document.getElementById("yrall").innerHTML;
	var hidessc = document.getElementById("hidessc").innerHTML;
	var hidehsc = document.getElementById("hidehsc").innerHTML;
	var hiderest = document.getElementById("hiderest").innerHTML;
	var gpatext = document.getElementById("gpatext").innerHTML;
	var medicaltext = document.getElementById("medicaltext").innerHTML;
		
	document.getElementById("cr_p").style.display="none";
	document.getElementById("cr_range").style.display="none";
	
	
	switch(gotmine){
		case "এসএসসি/সমমান": 
						document.getElementById("lwhat").innerHTML = hidessc;
						document.getElementById("lsemester").innerHTML = hidessc;
						document.getElementById('mygpa').style.display ="block";
						document.getElementById("mygpa2").style.display ="block";
						document.getElementById("mygpa3").style.display ="block";
						document.getElementById("cr_address").style.display ="none";
						document.getElementById("cr_address").value ="";
						
	document.getElementById("definecr").innerHTML= document.getElementById("hideoption").innerHTML;
	document.getElementById("cr_select").innerHTML = document.getElementById("hideselect").innerHTML;
	document.getElementById("cr_select").style.display ="block";
						document.getElementById("impotext").innerHTML = gpatext;
						break;
		case "এইচএসসি/সমমান":
						document.getElementById("lwhat").innerHTML = hidehsc;
						document.getElementById("lsemester").innerHTML = yrhsc;
						document.getElementById("mygpa").style.display ="block";
						document.getElementById("mygpa2").style.display ="block";
						document.getElementById("mygpa3").style.display ="block";
						document.getElementById("cr_address").style.display ="none";
						
	document.getElementById("definecr").innerHTML= document.getElementById("hideoption").innerHTML;
	document.getElementById("cr_select").innerHTML = document.getElementById("hideselect").innerHTML;
	document.getElementById("cr_select").style.display ="block";
						document.getElementById("cr_address").value ="";
						document.getElementById("impotext").innerHTML = gpatext;
						break;
		case "ডিপ্লোমা":
						document.getElementById("lwhat").innerHTML = hiderest;
						document.getElementById("lsemester").innerHTML = yrall;
						document.getElementById("mygpa").style.display ="block";
						document.getElementById("mygpa2").style.display ="block";
						document.getElementById("mygpa3").style.display ="block";
						document.getElementById("cr_address").style.display ="none";
						
	document.getElementById("definecr").innerHTML= document.getElementById("hideoption").innerHTML;
	document.getElementById("cr_select").innerHTML = document.getElementById("hideselect").innerHTML;
	document.getElementById("cr_select").style.display ="block";
						document.getElementById("cr_address").value ="";
						document.getElementById("impotext").innerHTML = gpatext;
						break;
						
		case "এমবিবিএস/বিডিএস":
						document.getElementById("lwhat").innerHTML = hiderest;
						document.getElementById("lsemester").innerHTML = yrall;
						document.getElementById("mygpa").style.display ="none";
						document.getElementById("mygpa2").style.display ="none";
						document.getElementById("mygpa3").style.display ="none";
						
	document.getElementById("definecr").innerHTML= document.getElementById("hideoption").innerHTML;
	document.getElementById("cr_select").innerHTML = document.getElementById("hideselect").innerHTML;
						document.getElementById("cr_address").value ="";
						document.getElementById("impotext").innerHTML = "";
						break;
		case "ডিভিএম":
						document.getElementById("lwhat").innerHTML = hiderest;
						document.getElementById("lsemester").innerHTML = yrall;
						document.getElementById("mygpa").style.display ="block";
						document.getElementById("mygpa2").style.display ="block";
						document.getElementById("mygpa3").style.display ="block";
						document.getElementById("cr_address").style.display ="none";
						
	document.getElementById("definecr").innerHTML= document.getElementById("hideoption").innerHTML;
	document.getElementById("cr_select").innerHTML = document.getElementById("hideselect").innerHTML;
	document.getElementById("cr_select").style.display ="block";
						document.getElementById("cr_address").value ="";
						document.getElementById("impotext").innerHTML = gpatext;
						break;
		case "ইঞ্জিনিয়ারিং":
						document.getElementById("lwhat").innerHTML = hiderest;
						document.getElementById("lsemester").innerHTML = yrall;
						document.getElementById("mygpa").style.display ="block";
						document.getElementById("mygpa2").style.display ="block";
						document.getElementById("mygpa3").style.display ="block";
						document.getElementById("cr_address").style.display ="none";
						
	document.getElementById("definecr").innerHTML= document.getElementById("hideoption").innerHTML;
	document.getElementById("cr_select").innerHTML = document.getElementById("hideselect").innerHTML;
	document.getElementById("cr_select").style.display ="block";
						document.getElementById("cr_address").value ="";
						document.getElementById("impotext").innerHTML = gpatext;
						break;
		case "স্নাতক (পাশ)":
						document.getElementById("lwhat").innerHTML = hiderest;
						document.getElementById("lsemester").innerHTML = yrall;
						document.getElementById("mygpa").style.display ="block";
						document.getElementById("mygpa2").style.display ="block";
						document.getElementById("mygpa3").style.display ="block";
						document.getElementById("cr_address").style.display ="none";
						
	document.getElementById("definecr").innerHTML= document.getElementById("hideoption").innerHTML;
	document.getElementById("cr_select").innerHTML = document.getElementById("hideselect").innerHTML;
	document.getElementById("cr_select").style.display ="block";
						document.getElementById("cr_address").value ="";
						document.getElementById("impotext").innerHTML = gpatext;
						break;
		case "স্নাতক/সম্মান":
						document.getElementById("lwhat").innerHTML = hiderest;
						document.getElementById("lsemester").innerHTML = yrall;
						document.getElementById("mygpa").style.display ="block";
						document.getElementById("mygpa2").style.display ="block";
						document.getElementById("mygpa3").style.display ="block";
						document.getElementById("cr_address").style.display ="none";
						
	document.getElementById("definecr").innerHTML= document.getElementById("hideoption").innerHTML;
	document.getElementById("cr_select").innerHTML = document.getElementById("hideselect").innerHTML;
	document.getElementById("cr_select").style.display ="block";
						document.getElementById("cr_address").value ="";
						document.getElementById("impotext").innerHTML = gpatext;
						break;
		case "স্নাতকোত্তর":
						document.getElementById("lwhat").innerHTML = hiderest;
						document.getElementById("lsemester").innerHTML = yrall;
						document.getElementById("mygpa").style.display ="block";
						document.getElementById("mygpa2").style.display ="block";
						document.getElementById("mygpa3").style.display ="block";
						document.getElementById("cr_address").style.display ="none";
						
	document.getElementById("definecr").innerHTML= document.getElementById("hideoption").innerHTML;
	document.getElementById("cr_select").innerHTML = document.getElementById("hideselect").innerHTML;
	document.getElementById("cr_select").style.display ="block";
						document.getElementById("cr_address").value ="";
						document.getElementById("impotext").innerHTML = gpatext;
						break;
	}
	switch(gotmine){
		case "এসএসসি/সমমান":						
		case "এইচএসসি/সমমান":	$("#crrange").html('<option value="৫">৫</option>');
						break;		
		case "ডিপ্লোমা":
		case "এমবিবিএস/বিডিএস":
		case "ডিভিএম":
		case "ইঞ্জিনিয়ারিং":
		case "স্নাতক (পাশ)":
		case "স্নাতক/সম্মান":	$("#crrange").html('<option value="৪">৪</option>');
						break;					
	}
	
}

function chrome2(){
	var crwhat = document.getElementById("lwhat").value;
	
	var yrhsc1 = document.getElementById("yrhsc").innerHTML;
	var semall1 = document.getElementById("semall").innerHTML;
	var yrall1 = document.getElementById("yrall").innerHTML;
	var hidehsc1 = document.getElementById("hidehsc").innerHTML;
	var hiderest1 = document.getElementById("hiderest").innerHTML;
	
	switch(crwhat){
		case "সেমিস্টার":				
						document.getElementById("lsemester").innerHTML = semall1;
						break;
		case "বর্ষ":				
						document.getElementById("lsemester").innerHTML = yrall1;
						break;
	}	
}
	function qtchange(){
			
			var cqt = document.getElementById("qt").value;
			var lqt = document.getElementById("tesla").innerHTML;
			
			switch(cqt){
				case "":document.getElementById("mytd").style.display="none";
                    document.getElementById("quota_relation_label").style.display="none";
                    document.getElementById("quota_relation_option").style.display="none";
						$(".epic").removeAttr("required");break;

				case "মুক্তিযোদ্ধা": document.getElementById("quota_relation_label").style.display="block";
                    			 document.getElementById("quota_relation_option").style.display="block";
								 document.getElementById("mytd").style.display="block";
								 document.getElementById("quota_relation").style.display="block";
								 $(".quota").attr("required","required");
                    			 break;

				case "পোষ্য":document.getElementById("quota_relation_label").style.display="block";
							document.getElementById("quota_relation_option").style.display="block";
							document.getElementById("mytd").style.display="block";
							document.getElementById("quota_relation").style.display="block";
							$(".quota").attr("required","required");
							break;

				default:document.getElementById("quota_relation_label").style.display="none";
                    	document.getElementById("quota_relation_option").style.display="none";
                    	document.getElementById("mytd").style.display="block";
				        document.getElementById("quota_relation").style.display="block";
						$(".quota").attr("required","required");
                    	break;
			}
	}
	
					
		
			function gradcheck(qq3){
				var gradr = document.getElementById("definegrad").value;
				var grads = $(".hideselect").html();
				
				switch(gradr){
					case "বিভাগ": $(".grad_select").css("display", "block");
					$(".grad_p").css("display","none");
					$(".grad_range").css("display", "none");
					$(".nottograd").css("display","block");
					$(".grad_select").html(grads);
					document.getElementById("grad_cgpa").value = "";
					document.getElementById("grad_p").value="";
					
						break;
						
					case "জিপিএ": $(".grad_select").css("display", "none");
					$(".grad_p").css("display","block");
					$(".grad_range").css("display", "block");
					$(".nottograd").css("display","none");	
					var gradrange = document.getElementById("gradrange").value;				
				document.getElementById("grad_cgpa").value ="";
								break;
				}
				
		}
		
		
		
		function crcheck(qq5){
				var crr = document.getElementById("definecr").value;
				var crs = $(".hideselect").html();
				
				switch(crr){
					case "বিভাগ": $(".cr_select").css("display", "block");
					$(".cr_p").css("display","none");
					$(".cr_range").css("display", "none");
					$(".nottocr").css("display","block");
					$(".cr_select").html(crs);					
					document.getElementById("cr_address").value = "";
					document.getElementById("cr_p").value="";
						break;
						
					case "জিপিএ": $(".cr_select").css("display", "none");
					$(".cr_p").css("display","block");
					$(".cr_range").css("display", "block");
					$(".nottocr").css("display","none");
					var masterrange = document.getElementById("crrange").value;				
				document.getElementById("cr_address").value ="";
								break;
				}
				
		}
		
		
		
			function sscdiv(mine){
					var sscdiv = mine;
					
					if(mine){
						
						document.getElementById("ssc_gpa").value = mine+" বিভাগ";
					}
					
					else{
						document.getElementById("ssc_gpa").value = "";
					}
					
					
			}
			
			
			function hscdiv(mine2){
					var hscdiv = mine2;
					
					if(mine2){
						
						document.getElementById("hsc_cgpa").value = mine2+" বিভাগ";
					}
					
					else{
						document.getElementById("hsc_cgpa").value = "";
					}
					
			}
			
			
			function graddiv(mine3){
					var graddiv = mine3;
					
					
					if(mine3){
						
						document.getElementById("grad_cgpa").value = mine3+" বিভাগ";
					}
					
					else{
						document.getElementById("grad_cgpa").value = "";
					}
					
					
			}
			
				function crdiv(mine5){
					var crdiv = mine5;
										
					if(mine5){
						
						document.getElementById("cr_address").value = mine5+" বিভাগ";
					}
					
					else{
						document.getElementById("cr_address").value = "";
					}
					
			}
			
			
			function sscp(){
				var sscp = document.getElementById("ssc_p").value;
				var sscrange = document.getElementById("sscrange").value;				
				document.getElementById("ssc_gpa").value = sscp+" ("+sscrange+" এর মধ্যে)";	
				
				if(!sscp){
					document.getElementById("ssc_gpa").value ="";
				}
			}
			
			function hscp(){
				var hscp = document.getElementById("hsc_p").value;
				var hscrange = document.getElementById("hscrange").value;
				document.getElementById("hsc_cgpa").value = hscp+" ("+hscrange+" এর মধ্যে)";

				if(!hscp){
					document.getElementById("hsc_cgpa").value ="";
				}				
			}
			
			function gradp(){
				var gradp = document.getElementById("grad_p").value;
				var gradrange = document.getElementById("gradrange").value;
				document.getElementById("grad_cgpa").value = gradp+" ("+gradrange+" এর মধ্যে)";	
				
				if(!gradp){
					document.getElementById("grad_cgpa").value ="";
				}	
				
			}
			
			function crp(){
				var crp = document.getElementById("cr_p").value;
				var crrange = document.getElementById("crrange").value;				
				document.getElementById("cr_address").value = crp+" ("+crrange+" এর মধ্যে)";
				
				if(!crp){
					document.getElementById("cr_address").value ="";
				}
			}
			
			
			function ssc_range(ssj){
				var sscrange = ssj;
				var sscq = document.getElementById("ssc_p").value;
				
				if(sscq){
				document.getElementById("ssc_gpa").value = sscq+" ("+sscrange+" এর মধ্যে)";
				}				
			}
			
			function hsc_range(ssj2){
				var hscrange = ssj2;
				var hscq = document.getElementById("hsc_p").value;

				if(hscq){
				document.getElementById("hsc_cgpa").value = hscq+" ("+hscrange+" এর মধ্যে)";
				}				
			}
			
			function grad_range(ssj3){
				var gradrange = ssj3;
				var gradq = document.getElementById("grad_p").value;
				document.getElementById("grad_cgpa").value = gradq+" ("+gradrange+" এর মধ্যে)";		
				
				if(gradq){
				document.getElementById("grad_cgpa").value = gradq+" ("+gradrange+" এর মধ্যে)";
				}
			}
			
			function cr_range(ssjb){
				var crrange = ssjb;
				var crq = document.getElementById("cr_p").value;
				document.getElementById("cr_address").value = crq+" ("+crrange+" এর মধ্যে)";	
				
				if(crq){
				document.getElementById("cr_address").value = crq+" ("+crrange+" এর মধ্যে)";	
				}
				
			}
			
			function changekar(x){var ranga = document.getElementById("hideranga").innerHTML;
			var bandar = document.getElementById("hidebandar").innerHTML;
			var khag  = document.getElementById("hidekhag").innerHTML;
			var xyz = document.getElementById("sday").value;
			switch(xyz)
			{
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
		
		