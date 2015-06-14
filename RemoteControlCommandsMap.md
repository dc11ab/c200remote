# Remote control commands #

## Original layout ##
<pre>
x=On/Off    j=Eject<br>
<br>
T=TV Mode  e=Setup h=BT<br>
<br>
1=1 2=2 3=3<br>
4=4 5=5 6=6<br>
7=7 8=8 9=9<br>
c=Delete  0=0 l=CAPS/NUM<br>
O=Home g=File Mode H=Time Seek<br>
P=Video G=Music Y=Photo K=All<br>
<br>
v=RETURN B=SOURCE<br>
<br>
U=UP<br>
L=LEFT -- \n (press Enter)=OK -- R=RIGHT<br>
D=DOWN<br>
i=INFO s=STOP<br>
<br>
+=PgUp(Vol+)----y=Play<br>
-=PgDn(Vol- )----p=Pause<br>
<br>
u=Mute w=Rev f=FWD<br>
m=Menu E=Prev n=Next<br>
t=Title r=Repeat d=Slow<br>
N=Angle a=Audio b=Subtitle z=Zoom<br>
</pre>


Note: some of these commands may have changed over the course of firmware updates. It is [reported](http://www.networkedmediatank.com/showthread.php?tid=30168&pid=528970#pid528970) that "E" for "Previous" now is "v", at least in Bluray navigation. "E" rather seems to correspond to the "Back"-button. You may find other reports in this thread:
http://www.networkedmediatank.com/showthread.php?tid=30168&pid=528970#pid528970

## 0-9 a-Z ##
For a full explanation of the remote control functions, please read the NMT wiki:<br>
<a href='http://www.networkedmediatank.com/wiki/index.php/Remote_Control_C-200'>http://www.networkedmediatank.com/wiki/index.php/Remote_Control_C-200</a><br>
The Alias is a "friendly" name given the remote command which can be extended or changed to each liking, just edit the webrc200.php.<br>

<table><thead><th> <b>Raw command</b> </th><th> <b>Alias</b> </th><th> <b>Comment</b> </th></thead><tbody>
<tr><td> 0                  </td><td> 0           </td><td> Go to beginning of media clip (0%) </td></tr>
<tr><td> 1                  </td><td> 1            </td><td> Go to item 1 in list or 10% of played media. </td></tr>
<tr><td> 2                  </td><td> 2            </td><td> As above but (20%) </td></tr>
<tr><td> 3                  </td><td> 3            </td><td> As above but (30%) </td></tr>
<tr><td> 4                  </td><td> 4            </td><td> As above but (40%) </td></tr>
<tr><td> 5                  </td><td> 5            </td><td> As above but (50%) </td></tr>
<tr><td> 6                  </td><td> 6            </td><td> As above but (60%) </td></tr>
<tr><td> 7                  </td><td> 7            </td><td> As above but (70%) </td></tr>
<tr><td> 8                  </td><td> 8            </td><td> As above but (80%) </td></tr>
<tr><td> 9                  </td><td> 9            </td><td> As above but (90%) </td></tr>
<tr><td> \n                 </td><td> enter        </td><td> Push Enter/OK button. Note: this is a non-printable line feed character.</td></tr>
<tr><td>+                   </td><td> pgup<br>volup </td><td> PAGE UP / VOLUME UP </td></tr>
<tr><td>-                   </td><td> pgdown<br>voldown </td><td> PAGE DOWN / VOLUME DOWN </td></tr>
<tr><td>a                   </td><td> audio        </td><td> AUDIO          </td></tr>
<tr><td>b                   </td><td> subs         </td><td> SUBTITLE       </td></tr>
<tr><td>c                   </td><td> delete       </td><td> DELETE         </td></tr>
<tr><td>d                   </td><td> slow         </td><td> SLOW          </td></tr>
<tr><td>e                   </td><td> setup        </td><td> SETUP          </td></tr>
<tr><td>f                   </td><td> forward      </td><td> FORWARD: Fast forward </td></tr>
<tr><td>g                   </td><td> filemode     </td><td> FILE MODE      </td></tr>
<tr><td>h                   </td><td> btsuspend    </td><td>BT/SUSPEND      </td></tr>
<tr><td>i                   </td><td> info         </td><td>INFO            </td></tr>
<tr><td>j                   </td><td> eject        </td><td>EJECT           </td></tr>
<tr><td>k                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>l                   </td><td> capsnum      </td><td>CAPS/NUM        </td></tr>
<tr><td>m                   </td><td> menu         </td><td>MENU            </td></tr>
<tr><td>n                   </td><td> next         </td><td>NEXT            </td></tr>
<tr><td>o                   </td><td> <i>?</i>     </td><td> (unknown; does cause pause/rewind during playback?)</td></tr>
<tr><td>p                   </td><td> pause        </td><td> PAUSE          </td></tr>
<tr><td>q                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>r                   </td><td> repeat       </td><td>REPEAT          </td></tr>
<tr><td>s                   </td><td> stop         </td><td>STOP            </td></tr>
<tr><td>t                   </td><td> title        </td><td>TITLE           </td></tr>
<tr><td>u                   </td><td> mute         </td><td>MUTE            </td></tr>
<tr><td>v                   </td><td> return       </td><td>RETURN          </td></tr>
<tr><td>w                   </td><td> reverse      </td><td>REV: Reverse/rewind playback. </td></tr>
<tr><td> x                  </td><td> power        </td><td> Push Power button; toggles between ON and STAND BY.</td></tr>
<tr><td>y                   </td><td>play          </td><td>PLAY: Starts to play media in playlist mode.</td></tr>
<tr><td>z                   </td><td>zoom          </td><td>ZOOM            </td></tr>
<tr><td>A                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>B                   </td><td>source        </td><td>SOURCE          </td></tr>
<tr><td>C                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>D                   </td><td>down          </td><td>DOWN on the Navpad. </td></tr>
<tr><td>E                   </td><td>prev          </td><td>PREV: Skips to previous track in playlist, but this does not fully work?</td></tr>
<tr><td>F                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>G                   </td><td>music<br>green</td><td>MUSIC (Green) filter button.</td></tr>
<tr><td>H                   </td><td>timeseek      </td><td>TIME SEEK       </td></tr>
<tr><td>I                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>J                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>K                   </td><td>allfiles<br>blue</td><td>All (Blue) non-filter button. </td></tr>
<tr><td>L                   </td><td>left          </td><td>LEFT on the Navpad. </td></tr>
<tr><td>M                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>N                   </td><td>angle         </td><td>ANGLE           </td></tr>
<tr><td>O                   </td><td>home          </td><td>HOME            </td></tr>
<tr><td>P                   </td><td>video<br>red  </td><td>VIDEO (Red) filter button.</td></tr>
<tr><td>Q                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>R                   </td><td>right         </td><td>RIGHT on the Navpad.</td></tr>
<tr><td>S                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>T                   </td><td>tvmode        </td><td>TV MODE         </td></tr>
<tr><td>U                   </td><td>up            </td><td>UP button on the Navpad.</td></tr>
<tr><td>V                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>W                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>X                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr>
<tr><td>Y                   </td><td> photo<br>yellow</td><td> PHOTO (Yellow) filter button.</td></tr>
<tr><td>Z                   </td><td> <i>?</i>     </td><td>(unknown)       </td></tr></tbody></table>

<h2>Syabas own?</h2>
The following aliases seems to be used by Syabas, as found in a <code>cat libsyabas_command_server_command_system.so</code>

(Not sure if "<code>repeatab_</code>" is correct, but it seems to be just an alias for repeat.)<br>
<pre><code>power<br>
filemode<br>
up<br>
down<br>
left<br>
right<br>
enter<br>
menu<br>
title<br>
info<br>
audio<br>
angle<br>
subtitle<br>
play<br>
stop<br>
pause<br>
eject<br>
rewind<br>
rev<br>
fastforward<br>
fwd<br>
slow<br>
repeatab_<br>
repeat<br>
previous<br>
prev<br>
next<br>
volumeup<br>
pageup<br>
volumedown<br>
pagedown<br>
mute<br>
one<br>
two<br>
three<br>
four<br>
five<br>
six<br>
seven<br>
eight<br>
nine<br>
zero<br>
capsnum<br>
caps/num<br>
setup<br>
delete<br>
tvmode<br>
source<br>
return<br>
suspend<br>
time seek<br>
zoom<br>
home<br>
red<br>
green<br>
yellow<br>
blue<br>
</code></pre>