<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
	<TITLE>id.sdk [FX]</title>
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
				<tr><td style="height: 27px; background: url(images/middle.gif)" class="title">&nbsp;&nbsp; Making DOOM 3 Mods : FX</td></tr>
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
<p>
FX decls, are relatively easy to write by hand.  The hard part about fx
files is trying to explain just what they are and how they are used.  The simple
way to think of them is as particle spawners (which is why they are listed under
particles), but they can actually do quite a bit more.  Robert originaly wrote
the FX system because he needed a way to easily sequence special effects, mostly
for the 'spawn in' effect.  There is nothing that you can do with the FX system
that can't be done some other way, but FX decls tend to execute faster, and tend
to be easier to create.

<p>
An FX decl is made up of one or more FX Actions.  The different types of FX Actions are:
<ul>
<li>Spawn or modify a Light
<li>Spawn a particle, model, or entity
<li>Start a sound
<li>Drop a decal
<li>Shake the Player
<li>Launch a projectile
</ul>

When an effect starts, it will start all the FX actions after the specified delay.  So
you could spawn a blue particle immediately, start a sound after half a second,
spawn a light after a second, spawn some more particles after 3 seconds, and fade
out the light after 4 seconds.  Which is exactly what this file does:

<pre class="code">
fx fx/example {
    {
        delay 0
        duration 1.0
        particle "blue.prt"
    }
    {
        delay 0.5
        restart 0
        duration 1.0
        sound "randomsound"
    }
    {
        delay 1.0
        restart 0
        duration 5.0
        name "somelight"
        light "lights/somelight", 2, 2, 2, 500
        fadeIn 1
    }
    {
        delay 3.0
        restart 0
        duration 0.1
        particle "someparticle.prt"
    }
    {
        delay 4.0
        restart 0
        duration 5.0
        useLight "somelight"
        fadeOut 1
    }
}
</pre>

<p>
All effects are attached to an entity, so anything it creates (lights, particles,
sounds, etc) start at the origin of the entity (plus whatever offset is defined).
It's is possible to instead attach the effect to a particular joint with the
"bindto" keyword.  This should be in the "global" section outside any FX actions.
See "skulltrail.fx" for an example.

<p>
The most complicated set of effects are the ones that happen when a monster spawns
in.  That complex sequence with the lightning and sounds and lights is all done
with fx declarations.  The code simply says "create a spawn effect here."  The
specific fx that it uses is in the entityDef for the monster, and the code to
spawn it is in monster_base.script, somewhere around line 480.

<p>
<b>FX decl keywords</b>
<table class="datatable">
<tr><td>name &lt;string&gt;</td><td>The name of this action</td>
<tr><td>delay &lt;time&gt;</td><td>How long (in seconds) after starting the effect before this action happens</td>
<tr><td>shake &lt;time&gt; &lt;amplitude&gt; &lt;distance&gt; &lt;falloff&gt; &lt;impulse&gt;</td><td>Shake the player around a bit.  Take a look at hkwalk.fx for a good example of this.</td>
<tr><td>ignoreMaster</td><td>Don't shake the entity this effect is attached to</td>
<tr><td>random &lt;min&gt;, &lt;max&gt;</td><td>A random time added to the delay.</td>
<tr><td>fire &lt;sibling&gt;</td><td>Causes the sibling action to happen when this action does.  This is a way of synching two random actions.  See smallsparks.fx</td>
<tr><td>duration &lt;time&gt;</td><td>How long the action lasts before it is killed or restarted</td>
<tr><td>restart &lt;bool&gt;</td><td>Set to 1 if the action starts again after the 'duration' has run out</td>
<tr><td>fadeIn &lt;time&gt;</td><td>Fade in the RGB of the light or model over &lt;time&gt; seconds</td>
<tr><td>fadeOut &lt;time&gt;</td><td>Fade out the light/model.  Ignored if fadeIn is set, you can use 2 seperate actions (tied together with uselight) if you want a light to fade in and out.</td>
<tr><td>offset &lt;x&gt;, &lt;y&gt;, &lt;z&gt;</td><td>Offset from the origin of the entity (or bind point) this action is located at</td>
<tr><td>axis &lt;x&gt;, &lt;y&gt;, &lt;z&gt;</td><td>Axis of the model, mutually exclusive with angle</td>
<tr><td>angle &lt;pitch&gt;, &lt;yaw&gt;, &lt;roll&gt;</td><td>Alternate way of setting the axis of the model</td>
<tr><td>rotate &lt;angle&gt;</td><td>Not used</td>
<tr><td>light &lt;material&gt;, &lt;red&gt;, &lt;green&gt;, &lt;blue&gt;, &lt;radius&gt;</td><td>Create a light</td>
<tr><td>noshadows</td><td>The light in this effect doesn't cast shadows</td>
<tr><td>attachlight &lt;light&gt;</td><td>Attach to external light (a light not defined in the effect) for fading.  This is what causes all the lights to fade in/out in alphalabs 2</td>
<tr><td>attachentity &lt;entity&gt;</td><td>Attach to an external entity.  Not actually used in Doom 3</td>
<tr><td>launch &lt;entity&gt;</td><td>Launches a projectile.  Not actually used in Doom 3, but I suppose it could be used to create a neat mario jumping lava effect.</td>
<tr><td>uselight &lt;sibling&gt;</td><td>Modify the light values in a sibling action.  Can be used to fade out a light that faded in earlier.</td>
<tr><td>useModel &lt;model&gt;</td><td>Modify the model in a sibling action.  Can be used to fade out a particle in a sibling.</td>
<tr><td>model &lt;model&gt;</td><td>Creates (or fades in) a model</td>
<tr><td>particle &lt;model&gt;</td><td>Same as model</td>
<tr><td>decal &lt;material&gt;</td><td>Applies the specified decal to the ground (and anything else in the area)</td>
<tr><td>size &lt;int&gt;</td><td>Size of the decal</td>
<tr><td>trackorigin &lt;bool&gt;</td><td>Move around with the entity (vs stationary after spawning)</td>
<tr><td>particleTrackVelocity</td><td>Not used</td>
<tr><td>sound &lt;sndshader&gt;</td><td>Start a sound (on any channel)</td>
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
