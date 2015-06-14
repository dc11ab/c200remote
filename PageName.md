# Command server #

We know of the raw socket at port 30000, but on port 8008 Firefox says:

```
This XML file does not appear to have any style information associated with it. The document tree is shown below.
      
−
<syabasCommandServerXml>
<returnValue>1</returnValue>
<response>
	</response>
</syabasCommandServerXml>
```

Examining the file **libsyabas\_command\_server\_command\_system.so** and other libsyabas files we see command aliases and references to this xml schema.

Will be interesting to see what future firmware revisions will enable here...



## Form control ##
This is found on:<br>
<blockquote><a href='http://ip.ip.ip.ip:8088/app/player/video/action/search.php?M=&W=&dL=0&pg=1&sD=&sT=&sP=0&sY=0'>http://ip.ip.ip.ip:8088/app/player/video/action/search.php?M=&amp;W=&amp;dL=0&amp;pg=1&amp;sD=&amp;sT=&amp;sP=0&amp;sY=0</a></blockquote>


Hidden:<br>
<pre><code>&lt;form name="form1" action="/app/player/video/action/videolist.php"&gt;<br>
&lt;input type="hidden" name="M" value=""&gt;<br>
&lt;input type="hidden" name="pg" value="2p1"&gt;<br>
&lt;input type="hidden" name="sM" value="t"&gt;<br>
<br>
&lt;input type="hidden" name="sD" value=""&gt;<br>
&lt;input type="hidden" name="W" value=""&gt;<br>
</code></pre>

Visible:<br>
The page renders a form with top-down input types:<br>
<ol><li><b>name="sT" value=""</b> = Name : input field with submit button <b>value="Search" onkeydownset="sNR"</b>
</li><li><b>name="sNR" value="t"</b> = Option - do no include subdirs : checkbox, disabled by default.<br>
</li><li><b>name="sP" onkeyrightset="sP"</b> is Contains : dropdown list with options Contains, Equals, Starts with, Ends with<br>
</li><li><b>name="sY" onkeyrightset="sY"</b> Folders and files : dropdown list with options Folders and Files, Folders only, Files only<br>
</li><li><b>name="sC" value="t"</b> Case sensitive : checkbox, disabled by default.</li></ol>

Code for this:<br>
<pre><code>&lt;td width="60"&gt;&lt;font class="label-font"&gt;Name&lt;/font&gt;&lt;/td&gt;<br>
			&lt;td width="20"&gt;&lt;font class="label-font"&gt;:&lt;/font&gt;&lt;/td&gt;<br>
<br>
			&lt;td&gt;<br>
				&lt;input type="text" name="sT" value="" size="15" onkeyupset="sT" onkeyleftset="search" &gt;&amp;nbsp;<br>
				&lt;input type="submit" value="Search" onkeydownset="sNR"&gt;<br>
			&lt;/td&gt;<br>
		&lt;/tr&gt;<br>
		&lt;tr&gt;&lt;td colspan="3" height="15"&gt;&lt;/td&gt;&lt;/tr&gt;<br>
		&lt;tr&gt;<br>
			&lt;td&gt;&lt;font class="label-font"&gt;Option&lt;/font&gt;&lt;/td&gt;<br>
<br>
			&lt;td width="10"&gt;&lt;font class="label-font"&gt;:&lt;/font&gt;&lt;/td&gt;<br>
			&lt;td&gt;&lt;input type="checkbox" name="sNR" value="t" size="15" onkeyrightset="sNR" onkeyleftset="search" &gt;<br>
				&lt;font class="label-font"&gt;do not include subfolders&lt;/font&gt;&lt;/td&gt;<br>
		&lt;/tr&gt;<br>
		&lt;tr&gt;&lt;td colspan="3" height="10"&gt;&lt;/td&gt;&lt;/tr&gt;<br>
		&lt;tr&gt;<br>
			&lt;td colspan="2"&gt;&lt;/td&gt;<br>
			&lt;td&gt;<br>
<br>
				&lt;select name="sP" onkeyrightset="sP" onkeyleftset="search" &gt;<br>
					&lt;option value="0" selected&gt;Contains&lt;/option&gt;<br>
					&lt;option value="1"&gt;Equals&lt;/option&gt;<br>
					&lt;option value="2"&gt;Starts with&lt;/option&gt;<br>
					&lt;option value="3"&gt;Ends with&lt;/option&gt;<br>
				&lt;/select&gt;<br>
			&lt;/td&gt;<br>
<br>
		&lt;/tr&gt;<br>
		&lt;tr&gt;&lt;td colspan="3" height="10"&gt;&lt;/td&gt;&lt;/tr&gt;<br>
		&lt;tr&gt;<br>
			&lt;td colspan="2"&gt;&lt;/td&gt;<br>
			&lt;td&gt;<br>
				&lt;select name="sY" onkeyrightset="sY" onkeyleftset="search" &gt;<br>
					&lt;option value="0" selected&gt;Folders and Files&lt;/option&gt;<br>
					&lt;option value="1"&gt;Folders only&lt;/option&gt;<br>
<br>
					&lt;option value="2"&gt;Files only&lt;/option&gt;<br>
				&lt;/select&gt;<br>
			&lt;/td&gt;<br>
		&lt;/tr&gt;<br>
		&lt;tr&gt;&lt;td colspan="3" height="10"&gt;&lt;/td&gt;&lt;/tr&gt;<br>
		&lt;tr&gt;<br>
			&lt;td colspan="2"&gt;&lt;/td&gt;<br>
			&lt;td&gt;&lt;input type="checkbox" name="sC" value="t" size="15" onkeydownset="sC" onkeyrightset="sC" onkeyleftset="search" &gt;<br>
<br>
				&lt;font class="label-font"&gt;case sensitive&lt;/font&gt;&lt;/td&gt;<br>
		&lt;/tr&gt;<br>
</code></pre>

<h1>Details of appcontrol</h1>
A.k.a. how to invoke play_genericmedia to play!<br>
<pre><code>sh-3.00# cat appcontrol<br>
#!/bin/sh<br>
<br>
start_syb_framework()<br>
{<br>
    echo "Start syabas_framework..."<br>
    if [ -e /nmt/apps/Demo/index.html ]; then<br>
    	syb_framework file:///nmt/apps/Demo/index.html<br>
    else<br>
    	syb_framework <br>
    fi<br>
}<br>
<br>
start_flashlite()<br>
{<br>
    echo "Start flashlite..."<br>
    command=""<br>
    if [ -e /tmp/app_param.txt ]; then<br>
      command=`cat /tmp/app_param.txt`<br>
    else<br>
      command=""<br>
    fi<br>
    <br>
    stagecraft --outputrect 0,0,1280,720 $command<br>
    cd -<br>
    if [ -e /tmp/app_param.txt ]; then<br>
    	mv /tmp/app_param.txt /tmp/app_param.txt2<br>
    fi<br>
    if [ -e /tmp/app.txt ]; then<br>
 	   mv /tmp/app.txt /tmp/app.txt2<br>
    fi<br>
}<br>
<br>
start_qt()<br>
{<br>
    echo "Start qt..."<br>
    if [ -e /tmp/app_param.txt ]; then<br>
      command=`cat /tmp/app_param.txt`<br>
    else<br>
      command=""<br>
    fi<br>
    Application -qws -hd $command<br>
    if [ -e /tmp/app_param.txt ]; then<br>
    	mv /tmp/app_param.txt /tmp/app_param.txt2<br>
    fi<br>
    if [ -e /tmp/app.txt ]; then<br>
 	   mv /tmp/app.txt /tmp/app.txt2<br>
    fi<br>
}<br>
<br>
start_rmvb()<br>
{<br>
    echo "Start play_genericmedia..."<br>
    if [ -e /tmp/rmvb.txt ]; then<br>
        rmvb_file=`cat /tmp/rmvb.txt`<br>
        if [ -n rmvb_file ]; then<br>
            sleep 1<br>
            play_genericmedia -no_disp -vcodec mpeg2 640 480 "$rmvb_file"<br>
        fi<br>
    fi<br>
    if [ -e /tmp/app_param.txt ]; then<br>
        mv /tmp/app_param.txt /tmp/app_param.txt2<br>
    fi<br>
    if [ -e /tmp/app.txt ]; then<br>
        mv /tmp/app.txt /tmp/app.txt2<br>
    fi<br>
}<br>
<br>
current_app="syb_framework"<br>
<br>
while [ true ]<br>
do<br>
    app=""<br>
    if [ -e /tmp/app.txt ]; then<br>
      app=`cat /tmp/app.txt`<br>
    else<br>
      app=""<br>
    fi<br>
<br>
    case "$app" in<br>
      flashlite)<br>
          start_flashlite<br>
        ;;<br>
      qt)<br>
          start_qt<br>
        ;;<br>
      rmvb)<br>
          start_rmvb<br>
        ;;<br>
      *)<br>
          start_syb_framework<br>
        ;;<br>
    esac<br>
done<br>
<br>
exit $?<br>
</code></pre>