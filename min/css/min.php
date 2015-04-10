<?php if(extension_loaded("zlib")){ob_start("ob_gzhandler");} header("Content-type: text/css"); ?>/*
Theme Name: Mia
Theme URL: http://www.pcazorla.com
Description: Theme for pcazorla.com
Author: Pablo Cazorla
Version: 1.0
Tags: pablo, cazorla, illustration, webdesign
*/
/* RESET */html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul,menu{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}
/* NORMALIZE */article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,video{display:inline-block}audio:not([controls]){display:none;height:0}[hidden],template{display:none}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a{background:transparent}a:focus{outline:thin dotted}a:active,a:hover{outline:0}h1{font-size:2em;margin:0.67em 0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}mark{background:#ff0;color:#000}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em}pre{white-space:pre-wrap}q{quotes:"\201C" "\201D" "\2018" "\2019"}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:0}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}button,input{line-height:normal}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}table{border-collapse:collapse;border-spacing:0}*:focus {outline: 0}/*RESET*/html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul,menu{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}*, *:before, *:after {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
/* Clearfix */
.clearfix:before,.row:before,
.clearfix:after,.row:after{content:"";display:table}
.clearfix:after,.row:after{clear:both}
.clearfix,.row{zoom:1}

/* BASICS **********************************************************************************************************/
body{color:#333;min-width: 280px;overflow-x: hidden;overflow-y: scroll;background-color: blue}

body,input,textarea{font: 18px/1.5em 'Raleway', sans-serif;}

a,a:link,a:visited{color:#00a2d7;text-decoration: none;}

a:hover{text-decoration: underline;}
a:active,a:focus {outline: none;}

h1{font-size: 60px;margin-bottom: 16px;}
h2{font-size: 44px}
h3{font-size: 32px}
h4{font-size: 24px}
h5{font-size: 16px}
h6{font-size: 10px}


h4,h5,h6{font-weight: bold;}
h2,h3,h4,h5,h6{padding-top: 15px;margin-bottom: 15px;}
h1,h2,h3,h4,h5,h6{line-height: 1.5em;font-weight: 300;
}

p{margin-bottom: 24px;}

strong,b{font-weight: bold;}
i,em{font-style: italic;}
code{font-family: monospace;font-weight: bold;display: inline-block;background-color:#FFF;border:solid 1px #BBB;padding: 0 6px; border-radius: 3px}
.align-left,.alignleft{text-align: left}
.align-center,.aligncenter{text-align: center}
.align-right,.alignright{text-align: right}
.float-left,.floatleft{float: left}
.float-none,.floatnone{float:none}
.float-right,.floatright{float: right}
hr{height:0;border:none;border-top:dotted 1px #AAA;background-color: transparent;}
hr.hr-grey{
	margin-top: 45px;
	height:4px;border:none;background-color: #DDD;
}
.small{font-size: 12px;line-height: 1.3em}
.smaller{font-size: 10px;line-height: 1.3em}

/* FORM */
form{display: block;margin-top: 20px}
fieldset{margin:0 0 18px;}
input[type=text],input[type=email],input[type=search],input[type=submit],textarea{width:100%;margin:0;border: none;padding:0 15px;line-height: 46px;resize: none;box-shadow:none;background-color: #E2E2E2;border:solid 1px #E2E2E2;}
input[type=text],input[type=email],input[type=search],input[type=submit]{height: 46px;}

input[disabled],textarea[disabled]{opacity:.6;}
fieldset.error input,
fieldset.error textarea{border:solid 1px #D00;}
fieldset.error .errorMessage{color:#D00;font-size: 14px;line-height: 20px;display: block !important}
::-webkit-input-placeholder {opacity:1;color: #999}
:-moz-placeholder {opacity:1;color: #999}
::-moz-placeholder {opacity:1;color: #999}
:-ms-input-placeholder {opacity:1;color: #999}

.invisible{
	position:fixed;height:0;width:0;visibility: hidden;
}
.cite{
	font-size: 24px;line-height: 1.5em;text-align: center;
	color: #888;
}

/* BUTTON */
.button {display: inline-block;
	padding:13px 25px;
	font-size: 18px;line-height: 1.3em;
	text-align: center;
	background-color: #dd4b38;
	color: #FFF !important;margin:5px;
	transition:opacity .3s;
	-webkit-transition:opacity .3s;
	-moz-transition:opacity .3s;
	cursor: pointer;
	border-radius: 3px;
	border:none;
}
.button:hover{text-decoration: none;opacity: .7}
.button.smaller{padding:6px 15px;font-size: 10px;line-height: 1.3em;}
.button.small{padding:10px 18px;font-size: 12px;line-height: 1.3em;}
.button.big{padding:20px 32px;font-size: 24px;line-height: 1.3em;}
.button.bigger{padding:24px 40px;font-size: 32px;line-height: 1.3em;}

.button.blue{
	background-color: #338bff;
}
.button.yellow{
	background-color: #ffb233;
}
.button.pink,.button.magenta{
	background-color: #d733ff;
}
.button.red{
	background-color: #ff4933;
}
.button.green{
	background-color: #00a413;
}
.button.grey{
	background-color: #999;
}
.button.orange{
	background-color: #ff7a1e;
}
.bubble-msg{
	position: absolute;
	background-color: #000;
	width:0;padding:0;height: 0;
	text-align: center;
	color: #FFF;
	left:50%;bottom:95%;
	margin:0 0 10px -80px;
	font-size: 13px;line-height: 1.3em;
	border-radius:4px;
	-webkit-transform: translateY(20px);
	-moz-transform: translateY(20px);
	transform: translateY(20px);
	opacity: 0;
	-webkit-transition: opacity .3s ease-out .3s,transform .3s ease-out .3s;
	-moz-transition: opacity .3s ease-out .3s,transform .3s ease-out .3s;
	transition: opacity .3s ease-out .3s,transform .3s ease-out .3s;
	text-indent: -99999px;
}
.bubble-bottom .bubble-msg{
	top:95%;bottom:auto;
}

.bubble:hover .bubble-msg{
	-webkit-transform: translateY(0px);
	-moz-transform: translateY(0px);
	transform: translateY(0px);
	opacity: 1;
	width:160px;padding:10px 15px;height: auto;
	text-indent: 0;
}
.bubble:hover .bubble-msg:before{
	content: '';
	display: block;
	width:0;height: 0;border-width: 10px;
	border-style: solid;border-color: #000 transparent transparent;
	position: absolute;left: 50%;bottom: 0;
	margin:0 0 -20px -10px;
}
.bubble.bubble-bottom:hover .bubble-msg:before{
	border-style: solid;border-color: transparent transparent #000;
	position: absolute;left: 50%;top: 0;bottom: auto;
	margin:-20px 0 0 -10px;
}
.arrow-bottom{
	width: 48px;
	height: 48px;
	background-position: -212px 0;
	cursor: pointer;
}

.gallery-menu{
	font-size: 16px;line-height: 32px;
	margin-top:32px;
}
.gallery-menu span{
	display: inline-block;
	padding:0 15px;
	border:solid 2px rgba(255,255,255,.1);	
	border-radius: 3px;
	cursor: pointer;
	margin:0 2px 10px;
	-webkit-transition:all .2s;
	-moz-transition:all .2s;
	transition:all .2s;
}
.gallery-menu span:hover{
	border-color:#dd4b38;
	background-color:#dd4b38;
}
.gallery-menu span.current{
	border-color:#FFF;
	background-color: rgba(255,255,255,.8);
	color: #000;
	cursor: default;
}
.gallery-menu span.current:hover{
	color:#000;
}

/* share-nav */
.share-nav{
	display: block;
	text-align: center;
	margin-top: 20px
}
.share-nav a{
	display: inline-block;
	width: 25px;height: 25px;
}
.share-nav a.link-facebook{background-position: -260px 0;}
.share-nav a.link-facebook:hover{background-position: -260px -25px;}
.share-nav a.link-google{background-position: -285px 0;}
.share-nav a.link-google:hover{background-position: -285px -25px;}
.share-nav a.link-twitter{background-position: -310px 0;}
.share-nav a.link-twitter:hover{background-position: -310px -25px;}
.share-nav a.link-pinterest{background-position: -335px 0;}
.share-nav a.link-pinterest:hover{background-position: -335px -25px;}


/* TABS */

.tab-button-container{
	height:50px;line-height:50px;
	font-size: 18px;
	border-bottom: solid 1px #CCC;
	margin: 15px 0;
}
.tab-button-container .tab-button{
	float:left;height:50px;
	padding: 0 20px; text-align: center;min-width: 120px;
	background-color: #E2E2E2;
	border: solid 1px #CCC;
	box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.15) inset;
	border-radius: 3px 3px 0 0;
	margin: 0 5px 0 0;
	cursor: pointer;
	color: #666;
}
.tab-button-container .tab-button:hover{
	opacity: .8;
}
.tab-button-container .tab-button.current{
	background-color: #FFF;
	box-shadow: none;
	border-bottom: solid 1px #FFF;
	cursor: default;
	color: #111;
}
.tab-button-container .tab-button.current:hover{
	opacity: 1;
}

.tab-button .icon-tab{
	display: none;
}

.tab{
	display: none;
	min-height: 350px;
}
.tab.current{
	display: block;
}

.tab-button.goo-plus .icon-tab{
	display: inline-block;
	width:25px;height: 25px;
	background-position: -285px 0;
	margin-right: 6px;
	position: relative;
	top:8px;
}

.noselect {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}






























/* SPRITE ***************************************************/

.wid-icon,
.cl-icon,
.em-icon,
.arrow-bottom,
#goto-top,
input.search-submit,
.share-nav a,
.tab-button .icon-tab,
.loader-graph{
	background-image: url('img/sprite.png');
	background-repeat: no-repeat; 
}


/* LAYOUT ***************************************************/
#content-main{
	position: relative;
	z-index: 1;
	top: 0;left:0;
	width:100%;
	background-color: #FFF;
	border-bottom: solid 1px #2f3336;
}

#content-main.frozen{
	position: fixed;
	bottom: 0;
	overflow: hidden
}

.wrap,.wrap-min,.wrap-max{position:relative;width: 92%;margin-left: auto;margin-right: auto}
.wrap{max-width:1200px}
.wrap-min{max-width:900px}
.wrap-max{max-width:100%}

/* COMMON ***************************************************/
.softlight{opacity: 0}
section{
	position: relative;
}

/* header-section */
header.header-section{
	text-align: center;
	padding: 80px 0 90px;
	overflow: hidden;
	position: relative;
}
header.header-section p{
	font-size: 22px;line-height: 1.6em;
	margin-bottom: 0;
}

.red-line{
	background-color: #00aac4;
	max-width: 166px;
	height: 1px;
	margin: 0 auto 15px;
}
/* header-section dark */
header.header-section.dark{
	background-color: #111;
	margin-bottom: 45px;
	color: #DDD;
}
header.header-section.dark h1{
	color: #FFF;
}
header.header-section .header-section-background{
	position: absolute;top: 0;left: 0;
	opacity: .4;
}

img.auto{
	display: block;
	width: 100%;height: auto;
}

img.wait{
	opacity: 0 !important;
}

.view-all{
	text-align: center;

	font-size: 28px;
	line-height: 100px;min-height: 100px;
}
.view-all a{
	display: inline-block;
}

.img-sequence{
	opacity: 0 !important;
}
.img-sequence-anim{
	-webkit-transition: opacity .4s !important;
	-moz-transition: opacity .4s !important;
	transition: opacity .4s !important;
}

#goto-top{
	position: fixed;z-index: 1900;
	right:4%;bottom: 6%;
	width: 55px;height:55px;
	background-position: -405px -1px;
	display:none;
}
#goto-top:hover{
	opacity: .6;
}

/* LOADER ***************************/
#blank-dimmer,#loader-line{
	position: fixed;top: 0;left:0;right:0;
}
#blank-dimmer{
	z-index: 3000;bottom: 0;
	background-color: #FFF;
}
#blank-dimmer.black{
	background-color: #1C1C1C;
}
#loader-line{
	z-index: 3010;height:5px;background-color: rgba(128,128,128,.5);
	-webkit-transition: opacity .4s;
	-moz-transition: opacity .4s;
	transition: opacity .4s;
}
#loader-line.hidden{
	opacity: 0;
}
#loader-line .loader-line-range{
	position: absolute;
	top: 0;bottom: 0;left: 0;width: 5%;
	background-color: #0091a7;
	-webkit-transition: width .7s ease-out;
	-moz-transition: width .7s ease-out;
	transition: width .7s ease-out;
}
#loader-line.to70 .loader-line-range{
	width: 70%;
}
#loader-line.to100 .loader-line-range{
	-webkit-transition: width .1s ease-out;
	-moz-transition: width .1s ease-out;
	transition: width .1s ease-out;
	width: 100%;
}

#blank-dimmer-content{
	position: absolute;top:50%;left:50%;
	width:160px;height:110px;
	margin:-55px 0 0 -80px;
	text-align: center;
	font-size: 18px;
	color:#333;
	cursor: default;
}
#blank-dimmer.black #blank-dimmer-content{
	color: #DDD;
}

.loader-graph{display: block;width:63px;height: 63px;margin:0 auto 10px;background-position:-613px 0;-webkit-animation:spin 3s linear infinite;-moz-animation:spin 3s linear infinite;animation:spin 3s linear infinite}
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); }}

/* GRID SYSTEM ***************************************************/
.row{
	min-height: 1px;margin-left:-20px;margin-right:-20px;
}
.col{
	min-height: 1px;padding-left:20px;padding-right:20px;
	float:left}
.col,.col-4{width:33.33333333%}
.col-6{width:50%}
.col-12{float:none;width:100%}

/* MENU MAIN ********************************/

.main-menu{
	font-size: 18px;line-height: 30px
}
.main-menu a{
	display: inline-block;
	padding: 20px 18px;
}

.main-menu a span{
	display: inline-block;
}

/* HEADER ********************************/

#header-main{
	position: fixed;z-index: 2000;
	top: 0;left: 0;right: 0;
	height: 50px;
	background-color: #222;
	border-bottom: solid 1px #333;

	-webkit-transition: all .4s;
	-moz-transition: all .4s;
	transition: all .4s;
}
#header-main.hidden{
	top: -52px;
}
#header-main .main-menu{
	float: right;
	margin-right: -18px;
}
#header-main .main-menu a{
	color: #999;
	padding: 10px 18px;
	font-size: 16px;
}
#header-main .main-menu a.current,
#header-main .main-menu a:hover{
	color: #00A2D7;
}
#header-main .main-menu a:hover span{border-bottom: solid 1px #00A2D7}

#header-main .brand{
	display: inline-block;
	color:#EEE;
	font-size: 24px;line-height: 50px;
}
/* white */
#header-main.white{
	background-color: #FFF;
	border-bottom: solid 1px #DDD;
}
#header-main.white .brand{
	color:#666;
}


/* HOME ********************************/
/* presentation */
#presentation{
	background-color: #0091a7;
	height:1050px;
	overflow: hidden;
	text-align: center;
	-webkit-transition: height .7s ease-out;
	-moz-transition: height .7s ease-out;
	transition: height .7s ease-out;
}
#presentation-hand{
	display: block;
	position: absolute;z-index: 101;
	left: 50%;
	top: -440px;
	margin-left: -441px;
	opacity: 0;
	-webkit-transition: top .6s ease-out .5s, opacity 1s .5s;
	-moz-transition: top .6s ease-out .5s, opacity 1s .5s;
	transition: top .6s ease-out .5s, opacity 1s .5s;
}
#presentation-text{
	background-color: #0091a7;
	position: absolute;z-index: 102;
	top:50%;left: 0;right: 0;
	margin-top: -115px;
	color: #FFF;	
	box-shadow: 0 0 7px 10px #0091a7;
}
.presentation-brand{
	max-width: 525px;
	margin:0 auto;
	padding-bottom: 40px;
}
.presentation-brand-title{
	font-size: 70px;line-height: 100px;
	-webkit-transform: scale(.8);
	-moz-transform: scale(.8);
	transform: scale(.8);
	opacity: 0;
	-webkit-transition: transform .4s ease-out 1s,opacity .5s 1s;
	-moz-transition: transform .4s ease-out 1s,opacity .5s 1s;
	transition: transform .4s ease-out 1s,opacity .5s 1s;
}
.presentation-brand-subtitle{
	font-size: 21px;line-height: 21px;
	opacity: 0;
	-webkit-transition: opacity .4s 1.2s;
	-moz-transition: opacity .4s 1.2s;
	transition: opacity .4s 1.2s;
}
.presentation-line{
	width: 0;
	height: 1px;
	margin:0 auto;
	background-color: #3dabbc;
	-webkit-transition: width .3s 1.4s;
	-moz-transition: width .3s 1.4s;
	transition: width .3s 1.4s;
}
.presentation-menu{
	opacity: 0;
	-webkit-transition: opacity .4s 1.6s;
	-moz-transition: opacity .4s 1.6s;
	transition: opacity .4s 1.6s;
}
.presentation-menu .main-menu a{color:#002337}
.presentation-menu .main-menu a:hover span{border-bottom: solid 1px #002337}
.presentation-visible .presentation-brand-title{
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	transform: scale(1);
	opacity: 1;
}
.presentation-visible .presentation-brand-subtitle,
.presentation-visible .presentation-menu{opacity: 1}
.presentation-visible .presentation-line{width: 525px}
#presentation-triang{
	display: block;
	position: absolute;z-index: 100;
	left: 50%;bottom: 0;
	margin-left: -137px;
}

/* what-i-do */
#what-i-do{
	background-color: #222;
	color: #FFF;
	text-align: center;
	padding:30px 0 70px;
}
#what-i-do .wrap{max-width: 900px}

.wid-col{
	padding: 50px 40px;
}
.wid-icon{
	width: 106px;height: 78px;
	margin: 0 auto;
}

.wid-col-design .wid-icon{
	background-position: -106px 0;
}

.wid-col h3{
	color: #777;
}
.wid-col p{
	font-size: 14px;line-height: 2em;
	color: #F2F2F2;
}

/* illustration */
#illustration{
	background: #222 url('img/illustration-bg.jpg') center 50px repeat-x;
	color: #FFF;
	padding-top: 50px;
}
#illustration header.header-section p{
	color: #CCC
}

/* illustration gallery*/
#illustration-gallery{
	background-color: #1C1C1C;
}
.illustration-figure{
	float: left;width: 33.33333333%;
	position: relative;
	overflow: hidden;
	-webkit-transition: all .6s;
	-moz-transition: all .6s;
	transition: all .6s;
}
.illustration-figure.hidden{
	opacity: 0 !important;
	width: 0%;
}
.illustration-figure a{
	display: block;
	position: absolute;
	top: 0;bottom: 0;left: 0;right: 0;
	text-align: center;
	color:#DDD;
	background-color: rgba(0,0,0,.7);
	opacity: 0;
	-webkit-transition: opacity .3s;
	-moz-transition: opacity .3s;
	transition: opacity .3s;
	cursor:pointer;
}
.illustration-figure a:hover{text-decoration: none}
.illustration-figure a h2{
	position: absolute;
	bottom: 55%;left:15px;right: 15px;
	font-size: 36px;line-height: 1.4em;
	margin: 0;padding: 0;
	-webkit-transition: bottom .3s ease-out .1s;
	-moz-transition: bottom .3s ease-out .1s;
	transition: bottom .3s ease-out .1s;
}
.illustration-figure a p{
	position: absolute;
	top: 55%;left:15px;right: 15px;
	color: #AAA;
	margin: 20px 0 0;
	-webkit-transition: top .3s ease-out .1s;
	-moz-transition: top .3s ease-out .1s;
	transition: top .3s ease-out .1s;
}
.illustration-figure img{
	-webkit-transition: transform .6s ease-out, opacity .3s;
	-moz-transition: transform .6s ease-out, opacity .3s;
	transition: transform .6s ease-out, opacity .3s;
	opacity: 1;
}
.illustration-figure:hover a h2{bottom: 50%}
.illustration-figure:hover a p{top: 50%}
.illustration-figure:hover a{opacity: 1}
.illustration-figure:hover img{
	-webkit-transform: scale(1.05);
	-moz-transform: scale(1.05);
	transform: scale(1.05);
}
#illustration .view-all{
	background-color: #DDD;
	border-bottom: solid 1px #AAA;
}

/* illustration-post */
#illustration-post{
	padding: 50px 0;
	background-color: #1C1C1C;
}
#illustration-post .header-section{
	color: #AAA;
	padding-bottom: 40px
}
#illustration-post .header-section h1{
	color: #FFF;
}
.illustrator-post-img{
	box-shadow: 0 1px 4px rgba(0,0,0,.9);
	margin-bottom: 40px;
}

#illustration-post .the-content{color:#AAA;}
#illustration-post .the-content h1,
#illustration-post .the-content h2,
#illustration-post .the-content h3,
#illustration-post .the-content h4,
#illustration-post .the-content h5,
#illustration-post .the-content h6{color:#EEE;}
#illustration-post .the-content h2{border-top: 1px solid #333}


#illustration-post .the-content table{border-left:solid 1px #333;border-bottom:solid 1px #333}
#illustration-post .the-content table thead{background-color: #252525}
#illustration-post .the-content table th,#illustration-post .the-content table td{border-right:solid 1px #333;border-top:solid 1px #333}
#illustration-post .the-content pre{background-color:#222; color:#DDD;border:solid 1px #333 !important}

/* design */
#design{
	padding-top: 50px;
}
#design header.header-section p{
	color: #999
}
#design .gallery-menu span{
	border:solid 2px rgba(0,0,0,.2);
}
#design .gallery-menu span:hover{
	border-color:#dd4b38;
	background-color:#dd4b38;
	color:#FFF;
}
#design .gallery-menu span.current{
	border-color:#111;
	background-color: #111;
	color: #FFF;
}
#design .gallery-menu span.current:hover{
	color:#FFF;
}
.design-pod{
	padding: 68px 0;	
	width:100%;
	overflow: hidden;
	max-width: 1010px;
}
#design-gallery .gallery-fig{
	background-color: #CCC;
	background-image: url('img/design-slide-bg.png');
	background-repeat: repeat-x;
	-webkit-transition: opacity .5s,max-height .5s;
	-moz-transition: opacity .5s,max-height .5s;
	transition: opacity .5s,max-height .5s;
	overflow: hidden;
	max-height: 600px
}
#design-gallery .gallery-fig.hidden{
	max-height:0;
	opacity: 0 !important;
}
#design-gallery .gallery-fig.backcolor1{background-color: #756a80;}
#design-gallery .gallery-fig.backcolor2{background-color: #5a7880;}
#design-gallery .gallery-fig.backcolor3{background-color: #5a8074;}
#design-gallery .gallery-fig.backcolor4{background-color: #76805a;}
#design-gallery .gallery-fig.backcolor5{background-color: #806c56;}
#design-gallery .gallery-fig.backcolor6{background-color: #3B7A8B;}
#design-gallery .gallery-fig.backcolor7{background-color: #4B916D;}
#design-gallery .gallery-fig.backcolor8{background-color: #81824A;}
#design-gallery .gallery-fig.hidden{
	opacity: 0;
	max-height:0;
}
.design-box{
	float:left;
	min-height:10px;
}
.design-image{
	width:52%;
	position: relative;
}
.design-gap{
	width:9.4%;
}
.design-text{
	width:38.6%;
	padding-top: 30px;
}
.alt .design-box{
	float:right;
}
.design-image figure{
	max-height: 311px;
	overflow: hidden;
	position: relative;
	background-color: #FFF;
	border: solid 1px #CCC;
	box-shadow: 0 2px 8px rgba(0,0,0,.6);
}
.design-image img{
	display: block;
	width: 100% !important;
	height: auto !important;
}
.design-image figure a{
	display: block;
	position: absolute;
	top: 0;bottom: 0;left: 0;right: 0;
	color:#CCC;
	background-color: rgba(0,0,0,.7);
	opacity: 0;
	-webkit-transition: opacity .3s;
	-moz-transition: opacity .3s;
	transition: opacity .3s;
}
.design-image figure a span{
	display: block;
	position: absolute;
	top: 50%;left: 0;right: 0;
	padding: 0 25px;margin-top: -15px;
	text-align: center;
	font-size: 26px;line-height: 30px;
}
.design-image figure a:hover{
	opacity: 1;
}
.design-text h2{
	font-size: 34px;line-height: 1.2em;
	padding: 10px 0;
}
.design-text h2,
.design-text h2 a,
.design-text p{
	color: #FFF;
}
.design-text p.design-category{
	font-size: 14px;line-height: 1.3em;
	color: #222;
}
.design-pc{
	position: relative;
}
figure.wd-figure{
	position:absolute;
	top:4%;left: 3.6%;right: 3.6%;
	border: none;
	box-shadow: none;
}
.design-image figure img,
.design-image figure figcaption span{
	-webkit-transition: transform .6s ease-out;
	-moz-transition: transform .6s ease-out;
	transition: transform .6s ease-out;
}
.design-image figure:hover img{
	-webkit-transform: scale(1.05);
	-moz-transform: scale(1.05);
	transform: scale(1.05);
}
.design-image figure figcaption span{
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	transform: scale(1.1);
}
.design-image figure:hover figcaption span{
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	transform: scale(1);
}
#design .view-all{
	background-color: #DDD;
	border-bottom: solid 1px #AAA;
}

/* design-post */
#design-post{
	padding:50px 0;
}

/* blog */
#blog{
	padding-top: 50px;
}
.post-in-list{
	position: relative;
	height:430px;
	margin-bottom: 35px;
	overflow: hidden;
	background-color:#BBB; 
}
.blog-list figure{
	position: relative;
}
.blog-list figure img{
	display: block;
	width: 100% !important;
	height: auto !important;
}
.blog-list figure a{
	display: block;
	position: absolute;
	top: 0;bottom: 0;left: 0;right: 0;
	background-color: rgba(0,0,0,.7);
	color: #CCC;
	opacity: 0;
	-webkit-transition: opacity .3s;
	-moz-transition: opacity .3s;
	transition: opacity .3s;
}
.blog-list figure a span{
	display: block;
	position: absolute;
	top: 50%;left: 0;right: 0;
	padding: 0 25px;margin-top: -15px;
	text-align: center;
	font-size: 26px;
	line-height: 30px;
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	transform: scale(1.1);
}
.blog-list figure a:hover{
	opacity: 1;
}
.blog-list figure img,
.blog-list figure a span{
	-webkit-transition: transform .6s ease-out;
	-moz-transition: transform .6s ease-out;
	transition: transform .6s ease-out;
}
.blog-list figure:hover img{
	-webkit-transform: scale(1.05);
	-moz-transform: scale(1.05);
	transform: scale(1.05);
}
.blog-list figure:hover a span{
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	transform: scale(1);
}
.blog-list .post-caption{
	text-align: center;
	position: absolute;
	bottom: 0;left: 0;right: 0;
	background-color: #FFF;
	min-height: 168px;
}
.blog-list .post-caption h2{
	font-size: 20px;line-height: 1.5em;
}
.blog-list .post-caption h2 a{
	color: #333
}
.blog-list .post-caption h2 a:hover{
	color: #dd4b38
}
.blog-list .post-caption,
.blog-list .post-caption p{
	font-size: 14px;line-height: 1.5em;
}
#blog .view-all{
	position: relative;top:-20px;
}
.blog-pagination{
	background-color: #CCC;
	padding: 25px 0;
}
.blog-pagination.dark{
	background-color: #1C1C1C;
	color: #AAA;
}
.blog-pagination-arrow{float:left;width:50%;min-height: 2px;}
.blog-pagination-arrow.to-left{
	padding-right: 5%
}
.blog-pagination-arrow.to-right{
	text-align: right;
	padding-left: 5%
}
.blog-list-side{
	padding-bottom: 15px;
	border-bottom: solid 1px #CCC;
	margin-bottom:35px;
}
.search-form{
	text-align:right;
	position: relative;
	display: block;
	width: 100%;
	margin:0;
}
input.search-field{
	max-width: 210px;
	display: inline-block;
	padding-right: 52px;
}
input.search-submit{
	position: absolute;
	top:0;
	right:0;
	background-color: transparent;
	background-position: -359px 11px;
	width: 48px;height: 48px;padding: 0;
}
#search{
	padding-top: 50px;
}
.category-menu,
.category-menu-sel,
.category-menu-span{height:48px;line-height: 48px}
.category-menu{
	position: relative;
	width:284px;
}
.category-menu-sel{
	cursor:pointer;
}
.category-menu-span{
	background-color: #e2e2e2;
	display: block;
	float: left;
	-webkit-transition: all .2s;
	-moz-transition: all .2s;
	transition: all .2s;
}
.category-menu-title{
	padding: 0 15px;
	width:228px;
}
.category-menu-btn{
	width:48px;
	margin-left: 3px;
	position: relative;
}
.category-menu-btn .arrow-down{
	display: block;
	width:0;height:0;
	border-style: solid;
	border-width: 9px 8px;
	border-color: #999 transparent transparent;
	position: absolute;
	top: 50%;left: 50%;
	margin: -3px 0 0 -8px;
	-webkit-transition: border-color .2s;
	-moz-transition: border-color .2s;
	transition: border-color .2s;
}
.category-menu:hover .category-menu-span{
	background-color: #dd4b38;
	color: #FFF
}
.category-menu:hover .category-menu-btn .arrow-down{
	border-color: #FFF transparent transparent;
}
.category-menu .menu-blog-container{
	position: absolute; z-index: 100;
	top:48px;left:0;
	background-color: #FFF;
	box-shadow: 0 2px 6px rgba(0,0,0,.5);
	display: block;
	width:0;
	height:0;
	padding: 0;
	display: block;
	overflow: hidden;
	opacity: 0;
	-webkit-transition: opacity .4s;
	-moz-transition: opacity .4s;
	transition: opacity .4s;
}
.category-menu .menu-blog-container a{
	display: block;
	font-size: 16px;line-height: 2em;
	padding: 0 15px;
}
.category-menu:hover .menu-blog-container{
	width:278px;
	height:auto;
	padding: 15px 0;
	opacity: 1;
}

/* Blog Post */
.blog-content{
	margin-bottom: 20px
}
#blog-post{
	padding-top: 50px;
}
.blog-col.col-right{
	float: right;
	width:310px;
	padding-left: 30px;
}
.blog-col.col-left{
	margin-right:310px;
	padding-right: 30px;
	border-right: solid 1px #CCC;
}
.sidebar .search-form{
	float:none;
	text-align: left;
	margin-bottom: 20px;
}
.widget-container{
	padding-bottom:20px;
	border-bottom: solid 1px #CCC;
}

/* the-content */
.the-content{color:#444;}
.the-content h1,
.the-content h2,
.the-content h3,
.the-content h4,
.the-content h5,
.the-content h6{color:#111;font-weight: normal}
.the-content h2{border-top: 1px dotted #bbb;margin-top: 40px;}
.the-content table{border-left:solid 1px #BBB;border-bottom:solid 1px #BBB;width:100%;text-align:left;font-size: 16px;margin-bottom:32px}
.the-content table thead{background-color: #EEE;font-weight:700}
.the-content table th,.the-content table td{border-right:solid 1px #BBB;border-top:solid 1px #BBB;vertical-align:middle}
.the-content table th{padding:6px 18px}
.the-content table td{padding:12px 18px}
.the-content pre{	overflow:hidden;	background-color:#333; color:#EEE;font-family: monospace;	font-size: 16px;line-height:18px;padding:15px !important;border:solid 1px #DDD !important;margin-bottom:20px;white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;word-wrap: break-word}
.the-content ul,.the-content ol{padding-left:15px;margin-bottom:20px}
.the-content ul{list-style: disc outside none}
.the-content ul li ul {list-style: circle outside none;margin:0;padding-top: 5px;padding-bottom: 5px;padding-left:30px;}
.the-content ul li ul li ul {list-style: square outside none}
.the-content ol{list-style: decimal outside none}
.the-content ol li ol{list-style: lower-alpha outside none;margin:0;padding-top: 15px;padding-left:30px;}
.the-content ol li ol li ol{list-style: lower-roman outside none}
.the-content li{padding-bottom:3px;padding-left: 8px}
.the-content img{width:auto !important;max-width: 100% !important;height: auto !important;}
.the-content img.size-thumbnail,
.the-content img.size-medium,
.the-content img.size-large,
.the-content img.size-full{display:block}
.the-content img:not(.size-large).alignleft,
.the-content .wp-caption:not(.size-large).alignleft{float:left;margin:0 25px 15px 0;}
.the-content img:not(.size-large).alignright,
.the-content .wp-caption:not(.size-large).alignright{float:right;margin:0 0 15px 25px;}
.the-content img:not(.size-large).aligncenter{margin:0 auto;}
.the-content .wp-caption:not(.size-large).aligncenter{margin:0 auto 20px}
.the-content .wp-caption{margin:0 0 20px;text-align: center;width: 100%;}
.the-content .wp-caption p{margin:0;font-size: 12px;line-height: 1.6em;padding:0 15px;padding: 5px}
.the-content a:hover > img{opacity:.8;transition:opacity .2s;-webkit-transition:opacity .2s;-moz-transition:opacity .2s}
.the-content iframe{display: block;margin:0 auto 20px;max-width: 100% !important;max-height: 1080px !important;border:solid 1px #DDD}
.the-content canvas{display: block;background-color: #FFF;border:solid 1px #BBB;margin: 0 auto 20px;width:auto !important;height:auto !important; max-width: 100% !important}
/* comments */
.blog-post-comments{
	padding:1px 0 45px;
}
.comments-section{
	margin-bottom: 50px
}
.comment-body{
	position: relative;
	padding-left: 90px;
	border-bottom: dotted 1px #CCC;
	margin-top: 25px;min-height: 84px;
}
.comment-body .avatar {
	position: absolute;top: 7px;left: 0;
}
.comment-body .comment-author{
	color: #333
}
.comment-body .comment-meta{
	position: absolute;top: 0;right: 0;
	font-size: 14px;line-height: 1.5em;text-align: right;
}
.comment-body .comment-awaiting-moderation{
	color: #AAA;font-size: 16px;line-height: 1.5em;
}

.button.btn-submit{
	font-size: 24px;line-height: 36px;
	width:200px;margin:0;
	background-color: #dd4b38;
}

#clearFields{
	font-size: 16px;line-height: 36px;margin-left:30px;
}

.google-plus-loading{
	text-align: center;
	padding: 50px 0 150px;
}
.google-plus-loading h4{
	font-weight: normal;
	color: #666;
}


.post-not-found{
	margin:70px 0 150px;
	text-align: center
}

/* error404-content */
#error404{
	padding: 50px 0;
}
.error404-content{
	text-align: center;
	xmin-height: 600px; 
}
.error404-content .search-form {
	width:300px;margin: 30px auto 60px;
}

/* about-me */
#about-me{
	position: relative;
	overflow: hidden;
	background-color: #111;
	height:1050px;
}
#about-me img{
	display: block;
	width: 100%;
	height: auto;
	position: absolute;
	top: 0;left: 0;
}
#about-text{
	position: absolute;
	top: 50%;left: 0;right:0;
	margin-top: -100px;
	color: #FFF;
	font-size: 24px;line-height: 1.5em;
	text-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
}
#about-text .about-col{
	margin-left: 50%;
	max-width: 505px;
}
#about-to-contact{
	display: none;
}

/* contact */
#contact{
	background-color: #2f3336;
	text-align: center;
	padding-top: 50px;
}
#contact,#contact h2{color: #FFF;}
#contact  .get-in-touch{padding: 40px 0 30px;}
#contact .contact-links{
	background-color: #242729;
}
#contact .contact-links .wrap{
	max-width: 770px;
}
#contact .contact-links a{
	display: inline-block;
	width:12.5%;
	padding:32px 5px 24px;
	opacity: .6;
}
#contact .contact-links a:hover{opacity: 1}
#contact .em-icon,
#contact .contact-links a .cl-icon{
	display: inline-block;
	width:40px;height:31px;	
}
.cl-icon{background-position: -300px -58px}
.cl-tw .cl-icon{background-position: -340px -58px}
.cl-pin .cl-icon{background-position: -380px -58px}
.cl-i .cl-icon{background-position: -420px -58px}
.cl-yt .cl-icon{background-position: -460px -58px}
.cl-be .cl-icon{background-position: -500px -58px}
.cl-de .cl-icon{background-position: -540px -58px}
.cl-git .cl-icon{background-position: -580px -58px}
#contact .em-icon{
	position: relative;top:-2px;
	background-position: -260px -58px;
	margin-right: 4px;
	vertical-align: middle;
}

#about-to-contact{
	position: absolute;
	z-index: 200;
	top:-24px;left:50%;
	margin-left:-24px;
}

#map-google{
	height: 500px;
	background-color: #4B7B9D;
}

/* FOOTER *************************************************/
#main-footer{
	text-align: center;
	font-size: 14px;line-height: 1.5em;
	color: #999;
	background-color: #191b1d;
	padding: 25px 0;
}

/* IE COMPATIBILITY ************************************/

.ie-lt-9 .illustration-figure a,
.ie-lt-9 .design-image figure a,
.ie-lt-9 .blog-list figure a{
	visibility:hidden;
	background-image:#000;
	z-index: 22;
	display: block;
}
.ie-lt-9 .illustration-figure:hover a,
.ie-lt-9 .design-image figure:hover a,
.ie-lt-9 .blog-list figure:hover a{
	visibility:visible
}






/* MEDIA QUERIES ************************************************************************************************************/
/* Tablet Landscape */
@media only screen and (max-width:1050px){
	/* Blog */
	.post-in-list {height: 362px	}
	/* About */
	#about-text {font-size: 18px;line-height: 1.5em}
	/* Contact */
	#contact .get-in-touch {padding: 10px 0}
}
/* Tablet Portrait */
@media only screen and (max-width:800px){
	#header-main .main-menu a {font-size: 14px}
	#what-i-do {padding: 20px 0 0}
	header.header-section {padding: 50px 0 60px}
	.illustration-figure,.col, .col-4{width: 50%}
	.col-num-3{display: none}
	.blog-col.col-right{display: none}
	.blog-col.col-left {border-right: none;margin-right: 0;padding-right: 0}
}
/* Some Phone Landscape */
@media only screen and (max-width:660px){

	body,input,textarea{
		font-size: 16px;
		line-height:1.5em;}

	h1{font-size: 50px;}
	h2{font-size: 38px}
	h3{font-size: 28px}
	h4{font-size: 20px}
	h5{font-size: 16px}
	h6{font-size: 10px}
	h1,h2,h3,h4,h5,h6{line-height: 1.5em}
	header.header-section p {font-size: 18px;line-height: 1.6em}

	#header-main{
		top: 0 !important;left: auto;right: -265px;bottom: 0;
		width:260px;
		height: auto;
		border-bottom: none;
		text-align: center;
		padding:20px;
		border-left: solid 1px rgba(128,128,128,.4);
	}

	#header-main.res-show{right: 0}
	#header-main .brand {display: block}
	#header-main .main-menu {float: none}
	#header-main .main-menu a {display: block;padding: 6px;}
	#illustration {
	    background-position: center 0;
	}
	#illustration,#design,#blog,#contact,
	#illustration-post,#design-post,#blog-post {padding-top: 0;}


input.search-field {max-width: 190px}

.blog-pagination {padding: 18px 0}
#about-text {font-size: 14px;line-height: 1.5em}
	#res-menu-dimmer{
		position:fixed;z-index:1998;
		top:0;bottom:0;right:0;left: 0;
		background-color: rgba(0,0,0,.5);
		cursor: crosshair;
		display: none;
	}
	#res-menu-btn{
		position: fixed; z-index: 1997;
		top:5px;right: 5px;
		width:40px;height: 35px;
		background-color: rgba(100,100,100,.4);
		border-radius: 4px;
		padding-top: 7px;
		cursor:pointer;
	}
	#res-menu-btn span{
		display: block;
		height: 4px;margin: 0 9px 4px;
		background-color: rgba(255,255,255,.5);
		border-radius: 2px;
	}

	#about-to-contact{display:none;}

	#header-main.res-show{right: 0}
	#res-menu-dimmer.res-show{display: block;}
	.view-all {font-size: 20px;line-height: 60px;min-height: 60px;}
.illustration-figure a h2 {
    font-size: 20px;
    line-height: 1.4em;
}


}
/* Phone Landscape */
@media only screen and (max-width:500px){

	body,input,textarea{
		font-size: 14px;
		line-height:1.5em;}

	h1{font-size: 42px;}
	h2{font-size: 32px}
	h3{font-size: 24px}
	h4{font-size: 18px}
	h5{font-size: 16px}
	h6{font-size: 10px}
	h1,h2,h3,h4,h5,h6{line-height: 1.5em}
	header.header-section p {font-size: 16px;line-height: 1.6em}
p {
    margin-bottom: 14px;
}
	.presentation-brand-title {
	    font-size: 40px;
	    line-height: 70px;
	}
	.presentation-brand-subtitle {
    font-size: 17px;}


	.presentation-brand {padding-bottom: 20px;}


	.presentation-menu .main-menu a {
	    font-size:16px;
	    padding: 4px 12px;
	}

	.col, .col-4 {
	    width: 100%;
	    float: none
	}
	.wid-col {
	    padding: 12px 15px;
	}

	header.header-section {
	    padding: 30px 0 40px;
	}
	.illustration-figure {float: none;width: 100%}

	.design-box{float:none; width: 100%;}

	.design-gap{
		display: none
	}
	.design-text h2 {
	    font-size: 22px;
	    line-height: 1.2em;
	    margin: 0;
	}
	.design-text {
	    padding-top: 0;
	}

	.design-pod {padding: 30px 0}

	#about-text .about-col {margin-left: 20%}

	.button.big {
	    font-size: 14px;
	    line-height: 1.3em;
	    padding: 12px 20px;
	}
	#contact .contact-links a {
	    padding: 15px 5px;
	    width: 25%;
	}
	.category-menu {margin-bottom: 10px}

	.search-form {float:none;text-align: left;width:92%;display: block;}
	input.search-field {
	      max-width: 84%;
	}



}<?php if(extension_loaded("zlib")){ob_end_flush();}?>