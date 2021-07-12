<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/

/* **************************
	BUTTONS
************************** */

/* Base */
.elgg-button {
	font-size: .875rem;
    font-weight: 600;
    line-height: 1.5;

    display: inline-block;

    padding: .625rem 1.25rem;

    cursor: pointer;
    -webkit-user-select: none;
        -ms-user-select: none;
            user-select: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out; 
    text-align: center;
    vertical-align: middle;

    color: #525f7f;
    border: 1px solid transparent;
    border-radius: .25rem;
    background-color: transparent;
	width: auto;
}
a.elgg-button {
	padding: 3px 6px;
}

.elgg-button:hover,
.elgg-button:focus {
	background: #eee;
}

/* Submit: This button should convey, "you're about to take some definitive action" */
.elgg-button-submit {
	color: #fff;
border-color: #11cdef;
background-color: #11cdef;
box-shadow: 0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08);
}

.elgg-button-submit:hover,
.elgg-button-submit:focus {
	background-color:#0da5c0;
	border-color:#0da5c0;
	box-shadow:0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08),0 0 0 0 rgba(17,205,239,.5)
}

/* Cancel: This button should convey a negative but easily reversible action (e.g., turning off a plugin) */
.elgg-button-cancel {
	color: #fff;
border-color: #fb6340;
background-color: #fb6340;
box-shadow: 0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08);
}
.elgg-button-cancel:hover,
.elgg-button-cancel:focus {
	color: #fff;
border-color: #ec0c38;
background-color: #ec0c38;
box-shadow: 0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08);
}

/* Action: This button should convey a normal, inconsequential action, such as clicking a link */
.elgg-button-action {
	font-size: .875rem;
position: relative;
transition: all .15s ease;
letter-spacing: .025em;
text-transform: none; 

color: #212529;
border-color: #f7fafc;
background-color: #f7fafc;
box-shadow: 0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08);
}

.elgg-button-action:hover,
.elgg-button-action:focus {
	background: #d2e3ee;
	color: #111;
	text-decoration: none;
	border-color: #f7fafc;
}

/* Delete: This button should convey "be careful before you click me" */
.elgg-button-delete {
	
	color:#fff;border-color:#f5365c;background-color:#f5365c;box-shadow:0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08)
}
.elgg-button-delete:hover,
.elgg-button-delete:focus {
	color: #999;
	background-color: #333;
	background-position: left 10px;
	text-decoration: none;
}

.elgg-button-dropdown {
	padding:3px 6px;
	text-decoration:none;
	display:block;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color: white;
	background-color: transparent;
	border:1px solid #71B9F7;
	border-radius:4px;
	box-shadow: 0 0 0;
}

.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}

.elgg-button-dropdown:hover {
	background-color:#71B9F7;
	text-decoration:none;
}
.elgg-button-dropdown:focus {
	text-decoration: none;
}
.elgg-button-dropdown.elgg-state-active {
	background: #ccc;
	outline: none;
	color: #333;
	border:1px solid #ccc;
	border-radius:4px 4px 0 0;
}

.elgg-button:disabled,
.elgg-button.elgg-state-disabled {
	background: #999;
	border-color: #999;
	color: #666;
	text-shadow: 0 0;
	text-decoration: none;
	cursor: default;
}
