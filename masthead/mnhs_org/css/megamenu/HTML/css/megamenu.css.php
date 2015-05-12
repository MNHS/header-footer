<?php header("Content-type: text/css"); ?>
<?php 
$se_visit = "#c41230";
$se_research = "#adc687";
$se_explore = "#105e55";
$se_schools = "#00a5b7";
$se_about = "#eeb111";
$se_support = "#003479";
$se_shop = "#f58025";
?>
/*
Item Name : Responsive Mega Menu Complete Set
Item URI : http://codecanyon.net/item/mega-menu-complete-set/152825
Author URI : http://codecanyon.net/user/Pixelworkshop
Version : 3.32
*/

/*

TABLE OF CONTENTS

01 MEGA MENU BAR
02 MEGA MENU CONTAINERS
03 DROP DOWN COLUMNS GRID
04 FLY-OUT MENU
05 MEGA MENU WEB ELEMENTS
   1. General Typography
   2. Lists
   3. Custom Paragraphs
   4. Video + Misc.
   5. Images
   6. Paragraph Icons
   7. Social Icons
   8. Form Elements
   9. Tables
06 DEFAULT THEMES, DARK & LIGHT (COMPULSORY)
   1. Dark Menu Bar
   2. Light Menu Bar
   3. Dark Drop Down
   4. Light Drop Down
   5. Neutral Colored Elements
      - Form Elements
      - Tables
07 ADDITIONAL THEMES (OPTIONNAL)
   1. Blue
   2. Brown
   3. Cherry
   4. Coffee
   5. Green
   6. Grey
   7. Ocean
   8. Orange
   9. Pink
   10. Purple
   11. Red
   12. Tan
   13. Yellow
08 VERTICAL MEGA MENU
09 MOBILE DEVICES
   1. Common Media Queries
   2. Horizontal Mega Menu Media Queries
   3. Vertical Mega Menu Media Queries

*/




/*
	Layout container
	The menu will automatically expand into your container.
	"page_wrapper" and "page_wrapper_vertical" are just used to show how the menu fits,
	those containers are not necessary, just put the menu into a container and it will
	fit exactly to its dimensions.
*/


/*  _______________________________________________

    01 MEGA MENU BAR
    _______________________________________________  */







.mega-container{
	height: 49px;
	*height: 47px;
	width:100%;
	
	z-index:15;
	}
.megamenu_container {

max-width:960px;
	height: 48px;
	*height: 46px;
	margin:0 0 0 0;
	position: relative;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;


}
.megamenu_fixed {
	width: inherit;
	position:fixed;
	top:0;
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;
	/* IE7 Fix */
	*width:expression(this.parentNode.currentStyle['width']);
}
.megamenu {
	list-style:none;
	padding:0;
	position:relative; /* For IE7 */
	margin:0;
	z-index:50;
    font-family: helvetica, sans-serif;
}
	.megamenu > li {
		float:left;
		margin:0;
		border:none;
		-webkit-transition: background 0.5s ease;
		-moz-transition: background 0.5s ease;
		-o-transition: background 0.5s ease;
		-ms-transition: background 0.5s ease;
		transition: background 0.5s ease;
		line-height:1.2em;

	}
		.megamenu > li > a {
			text-transform:uppercase;
			outline:0;
			text-decoration:none;
			display:block;
			padding: 16px 22px 17px 18px;
		}
		.megamenu > li .megamenu_drop {
			padding-right:28px;
		}
		.megamenu li.megamenu_button {
			display: none;
			-webkit-transition: none;
			-moz-transition: none;
			-o-transition: none;
			-ms-transition: none;
			transition: none;
		}

		/* Right aligned menu item */
		
		.megamenu li.megamenu_right {
			float:right;
			margin-right:-1px;
		}
		.megamenu li.megamenu_right a {
			margin-right:5px;
		}

		


/*  _______________________________________________

    02 MEGA MENU CONTAINERS
    _______________________________________________  */




.megamenu li .dropdown_container,
.megamenu li .dropdown_fullwidth,
.megamenu li .dropdown_multilevel {
	position: absolute;
	margin:0;
	padding-top:24px;
	padding-bottom:10px;
	left:-9999em;
	top:-9999em;
	display: block;
	zoom:1;
	z-index:9998;
	float: left;
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}
.megamenu li .dropdown_first {
	margin-left:-1px;
}
.megamenu li .droplast_right {
	margin-right:-1px;
}

/* Showing Drop Down on Mouse Hover */

.megamenu li:hover .dropdown_container {
	top:45px;
	left:auto;
}
.megamenu li:hover .dropdown_fullwidth {
	top:45px;
	left:-1px;
}
.megamenu li .dropdown_right {
	right:0;
}
.megamenu li:hover .dropdown_right {
	top:45px;
	left:auto;
	right:0;
}


/*
	Bigger containers need smaller padding values and
	on the opposite, smaller containers will have
	higher paddings. 
	This makes the content within each kind of drop down 
	equally distant from the left edge. 
*/

.megamenu .dropdown_1column {
	width: 8.3334%;
	padding-left: 2%;
	padding-right: 2%;
}
.megamenu .dropdown_2columns {
	width: 16.6667%;
	padding-left: 1.8333%;
	padding-right: 1.8333%;
}
.megamenu .dropdown_3columns {
	width: 25%;
	padding-left: 1.5%;
	padding-right: 1.5%;
}
.megamenu .dropdown_4columns {
	width: 33.3334%;
	padding-left: 1.333%;
	padding-right: 1.333%;
}
.megamenu .dropdown_5columns {
	width: 41.6667%;
	padding-left: 1.166%;
	padding-right: 1.166%;
}
.megamenu .dropdown_6columns {
	width: 50%;
	padding-left: 1%;
	padding-right: 1%;
}
.megamenu .dropdown_7columns {
	width: 58.3334%;
	padding-left: 0.833%;
	padding-right: 0.833%;
}
.megamenu .dropdown_8columns {
	width: 66.6667%;
	padding-left: 0.666%;
	padding-right: 0.666%;
}
.megamenu .dropdown_9columns {
	width: 75%;
	padding-left: 0.5%;
	padding-right: 0.5%;
}
.megamenu .dropdown_10columns {
	width: 83.3334%;
	padding-left: 0.333%;
	padding-right: 0.333%;
}
.megamenu .dropdown_11columns {
	width: 91.6667%;
	padding-left: 0.1666%;
	padding-right: 0.1666%;
}
.megamenu .dropdown_12columns,
.megamenu .dropdown_fullwidth {
	width: 100%;
}




/*  _______________________________________________

    03 DROP DOWN COLUMNS GRID
    _______________________________________________  */




.megamenu .col_1,
.megamenu .col_2,
.megamenu .col_2-5,
.megamenu .col_3,
.megamenu .col_4,
.megamenu .col_5,
.megamenu .col_6,
.megamenu .col_7,
.megamenu .col_8,
.megamenu .col_9,
.megamenu .col_9-5,
.megamenu .col_10,
.megamenu .col_11,
.megamenu .col_12 {
	float: left;
	display:inline;
	position: relative;
	margin-left: 2%;
	margin-right: 2%;
	/* 
	Rounding error with IE7.
	Lower margin values will absorb the difference.
	*/
	*margin-left: 1.9%;
	*margin-right: 1.9%;
}

.megamenu .col_1 {width:4.33%;}
.megamenu .col_2 {width:12.66%;}
.megamenu .col_2-5 {width:16.825%;}
.megamenu .col_3 {width:21%;}
.megamenu .col_4 {width:29.33%;}
.megamenu .col_5 {width:37.66%;}
.megamenu .col_6 {width:46%;}
.megamenu .col_7 {width:54.33%;}
.megamenu .col_8 {width:62.66%;}
.megamenu .col_9 {width:71%;}
.megamenu .col_9-5 {width:75.165%;}
.megamenu .col_10 {width:79.33%;}
.megamenu .col_11 {width:87.66%;}
.megamenu .col_12 {width:96%;}

.megamenu .rowcontent {
	clear:left;
	/*
	IE7 clear issue.
	Display inline required.
	*/
	*display:inline;
}




/*  _______________________________________________

    04 FLY-OUT MENU
    _______________________________________________  */




.megamenu .dropdown_flyout, 
.megamenu .dropdown_flyout .dropdown_flyout_level {
	padding: 0;
	margin: 0;
	list-style: none;
	z-index: 9;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.megamenu .dropdown_flyout li {
	float: left;
	width: 92%;
	padding: 3px 4% 3px 4%;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	border-radius:3px;
}
.megamenu .dropdown_flyout ul li {
	width: 140px;
	padding: 3px 10px 3px 10px;
}
.megamenu .dropdown_flyout a {
	display: block;
	width: 10em;
}
.megamenu .dropdown_flyout .dropdown_flyout_level {
	position: absolute;
	margin:15px 0 0 4px;
	padding:6px;
	left: -9999em;
	top:-9999em;
	display: block;
	zoom:1;
	float: left;
}
.megamenu .dropdown_flyout li:hover > .dropdown_flyout_level {
	left:95%;
	top:-21px;
}
.megamenu .dropdown_flyout li:hover > .dropdown_flyout_level_left {
	left:-108%;
	right:100%;
}




/*  _______________________________________________

    05 MEGA MENU WEB ELEMENTS
    _______________________________________________  */




/* 1. General Typography */
.megamenu{
	font-size:14px;
	line-height:1.4em;
}
.megamenu p, 
.megamenu h1, 
.megamenu h2, 
.megamenu h3, 
.megamenu h4, 
.megamenu h5, 
.megamenu h6 {
	padding:0;
	margin:0 0 20px;
}
.megamenu > li > div a {
	text-decoration: none;
	outline: none;
}
.megamenu > li > div a:hover {
	-webkit-transition: color 0.3s;
	-moz-transition: color 0.3s;
	-o-transition: color 0.3s;
	-ms-transition: color 0.3s;
	transition: color 0.3s;
    text-decoration:underline;
}
.megamenu p.small {
	font-size:12px; 
	line-height:21px;
}
.megamenu h1, 
.megamenu h2, 
.megamenu h3,
.megamenu h4, 
.megamenu h5, 
.megamenu h6 {
	font-weight: bold;
	margin:0 0 20px 0;
}
.megamenu h1 {
	font-size: 24px;
	line-height: 28px;
}
.megamenu h2 {
	font-size: 20px;
	line-height: 22px;
}
.megamenu h3 {
	font-size: 16px;
	line-height: 1em;
	margin:0 0 15px 0;
}
.megamenu h4 {
	font-size: 14px;
	
	line-height: 18px;
	margin-bottom:14px;
}
.megamenu h5 {
	font-size: 12px;
	line-height: 18px;
	margin-bottom:14px;
}
.megamenu h6 {
	font-size: 10px;
	line-height: 16px;
	margin-bottom:14px;
	text-transform:uppercase;
}
.megamenu .main-links li, .megamenu strong, .megamenu ul.menu li.leaf{
	font-weight:;
	text-transform:;	
}


/* 2. Lists */


.megamenu li ol {
	padding:0;
	margin:0 0 18px 20px;
}
.megamenu li ul {
	padding:0;
	margin:0 0 10px 0;
}

.megamenu li ul {
	list-style:none;
}
.megamenu li ul.double li, .megamenu li ul.triple li, .megamenu li ul.quad li{
	list-style-type:none;
}
.megamenu li ol {
	list-style:decimal;
	*margin-left: 22px;
}
	.megamenu li ul li,
	.megamenu li ol li {
		line-height:1.2em;
		position:relative;
		padding:0 0 .5em 0;
		margin:0;
		float:none;
		text-align:left;
		list-style-image:none;
	}
.megamenu li ul.list_unstyled, .megamenu li ul, .megamenu ul.menu {
	list-style: none;
	padding-left:0;
	margin-left:20px;
	
}
.megamenu ul.menu li.leaf, .megamenu ul.menu li, .megamenu li ul li{
	list-style-image:url(../img/link-arrow.png);
}
.megamenu li ul li ul{
	margin:0;
}
.megamenu li ul li ul li{
	list-style-image:none;
    padding-top:10px;
}


/* 3. Custom Paragraphs */


.megamenu .blue, 
.megamenu .grey, 
.megamenu .orange, 
.megamenu .dark, 
.megamenu .purple {
	padding:0 0 0 15px; 
	margin-bottom:18px;
	border-left: solid 5px;
}
	.megamenu .blue {border-left-color:#929292;}
	.megamenu .grey {border-left-color:#ECE7BA;}
	.megamenu .orange {border-left-color:#BD4F33;}
	.megamenu .dark {border-left-color:#3F3F3F;}
	.megamenu .purple {border-left-color:#382E34;}

.megamenu .black_box {
	text-shadow:none;
	padding:10px;
	margin-top:-10px;
	*margin-top:0;
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
}


/* 4. Video + Misc. */


.megamenu .video_container {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 30px;
	height: 0;
	overflow: hidden;
	margin-bottom: 24px;
}
	.megamenu .video_container iframe,  
	.megamenu .video_container object,  
	.megamenu .video_container embed {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		border:none;
	}
.megamenu .dropcap {
	display:block; 
	float:left; 
	font-size:42px; 
	line-height:36px; 
	margin:4px 8px 0 0;
}
.megamenu hr {
	width: 100%;
	height: 0;
	*height:2px;
	border:none;
	margin-bottom: 24px;
}


/* 5. Images */


.megamenu img {
	max-width: 100%;
	height: auto;
	border:none;
	margin-bottom: 18px;
}
	.megamenu img.img_left {
		float: left;
		margin-right: 18px;
	}
	.megamenu img.img_right {
		float: right;
		margin-left: 18px;
	}
	.megamenu .top-tier-sites img{
	max-width:200px;
	height:auto;
	padding:10px 30px;
	}
	.megamenu .top-tier-sites img.first{
	padding-left:0;
	}
	.megamenu .top-tier-sites img.last{
	padding-right:0;
	}
	.megamenu .top-tier-sites hr{
margin-bottom:0;	}	
/*.megamenu img {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
	filter: alpha(opacity=70);
	opacity:0.7;
	-webkit-transition: opacity 0.3s ease-in-out; 
	-moz-transition: opacity 0.3s ease-in-out; 
	-o-transition: opacity 0.3s ease-in-out; 
	-ms-transition: opacity 0.3s ease-in-out; 
	transition: opacity 0.3s ease-in-out;  
}
.megamenu img:hover {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity:1;
	-webkit-transition: opacity 0.3s ease-in-out; 
	-moz-transition: opacity 0.3s ease-in-out; 
	-o-transition: opacity 0.3s ease-in-out; 
	-ms-transition: opacity 0.3s ease-in-out; 
	transition: opacity 0.3s ease-in-out;  
}

*/
/* 6. Paragraph Icons */


.megamenu .paragraph_icon {
	padding-left: 36px;
	padding-right: 20px;
	margin-bottom: 18px;
}
.megamenu .mini_icon {
	background-repeat: no-repeat;
	margin-top: 4px;
	margin-left:-34px;
	float: left;
	width: 32px;
	height: 32px;
}
.megamenu_dark .megamenu .mini_icon {
    background-image: url("../img/icons/mini-icons-white.png");
}
.megamenu_light .megamenu .mini_icon {
    background-image: url("../img/icons/mini-icons-black.png");
}

.megamenu .ic_archive{ background-position: 0 0;  } 
.megamenu .ic_attachment{ background-position: 0 -56px;  } 
.megamenu .ic_bookmark{ background-position: 0 -112px;  } 
.megamenu .ic_brush{ background-position: 0 -168px;  } 
.megamenu .ic_calc{ background-position: 0 -224px;  } 
.megamenu .ic_calendar{ background-position: 0 -280px;  } 
.megamenu .ic_cancel{ background-position: 0 -336px;  } 
.megamenu .ic_chat{ background-position: 0 -392px;  } 
.megamenu .ic_chats{ background-position: 0 -448px;  } 
.megamenu .ic_cloud{ background-position: 0 -504px;  } 
.megamenu .ic_delete{ background-position: 0 -560px;  } 
.megamenu .ic_documents{ background-position: 0 -616px;  } 
.megamenu .ic_down{ background-position: 0 -672px;  } 
.megamenu .ic_down_circle{ background-position: 0 -728px;  } 
.megamenu .ic_download{ background-position: 0 -784px;  } 
.megamenu .ic_edit{ background-position: 0 -840px;  } 
.megamenu .ic_empty_document{ background-position: 0 -896px;  } 
.megamenu .ic_favorite{ background-position: 0 -952px;  } 
.megamenu .ic_folder{ background-position: 0 -1008px;  } 
.megamenu .ic_fullscreen{ background-position: 0 -1064px;  } 
.megamenu .ic_graph{ background-position: 0 -1120px;  } 
.megamenu .ic_grid{ background-position: 0 -1176px;  } 
.megamenu .ic_left{ background-position: 0 -1232px;  } 
.megamenu .ic_left_circle{ background-position: 0 -1288px;  } 
.megamenu .ic_list{ background-position: 0 -1344px;  } 
.megamenu .ic_lock{ background-position: 0 -1400px;  } 
.megamenu .ic_mail{ background-position: 0 -1456px;  } 
.megamenu .ic_minus{ background-position: 0 -1512px;  } 
.megamenu .ic_ok{ background-position: 0 -1568px;  } 
.megamenu .ic_picture{ background-position: 0 -1624px;  } 
.megamenu .ic_pin{ background-position: 0 -1680px;  } 
.megamenu .ic_plus{ background-position: 0 -1736px;  } 
.megamenu .ic_power{ background-position: 0 -1792px;  } 
.megamenu .ic_print{ background-position: 0 -1848px;  } 
.megamenu .ic_refresh{ background-position: 0 -1904px;  } 
.megamenu .ic_right{ background-position: -56px 0;  } 
.megamenu .ic_right_circle{ background-position: -56px -56px;  } 
.megamenu .ic_settings{ background-position: -56px -112px;  } 
.megamenu .ic_sound{ background-position: -56px -168px;  } 
.megamenu .ic_sync{ background-position: -56px -224px;  } 
.megamenu .ic_tag{ background-position: -56px -280px;  } 
.megamenu .ic_target{ background-position: -56px -336px;  } 
.megamenu .ic_text_document{ background-position: -56px -392px;  } 
.megamenu .ic_time{ background-position: -56px -448px;  } 
.megamenu .ic_unlock{ background-position: -56px -504px;  } 
.megamenu .ic_up{ background-position: -56px -560px;  } 
.megamenu .ic_up_circle{ background-position: -56px -616px;  } 
.megamenu .ic_user{ background-position: -56px -672px;  } 
.megamenu .ic_users{ background-position: -56px -728px;  } 
.megamenu .ic_zoom{ background-position: -56px -784px;  } 

.megamenu .ic_default{ background-position: 0 0; background-image:url(../img/icons/icon-default.png)!important;  } 
.megamenu .ic_srl{ background-position: 0 0; background-image:url(../img/icons/icon-srl.png)!important;  } 
.megamenu .ic_mcm{ background-position: 0 0; background-image:url(../img/icons/icon-mcm.png)!important; } 
.megamenu .ic_hfs{ background-position: 0 0; background-image:url(../img/icons/icon-hfs.png)!important; } 
.megamenu .ic_mhc{ background-position: 0 0; background-image:url(../img/icons/icon-mhc.png)!important; } 


/* Menu Section Colors */
li.section {
	border-right:1px solid #55616a;
}
li.section.se-search{
	border-right:0;
}
li.section > a{
	border-top:3px solid;
	z-index:1000000000;
	margin-bottom:-3px;

}
li.se-research > a{border-color:<?php echo $se_research; ?>;}
li.se-schools > a{border-color:<?php echo $se_schools; ?>;}
li.se-explore > a{border-color:<?php echo $se_explore; ?>;}
li.se-visit > a{border-color:<?php echo $se_visit; ?>;}
li.se-shop > a{border-color:<?php echo $se_shop; ?>; border-right:0!important;}
li.se-about > a{border-color:<?php echo $se_about; ?>;}
li.se-support > a{border-color:<?php echo $se_support; ?>;}
li.se-search > a{	border-top:0; }
li.bg-gray > a{border-color:#36424a; }



/*  _______________________________________________

    06 DEFAULT THEMES, DARK & LIGHT (COMPULSORY)
    _______________________________________________  */




/* 1. Dark Menu Bar */


.megamenu_dark_bar {
	border: 0px solid blue;
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
	box-shadow:none;
}
/* Customized mhs styles */
		.mhs-gray .megamenu_dark_bar, .mega-container {
			background-image:none;
			border:0;
			border-radius:0;
		}
		.mega-container.mhs-gray {
        			background:rgb(36, 42, 46)\9;

			background-image: -webkit-gradient(
				linear,
				left top,
				left bottom,
				color-stop(0, rgb(36, 42, 46)),
				color-stop(1, rgb(54, 66, 74))
			);
			background-image: -o-linear-gradient(bottom, rgb(36, 42, 46) 0%, rgb(54, 66, 74) 100%);
			background-image: -moz-linear-gradient(bottom, rgb(36, 42, 46) 0%, rgb(54, 66, 74) 100%);
			background-image: -webkit-linear-gradient(bottom, rgb(36, 42, 46) 0%, rgb(54, 66, 74) 100%);
			background-image: -ms-linear-gradient(bottom, rgb(36, 42, 46) 0%, rgb(54, 66, 74) 100%);
			background-image: linear-gradient(to bottom, rgb(36, 42, 46) 0%, rgb(54, 66, 74) 100%);
			border:1px solid #50606B;
			border-bottom-width:10px!important;
			border-bottom:solid #50606B;
			border-right:0; border-left:0;
			border-radius:0;
-webkit-box-shadow:none);
	-moz-box-shadow:none;
	box-shadow:none;		}
/* Customized mhs styles */

.megamenu_dark_bar .megamenu {
	color:#FFFFFF;
}
	.megamenu_dark_bar .megamenu > li:hover, 
	.megamenu_dark_bar .megamenu > li.active {
		background: #121212;
/*		-webkit-box-shadow:inset 0px 3px 6px rgba(0,0,0,0.2);
		-moz-box-shadow:inset 0px 3px 6px rgba(0,0,0,0.2);
		box-shadow:inset 0px 3px 6px rgba(0,0,0,0.2);*/
	}
	
.research .megamenu_dark_bar .megamenu > li.se-research,
.megamenu_dark_bar .megamenu > li.se-research:hover,
.megamenu_dark_bar .megamenu > li.se-research.active{background-color:<?php echo $se_research; ?>;}
	.research .mega-container.mhs-gray {border-bottom-color:<?php echo $se_research; ?>;}

.explore .megamenu_dark_bar .megamenu > li.se-explore,
.megamenu_dark_bar .megamenu > li.se-explore:hover,
.megamenu_dark_bar .megamenu > li.se-explore.active{background-color:<?php echo $se_explore; ?>;}
	.explore .mega-container.mhs-gray {border-bottom-color:<?php echo $se_explore; ?>;}

.schools .megamenu_dark_bar .megamenu > li.se-schools,
.megamenu_dark_bar .megamenu > li.se-schools:hover,
.megamenu_dark_bar .megamenu > li.se-schools.active{background-color:<?php echo $se_schools; ?>;}
	.schools .mega-container.mhs-gray {border-bottom-color:<?php echo $se_schools; ?>;}
    
.visit .megamenu_dark_bar .megamenu > li.se-visit,
.megamenu_dark_bar .megamenu > li.se-visit:hover,
.megamenu_dark_bar .megamenu > li.se-visit.active{background-color:<?php echo $se_visit; ?>;}
	.visit .mega-container.mhs-gray {border-bottom-color:<?php echo $se_visit; ?>;}
    
.shop .megamenu_dark_bar .megamenu > li.se-shop,
.megamenu_dark_bar .megamenu > li.se-shop:hover,
.megamenu_dark_bar .megamenu > li.se-shop.active{background-color:<?php echo $se_shop; ?>;}
	.shop .mega-container.mhs-gray {border-bottom-color:<?php echo $se_shop; ?>;}

.about .megamenu_dark_bar .megamenu > li.se-about,
.megamenu_dark_bar .megamenu > li.se-about:hover,
.megamenu_dark_bar .megamenu > li.se-about.active{background-color:<?php echo $se_about; ?>;}
	.about .mega-container.mhs-gray {border-bottom-color:<?php echo $se_about; ?>;}

.support .megamenu_dark_bar .megamenu > li.se-support,
.megamenu_dark_bar .megamenu > li.se-support:hover,
.megamenu_dark_bar .megamenu > li.se-support.active{background-color:<?php echo $se_support; ?>;}
	.support .mega-container.mhs-gray {border-bottom-color:<?php echo $se_support; ?>;}

	
	.megamenu_dark_bar .megamenu li.noactive {
		background:none;
		-webkit-box-shadow:none;
		-moz-box-shadow:none;
		box-shadow:none;
	}
	.megamenu_dark_bar .megamenu > li > a {
		color:#FFFFFF;
		text-shadow:1px 1px 1px #000000;
	}
	.megamenu_dark_bar .megamenu > li:hover > a {
		color:#FFFFFF;
		text-shadow:1px 1px 1px #000000;
	}
	.megamenu_dark_bar .megamenu > li .megamenu_drop {
		background:url("../img/dropdown.png") no-repeat right 18px;
	}
	.megamenu_dark_bar .megamenu_vertical > li .megamenu_drop {
		background:url("../img/right.png") no-repeat right 16px;
	}
	.megamenu_dark_bar .megamenu li.megamenu_button,
	.megamenu_dark_bar .megamenu li.megamenu_button:hover {
		background:url("../img/dropdown.png") no-repeat right 19px;
	}
	.megamenu_dark_bar .megamenu li.megamenu_button_active,
	.megamenu_dark_bar .megamenu li.megamenu_button_active:hover {
		background:url("../img/dropdown-up.png") no-repeat right 18px;
	}






/* 1.5 - MHS Menu Bar */




.megamenu_mhs-dark_bar {
	background-image: -webkit-gradient(
		linear,
		left top,
		left bottom,
		color-stop(0, rgb(36, 42, 46)),
		color-stop(1, rgb(54, 66, 74))
	);
	background-image: -o-linear-gradient(bottom, rgb(36, 42, 46) 0%, rgb(54, 66, 74) 100%);
	background-image: -moz-linear-gradient(bottom, rgb(36, 42, 46) 0%, rgb(54, 66, 74) 100%);
	background-image: -webkit-linear-gradient(bottom, rgb(36, 42, 46) 0%, rgb(54, 66, 74) 100%);
	background-image: -ms-linear-gradient(bottom, rgb(36, 42, 46) 0%, rgb(54, 66, 74) 100%);
	background-image: linear-gradient(to bottom, rgb(36, 42, 46) 0%, rgb(54, 66, 74) 100%);
	border:1px solid #50606B;
	border-right:0; border-left:0;
	border-radius:0;
}
.megamenu_mhs-dark_bar .megamenu {
	color:#FFFFFF;
}
	.megamenu_mhs-dark_bar .megamenu > li:hover, 
	.megamenu_mhs-dark_bar .megamenu > li.active {
		background: #121212;
		-webkit-box-shadow:inset 0px 3px 6px rgba(0,0,0,0.2);
		-moz-box-shadow:inset 0px 3px 6px rgba(0,0,0,0.2);
		box-shadow:inset 0px 3px 6px rgba(0,0,0,0.2);
	}
	.megamenu_mhs-dark_bar .megamenu li.noactive {
		background:none;
		-webkit-box-shadow:none;
		-moz-box-shadow:none;
		box-shadow:none;
	}
	.megamenu_mhs-dark_bar .megamenu > li > a {
		color:#FFFFFF;
		text-shadow:1px 1px 1px #000000;
	}
	.megamenu_mhs-dark_bar .megamenu > li:hover > a {
		color:#FFFFFF;
		text-shadow:1px 1px 1px #000000;
	}
	.megamenu_mhs-dark_bar .megamenu > li .megamenu_drop {
		background:url("../img/dropdown.png") no-repeat right 18px;
	}
	.megamenu_mhs-dark_bar .megamenu_vertical > li .megamenu_drop {
		background:url("../img/right.png") no-repeat right 16px;
	}
	.megamenu_mhs-dark_bar .megamenu li.megamenu_button,
	.megamenu_mhs-dark_bar .megamenu li.megamenu_button:hover {
		background:url("../img/dropdown.png") no-repeat right 19px;
	}
	.megamenu_mhs-dark_bar .megamenu li.megamenu_button_active,
	.megamenu_mhs-dark_bar .megamenu li.megamenu_button_active:hover {
		background:url("../img/dropdown-up.png") no-repeat right 18px;
	}









/* 2. Light Menu Bar */


.megamenu_light_bar {
	background: #eeeeee;
	background: -webkit-linear-gradient(top,#f8f8f8 0%,#eeeeee);
	background: -moz-linear-gradient(top,#f8f8f8 0%,#eeeeee);
	background: -o-linear-gradient(top,#f8f8f8 0%,#eeeeee);
	background: -ms-linear-gradient(top,#f8f8f8 0%,#eeeeee);
	background: linear-gradient(top,#f8f8f8 0%,#eeeeee);	
	border: 1px solid #CCCCCC;
	-webkit-box-shadow:inset 0px 0px 2px rgba(255,255,255,0.7);
	-moz-box-shadow:inset 0px 0px 2px rgba(255,255,255,0.7);
	box-shadow:inset 0px 0px 2px rgba(255,255,255,0.7);
}
.megamenu_light_bar .megamenu {
	color:#212121;
}
	.megamenu_light_bar .megamenu > li:hover, 
	.megamenu_light_bar .megamenu > li.active {
		background: #DDDDDD;
	}
	.megamenu_light_bar .megamenu li.noactive {
		background:none;
		-webkit-box-shadow:none;
		-moz-box-shadow:none;
		box-shadow:none;
	}
	.megamenu_light_bar .megamenu > li > a {
		color:#212121;
		text-shadow:1px 1px 1px #FFFFFF;
	}
	.megamenu_light_bar .megamenu > li:hover > a {
		color:#212121;
		text-shadow:1px 1px 1px #FFFFFF;
	}
	.megamenu_light_bar .megamenu > li .megamenu_drop {
		background:url("../img/dropdown-b.png") no-repeat right 18px;
	}
	.megamenu_light_bar .megamenu_vertical > li .megamenu_drop {
		background:url("../img/right-b.png") no-repeat right 16px;
	}
	.megamenu_light_bar .megamenu li.megamenu_button,
	.megamenu_light_bar .megamenu li.megamenu_button:hover {
		background:url("../img/dropdown-b.png") no-repeat right 19px;
	}
	.megamenu_light_bar .megamenu li.megamenu_button_active,
	.megamenu_light_bar .megamenu li.megamenu_button_active:hover {
		background:url("../img/dropdown-b-up.png") no-repeat right 18px;
	}



/* 4. Light Drop Down */


.megamenu_light .megamenu li .dropdown_container,
.megamenu_light .megamenu li .dropdown_fullwidth,
.megamenu_light .megamenu li .dropdown_flyout li ul {
	border:3px solid;
	border-color:#ccc;
	border-radius:0;
	background: #ffffff;
	color: #212121;
    box-shadow: 0px 5px 10px rgba(0,0,0,0.4);
}
	.megamenu_light .megamenu li.se-research .dropdown_container, 
	.megamenu_light .megamenu li.se-research .dropdown_fullwidth, 
	.megamenu_light .megamenu li.se-research .dropdown_flyout li ul {
		border-color:<?php echo $se_research; ?>;
	}
	.megamenu_light .megamenu li.se-explore .dropdown_container, 
	.megamenu_light .megamenu li.se-explore .dropdown_fullwidth, 
	.megamenu_light .megamenu li.se-explore .dropdown_flyout li ul {
		border-color:<?php echo $se_explore; ?>;
	}
	.megamenu_light .megamenu li.se-schools .dropdown_container, 
	.megamenu_light .megamenu li.se-schools .dropdown_fullwidth, 
	.megamenu_light .megamenu li.se-schools .dropdown_flyout li ul {
		border-color:<?php echo $se_schools; ?>;
	}	
	.megamenu_light .megamenu li.se-about .dropdown_container, 
	.megamenu_light .megamenu li.se-about .dropdown_fullwidth, 
	.megamenu_light .megamenu li.se-about .dropdown_flyout li ul {
		border-color:<?php echo $se_about; ?>;
	}
	.megamenu_light .megamenu li.se-visit .dropdown_container, 
	.megamenu_light .megamenu li.se-visit .dropdown_fullwidth, 
	.megamenu_light .megamenu li.se-visit .dropdown_flyout li ul {
		border-color:<?php echo $se_visit; ?>;
	}
	.megamenu_light .megamenu li.se-shop .dropdown_container, 
	.megamenu_light .megamenu li.se-shop .dropdown_fullwidth, 
	.megamenu_light .megamenu li.se-shop .dropdown_flyout li ul {
		border-color:<?php echo $se_shop; ?>;
	}
	.megamenu_light .megamenu li.se-support .dropdown_container, 
	.megamenu_light .megamenu li.se-support .dropdown_fullwidth, 
	.megamenu_light .megamenu li.se-support .dropdown_flyout li ul {
		border-color:<?php echo $se_support; ?>;
	}

.megamenu_container_vertical .megamenu li .dropdown_container,
.megamenu_container_vertical .megamenu li .dropdown_fullwidth,
.megamenu_container_vertical .megamenu li .dropdown_flyout li ul {
	border-top-width: 1px;
}
.megamenu_light .megamenu li .dropdown_flyout li ul {
	border:1px solid #CCCCCC;
}
.megamenu_light .megamenu li .dropdown_flyout .dropdown_parent {
	background:url("../img/right-b.png") no-repeat right 9px;
}
.megamenu_light .megamenu li .dropdown_flyout .dropdown_parent:hover,
.megamenu_light .megamenu li .dropdown_flyout .dropdown_parent.active {
	background-color:#eeeeee;
}
.megamenu_light .megamenu li .dropdown_flyout .dropdown_parent.noactive {
	background-color:transparent;
}
.megamenu_light .megamenu p, 
.megamenu_light .megamenu h1, 
.megamenu_light .megamenu h2, 
.megamenu_light .megamenu h3, 
.megamenu_light .megamenu h4, 
.megamenu_light .megamenu h5, 
.megamenu_light .megamenu h6 {
	color: #212121;
	text-shadow: 1px 1px 1px #FFFFFF;
}
.megamenu_light .megamenu > li > div a,
.megamenu_light .megamenu li ul li,
.megamenu_light .megamenu li ol li {
	color:#000;
}
.megamenu_light .megamenu > li > div a:hover {
	color:#333333;
}
.megamenu_light .megamenu li ul li:hover,
.megamenu_light .megamenu li ol li:hover,
.megamenu_light .megamenu .blue, 
.megamenu_light .megamenu .grey, 
.megamenu_light .megamenu .orange, 
.megamenu_light .megamenu .dark, 
.megamenu_light .megamenu .purple {
	color:#444444;
}
.megamenu_light .megamenu .black_box {
	background: #212121;
	color:#ffffff;
	text-shadow:1px 1px 1px #000000;
}
.megamenu_light .megamenu .grey_bg {
	background: #eeeeee;
}
.megamenu_light .megamenu .form_element {
	-webkit-box-shadow: 0 1px 1px #efefef;
	-moz-box-shadow: 0 1px 1px #efefef;
	box-shadow: 0 1px 1px #efefef;
}
.megamenu_light .megamenu > li.megamenu_searchform:hover {
	background: none;
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
	box-shadow:none;
}
.megamenu_light .megamenu hr {
	border:none;
	border-bottom:1px solid #ffffff;
	border-top:1px solid #e4e4e4;
}


/*  _______________________________________________

    09 MOBILE DEVICES
    _______________________________________________  */




/* 1. Common Media Queries 


@media only screen and (max-width: 984px) {

	.megamenu img {
		max-width: 96%;
		height: auto;
	}
	.megamenu textarea {
		width:96%;
	}

}

@media only screen and (min-width: 480px) and (max-width: 767px) {

	.megamenu_container .megamenu > li > div > .responsive_sixths,
	.megamenu_container_vertical .megamenu > li > .dropvertical_container > div > .responsive_sixths {
		width: 8.66%;
	}
	.megamenu_container .megamenu > li > div > .responsive_fourths,
	.megamenu_container_vertical .megamenu > li > .dropvertical_container > div > .responsive_fourths {
		width: 17%;
	}
	.megamenu_container .megamenu > li > div > .responsive_thirds,
	.megamenu_container_vertical .megamenu > li > .dropvertical_container > div > .responsive_thirds {
		width: 25.33334%;
	}
	.megamenu_container .megamenu > li > div > .responsive_halfs,
	.megamenu_container_vertical .megamenu > li > .dropvertical_container > div > .responsive_halfs {
		width: 42%;
	}

}


*/
/* 2. Horizontal Mega Menu Media Queries */


@media only screen and (min-width: 740px) and (max-width: 980px) {
    #global-search form.global-search-form{
       width:240px;
    }
    .megamenu > li .megamenu_drop {
        padding-right: 10px;
        padding-left:10px;
        font-size:13px;
     }
    .megamenu_dark_bar .megamenu > li .megamenu_drop {    
        background:none!important;
    }
    body .section-menu-column .menu-block-wrapper > ul > li {
	   border-left-width: 5px;
    }
    body .section-menu-column .menu-block-wrapper > ul > li > a {
	    padding: .425em .25em;
    }
    #search-secondaryLinks #secondaryLinks {
		margin-right:5px;
    }
    #search-secondaryLinks #secondaryLinks ul{
    	font-size:85%;
    }
    #search-secondaryLinks #secondaryLinks ul li a{
      padding: 0 2px 0 4px;
    }
}


@media only screen and (max-width:740px) {
    #search-secondaryLinks {
        position:relative;
        max-width:700px;
        width:95%;
        top:0;
    }
    #search-secondaryLinks #secondaryLinks ul li a{
     
    }
    #global-search{
    	float:none;
        margin-left:20px;
    }
    #global-search form.global-search-form{
       width:100%;
    }
    #search-secondaryLinks  #secondaryLinks{
        margin:10px 0;
        float:left;
    }
    .global-search-form .input-box{
        width:auto;
        max-width:100%;
	}
	.megamenu > li{
	background:#333;	
	}
	.megamenu li.section > a{
	border-top:0;
	border-left-width:3px;
	border-left-style:solid;
    background-color:#333333!important;	
	}

	.megamenu_container {
		height: auto;
	}
	.megamenu .top-tier-sites img{
		clear:both;
		padding:0;
		display:block;
	}
	.logo-mhc{
		position:relative; top:0!important;
		padding-top:10px!important;	
	}
	.megamenu_container .megamenu > li,
	.megamenu_container .megamenu > li:hover,
	.megamenu_container .megamenu > li.right,
	.megamenu_container .megamenu > li.right:hover {
		float:none;
		width:auto;
		padding-right:0;
		margin-right:0;
	}
		.megamenu_container .megamenu > li > a {
			padding: 16px 10px 16px 10px;
		}
		.megamenu_container .megamenu li.right a {
			margin-right:0;
		}

	 .megamenu_container .megamenu li:hover .dropdown_container,
	 .megamenu_container .megamenu li:hover .dropdown_fullwidth,
	 .megamenu_container .megamenu li:hover .dropdown_right {
		top:auto;
		left:-1px;
	}
  	.megamenu_container .megamenu .dropdown_1column,
  	.megamenu_container .megamenu .dropdown_2columns,
  	.megamenu_container .megamenu .dropdown_3columns,
	.megamenu_container .megamenu .dropdown_4columns,
	.megamenu_container .megamenu .dropdown_5columns,
	.megamenu_container .megamenu .dropdown_6columns,
	.megamenu_container .megamenu .dropdown_7columns,
	.megamenu_container .megamenu .dropdown_8columns,
	.megamenu_container .megamenu .dropdown_9columns,
	.megamenu_container .megamenu .dropdown_10columns,
	.megamenu_container .megamenu .dropdown_11columns,
	.megamenu_container .megamenu .dropdown_12columns {
		width: 100%;
		padding-left:0;
		padding-right:0;
	}
	.megamenu_container .megamenu .col_1,
	.megamenu_container .megamenu .col_2,
	.megamenu_container .megamenu .col_2-5,
	.megamenu_container .megamenu .col_3,
	.megamenu_container .megamenu .col_4,
	.megamenu_container .megamenu .col_5,
	.megamenu_container .megamenu .col_6,
	.megamenu_container .megamenu .col_7,
	.megamenu_container .megamenu .col_8,
	.megamenu_container .megamenu .col_9,
	.megamenu_container .megamenu .col_9-5,
	.megamenu_container .megamenu .col_10,
	.megamenu_container .megamenu .col_11,
	.megamenu_container .megamenu .col_12 {
		width:92%;
		margin-left: 4%;
		margin-right: 4%;
	}
	.megamenu_container .megamenu > li.megamenu_searchform .megamenu_searchfield {
		margin-left: 10px;
		margin-bottom: 10px;
	}
	.megamenu .dropdown_flyout, 
	.megamenu .dropdown_flyout .dropdown_flyout_level {
		position: relative;
		left:auto;
		top:auto;
		padding: 0;
		margin: 0 4% 0 4%;
	}
	.megamenu .dropdown_flyout li,
	.megamenu .dropdown_flyout ul li {
		width: 100%;
		padding: 3px 0 3px 0;
	}
	.megamenu .dropdown_flyout li:hover > .dropdown_flyout_level {
		left:auto;
		top:auto;
	}
	.megamenu .dropdown_flyout li:hover > .dropdown_flyout_level_left {
		left:auto;
		right:auto;
	}
	.megamenu_dark .megamenu li .dropdown_flyout li ul,	
	.megamenu_light .megamenu li .dropdown_flyout li ul {
		border:none;
		background: none;
	}
	.megamenu_dark .megamenu li .dropdown_flyout .dropdown_parent {
		background:url("../img/dropdown.png") no-repeat right 9px;
	}
	.megamenu_light .megamenu li .dropdown_flyout .dropdown_parent {
		background:url("../img/dropdown-b.png") no-repeat right 9px;
	}
	.megamenu_dark .megamenu li .dropdown_flyout .dropdown_parent:hover,
	.megamenu_dark .megamenu li .dropdown_flyout .dropdown_parent.active,
	.megamenu_light .megamenu li .dropdown_flyout .dropdown_parent:hover,
	.megamenu_light .megamenu li .dropdown_flyout .dropdown_parent.active {
		background-color:transparent;
	}


}


@media only screen and (max-width: 479px) {
	.megamenu_container {
	}
	.megamenu_container .megamenu > li > div > .responsive_sixths,
	.megamenu_container .megamenu > li > div > .responsive_fourths,
	.megamenu_container .megamenu > li > div > .responsive_thirds,
	.megamenu_container .megamenu > li > div > .responsive_halfs {
		width: 42%;
	}
    	.megamenu li.section > a{
	
    background:orange;	
	}

}




.logo-mhc{
position:relative; top:-20px;	
}
.logo-srl{
max-height:85px; width:auto;	
}
.logo-hfs{
padding-top:15px;
}
.logo-mcm{
max-height:75px; width:auto;
}






/* <left column menu styles */
.column-menu, .section-menu-column .menu-block-wrapper{
}
.section-menu-column{
	position:relative;
	box-shadow: 0px 2px 3px rgba(0,0,0,0.2);
background:white;
}
.section-menu-column .block-menu-block h2{
	color:#333;
	text-align:right;	
	padding:.125em .5em;
	font-weight: 200; font-style: normal;
	font-size:1.4em;
	
}
.section-menu-column .menu-block-wrapper ul{
		/*padding:20px 10px 20px 0;*/
		text-align:;
		margin:0;
		padding:10px 5px ;
}
.section-menu-column .menu-block-wrapper > ul > li{
	list-style-image:none;
	list-style-type:none;
	margin:0 0 1px 0;
	padding:0;
	line-height:1.2em;
	font-weight: normal; 
    font-style: normal;
	color:#666;
	border-left:10px solid #ccc;
}
	.about .section-menu-column .menu-block-wrapper > ul > li{border-left-color:<?php echo $se_about; ?>;}
	.support .section-menu-column .menu-block-wrapper > ul > li{border-left-color:<?php echo $se_support; ?>;}
	.visit .section-menu-column .menu-block-wrapper > ul > li{border-left-color:<?php echo $se_visit; ?>;}
	.research .section-menu-column .menu-block-wrapper > ul > li{border-left-color:<?php echo $se_research; ?>;}
	.explore .section-menu-column .menu-block-wrapper > ul > li{border-left-color:<?php echo $se_explore; ?>;}
	.shop .section-menu-column .menu-block-wrapper > ul > li{border-left-color:<?php echo $se_shop; ?>;}
	.schools .section-menu-column .menu-block-wrapper > ul > li{border-left-color:<?php echo $se_schools; ?>;}

.section-menu-column .menu-block-wrapper a{
	text-decoration:none;
}
.section-menu-column .menu-block-wrapper > ul > li > a{
	padding:.425em .5em;
	color:#555;
	border-bottom:#ccc dotted 1px;
	text-decoration:none;
	display:block;
}
	.about .section-menu-column .menu-block-wrapper > ul > li > a{border-bottom-color:<?php echo $se_about; ?>;}
	.support .section-menu-column .menu-block-wrapper > ul > li > a{border-bottom-color:<?php echo $se_support; ?>;}
	.visit .section-menu-column .menu-block-wrapper > ul > li > a{border-bottom-color:<?php echo $se_visit; ?>;}
	.research .section-menu-column .menu-block-wrapper > ul > li > a{border-bottom-color:<?php echo $se_research; ?>;}
	.explore .section-menu-column .menu-block-wrapper > ul > li > a{border-bottom-color:<?php echo $se_explore; ?>;}
	.shop .section-menu-column .menu-block-wrapper > ul > li > a{border-bottom-color:<?php echo $se_shop; ?>;}
	.schools .section-menu-column .menu-block-wrapper > ul > li > a{border-bottom-color:<?php echo $se_schools; ?>;}


.section-menu-column .menu-block-wrapper ul li a:hover{
background:#333;
color:#fff;
}

.section-menu-column .menu-block-wrapper ul:first-child > li.active-trail{
	}
.section-menu-column .menu-block-wrapper > ul > li.active-trail a {
	background:#666;	
	font-weight:bold;	
	color:#fff;
}
	.about .section-menu-column .menu-block-wrapper > ul > li.active-trail > a,
    .about .section-menu-column .menu-block-wrapper > ul > li.active > a
    {background:<?php echo $se_about; ?>;	}
	.support .section-menu-column .menu-block-wrapper > ul > li.active-trail > a,
    .support .section-menu-column .menu-block-wrapper > ul > li.active > a
    {background:<?php echo $se_support; ?>;	}
	.visit .section-menu-column .menu-block-wrapper > ul > li.active-trail > a,
    .visit .section-menu-column .menu-block-wrapper > ul > li.active > a
    {	background:<?php echo $se_visit; ?>;	}
	.research .section-menu-column .menu-block-wrapper > ul > li.active-trail > a,
    .research .section-menu-column .menu-block-wrapper > ul > li.active > a
    {background:<?php echo $se_research; ?>;	}
	.explore .section-menu-column .menu-block-wrapper > ul > li.active-trail > a,
    .explore .section-menu-column .menu-block-wrapper > ul > li.active > a
    {background:<?php echo $se_explore; ?>;	}
	.shop .section-menu-column .menu-block-wrapper > ul > li.active-trail > a,
    .shop .section-menu-column .menu-block-wrapper > ul > li.active > a
    {background:<?php echo $se_shop; ?>;	}
	.schools .section-menu-column .menu-block-wrapper > ul > li.active-trail > a,
    .schools .section-menu-column .menu-block-wrapper > ul > li.active > a
    {background:<?php echo $se_schools; ?>;	}

.section-menu-column .menu-block-wrapper h3{
	background:#ccc;
	padding:.425em .5em;
	color:#fff;
	text-decoration:none;
	display:block;
    font-size:14px;
    margin:10px 5px -10px 5px
}
	.about .section-menu-column .menu-block-wrapper h3{background:<?php echo $se_about; ?>;}
	.support .section-menu-column .menu-block-wrapper h3{background:<?php echo $se_support; ?>;}
	.visit .section-menu-column .menu-block-wrapper h3{background:<?php echo $se_visit; ?>;}
	.research .section-menu-column .menu-block-wrapper h3{background:<?php echo $se_research; ?>;}
	.explore .section-menu-column .menu-block-wrapper h3{background:<?php echo $se_explore; ?>;}
	.shop .section-menu-column .menu-block-wrapper h3{background:<?php echo $se_shop; ?>;}
	.schools .section-menu-column .menu-block-wrapper h3{background:<?php echo $se_schools; ?>;}


.section-menu-column .menu-block-wrapper ul > li.active-trail > ul a, 
.section-menu-column .menu-block-wrapper ul > li.active > ul a,
.section-menu-column .menu-block-wrapper ul > li > ul a{
	background-color:transparent;
	color:#666;
	text-align:left;
	font-weight:normal;
}

.section-menu-column .menu-block-wrapper ul > li > ul {
	margin-left:0;
	padding:10px 0 0 10px;
    border-bottom:1px dotted #ccc;
}
	.about .section-menu-column .menu-block-wrapper ul > li > ul { border-bottom-color:<?php echo $se_about; ?>;}
	.support .section-menu-column .menu-block-wrapper ul > li > ul { border-bottom-color:<?php echo $se_support; ?>;}
	.visit .section-menu-column .menu-block-wrapper ul > li > ul { border-bottom-color:<?php echo $se_visit; ?>;}
	.research .section-menu-column .menu-block-wrapper ul > li > ul { border-bottom-color:<?php echo $se_research; ?>;}
	.explore .section-menu-column .menu-block-wrapper ul > li > ul { border-bottom-color:<?php echo $se_explore; ?>;}
	.shop .section-menu-column .menu-block-wrapper ul > li > ul { border-bottom-color:<?php echo $se_shop; ?>;}
	.schools .section-menu-column .menu-block-wrapper ul > li > ul { border-bottom-color:<?php echo $se_schools; ?>;}
 .section-menu-column .menu-block-wrapper ul > li > ul ul {
    border-bottom:0;
}       

.section-menu-column .menu-block-wrapper ul > li.active-trail > ul li,
.section-menu-column .menu-block-wrapper ul > li.active > ul li,
.section-menu-column .menu-block-wrapper ul > li > ul li{
	font-size:12px;
	list-style-type:none;
	list-style-image:none;
	padding:0 0 1em 0;
	margin:0;
	line-height:1.1em;
}
.section-menu-column .menu-block-wrapper ul > li.active-trail > ul li a,
.section-menu-column .menu-block-wrapper ul > li.active > ul li a,
.section-menu-column .menu-block-wrapper ul > li > ul li a{
	padding:0;
}

.section-menu-column .menu-block-wrapper ul > li.active-trail > ul a.active,
.section-menu-column .menu-block-wrapper ul > li.active > ul a.active,
.section-menu-column .menu-block-wrapper ul > li.active > ul a.active{
	font-weight:bold;
	text-transform:uppercase;
	}

.menu-feature{
	display:block;
    
}
.search-icon{
position:relative; 
margin:-10px 0 0 0;
top:10px;	
}
