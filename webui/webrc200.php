<?php
// A PHP script to send remote commands to the Popcorn Hour C-200.
// By dc11ab, November 15, 2009.
// 11/16/2009 - Modified by Blade to allow direct commands and friendly command names
// See README.NFO for more information.

$cmd=$_GET['cmd'];
$fcmd=$_GET['fcmd'];

function sendCommand($theCmd)
{
    // Open the connection
    $fp = fsockopen ('127.0.0.1', 30000, $errno, $errstr, 30);
    if(!$fp)
    {
        echo $errstr;
    }
    else
    {
        if($theCmd != NULL && $theCmd != '')
        {
            fwrite($fp, $theCmd);
            echo "Success, redirecting back to remote control!";
            $url = $_SERVER['HTTP_REFERER'];
            echo "<META HTTP-EQUIV=refresh content=0;URL=$url>";
        }
    }
}

if($cmd != NULL && $cmd != '')
{
    sendCommand($cmd);
}

if($fcmd != NULL && $fcmd != '')
{
    switch ($fcmd)
    {
   // Here we can add more commands when found, or add more aliases for each command. 
        case "power":
            sendCommand("x");
            break;
        case "eject":
            sendCommand("j");
            break;
        case "tvmode":
            sendCommand("T");
            break;
        case "setup":
            sendCommand("e");
            break;
        case "btsuspend":
            sendCommand("h");
            break;
        case "enter":
            sendCommand("\n");
            break;
        case "0":
            sendCommand("0");
            break;
        case "1":
            sendCommand("1");
            break;
        case "2":
            sendCommand("2");
            break;
        case "3":
            sendCommand("3");
            break;
        case "4":
            sendCommand("4");
            break;
        case "5":
            sendCommand("5");
            break;
        case "6":
            sendCommand("6");
            break;
        case "7":
            sendCommand("7");
            break;
        case "8":
            sendCommand("8");
            break;
        case "9":
            sendCommand("9");
            break;
        case "delete":
            sendCommand("c");
            break;
        case "capsnum":
            sendCommand("l");
        case "filemode":
            sendCommand("g");
            break;
        case "home":
            sendCommand("O");
            break;
        case "timeseek":
            sendCommand("H");
            break;
        case "source":
            sendCommand("B");
            break;
        case "up":
            sendCommand("U");
            break;
        case "down":
            sendCommand("D");
            break;
        case "left":
            sendCommand("L");
            break;
        case "right":
            sendCommand("R");
            break;
        case "info":
            sendCommand("i");
            break;
        case "play":
            sendCommand("y");
            break;
        case "stop":
            sendCommand("s");
            break;
        case "pause":
            sendCommand("p");
            break;
        case "return":
            sendCommand("v");
            break;
        case "video":
            sendCommand("P");
            break;
        case "red":
            sendCommand("P");
            break;
        case "music":
            sendCommand("G");
            break;
        case "green":
            sendCommand("G");
            break;
        case "photo":
            sendCommand("Y");
            break;
        case "yellow":
            sendCommand("Y");
            break;
        case "allfiles":
            sendCommand("E");
            break;
        case "blue":
            sendCommand("E");
            break;
        case "pgup":
            sendCommand("+");
            break;
        case "volup":
            sendCommand("+");
            break;
        case "pgdown":
            sendCommand("-");
            break;
        case "voldown":
            sendCommand("-");
            break;
        case "mute":
            sendCommand("u");
            break;
        case "menu":
            sendCommand("m");
            break;
        case "forward":
            sendCommand("f");
            break;
        case "reverse":
            sendCommand("w");
            break;
        case "title":
            sendCommand("t");
            break;
        case "repeat":
            sendCommand("r");
            break;
        case "angle":
            sendCommand("N");
            break;
        case "audio":
            sendCommand("a");
            break;
        case "subtitle":
            sendCommand("b");
            break;
        case "zoom":
            sendCommand("z");
            break;
        case "next":
            sendCommand("n");
            break;
        case "previous":
            sendCommand("");
            break;
        case "filemode":
            sendCommand("");
            break;
        case "slow":
            sendCommand("");
            break;
    }
}

?>

<html><head></head><body></br>...but if you see this for too long, something is wrong.</br>
</br> Try pressing Back on your browser or navigate to:
 http://PCH-C200:9999/c200remote_web/</body></html>