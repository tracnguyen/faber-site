<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<?php print $head ?>
<title><?php print $head_title ?></title>
<?php print $styles ?><?php print $scripts ?>
<?php if($_GET['q']!='user/register'){
  ?>
<script type="text/javascript" src="<?php echo $base_path;?>sites/all/themes/fms/js/splashrotator.js"></script>
<script type="text/javascript" src="<?php echo $base_path;?>sites/all/themes/fms/js/global.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/complict.css">
<?php } ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/common.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/common1.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/application_v4.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/layout.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/newworkdesk.css">

<script type="text/javascript" src="<?php echo $base_path;?>sites/all/themes/fms/js/underscore.htm"></script>
<script type="text/javascript" src="<?php echo $base_path;?>sites/all/themes/fms/js/siteslider.js"></script>
<script type="text/javascript" src="<?php echo $base_path;?>sites/all/themes/fms/js/expertgrid.js"></script>


<!--<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/apply.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/findassign.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/layout.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/color.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/common_002.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/jqModal.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/jquery-ui-1.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/jquery.css">
-->
<link href="#/ui/images/favicon.ico" rel="shortcut icon">
<STYLE type=text/css>
BODY {
	PADDING-RIGHT: 0px;
	PADDING-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-TOP: 0px;
	FONT-FAMILY: Arial
}
.master {
	OVERFLOW: hidden;
	WIDTH: 100%;
	POSITION: relative;
	HEIGHT: 100%
}
.master .images IMG {
	LEFT: 0px;
	WIDTH: 100%;
	POSITION: absolute;
	TOP: 57px;
	HEIGHT: auto
}
.master .header {
	LEFT: 0px;
	WIDTH: 100%;
	BORDER-BOTTOM: #000000 1px solid;
	POSITION: absolute;
	TOP: 0px;
	HEIGHT: 56px;
	BACKGROUND-COLOR: #ffffff
}
.master .background {
	POSITION: relative
}
.master .header .logo {
 BACKGROUND: url(<?php echo $base_path;
?>sites/all/themes/fms/images/DMSlogo.png);
	LEFT: 36px;
	WIDTH: 207px;
	BOTTOM: 13px;
	POSITION: absolute;
	HEIGHT: 31px
}
.master .header .actions {
	FONT-WEIGHT: bold;
	FONT-SIZE: 14px;
	RIGHT: 5%;
	TEXT-TRANSFORM: uppercase;
	COLOR: #4d5054;
	BOTTOM: 16px;
	POSITION: absolute
}
.master .header .actions SPAN {
	PADDING-BOTTOM: 14px
}
.master .header .actions A {
	PADDING-BOTTOM: 14px;
	COLOR: #4d5054
}
.master .header .actions A:hover {
	COLOR: #000000;
	BORDER-BOTTOM: #000 2px solid
}
.master .images IMG {
	DISPLAY: none
}
.master .menu {
	PADDING-RIGHT: 10px;
	PADDING-LEFT: 10px;
	LEFT: 36px;
	PADDING-BOTTOM: 10px;
	WIDTH: 250px;
	COLOR: #ffffff;
	PADDING-TOP: 10px;
	POSITION: absolute;
	TOP: 100px;
	HEIGHT: 185px
}
.master .menu UL {
	MIN-WIDTH: 0px;
	DISPLAY: block;
	FLOAT: left;
	MARGIN-RIGHT: 40px
}
.master .menu UL LI {
	FONT-SIZE: 24px;
	MARGIN-BOTTOM: 10px
}
.master .menu UL LI A {
	PADDING-LEFT: 25px;
BACKGROUND: url(<?php echo $base_path;
?>sites/all/themes/fms/images/bulletarrows.png) no-repeat 10px 4px;
	COLOR: #fff
}
.master .menu UL LI A:hover {
	BACKGROUND-POSITION: 10px -29px;
	COLOR: #04befe
}
.master .menu UL LI.current A {
	BACKGROUND-POSITION: 10px -29px;
	COLOR: #04befe
}
.master .menu .detail {
	DISPLAY: none
}
.master .over {
	BORDER-RIGHT: #ffffff 1px solid;
	BORDER-TOP: #ffffff 1px solid;
BACKGROUND: url(<?php echo $base_path;
?>sites/all/themes/fms/images/11bg.png);
	LEFT: 35px;
	BORDER-LEFT: #ffffff 1px solid;
	WIDTH: 800px;
	BORDER-BOTTOM: #ffffff 1px solid;
	TOP: 99px;
	-moz-border-radius: 10px;
	border-radius: 10px 10px 10px 10px;
	-webkit-border-radius: 10px
}
.master .over .detailcontainer {
	DISPLAY: block;
	FLOAT: left;
	POSITION: relative;
	HEIGHT: 100%
}
.master .over .detail {
	PADDING-LEFT: 45px;
	FLOAT: left;
	MAX-WIDTH: 550px;
	VERTICAL-ALIGN: middle;
	BORDER-LEFT: #fff 1px solid;
	POSITION: relative
}
.master .over .detail SPAN.subhead {
	FONT-SIZE: 16px
}
.master .over .detail .buttons {
	MARGIN-TOP: 5px
}
.master .over .detail .buttons A {
	FLOAT: right
}
.master .over .detail#writer-detail {
	MARGIN-TOP: 10px
}
.master .menu .detail#blogger-detail {
	MARGIN-TOP: 10px
}
.master .menu .detail#experts-detail {
	MARGIN-TOP: 10px
}
.master .over .detail#filmmaker-detail {
	MARGIN-TOP: 10px
}
.master .menu .detail#copyeditor-detail {
	MARGIN-TOP: 10px
}
.master .over .selected {
	DISPLAY: block
}
.master .over .detail H2 {
	FONT-WEIGHT: bold;
	FONT-SIZE: 20px;
	COLOR: #04befe
}
.master .over .detail .body {
	FONT-SIZE: 18px
}
.master .message DIV {
	BORDER-RIGHT: #ffffff 1px solid;
	PADDING-RIGHT: 15px;
	BORDER-TOP: #ffffff 1px solid;
	PADDING-LEFT: 15px;
	RIGHT: 15%;
BACKGROUND: url(<?php echo $base_path;
?>sites/all/themes/fms/images/11bg.png);
	PADDING-BOTTOM: 15px;
	BORDER-LEFT: #ffffff 1px solid;
	WIDTH: 560px;
	COLOR: #ffffff;
	BOTTOM: 36%;
	PADDING-TOP: 15px;
	BORDER-BOTTOM: #ffffff 1px solid;
	POSITION: absolute;
	TEXT-ALIGN: center;
	-moz-border-radius: 10px;
	border-radius: 10px 10px 10px 10px;
	-webkit-border-radius: 10px
}
.master .message DIV {
	DISPLAY: none
}
.master .message DIV.current {
	DISPLAY: block
}
.master .message DIV H2 {
	FONT-WEIGHT: bold;
	FONT-SIZE: 24px;
	MARGIN: 0px 0px 5px;
	COLOR: #ffffff
}
.master .message DIV H2 SPAN {
	COLOR: #04befe
}
.master .message H2 A {
	COLOR: #04befe
}
.master .message DIV SPAN.description {
	FONT-SIZE: 14px;
	MARGIN: 0px;
	COLOR: #ffffff
}
.master .message DIV BR {
	MARGIN-BOTTOM: 10px
}
.master .pagefoot {
	LEFT: 0px;
	WIDTH: 100%;
	BOTTOM: 0px;
	POSITION: absolute;
	HEIGHT: 190px;
	TEXT-ALIGN: left
}
.master .pagefoot .footer {
	WIDTH: 100%;
	HEIGHT: 100%;
	BACKGROUND-COLOR: #ffffff;
	TEXT-ALIGN: center
}
.master .hidden {
	HEIGHT: 30px
}
.master .hidden .footer {
	DISPLAY: none;
	HEIGHT: 0px
}
.master .hidden .boxinset {
	DISPLAY: none;
	HEIGHT: 0px
}
.boxinset {
	MARGIN-LEFT: auto;
	WIDTH: 1024px;
	MARGIN-RIGHT: auto;
	PADDING-TOP: 20px;
	TEXT-ALIGN: center
}
.boxinset .slide-master {
	BORDER-RIGHT: #000000 1px solid;
	PADDING-RIGHT: 34px;
	BORDER-TOP: #000000 1px solid;
	PADDING-LEFT: 34px;
	PADDING-BOTTOM: 5px;
	BORDER-LEFT: #000000 1px solid;
	PADDING-TOP: 0px;
	BORDER-BOTTOM: #000000 1px solid;
	-moz-border-radius: 10px;
	border-radius: 10px 10px 10px 10px;
	-webkit-border-radius: 10px
}
.boxinset .slide-master UL LI {
	BORDER-RIGHT: medium none;
	PADDING-RIGHT: 0px;
	BORDER-TOP: medium none;
	DISPLAY: inline;
	PADDING-LEFT: 0px;
BACKGROUND: url(<?php echo $base_path;
?>sites/all/themes/fms/images/hplogos.png) no-repeat;
	FLOAT: left;
	PADDING-BOTTOM: 0px;
	OVERFLOW: hidden;
	BORDER-LEFT: medium none;
	MARGIN-RIGHT: 30px;
	PADDING-TOP: 0px;
	BORDER-BOTTOM: medium none
}
.boxinset .slide-master UL LI.last {
	MARGIN-RIGHT: 0px
}
.boxinset .slide-master UL LI A {
	DISPLAY: block;
	FONT-SIZE: 1px;
	TEXT-INDENT: -5000px;
	HEIGHT: 50px
}
.boxinset .slide-master UL LI.iconEHow {
	BACKGROUND-POSITION: 0px 15px;
	WIDTH: 80px
}
.boxinset .slide-master UL LI.iconLiveStrong {
	BACKGROUND-POSITION: 0px -36px;
	WIDTH: 228px
}
.boxinset .slide-master UL LI.iconGolfLink {
	BACKGROUND-POSITION: 0px -89px;
	WIDTH: 81px
}
.boxinset .slide-master UL LI.iconUSAToday {
	BACKGROUND-POSITION: 0px -142px;
	WIDTH: 60px
}
.boxinset .slide-master UL LI.iconTrails {
	BACKGROUND-POSITION: 0px -195px;
	WIDTH: 117px
}
.boxinset .slide-master UL LI.iconSFGate {
	BACKGROUND-POSITION: 0px -248px;
	WIDTH: 95px
}
.boxinset .slide-master UL LI.iconCracked {
	BACKGROUND-POSITION: 0px -301px;
	WIDTH: 111px
}
.footer UL.links {
	MARGIN-TOP: 10px
}
.footer UL.links LI {
	BORDER-RIGHT: #000000 1px solid;
	PADDING-RIGHT: 5px;
	DISPLAY: inline;
	PADDING-LEFT: 5px;
	PADDING-BOTTOM: 0px;
	PADDING-TOP: 0px;
	LIST-STYLE-TYPE: none
}
.footer UL.links LI.last {
	BORDER-RIGHT: medium none;
	PADDING-RIGHT: 0px;
	BORDER-TOP: medium none;
	DISPLAY: inline;
	BORDER-LEFT: medium none;
	BORDER-BOTTOM: medium none;
	LIST-STYLE-TYPE: none
}
.distribution {
	FONT-SIZE: 14px;
	WIDTH: 300px;
	CURSOR: pointer;
	POSITION: static;
	BACKGROUND-COLOR: #fff;
	TEXT-ALIGN: center;
	-moz-border-radius: 10px 10px 0px 0px;
	border-radius: 10px 10px 0px 0px;
	-webkit-border-radius: 10px 10px 0px 0px
}
.distribution SPAN {
	PADDING-RIGHT: 0px;
	DISPLAY: block;
	PADDING-LEFT: 16px;
	FLOAT: left;
	PADDING-BOTTOM: 10px;
	VERTICAL-ALIGN: middle;
	PADDING-TOP: 5px
}
.distribution .arrow {
	MARGIN-TOP: 5px;
	DISPLAY: inline-block;
BACKGROUND: url(<?php echo $base_path;
?>sites/all/themes/fms/images/footerarrows.png) no-repeat;
	FLOAT: left;
	MARGIN-LEFT: 10px;
	VERTICAL-ALIGN: middle;
	OVERFLOW: hidden;
	WIDTH: 19px;
	CURSOR: pointer;
	HEIGHT: 19px
}
.distribution .down {
	BACKGROUND-POSITION: left -26px
}
.v2button {
	PADDING-RIGHT: 0px;
	PADDING-LEFT: 10px;
	PADDING-BOTTOM: 0px;
	PADDING-TOP: 0px;
	TEXT-DECORATION: none
}
.v2button:hover {
	TEXT-DECORATION: none
}
.trans {
	DISPLAY: inline-block;
	FONT-WEIGHT: bold;
	FONT-SIZE: 12px;
BACKGROUND: url(<?php echo $base_path;
?>sites/all/themes/fms/images/v2button-sprite_trans.png) white no-repeat left top;
	VERTICAL-ALIGN: middle;
	COLOR: #267bb2;
	LINE-HEIGHT: 34px;
	HEIGHT: 35px;
	TEXT-DECORATION: none
}
.v2button {
	DISPLAY: inline-block;
	FONT-WEIGHT: bold;
	FONT-SIZE: 12px;
BACKGROUND: url(<?php echo $base_path;
?>sites/all/themes/fms/images/v2button-sprite_trans.png) white no-repeat left top;
	VERTICAL-ALIGN: middle;
	COLOR: #267bb2;
	LINE-HEIGHT: 34px;
	HEIGHT: 35px;
	TEXT-DECORATION: none
}
.v2button .text {
	DISPLAY: inline-block;
	FONT-WEIGHT: bold;
	FONT-SIZE: 12px;
BACKGROUND: url(<?php echo $base_path;
?>sites/all/themes/fms/images/v2button-sprite_trans.png) white no-repeat left top;
	VERTICAL-ALIGN: middle;
	COLOR: #267bb2;
	LINE-HEIGHT: 34px;
	HEIGHT: 35px;
	TEXT-DECORATION: none
}
.trans {
 BACKGROUND-IMAGE: url(<?php echo $base_path;
?>sites/all/themes/fms/images/v2button-sprite_trans.png);
	BACKGROUND-COLOR: transparent
}
.trans .text {
 BACKGROUND-IMAGE: url(<?php echo $base_path;
?>sites/all/themes/fms/images/v2button-sprite_trans.png);
	BACKGROUND-COLOR: transparent
}
.v2button {
	DISPLAY: inline
}
.v2button .text {
	DISPLAY: inline
}
.v2button .text {
	BORDER-RIGHT: 0px;
	PADDING-RIGHT: 30px;
	BACKGROUND-POSITION: right bottom;
	BORDER-TOP: 0px;
	PADDING-LEFT: 20px;
	PADDING-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-TOP: 0px;
	BORDER-BOTTOM: 0px;
	TEXT-DECORATION: none
}
.white {
	BACKGROUND-POSITION: left 0px
}
.white .text {
	BACKGROUND-POSITION: right -35px
}
.white:hover {
	BACKGROUND-POSITION: left -70px
}
.white:hover .text {
	BACKGROUND-POSITION: right -105px
}
.disabled {
	FILTER:alpha(opacity=25) !important;
	CURSOR: not-allowed;
	opacity:.25 !important;
}
#loginwindow {
	BORDER-RIGHT: #333 1px solid;
	BORDER-TOP: #333 1px solid;
	DISPLAY: none;
	Z-INDEX: 2000;
	RIGHT: 0px;
	BORDER-LEFT: #333 1px solid;
	WIDTH: 225px;
	BORDER-BOTTOM: #333 1px solid;
	POSITION: absolute;
	TOP: 57px;
	BACKGROUND-COLOR: white
}
#loginwindow FORM {
	PADDING-RIGHT: 20px;
	PADDING-LEFT: 20px;
	PADDING-BOTTOM: 20px;
	PADDING-TOP: 20px
}
#loginwindow DD {
	MARGIN: 0px 0px 10px
}
#loginwindow DD SPAN {
	BORDER-RIGHT: blue 1px solid;
	PADDING-RIGHT: 0px;
	BORDER-TOP: blue 1px solid;
	PADDING-LEFT: 0px;
	PADDING-BOTTOM: 3px;
	BORDER-LEFT: blue 1px solid;
	PADDING-TOP: 3px;
	BORDER-BOTTOM: blue 1px solid
}
#loginwindow DD INPUT {
	BORDER-RIGHT: #e8e8e8 1px solid;
	PADDING-RIGHT: 2px;
	BORDER-TOP: #e8e8e8 1px solid;
	PADDING-LEFT: 2px;
BACKGROUND: url(<?php echo $base_path;
?>sites/all/themes/fms/images/input-shadow.gif) white no-repeat left top;
	PADDING-BOTTOM: 2px;
	BORDER-LEFT: #e8e8e8 1px solid;
	WIDTH: 95%;
	PADDING-TOP: 2px;
	BORDER-BOTTOM: #e8e8e8 1px solid
}
#loginwindow DT {
	FONT-SIZE: 10px;
	MARGIN: 0px 0px 10px
}
#loginwindow DT.label {
 BACKGROUND-IMAGE: url(<?php echo $base_path;
?>sites/all/themes/fms/images/login.png);
	MARGIN: 0px;
	BACKGROUND-REPEAT: no-repeat
}
#loginwindow DT LABEL {
	VISIBILITY: hidden
}
#loginwindow DT.lbluser {
	BACKGROUND-POSITION: left 2px
}
#loginwindow DT.lblpassword {
	BACKGROUND-POSITION: left -23px
}
#loginwindow DT.whitebutton {
	MARGIN: 0px
}
#loginwindow DT.whitebutton INPUT {
	BORDER-RIGHT: 0px;
	PADDING-RIGHT: 0px;
	BORDER-TOP: 0px;
	PADDING-LEFT: 0px;
	FONT-WEIGHT: bold;
	BACKGROUND: 0px 50%;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	BORDER-LEFT: 0px;
	WIDTH: 100%;
	CURSOR: pointer;
	COLOR: #336699;
	PADDING-TOP: 0px;
	BORDER-BOTTOM: 0px;
	HEIGHT: 32px
}
.globalfooterlinks {
	FONT-SIZE: 10px
}
.master .message DIV {
	BACKGROUND-IMAGE: none;
	BACKGROUND-COLOR: #000000;
	opacity:0.8;
	filter:alpha(opacity=80);
}
.master .over {
	BACKGROUND-IMAGE: none;
	BACKGROUND-COLOR: #000000;
	opacity:0.8;
	filter:alpha(opacity=80);
}
</STYLE>
<SCRIPT type=text/javascript>

    $(document).ready(function() {

        $('.menu').bind('mouseover', function() {
            if ($(this).hasClass('over') == false) {
                $(this).addClass('over');
            }
        });

        $('.menu').bind('mouseout', function() {
            if ($(this).hasClass('over') == true) {
                $(this).removeClass('over');
            }
        });

        var $pagefoot = $('.pagefoot');

        $('.distribution').bind('click', function() {
            var $arrow = $(this).find('.arrow');
			if ($arrow.hasClass('down')) {
                $pagefoot.animate({
                    'height': '30px'
                }, 800, function() {
                    $pagefoot.addClass('hidden');
                });
                $arrow.removeClass('down');
            } else {
                $pagefoot.removeClass('hidden');
                $pagefoot.animate({
                    'height': '190px'
                }, 800);
                $arrow.addClass('down');
            }
        });
		
		setTimeout("$('.distribution').click();", 5000);

    });
</SCRIPT>
<script> $(document).ready(function() { $(".en a").html('<img src="<?php echo $base_path ?>sites/all/themes/fms/images/en.jpg" alt="UK flag">');
 $(".ru a").html('<img src="<?php echo $base_path ?>sites/all/themes/fms/images/ru.jpg" alt="UK flag">');


 });

</script>


</head>
<body>

<?php 
$q=$_REQUEST['q'];
$a=explode("/", $q);
global $user;
$uid=$user->uid;
if($uid==0){
  ?>
<?php 
 //registration page
 if($_GET['q']=='user/register'){ ?>
<script>
 $(document).ready(function(){	
 
		
	 $("#loginbutton").click(function () {

$("#loginwindow").toggle('fast', function() {
            if ($("#loginwindow").is(":visible")) {
                $("#loginwindow #email").focus();
            }
        });
	
		
    });
	

});
 
 </script>
<div id="header">
  <div id="topnav" class="flc" >
    <div class="left">
      <ul class="clearlogo">
        <li class="home"><a id="home" href="#" title="Freelance Jobs">Freelance Jobs</a></li>
        <li class=" "><a id="creators" href="#">Creators</a>
          <ul class="flc">
            <li class=" "><a id="overview" href="#">Overview</a></li>
            <li><a id="writers" href="#">Writers</a></li>
            <li><a id="filmmakers" href="#">Filmmakers</a></li>
            <li><a id="copyeditors" href="#">Copy Editors</a></li>
            <li><a id="talentexperts" href="#">Talent &amp; Experts</a></li>
          </ul>
        </li>
        <li class=" "><a id="publishers" href="#">Publishers</a>
          <ul class="twoitems flc">
            <li class=" "><a id="pubover" href="#">Overview</a></li>
            <li><a id="casestudies" href="#">Writers</a></li>
          </ul>
        </li>
        <li class=" "><a id="about" href="#">About Us</a></li>
      </ul>
    </div>
    <!-- /.left -->
    <!-- /#loginwindow -->
    <div class="right">
      <ul>
        <li class=" "><a id="loginbutton" href="#login" >Login</a></li>
        <li class=" "><a id="apply" href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>user/register">Apply</a></li>
      </ul>
    </div>
    <!-- /.right -->
    <!-- /#loginwindow -->
    <div id="loginwindow" style="background-color: white; border: 1px solid #b5b2b2; position: absolute; right: 0; top: 40px;  width: 225px; z-index: 2000; display:none;">
      <form id="user-login-form" method="post" accept-charset="UTF-8" action="?q=node&amp;destination=node" name="Login" class="Form1">
        <input name="method" value="account-signin" type="hidden">
        <dl>
          <dt class="label lbluser">
            <label for="email">Username</label>
          </dt>
          <dd>
            <input value="" gtbfieldid="86" name="name" id="email" type="text">
          </dd>
          <dt class="label lblpassword">
            <label for="password">Password</label>
          </dt>
          <dd>
            <input name="pass" id="password" type="password">
          </dd>
          <dt><a href="?q=user/password">Forgot your password?</a></dt>
          <dt class="whitebutton"><span>
            <input type="submit" class="form-submit" value="Log in" id="edit-submit1" name="op">
            </span></dt>
        </dl>
        <input type="hidden" value="form-e68aa006ef30e5f421cf689986d4394d" id="form-e68aa006ef30e5f421cf689986d4394d" name="form_build_id">
        <input type="hidden" value="user_login_block" id="edit-user-login-block" name="form_id">
      </form>
    </div>
  </div>
  <!-- /#topnav -->
</div>
<!-- /#header -->
<div style="margin:auto; width:845px;"><div style="float:left;"><?php print $breadcrumb; ?></div><div class="flag" style="float:right; margin-top:-10px; margin-bottom:5px;"><?php print $lang; ?></div></div>
<br/>
<style>
#edit-submit{ background: url(<?php echo $base_path;?>sites/all/themes/fms/images/submit.png) no-repeat !important; width:204px; height:46px; font-size:16px !important; color:#FFF; font-weight:bold; border:none;}
</style>
<script>
 $(document).ready(function(){

$(".captcha").after('<br><br><div class="Heading1" style="font-size:13px; padding:0px; margin:0px;">Contributors Agreement</div><div style="overflow:scroll; height:200px; width:500px; margin-top:10px;">This Contributors Agreement (the "Agreement") is entered into between FMS , Inc., a Delaware corporation with its principal place of business at 1333 Second Street, Suite 100, Santa Monica, CA 90401, U.S.A. ("FMS ", "FMS ", "we", "us" or "our") and yourself ("Contributor", "you" or "your"), effective as of your execution and submission of this Agreement by clicking the "I Agree" box or "Submit Application" link after reading this Agreement (the "Effective Date").<br> FMS  owns and operates the FMS  Website located at # or other FMS -controlled URL through which you access this Agreement (the "Website") and this Agreement sets forth the terms that apply to any assignment, project, or task (collectively, "Assignments") made available to you through the FMS  program on the Website or as directed by a FMS  Editor. This Agreement incorporates both the FMS  Terms of Use ("TOU") and the FMS  Privacy and Information Security Policy ("PP"). In the event of any conflict between this Agreement and the TOU or PP, the terms of this Agreement will control.</div> <br><br> <input type="checkbox" class="validate rule_checked" value="true" name="agreetoterms" id="agreetoterms"> &nbsp; I have read, understand and agree to the <a target="_blank" href="#/contributors-agreement.html">Contributors Agreement</a>, <a target="_blank" href="#/terms-of-use.html">Terms of Use</a>, <a target="_blank" href="#/code-of-ethics.html">Code of Ethics</a> and <a target="_blank" href="#/privacy-policy.html">Privacy Policy</a>.</label> <br></br> <br>');
$('#edit-submit').attr('value', 'Submit Applicatin');

});
 </script>
<DIV id=mainbody class=Template1>
  <DIV id=application class=v4>
    <DIV class="column-master sidebar flc" style="background-color: #D7ECF2;">
      <DIV class=left>
        <DIV id="whitebox">
          <DIV id=ribbon></DIV>
          <!-- /#formins -->
          <DIV class=wrapper>
            <DIV style="DISPLAY: none" id=allerrors class=Error>Error messages go here</DIV>
            <?php if ($show_messages && $messages): print $messages; endif; ?>
            <?php print $help; ?> <?php print $content ?> <br />
          </DIV>
          <!-- /.wrapper -->
        </DIV>
        <!-- /#whitebox -->
      </DIV>
      <!-- /.left -->
      <DIV class=right>
        <DIV id=sidebar>
          <DIV class=section>
            <P><IMG src="<?php echo $base_path;?>sites/all/themes/fms/images/thankyou.png"></P>
          </DIV>
          <!-- /.section -->
          <DIV class=duallinedivider></DIV>
          <!-- /.duallinedivider -->
          <DIV class="section dottedline">
            <P>Welcome to our studio – we are always looking for new and talented 
              freelancers to join our community.</P>
            <P class=near>Make sure you have a resume ready and a writing sample if you are 
              applying to be a writer.</P>
          </DIV>
          <!-- /.section -->
          <DIV class="section dottedline">
            <DL>
              <DT>You're in Good Company</DT>
              <DD>Our network of freelancers have hundreds of years of experience between 
                them.</DD>
              <DT>Secure and Reliable</DT>
              <DD>Your information is safe and your payments are guaranteed.</DD>
              <DD> </DD>
              <DT>We're Here for You</DT>
              <DD class=last>Having trouble? <A 
  href="#helpdesk.mvc#600" target=_blank>Let us 
                know</A>.<BR>
                We are here to help.</DD>
            </DL>
          </DIV>
          <!-- /section -->
          <DIV class="section dottedline">
            <H3>Writer Application Tips</H3>
            <P><EM>Resume lack direct writing experience?</EM> Make sure to highlight your 
              expertise in a certain area and include any special interests.</P>
            <P><EM>Lacking a writing sample?</EM> Try composing a simple how-to on a topic 
              you are familiar with. Just think about guiding someone through a project.</P>
            <P class=near><EM>In general</EM> – avoid grammatical errors and samples that 
              are poetry, overly conversational or overly technical.</P>
          </DIV>
          <!-- /.section -->
        </DIV>
        <!-- /#sidebar -->
      </DIV>
      <!-- /.right -->
    </DIV>
    <!-- /.column-master.sidebar -->
  </DIV>
  <!-- /#application.v4 -->
</DIV>
<!-- /#mainbody -->
<script src="<?php echo $base_path;?>sites/all/themes/fms/js/vs.js"></script>
<!-- End Ominture -->
<?php }else{ 
 //home page
 ?>
<?php 
 //registration page
//print $content;
 if($_GET['q']=='user/password' || (arg(0)=='user' && arg(1)=='reset')){  ?>
<!-- Header Begins -->
<div class="Header">
  <div class="Frame">
    <div class="Container">
      <div class="branding"><a href="#"><img src="<?php echo $base_path;?>sites/all/themes/fms/images/dmlogo.png" alt="FMS  Studios Freelance Jobs"></a></div>
      
    </div>
  </div>
</div>
<!-- Header Ends -->
<!-- Navigation Begins -->
<div class="PrimaryNav">
  <div class="Frame">
    <div class="Container">
      <div class="Nav1 hasdropdown">
        <ul>
          <li class="first">
            <!--Hi, Dan-->
          </li>
          <li id="inboxcountcontainer"><a href="<?php echo $base_path; ?>">Home</a></li>
        </ul>
      </div>
      <div class="Login hasdropdown"> </div>
    </div>
  </div>
</div>
<!-- Navigation Ends -->
<div style="margin:auto; width:940px; min-height:400px; padding-top:20px;"><?php print $content; ?></div>


<?php }else{ ?>
<div style="height:8px;"></div>
<?php if ($show_messages && $messages):?>
<div id="message-login">
<?php if ($show_messages && $messages): print $messages; endif; ?></div>
<?php  endif; ?>
<script>

$(document).ready(function(){	
 
		
	 $(".Footer").remove();
	

});
//main home page
</script>
<DIV class="master">
  <DIV id=loginwindow>
    <form id="user-login-form" method="post" accept-charset="UTF-8" action="?q=node&amp;destination=node" name="Login" class="Form1">
      <input name="method" value="account-signin" type="hidden">
      <dl>
        <dt class="label lbluser">
          <label for="email">Username</label>
        </dt>
        <dd>
          <input value="" gtbfieldid="86" name="name" id="email" type="text">
        </dd>
        <dt class="label lblpassword">
          <label for="password">Password</label>
        </dt>
        <dd>
          <input name="pass" id="password" type="password">
        </dd>
        <dt><a href="?q=user/password">Forgot your password?</a></dt>
        <dt class="whitebutton"><span>
          <input type="submit" class="form-submit" value="Log in" id="edit-submit" name="op">
          </span></dt>
      </dl>
      <input type="hidden" value="form-e68aa006ef30e5f421cf689986d4394d" id="form-e68aa006ef30e5f421cf689986d4394d" name="form_build_id">
      <input type="hidden" value="user_login_block" id="edit-user-login-block" name="form_id">
    </form>
  </DIV>
  <!-- /#loginwindow -->

  <DIV class=header>
    <DIV class=logo> </DIV>
    	<div class="flag" style="z-index:5000; float:right; top:0px !important; position: relative; margin-top:-8px; right:5px;">
      <?php print $lang ?>  
      </div>   
    <DIV class="actions loggedout"><A id=loginbutton 
href="#login"><?php echo t('Login');?></A> | <A id=apply 
href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>user/register"><?php echo t('Apply'); ?></A> </DIV>
  </DIV>
  <?php 
  	if ( isset($node->nid) && $node->nid == 1 ) 
		{	?>
			<DIV class=images style="height:760px;"><IMG id=writerimg style="DISPLAY: inline" 
src="<?php echo $base_path;?>sites/all/themes/fms/images/writer.jpg"> <IMG id=filmimg src="<?php echo $base_path;?>sites/all/themes/fms/images/filmmaker.jpg"> <IMG id=copyimg src="<?php echo $base_path;?>sites/all/themes/fms/images/copyeditor.jpg"> <IMG id=bloggerimg 
src="<?php echo $base_path;?>sites/all/themes/fms/images/blogger.jpg"> <IMG id=expertimg src="<?php echo $base_path;?>sites/all/themes/fms/images/expert.jpg"> </DIV>

<DIV class="menu FLC">
    <UL>
      <LI class=current><A id=writerlink 
  href="#/#"><?php echo t('Writers'); ?></A> </LI>
      <LI><A id=filmlink href="#/#"><?php echo t('Filmmakers'); ?></A> </LI>
      <LI><A id=copylink href="#/#"><?php echo t('Copy Editors'); ?></A> </LI>
      <LI><A id=bloggerlink href="#/#"><?php echo t('Bloggers'); ?></A> </LI>
      <LI><A id=expertlink href="#/#"><?php echo t('Experts'); ?></A> </LI>
    </UL>
    <DIV class=detailcontainer>
      <DIV class="detail writer selected" id=writer-detail>
        <H2>FMS  Writers</H2>
        <DIV class=body><SPAN class=subhead>Experienced freelancers writing articles for 
          premium publishers</SPAN><BR>
          <BR>
          Create your own schedule and write about what 
          you know. Join our freelance community and earn significant income while 
          building your portfolio.<BR>
          <DIV class=buttons><A class="v2button white trans" 
href="?q=node/12"><SPAN 
class=text>Learn More</SPAN></A> <A class="v2button white trans" 
href="?q=user/register"><SPAN 
class=text>Apply</SPAN></A> </DIV>
        </DIV>
      </DIV>
      <DIV class="detail filmmaker" id=filmmaker-detail>
        <H2>FMS  Filmmakers</H2>
        <DIV class=body><SPAN class=subhead>Professional filmmakers producing videos for 
          an audience of millions</SPAN><BR>
          Take control of your filmmaking career by 
          choosing your projects and creating your own schedule. Have your work seen by a 
          large audience and earn significant income in the process.<BR>
          <DIV class=buttons><A class="v2button white trans" 
href="#/freelance-work/filmmakers.html"><SPAN 
class=text>Learn More</SPAN></A> <A class="v2button white trans" 
href="?q=user/register"><SPAN 
class=text>Apply</SPAN></A> </DIV>
        </DIV>
      </DIV>
      <DIV class="detail copyeditor" id=copyeditor-detail>
        <H2>FMS  Copy Editors</H2>
        <DIV class=body><SPAN class=subhead>Experienced editors applying traditional 
          print media standards to online articles</SPAN><BR>
          Join our experienced team 
          of copy editing professionals and enjoy the flexibility of working from anywhere 
          with the reliability of consistent work.<BR>
          <DIV class=buttons><A class="v2button white trans" 
href="#/freelance-work/copy-editors.html"><SPAN 
class=text>Learn More</SPAN></A> <A class="v2button white trans" 
href="?q=user/register"><SPAN 
class=text>Apply</SPAN></A> </DIV>
        </DIV>
      </DIV>
      <DIV class="detail blogger" id=blogger-detail>
        <H2>FMS  Blog Distribution Network</H2>
        <DIV class=body><SPAN class=subhead>Established bloggers getting a bigger stage 
          to share their voice</SPAN><BR>
          <BR>
          Get your voice heard beyond your blog’s home 
          page. Submit your blog into our distribution network and expand your online 
          brand to a large, new audience.<BR>
          <DIV class=buttons><A class="v2button white trans" 
href="#/freelance-work/bloggers.html"><SPAN 
class=text>Learn More</SPAN></A> <A class="v2button white trans" 
href="?q=user/register"><SPAN 
class=text>Apply</SPAN></A> </DIV>
        </DIV>
      </DIV>
      <DIV class="detail experts" id=experts-detail>
        <H2>FMS  Talent &amp; Experts Network</H2>
        <DIV class=body><SPAN class=subhead>A network of experts expanding their brands 
          online</SPAN><BR>
          Join our network to further establish your professional 
          reputation online. Take advantage of special projects and opportunities offered 
          to those who are recognized experts in their field.<BR>
          <DIV class=buttons><A class="v2button white trans" 
href="#/freelance-work/expert.html"><SPAN 
class=text>Learn More</SPAN></A> <A class="v2button white trans" 
href="?q=user/register"><SPAN 
class=text>Apply</SPAN></A> </DIV>
        </DIV>
      </DIV>
    </DIV>
  </DIV>
	<?php	
		} else { 
			if ($show_messages && $messages): print $messages; endif;
			echo $content;
			
  	}	?>
  <DIV class=pagefoot>
    <DIV class="distribution FLC">
      <div class="ak" style="height:35px; padding-top:4px;"><?php echo t('Distribution to over 80 million viewers'); ?>
        <DIV class="arrow down" style="float:right; margin-right:8px;"></DIV>
      </div>
    </DIV>
    <DIV class=footer>
      <DIV class=boxinset>
        <DIV class=slide-master>
          <UL class=flc>
            <LI class=iconEHow><A title="How To" href="http://www.ehow.com/" 
  target=_blank>eHow</A> </LI>
            <LI class=iconLiveStrong><A title=Health href="http://www.livestrong.com/" 
  target=_blank>LiveStrong.com</A> </LI>
            <LI class=iconGolfLink><A title=Golf href="http://www.golflink.com/" 
  target=_blank>GolfLink</A> </LI>
            <LI class=iconUSAToday><A title="USA Today" 
  href="http://traveltips.usatoday.com/" target=_blank>USA Today</A> </LI>
            <LI class=iconTrails><A title=Trails href="http://www.trails.com/" 
  target=_blank>Trails.com</A> </LI>
            <LI class=iconSFGate><A title="SF Gate" href="http://homeguides.sfgate.com/" 
  target=_blank>SF Gate</A> </LI>
            <LI class="iconCracked last"><A title="Funny Websites" 
  href="http://www.cracked.com/" target=_blank>Cracked.com</A> </LI>
          </UL>
        </DIV>
        <!-- /.slide-master -->
        <UL class=links>
          	
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/2"><?php echo t('About FMS'); ?> </a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/3" rel="nofollow"><?php echo t('Partners'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/4" rel="nofollow"><?php echo t('Contact Us'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/14" rel="nofollow"><?php echo t('FAQ'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/10" rel="nofollow"><?php echo t('Press'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/6" rel="nofollow"><?php echo t('Terms of Use'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/7" rel="nofollow"><?php echo t('Privacy Policy'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/8"><?php echo t('Work From Home'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/9" class="last"><?php echo t('Sitemap'); ?></a></li>
			
        </UL>
        <BR>
        <DIV class=globalfooterlinks><A href="#/"><?php echo t('Freelance Jobs'); ?></A> 
        * <A href="#/freelance-work.html"><?php echo t('Freelance Work'); ?></A> 
        * <A href="#/freelance-work/writers.html"><?php echo t('Freelance Writing Jobs'); ?></A>
        * <A href="#/freelance-work/copy-editors.html"><?php echo t('Freelance Copy Editing Jobs'); ?></A> 
        * <A href="#/freelance-work/filmmakers.html"><?php echo t('Freelance Filmmaking Jobs'); ?></A> </DIV>
      </DIV>
      <!-- /.boxinset -->
    </DIV>
  </DIV>
  <!-- pagefoot -->
</DIV>

<SCRIPT src="<?php echo $base_path;?>sites/all/themes/fms/js/vs.js"></SCRIPT>
<?php } ?>
<?php } ?>
<?php }else{ 

//loged in page
 	global $user;
		$uid=$user->uid;
		$result = db_query("SELECT * FROM {users_roles} where uid=%d", $uid);
		$role=db_fetch_object($result);
		$isfrontpage=0;
		if($role->rid==7||$role->rid==9)
		{		
			if($_GET['q']=='node' || $_GET['q']=='node/13')
			{
				drupal_goto('admin');
			}
			
       }
	   else
			   { 
			   
					if($_GET['q']=='node')
						{
							drupal_goto('node/13');
						}
			   }


 ?>
<!-- Layout -->
<!-- Header Begins -->
<div class="Header">
  <div class="Frame">
    <div class="Container">
      <div class="branding"><a href="#"><img src="<?php echo $base_path;?>sites/all/themes/fms/images/dmlogo.png" alt="FMS  Studios Freelance Jobs"></a></div>
      <div class="flag">
      <?php print $lang ?>  
      </div>
    </div>
  </div>
</div>
<!-- Header Ends -->
<!-- Navigation Begins -->
<div class="PrimaryNav">
  <div class="Frame">
    <div class="Container">
      <div class="Nav1 hasdropdown">
        <ul>
          <li><a href="?q=node/13" rel="nofollow"><?php echo t('Work Desk'); ?></a></li>
          <li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>user/<?php global $user; $uid=$user->uid; echo $uid;   ?>/edit/Enter Contact Information" rel="nofollow"><?php echo t('Profile'); ?></a></li>
          <li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>user/<?php global $user; $uid=$user->uid; echo $uid;   ?>/edit" rel="nofollow"><?php echo t('Account'); ?></a></li>
          <li class="dropdown"><a href="#/ResourceCenter.mvc/Index"><?php echo t('Resources'); ?></a>
            <div class="dropdownborder">
              <ul>
                <li><a href="#/ResourceCenter.mvc/Index?resourceCenterId=1"><?php echo t('Writer Resource Center'); ?></a></li>
                <li><a href="#/groups.mvc?slPage=overview&amp;slGroupKey=48609837-ff72-4c79-bfb0-2cf2f97f1b44&amp;slAcceptInvitation=false"><?php echo t('Writer Group'); ?></a></li>
                <li><a href="#/community/forum.html"><?php echo t('General Forum'); ?></a></li>
                <li><a href="#/blog/"><?php echo t('Blog'); ?></a></li>
              </ul>
            </div>
          </li>
          <?php
					
						if($role->rid==9||$role->rid==7){
						 ?>
          <li><a href="?q=admin/user/user"><?php echo t('User List'); ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <div class="Login hasdropdown">
        <ul>
          <li class="first">
              <?php global $user;  print t('Hi, '); echo $user->name;?>
          </li>
          <li id="inboxcountcontainer"><a href="#/profile.mvc/privatemessaging?slPage=folder&amp;slFolderId=Inbox"><span>0</span>&nbsp;<?php echo t('Inbox'); ?></a></li>
          <li><a href="?q=logout"><?php echo t('Log out'); ?></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Navigation Ends -->
<!-- Header : end -->
<!-- Content : start -->
<div class="Content">
  <div class="Frame">
    <div class="Container">
      <!-- Maintenance message -->
      <!-- Maintenance message ends -->
      <ul class="Breadcrumb FLC">
      </ul>
      <div style="width:940px;margin:auto;"><?php print $breadcrumb; ?></div>
      <div id="roleAlertContainer"></div>
      <?php if($role->rid!=9 && $role->rid!=7){
						 ?>
      <div class="workdesk">
        <div id="find">
          <div id="findtop">
            <!--<div id="top-master" class="FLC">
              <h1 class="Heading1">Find Assignments</h1>
            </div>-->
            <!-- /#top-master -->
            <div id="desktabs" class="FLC">
              <ul class="FLC">
                <li><a href="?q=node/13">My Work Desk</a></li>
                <li><a href="#Writer.mvc/Scorecard">Scorecard</a></li>
                <li><a href="<? echo $base_path?>?q=fms_find_assignment" id="selected">Find Assignments</a></li>
                <li><a href="#Writer.mvc/SuggestAssignments">Create Assignment</a></li>
                <li><a href="#Writer.mvc/PublishedWork">Past Work</a></li>
                <li><a href="#PaymentHistory.mvc/Index">Earnings</a></li>
              </ul>
            </div>
            <!-- /#desktabs
            <div id="claimedcount">
              <p><span id="twocounts"><span id="currentcount">0</span> of 3</span> Claimed Assignments</p>
            </div>
               #claimedcount -->
          </div>
          <!-- /#findtop -->
          <!-- /#interface-master -->
        </div>
        <!-- /#find -->
      </div>
      <?php } ?>
      
      <!-- /.container -->
      <div style="height:20px; "></div>
      <div style="width:940px; margin:auto;">
        <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
        <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
        <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
        <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
        <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
        <?php if ($show_messages && $messages): print $messages; endif; ?>
        <?php print $help; ?> <?php print $content ?></div>
      <div class="CB"></div>
    </div>
  </div>
</div>
<!-- Content : end -->
<!-- Footer : start -->
<!-- Footer : start -->

<?php } ?>


<div class="Footer" style="padding-top:15px;">
  <div class="Frame">
    <div class="Container">
     
			<ul class="">
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/2"><?php echo t('About FMS'); ?> </a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/3" rel="nofollow"><?php echo t('Partners'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/4" rel="nofollow"><?php echo t('Contact Us'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/14" rel="nofollow"><?php echo t('FAQ'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/10" rel="nofollow"><?php echo t('Press'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/6" rel="nofollow"><?php echo t('Terms of Use'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/7" rel="nofollow"><?php echo t('Privacy Policy'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/8"><?php echo t('Work From Home'); ?></a></li>
				<li><a href="?q=<?php if($a[0]=="ru") echo "ru/"; else echo ""; ?>node/9" class="last"><?php echo t('Sitemap'); ?></a></li>
			</ul>
      <ul class="subFooter">
        <li><a href="#/"><?php echo t('Freelance Jobs'); ?></a></li>
        <li><a href="#/freelance-work.html"><?php echo t('Freelance Work'); ?></a></li>
        <li><a href="#/freelance-work/writers.html"><?php echo t('Freelance Writing Jobs'); ?></a></li>
        <li><a href="#/freelance-work/copy-editors.html"><?php echo t('Freelance Copy Editing Jobs'); ?></a></li>
        <li><a href="#/freelance-work/filmmakers.html"><?php echo t('Freelance Filmmaking Jobs'); ?></a></li>
        <li><a href="#/freelance-work/expert.html" class="last"><?php echo t('Experts Wanted'); ?></a></li>
      </ul>
      <ul class="subFooter">
        <li><a href="#/published/sitemap-ehow.html"><?php echo t('Recently Published on eHow.com'); ?></a></li>
      </ul>
    </div>
  </div>
</div>

<?php print $closure ?>

</body>
</html>
