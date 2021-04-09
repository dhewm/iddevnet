<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
	<TITLE>id.sdk [Model Exporting]</title>
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
				<tr><td style="height: 27px; background: url(images/middle.gif)" class="title">&nbsp;&nbsp; Making DOOM 3 Mods : Model Exporting</td></tr>
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
<div class="subsection">Static Models</div>

Getting a static model (like a trash can or a shrubery) in to the game
is really easy.  Doom 3 reads lwo (lightwave) and ase (3dsmax) files
natively so you simply save out the model in one of those two formats
and you can use it in the game.

<p>
<strong>
The material that is used in game is the diffuse texture specified in the model.
</strong>

<p>
The relative material name is determined by searching for "base" in the texture path.
For example, if the texture specified in the .ase is
"<samp>C:\Doom\base\textures\base_trim\red1.tga</samp>"
Then it would use the material named "<samp>textures\base_trim\red1</samp>"

<p>
If you are running a custom mod, then it will look for the mod name if it can't find
"base" so "<samp>C:\Doom\jailbreak\textures\base_trim\red1.tga</samp>" would also work
in the jailbreak mod.

<p>
<strong>The path cannot have spaces in it.</strong>  Doom 3 should be installed in
"<samp>C:\Doom\</samp>" or some other place without spaces.  If Doom 3 is in the
default location of "<samp>C:\Program Files\Doom 3\</samp>" it will not work because
of the space in "Program Files" and the space in "Doom 3"

<p>
Generally speaking, as long as you keep all your assets in the final
directory that it will be in, then you should just be able to use it
in game without having to touch anything.  Problems tend to arise if
you edit your assets in one directory, then move them in to the base
directory or your mod directory after you export.

<p>
If you are working on a new chair, you should work
on it in<br>
<samp>C:\Doom3\mymod\models\mapobjects\chairs\mychair\</samp><br>
rather than working on it in<br>
<samp>C:\My Stuff\Models\Cool Models\Stuff For My Mod\Chair</samp><br>
then moving to the proper directory after it's been exported.

<p>
<b>Spaces in file names are bad.</b>

<p>
For more information on exporting from 3dstudio max, <a href="modelexport_3dsmax.php">click here</a>

<div class="subsection">Animated Models</div>

Animated models are quite a bit more complex.  The only animation system supported in
Doom 3 is skeletal (no vertex animation like in Quake), and the only file format supported
is .mb (Maya binary).  The files have to be processed using a built in tool to convert
the Maya files to .md5mesh and .md5anim files.

<p>
<b>Note for 3dstudio max</b>: Although Doom3 does not support animated models from max
"out of the box", the people over at <a href="http://www.Doom3World.org">Doom3World</a>
wrote some nice importers and exporters, which you can find <a href="http://www.doom3world.org/phpbb2/viewtopic.php?t=5474">here</a>.

<p>
This built in tool is 'exportModels'. By default, it will export any models that have
been modified since the last time the command was run, but you can pass it a .def file
and it will only export the models defined in that def file.  You can speed up the exportModels
command by using the 'g_exportMask' cvar and specifying some magic string after the export
declaration (as we will see later).  Setting "g_exportMask fred" will only export fred's
animations, skipping all the others.

<p>
You must have Maya installed on the machine that you are exporting on otherwise it won't do anything.

<p>
The syntax for an export section looks complex at first, but is actually quite simple when
you break it down into the different parts.  Unlike some other declarations, the commands
in an export block are executed as they are encountered.  This means the order DOES matter.

<p>
There are two systems at work when you export a file.  The first is the actual exporter, this
is the piece that does all the work.  The second is what I'm going to call the 'parser'.  This
piece reads the export sections and passes the commands to the exporter for actual exportation.

<p>
The parser only has 5 commands, and they are really very simple:

<p>
<table class="datatable">
<tr><th>Command</th><th>Description</th>
<tr><td class="nobr">options [options]</td><td>
Stores default options that will be used for all future export actions.  Note that an options
command will override any previously set options.
</td>
<tr><td class="nobr">addoptions [options]</td><td>
Adds a default option to the current set of default options.  This is very similar to the
options command, but it appends rather than overwriting the current options.
</td>
<tr><td class="nobr">mesh &lt;mb file&gt; [options]</td><td rowspan="3">
Exports a object from a .mb file.  The options specified here will be appended to
the options specified previously with "options" or "addoptions" commands.
</td>
<tr><td class="nobr">anim &lt;mb file&gt; [options]</td>
<tr><td class="nobr">camera &lt;mb file&gt; [options]</td>
</table>

<p>
Here is a list of all the options along with a brief description of what they do:

<p>
<table class="datatable">
<tr><th>Option</th><th>Description</th>
<tr><td class="nobr">-force</td><td>Ignored</td>
<tr><td class="nobr">-game</td><td>Specify the mod name, which is where the relative paths are defined from.  This should get set automatically in 1.2</td>
<tr><td class="nobr">-rename [joint name] [new name]</td><td>Rename a joint</td>
<tr><td class="nobr">-prefix [joint prefix]</td><td>
If you have multiple characters/objects in your scene, you can give them each their own prefix
so the exporter can distinguish which goes to which.  Example:  ZSEC_   IMP_   ENV_ </td>
<tr><td class="nobr">-parent [joint name] [new parent]</td><td>Reparent a joint</td>
<tr><td class="nobr">-sourcedir [directory]</td><td>Tell exporter where to get files from</td>
<tr><td class="nobr">-destdir [directory]</td><td>Tell exporter where to put files after export</td>
<tr><td class="nobr">-dest [filename]</td><td>Give a new name to the file you are exporting. Default will be same name as the maya file.</td>
<tr><td class="nobr">-range [start frame] [end frame]</td><td>Frame range for what you would like to export  Example: <samp>-range 1 10</samp></td>
<tr><td class="nobr">-cycleStart [first frame of cycle]</td><td>
Shift the cycle to start on a different frame. Example: frame 1 has left foot forward and frame 10 has right foot
forward. So if you would like your cycle to start with right foot forward do <samp>-cycleStart 10</samp> and it will shift the cycle</td>
<tr><td class="nobr">-scale [scale amount]</td><td>Scale up or down your character during export. Example: <samp>-scale 2</samp> will double the size of the character. Scaled up from the origin.</td>
<tr><td class="nobr">-align [joint name]</td><td>Will align your animation to a certain bone.</td>
<tr><td class="nobr">-rotate [yaw]</td><td>Allow you to manually rotate your animation. Example: <samp>-rotate 90</samp></td>
<tr><td class="nobr">-nomesh</td><td></td>
<tr><td class="nobr">-clearorigin</td><td></td>
<tr><td class="nobr">-clearoriginaxis</td><td></td>
<tr><td class="nobr">-ignorescale</td><td>Ignore any scales you may have on some bones.</td>
<tr><td class="nobr">-xyzprecision [precision]</td><td>Will take even tiny movements (translations) into
consideration if you make this # lower. Default will try and compress down the animations getting rid of tiny movements.</td>
<tr><td class="nobr">-quatprecision [precision]</td><td>Will take even tiny movements (rotations) into
consideration if you make this # lower. Default will try and compress down the animations getting rid of tiny movements.</td>
<tr><td class="nobr">-jointthreshold [min joint weight]</td><td></td>
<tr><td class="nobr">-skipmesh [name of mesh]</td><td>Allows you to skip certain models during export (can only be used by itself)</td>
<tr><td class="nobr">-keepmesh [name of mesh]</td><td>Allows you to keep only a certain model during export (can only be used by itself)</td>
<tr><td class="nobr">-jointgroup [group name]<br>[joint1] [joint2]...[joint n]</td><td></td>
<tr><td class="nobr">-group [group name]</td><td>Add the list of groups to export (these don't affect the hierarchy)</td>
<tr><td class="nobr">-keep [joint name]</td><td>Add joints that are kept whether they're used by a mesh or not</td>
</table>

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
