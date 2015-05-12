<?php header("Content-type: text/css"); ?>
@import url('basic.css');
<?php 
$se_visit = "#c41230";
$se_research = "#adc687";
$se_explore = "#105e55";
$se_schools = "#00a5b7";
$se_about = "#eeb111";
$se_support = "#003479";
$se_shop = "#f58025";
?>
/* This file will hold styles for the mobile version of your website (mobile first). */
/* This also can include ANY global CSS that applies site-wide. Unless overwritten by a more specific style rule, CSS declarations in global.css will apply site-wide. */
body {
	background: #fff;
	
}
#visit-map{
padding-bottom: 75%; position:relative;
}
.node-feature.twitter{
	display:none;
}

.homepage #zone-content{
	position:relative;
    z-index:10;
    margin-top:20px;
}

.line{
display:block;
border-bottom:2px solid #666;
margin:-20px 0 25px 0;
}
    .visit .line{border-bottom-color:<?php print $se_visit; ?>;}
    .research .line{border-bottom-color:<?php print $se_research; ?>;}
    .explore .line{border-bottom-color:<?php print $se_explore; ?>;}
    .schools .line{border-bottom-color:<?php print $se_schools; ?>;}
    .about .line{border-bottom-color:<?php print $se_about; ?>;}
    .support .line{border-bottom-color:<?php print $se_support; ?>;}
    .shop .line{border-bottom-color-color:<?php print $se_shop; ?>;}
/* Grid modifications */
.grid-50{
	width:98%;
	float:left;
	display:inline;
	}
    
.grid-50.alpha{
	margin-right:1%;
}
.grid-50.omega{
	margin-left:1%;
}
.grid-24 {
	width: 180px;
	float: left;
	padding: 0;
	background: red;
	height: 20px;
}
.grid-24-4span {
	margin: 0 0 0 10px;
	width: 980px;
	float: left;
	padding: 0;
	background: pink;
	height: 50px;
}
.grid-20percent {
	width: 20%;
	float: left;
	padding: 0;
	background: red;
	height: 20px;
}
.grid-33{
	float: left;
	padding: 0;
	width:98%;	
	margin:0 10px;
}
	.grid-33 img{
	}
.grid-80percent {
	width: 80%;
	float: left;
	padding: 0;
	background: blue;
	height: 20px;
}


#global-wrapper {
}
#zone-content{
/*	box-shadow: 1px 1px 3px rgba(0,0,0,0.2);*/
	padding: 1em 0em;

}
.homepage #zone-content{
	padding:0;
    background:transparent;
}
.homepage .breadcrumb{
	display:none;
}
.visit .section-menu-column{
display:none;
}
.top-tier-sidenav {
	margin:20px 10px;
	text-align:center;
}
.top-tier-sidenav a{
}

.top-tier-sidenav img{
	max-width: 100%;
	padding: 0 0 20px 0;
}
.top-tier-sidenav .sn-logo-srl{
	max-width:85%;
}
.top-tier-sidenav .sn-logo-hfs{
	max-width:90%;
}
.top-tier-sidenav .sn-logo-mcm{
	height: auto;
	max-width: 40%;
}


/*body.homepage, body.news{*/
body{
	background:#f1f1f1;	
}
.homepage #zone-content article{
}

/* Branding Region Styles */
#zone-branding-wrapper {
	/*background:#323e48;	*/
	background: #a39e98;
}
.region-branding-inner {
	position: relative;
}
#masthead {
	width: 100%;
	margin: auto;
	position: relative;
}
#mhs-logo{
	padding-left:20px;	
}

.button {
	padding: .5em;
	background: #323e48;
	border: 3px solid #666;
	border-radius: .5em;
	color: #fff;
}

/* Rotor HP Block */
.rotating-item-wrapper{
	display:block;	
}
.superhero #zone-branding-wrapper, #zone-branding, #region-branding{
	width:100%;
	margin:auto;
}
.superhero #region-branding{
	padding-bottom:42.865%;	
	background:black;
	box-shadow: 1px 1px 3px rgba(0,0,0,0.2);

}
.rotating-item {
	visibility: hidden;
	opacity: 0.0;
	position: absolute;
	top: 0;
	left: 0;
	max-width:100%;
	height:auto;
	clear:both;
}
.rotating-item .call-to-action{
	z-index:500;
	position:relative;
	top:50px;
	color:#fff;
}
.rotating-item-wrapper .rotating-item, .rotating-item-wrapper img{
	width:100%;
	height:auto;	
	position:absolute;
	top:0;
	left:0;
}
.rotating-item .call-to-action h2{
	padding:.25em 0;
	margin:0;
	font-size: 1.5em;
	line-height: 1em;
	text-shadow: 2px 2px 5px rgba(0,0,0,.75);
}
.rotating-item .call-to-action a  {
	color:#fff;
	text-decoration:none;
}
.rotating-item .call-to-action a p {
	color:;
    padding-left:5px;
}
.rotating-item .call-to-action a:hover p {
	text-decoration:underline;
}

.rotating-item .call-to-action p:hover{
	text-decoration:underline;
}
.rotating-item .call-to-action p{
	font-size:1.2em;
	padding:0;
	margin:0;
	}



/* Section Main Headers */
.section-main{
	background:#ccc;
	height:100px;
	color:#666;	
	height:100px;
}

.section-main .section-title{
	display:inline-block;
	border-right:1px solid #999;
	padding-right:20px;
}

.section-main .section-page-title{
	padding-left:20px;
	display:inline-block;
}

/* Sites and Museums HP Block */
#map img {
	max-width: 100%;
	height: auto;
}
.location-name{
	color:#990000;
    font-style:italic;
}
.events-list{
	border-top:2px solid #990000;
}
.events-list table{
font-size:.9em;
	border:0;
}
.events-list td{
  vertical-align:text-top;
}
.events-list tr:hover td, .events-list tr.even:hover td.active, .events-list tr.odd:hover td.active{
	background-color:transparent;
}

.events-list a:link{
	text-decoration:none;
}

.events-list a:hover{
	text-decoration:underline;
}
/* Node Features */
.node-feature, .block-content-feature, article #article-wrapper {
	box-shadow: 0 2px 4px rgba(0,0,0,0.2);
	background: #fff;
	padding: 15px 15px;
	margin-bottom: 2em;
	overflow: hidden;
}
.node-feature .left{
	float:none;
}
.node-feature h3 a, .node-feature a h3, .node-feature h2 a, .node-feature a h2 {
	text-decoration:none;
}

.node-feature h3 a:hover, .node-feature a h3:hover, .node-feature h2 a:hover, .node-feature a:hover h2 {
	text-decoration:underline!important;
}
    .section-homepage article #article-wrapper{
        box-shadow: 0 0 0 0;
        background: transparent;
        padding: 0;
        margin-bottom: 0;
        overflow: hidden;
    }
	.resource-grid .node-feature img{
    border:1px solid #ccc;
    padding:0;
    margin:0 10px 0px 0;
    }
    .resource-grid p{
    	overflow:auto;
    }
    
    .resource-grid .views-row-odd.grid-50{
        margin-right:20px;
    }
.node-feature {
	position:relative;
}
.homepage .node-feature h2{

	border-left:0px solid #ccc;	
	margin: 0 0 10px 0;
	background:rgba(255,255,255,.90);
	color: #123123;
	border-bottom: 1px solid #cccccc;
	padding: 5px!important;
	text-transform: uppercase;   
    font-size:.9em; 
}
.homepage article #article-wrapper{
	padding:0;
    box-shadow:0 0 0 0;
    background:transparent;
}

#article-wrapper img{
	max-width:100%;
	height:auto;
}
#article-wrapper #map-canvas img{
	width:auto;
    height:auto;
    max-width:inherit;
}


.block-content-feature {
	padding: 0em 2em 1em 2em;
}

.homepage .node-feature img{
	max-width:100%;
	height:auto;
	border:0;
	padding:0;
}


.node-feature p {
	color: #000;
}
.node-feature h3{
	font-size:22px;
    line-height:1.2em;
    padding:10px 0 5px 0;
}
.node-feature img {
	border: 1px solid #ccc;
	padding: .5em;
	background: #fff;
}
.node-feature .left-image {
	margin: 0 2em 2em 0;
}
.node-feature .right-image {
	margin: 0 0 2em 2em;
}

/* <use to create wells> */
.well{
	border:1px solid #ccc;
	padding:13px;
	float:left;
	margin:0 20px 20px 0;;
	width:100%;
	position:relative;
}
.well p{
	margin-bottom:0;
}
.feature {
	position:relative;
    margin-bottom:20px;

}
.feature h2{
	position:absolute;
	bottom:10px;
	left:0px;
	border-left:13px solid #ccc;	
	margin:0 0 0 -1px;
	padding:0 5px!important;
	background:#fff;
	font-size:1.4em;
}
.well a{
	text-decoration:none;	
}
.well a:hover{
	text-decoration:underline;	
}
.well h2, .feature h2{
	position:absolute;
	bottom:30px;
	left:0px;
	border-left:13px solid #ccc;	
	margin:0 0 0 -1px;
	padding:0 5px!important;
	background:#fff;
	font-size:1.4em;
}

	.visit .well h2,
    .visit .feature h2,
    	.visit.node-feature h2{border-left-color:<?php echo $se_visit; ?>;}
	.research .well h2,
    .research .feature h2,
    	.research.node-feature h2 {border-left-color:<?php echo $se_research; ?>;}
	.explore .well h2,
    .explore .feature h2,
    	.explore.node-feature h2{border-left-color:<?php echo $se_explore; ?>;}
	.schools.well h2,
    .schools .feature h2,
    	.schools.node-feature h2{border-left-color:<?php echo $se_schools; ?>;}
	.about.well h2,
    .about .feature h2,
    	.about.node-feature h2{border-left-color:<?php echo $se_about; ?>;}
	.support .well h2,
    .support .feature h2,
    	.support.node-feature h2{border-left-color:<?php echo $se_support; ?>;}
	.shop .well h2, 
    .shop .feature h2, 
    	.shop.node-feature h2{border-left-color:<?php echo $se_shop; ?>;}
    
.well.well-1 {
	
}
.well.well-2, .well.well-4, .well.well-6 {
	margin-right:0;
}

/* </use to create wells > */





/* Video CSS */
.video-container, .field-name-field-ft-main-video, .map-container {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 30px;
	height: 0;
	overflow: hidden;
}
.video-container iframe, .map-container .gmap-control, .field-name-field-ft-main-video iframe, .video-container object, .field-name-field-ft-main-video object, .video-container embed, .field-name-field-ft-main-video embed {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.map-container .gmap-control{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%!important;
	height: 100%!important;
}


/* Section Hero */
.section-hero{
	display:block;
	background:#ccc;
	border:1px solid #666;
	height:350px;margin-bottom:20px;	
}
.temp-image{
	width:300px;
	height:220px;
	background:gray;	

}
/*customized copy formatts */
.copy-intro{
	color:#a39e98;
	line-height:1.5em;	
}
.copy-intro.about{
	line-height:1.35em;	
	padding-top:10px;	
}

/* Custom Pager styles */
.pager{
	background:#fff;	
}

/* Custom List Columns */
.subpage h2{
}
 ul.double,  ul.triple, ul.quad{
	margin:0 0 2em 0;
	padding:0;
}
ul.double, ul.triple{
}




.double li, .triple li, .quad li{
	float:left!important;
	padding:0;
	margin:0;
	line-height:1.75em;
}
.double li	{ width:100%;}
.triple li	{ width:25%; }
.quad li	{ width:25%; }
.six li		{ width:16.666%; }


/* Department Contact formatting */
.field-collection-item-field-department-contact{
	clear:both;
    border-bottom:1px solid #ccc;
    margin-bottom:10px;
}
.field-collection-item-field-department-contact .field{
	display:inline-block;
	padding-right:20px;
}
.jump-menu .views-row{
	float:left;
padding: 0 5px 0 0;
}
.jump-menu a{
}
.jump-menu span:after {
    content: " |";
}
.jump-menu .views-row-last span:after {
    content: "";
}
.jump-menu .views-row-last a{
	padding:0;
    margin:0;
    border:0;
}



.field-name-field-department-contact{
	border-bottom:1px solid #ccc;
	padding:0 0 10px 0;	
	margin:0 0 10px 0;
}
.field-name-field-department-contact .field{
	display:inline-block;
	padding-right:20px;
}
.field-collection-item-field-staff-contact{
	padding:0 1% 20px 0 ;
}
.field-collection-item-field-staff-contact .field-label{
	font-weight:normal;	
}
.field-collection-item-field-staff-contact .field-name-field-name-full{
	padding-right:10px;
	font-weight:bold;	
}
.field-collection-item-field-staff-contact .field-name-field-name-full, .field-collection-item-field-staff-contact .field-name-field-name-title{
display:inline-block;	
}
.even .field-collection-item-field-staff-contact{
clear:both;
}
.field-collection-item-field-staff-contact .field-name-field-email, .field-collection-item-field-staff-contact .field-name-field-phone, .field-collection-item-field-staff-contact .field-name-field-description {
	font-size:.9em;	
}






.block-sharethis{
	margin-top:20px;
}





