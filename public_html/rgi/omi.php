<?php
   $countries = array("Afghanistan"=>"Afghanistan","Aland Islands"=>"Aland Islands","Albania"=>"Albania","Algeria"=>"Algeria","American Samoa"=>"American Samoa",
   "Andorra"=>"Andorra","Angola"=>"Angola","Anguilla"=>"Anguilla","Antarctica"=>"Antarctica","Antigua and Barbuda"=>"Antigua and Barbuda","Argentina"=>"Argentina",
   "Armenia"=>"Armenia","Aruba"=>"Aruba","Australia"=>"Australia","Austria"=>"Austria","Azerbaijan"=>"Azerbaijan","Bahamas"=>"Bahamas","Bahrain"=>"Bahrain",
   "Bangladesh"=>"Bangladesh","Barbados"=>"Barbados","Belarus"=>"Belarus","Belgium"=>"Belgium","Belize"=>"Belize","Benin"=>"Benin","Bermuda"=>"Bermuda",
   "Bhutan"=>"Bhutan","Bolivia"=>"Bolivia","Bosnia and Herzegovina"=>"Bosnia and Herzegovina","Botswana"=>"Botswana","Bouvet Island"=>"Bouvet Island","Brazil"=>"Brazil",
   "British Indian Ocean Territory"=>"British Indian Ocean Territory","British Virgin Islands"=>"British Virgin Islands","Brunei"=>"Brunei","Bulgaria"=>"Bulgaria",
   "Burkina Faso"=>"Burkina Faso","Burundi"=>"Burundi","Cambodia"=>"Cambodia","Cameroon"=>"Cameroon","Canada"=>"Canada","Cape Verde"=>"Cape Verde",
   "Cayman Islands"=>"Cayman Islands","Central African Republic"=>"Central African Republic","Chad"=>"Chad","Chile"=>"Chile","China"=>"China",
   "Christmas Island"=>"Christmas Island","Cocos Island"=>"Cocos Island","Colombia"=>"Colombia","Comoros"=>"Comoros","Congo"=>"Congo",
   "Congo, Democratic Republic of"=>"Congo, Democratic Republic of","Cook Islands"=>"Cook Islands","Costa Rica"=>"Costa Rica","C&ocirc;te d'Ivoire"=>"C&ocirc;te d'Ivoire",
   "Croatia"=>"Croatia","Cuba"=>"Cuba","Cyprus"=>"Cyprus","Czech Republic"=>"Czech Republic","Denmark"=>"Denmark","Disputed Territory"=>"Disputed Territory",
   "Djibouti"=>"Djibouti","Dominica"=>"Dominica","Dominican Republic"=>"Dominican Republic","Ecuador"=>"Ecuador","Egypt"=>"Egypt","El Salvador"=>"El Salvador",
   "Equatorial Guinea"=>"Equatorial Guinea","Eritrea"=>"Eritrea","Estonia"=>"Estonia","Ethiopia"=>"Ethiopia","Falkland Islands"=>"Falkland Islands",
   "Faroe Islands"=>"Faroe Islands","Fiji"=>"Fiji","Finland"=>"Finland","France"=>"France","French Guiana"=>"French Guiana","French Polynesia"=>"French Polynesia",
   "French Southern Territories"=>"French Southern Territories","Gabon"=>"Gabon","Gambia"=>"Gambia","Georgia"=>"Georgia","Germany"=>"Germany","Ghana"=>"Ghana",
   "Gibraltar"=>"Gibraltar","Greece"=>"Greece","Greenland"=>"Greenland","Grenada"=>"Grenada","Guadeloupe"=>"Guadeloupe","Guam"=>"Guam","Guatemala"=>"Guatemala",
   "Guernsey"=>"Guernsey","Guinea"=>"Guinea","Guinea-Bissau"=>"Guinea-Bissau","Guyana"=>"Guyana","Haiti"=>"Haiti",
   "Heard Islands and McDonald Islands"=>"Heard Islands and McDonald Islands","Honduras"=>"Honduras","Hong Kong"=>"Hong Kong","Hungary"=>"Hungary","Iceland"=>"Iceland",
   "India"=>"India","Indonesia"=>"Indonesia","Iran"=>"Iran","Iraq"=>"Iraq","Iraq-Saudi Arabia Neutral Zone"=>"Iraq-Saudi Arabia Neutral Zone","Ireland"=>"Ireland",
   "Isle of Man"=>"Isle of Man","Israel"=>"Israel","Italy"=>"Italy","Ivory Coast"=>"Ivory Coast","Jamaica"=>"Jamaica","Japan"=>"Japan","Jersey"=>"Jersey",
   "Jordan"=>"Jordan","Kazakhstan"=>"Kazakhstan","Kenya"=>"Kenya","Kiribati"=>"Kiribati","Kuwait"=>"Kuwait","Kyrgyzstan"=>"Kyrgyzstan","Laos"=>"Laos",
   "Latvia"=>"Latvia","Lebanon"=>"Lebanon","Lesotho"=>"Lesotho","Liberia"=>"Liberia","Libya"=>"Libya","Liechtenstein"=>"Liechtenstein","Lithuania"=>"Lithuania",
   "Luxembourg"=>"Luxembourg","Macao"=>"Macao","Macedonia"=>"Macedonia","Madagascar"=>"Madagascar","Malawi"=>"Malawi","Malaysia"=>"Malaysia","Maldives"=>"Maldives",
   "Mali"=>"Mali","Malta"=>"Malta","Marshall Islands"=>"Marshall Islands","Martinique"=>"Martinique","Mauritania"=>"Mauritania","Mauritius"=>"Mauritius",
   "Mayotte"=>"Mayotte","Mexico"=>"Mexico","Micronesia"=>"Micronesia","Moldova"=>"Moldova","Monaco"=>"Monaco","Mongolia"=>"Mongolia","Montenegro"=>"Montenegro",
   "Montserrat"=>"Montserrat","Morocco"=>"Morocco","Mozambique"=>"Mozambique","Myanmar"=>"Myanmar","Namibia"=>"Namibia","Nauru"=>"Nauru","Nepal"=>"Nepal",
   "Netherlands"=>"Netherlands","Netherlands Antilles"=>"Netherlands Antilles","New Caledonia"=>"New Caledonia","New Zealand"=>"New Zealand","Nicaragua"=>"Nicaragua",
   "Niger"=>"Niger","Nigeria"=>"Nigeria","Niue"=>"Niue","Norfolk Island"=>"Norfolk Island","Northern Mariana Islands"=>"Northern Mariana Islands","North Korea"=>"North Korea",
   "Norway"=>"Norway","Oman"=>"Oman","Pakistan"=>"Pakistan","Palau"=>"Palau","Palestinian Territory"=>"Palestinian Territory","Panama"=>"Panama",
   "Papua New Guinea"=>"Papua New Guinea","Paraguay"=>"Paraguay","Peru"=>"Peru","Philippines"=>"Philippines","Pitcairn Islands"=>"Pitcairn Islands","Poland"=>"Poland",
   "Portugal"=>"Portugal","Puerto Rico"=>"Puerto Rico","Qatar"=>"Qatar","Reunion"=>"Reunion","Romania"=>"Romania","Russia"=>"Russia","Rwanda"=>"Rwanda",
   "Saint Helena"=>"Saint Helena","Saint Kitts and Nevis"=>"Saint Kitts and Nevis","Sant Lucia"=>"Sant Lucia","Saint Pierre and Miquelon"=>"Saint Pierre and Miquelon",
   "vc"=>"Sant Vincent and the Grenadines","Samoa"=>"Samoa","San Marino"=>"San Marino",
   "S&atilde;p Tom&eacute; and Pr&iacute;ncipe"=>"S&atilde;p Tom&eacute; and Pr&iacute;ncipe","Saudi Arabia"=>"Saudi Arabia","Senegal"=>"Senegal","Serbia"=>"Serbia",
   "Montenegro"=>"Montenegro","Seychelles"=>"Seychelles","Sierra Leone"=>"Sierra Leone","Singapore"=>"Singapore","Slovakia"=>"Slovakia",
   "Slovenia"=>"Slovenia","Solomon Islands"=>"Solomon Islands","Somalia"=>"Somalia","South Africa"=>"South Africa",
   "South Georgia and the South Sandwich Islands"=>"South Georgia and the South Sandwich Islands","South Korea"=>"South Korea","Spain"=>"Spain","Sri Lanka"=>"Sri Lanka","Sudan"=>"Sudan",
   "Suriname"=>"Suriname","Svalbard and Jan Mayen Islands"=>"Svalbard and Jan Mayen Islands","Swaziland"=>"Swaziland","Sweden"=>"Sweden","Switzerland"=>"Switzerland",
   "Syria"=>"Syria","Taiwan"=>"Taiwan","Tajikistan"=>"Tajikistan","Tanzania"=>"Tanzania","Thailand"=>"Thailand","Timor-Leste"=>"Timor-Leste","Togo"=>"Togo",
   "Tokelau"=>"Tokelau","Tonga"=>"Tonga","Trinidad and Tobago"=>"Trinidad and Tobago","Tunisia"=>"Tunisia","Turkey"=>"Turkey","Turkmenistan"=>"Turkmenistan",
   "Turks and Caicos Islands"=>"Turks and Caicos Islands","Tuvalu"=>"Tuvalu","Uganda"=>"Uganda","Ukraine"=>"Ukraine","United Arab Emirates"=>"United Arab Emirates",
   "United Kingdom"=>"United Kingdom","United Nations Neutral Zone"=>"United Nations Neutral Zone","United States"=>"United States",
   "United States Minor Outlying Islands"=>"United States Minor Outlying Islands","U.S. Virgin Islands"=>"U.S. Virgin Islands","Uruguay"=>"Uruguay","Uzbekistan"=>"Uzbekistan",
   "Vanuatu"=>"Vanuatu","Vatican City"=>"Vatican City","Venezuela"=>"Venezuela","Vietnam"=>"Vietnam","Wallis and Futuna Islands"=>"Wallis and Futuna Islands",
   "Western Sahara"=>"Western Sahara","Yemen"=>"Yemen","Zambia"=>"Zambia","Zimbabwe"=>"Zimbabwe");
   ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>registration</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="https://bpovendor.com/css/animate.css">
<link rel="stylesheet" type="text/css" href="https://bpovendor.com/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://bpovendor.com/css/style.css">
<style>
  .ast_journal_box_wrapper{
    border-radius: 10px;
  }
</style>
</head>
<body style="background-color: #fbc194;">
<!--PEN HEADER-->
<header class="header">
  <h1 class="header__title">Registration Form</h1>
</header>
<!--PEN CONTENT-->
<div class="content">
  <!--content inner-->
  <div class="content__inner">
    <div class="container overflow-hidden">
      <!--multisteps-form-->
      <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 col-12">
            <img src="form-wizard.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-12">
            <div class="row d-none">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">User Info</button>
                  <button class="multisteps-form__progress-btn" type="button" title="Address">Company Info</button>
                  <button class="multisteps-form__progress-btn" type="button" title="Order Info">Login Info</button>
                </div>
              </div>
            </div>
            <div class="ast_journal_box_wrapper mb-4">
            <form class="multisteps-form__form rounded">
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Personal Info</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                      <input class="form-control" id="first" type="text" placeholder="First Name"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-4 mt-sm-0">
                      <input class="form-control" id="last" type="text" placeholder="Last Name"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                      <input class="form-control" id="email" type="email" placeholder="Enter Email id"/>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-5 col-md-4 col-sm-6 col-12">
                        <select name="country" id="country" onchange='change_country(this.value);'>
                           <option value="india">India</option>
                           <?php
                                 foreach ($countries as $code => $name){
                                 echo "<option value=\"$code\">$name</option>\n";
                                 }
                                ?>
                        </select>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <input class="form-control" type="text" name="countrycode" id="countrycode" placeholder="Country Code" value="+91" readonly>
                     </div>
                     <div class="col-lg-5 col-md-8 col-sm-6 col-12 mt-4 mt-sm-0">
                        <input class="form-control" id="phone" type="text" placeholder="Enter Phone No." minlength="10" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                     </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <input class="form-control" id="skype" type="text" placeholder="Enter Skype id"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <input class="form-control" id="password" type="password" minlength="4" maxlength="8" placeholder="Enter Login Password"/>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <button class="js-btn-next ast_btn pull-right" id="next1" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Company Details</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                      <input class="form-control" id="company_name" type="text" placeholder="Enter Company Name"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-4 mt-sm-0">
                      	<select name="company_type" id="company_type">
                           <option value="">Select Company Type</option>
                           <option value="">BPO</option>
                           <option value="">Vendor</option>
                           <option value="">Select Company Type</option>
                           <option value="">Select Company Type</option>
                       	</select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <button class="js-btn-next ast_btn pull-right" id="next2" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Login Info</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                      <input class="form-control" id="" type="text" placeholder="First Name"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-4 mt-sm-0">
                      <input class="form-control" id="" type="password" placeholder="Last Name"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class=" ast_btn pull-right js-btn-next" id="submit" type="button" title="Next">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
<script  src="script.js"></script>
<script src="https://www.hosteddialer.in/js/jquery.min.js"></script>
<!-- <script src="https://www.dialerchennai.in/addlead/js/sweetalert2.all.min.js"></script> -->
<script>
  $('#next1').click(function()
        { 
         var first = $("#first").val(); 
         var last = $("#last").val();
         var email = $("#email").val();
         var country = $("#country").val();
         var countrycode = $("#countrycode").val();
         var phone = $("#phone").val();
         var skype = $("#skype").val();
         var password = $("#password").val();
         var add = "insert";
        // name validation-------------------------------
      if(first==""){
         alert('Enter Your First Name');
         $('#first').focus();
         return false; 
      }else if(last==""){
         alert('Enter Your last Name');
         $('#last').focus();
         return false; 
      }else if(email==""){
         alert('Enter Your Email Id');
         $('#email').focus();
         return false;
      }else if(email.indexOf("@", 0) < 0){
         alert('Please Enter a Valid Email Address');
         $('#email').focus();
         return false;
      }else if(email.indexOf(".", 0) < 0){
         alert('Please Enter a Valid Email Address');
         $('#email').focus();
         return false;
      }else if(phone==""){
         alert('Please Enter phone Number');
         $('#phone').focus();
         return false;
      }else if(phones.length = 10){
          alert(" Your Mobile Number must be 10 Digit");
          $("#mobile").select();
          return false;
      }else if(password==""){
         alert('Please Enter Login Password');
         $('#password').focus();
         return false;
      }else{
        $.ajax({
        type:"POST",
        url: 'rgi.php',
        data: 'first='+ first +'&last='+last+'&email='+email+'&country='+country+'&countrycode='+countrycode+'&phone='+phone+'&skype='+skype+'&password='+password+'&add='+add,
        success: function(res){
          last_id = res;
          if(last_id){
            //======================================================================
            $('#next2').click(function(){
            var last = last_id;
            //alert(last); 
            var email = $('#email').val();
            var gender = $('#gender').val();
            var update = "update";
            if(email==''){
              alert('enter your email id');
              $('#email').focus();
              return false;
            }else if(gender==''){
              alert('plaese Enter gender');
              $('#gender').focus();
              return false;
            }else{
              $.ajax({
                type:'POST',
                url:'rgi.php',
                data:'email='+email+'&gender='+gender+'&id='+last+'&update='+update,
                success: function(res1){
                  last_id_update = res1;
                  alert(last_id_update);
                  if(last_id_update){
                    //alert("update successfully");
                    //======================================================================
                    $('#submit').click(function(){
                    var submit_id = last_id_update;
                    //alert(last); 
                    var username = $('#username').val();
                    var password = $('#password').val();
                    var submit = "submit";
                    if(username==''){
                      alert('enter your username');
                      $('#username').focus();
                      return false;
                    }else if(password==''){
                      alert('Enter login password');
                      $('#password').focus();
                      return false;
                    }else{
                      $.ajax({
                        type:'POST',
                        url:'rgi.php',
                        data:'username='+username+'&password='+password+'&submit_id='+submit_id+'&submit='+submit,
                        success: function(res2){
                          last_id_update = res2;
                          //alert(last_id_update);
                          if(last_id_update){
                            alert("update successfully");
                             window.location.href = "https://bpovendor.com/login.php";
                          }else{
                            alert('3rd form error');
                          }
                        }
                      });
                    }
                    })
                  }else{
                    alert('2nd form error');
                  }
                }
              });
            }
            }) 
            //========================================================       
          }else{
            alert('Error form submit')
          }
      }
      });
    }
    });
</script>
<script>
         var countryCodeList = new Array();
         
         countryCodeList['Aland Islands'] = '+ 358';
         countryCodeList['Afghanistan'] = '+ 93';
         countryCodeList['Albania'] = '+ 355';
         countryCodeList['Algeria'] = '+ 213';
         countryCodeList['American Samoa'] = '+ 684';
         countryCodeList['Andorra'] = '+ 376';
         countryCodeList['Angola'] = '+ 244';
         countryCodeList['Anguilla'] = '+ 1';
         countryCodeList['Antarctica'] = '+ 672';
         countryCodeList['Antigua and Barbuda'] = '+ 1';
         countryCodeList['Argentina'] = '+ 54';
         countryCodeList['Armenia'] = '+ 374';
         countryCodeList['Aruba'] = '+ 297';
         countryCodeList['Australia'] = '+ 61';
         countryCodeList['Austria'] = '+ 43';
         countryCodeList['Azerbaijan'] = '+ 994';
         countryCodeList['Bahamas'] = '+ 1';
         countryCodeList['Bahrain'] = '+ 973';
         countryCodeList['Bangladesh'] = '+ 880';
         countryCodeList['Barbados'] = '+ 1';
         countryCodeList['Belarus'] = '+ 375';
         countryCodeList['Belgium'] = '+ 32';
         countryCodeList['Belize'] = '+ 501';
         countryCodeList['Benin'] = '+ 229';
         countryCodeList['Bermuda'] = '+ 1';
         countryCodeList['Bhutan'] = '+ 975';
         countryCodeList['Bolivia'] = '+ 591';
         countryCodeList['Bosnia and Herzegovina'] = '+ 387';
         countryCodeList['Botswana'] = '+ 267';
         countryCodeList['Bouvet Island'] = '+ 47';
         countryCodeList['Brazil'] = '+ 55';
         countryCodeList['British Indian Ocean Territory'] = '+ 246';
         countryCodeList['Brunei'] = '+ 673';
         countryCodeList['Bulgaria'] = '+ 359';
         countryCodeList['Burkina Faso'] = '+ 226';
         countryCodeList['Burundi'] = '+ 257';
         countryCodeList['Cambodia'] = '+ 855';
         countryCodeList['Cameroon'] = '+ 237';
         countryCodeList['Canada'] = '+ 1';
         countryCodeList['Cape Verde'] = '+ 238';
         countryCodeList['Cayman Islands'] = '+ 1';
         countryCodeList['Central African Republic'] = '+ 236';
         countryCodeList['Chad'] = '+ 235';
         countryCodeList['Chile'] = '+ 56';
         countryCodeList['China'] = '+ 86';
         countryCodeList['Christmas Island'] = '+ ';
         countryCodeList['Cocos Island'] = '+ ';
         countryCodeList['Colombia'] = '+ 57';
         countryCodeList['Comoros'] = '+ 269';
         countryCodeList['Congo'] = '+ 242';
         countryCodeList['Congo, Democratic Republic of'] = '+ 243';
         countryCodeList['Cook Islands'] = '+ 682';
         countryCodeList['Costa Rica'] = '+ 506';
         countryCodeList["C&ocirc;te d'Ivoire"] = '+ 225';
         countryCodeList['Croatia'] = '+ 385';
         countryCodeList['Cuba'] = '+ 53';
         countryCodeList['Cyprus'] = '+ 357';
         countryCodeList['Czech Republic'] = '+ 420';
         countryCodeList['Denmark'] = '+ 45';
         countryCodeList['Djibouti'] = '+ 253';
         countryCodeList['Dominica'] = '+ 1';
         countryCodeList['Dominican Republic'] = '+ 1';
         countryCodeList['Ecuador'] = '+ 593';
         countryCodeList['Egypt'] = '+ 20';
         countryCodeList['El Salvador'] = '+ 503';
         countryCodeList['Equatorial Guinea'] = '+ 240';
         countryCodeList['Eritrea'] = '+ 291';
         countryCodeList['Estonia'] = '+ 201';
         countryCodeList['Ethiopia'] = '+ 251';
         countryCodeList['Falkland Islands'] = '+ 500';
         countryCodeList['Faroe Islands'] = '+ 298';
         countryCodeList['Fiji'] = '+ 679';
         countryCodeList['Finland'] = '+ 358';
         countryCodeList['France'] = '+ 33';
         countryCodeList['FX'] = '+ 33';
         countryCodeList['French Guiana'] = '+ 594';
         countryCodeList['French Polynesia'] = '+ 689';
         countryCodeList['French Southern Territories'] = '+ 33';
         countryCodeList['Gabon'] = '+ 241';
         countryCodeList['Gambia'] = '+ 220';
         countryCodeList['Georgia'] = '+ 995';
         countryCodeList['Germany'] = '+ 49';
         countryCodeList['Guernsey'] = '+ 44';
         countryCodeList['Ghana'] = '+ 233';
         countryCodeList['Gibraltar'] = '+ 350';
         countryCodeList['Greece'] = '+ 30';
         countryCodeList['Greenland'] = '+ 299';
         countryCodeList['Grenada'] = '+ 1';
         countryCodeList['Guadeloupe'] = '+ 590';
         countryCodeList['Guam'] = '+ 1';
         countryCodeList['Guatemala'] = '+ 502';
         countryCodeList['Guinea'] = '+ 224';
         countryCodeList['Guinea-Bissau'] = '+ 245';
         countryCodeList['Guyana'] = '+ 592';
         countryCodeList['Haiti'] = '+ 509';
         countryCodeList['Heard Islands and McDonald Islands'] = '+ 1';
         countryCodeList['Honduras'] = '+ 504';
         countryCodeList['Hong Kong'] = '+ 852';
         countryCodeList['Hungary'] = '+ 36';
         countryCodeList['Iceland'] = '+ 354';
         countryCodeList['India'] = '+ 91';
         countryCodeList['Indonesia'] = '+ 62';
         countryCodeList['Iran'] = '+ 98';
         countryCodeList['Iraq'] = '+ 964';
         countryCodeList['Ireland'] = '+ 353';
         countryCodeList['Israel'] = '+ 972';
         countryCodeList['Italy'] = '+ 39';
         countryCodeList['Jamaica'] = '+ 1';
         countryCodeList['Japan'] = '+ 81';
         countryCodeList['Jordan'] = '+ 962';
         countryCodeList['Kazakhstan'] = '+ 7';
         countryCodeList['Kenya'] = '+ 254';
         countryCodeList['Kiribati'] = '+ 686';
         countryCodeList['South Korea'] = '+ 82';
         countryCodeList['North Korea'] = '+ 850';
         countryCodeList['Kuwait'] = '+ 965';
         countryCodeList['Kyrgyzstan'] = '+ 996';
         countryCodeList['Laos'] = '+ 856';
         countryCodeList['Latvia'] = '+ 371';
         countryCodeList['Lebanon'] = '+ 961';
         countryCodeList['Lesotho'] = '+ 266';
         countryCodeList['Liberia'] = '+ 231';
         countryCodeList['Libya'] = '+ 218';
         countryCodeList['Liechtenstein'] = '+ 423';
         countryCodeList['Lithuania'] = '+ 370';
         countryCodeList['Luxembourg'] = '+ 352';
         countryCodeList['Macao'] = '+ 853';
         countryCodeList['Macedonia'] = '+ 389';
         countryCodeList['Madagascar'] = '+ 261';
         countryCodeList['Malawi'] = '+ 265';
         countryCodeList['Malaysia'] = '+ 60';
         countryCodeList['Maldives'] = '+ 960';
         countryCodeList['Mali'] = '+ 223';
         countryCodeList['Malta'] = '+ 356';
         countryCodeList['Marshall Islands'] = '+ 692';
         countryCodeList['Martinique'] = '+ 596';
         countryCodeList['Mauritania'] = '+ 222';
         countryCodeList['Mauritius'] = '+ 230';
         countryCodeList['Mayotte'] = '+ 269';
         countryCodeList['Mexico'] = '+ 52';
         countryCodeList['Micronesia'] = '+ 691';
         countryCodeList['Moldova'] = '+ 373';
         countryCodeList['Monaco'] = '+ 377';
         countryCodeList['Mongolia'] = '+ 976';
         countryCodeList['Montenegro'] = '+ 382';
         countryCodeList['Montserrat'] = '+ 1';
         countryCodeList['Morocco'] = '+ 212';
         countryCodeList['Mozambique'] = '+ 258';
         countryCodeList['Myanmar'] = '+ 95';
         countryCodeList['Namibia'] = '+ 264';
         countryCodeList['Nauru'] = '+ 674';
         countryCodeList['Nepal'] = '+ 977';
         countryCodeList['Netherlands'] = '+ 31';
         countryCodeList['Netherlands Antilles'] = '+ 599';
         countryCodeList['New Caledonia'] = '+ 687';
         countryCodeList['New Zealand'] = '+ 64';
         countryCodeList['Nicaragua'] = '+ 505';
         countryCodeList['Niger'] = '+ 227';
         countryCodeList['Nigeria'] = '+ 234';
         countryCodeList['Niue'] = '+ 683';
         countryCodeList['Norfolk Island'] = '+ 6723';
         countryCodeList['Northern Mariana Islands'] = '+ 1';
         countryCodeList['Norway'] = '+ 47';
         countryCodeList['Oman'] = '+ 968';
         countryCodeList['Pakistan'] = '+ 92';
         countryCodeList['Palau'] = '+ 680';
         countryCodeList['Palestinian Territory'] = '+ 970';
         countryCodeList['Panama'] = '+ 507';
         countryCodeList['Papua New Guinea'] = '+ 675';
         countryCodeList['Paraguay'] = '+ 595';
         countryCodeList['Peru'] = '+ 51';
         countryCodeList['Philippines'] = '+ 63';
         countryCodeList['Pitcairn Islands'] = '+ 870';
         countryCodeList['Poland'] = '+ 48';
         countryCodeList['Portugal'] = '+ 351';
         countryCodeList['Puerto Rico'] = '+ 1';
         countryCodeList['Qatar'] = '+ 974';
         countryCodeList['Reunion'] = '+ 262';
         countryCodeList['Romania'] = '+ 40';
         countryCodeList['Russia'] = '+ 7';
         countryCodeList['Rwanda'] = '+ 250';
         countryCodeList['Saint Helena'] = '+ 290';
         countryCodeList['Saint Kitts and Nevis'] = '+ 1';
         countryCodeList['Sant Lucia'] = '+ 1';
         countryCodeList['Saint Pierre and Miquelon'] = '+ 508';
         countryCodeList['Sant Vincent and the Grenadines'] = '+ 1';
         countryCodeList['Samoa'] = '+ 685';
         countryCodeList['San Marino'] = '+ 378';
         countryCodeList['S&atilde;p Tom&eacute'] = '+ 239';
         countryCodeList['Saudi Arabia'] = '+ 966';
         countryCodeList['Senegal'] = '+ 221';
         countryCodeList['Serbia'] = '+ 381';
         countryCodeList['Montenegro'] = '+ 381';
         countryCodeList['Seychelles'] = '+ 248';
         countryCodeList['Sierra Leone'] = '+ 232';
         countryCodeList['Singapore'] = '+ 65';
         countryCodeList['Slovakia'] = '+ 421';
         countryCodeList['Slovenia'] = '+ 386';
         countryCodeList['Solomon Islands'] = '+ 677';
         countryCodeList['Somalia'] = '+ 252';
         countryCodeList['South Africa'] = '+ 27';
         countryCodeList['South Georgia and the South Sandwich Islands'] = '+ 44';
         countryCodeList['Spain'] = '+ 34';
         countryCodeList['Sri Lanka'] = '+ 94';
         countryCodeList['Sudan'] = '+ 249';
         countryCodeList['Suriname'] = '+ 597';
         countryCodeList['Svalbard and Jan Mayen Islands'] = '+ 79';
         countryCodeList['Swaziland'] = '+ 268';
         countryCodeList['Sweden'] = '+ 46';
         countryCodeList['Switzerland'] = '+ 41';
         countryCodeList['Syria'] = '+ 963';
         countryCodeList['Taiwan'] = '+ 886';
         countryCodeList['Tajikistan'] = '+ 992';
         countryCodeList['Tanzania'] = '+ 255';
         countryCodeList['Thailand'] = '+ 66';
         countryCodeList['Timor-Leste'] = '+ 670';
         countryCodeList['Togo'] = '+ 228';
         countryCodeList['Tokelau'] = '+ 690';
         countryCodeList['Tonga'] = '+ 676';
         countryCodeList['Trinidad and Tobago'] = '+ 1';
         countryCodeList['Tunisia'] = '+ 216';
         countryCodeList['Turkey'] = '+ 90';
         countryCodeList['Turkmenistan'] = '+ 993';
         countryCodeList['Turks and Caicos Islands'] = '+ 1';
         countryCodeList['Tuvalu'] = '+ 688';
         countryCodeList['Uganda'] = '+ 256';
         countryCodeList['Ukraine'] = '+ 380';
         countryCodeList['United Arab Emirates'] = '+ 971';
         countryCodeList['United Kingdom'] = '+ 44';
         countryCodeList['Jersey'] = '+ 44';
         countryCodeList['United States'] = '+ 1';
         countryCodeList['United States Minor Outlying Islands'] = '+ 1';
         countryCodeList['Uruguay'] = '+ 598';
         countryCodeList['Uzbekistan'] = '+ 998';
         countryCodeList['Vanuatu'] = '+ 678';
         countryCodeList['Vatican City'] = '+ 39';
         countryCodeList['Venezuela'] = '+ 58';
         countryCodeList['Vietnam'] = '+ 84';
         countryCodeList['British Virgin Islands'] = '+ 1284';
         countryCodeList['U.S. Virgin Islands'] = '+ 1340';
         countryCodeList['Wallis and Futuna Islands'] = '+ 681';
         countryCodeList['Western Sahara'] = '+ 212';
         countryCodeList['Yemen'] = '+ 967';
         countryCodeList['Zambia'] = '+ 260';
         countryCodeList['Zimbabwe'] = '+ 263';
         function change_country(countrycode)
         {
         
         
         if ( countrycode != "" )
         {
         countrycode=countrycode;
         var country=countryCodeList[countrycode];
         $("#countrycode").val(country);
         }
         else
         {
         return false;
         }
         }
      </script>

</body>
</html>