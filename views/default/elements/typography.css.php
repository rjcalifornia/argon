<?php
/**
 * CSS typography
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/

/* ***************************************
	Typography
*************************************** */


.ni-elgg-bookmarks::before {
    content: "\ea14";
}

.ni-elgg-activity::before {
    content: "\ea50";
}

.ni-elgg-blog::before {
    content: "\ea4f";
}

.ni-elgg-thewire::before {
    content: "\ea4b";
}

.ni-elgg-dashboard::before {
    content: "\ea08";
}

.ni-elgg-file::before {
    content: "\ea09";
}

.ni-elgg-groups::before {
    content: "\ea15";
}

.ni-elgg-members::before {
    content: "\ea0b";
}

.ni-elgg-pages::before {
    content: "\ea60";
}

body {
	font-size: 80%;
	line-height: 1.4em;
	font-family: "Lucida Grande", Arial, Tahoma, Verdana, sans-serif;
}

a {
	color: #4690D6;
}

a:hover,
a:focus,
a.selected { <?php //@todo remove .selected ?>
	color: #555555;
	text-decoration: underline;
}

p {
	margin-bottom: 15px;
}

p:last-child {
	margin-bottom: 0;
}

pre, code {
	font-family: Monaco, "Courier New", Courier, monospace;
	font-size: 12px;

	background:#EBF5FF;
	color:#000000;
	overflow:auto;

	overflow-x: auto; /* Use horizontal scroller if needed; for Firefox 2, not needed in Firefox 3 */

	white-space: pre-wrap;
	word-wrap: break-word; /* IE 5.5-7 */

}

pre {
	padding:3px 15px;
	margin:0px 0 15px 0;
	line-height:1.3em;
}

code {
	padding:2px 3px;
}

.elgg-monospace {
	font-family: Monaco, "Courier New", Courier, monospace;
}

blockquote {
	line-height: 1.3em;
	padding:3px 15px;
	margin:0px 0 15px 0;
	background:#EBF5FF;
	border:none;
	border-radius: 4px;
}

h1, h2, h3, h4, h5, h6 {
	font-weight: bold;
	color: #0054A7;
}

h1 { font-size: 1.8em; }
h2 { font-size: 1.5em; line-height: 1.1em; padding-bottom:5px}
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

.elgg-heading-site,
.elgg-heading-site:hover,
.elgg-heading-site:focus {
	font-size: 2em;
	line-height: 1.4em;
	color: white;
	font-style: italic;
	font-family: Georgia, times, serif;
	text-shadow: 1px 2px 4px #333;
	text-decoration: none;
}
.elgg-heading-site:hover,
.elgg-heading-site:focus {
	text-shadow: 1px 2px 8px #000;
}

.elgg-heading-main {
	margin-right: 10px;
}
.elgg-heading-basic {
	color: #0054A7;
	font-size: 1.2em;
	font-weight: bold;
}

.elgg-subtext {
	color: #666666;
	font-size: 85%;
	line-height: 1.2em;
	font-style: italic;
}

.elgg-subtext time {
	color: #666;
}

.elgg-text-help {
	display: block;
	font-size: 85%;
	font-style: italic;
}

.elgg-quiet {
	color: #666;
}

.elgg-loud {
	color: #0054A7;
}

/* ***************************************
	USER INPUT DISPLAY RESET
*************************************** */
.elgg-output {
	margin-top: 10px;
}

.elgg-output dt { font-weight: bold }
.elgg-output dd { margin: 0 0 1em 1em }

.elgg-output ul, .elgg-output ol {
	margin: 0 1.5em 1.5em 0;
	padding-left: 1.5em;
}
.elgg-output ul {
	list-style-type: disc;
}
.elgg-output ol {
	list-style-type: decimal;
	list-style-position: inside;
	padding-left: .4em;
}
.elgg-output table {
	border: 1px solid #ccc;
}
.elgg-output table td {
	border: 1px solid #ccc;
	padding: 3px 5px;
}
.elgg-output img {
	max-width: 100%;
	height: auto;
}
