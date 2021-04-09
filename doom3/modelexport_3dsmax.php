<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
	<TITLE>id.sdk [Model Exporting from 3dstudio max]</title>
    <LINK REL="stylesheet" HREF="style.css">
</HEAD>


<BODY marginwidth="0" marginheight="0" topmargin="0" leftmargin="0">

<table border=0 cellpadding=0 cellspacing=0 style="width: 100%; height: 99px">
	<tr>
		<td style="width: 171px"><img src="images/doom.jpg" style="width: 171px; height: 99px" alt=""></td>
		<td style="background: url(images/tile.gif)">
			<table border=0 cellpadding=0 cellspacing=0 width=600>
				<tr>
                    <td style="height: 19px; background: url(images/sdk.gif) no-repeat"></td>
                    <td rowspan=4 align=right><img src="images/id.gif" style="width: 42px; height: 99px" alt=""></td>
                </tr>
				<tr><td style="height: 29px; background: url(images/top.jpg) no-repeat"></td></tr>
				<tr><td style="height: 27px; background: url(images/middle.gif)" class="title">&nbsp;&nbsp; Making DOOM 3 Mods : Model Exporting from 3dstudio max</td></tr>
				<tr><td style="height: 24px; background: url(images/bottom.jpg) no-repeat"></td></tr>
			</table>
		</td>
	</tr>
</table>
<table border=0 cellpadding=0 cellspacing=0 style="width: 770px">
	<tr>
		<td colspan=2 style="background: url(images/boxtop.gif);"><img src="images/span.jpg" style="width: 397px; height: 20px; float: left" alt=""></td>
	</tr>
	<tr>
		<td style="vertical-align: top; width: 152px; background: url(images/tileleft.gif)">
            <div class="leftMenu">
                <script src="menu.js"></script>
            </div>
		</td>
		<td class="mainContent">
I'm going to go through the steps required to export a single box, but the steps
are the exact same for more complicated geometry.

<p>
<b>1: Install Doom in C:\Doom3\</b><br>
It doesn't actually have to be there, but it has to be somewhere without any spaces.

<p>
<b>2: Make a box</b><br>
Save it as C:\Doom3\base\models\testbox\testbox.max

<p>
<b>3: Make diffuse, normal, and specular textures</b><br>
Or download them from <a href="downloads/testbox_textures.zip">here</a><br>
Save them as:<br>
<samp>
C:\Doom3\base\models\testbox\testbox.tga<br>
C:\Doom3\base\models\testbox\testbox_local.tga<br>
C:\Doom3\base\models\testbox\testbox_s.tga<br>
</samp>

<p>
<b>4: Create a new material in 3dsmax</b><br>
Specify those textures as the diffuse, normal, and specular maps.<br>
Apply that material to the box.

<p>
<b>5: Export the ASE</b><br>
Click File->Export<br>
Select ASE<br>
Save it as C:\Doom3\base\models\testbox\testbox.ase<br>
Be sure these options are checked:<br>
TODO...<br>

<p>
<b>6: Create the material</b><br>
Open notepad, type the following:
<pre class="code">
models\testbox\testbox
{
    diffusemap  models\testbox\testbox.tga
    bumpmap     models\testbox\testbox_local.tga
    specularmap models\testbox\testbox_s.tga
}
</pre>
Save the file as C:\Doom3\base\materials\testbox.mtr

<p>
<b>7: Test it in Doom3</b><br>
Launch Doom3<br>
Drop the console (<kbd>Ctrl+Alt+~</kbd>)<br>
Type: <samp>map testmaps/test_box</samp><br>
Type: <samp>testmodel models/testbox/testbox.ase</samp><br>

<p>
If everything worked right, you should see your box right in front of you all
lit properly with bumps and specular highlights and such.  If not, check the
console for red or yellow text, it should explain why it didn't load.

<p>
If you want to import this object into a map, right-click the 2d grid in DOOMEdit,
select "New Model..." and select the model.  Sometimes it doesn't show up right
when you do that, the fix is to his space bar to copy it, then delete the original.

<br>
        </td>
	</tr>
	<tr>
		<td colspan=2 bgcolor="#CCCCCC"><img src="images/span2.gif" style="width: 397px; height: 8px; float: left;"></td>
	</tr>
</table>

<table border=0 cellpadding=0 cellspacing=0 width=770>
    <tr>
        <td align=left class="legalese">Copyright &copy; 2004 <a href="http://www.idsoftware.com">id software</a></td>
    </tr>
</table>
</body>
</html>
