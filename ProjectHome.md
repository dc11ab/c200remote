# Use a browser to remote control your Popcorn Hour A/C-200 #
<img src='http://www.popcornhour.com/onlinestore/images/model-C200.jpg' align='right' /> 

The **c200remote** uses PHP to let clients control the popular Popcorn Hour C200, A200 and A210 using most browsers. Just click on the remote control picture with your mouse, and thy mediaplayer shalt obey your command.

**c200remote** connects to the device on a raw socket at port 30000. Characters, including some non-printables like \n, is interpreted as commands. With the PHP sending the commands it is easy to build native apps and scripts for home automation and other scenarios using the **c200remote** to submit it.

At present most commands are known and working, but a few are not fully working in all states. Please help us find the missing commands:

  * Skip track backwards, during photo- and music playlist playback (not working)<br>
<ul><li>Intromit disc, e.g. slide disc back in tray after Eject (not fully working)<br>
</li><li>Shutdown, e.g. complete power off - not working<br>
</li><li>Reboot - not working<br></li></ul>


For more information follow this thread:<br>
<a href='http://www.networkedmediatank.com/showthread.php?tid=30168&page=1'>http://www.networkedmediatank.com/showthread.php?tid=30168&amp;page=1</a>


The big Thank You's go out to <code>BrainStormer</code> for the original discovery, <code>PoPEye</code> for finding more commands and giving inspiration, and everyone else that has contributed to the mapping of commands, to the contributors that improved the code and made the GUI usable and good-looking on iPhones, and to anyone who shared their ideas and cheers along the way!<br>
<br>
<br>
<h2>Usage</h2>
<img src='http://c200remote.googlecode.com/svn/trunk/src/webui/C200_remote_control.jpg' align='right' />You can install and start this app via <a href='http://www.nmtinstaller.com'>the CSI</a>.<br>
<br>
You can then either use the simple web interface provided by pointing your browser to:<br>
<code>http://&lt;your nmt ip address&gt;:9999/c200remote_web/</code>

or, simply send commands directly via URL with exact commands:<br>
<code>http://&lt;your nmt ip address&gt;:9999/c200remote_web/webrc200.php?cmd=x</code>

or with alias:<br>
<code>http://&lt;your nmt ip address&gt;:9999/c200remote_web/webrc200.php?fcmd=power</code>

For a list of aliases see here: <a href='http://code.google.com/p/c200remote/wiki/RemoteControlCommandsMap'>RemoteControlCommandsMap</a>. You can add or change any alias you like in the webrc200.php file.<br>
<br>
The <i>iPhone skin</i> (which may or may not work with other web enabled devices using a webkit browser) has additional features, such as easy TV Mode change.<br>
<br>
<h2>Wish list, in no particular order</h2>

<ul><li>Make use of the 200-series API (TheDavidBox)<br>
</li><li>Make sexier GUI for the browser, tablets etc. (Some help here would be great!)<br>
</li><li>Optimize and enhance code. (Ditto...)<br>
</li><li>Make input field for predefined and custom macros<br>
</li><li><del>Optimize/skin for iPhone</del> - Done!<br>
</li><li>Integrate with llink<br>
</li><li>Integrate with other nice things, like <a href='https://code.google.com/p/plonk/'>PLoNK's</a> "peach" daemon<br>
</li><li>Manage playlists<br>
</li><li>Browse directories via the skin GUI</li></ul>

<h2>Change log</h2>
Read the <a href='http://code.google.com/p/c200remote/wiki/ReleaseNotes'>Release Notes</a>.<br>
<br>
<h2>License information</h2>
As per the sidebar menu, this project's code is licensed under the New BSD terms, with the following attributes:<br>
<br>
<br>
<OWNER><br>
<br>
 = Daniel Cervera, dc11ab+c200remote@gmail.com<br>
<br>
<br>
<YEAR><br>
<br>
 = 2009<br>
<br>
Please note that a component used in the iPhone skin is MIT licensed, the jQTouch framework, which is compatible: <a href='http://www.jqtouch.com/'>http://www.jqtouch.com/</a>

Original iPhone skin artwork has been made by SmashD:<br>
<a href='http://www.smashd.de/Useful-things/popcorn-hour-c-200-c200remote-remote-web-app.html'>http://www.smashd.de/Useful-things/popcorn-hour-c-200-c200remote-remote-web-app.html</a>

Happy hacking!<br>
