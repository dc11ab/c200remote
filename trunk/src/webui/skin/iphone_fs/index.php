<?php
$html = <<<EOHTML
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>

<title>C200 iRemote</title>

<meta name="viewport" content="width=device-width; user-scalable=0; initial-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="author" content="dc11ab" />
<meta name="author" content="mygoddess" />
<meta name="author" content="SmashD" />

<link rel="apple-touch-icon" href="images/apple-touch-icon.png"/>
<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png" />
<link rel="apple-touch-startup-image" href="images/apple-touch-startup-image.png" />

<script language="javascript" type="text/javascript" src="../../control.js"></script>


<!-- jQTouch Start -->
<script src="jqtouch/jquery.1.3.2.min.js" type="application/x-javascript" charset="utf-8"></script>
<script src="jqtouch/jqtouch.min.js" type="application/x-javascript" charset="utf-8"></script>
<script src="jqtouch/jqtouch.transitions.js" type="application/x-javascript" charset="utf-8"></script>
<style type="text/css" media="screen">@import "jqtouch/jqtouch.css";</style>
<style type="text/css" media="screen">@import "themes/apple/theme.css";</style>

<script type="text/javascript" charset="utf-8">
    var jQT = new $.jQTouch({
        icon: 'images/apple-touch-icon-precomposed.png',
        addGlossToIcon: false,
        startupScreen: 'images/apple-touch-startup-image.png',
        statusBar: 'black',
        fixedViewport: 'true',
        fullScreen: 'true',
        useAnimations: 'true',
        preloadImages: [
            'themes/apple/img/back_button.png',
            'themes/apple/img/back_button_clicked.png',
            'themes/apple/img/button_clicked.png',
            'themes/apple/img/grayButton.png',
            'themes/apple/img/whiteButton.png',
            'themes/apple/img/loading.gif',
            'themes/apple/img/toggle.png',
            'themes/apple/img/toggleOn.png',
            'themes/apple/img/toolbar.png',
            'themes/apple/img/thumb.png',
            'images/apple-touch-icon.png',
            'images/apple-touch-icon-precomposed.png',
            'images/apple-touch-startup-image.png',
            'images/saf_41.gif',
            'images/saf_42.gif'
            ]
    });
</script>
<!--jQTouch End -->

<!-- special reboot/shutdown script -->
<script type="text/javascript" charset="utf-8">
function start_reboot() {
	passfCommand('power');
	setTimeout( "end_reboot();", 500); 
}
function end_reboot() {
	passfCommand('eject');
} 

function start_poweroff() {
//	return passfCommand('power');
		alert("not working atm, sorry...");

//	setTimeout( "end_poweroff();", 500); 
}
function end_poweroff() {
	passfCommand('delete');
} 
</script>
<!-- special reboot/shutdown script -->

<style>
div.section {
background:#eef;
/*background:#00f;*/ /*debug color*/
padding: 0.1em;
border-width:0px; /*later adjustment easier*/
border-style:solid;
border-color:grey;
width:310px;
margin-left:auto;
margin-top:2px;
margin-right:auto;
float:left;
}
div.section_a_left {
background:#eef;
/*background:#0f0;*/ /*debug color*/
padding: 0.1em;
border-width:0px;
border-style:solid;
border-color:grey;
width:220px;
margin-left:0px;
margin-top:2px;
float:left;
}
div.section_a_right {
background:#eef;
/*background:#f00;*/ /*debug color*/
padding: 0.1em;
border-width:0px;
border-style:solid;
border-color:grey;
width:84px;
margin-top:2px;
margin-right:0px;
float:left;
text-align: right;
}
button.vtext {
width: 80px;
height: 31px;
}
button.standard {
width:64px;
height:20px;
padding: 0.15em;
margin-left:auto;
margin-right:auto;
}
button.small {
width:70px;
height:25px;
padding: 0.25em;
margin-left:auto;
margin-right:auto;
text-align:left;
text-indent:6px;
}
button.three_row {
width:99px;
height:28px;
padding: 0.25em;
margin-left:auto;
margin-right:auto;
}
button.four_row {
width:73px;
height:23px;
padding: 0.2em;
margin-left:auto;
margin-right:auto;
}
button.five_row {
width:58px;
height:25px;
padding: 0.25em;
}
div.c200_remote_logo {
float: left;
margin-left: auto;
margin-right: auto;
width:57px;
height:57px;
background-image: url(images/apple-touch-icon-precomposed.png); 
text-align:center;
}

#buttons {
background-color:silver;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 11pt; 
}
#buttons_small {
background-color:silver;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 9pt; 
}

a.five_row:link { /*Power "button" styling*/
	text-decoration:none;
	color:#000000;
	border-color:#000000;
	border-style:solid;
	border-width:1px;
	padding-top:4px;
	padding-left:4px;
	padding-right:4px;
	padding-bottom:5px;
}
a.about_button:link { /*about "button" styling*/
	text-decoration:none;
	color:#333399;
	font-family: arial, verdana, ms sans serif;
	font-weight: bold;
	font-size: 12pt;
	margin-left:-10px; 
}


<!-- /* :hover is a pseudo selector to use to set the mouseover attributes */ -->
#buttons:hover {
background-color: #F9F9F9; }
</style>
</head>

<body style="margin-left: 5px; margin-top: 0px; background-color: #eef;">

<div id="RemoteArea" style="padding: 0.1em; height: 540px; width: 260px; margin-left: 0px; margin-top: 0px;">
<div class="section" name="SectionA"> 
	<!-- have to use a styled href here, does not work with buttons :( -->
	<a class="five_row slideup" id="buttons_small" style="background-color:#cc2222;" href="#PowerPanel">POWER</a>

	<button class="five_row" id="buttons_small" onclick="return passfCommand('tvmode')">TV MOD</button>
	<button class="five_row" id="buttons_small" onclick="return passfCommand('setup')">SETUP</button>
	<button class="five_row" id="buttons_small" onclick="return passfCommand('btsuspend')">BT SUS</button>
	<button class="five_row" id="buttons_small" onclick="return passCommand('j')">EJECT</button> 
</div>
<div style="float:left; width:310px;">
	<div class="section_a_left" name="SectionB"> 
		<button class="small" id="buttons" onclick="return passCommand('1')">1&nbsp;&nbsp;.:/@</button>
		<button class="small" id="buttons" onclick="return passCommand('2')">2&nbsp;&nbsp;abc</button>
		<button class="small" id="buttons" onclick="return passCommand('3')">3&nbsp;&nbsp;def</button>
		<br>
		<button class="small" id="buttons" onclick="return passCommand('4')">4&nbsp;&nbsp;ghi</button>
		<button class="small" id="buttons" onclick="return passCommand('5')">5&nbsp;&nbsp;jkl</button>
		<button class="small" id="buttons" onclick="return passCommand('6')">6&nbsp;&nbsp;mno</button>
		<br>
		<button class="small" id="buttons" onclick="return passCommand('7')">7&nbsp;&nbsp;pqrs</button>
		<button class="small" id="buttons" onclick="return passCommand('8')">8&nbsp;&nbsp;tuv</button>
		<button class="small" id="buttons" onclick="return passCommand('9')">9&nbsp;&nbsp;def</button>
		<br>
		<button class="small" id="buttons" onclick="return passCommand('c')">DEL</button>
		<button class="small" id="buttons" onclick="return passCommand('0')">0&nbsp;[spc]</button>
		<button class="small" id="buttons" onclick="return passCommand('l')">C/NUM</button>
		<br>
		<button class="small" id="buttons" onclick="return passCommand('O')">HOME</button>
		<button class="small" id="buttons" onclick="return passCommand('g')">FILE&nbsp;M</button>
		<button class="small" id="buttons" onclick="return passCommand('H')">T SEEK</button>
	</div>
	<div class="section_a_right" name="SectionC">
		<button class="vtext" id="buttons" style="background-color: #c22;" onclick="return passfCommand('red')">VIDEO</button>
		<button class="vtext" id="buttons" style="background-color: #2c2;" onclick="return passfCommand('green')">MUSIC</button>
		<button class="vtext" id="buttons" style="background-color: #cc2;" onclick="return passfCommand('yellow')">PHOTO</button>
		<button class="vtext" id="buttons" style="background-color: #22c;" onclick="return passfCommand('blue')">ALL</button>
	</div>
</div>

<div class="section" name="SectionE">
	<button class="three_row" id="buttons" onclick="return passCommand('v')">RETURN</button>
	<button class="three_row" id="buttons" style="background-color: #777;" onclick="return passCommand('U')">UP</button>
	<button class="three_row" id="buttons" onclick="return passCommand('B')">SOURCE</button>
	<br>
	<button class="three_row" id="buttons" style="background-color: #777;" onclick="return passCommand('L')">LEFT</button>
	<button class="three_row" id="buttons" style="background-color: #777;" onclick="return passfCommand('enter')">OK/Enter</button>
	<button class="three_row" id="buttons" style="background-color: #777;" onclick="return passCommand('R')">RIGHT</button>
	<br>
	<button class="three_row" id="buttons" onclick="return passCommand('i')">INFO</button>
	<button class="three_row" id="buttons" style="background-color: #777;" onclick="return passCommand('D')">DOWN</button>
	<button class="three_row" id="buttons" onclick="return passCommand('s')">STOP</button>
</div>

<div style="float:left; width:310px;">
	
	<div class="section" name="SectionF" style="width:123px;">
		<button class="three_row" style="height:27px;" id="buttons" onclick="return passfCommand('volup')">VOL&nbsp;+</button><br>
		<button class="three_row" style="height:27px;" id="buttons" onclick="return passfCommand('voldown')">VOL&nbsp;&ndash;</button>
	</div>	

	<div class="c200_remote_logo" name="logo">
		<br><br><a class="about_button slideup" href="#AboutPanel">about</a>
	</div>

	<div class="section" name="SectionG" style="width:117px; float:right; margin-right:-15px;">
		<button class="three_row" style="height:27px;" id="buttons" onclick="return passCommand('y')">PLAY</button><br>
		<button class="three_row" style="height:27px;" id="buttons" onclick="return passCommand('p')">PAUSE</button>
	</div>
</div>

<div class="section" name="SectionH">
	<button class="three_row" id="buttons" onclick="return passCommand('u')">MUTE</button>
	<button class="three_row" id="buttons" onclick="return passCommand('w')">REV</button>
	<button class="three_row" id="buttons" onclick="return passCommand('f')">FWD</button>
	<br>
	<button class="three_row" id="buttons" onclick="return passCommand('m')">MENU</button>
	<button class="three_row" id="buttons" onclick="return passCommand('E')">PREV</button>
	<button class="three_row" id="buttons" onclick="return passCommand('n')">NEXT</button>
	<br>
	<button class="three_row" id="buttons" onclick="return passCommand('r')">TITLE</button>
	<button class="three_row" id="buttons" onclick="return passCommand('r')">REPEAT</button>
	<button class="three_row" id="buttons" onclick="return passCommand('d')">SLOW</button>
	<br>
</div>
<div class="section" name="SectionI">
	<button class="four_row" id="buttons" onclick="return passCommand('N')">ANGLE</button>
	<button class="four_row" id="buttons" onclick="return passCommand('a')">AUDIO</button>
	<button class="four_row" id="buttons" onclick="return passCommand('b')">SUBS</button>
	<button class="four_row" id="buttons" onclick="return passCommand('z')">ZOOM</button>
</div>
<!-- The end of original rc) -->
<div class="section" id="macro" style="font-family: sans-serif; font-size:0.7em;">
	<form action="return passCommand('$macroinput')" id="macroForm" name="macroinput" method="post" enctype="multipart/form-data">
		<input size="30" value="Insert macro..." name="macroinput" onblur="if (this.value == '') {this.value = 'Insert macro...';}" onfocus="if (this.value == 'Insert macro...') {this.value = '';}" type="text" style="width:225px;">&nbsp;&nbsp;&nbsp;
		<button type="four_row" style="width:67px;height:17px;padding-top:-0.3em;font-size:7pt;margin-top:-4px;" class="standard" id="buttons"><b>RUN</b></button>
    <div class="info">
				<p style="margin-top:-7px;">Info:</p>
        <p>Add this page to your home screen / springboard to view the custom icon, 
        	<br>startup screen, and full screen mode.</p>
				<br>
				<p>Simply save it to an icon from your Safari menu:<br>
				<br>
				4.1 and older:<img src="images/saf_41.gif" style="float:right; margin-right:100px;" /><br>
				<br>
				<br>
			4.2.1+:<img src="images/saf_42.gif" style="float:right; margin-right:100px;" /></p>
		    </div>
		    <ul>
		        <li><a class="slideup" href="#AboutPanel">about</a></li>
		    </ul>
	</form>
</div>
</div>

<!-- special iPhone-style layers -->

<div id="PowerPanel" style="margin-left:-5px;width:320px;background: rgb(197,204,211) url(themes/apple/img/pinstripes.png);">
    <div class="toolbar">
        <h1>Power Options</h1>
        <a class="button back" href="#">Back</a>
    </div>
        <ul>
            <li><a onclick="return passfCommand('power')" href="#">Standby Toggle</a></li>
            <li><a onclick="start_reboot();" href="#">Reboot</a></li>
            <li><a onclick="start_poweroff();" href="#">Power Off</a></li>
        </ul>
</div>

<div id="AboutPanel" style="margin-left:-5px;width:320px;background: rgb(197,204,211) url(themes/apple/img/pinstripes.png);">
    <div class="toolbar">
        <h1>C200 iRemote</h1>
        <a class="button back" href="#">Back</a>
    </div> 
    <div class="info">
    	<p style="text-align:center;"><img src="images/apple-touch-icon-precomposed.png" /></p>
			<br>
			<p style="margin-left:15px;"><strong>c200remote</strong> skin "C200 iRemote" by <a href="http://smashd.de" target="_blank">smashd.de</a>
    </div>
	        <ul>
	            <li><a href="http://code.google.com/p/c200remote/" target="_blank">google code project page</a></li>
	            <li>(c200remote svn and more)</li>
	        </ul>
	        <ul>
	            <li><a href="http://www.networkedmediatank.com/showthread.php?tid=30168" target="_blank">forum thread</a></li>
	            <li>(at networkedmediatank.com)</li>
	        </ul>
			</p>
		</p>
</div>


</body>
</html>

EOHTML;

function sendCommand($theCmd)
{
	$errno = 0;
	$errstr = '';
	// Open the connection
	$fp = fsockopen ('127.0.0.1', 30000, $errno, $errstr, 10);
	if (!$fp)
	{
		$errstr = escape($errstr);
		header('HTTP/1.1 500 Internal error', true, 500);
		echo <<<EOJS
"$errstr"
EOJS;
		exit;
	}
	else
	{
		$res = fwrite($fp, $theCmd);
		if ($res !== false)
		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}
		fflush($fp);
		fclose($fp);
		exit;
	}
}

function sendCommandTranslated($cmd)
{
	$commands = array(
		"power" => "x",
		"eject" => "j",
		"tvmode" => "T",
		"setup" => "e",
		"btsuspend" => "h",
		"enter" => "\n",
		"0" => "0",
		"1" => "1",
		"2" => "2",
		"3" => "3",
		"4" => "4",
		"5" => "5",
		"6" => "6",
		"7" => "7",
		"8" => "8",
		"9" => "9",
		"delete" => "c",
		"capsnum" => "l",
		"filemode" => "g",
		"home" => "O",
		"timeseek" => "H",
		"source" => "B",
		"up" => "U",
		"down" => "D",
		"left" => "L",
		"right" => "R",
		"info" => "i",
		"play" => "y",
		"stop" => "s",
		"pause" => "p",
		"return" => "v",
		"video" => "P",
		"red" => "P",
		"music" => "G",
		"green" => "G",
		"photo" => "Y",
		"yellow" => "Y",
		"allfiles" => "E",
		"blue" => "E",
		"pgup" => "+",
		"volup" => "+",
		"pgdown" => "-",
		"voldown" => "-",
		"mute" => "u",
		"menu" => "m",
		"forward" => "f",
		"reverse" => "w",
		"title" => "t",
		"repeat" => "r",
		"angle" => "N",
		"audio" => "a",
		"subtitle" => "b",
		"zoom" => "z",
		"next" => "n",
		"previous" => "E",
		"slow" => "d",
	);
	if (isset($commands[$cmd]))
		sendCommand($commands[$cmd]);
	else
	{
		header('HTTP/1.1 500 Internal error', true, 500);
		echo <<<EOJS
"The command alias <br><br>" + echo($commands[$cmd]); + "<br><br>does not exists."
EOJS;
		exit;
	}
}

if (isset($_GET['cmd']) && ($_GET['cmd'] != ''))
	sendCommand($_GET['cmd']);

if (isset($_GET['fcmd']) && ($_GET['fcmd'] != ''))
	sendCommandTranslated($_GET['fcmd']);

echo $html;