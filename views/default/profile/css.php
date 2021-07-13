<?php
/**
 * Elgg Profile CSS
 * 
 * @package Profile
 */
?>
/* <style> /**/
/* ***************************************
	Profile
*************************************** */
.profile {
	float: left;
	margin-bottom: 15px;
	flex-direction: column;
min-width: 0;
word-wrap: break-word;
border: 1px solid rgba(0,0,0,.05);
border-radius: .375rem;
background: linear-gradient(87deg,#172b4d 0,#1a174d 100%) !important;

background-clip: border-box;
	
	position: relative;
	margin-bottom: 30px;
border: 0;
box-shadow: 0 0 2rem 0 rgba(136,152,170,.15);
}
.profile .elgg-inner {
 
	 
	margin: 0 5px;
    background: linear-gradient(87deg,#172b4d 0,#1a174d 100%) !important;

}
.p-name{
	color: #fff !important;
}
.wire-status{
    position: relative;
transition: all .15s ease;
letter-spacing: .025em;
text-transform: none;
will-change: transform;
border-color: #fff;
background-color: #fff;
box-shadow: 0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08);
color: #5e72e4;
}
 .wire-status .elgg-body{
	color: #5e72e4 !important;
}
.wire-status .elgg-subtext time{
	color: #5e72e4 !important;
}
.wire-status .elgg-subtext {
	color: #5e72e4 !important;
}

.elgg-output p{
    font-size: 1rem;
font-weight: 300;
line-height: 1.7;
color: #f5f6f5 ;
}

.blog-post p	{
	color: #525f7f;
}

#profile-details {
	padding: 15px;
}
/*** ownerblock ***/
#profile-owner-block {
	width: 200px;
	float: left;
	background: linear-gradient(87deg,#172b4d 0,#1a174d 100%) !important;

	padding: 15px;
}
#profile-owner-block .large {
	margin-bottom: 10px;
	background-color: #f5f6fb;
}
#profile-owner-block a.elgg-button-action {
	margin-bottom: 4px;
	display: table;
}
.profile-content-menu a {
	display: block;
	border-radius: 8px;	
	background-color: white;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
}
.profile-content-menu a:hover {
	background: #0054A7;
	color: white;
	text-decoration: none;
}
.profile-admin-menu {
	display: none;
}
.profile-admin-menu-wrapper a {
	display: block;
	border-radius: 8px;	
	background-color: white;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
}
.profile-admin-menu-wrapper {
	background-color: white;
	border-radius: 8px;
}
.profile-admin-menu-wrapper li a {
	background-color: white;
	color: red;
	margin-bottom: 0;
}
.profile-admin-menu-wrapper a:hover {
	color: black;
}
/*** profile details ***/
#profile-details .odd {
	background-color: #f4f4f4;
	border-radius: 4px;	
	margin: 0 0 7px;
	padding: 2px 4px;
}
#profile-details .even {
	background-color: #f5f6fb;
	border-radius: 4px;	
	margin: 0 0 7px;
	padding: 2px 4px;
}
.profile-aboutme-title {
	background-color:#f4f4f4;
	border-radius: 4px;	
	margin: 0;
	padding: 2px 4px;
}
.profile-aboutme-contents {
	padding: 2px 0 0 3px;
}
.card-body{
	background-color: #f5f6fb !important;
}
.profile-banned-user {
	margin: 10px 0;
	padding: 20px;
	color: #B94A48;
	background-color: #F8E8E8;
	border: 1px solid #E5B7B5;
	border-radius: 5px;
}
.profile-banned-user h4 {
	color: #B94A48;
}
