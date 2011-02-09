function start_reboot() {
	passfCommand('power');
	setTimeout( "end_reboot();", 500); 
}
function end_reboot() {
	close_Panel('1');
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


//onclick function
//id01-iR-GUI-adv_ to 01_iR_GUI_adv_C

function change_IMG(obj_id) {
  var str = obj_id;
	str=str.substr(2, str.length-2);
  str='images_slice/' + str + '_C.png';
  document.getElementById(obj_id).src = str;
}
function change_IMG_back(obj_id) {
  var str = obj_id;
	str=str.substr(2, str.length-2);
  str='images_slice/' + str + '.png';
  document.getElementById(obj_id).src = str;
}



function start_TVMode(opt) {
  var time_wait = 1000;
  switch (opt) {
    case '0': alert('Please use Auto mode only for FAILSAFE, not on a regular basis!');
    					passfCommand('tvmode');
    					setTimeout( "end_TVMode('0')", time_wait); 
					    break;
    case '1': setTimeout( "end_TVMode('1')", time_wait); 
    					passfCommand('tvmode');
					    break;
    case '2': setTimeout( "end_TVMode('2')", time_wait); 
    					passfCommand('tvmode');
					    break;
    case '4': setTimeout( "end_TVMode('4')", time_wait); 
    					passfCommand('tvmode');
					    break;
    case '5': setTimeout( "end_TVMode('5')", time_wait); 
    					passfCommand('tvmode');
					    break;
    case '6': setTimeout( "end_TVMode('6')", time_wait); 
    					passfCommand('tvmode');
					    break;
    case '7': setTimeout( "end_TVMode('7')", time_wait); 
    					passfCommand('tvmode');
					    break;
    case '8': setTimeout( "end_TVMode('8')", time_wait); 
    					passfCommand('tvmode');
					    break;
    case '9': setTimeout( "end_TVMode('9')", time_wait); 
    					passfCommand('tvmode');
					    break;
    case 'C': setTimeout( "end_TVMode('C')", time_wait);
    					passfCommand('tvmode');
					    break;
    case 'T': setTimeout( "end_TVMode('T')", time_wait); 
    					passfCommand('tvmode');
    					break;
	}
}

function end_TVMode(opt) {
 close_Panel('1'); 
  switch (opt) {
    case '0': passfCommand('0');
					    break;
    case '1': passfCommand('1');
					    break;
    case '2': passfCommand('2');
					    break;
    case '4': passfCommand('4');
					    break;
    case '5': passfCommand('5');
					    break;
    case '6': passfCommand('6');
					    break;
    case '7': passfCommand('7');
					    break;
    case '8': passfCommand('8');
					    break;
    case '9': passfCommand('9');
					    break;
    case 'C': passfCommand('capsnum');
					    break;
    case 'T': close_Panel('2');
    					break;
	}
}

function close_Panel(opt) {
  switch (opt) {
    case '1': setTimeout( "jQT.goTo($('#Tabelle_01'), 'dissolve')", 10);
					    break;
    case '2': setTimeout( "jQT.goTo($('#Tabelle_02'), 'dissolve')", 10);
					    break;
	}
}
