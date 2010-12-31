<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
   <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
  <?php if($_GET['q']!='user/register'){
  ?>
<script type="text/javascript" src="<?php echo $base_path;?>sites/all/themes/fms/js/jquery-1.js"></script>
<script type="text/javascript" src="<?php echo $base_path;?>sites/all/themes/fms/js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo $base_path;?>sites/all/themes/fms/js/splashrotator.js"></script>
<script type="text/javascript" src="<?php echo $base_path;?>sites/all/themes/fms/js/global.js"></script>
<?php } ?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/common.css">
 <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/common1.css">

  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/application_v4.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/layout.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $base_path;?>sites/all/themes/fms/css/widget48.css">
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
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-TOP: 0px; FONT-FAMILY: Arial
}
.master {
	OVERFLOW: hidden; WIDTH: 100%; POSITION: relative; HEIGHT: 100%
}
.master .images IMG {
	LEFT: 0px; WIDTH: 100%; POSITION: absolute; TOP: 57px; HEIGHT: auto
}
.master .header {
	LEFT: 0px; WIDTH: 100%; BORDER-BOTTOM: #000000 1px solid; POSITION: absolute; TOP: 0px; HEIGHT: 56px; BACKGROUND-COLOR: #ffffff
}
.master .background {
	POSITION: relative
}
.master .header .logo {
	BACKGROUND: url(<?php echo $base_path;?>sites/all/themes/fms/images/DMSlogo.png); LEFT: 36px; WIDTH: 207px; BOTTOM: 13px; POSITION: absolute; HEIGHT: 31px
}
.master .header .actions {
	FONT-WEIGHT: bold; FONT-SIZE: 14px; RIGHT: 5%; TEXT-TRANSFORM: uppercase; COLOR: #4d5054; BOTTOM: 16px; POSITION: absolute
}
.master .header .actions SPAN {
	PADDING-BOTTOM: 14px
}
.master .header .actions A {
	PADDING-BOTTOM: 14px; COLOR: #4d5054
}
.master .header .actions A:hover {
	COLOR: #000000; BORDER-BOTTOM: #000 2px solid
}
.master .images IMG {
	DISPLAY: none
}
.master .menu {
	PADDING-RIGHT: 10px; PADDING-LEFT: 10px; LEFT: 36px; PADDING-BOTTOM: 10px; WIDTH: 250px; COLOR: #ffffff; PADDING-TOP: 10px; POSITION: absolute; TOP: 100px; HEIGHT: 185px
}
.master .menu UL {
	MIN-WIDTH: 0px; DISPLAY: block; FLOAT: left; MARGIN-RIGHT: 40px
}
.master .menu UL LI {
	FONT-SIZE: 24px; MARGIN-BOTTOM: 10px
}
.master .menu UL LI A {
	PADDING-LEFT: 25px; BACKGROUND: url(<?php echo $base_path;?>sites/all/themes/fms/images/bulletarrows.png) no-repeat 10px 4px; COLOR: #fff
}
.master .menu UL LI A:hover {
	BACKGROUND-POSITION: 10px -29px; COLOR: #04befe
}
.master .menu UL LI.current A {
	BACKGROUND-POSITION: 10px -29px; COLOR: #04befe
}
.master .menu .detail {
	DISPLAY: none
}
.master .over {
	BORDER-RIGHT: #ffffff 1px solid; BORDER-TOP: #ffffff 1px solid; BACKGROUND: url(<?php echo $base_path;?>sites/all/themes/fms/images/11bg.png); LEFT: 35px; BORDER-LEFT: #ffffff 1px solid; WIDTH: 800px; BORDER-BOTTOM: #ffffff 1px solid; TOP: 99px; -moz-border-radius: 10px; border-radius: 10px 10px 10px 10px; -webkit-border-radius: 10px
}
.master .over .detailcontainer {
	DISPLAY: block; FLOAT: left; POSITION: relative; HEIGHT: 100%
}
.master .over .detail {
	PADDING-LEFT: 45px; FLOAT: left; MAX-WIDTH: 550px; VERTICAL-ALIGN: middle; BORDER-LEFT: #fff 1px solid; POSITION: relative
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
	FONT-WEIGHT: bold; FONT-SIZE: 20px; COLOR: #04befe
}
.master .over .detail .body {
	FONT-SIZE: 18px
}
.master .message DIV {
	BORDER-RIGHT: #ffffff 1px solid; PADDING-RIGHT: 15px; BORDER-TOP: #ffffff 1px solid; PADDING-LEFT: 15px; RIGHT: 15%; BACKGROUND: url(<?php echo $base_path;?>sites/all/themes/fms/images/11bg.png); PADDING-BOTTOM: 15px; BORDER-LEFT: #ffffff 1px solid; WIDTH: 560px; COLOR: #ffffff; BOTTOM: 36%; PADDING-TOP: 15px; BORDER-BOTTOM: #ffffff 1px solid; POSITION: absolute; TEXT-ALIGN: center; -moz-border-radius: 10px; border-radius: 10px 10px 10px 10px; -webkit-border-radius: 10px
}
.master .message DIV {
	DISPLAY: none
}
.master .message DIV.current {
	DISPLAY: block
}
.master .message DIV H2 {
	FONT-WEIGHT: bold; FONT-SIZE: 24px; MARGIN: 0px 0px 5px; COLOR: #ffffff
}
.master .message DIV H2 SPAN {
	COLOR: #04befe
}
.master .message H2 A {
	COLOR: #04befe
}
.master .message DIV SPAN.description {
	FONT-SIZE: 14px; MARGIN: 0px; COLOR: #ffffff
}
.master .message DIV BR {
	MARGIN-BOTTOM: 10px
}
.master .pagefoot {
	LEFT: 0px; WIDTH: 100%; BOTTOM: 0px; POSITION: absolute; HEIGHT: 190px; TEXT-ALIGN: left
}
.master .pagefoot .footer {
	WIDTH: 100%; HEIGHT: 100%; BACKGROUND-COLOR: #ffffff; TEXT-ALIGN: center
}
.master .hidden {
	HEIGHT: 30px
}
.master .hidden .footer {
	DISPLAY: none; HEIGHT: 0px
}
.master .hidden .boxinset {
	DISPLAY: none; HEIGHT: 0px
}
.boxinset {
	MARGIN-LEFT: auto; WIDTH: 1024px; MARGIN-RIGHT: auto; PADDING-TOP: 20px; TEXT-ALIGN: center
}
.boxinset .slide-master {
	BORDER-RIGHT: #000000 1px solid; PADDING-RIGHT: 34px; BORDER-TOP: #000000 1px solid; PADDING-LEFT: 34px; PADDING-BOTTOM: 5px; BORDER-LEFT: #000000 1px solid; PADDING-TOP: 0px; BORDER-BOTTOM: #000000 1px solid; -moz-border-radius: 10px; border-radius: 10px 10px 10px 10px; -webkit-border-radius: 10px
}
.boxinset .slide-master UL LI {
	BORDER-RIGHT: medium none; PADDING-RIGHT: 0px; BORDER-TOP: medium none; DISPLAY: inline; PADDING-LEFT: 0px; BACKGROUND: url(<?php echo $base_path;?>sites/all/themes/fms/images/hplogos.png) no-repeat; FLOAT: left; PADDING-BOTTOM: 0px; OVERFLOW: hidden; BORDER-LEFT: medium none; MARGIN-RIGHT: 30px; PADDING-TOP: 0px; BORDER-BOTTOM: medium none
}
.boxinset .slide-master UL LI.last {
	MARGIN-RIGHT: 0px
}
.boxinset .slide-master UL LI A {
	DISPLAY: block; FONT-SIZE: 1px; TEXT-INDENT: -5000px; HEIGHT: 50px
}
.boxinset .slide-master UL LI.iconEHow {
	BACKGROUND-POSITION: 0px 15px; WIDTH: 80px
}
.boxinset .slide-master UL LI.iconLiveStrong {
	BACKGROUND-POSITION: 0px -36px; WIDTH: 228px
}
.boxinset .slide-master UL LI.iconGolfLink {
	BACKGROUND-POSITION: 0px -89px; WIDTH: 81px
}
.boxinset .slide-master UL LI.iconUSAToday {
	BACKGROUND-POSITION: 0px -142px; WIDTH: 60px
}
.boxinset .slide-master UL LI.iconTrails {
	BACKGROUND-POSITION: 0px -195px; WIDTH: 117px
}
.boxinset .slide-master UL LI.iconSFGate {
	BACKGROUND-POSITION: 0px -248px; WIDTH: 95px
}
.boxinset .slide-master UL LI.iconCracked {
	BACKGROUND-POSITION: 0px -301px; WIDTH: 111px
}
.footer UL.links {
	MARGIN-TOP: 10px
}
.footer UL.links LI {
	BORDER-RIGHT: #000000 1px solid; PADDING-RIGHT: 5px; DISPLAY: inline; PADDING-LEFT: 5px; PADDING-BOTTOM: 0px; PADDING-TOP: 0px; LIST-STYLE-TYPE: none
}
.footer UL.links LI.last {
	BORDER-RIGHT: medium none; PADDING-RIGHT: 0px; BORDER-TOP: medium none; DISPLAY: inline; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; LIST-STYLE-TYPE: none
}
.distribution {
	FONT-SIZE: 14px; WIDTH: 300px; CURSOR: pointer; POSITION: static; BACKGROUND-COLOR: #fff; TEXT-ALIGN: center; -moz-border-radius: 10px 10px 0px 0px; border-radius: 10px 10px 0px 0px; -webkit-border-radius: 10px 10px 0px 0px
}
.distribution SPAN {
	PADDING-RIGHT: 0px; DISPLAY: block; PADDING-LEFT: 16px; FLOAT: left; PADDING-BOTTOM: 10px; VERTICAL-ALIGN: middle; PADDING-TOP: 5px
}
.distribution .arrow {
	MARGIN-TOP: 5px; DISPLAY: inline-block; BACKGROUND: url(<?php echo $base_path;?>sites/all/themes/fms/images/footerarrows.png) no-repeat; FLOAT: left; MARGIN-LEFT: 10px; VERTICAL-ALIGN: middle; OVERFLOW: hidden; WIDTH: 19px; CURSOR: pointer; HEIGHT: 19px
}
.distribution .down {
	BACKGROUND-POSITION: left -26px
}
.v2button {
	PADDING-RIGHT: 0px; PADDING-LEFT: 10px; PADDING-BOTTOM: 0px; PADDING-TOP: 0px; TEXT-DECORATION: none
}
.v2button:hover {
	TEXT-DECORATION: none
}
.trans {
	DISPLAY: inline-block; FONT-WEIGHT: bold; FONT-SIZE: 12px; BACKGROUND: url(<?php echo $base_path;?>sites/all/themes/fms/images/v2button-sprite_trans.png) white no-repeat left top; VERTICAL-ALIGN: middle; COLOR: #267bb2; LINE-HEIGHT: 34px; HEIGHT: 35px; TEXT-DECORATION: none
}
.v2button {
	DISPLAY: inline-block; FONT-WEIGHT: bold; FONT-SIZE: 12px; BACKGROUND: url(<?php echo $base_path;?>sites/all/themes/fms/images/v2button-sprite_trans.png) white no-repeat left top; VERTICAL-ALIGN: middle; COLOR: #267bb2; LINE-HEIGHT: 34px; HEIGHT: 35px; TEXT-DECORATION: none
}
.v2button .text {
	DISPLAY: inline-block; FONT-WEIGHT: bold; FONT-SIZE: 12px; BACKGROUND: url(<?php echo $base_path;?>sites/all/themes/fms/images/v2button-sprite_trans.png) white no-repeat left top; VERTICAL-ALIGN: middle; COLOR: #267bb2; LINE-HEIGHT: 34px; HEIGHT: 35px; TEXT-DECORATION: none
}
.trans {
	BACKGROUND-IMAGE: url(<?php echo $base_path;?>sites/all/themes/fms/images/v2button-sprite_trans.png); BACKGROUND-COLOR: transparent
}
.trans .text {
	BACKGROUND-IMAGE: url(<?php echo $base_path;?>sites/all/themes/fms/images/v2button-sprite_trans.png); BACKGROUND-COLOR: transparent
}
.v2button {
	DISPLAY: inline
}
.v2button .text {
	DISPLAY: inline
}
.v2button .text {
	BORDER-RIGHT: 0px; PADDING-RIGHT: 30px; BACKGROUND-POSITION: right bottom; BORDER-TOP: 0px; PADDING-LEFT: 20px; PADDING-BOTTOM: 0px; BORDER-LEFT: 0px; PADDING-TOP: 0px; BORDER-BOTTOM: 0px; TEXT-DECORATION: none
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
	FILTER:alpha(opacity=25) !important; CURSOR: not-allowed; opacity:.25 !important; 
}
#loginwindow {
	BORDER-RIGHT: #333 1px solid; BORDER-TOP: #333 1px solid; DISPLAY: none; Z-INDEX: 2000; RIGHT: 0px; BORDER-LEFT: #333 1px solid; WIDTH: 225px; BORDER-BOTTOM: #333 1px solid; POSITION: absolute; TOP: 57px; BACKGROUND-COLOR: white
}
#loginwindow FORM {
	PADDING-RIGHT: 20px; PADDING-LEFT: 20px; PADDING-BOTTOM: 20px; PADDING-TOP: 20px
}
#loginwindow DD {
	MARGIN: 0px 0px 10px
}
#loginwindow DD SPAN {
	BORDER-RIGHT: blue 1px solid; PADDING-RIGHT: 0px; BORDER-TOP: blue 1px solid; PADDING-LEFT: 0px; PADDING-BOTTOM: 3px; BORDER-LEFT: blue 1px solid; PADDING-TOP: 3px; BORDER-BOTTOM: blue 1px solid
}
#loginwindow DD INPUT {
	BORDER-RIGHT: #e8e8e8 1px solid; PADDING-RIGHT: 2px; BORDER-TOP: #e8e8e8 1px solid; PADDING-LEFT: 2px; BACKGROUND: url(<?php echo $base_path;?>sites/all/themes/fms/images/input-shadow.gif) white no-repeat left top; PADDING-BOTTOM: 2px; BORDER-LEFT: #e8e8e8 1px solid; WIDTH: 95%; PADDING-TOP: 2px; BORDER-BOTTOM: #e8e8e8 1px solid
}
#loginwindow DT {
	FONT-SIZE: 10px; MARGIN: 0px 0px 10px
}
#loginwindow DT.label {
	BACKGROUND-IMAGE: url(<?php echo $base_path;?>sites/all/themes/fms/images/login.png); MARGIN: 0px; BACKGROUND-REPEAT: no-repeat
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
	BORDER-RIGHT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: 0px; PADDING-LEFT: 0px; FONT-WEIGHT: bold; BACKGROUND: 0px 50%; PADDING-BOTTOM: 0px; MARGIN: 0px; BORDER-LEFT: 0px; WIDTH: 100%; CURSOR: pointer; COLOR: #336699; PADDING-TOP: 0px; BORDER-BOTTOM: 0px; HEIGHT: 32px
}
.globalfooterlinks {
	FONT-SIZE: 10px
}
.master .message DIV { BACKGROUND-IMAGE: none; BACKGROUND-COLOR: #000000;
    opacity:0.8; filter:alpha(opacity=80);
	}
	
.master .over {	BACKGROUND-IMAGE: none; BACKGROUND-COLOR: #000000;
    opacity:0.8; filter:alpha(opacity=80);
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
<!-- OPTIMOST PAGE CODE V2.7 - Copyright 2002-2009 Interwoven, Inc. -->
<SCRIPT language=javascript type=text/javascript><!--
    var optimost = { A: {}, C: {}, D: document, L: document.location, M: [], Q: {}, T: new Date(), U: '', V: '2.7', Enabled: true, ST: "script", SA:
{ "type": "text/javascript" }, I: function() {
    var s = this.L.search; var c = this.D.cookie; if (s.length > 3) {
        for (var a = s.substring(1)
.split("&"), i = 0, l = a.length; i < l; i++) {
            var p = a[i].indexOf("="); if (p > 0) this.Q[a[i].substring(0, p)] = unescape(a[i].substring(
p + 1));
        }
    } if (c.length > 3) {
        for (var a = c.split(";"), i = 0, b = a.length; i < b; i++) {
            var v = a[i].split("="); while (v[0].substring(0,
1) == " ") v[0] = v[0].substring(1, v[0].length); if (v.length == 2) this.C[v[0]] = unescape(v[1]);
        }
    }
}, B: function() {
    var n; this.A = {
}; var _o = this; this.A.D_ts = Math.round(_o.T.getTime() / 1000); this.A.D_tzo = _o.T.getTimezoneOffset(); this.A.D_loc = _o.L.protocol +
"//" + _o.L.hostname + _o.L.pathname; this.A.D_ckl = _o.D.cookie.length; this.A.D_ref = _o.D.referrer; if (typeof optrial == "object")
    for (n in optrial) this.A[n] = optrial[n]; for (n in this.Q) this.A[n] = this.Q[n]; for (n in this.C) if (n.substring(0, 2) == "op") this.A[n] =
this.C[n];
}, S: function() {
    var q = ''; for (var n in this.A) if (this.A[n] != null && this.A[n] != "") q += (q.length > 0 ? "&" : (this.U.indexOf(
"?") > 0 ? "&" : "?")) + n + "=" + escape(this.A[n]); return this.U + q;
}, SC: function(n, v, e, d) {
    var de = new Date(); de.setTime(
de.getTime() + e * 1000); this.D.cookie = n + "=" + escape(v) + ((e == null) ? "" : ("; expires=" + de.toGMTString())) + "; path=/" + ((d ==
null) ? "" : (";domain=" + d));
}, SLD: function() {
    var sld = this.D.domain; var dp = sld.split("."); var l = dp.length; if (l < 2) sld = null;
    else if (!isNaN(dp[l - 1]) && !isNaN(dp[l - 2])) sld = null; else sld = "." + dp[l - 2] + "." + dp[l - 1]; return sld;
}, R: function(r, c, d,
e) {
    if (this.Enabled) {
        var b = true; if (r < 1000) {
            b = (Math.floor(Math.random() * 1000) < r); if (c != null) {
                if (this.C[c] != null) b = (this.C[c] !=
"mvt-no"); else this.SC(c, b ? "mvt-yes" : "mvt-no", e, d);
            }
        } if (b) {
            var t = '<' + this.ST + ' src="' + this.S() + '"'; for (n in this.SA)
                t += (" " + n + '="' + this.SA[n] + '"'); t += '><\/' + this.ST + '>'; this.D.write(t);
        }
    }
}, addModule: function(s, f) {
    this.M[s] = f;
}, displayModule: function(s) { if (typeof this.M[s] == "function") this.M[s](); }, hasModules: function() {
    return count(this.M) > 0;
}
    }; optimost.I();
//--></SCRIPT>
<!-- END OPTIMOST PAGE CODE --><!-- OPTIMOST EXPERIMENT SELECTOR CODE -->
<SCRIPT type=text/javascript>
    var opProto = (("https:" == document.location.protocol) ? "https://by.essl." : "http://es.");
    var opLiveURL = opProto + 'optimost.com/es/335/c/103/u/live.js';
    var opQaURL = opProto + 'optimost.com/es/335/c/103/u/staging.js';
    var opContentURL = opLiveURL;
    var opThisURL = document.location.toString();
    opThisURL = opThisURL.split('?')[0];
    if (opThisURL) {
        if (typeof (optimost) == 'object') {
            if (optimost.Q['opsel'] && optimost.Q['opsel'] == 'opsel') opContentURL = opQaURL;
        }
    }
    document.write('<' + 'script type="text/javascript" src="' + opContentURL + '"></' + 'script>\n');
</SCRIPT>
<!-- END OPTIMOST EXPERIMENT SELECTOR CODE -->


</head>
  <body>
<?php global $user;
$uid=$user->uid;
if($uid==0){
  ?>
 
 <?php 
 //registration page
 if($_GET['q']=='user/register'){ ?>
 <div id="header">
			<div id="topnav" class="flc">
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
				</div><!-- /.left -->
				
				<div id="loginwindow">
						<form id="user-login-form" method="post" accept-charset="UTF-8" action="?q=node&amp;destination=node" name="Login" class="Form1">   
			<input name="method" value="account-signin" type="hidden">

			<dl>
				<dt class="label lbluser"><label for="email">Username</label></dt>
				<dd><input value="" gtbfieldid="86" name="name" id="email" type="text"></dd>

				<dt class="label lblpassword"><label for="password">Password</label></dt>
				<dd><input name="pass" id="password" type="password"></dd>


				<dt><a href="#">Forgot your password?</a></dt>

				<dt class="whitebutton"><span><input type="submit" class="form-submit" value="Log in" id="edit-submit1" name="op"></span></dt>
			</dl>
			<input type="hidden" value="form-e68aa006ef30e5f421cf689986d4394d" id="form-e68aa006ef30e5f421cf689986d4394d" name="form_build_id">
<input type="hidden" value="user_login_block" id="edit-user-login-block" name="form_id">
		</form>
                </div><!-- /#loginwindow -->
				
				
				<div class="right">
					<ul>
				
						<li class=" "><a id="loginbutton" href="#login">Login</a></li>
						<li class=" "><a id="apply" href="?q=user/register">Apply</a></li>
				
					</ul>
				</div><!-- /.right -->
			</div><!-- /#topnav -->
             
		</div><!-- /#header -->
       <div style="margin:auto; width:845px;">  <?php print $breadcrumb; ?></div>
       <br/>

 <style>#edit-submit{ background: url(<?php echo $base_path;?>sites/all/themes/fms/images/submit.png) no-repeat !important; width:204px; height:46px; font-size:16px !important; color:#FFF; font-weight:bold; border:none;}</style>
 <script>
 $(document).ready(function(){

$(".captcha").after('<input type="checkbox" class="validate rule_checked" value="true" name="agreetoterms" id="agreetoterms"> &nbsp; I have read, understand and agree to the <a target="_blank" href="#/contributors-agreement.html">Contributors Agreement</a>, <a target="_blank" href="#/terms-of-use.html">Terms of Use</a>, <a target="_blank" href="#/code-of-ethics.html">Code of Ethics</a> and <a target="_blank" href="#/privacy-policy.html">Privacy Policy</a>.</label> <br></br> <br>');
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
          <?php print $help; ?> 
 <?php print $content ?>
<br />
 <div class="validate rule_scrollthrough" id="contributors-agreement">
<div agreementversion="1.0" class="legaldoc" id="contributors">
<div class="Heading1">Contributors Agreement</div>
<p>This Contributors Agreement (the "<span class="underline">Agreement</span>") is 
entered into between Demand Media, Inc., a Delaware corporation with its 
principal place of business at 1333 Second Street, Suite 100, Santa Monica, CA 
90401, U.S.A. ("<span class="underline">Demand Media</span>", "<span class="underline">Demand Studios</span>", "<span class="underline">we</span>", 
"<span class="underline">us</span>" or "<span class="underline">our</span>") and 
yourself ("<span class="underline">Contributor</span>", "<span class="underline">you</span>" or "<span class="underline">your</span>"), effective 
as of your execution and submission of this Agreement by clicking the "I Agree" 
box or "Submit Application" link after reading this Agreement (the "<span class="underline">Effective Date</span>").</p>
<p>Demand Media owns and operates the Demand Studios Website located at <a href="#">#</a> or other 
Demand Media-controlled URL through which you access this Agreement (the "<span class="underline">Website</span>") and this Agreement sets forth the terms that 
apply to any assignment, project, or task (collectively, "<span class="underline">Assignments</span>") made available to you through the Demand 
Studios program on the Website or as directed by a Demand Studios Editor. This 
Agreement incorporates both the Demand Studios <a href="#terms-of-use.html">Terms of Use</a> ("<span class="underline">TOU</span>") and the Demand Studios <a href="#privacy-policy.html">Privacy and Information 
Security Policy</a> ("<span class="underline">PP</span>"). In the event of any 
conflict between this Agreement and the TOU or PP, the terms of this Agreement 
will control.</p>
<p>THIS AGREEMENT ALSO CONTAINS A PROVISION FOR BINDING ARBITRATION OF ALL 
DISPUTES.</p>
<p>In consideration of the mutual promises contained herein, you and we hereby 
agree as follows:</p>
<ol class="sections">
  <li class="section"><span class="sectionname">Nature of Services; 
  Assignments</span>. Your application and all materials in support of your 
  application to enroll in the Demand Studios program must be complete, 
  accurate, and truthful. Your application must be reviewed and approved by 
  Demand Media before you are eligible for any Assignments. We may, but are 
  under no obligation to, make available to you or commission you for individual 
  Assignments from time to time following your acceptance into the Demand 
  Studios program. If available and applicable, Assignments for different 
  project roles within Demand Studios will be posted on the Website from time to 
  time. Each Assignment is governed by (i) the terms of this Agreement and (ii) 
  any other terms and conditions set forth on the Website or as directed by a 
  Demand Studios Editor as it pertains to your particular Assignment ("<span class="underline">Additional Terms</span>"). The Additional Terms, which may 
  include deadline, compensation, delivery, promotional commitments, and scope 
  of duty requirements, may vary from Assignment to Assignment depending on the 
  project role (e.g., "Filmmaker" versus "Writer"). The Additional Terms will be 
  readily accessible on the Website or otherwise readily conveyed to you, and we 
  will notify you in advance of any material changes to the Additional Terms 
  where applicable.</li>
  <li class="section"><span class="sectionname">Delivery; Contributions</span>. For 
  any Assignment made available by Demand Studios and accepted by you, you will 
  either independently create or assist in the creation of an original work of 
  authorship or other work product. Your original work of authorship or 
  contribution to other work product is referred to as your "<span class="underline">Contribution</span>". All Contributions must meet the quality 
  standards set by Demand Media and any applicable style guide, as determined by 
  Demand Media. You will perform the Assignment in a professional manner in 
  accordance with the level of care customarily observed by skilled 
  professionals rendering similar services. You must deliver each Contribution 
  to us in accordance with the procedures specified by us. We will notify you if 
  we have accepted or rejected each Contribution. If rejected, we may, in our 
  sole discretion, provide you with an opportunity to modify the Contribution 
  and resubmit it for approval. If we believe you have made a good faith effort 
  to satisfy an Assignment, but we choose not to accept the Contribution for any 
  reason, we may elect to terminate the Assignment and pay you a "kill fee" 
  (depending on the Assignment, up to 15% of the payment amount specified in the 
  Assignment for the completed Contribution). Demand Media will not pay you more 
  than three kill fees during the term of this Agreement or your participation 
  in the Demand Studios program. Except for the "kill fee," we have no 
  obligation to pay you unless and until we notify you in writing that we have 
  approved a Contribution. If we reject a Contribution, all of your original 
  rights (if any) in the Contribution created by you will, as between Demand 
  Media and you, be held by you.</li>
  <li class="section"><span class="sectionname">Payment</span>. Following acceptance 
  of a Contribution by us, we will pay you the amount set out in the Additional 
  Terms directly through your PayPal account pursuant to the information you 
  provide to us (generally within 10 days after acceptance, unless otherwise set 
  forth in any Additional Terms), or, at our discretion, by mailing you a check 
  (generally within 15 days after acceptance). We reserve the right to require 
  you to submit an invoice to us before payment will be issued. If you reside in 
  a territory where VAT applies, our payment to you may include VAT if 
  appropriate and/or your payment may be subject to a VAT invoice. We shall be 
  entitled to deduct from the fees (and any other sums) due to you, any sums 
  that you may owe to us at any time.</li>
  <li class="section"><span class="sectionname">Your Grant of Rights</span>. Each of 
  your Contributions will be original and solely created by you as a 
  "work-made-for-hire" specially ordered or commissioned by us, with Demand 
  Media being deemed the sole author of the Contribution and the owner of all 
  rights whether now known or hereafter devised (including all copyrights and 
  all extensions and renewals of copyrights) in and to the Contribution, with 
  the right to make all uses of the Contribution throughout the world and all 
  changes in each Contribution. Without further obligation to you, we may use, 
  reproduce, edit, change, add to, take from, translate, reformat, or reprocess 
  the Contribution in any manner.<br><br>If for any reason a Contribution is not 
  deemed to be a work-made-for-hire under applicable law, you hereby irrevocably 
  assign to us all rights whether now known or hereafter devised (including all 
  copyrights and all extensions and renewals of copyrights) in and to each 
  Contribution throughout the world, including any and all of your rights to 
  authorize or control the exploitation of each Contribution by any media and 
  means now known or hereafter devised.<br><br>You waive all "moral rights of 
  authors" that may exist or any similar rights. We may, but are not obligated 
  to, provide attribution to you in connection with any Contribution or to 
  display, use or otherwise exploit any Contribution. You hereby grant us a 
  royalty-free, perpetual, nonexclusive, worldwide, transferable license to use 
  and display any biographical information or photographs that you provide to us 
  in connection with this Agreement in any and all media. Upon request by us, 
  and at your own cost, you will promptly provide us with such documents and 
  agreements as we may require to further evidence and confirm your 
  representations, warranties, and covenants under this Agreement, including 
  material and location releases and assignments.</li>
  <li class="section"><span class="sectionname">Talent &amp; Expert Program</span> 
  This Section 5 only applies to Assignments made available under our Talent 
  &amp; Experts Program and to Contributors who deliver approved Contributions 
  under the Talent &amp; Experts Program, in addition to all other terms and 
  provisions of this Agreement. 
  <ol class="alpha">
    <li>Additional Grant of Rights in Your Likeness. Depending on the nature of 
    your Assignment, your Contribution may include or be accompanied by your 
    name, image, biography/resume, words, recorded actions, outtakes, 
    voice/sound print, photograph, picture, video, movie, or other likeness 
    (collectively, your "Likeness"). You agree that Demand Media is the 
    exclusive owner of all copyrights and other rights in and to all 
    Contributions, tangible works, and any results and proceeds arising from the 
    use of any or all of your Likeness in connection with your Contribution. You 
    further agree to give us the royalty-free right to use, incorporate, 
    exhibit, reproduce, distribute, promote, publicize, and otherwise exploit 
    your Likeness in any and all media, now known and hereafter devised, 
    throughout the world and in perpetuity in connection with your Contribution. 
    For the avoidance of doubt, our rights to your Likeness are limited to that 
    which you submit to us as part of or in connection with your Contribution 
    (for example, we have rights to video of you that you submit but not video 
    of you that may exist elsewhere).</li>
    <li>Limited License. Notwithstanding your grant of rights in your 
    Contribution(s) to Demand Media under Section 4 and Section 5 of this 
    Agreement, Demand Media grants you the limited license to include your 
    Contribution(s) or portions thereof in your personal demo reel; provided, 
    however, (i) that proper attribution is provided according to the guidelines 
    set forth by Demand Media from time to time and (ii) that you do not 
    license, sell, or syndicate such content to any third parties.</li></ol></li>
  <li class="section"><span class="sectionname">Status; No Employment 
  Relationship</span>. You are an independent contractor and are not authorized 
  to make representations or commitments to third parties on behalf of us or our 
  affiliates. This Agreement does not create an employment or agency 
  relationship. Nothing in this Agreement shall render you an employee, worker, 
  agent, or partner of Demand Media and you shall not hold yourself out as 
  such.</li>
  <li class="section"><span class="sectionname">Term</span>. This Agreement begins 
  on the Effective Date and will continue until terminated by either party with 
  10 days' prior written notice to the other party. If this Agreement is 
  terminated by either party while an Assignment is pending, such termination 
  will not be effective until the Assignment is completed. Section 4 ("Your 
  Grant of Rights"), Section 5 ("Talent &amp; Experts"), Section 8 
  ("Confidentiality"), Section 9 ("Representations and Warranties"), Section 10 
  ("Limitation of Liability"), Section 11 ("Choice of Law; Arbitration"), 
  Section 14 ("Severability") and any other term that should reasonably be 
  construed as surviving the termination of this Agreement, will survive 
  termination. But, after termination of this Agreement and as soon as 
  practicable after your written request therefore, we will cease displaying 
  your biographical information other than your name and photograph on any web 
  site that we own and operate.</li>
  <li class="section"><span class="sectionname">Confidentiality</span>. During the 
  term of this Agreement, you may have access to our or our affiliates' 
  confidential and proprietary information ("<span class="underline">Confidential 
  Information</span>"). During this Agreement and for two (2) years after 
  termination, you will not disclose or use our Confidential Information for any 
  purpose other than as necessary to perform an Assignment. In performing your 
  services under this Agreement, you will not use improperly or disclose any 
  confidential or proprietary information or trade secrets of any former or 
  current employers, clients, or other third persons.</li>
  <li class="section"><span class="sectionname">Representations and 
  Warranties</span>. You represent and warrant that: 
  <ol class="alpha">
    <li>you are at 18 years of age or older, are either: (i) a legal resident or 
    citizen of the United States, United Kingdom, or Canada; and (ii) that you 
    have the right and obtained all authorizations and consents necessary to 
    execute and enter into this Agreement and perform your obligations;</li>
    <li>you will comply with all applicable laws;</li>
    <li>your Contribution (i) is original, (ii) does not and will not defame or 
    disparage any person or entity or infringe upon or violate the intellectual 
    property rights, rights of privacy, or any other rights of any person or 
    entity; and (iii) is not the subject of any litigation or other claim or 
    proceeding, or, to your knowledge, any threat thereof;</li>
    <li>have not and will not convey or impair any rights in and to the 
    Contribution;</li>
    <li>if you learn of any claims alleging that any Contribution infringes any 
    third party's rights or is unlawful, you will immediately notify us;</li>
    <li>all of the information you have provided and will provide to us in 
    connection with this Agreement is and will at all times be true and correct 
    and not contain any material omissions; and</li>
    <li>you will comply with any policies and procedures posted by us on the 
    Website or otherwise provided to you in writing from time to 
  time.</li></ol></li>
  <li class="section"><span class="sectionname">LIMITATION OF LIABILITY</span>. WE 
  WILL NOT BE LIABLE UNDER ANY CIRCUMSTANCES FOR CONSEQUENTIAL (INCLUDING BUT 
  NOT LIMITED TO LOST OPPORTUNITIES OR PROFITS), SPECIAL OR PUNITIVE DAMAGES, 
  EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. OUR AGGREGATE LIABILITY IN 
  RESPECT OF ANY LOSS OR DAMAGE SUFFERED BY YOU AND ARISING OUT OF OR IN 
  CONNECTION WITH THIS AGREEMENT, WHETHER IN CONTRACT, TORT (INCLUDING 
  NEGLIGENCE) OR FOR BREACH OF STATUTORY DUTY OR IN ANY OTHER WAY, SHALL NOT 
  EXCEED THE AMOUNT PAYABLE BY US TO YOU UNDER THIS AGREEMENT. NOTHING IN THIS 
  AGREEMENT SHALL LIMIT OUR LIABILITY FOR DEATH OR PERSONAL INJURY RESULTING 
  FROM OUR NEGLIGENCE OR FOR FRAUD.</li>
  <li class="section"><span class="sectionname">CHOICE OF LAW; ARBITRATION</span> 
  <dl>
    <dt>FOR ALL CONTRIBUTORS EXCEPT UK RESIDENTS:</dt>
    <dd>THIS AGREEMENT WILL BE INTERPRETED ACCORDING TO THE LAWS OF THE STATE OF 
    CALIFORNIA, EXCLUDING THOSE LAWS THAT WOULD GIVE EFFECT TO THE LAWS OF A 
    DIFFERENT JURISDICTION. ANY DISPUTE ARISING OUT OF OR RELATING TO THIS 
    AGREEMENT, INCLUDING THE DETERMINATION OF THE SCOPE OR APPLICABILITY OF THIS 
    AGREEMENT TO ARBITRATE, SHALL BE DETERMINED BY ARBITRATION IN SANTA MONICA, 
    CALIFORNIA, IN A PROCEEDING ADMINISTERED BY JAMS PURSUANT TO ITS STREAMLINED 
    RULES AND PROCEDURES. JUDGMENT ON THE AWARD MAY BE ENTERED IN ANY COURT 
    HAVING JURISDICTION.</dd>
    <dt>FOR CONTRIBUTORS WHO ARE UK RESIDENTS:</dt>
    <dd>THE VALIDITY, CONSTRUCTION AND PERFORMANCE OF THIS AGREEMENT (AND ANY 
    CLAIM, DISPUTE OR MATTER ARISING UNDER OR IN CONNECTION WITH IT OR ITS 
    ENFORCEABILITY) AND ANY NON-CONTRACTUAL OBLIGATIONS ARISING OUT OF OR IN 
    CONNECTION WITH IT SHALL BE GOVERNED BY AND CONSTRUED IN ACCORDANCE WITH THE 
    LAW OF ENGLAND AND WALES.</dd>
    <dd>ANY DISPUTE SHALL BE REFERRED TO AND FINALLY RESOLVED BY ARBITRATION 
    UNDER THE RULES OF THE LONDON COURT OF INTERNATIONAL ARBITRATION ("LCIA") AS 
    IN FORCE FROM TIME TO TIME, WHICH RULES ARE DEEMED TO BE INCORPORATED BY 
    REFERENCE INTO THIS SECTION. FOR THE PURPOSE OF ANY SUCH ARBITRATION THE 
    NUMBER OF ARBITRATORS SHALL BE THREE, OF WHOM EACH PARTY SHALL NOMINATE ONE 
    AND THE THIRD SHALL BE APPOINTED BY THE LCIA AND BE CHAIRMAN.</dd></dl></li>
  <li class="section"><span class="sectionname">Taxes and Guild Payments</span>. You 
  are responsible for calculating and paying all taxes owed on all compensation 
  received by you from us. If we are required, pursuant to any applicable 
  present or future law, rule or regulation of any competent governmental or 
  other administrative body, to make any deduction or withholding in respect of 
  tax or otherwise from any amount or amounts payable to you pursuant to this 
  Agreement, we shall: (i) be entitled to pay the amount or amounts in question 
  after the deduction of the amount of such withholding or deduction; (ii) 
  promptly pay to the relevant authority within the period permitted by law the 
  amount of such withholding or deduction; and (iii) provide you with written 
  evidence (including certification where appropriate) that we have made the 
  payment to the relevant authority. If we do not make such withholding or 
  deduction, you shall pay any and all taxes and other charges payable on 
  account of such sums and you indemnify and agree to keep us fully indemnified 
  from and against any liabilities or expense in connection with such 
  withholding or deduction. If any governmental entity determines that we are 
  responsible for paying taxes on your behalf, any further compensation will be 
  net of taxes and you will promptly refund to us the amount(s) which we were 
  required to pay on your behalf. If you are a US resident or a US citizen, you 
  must complete and submit to us an IRS Form W 9 and any other applicable tax 
  documentation. All other Contributors will be required to complete a form 
  W-8BEN and any other applicable tax documentation. No worker's compensation or 
  other insurance will be obtained by us on your behalf. No payroll deductions 
  for employment taxes or insurance of any kind will be paid by us. We are not a 
  signatory to any agreement that would require any payments to WGA, DGA, SAG, 
  or any other union or guild in connection with this Agreement.</li>
  <li class="section"><span class="sectionname">Interpretation; Construction</span>. 
  In interpreting this Agreement, the words "including" and "includes" are meant 
  to be illustrative and not limiting. This Agreement will not be interpreted in 
  favor of one party or the other based on any presumptions regarding the 
  drafting of the document. The section titles used in this Agreement are for 
  convenience of reference only and have no legal or contractual effect. You may 
  not assign or otherwise transfer any of your rights or obligations under this 
  Agreement. This Agreement is binding upon and inures to the benefit of the 
  parties and their respective permitted successors and assigns. All notices 
  under this Agreement must be in writing and will be considered delivered if 
  sent via confirmed e-mail to an address provided by the recipient party to the 
  sending party, or by overnight delivery service, or hand delivery to a 
  provided address. If any provision of this Agreement is held to be 
  unenforceable: (a) the enforceability of the remaining provisions of this 
  Agreement will not be affected; and (b) the unenforceable provisions will be 
  replaced with valid provisions the effect of which comes as close as possible 
  to that of the unenforceable provisions.</li>
  <li class="section"><span class="sectionname">Severability</span>. If any 
  provision of this Agreement is held to be invalid or unenforceable such 
  invalidity or unenforceability shall not affect the other provisions of this 
  Agreement which shall remain in full force and effect. If any provision of 
  this Agreement is so found to be invalid or unenforceable but would be valid 
  or enforceable if some part of the provision were deleted, the provision in 
  question shall apply with such deletion(s) as may be necessary to make it 
  valid. The parties agree, in the circumstances referred to in this Section 13, 
  to attempt to substitute for any invalid or unenforceable provision a valid or 
  enforceable provision which achieves to the greatest extent possible the same 
  effect as would have been achieved by the invalid or unenforceable 
  provision.</li>
  <li class="section"><span class="sectionname">No Assignment</span>. You must 
  personally perform the Assignment and you are not entitled to assign the 
  benefit or burden of this Agreement or ask any third party to perform a part 
  of or assist in the performance of the Assignment under any circumstances 
  whatsoever without the express written consent of Demand Media.</li>
  <li class="section"><span class="sectionname">Data Protection</span>. You consent 
  to us and our duly authorized agents and employees holding and processing both 
  electronically and manually the data (including personal sensitive data and 
  information contained in email, email attachments and other forms of 
  electronic communication) that we collect, store or process that relates to 
  you, for the purposes of the administration and management of our contractors 
  and business and for compliance with applicable procedures, laws and 
  regulations.<br><br>To ensure regulatory compliance and for the protection of 
  our workers, contractors, clients/customers and business, we reserve the right 
  to monitor, intercept, review and access any communication facilities provided 
  by us that you may use during the Assignment. We will use this right of access 
  reasonably but it is important that you are aware that communications and 
  activities on the equipment of ours cannot be presumed to be private.</li>
  <li class="section"><span class="sectionname">Entire Agreement; No Waiver</span>. 
  This Agreement, including the <a href="#terms-of-use.html">Terms of Use</a>, <a href="#code-of-ethics.html">Code of Ethics</a>, <a href="#privacy-policy.html">Privacy and 
  Information Security Policy</a>, and the Applicable Terms (if any), 
  constitutes the entire agreement between the parties with respect to this 
  subject matter and supersedes all prior understandings and agreements relating 
  thereto. This Agreement applies to all Contributions submitted to us by you. 
  Any material modifications to this Agreement must be agreed to in writing by 
  both parties. A party does not waive any right under this Agreement by failing 
  to insist on compliance with any of the terms of this Agreement or by failing 
  to exercise any right hereunder.</li></ol></div></div>
  
  
  
</DIV><!-- /.wrapper --></DIV><!-- /#whitebox --></DIV><!-- /.left -->
<DIV class=right>
<DIV id=sidebar>
<DIV class=section>
<P><IMG src="<?php echo $base_path;?>sites/all/themes/fms/images/thankyou.png"></P></DIV><!-- /.section -->
<DIV class=duallinedivider></DIV><!-- /.duallinedivider -->
<DIV class="section dottedline">
<P>Welcome to our studio – we are always looking for new and talented 
freelancers to join our community.</P>
<P class=near>Make sure you have a resume ready and a writing sample if you are 
applying to be a writer.</P></DIV><!-- /.section -->
<DIV class="section dottedline">
<DL>
  <DT>You're in Good Company</DT>
  <DD>Our network of freelancers have hundreds of years of experience between 
  them.</DD>
  <DT>Secure and Reliable</DT>
  <DD>Your information is safe and your payments are guaranteed.</DD>
  <DD><IMG 
  border=0 src="<?php echo $base_path;?>sites/all/themes/fms/images/bbb.gif" width=135 height=52></DD>
  <DD></DD>
  <DT>We're Here for You</DT>
  <DD class=last>Having trouble? <A 
  href="#helpdesk.mvc#600" target=_blank>Let us 
  know</A>.<BR>We are here to help.</DD></DL></DIV><!-- /section -->
<DIV class="section dottedline">
<H3>Writer Application Tips</H3>
<P><EM>Resume lack direct writing experience?</EM> Make sure to highlight your 
expertise in a certain area and include any special interests.</P>
<P><EM>Lacking a writing sample?</EM> Try composing a simple how-to on a topic 
you are familiar with. Just think about guiding someone through a project.</P>
<P class=near><EM>In general</EM> – avoid grammatical errors and samples that 
are poetry, overly conversational or overly technical.</P></DIV><!-- /.section --></DIV><!-- /#sidebar --></DIV><!-- /.right --></DIV><!-- /.column-master.sidebar --></DIV><!-- /#application.v4 -->

</DIV><!-- /#mainbody -->



	
		<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script><script src="<?php echo $base_path;?>sites/all/themes/fms/js/ga.js" type="text/javascript"></script> 
 
<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-2413054-3");
        pageTracker._trackPageview();
    } catch (err) { }</script> 
 
<!-- Begin Pseudo Ominture --> 
<noscript> 
    <img src="https://vs.dmtracker.com/images/zig.gif?Log=1" /> 
</noscript> 
<script src="<?php echo $base_path;?>sites/all/themes/fms/js/vs.js"></script> 
 
<!-- End Ominture --> 
 
 
 <?php }else{ 
 //home page
 ?>
 <div style="height:8px;"></div>
<DIV class=master>
<DIV class=images style="height:760px;"><IMG id=writerimg style="DISPLAY: inline" 
src="<?php echo $base_path;?>sites/all/themes/fms/images/writer.jpg"> <IMG id=filmimg src="<?php echo $base_path;?>sites/all/themes/fms/images/filmmaker.jpg"> 
<IMG id=copyimg src="<?php echo $base_path;?>sites/all/themes/fms/images/copyeditor.jpg"> <IMG id=bloggerimg 
src="<?php echo $base_path;?>sites/all/themes/fms/images/blogger.jpg"> <IMG id=expertimg src="<?php echo $base_path;?>sites/all/themes/fms/images/expert.jpg"> 
</DIV>
<DIV id=loginwindow>
<form id="user-login-form" method="post" accept-charset="UTF-8" action="?q=node&amp;destination=node" name="Login" class="Form1">   
			<input name="method" value="account-signin" type="hidden">

			<dl>
				<dt class="label lbluser"><label for="email">Username</label></dt>
				<dd><input value="" gtbfieldid="86" name="name" id="email" type="text"></dd>

				<dt class="label lblpassword"><label for="password">Password</label></dt>
				<dd><input name="pass" id="password" type="password"></dd>


				<dt><a href="#">Forgot your password?</a></dt>

				<dt class="whitebutton"><span><input type="submit" class="form-submit" value="Log in" id="edit-submit" name="op"></span></dt>
			</dl>
			<input type="hidden" value="form-e68aa006ef30e5f421cf689986d4394d" id="form-e68aa006ef30e5f421cf689986d4394d" name="form_build_id">
<input type="hidden" value="user_login_block" id="edit-user-login-block" name="form_id">
		</form></DIV><!-- /#loginwindow -->
<DIV class=header>

<DIV class=logo></DIV>
<DIV class="actions loggedout"><A id=loginbutton 
href="#login">Login</A> | <A id=apply 
href="?q=user/register">Apply</A> </DIV></DIV>
<DIV class="menu FLC">
<UL>
  <LI class=current><A id=writerlink 
  href="#/#">Writers</A> 
  <LI><A id=filmlink href="#/#">Filmmakers</A> 
  <LI><A id=copylink href="#/#">Copy Editors</A> 
  <LI><A id=bloggerlink href="#/#">Bloggers</A> 
  <LI><A id=expertlink href="#/#">Experts</A> 
</LI></UL>
<DIV class=detailcontainer>
<DIV class="detail writer selected" id=writer-detail>
<H2>Demand Media Writers</H2>
<DIV class=body><SPAN class=subhead>Experienced freelancers writing articles for 
premium publishers</SPAN><BR><BR>Create your own schedule and write about what 
you know. Join our freelance community and earn significant income while 
building your portfolio.<BR>
<DIV class=buttons><A class="v2button white trans" 
href="#/freelance-work/writers.html"><SPAN 
class=text>Learn More</SPAN></A> <A class="v2button white trans" 
href="#/application.html?role=Writer"><SPAN 
class=text>Apply</SPAN></A> </DIV></DIV></DIV>
<DIV class="detail filmmaker" id=filmmaker-detail>
<H2>Demand Media Filmmakers</H2>
<DIV class=body><SPAN class=subhead>Professional filmmakers producing videos for 
an audience of millions</SPAN><BR><BR>Take control of your filmmaking career by 
choosing your projects and creating your own schedule. Have your work seen by a 
large audience and earn significant income in the process.<BR>
<DIV class=buttons><A class="v2button white trans" 
href="#/freelance-work/filmmakers.html"><SPAN 
class=text>Learn More</SPAN></A> <A class="v2button white trans" 
href="#/application.html?role=FilmMaker"><SPAN 
class=text>Apply</SPAN></A> </DIV></DIV></DIV>
<DIV class="detail copyeditor" id=copyeditor-detail>
<H2>Demand Media Copy Editors</H2>
<DIV class=body><SPAN class=subhead>Experienced editors applying traditional 
print media standards to online articles</SPAN><BR><BR>Join our experienced team 
of copy editing professionals and enjoy the flexibility of working from anywhere 
with the reliability of consistent work.<BR>
<DIV class=buttons><A class="v2button white trans" 
href="#/freelance-work/copy-editors.html"><SPAN 
class=text>Learn More</SPAN></A> <A class="v2button white trans" 
href="#/application.html?role=CopyEditor"><SPAN 
class=text>Apply</SPAN></A> </DIV></DIV></DIV>
<DIV class="detail blogger" id=blogger-detail>
<H2>Demand Media Blog Distribution Network</H2>
<DIV class=body><SPAN class=subhead>Established bloggers getting a bigger stage 
to share their voice</SPAN><BR><BR>Get your voice heard beyond your blog’s home 
page. Submit your blog into our distribution network and expand your online 
brand to a large, new audience.<BR>
<DIV class=buttons><A class="v2button white trans" 
href="#/freelance-work/bloggers.html"><SPAN 
class=text>Learn More</SPAN></A> <A class="v2button white trans" 
href="#/blogger-application.html"><SPAN 
class=text>Apply</SPAN></A> </DIV></DIV></DIV>
<DIV class="detail experts" id=experts-detail>
<H2>Demand Media Talent &amp; Experts Network</H2>
<DIV class=body><SPAN class=subhead>A network of experts expanding their brands 
online</SPAN><BR><BR>Join our network to further establish your professional 
reputation online. Take advantage of special projects and opportunities offered 
to those who are recognized experts in their field.<BR>
<DIV class=buttons><A class="v2button white trans" 
href="#/freelance-work/expert.html"><SPAN 
class=text>Learn More</SPAN></A> <A class="v2button white trans" 
href="#/expert-application.html"><SPAN 
class=text>Apply</SPAN></A> </DIV></DIV></DIV></DIV></DIV>
<DIV class=pagefoot>
<DIV class="distribution FLC">
<div class="ak" style="height:35px; padding-top:4px;">Distribution to over 80 million 
viewers <DIV class="arrow down" style="float:right; margin-right:8px;"></DIV></div> 
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
  href="http://www.cracked.com/" target=_blank>Cracked.com</A> </LI></UL></DIV><!-- /.slide-master -->
<UL class=links>
  <LI><A href="http://www.demandmedia.com/about/">About Demand Media</A> 
  <LI><A href="#/blog/">Blog</A> 
  <LI><A href="#/helpdesk.mvc">Contact Us</A> 
  <LI><A href="#/Public.mvc/Faq">FAQ</A> 
  <LI><A href="#/press">Press</A> 
  <LI><A href="#/terms-of-use.html">Terms of Use</A> 
  <LI><A href="#/privacy-policy.html">Privacy 
  Policy</A> 
  <LI><A href="#/work-from-home.html">Work From 
  Home</A> 
  <LI class=last><A href="#/sitemap.html">Sitemap</A> 
  </LI></UL><BR>
<DIV class=globalfooterlinks><A href="#/">Freelance 
Jobs</A> * <A href="#/freelance-work.html">Freelance 
Work</A> * <A 
href="#/freelance-work/writers.html">Freelance 
Writing Jobs</A> * <A 
href="#/freelance-work/copy-editors.html">Freelance 
Copy Editing Jobs</A> * <A 
href="#/freelance-work/filmmakers.html">Freelance 
Filmmaking Jobs</A> 
<P class=subfoot><!-- Version: Production_20101124.085140
  origin/hotfix-DMS4503
 --><!-- SHA: 33a79325aabd7ef17c05edf6f59f65482fcdbdc6
SJL01WDSWEB06 --></P>
<P class=subfoot><A 
href="#/published/sitemap-livestrong.html">Recently 
Published on LIVE<STRONG>STRONG</STRONG>.COM</A> * <A 
href="#/published/sitemap-ehow.html">Recently 
Published on eHow.com</A></P></DIV></DIV><!-- /.boxinset --></DIV></DIV><!-- pagefoot --></DIV>


<SCRIPT type=text/javascript>
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</SCRIPT>

<SCRIPT type=text/javascript>
    try {
        var pageTracker = _gat._getTracker("UA-2413054-3");
        pageTracker._trackPageview();
    } catch (err) { }</SCRIPT>
<!-- Begin Pseudo Ominture --><NOSCRIPT><IMG src="home_files/zig.gif"> 
</NOSCRIPT>
<SCRIPT src="<?php echo $base_path;?>sites/all/themes/fms/js/vs.js"></SCRIPT>
<!-- End Ominture --><!-- Start Quantcast tag w/ Media Title and Channel and Subchannel -->
<SCRIPT type=text/javascript>    _qoptions = { qacct: "p-4dIM5nVs2rFio", labels: "Demand Media Corporate" }; </SCRIPT>

<SCRIPT src="<?php echo $base_path;?>sites/all/themes/fms/js/quant.js" type=text/javascript></SCRIPT>
<NOSCRIPT><IMG style="DISPLAY: none" height=1 alt=Quantcast src="" width=1 
border=0> </NOSCRIPT><!-- End Quantcast tag --><!-- Begin comScore Tag -->
<SCRIPT>
    document.write(unescape("%3Cscript src='" + (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js' %3E%3C/script%3E")); 
</SCRIPT>

<SCRIPT>
     COMSCORE.beacon({
         c1: 2,
         c2: 6036385,
         c3: "",
         c4: "",
         c5: "",
         c6: "",
         c15: ""
     }); 
</SCRIPT>
<NOSCRIPT><IMG style="DISPLAY: none" height=0 alt="" src="" width=0> </NOSCRIPT><!-- End comScore Tag --><!-- OPTIMOST GLOBAL MODULE AND COUNTER CODE -->
<SCRIPT type=text/javascript>
    if (typeof (opContentUrls) != 'undefined' && typeof (opModulesArray) != 'undefined' && opContentUrls.length > 0 && opModulesArray.length > 0) {
        for (var i = 0; i < opModulesArray.length; i++) {
            optimost.displayModule(opModulesArray[i]);
        }
    }
    if (typeof opRunCounters == 'function') {
        opRunCounters();
    }
</SCRIPT>
<!-- END OPTIMOST GLOBAL MODULE AND COUNTER CODE -->


 <?php } ?>
 
<?php }else{ 

//loged in page
 ?>

<!-- Layout -->

<!-- Header Begins -->
<div class="Header">
    <div class="Frame">
        <div class="Container">
        
            <div class="branding"><a href="#"><img src="<?php echo $base_path;?>sites/all/themes/fms/images/dmlogo.png" alt="Demand Media Studios Freelance Jobs"></a></div>
        
	        
	        
            

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
                    
                        <li><a href="#/Writer.mvc/Index" rel="nofollow">Work Desk</a></li>
                        <li><a href="#/ContributorPromotion.mvc/EditProfile" rel="nofollow">Profile</a></li>
                        <li><a href="#ManageProfile.mvc/AccountInfo" rel="nofollow">Account</a></li>
						<li class="dropdown"><a href="#/ResourceCenter.mvc/Index">Resources</a>
							<div class="dropdownborder">
								<ul>
								
									<li><a href="#/ResourceCenter.mvc/Index?resourceCenterId=1">Writer Resource Center</a></li>
							        
									       <li><a href="#/groups.mvc?slPage=overview&amp;slGroupKey=48609837-ff72-4c79-bfb0-2cf2f97f1b44&amp;slAcceptInvitation=false">Writer Group</a></li>
								    
								    <li><a href="#/community/forum.html">General Forum</a></li>
								
								    <li><a href="#/blog/">Blog</a></li>
								</ul>
							</div>
						</li>
                    
                </ul>
            </div>
            
            
            
            <div class="Login hasdropdown">                
                    
                        <ul>
				            <li class="first">Hi, Dan</li>
				            
				                <li id="inboxcountcontainer"><a href="#/profile.mvc/privatemessaging?slPage=folder&amp;slFolderId=Inbox"><span>0</span> Inbox</a></li>
				            
			                <li><a href="?q=logout">Log out</a></li>
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
    
    <div id="roleAlertContainer"></div>
    
    


<div class="workdesk">
	<div id="find">
	<div id="findtop">
		

		<div id="top-master" class="FLC">
			
			<h1 class="Heading1">Find Assignments</h1>
		
		</div><!-- /#top-master -->

		<div id="desktabs" class="FLC">

			<ul class="FLC">
				<li><a href="#Writer.mvc/Index">My Work Desk</a></li>
				<li><a href="#Writer.mvc/Scorecard">Scorecard</a></li>
				
				    <li><a href="#Assignment.mvc/Find" id="selected">Find Assignments</a></li>
				    
				        <li><a href="#Writer.mvc/SuggestAssignments">Create Assignment</a></li>
				    
				<li><a href="#Writer.mvc/PublishedWork">Past Work</a></li>
				<li><a href="#PaymentHistory.mvc/Index">Earnings</a></li>
			</ul>

            

		</div><!-- /#desktabs -->
        
		<div id="claimedcount"><p><span id="twocounts"><span id="currentcount">0</span> of 3</span> Claimed Assignments</p></div><!-- /#claimedcount -->
	</div><!-- /#findtop -->

	<!-- /#interface-master -->
</div><!-- /#find -->

</div><!-- /.container -->

	
<?php print $breadcrumb; ?>
          <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?> 
							
							<?php print $content ?>
					
					<div class="CB"></div>
									
				</div>
			</div>
		</div>
		<!-- Content : end -->
		
		<!-- Footer : start -->
	



<!-- Footer : start -->
<div class="Footer">
	<div class="Frame">
		<div class="Container">
		
			<ul class="">
				<li><a href="#/about-demand-studios.html">About Demand Media</a></li>
				<li><a href="#/partners" rel="nofollow">Partners</a></li>
				<li><a rel="nofollow" href="#/helpdesk.mvc">Contact Us</a></li>
				<li><a href="#/Public.mvc/Faq" rel="nofollow">FAQ</a></li>
				<li><a href="#/press" rel="nofollow">Press</a></li>
				<li><a rel="nofollow" href="#/terms-of-use.html">Terms of Use</a></li>
				<li><a href="#/privacy-policy.html" rel="nofollow">Privacy Policy</a></li>
				<li><a href="#/work-from-home.html">Work From Home</a></li>
				<li><a href="#/sitemap.html" class="last">Sitemap</a></li>
			</ul>
			
			<ul class="subFooter">
				<li><a href="#/">Freelance Jobs</a></li>
				<li><a href="#/freelance-work.html">Freelance Work</a></li>
				<li><a href="#/freelance-work/writers.html">Freelance Writing Jobs</a></li>
				<li><a href="#/freelance-work/copy-editors.html">Freelance Copy Editing Jobs</a></li>
				<li><a href="#/freelance-work/filmmakers.html">Freelance Filmmaking Jobs</a></li>
				<li><a href="#/freelance-work/expert.html" class="last">Experts Wanted</a></li>
			</ul>
			<p class="image">
				
				<a href="http://www.la.bbb.org/Business-Report/Demand-Studios-100095484"><img src="index_files/bbb.gif" border="0" height="52" width="135"></a> <img id="dmlogo" src="index_files/DemandMedia.gif" alt="Demand Media"> <!-- START SCANALERT CODE --><a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.demandstudios.com"><img src="index_files/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee Secure is a Trademark of McAfee, Inc.'); return false;" border="0" height="54" width="94"></a><!-- END SCANALERT CODE -->
				
			</p><!-- /.image -->
			<ul class="subFooter">
				<li><a href="#/published/sitemap-livestrong.html">Recently Published on LIVE<strong>STRONG</strong>.COM</a></li>
				<li><a href="#/published/sitemap-ehow.html">Recently Published on eHow.com</a></li>
			</ul>			
		</div>
	</div>
</div>
<?php } ?>
 <?php print $closure ?>
  </body>
</html>
