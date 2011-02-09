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

<style type="text/css" media="screen">@import "style_slice.css";</style>

<!-- jQTouch Start -->
<script src="jqtouch/jquery.1.3.2.min.js" type="application/x-javascript" charset="utf-8"></script>
<script src="jqtouch/jqtouch.min.js" type="application/x-javascript" charset="utf-8"></script>
<script src="jqtouch/jqtouch.transitions.js" type="application/x-javascript" charset="utf-8"></script>
<style type="text/css" media="screen">@import "jqtouch/jqtouch.css";</style>
<style type="text/css" media="screen">@import "themes/apple/theme.css";</style>
<script src="jqt_init.js" type="application/x-javascript" charset="utf-8"></script>
<script src="special_func.js" type="application/x-javascript" charset="utf-8"></script>
<!--jQTouch End -->


<!-- onclick image swap function -->
<!-- usage: onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)"  -->
</head>

<body>

<!-- ************************* numeric GUI ************************** -->
<div id="Tabelle_01">
	<div id="id01-iR-GUI-num_">
		<img id="id01_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/01_iR_GUI_num.png" width="110" height="51" alt="" />
	</div>
	<div id="id02-iR-GUI-num_">
		<a class="fade" href="#Tabelle_02"><img id="id02_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/02_iR_GUI_num.png" width="101" height="51" alt="" /></a>
	</div>
	<div id="id03-iR-GUI-num_">
		<a class="fade" href="#Tabelle_03"><img id="id03_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/03_iR_GUI_num.png" width="109" height="51" alt="" /></a>
	</div>
	<div id="id04-iR-GUI-num_">
		<a class="slideup" href="#PowerPanel"><img id="id04_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/04_iR_GUI_num.png" width="55" height="57" alt="" /></a>
	</div>
	<div id="id05-iR-GUI-num_">
		<a class="slideup" href="#TVModePanel"><img id="id05_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/05_iR_GUI_num.png" width="71" height="57" alt="" /></a>
	</div>
	<div id="id06-iR-GUI-num_">
		<a href="#" onclick="passfCommand('setup');"><img id="id06_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/06_iR_GUI_num.png" width="69" height="57" alt="" /></a>
	</div>
	<div id="id07-iR-GUI-num_">
		<a href="#" onclick="passfCommand('btsetup');"><img id="id07_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/07_iR_GUI_num.png" width="70" height="57" alt="" /></a>
	</div>
	<div id="id08-iR-GUI-num_">
		<a href="#" onclick="passfCommand('eject');"><img id="id08_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/08_iR_GUI_num.png" width="55" height="57" alt="" /></a>
	</div>
	<div id="id09-iR-GUI-num_">
		<a href="#" onclick="passfCommand('1');"><img id="id09_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/09_iR_GUI_num.png" width="110" height="53" alt="" /></a>
	</div>
	<div id="id10-iR-GUI-num_">
		<a href="#" onclick="passfCommand('2');"><img id="id10_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/10_iR_GUI_num.png" width="101" height="53" alt="" /></a>
	</div>
	<div id="id11-iR-GUI-num_">
		<a href="#" onclick="passfCommand('3');"><img id="id11_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/11_iR_GUI_num.png" width="109" height="53" alt="" /></a>
	</div>
	<div id="id12-iR-GUI-num_">
		<a href="#" onclick="passfCommand('4');"><img id="id12_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/12_iR_GUI_num.png" width="110" height="50" alt="" /></a>
	</div>
	<div id="id13-iR-GUI-num_">
		<a href="#" onclick="passfCommand('5');"><img id="id13_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/13_iR_GUI_num.png" width="101" height="50" alt="" /></a>
	</div>
	<div id="id14-iR-GUI-num_">
		<a href="#" onclick="passfCommand('6');"><img id="id14_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/14_iR_GUI_num.png" width="109" height="50" alt="" /></a>
	</div>
	<div id="id15-iR-GUI-num_">
		<a href="#" onclick="passfCommand('7');"><img id="id15_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/15_iR_GUI_num.png" width="110" height="53" alt="" /></a>
	</div>
	<div id="id16-iR-GUI-num_">
		<a href="#" onclick="passfCommand('8');"><img id="id16_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/16_iR_GUI_num.png" width="101" height="53" alt="" /></a>
	</div>
	<div id="id17-iR-GUI-num_">
		<a href="#" onclick="passfCommand('9');"><img id="id17_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/17_iR_GUI_num.png" width="109" height="53" alt="" /></a>
	</div>
	<div id="id18-iR-GUI-num_">
		<a href="#" onclick="passfCommand('delete');"><img id="id18_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/18_iR_GUI_num.png" width="110" height="42" alt="" /></a>
	</div>
	<div id="id19-iR-GUI-num_">
		<a href="#" onclick="passfCommand('0');"><img id="id19_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/19_iR_GUI_num.png" width="101" height="42" alt="" /></a>
	</div>
	<div id="id20-iR-GUI-num_">
		<a href="#" onclick="passfCommand('capsnum');"><img id="id20_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/20_iR_GUI_num.png" width="109" height="42" alt="" /></a>
	</div>
	<div id="id21-iR-GUI-num_">
		<a href="#" onclick="passfCommand('home');"><img id="id21_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/21_iR_GUI_num.png" width="110" height="41" alt="" /></a>
	</div>
	<div id="id22-iR-GUI-num_">
		<a href="#" onclick="passfCommand('filemode');"><img id="id22_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/22_iR_GUI_num.png" width="101" height="41" alt="" /></a>
	</div>
	<div id="id23-iR-GUI-num_">
		<a href="#" onclick="passfCommand('timeseek');"><img id="id23_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/23_iR_GUI_num.png" width="109" height="41" alt="" /></a>
	</div>
	<div id="id24-iR-GUI-num_">
		<a href="#" onclick="passfCommand('red');"><img id="id24_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/24_iR_GUI_num.png" width="91" height="41" alt="" /></a>
	</div>
	<div id="id25-iR-GUI-num_">
		<a href="#" onclick="passfCommand('green');"><img id="id25_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/25_iR_GUI_num.png" width="70" height="41" alt="" /></a>
	</div>
	<div id="id26-iR-GUI-num_">
		<a href="#" onclick="passfCommand('yellow');"><img id="id26_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/26_iR_GUI_num.png" width="69" height="41" alt="" /></a>
	</div>
	<div id="id27-iR-GUI-num_">
		<a href="#" onclick="passfCommand('blue');"><img id="id27_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/27_iR_GUI_num.png" width="90" height="41" alt="" /></a>
	</div>
	<div id="id28-iR-GUI-num_">
		<img id="id28_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/28_iR_GUI_num.png" width="211" height="72" alt="" />
	</div>
	<div id="id29-iR-GUI-num_">
		<a class="slideup" href="#AboutPanel"><img id="id29_iR_GUI_num" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/29_iR_GUI_num.png" width="109" height="72" alt="" /></a>
	</div>
</div>





<!-- ************************* quicknav GUI ************************** -->
<div id="Tabelle_02">
	<div id="id01-iR-GUI-qui_">
		<a class="fade" href="#Tabelle_01"><img id="id01_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/01_iR_GUI_qui.png" width="111" height="53" alt="" /></a>
	</div>
	<div id="id02-iR-GUI-qui_">
		<img id="id02_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/02_iR_GUI_qui.png" width="99" height="53" alt="" />
	</div>
	<div id="id03-iR-GUI-qui_">
		<a class="fade" href="#Tabelle_03"><img id="id03_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/03_iR_GUI_qui.png" width="110" height="53" alt="" /></a>
	</div>
	<div id="id04-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('red');"><img id="id04_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/04_iR_GUI_qui.png" width="90" height="43" alt="" /></a>
	</div>
	<div id="id05-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('green');"><img id="id05_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/05_iR_GUI_qui.png" width="70" height="43" alt="" /></a>
	</div>
	<div id="id06-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('yellow');"><img id="id06_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/06_iR_GUI_qui.png" width="70" height="43" alt="" /></a>
	</div>
	<div id="id07-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('blue');"><img id="id07_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/07_iR_GUI_qui.png" width="90" height="43" alt="" /></a>
	</div>
	<div id="id08-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('return');"><img id="id08_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/08_iR_GUI_qui.png" width="65" height="73" alt="" /></a>
	</div>
	<div id="id09-iR-GUI-qui_">
		<img id="id09_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/09_iR_GUI_qui.png" width="190" height="55" alt="" />
	</div>
	<div id="id10-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('source');"><img id="id10_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/10_iR_GUI_qui.png" width="65" height="73" alt="" /></a>
	</div>
	<div id="id11-iR-GUI-qui_">
		<img id="id11_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/11_iR_GUI_qui.png" width="61" height="46" alt="" />
	</div>
	<div id="id12-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('up');"><img id="id12_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/12_iR_GUI_qui.png" width="69" height="46" alt="" /></a>
	</div>
	<div id="id13-iR-GUI-qui_">
		<img id="id13_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/13_iR_GUI_qui.png" width="60" height="46" alt="" />
	</div>
	<div id="id14-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('volup');"><img id="id14_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/14_iR_GUI_qui.png" width="65" height="72" alt="" /></a>
	</div>
	<div id="id15-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('play');"><img id="id15_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/15_iR_GUI_qui.png" width="65" height="71" alt="" /></a>
	</div>
	<div id="id16-iR-GUI-qui_">
		<img id="id16_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/16_iR_GUI_qui.png" width="190" height="12" alt="" />
	</div>
	<div id="id17-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('left');"><img id="id17_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/17_iR_GUI_qui.png" width="50" height="71" alt="" /></a>
	</div>
	<div id="id18-iR-GUI-qui_">
		<img id="id18_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/18_iR_GUI_qui.png" width="11" height="71" alt="" />
	</div>
	<div id="id19-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('enter');"><img id="id19_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/19_iR_GUI_qui.png" width="69" height="71" alt="" /></a>
	</div>
	<div id="id20-iR-GUI-qui_">
		<img id="id20_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/20_iR_GUI_qui.png" width="10" height="71" alt="" />
	</div>
	<div id="id21-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('right');"><img id="id21_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/21_iR_GUI_qui.png" width="50" height="71" alt="" /></a>
	</div>
	<div id="id22-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('pause');"><img id="id22_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/22_iR_GUI_qui.png" width="65" height="78" alt="" /></a>
	</div>
	<div id="id23-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('voldown');"><img id="id23_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/23_iR_GUI_qui.png" width="65" height="77" alt="" /></a>
	</div>
	<div id="id24-iR-GUI-qui_">
		<img id="id24_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/24_iR_GUI_qui.png" width="190" height="9" alt="" />
	</div>
	<div id="id25-iR-GUI-qui_">
		<img id="id25_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/25_iR_GUI_qui.png" width="61" height="49" alt="" />
	</div>
	<div id="id26-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('down');"><img id="id26_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/26_iR_GUI_qui.png" width="69" height="49" alt="" /></a>
	</div>
	<div id="id27-iR-GUI-qui_">
		<img id="id27_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/27_iR_GUI_qui.png" width="60" height="49" alt="" />
	</div>
	<div id="id28-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('info');"><img id="id28_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/28_iR_GUI_qui.png" width="65" height="70" alt="" /></a>
	</div>
	<div id="id29-iR-GUI-qui_">
		<a href="#" onclick="passfCommand('stop');"><img id="id29_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/29_iR_GUI_qui.png" width="65" height="70" alt="" /></a>
	</div>
	<div id="id30-iR-GUI-qui_">
		<img id="id30_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/30_iR_GUI_qui.png" width="190" height="50" alt="" />
	</div>
	<div id="id31-iR-GUI-qui_">
		<img id="id31_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/31_iR_GUI_qui.png" width="211" height="72" alt="" />
	</div>
	<div id="id32-iR-GUI-qui_">
		<a class="slideup" href="#AboutPanel"><img id="id32_iR_GUI_qui" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/32_iR_GUI_qui.png" width="109" height="72" alt="" /></a>
	</div>
</div>




<!-- ************************* advanced GUI ************************** -->
<div id="Tabelle_03">
	<div id="id01-iR-GUI-adv_">
		<a class="fade" href="#Tabelle_01"><img id="id01_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/01_iR_GUI_adv.png" width="110" height="51" alt="" /></a>
	</div>
	<div id="id02-iR-GUI-adv_">
		<a class="fade" href="#Tabelle_02"><img id="id02_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/02_iR_GUI_adv.png" width="101" height="51" alt="" /></a>
	</div>
	<div id="id03-iR-GUI-adv_">
		<img id="id03_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/03_iR_GUI_adv.png" width="109" height="51" alt="" />
	</div>
	<div id="id04-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('mute');"><img id="id04_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/04_iR_GUI_adv.png" width="111" height="95" alt="" /></a>
	</div>
	<div id="id05-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('reverse');"><img id="id05_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/05_iR_GUI_adv.png" width="99" height="95" alt="" /></a>
	</div>
	<div id="id06-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('forward');"><img id="id06_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/06_iR_GUI_adv.png" width="110" height="95" alt="" /></a>
	</div>
	<div id="id07-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('menu');"><img id="id07_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/07_iR_GUI_adv.png" width="110" height="90" alt="" /></a>
	</div>
	<div id="id08-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('previous');alert('needs fix - E is not working for previous');"><img id="id08_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/08_iR_GUI_adv.png" width="101" height="90" alt="" /></a>
	</div>
	<div id="id09-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('next');"><img id="id09_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/09_iR_GUI_adv.png" width="109" height="90" alt="" /></a>
	</div>
	<div id="id10-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('title');"><img id="id10_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/10_iR_GUI_adv.png" width="111" height="83" alt="" /></a>
	</div>
	<div id="id11-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('repeat');"><img id="id11_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/11_iR_GUI_adv.png" width="100" height="83" alt="" /></a>
	</div>
	<div id="id12-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('slow');"><img id="id12_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/12_iR_GUI_adv.png" width="109" height="83" alt="" /></a>
	</div>
	<div id="id13-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('angle');"><img id="id13_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/13_iR_GUI_adv.png" width="89" height="69" alt="" /></a>
	</div>
	<div id="id14-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('audio');"><img id="id14_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/14_iR_GUI_adv.png" width="72" height="69" alt="" /></a>
	</div>
	<div id="id15-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('subtitle');"><img id="id15_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/15_iR_GUI_adv.png" width="71" height="69" alt="" /></a>
	</div>
	<div id="id16-iR-GUI-adv_">
		<a href="#" onclick="passfCommand('zoom');"><img id="id16_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/16_iR_GUI_adv.png" width="88" height="69" alt="" /></a>
	</div>
	<div id="id17-iR-GUI-adv_">
		<img id="id17_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/17_iR_GUI_adv.png" width="211" height="72" alt="" />
	</div>
	<div id="id18-iR-GUI-adv_">
		<a class="slideup" href="#AboutPanel"><img id="id18_iR_GUI_adv" onclick="change_IMG(this.id)" onMouseout="change_IMG_back(this.id)" src="images_slice/18_iR_GUI_adv.png" width="109" height="72" alt="" /></a>
	</div>
</div>


<!-- special iPhone-style layers -->

<div id="PowerPanel" style="margin-left:-5px;width:325px;background: rgb(197,204,211) url(themes/apple/img/pinstripes.png);">
    <div class="toolbar">
        <h1>Power Options</h1>
        <a class="button back" href="#Tabelle_01">Back</a>
    </div>
        <ul>
            <li><a onclick="return passfCommand('power')" href="#">Standby Toggle</a></li>
            <li><a onclick="start_reboot();" href="#">Reboot</a></li>
            <li><a onclick="start_poweroff();" href="#">Power Off</a></li>
        </ul>
</div>

<div id="AboutPanel" style="margin-left:-5px;width:325px;background: rgb(197,204,211) url(themes/apple/img/pinstripes.png);">
    <div class="toolbar">
        <h1>C200 iRemote</h1>
        <a class="button back" href="#Tabelle_01">Back</a>
    </div> 
<!--    <div class="info">
    	<p style="text-align:center;"><img src="images/apple-touch-icon-precomposed.png" /></p>
			<br>
			<p style="margin-left:15px;"><strong>c200remote</strong> skin "C200 iRemote" by <a href="http://smashd.de" target="_blank">smashd.de</a>
    </div>
-->
    <div class="info">
        <p style="margin-top:-7px;">Add this page to your home screen / springboard 
        												<br>to view the custom icon, startup screen and 
        												<br>full screen mode.</p>
				<br>
				<p>Simply save it to an icon from your Safari menu:<br>
				<br>
				4.1 and older:<img src="images/saf_41.gif" style="float:right; margin-right:100px;" /><br>
				<br>
				<br>
			4.2.1+:<img src="images/saf_42.gif" style="float:right; margin-right:100px;" /></p>
		</div>


	        <ul>
	            <li><a href="http://code.google.com/p/c200remote/" target="_blank">google code project page</a></li>
	        </ul>
			    <div class="info" style="margin-top:-20px;margin-bottom:-40px; height:15px;">
			        <p style="margin-top:-15px;">
			        	(c200remote svn and more)
			        </p>
			    </div>

	        <ul>
	            <li><a href="http://www.networkedmediatank.com/showthread.php?tid=30168" target="_blank">forum thread</a></li>
	        </ul>
			    <div class="info" style="margin-top:-20px;margin-bottom:-40px; height:15px;">
			        <p style="margin-top:-15px;">
			        	(at networkedmediatank.com)
			        </p>
			    </div>

	        <ul>
	            <li><a href="../iphone_fs/" target="_blank">Old 1-page layout</a></li>
	        </ul>
			    <div class="info" style="margin-top:-20px;margin-bottom:-40px; height:15px;">
			        <p style="margin-top:-15px;">
			        	(runs faster)
			        </p>
			    </div>

	        <ul>
	            <li><a href="http://smashd.de" target="_blank">smashd.de</a></li>
	        </ul>
			    <div class="info" style="margin-top:-20px;margin-bottom:-40px; height:15px;">
			        <p style="margin-top:-15px;">
			        	(creator of this theme, donations are welcome :D)
			        </p>
			    </div>
			</p>
		</p>
</div>

<div id="TVModePanel" style="margin-left:-5px;width:325px;background: rgb(197,204,211) url(themes/apple/img/pinstripes.png);">
    <div class="toolbar">
        <h1>TV Mode Options</h1>
        <a class="button back" href="#Tabelle_01">Back</a>
    </div>
        <ul>
            <li><a onclick="start_TVMode('0');" href="#">Auto TV mode</a></li>
            <li><a onclick="start_TVMode('1');" href="#">Composite NTSC 480i</a></li>
            <li><a onclick="start_TVMode('2');" href="#">Composite PAL 576i</a></li>
            <li><a onclick="start_TVMode('4');" href="#">Component 720p60</a></li>
            <li><a onclick="start_TVMode('5');" href="#">Component 1080i60</a></li>
            <li><a onclick="start_TVMode('6');" href="#">Component 1080p60</a></li>
            <li><a onclick="start_TVMode('7');" href="#">HDMI 720p60</a></li>
            <li><a onclick="start_TVMode('8');" href="#">HDMI 1080i60</a></li>
            <li><a onclick="start_TVMode('9');" href="#">HDMI 1080p60</a></li>
            <li><a onclick="start_TVMode('C');" href="#">Toggle 50/60Hz</a></li>
            <li><a onclick="start_TVMode('T');" href="#">Manual TV Mode</a></li>
        </ul>
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