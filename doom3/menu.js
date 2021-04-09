
var a = {
"index":"Home",
"downloads":"Downloads",
"contact":"Contact",

"__basics__":"-",
"basics":"Mod Basics",
"packfiles":"Pack Files",
"declfiles":"Decl Files",
"editor_decl":"Decl Editor",
"commands":"Commands",
"cvars":"Cvars",

"__code__":"-",
"code":"The Code",

"__models__":"-",
"modelexport":"Exporting Models",
"models":"Model Decls",
"skins":"Skins",

"__lighting__":"-",
"lighting":"Lighting",
"bumpmaps":"Bump Maps",
"materials":"Materials",

"__afs__":"-",
"afs":"Articulated Figures",
"editor_af":"AF Editor",
"walkik":"Walk IK",

"__sounds__":"-",
"sounds":"Sounds",
"editor_sound":"Sound Editor",

"__particles__":"-",
"particles":"Particles",
"editor_particle":"Particle Editor",
"fx":"FX",

"__guis__":"-",
"guis":"GUIs",
"editor_gui":"GUI Editor",

"__maps__":"-",
"maps":"Maps",
"editor":"DOOMEdit",
"editor_keys":"Editor Keys",
"editor_light":"Light Editor",
"entitydefs":"EntityDefs",
"mapdefs":"MapDefs",

"__pdas__":"-",
"pdas":"PDAs",
"editor_pda":"PDA Editor",

"__script__":"-",
"script":"Scripts",
"script_map":"Map Scripts",
"script_weapon":"Weapon Scripts",
"script_ai":"AI Scripts",
"editor_script":"Script Editor"
}

for ( var i in a ) {
    if ( a[i] == "-" ) {
        document.write( "<br>" );
        continue;
    }
    if ( document.location.pathname.indexOf("/" + i + ".html") >= 0 || ( i == "" && document.location.pathname.indexOf(".html") == -1 ) ) {
		document.write( "<font color='#FFCC66'><b>" + a[i] + "</b></font><br>");
    } else if ( i == "" ) {
        document.write( " <a href=\"/\">" + a[i] + "</a><br>");
	} else {
		document.write( " <a href=\"" + i + ".html\">" + a[i] + "</a><br>");
	}
}
