<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
	<TITLE>id.sdk [Vis Portals]</title>
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
				<tr><td style="height: 27px; background: url(images/middle.gif)" class="title">&nbsp;&nbsp; Making DOOM 3 Mods : Vis Portals</td></tr>
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
Here is a simple donut map 8 portals in it. When this level is compiled, it creates 8 areas.  Those areas are numbered 1-8 in the screenshot below.

<p>
<img src="visportals/pdas_2dedit.png">

<p>

When Doom 3 renders the level, it first renders the area the view is in then it flows through all visible portals
rendering each area it encounters.  In this example, it would render area 3, then it would render areas 2 and 5, then areas 1 and 8,
then maybe areas 4 and 7.

<p>

If a level has no vis portals in it, there is only one area so the entire level is rendered every frame.

<p>

The renderer determines visibility between areas by doing unions of the screen space rectangles between the areas.  The following
in-game screenshots should make that statement a little easier to understand.

<p>

<img src="visportals/pdas_ingame_step1.png">
<br>
<img src="visportals/pdas_ingame_step2.png">
<br>
<img src="visportals/pdas_ingame_step3.png">
<br>
<img src="visportals/pdas_ingame_step4.png">


<p>

<b>Walls</b>

<p>

Notice how the renderer only uses the portals for determining visibility, it does not use geometry at all.  If you have a wall in between
two portals, it will still render what's on the other side of the wall unless there is another portal in between to divide the room into
two areas.

<p>

<img src="visportals/walls_dont_block1.png"><img src="visportals/walls_dont_block2.png">

<p>

<b>Doors</b>

<p>

If a vis portal is placed inside a door, the door will automatically close the portal when the door is closed.  You can do the same
thing manually through func_portal entities (these are handy for complex doors like airlocks).

<p>

<b>Batches</b>

<p>


The downside to portals is that they create extra triangles and extra batches.  Video cards are set up to handle a small number of batches
with a large number of triangles per batch.  All the triangles in a single area with the same texture are put into a batch.  When you create
a vis portal, it splits the geometry, and adds more batches.  This is normally not a problem unless you have a lot of areas with only a hand
full of triangles in them.

<p>

<b>Testing</b>

<p>


To test the visibility in your own map, use the following cvars:
<pre>
r_showTris 2
r_useScissor 0
r_showPortals 1
</pre>

<p>

<b>Scissors</b>

<p>

To further improve rendering speeds, the Doom 3 engine utilized scissors when rendering areas through a portal.  These scissors prevent
geometry outside the portal rectangle from being drawn by the video card.  This is not a magic cure however, because the data is still
being sent to the video card, it's just that the video card is ignoring it.

<p>
If you do not set r_useScissor 0 then you will not see the full extents of what is being rendered.  You will only see what the video card is
actually drawing.  Remember, just because your video card is throwing away the geometry doesn't mean it's free.  Your CPU still has to waste
time sending the data to the video card.  This is a very slow process.  You don't want your computer to waste time sending a lot of data to
the graphics card just to have it thrown away.

<p>
Here is the same scene with scissors enabled:
<p>

<img src="visportals/pdas_ingame_scissors.png">

<p>

<b>Remember, always test your portals with scissors disabled!</b>

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
