<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 800px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	height: 90px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333333 url(<?= elgg_get_simplecache_url("toptoolbar_background.gif"); ?>) repeat-x top left;
	border-bottom: 1px solid #000000;
	padding: 0 10px;
	position: relative;
	height: 24px;
	z-index: 9000;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	padding: 0 10px;
	position: relative;
	background: #4690D6 url(<?= elgg_get_simplecache_url("header_shadow.png"); ?>) repeat-x bottom left;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	padding: 0 10px;
}

.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background-color: #FFF;
}
.elgg-layout-two-sidebar {
	background: transparent url(<?= elgg_get_simplecache_url("two_sidebar_background.gif"); ?>) repeat-y right top;
}
.elgg-layout-widgets > .elgg-widgets {
	float: right;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 10px;
	float: right;
	width: 210px;
	margin: 0 0 0 10px;
        background-color: #FFF;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
        background-color: #FFF;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 25px;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	color: #999;
	padding: 0 10px;
	position: relative;
}

.elgg-page-footer a:hover {
	color: #666;
}
@media (max-width: 820px) {
	.elgg-page-default {
		min-width: 0;
	}
	.elgg-page-body {
		padding: 0;
	}
	.elgg-main {
        padding: 12px 20px 10px;
		
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
    }
    .elgg-layout-one-sidebar .elgg-main,
	.elgg-layout-two-sidebar .elgg-main {
        width: 100%;
    }
	.elgg-sidebar {
		border-left: none;
		border-top: 1px solid #DCDCDC;
		border-bottom: 1px solid #DCDCDC;
		background-color: #FFF;
		width: 100%;
		float: left;
		padding: 27px 20px 20px;
		box-shadow: 0 3px 6px rgba(0, 0, 0, 0.05) inset;

		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.elgg-sidebar-alt {
		display: none;
	}
	.elgg-page-default .elgg-page-footer > .elgg-inner {
		border-top: none;
	}
	.elgg-menu-footer {
		float: none;
		text-align: center;
	}
	.elgg-menu-page,
	.elgg-sidebar .elgg-menu-owner-block,
	.elgg-menu-groups-my-status {
		border-bottom: 1px solid #DCDCDC;
	}
	.elgg-menu-page a,
	.elgg-sidebar .elgg-menu-owner-block li a,
	.elgg-menu-groups-my-status li a {
		border-color: #DCDCDC;
		border-style: solid;
		border-width: 1px 1px 0 1px;
		margin: 0;
		padding: 10px;
		color: white;
border-color: #5e72e4;
background-color: #5e72e4;
box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
margin-bottom: 8px;
	}
	.elgg-menu-page a:hover,
	.elgg-sidebar .elgg-menu-owner-block li a:hover,
	.elgg-menu-groups-my-status li a:hover,
	.elgg-menu-page li.elgg-state-selected > a,
	.elgg-sidebar .elgg-menu-owner-block li.elgg-state-selected > a,
	.elgg-menu-groups-my-status li.elgg-state-selected > a {
            color: #FFF;
		border-color: #5e72e4;
background-color: #5e72e4;
box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
margin-bottom: 8px
	}
	.elgg-river-item input[type=text] {
		width: 100%;
	}
	.elgg-river-item input[type=submit] {
		margin: 5px 0 0 0;
	}
	/***** CUSTOM INDEX ******/
	.elgg-col-1of2 {
		float: none;
		width: 100%;
	}
	.prl {
		padding-right: 0;
	}
	/***** WIDGETS ******/
	.elgg-col-1of3,
	.elgg-col-2of3,
	#elgg-widget-col-1,
	#elgg-widget-col-2,
	#elgg-widget-col-3 {
		float: none;
		min-height: 0 !important;
		width: 100%;
	}
	
	.elgg-module-widget {
		margin: 0 0 15px;
	}
	.custom-index-col1 > .elgg-inner,
	.custom-index-col2 > .elgg-inner {
		padding: 0;
	}
	#dashboard-info {
		margin: 0 0 15px;
	}
}
@media (min-width: 767px) {
	.elgg-nav-collapse {
		display: block !important;
	}
}
@media (max-width: 766px) {
	.elgg-page-header > .elgg-inner h1 {
		padding-top: 10px;
	}
	.elgg-heading-site, .elgg-heading-site:hover {
		font-size: 1.6em;
	}
	.elgg-button-nav {
		cursor: pointer;
		display: block;
	}
	.elgg-nav-collapse {
		clear: both;
		display: none;
		width: 100%;
	}
	#login-dropdown a {
		padding: 10px 18px;
	}
	.elgg-menu-site {
		float: none;
	}
	.elgg-menu-site > li > ul {
		position: static;
		display: block;
		left: 0;
		margin-left: 0;
		border: none;
		box-shadow: none;
		background: none;
	}
	.elgg-more,
	.elgg-menu-site-more li,
	.elgg-menu-site > li > ul {
		width: auto;
	}
	.elgg-menu-site ul li {
		float: none;
		margin: 0;
	}
	.elgg-more > a {
		border-bottom: 1px solid #294E6B;
	}
	.elgg-menu-site > li {
		border-top: 1px solid #294E6B;
		clear: both;
		float: none;
		margin: 0;
	}
	.elgg-menu-site > li:first-child {
		border-top: none;
	}
	.elgg-menu-site > li > a {
		padding: 10px 18px;
	}
	.elgg-menu-site-more > li > a {
		color: #FFF;
		background: none;
		padding: 10px 18px 10px 30px;
	}
	.elgg-menu-site-more > li:last-child > a,
	.elgg-menu-site-more > li:last-child > a:hover {
		border-radius: 0;
	}
	.elgg-menu-site-more > li.elgg-state-selected > a,
	.elgg-menu-site-more > li > a:hover {
		background-color: #60B8F7;
		color: #FFF;
	}
}

@media (max-width: 600px) {
	.groups-profile-fields {
		float: left;
		padding-left: 0;
	}
	#profile-owner-block {
		border-right: none;
		width: auto;
	}
	#profile-details {
		display: block;
		float: left;
	}
	#groups-tools > li {
		width: 100%;
		margin-bottom: 20px;
	}
	#groups-tools > li:nth-child(odd) {
		margin-right: 0;
	}
	#groups-tools > li:last-child {
		margin-bottom: 0;
	}
	.elgg-menu-entity, .elgg-menu-annotation {
		margin-left: 0;
	}
	.elgg-menu-entity > li, .elgg-menu-annotation > li {
		margin-left: 0;
		margin-right: 10px;
	}
	.elgg-subtext {
		float: left;
		margin-right: 15px;
	}
}

.center {
    
    transform: translateX(-0%) !important;
}