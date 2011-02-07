<?php
$html = <<<EOHTML
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>

<title>C200 iRemote</title>

<meta name="viewport" content="width=device-width; user-scalable=0; initial-scale=1.17, maximum-scale=1.17">
<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="author" content="dc11ab" />
<meta name="author" content="mygoddess" />
<meta name="author" content="SmashD" />

<link rel="apple-touch-icon" href="images/apple-touch-icon.png"/>
<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png" />
<link rel="apple-touch-startup-image" href="images/apple-touch-startup-image.png" />

<script language="javascript" type="text/javascript" src="../../control.js"></script>

<style>
div.section {
background:#eef;
padding: 0.1em;
border-width:0px;
border-style:solid;
border-color:grey;
width:265px;
margin-left:auto;
margin-top:2px;
margin-right:auto;
float:left;
}
div.section_a_left {
background:#eef;
padding: 0.1em;
border-width:0px;
border-style:solid;
border-color:grey;
width:200px;
margin-left:auto;
margin-top:2px;
margin-right:auto;
float:left;
}
div.section_a_right {
background:#eef;
padding: 0.1em;
border-width:0px;
border-style:solid;
border-color:grey;
width:50px;
margin-left:auto;
margin-top:2px;
margin-right:4px;
float:right;
}
button.vtext {
margin-left: 5%;
width: 55px;
height: 26px;
}
button.standard {
width:64px;
height:20px;
padding: 0.1em;
margin-left:auto;
margin-right:auto;
}
button.small {
width:64px;
height:20px;
padding: 0.1em;
margin-left:auto;
margin-right:auto;
text-align:left;
text-indent:12px;
}
button.three_row {
width:84px;
height:22px;
padding: 0.1em;
margin-left:auto;
margin-right:auto;
}
button.four_row {
width:62px;
height:20px;
padding: 0.1em;
margin-left:auto;
margin-right:auto;
}
button.five_row {
width:49px;
height:20px;
padding: 0.1em;
}
div.c200_remote_logo {
float: left;
margin-left: auto;
margin-right: auto;
width:57px;
height:57px;
background-image: url(images/apple-touch-icon-precomposed.png); 
}

#buttons {
background-color:silver;
}
<!-- /* :hover is a pseudo selector to use to set the mouseover attributes */ -->
#buttons:hover {
background-color: #F9F9F9; }
</style>
</head>

<body style="margin-left: 5px; margin-top: 0px; background-color: #eef;">

<div id="RemoteArea" style="padding: 0.1em; height: 540px; width: 260px; margin-left: 0px; margin-top: 0px;">
<div class="section" name="SectionA"> 
	<button class="five_row" id="buttons" style="background-color: #CC0000;" onclick="return passCommand('x')">POWER</button>
	<button class="five_row" id="buttons" onclick="return passfCommand('tvmode')">TV MOD</button>
	<button class="five_row" id="buttons" onclick="return passfCommand('setup')">SETUP</button>
	<button class="five_row" id="buttons" onclick="return passfCommand('btsuspend')">BT SUS</button>
	<button class="five_row" id="buttons" onclick="return passCommand('j')">EJECT</button> 
</div>
<div class="section_a_left" name="SectionB"> 
	<button class="small" id="buttons" onclick="return passCommand('1')">1&emsp;.:/@</button>
	<button class="small" id="buttons" onclick="return passCommand('2')">2&emsp;abc</button>
	<button class="small" id="buttons" onclick="return passCommand('3')">3&emsp;def</button>
	<br>
	<button class="small" id="buttons" onclick="return passCommand('4')">4&emsp;ghi</button>
	<button class="small" id="buttons" onclick="return passCommand('5')">5&emsp;jkl</button>
	<button class="small" id="buttons" onclick="return passCommand('6')">6&emsp;mno</button>
	<br>
	<button class="small" id="buttons" onclick="return passCommand('7')">7&emsp;pqrs</button>
	<button class="small" id="buttons" onclick="return passCommand('8')">8&emsp;tuv</button>
	<button class="small" id="buttons" onclick="return passCommand('9')">9&emsp;def</button>
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
	<button class="vtext" id="buttons" style="background-color: red;" onclick="return passfCommand('red')">&nbsp;</button>
	<button class="vtext" id="buttons" style="background-color: green;" onclick="return passfCommand('green')">&nbsp;</button>
	<button class="vtext" id="buttons" style="background-color: yellow;" onclick="return passfCommand('yellow')">&nbsp;</button>
	<button class="vtext" id="buttons" style="background-color: blue;" onclick="return passfCommand('blue')">&nbsp;</button>
</div>
<div class="section" name="SectionE">
	<button class="three_row" id="buttons" onclick="return passCommand('v')">RETURN</button>
	<button class="three_row" id="buttons" style="background-color: #999;" onclick="return passCommand('U')">&uArr;</button>
	<button class="three_row" id="buttons" onclick="return passCommand('B')">SOURCE</button>
	<br>
	<button class="three_row" id="buttons" style="background-color: #999;" onclick="return passCommand('L')">&lArr;</button>
	<button class="three_row" id="buttons" style="background-color: #777;" onclick="return passfCommand('enter')">OK/Enter</button>
	<button class="three_row" id="buttons" style="background-color: #999;" onclick="return passCommand('R')">&rArr;</button>
	<br>
	<button class="three_row" id="buttons" onclick="return passCommand('i')">INFO</button>
	<button class="three_row" id="buttons" style="background-color: #999;" onclick="return passCommand('D')">&dArr;</button>
	<button class="three_row" id="buttons" onclick="return passCommand('s')">STOP</button>
</div>

<div style="float:left; width:265px;">
	
	<div class="section" name="SectionF" style="width:99px;">
		<button class="three_row" style="height:27px;" id="buttons" onclick="return passfCommand('volup')">VOL&nbsp;+</button><br>
		<button class="three_row" style="height:27px;" id="buttons" onclick="return passfCommand('voldown')">VOL&nbsp;&ndash;</button>
	</div>	

	<div class="c200_remote_logo" name="logo"></div>

	<div class="section" name="SectionG" style="width:99px; float:right; margin-right:-12px;">
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
		<input size="27" value="Insert macro..." name="macroinput" onblur="if (this.value == '') {this.value = 'Insert macro...';}" onfocus="if (this.value == 'Insert macro...') {this.value = '';}" type="text" style="width:192px;">
		<button type="four_row" class="standard" id="buttons"><b>SUBMIT</b></button>

		<b>Info:</b><br>
		This website is being viewed in fullscreen when you launch it as an icon from your springboard!<br>
		Simply save it to an icon from your Safari menu:<br>
		<br>
		4.1 and older:<img src="images/saf_41.gif" style="float:right; margin-right:100px;" /><br>
		<br>
		<br>
		4.2.1+:<img src="images/saf_42.gif" style="float:right; margin-right:100px;" /><br>
		<br>
		<br>
		As an alternative you may use any 3rd party webbrowser that supports fullscreen view.<br>
		<br>
		<br>
		iPhone web remote for Syabas Popcorn Hour C-200<br>
		<i>edited by <a href="http://smashd.de" target="_blank">smashd.de</a>, ver 1.1, Feb 07 2011</i>
	</form>
</div>
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