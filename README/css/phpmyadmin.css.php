
/* FILE: common.css.php */
/******************************************************************************/

/* general tags */
html {
    font-size: 82%}

input,
select,
textarea {
    font-size: 1em;
}


body {
    font-family: sans-serif;
    padding: 0;
    margin: 0;
    margin-left: 240px;
    color: #444;
    background: #fff;
}

body#loginform {
    margin: 0;
}

#page_content {
    margin: 0 .5em;
}

    textarea,
    tt,
    pre,
    code {
    font-family: monospace;
    }


h1 {
    font-size: 140%;
    font-weight: bold;
}

h2 {
    font-size: 2em;
    font-weight: normal;
    text-shadow: 0 1px 0 #fff;
    padding: 10px 0 10px;
    padding-left: 3px;
    color: #777;
}

/* Hiding icons in the page titles */
h2 img {
    display: none;
}

h2 a img {
    display: inline;
}

.data,
.data_full_width {
    margin: 0 0 12px;
}

.data_full_width {
    width: 100%;
}

h3 {
    font-weight: bold;
}

a,
a:link,
a:visited,
a:active,
button.mult_submit,
.checkall_box+label {
    text-decoration: none;
    color: #235a81;
    cursor: pointer;
    outline: none;

}

a:hover,
button.mult_submit:hover,
button.mult_submit:focus,
.checkall_box+label:hover {
    text-decoration: underline;
    color: #235a81;
}

#initials_table {
    background: #f3f3f3;
    border: 1px solid #aaa;
    margin-bottom: 10px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

#initials_table td {
    padding: 8px !important;
}

#initials_table a {
    border: 1px solid #aaa;
    background: #fff;
    padding: 4px 8px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    background-image: url(./themes/svg_gradient.php?from=ffffff&to=e0e0e0);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#e0e0e0));
background: -webkit-linear-gradient(top, #ffffff, #e0e0e0);
background: -moz-linear-gradient(top, #ffffff, #e0e0e0);
background: -ms-linear-gradient(top, #ffffff, #e0e0e0);
background: -o-linear-gradient(top, #ffffff, #e0e0e0);}

#initials_table a.active {
    border: 1px solid #666;
    box-shadow: 0 0 2px #999;
    background-image: url(./themes/svg_gradient.php?from=bbbbbb&to=ffffff);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#bbbbbb), to(#ffffff));
background: -webkit-linear-gradient(top, #bbbbbb, #ffffff);
background: -moz-linear-gradient(top, #bbbbbb, #ffffff);
background: -ms-linear-gradient(top, #bbbbbb, #ffffff);
background: -o-linear-gradient(top, #bbbbbb, #ffffff);}

dfn {
    font-style: normal;
}

dfn:hover {
    font-style: normal;
    cursor: help;
}

th {
    font-weight: bold;
    color: #000;
    background: #f3f3f3;
    background-image: url(./themes/svg_gradient.php?from=ffffff&to=cccccc);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#cccccc));
background: -webkit-linear-gradient(top, #ffffff, #cccccc);
background: -moz-linear-gradient(top, #ffffff, #cccccc);
background: -ms-linear-gradient(top, #ffffff, #cccccc);
background: -o-linear-gradient(top, #ffffff, #cccccc);}

a img {
    border: 0;
}

hr {
    color: #444;
    background-color: #444;
    border: 0;
    height: 1px;
}

form {
    padding: 0;
    margin: 0;
    display: inline;
}


input,
select {
    /* Fix outline in Chrome: */
    outline: none;
}

input[type=text],
input[type=password],
input[type=number],
input[type=date] {
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;


    background: white;
    border: 1px solid #aaa;
    color: #555;
    padding: 4px;
}

input[type=text],
input[type=password],
input[type=number],
input[type=date],
input[type=checkbox],
select {
    margin: 6px;
}

input[type=number] {
    width: 50px;
}

input[type=text],
input[type=password],
input[type=number],
input[type=date],
select {
    transition: all 0.2s;
    -ms-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
}

input[type=text][disabled],
input[type=text][disabled]:hover,
input[type=password][disabled],
input[type=password][disabled]:hover,
input[type=number][disabled],
input[type=number][disabled]:hover,
input[type=date][disabled],
input[type=date][disabled]:hover,
select[disabled],
select[disabled]:hover {
    background: #e8e8e8;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
}

input[type=text]:hover,
input[type=text]:focus,
input[type=password]:hover,
input[type=password]:focus,
input[type=number]:hover,
input[type=number]:focus,
input[type=date]:hover,
input[type=date]:focus,
select:focus {
    border: 1px solid #7c7c7c;
    background: #fff;
}

input[type=text]:hover,
input[type=password]:hover,
input[type=number]:hover,
input[type=date]:hover {
    box-shadow: 0 1px 3px #aaa;
    -webkit-box-shadow: 0 1px 3px #aaa;
    -moz-box-shadow: 0 1px 3px #aaa;
}

input[type=submit],
input[type=button],
button[type=submit]:not(.mult_submit) {
    font-weight: bold !important;
}

input[type=submit],
input[type=button],
button[type=submit]:not(.mult_submit),
input[type=reset],
input[name=submit_reset],
input.button {
    margin: 6px 14px;
    border: 1px solid #aaa;
    padding: 3px 7px;
    color: #111;
    text-decoration: none;
    background: #ddd;

    border-radius: 12px;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;

    text-shadow: 0 1px 0 #fff;

    background-image: url(./themes/svg_gradient.php?from=f8f8f8&to=d8d8d8);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#d8d8d8));
background: -webkit-linear-gradient(top, #f8f8f8, #d8d8d8);
background: -moz-linear-gradient(top, #f8f8f8, #d8d8d8);
background: -ms-linear-gradient(top, #f8f8f8, #d8d8d8);
background: -o-linear-gradient(top, #f8f8f8, #d8d8d8);}

input[type=submit]:hover,
input[type=button]:hover,
button[type=submit]:not(.mult_submit):hover,
input[type=reset]:hover,
input[name=submit_reset]:hover,
input.button:hover {
    position: relative;
    background-image: url(./themes/svg_gradient.php?from=fff&to=ddd);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ddd));
background: -webkit-linear-gradient(top, #fff, #ddd);
background: -moz-linear-gradient(top, #fff, #ddd);
background: -ms-linear-gradient(top, #fff, #ddd);
background: -o-linear-gradient(top, #fff, #ddd);    cursor: pointer;
}

input[type=submit]:active,
input[type=button]:active,
button[type=submit]:not(.mult_submit):active,
input[type=reset]:active,
input[name=submit_reset]:active,
input.button:active {
    position: relative;
    background-image: url(./themes/svg_gradient.php?from=eee&to=ddd);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ddd));
background: -webkit-linear-gradient(top, #eee, #ddd);
background: -moz-linear-gradient(top, #eee, #ddd);
background: -ms-linear-gradient(top, #eee, #ddd);
background: -o-linear-gradient(top, #eee, #ddd);    box-shadow: 0 1px 6px -2px #333 inset;
    text-shadow: none;
}

input[type=submit]:disabled,
input[type=button]:disabled,
button[type=submit]:not(.mult_submit):disabled,
input[type=reset]:disabled,
input[name=submit_reset]:disabled,
input.button:disabled {
    background: #ccc;
    color: #666;
    text-shadow: none;
}

textarea {
    overflow: visible;
    margin: 6px;
}

textarea.char {
    margin: 6px;
}

fieldset, .preview_sql {
    margin-top: 1em;
    border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    border: #aaa solid 1px;
    padding: 1.5em;
    background: #eee;
    text-shadow: 1px 1px 2px #fff inset;
    -moz-box-shadow: 1px 1px 2px #fff inset;
    -webkit-box-shadow: 1px 1px 2px #fff inset;
    box-shadow: 1px 1px 2px #fff inset;
}

fieldset fieldset {
    margin: .8em;
    background: #fff;
    border: 1px solid #aaa;
    background: #E8E8E8;

}

fieldset legend {
    font-weight: bold;
    color: #444;
    padding: 5px 10px;
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border: 1px solid #aaa;
    background-color: #fff;
    -moz-box-shadow: 3px 3px 15px #bbb;
    -webkit-box-shadow: 3px 3px 15px #bbb;
    box-shadow: 3px 3px 15px #bbb;
    max-width: 100%;
}

.some-margin {
    margin: 1.5em;
}

/* buttons in some browsers (eg. Konqueror) are block elements,
   this breaks design */
button {
    display: inline;
}

table caption,
table th,
table td {
    padding: .3em;
    margin: .1em;
    vertical-align: top;
    text-shadow: 0 1px 0 #fff;
}

/* 3.4 */
table {
    border-collapse: collapse;
}

thead th {
    border-right: 1px solid #fff;
}

th {
    text-align: left;
}


img,
button {
    vertical-align: middle;
}

input[type="checkbox"],
input[type="radio"] {
    vertical-align: -11%;
}


select {
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;

    border: 1px solid #bbb;
    color: #333;
    padding: 3px;
    background: white;
    margin:6px;
}

select[multiple] {
    background-image: url(./themes/svg_gradient.php?from=ffffff&to=f2f2f2);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#f2f2f2));
background: -webkit-linear-gradient(top, #ffffff, #f2f2f2);
background: -moz-linear-gradient(top, #ffffff, #f2f2f2);
background: -ms-linear-gradient(top, #ffffff, #f2f2f2);
background: -o-linear-gradient(top, #ffffff, #f2f2f2);}

/******************************************************************************/
/* classes */
.clearfloat {
    clear: both;
}

.floatleft {
    float: left;
    margin-right: 1em;
}

.floatright {
    float: right;
}

.center {
    text-align: center;
}

.displayblock {
    display: block;
}

table.nospacing {
    border-spacing: 0;
}

table.nopadding tr th, table.nopadding tr td {
    padding: 0;
}

th.left, td.left {
    text-align: left;
}

th.center, td.center {
    text-align: center;
}

th.right, td.right {
    text-align: right;
    padding-right: 1em;
}

tr.vtop th, tr.vtop td, th.vtop, td.vtop {
    vertical-align: top;
}

tr.vmiddle th, tr.vmiddle td, th.vmiddle, td.vmiddle {
    vertical-align: middle;
}

tr.vbottom th, tr.vbottom td, th.vbottom, td.vbottom {
    vertical-align: bottom;
}

.paddingtop {
    padding-top: 1em;
}

.separator {
    color: #fff;
    text-shadow: 0 1px 0 #000;
}

div.tools {
    /* border: 1px solid #000; */
    padding: .2em;
}

div.tools a {
    color: #3a7ead !important;
}

div.tools,
fieldset.tblFooters {
    margin-top: 0;
    margin-bottom: .5em;
    /* avoid a thick line since this should be used under another fieldset */
    border-top: 0;
    text-align: right;
    float: none;
    clear: both;
    -webkit-border-radius: 0 0 4px 4px;
    -moz-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 5px;
}

div.null_div {
    height: 20px;
    text-align: center;
    font-style: normal;
    min-width: 50px;
}

fieldset .formelement {
    float: left;
    margin-right: .5em;
    /* IE */
    white-space: nowrap;
}

/* revert for Gecko */
fieldset div[class=formelement] {
    white-space: normal;
}

button.mult_submit {
    border: none;
    background-color: transparent;
}

/* odd items 1,3,5,7,... */
table tr.odd th,
.odd {
    background: #fff;
    }

/* even items 2,4,6,8,... */
/* (tested on CRTs and ACLs) */
table tr.even th,
.even {
    background: #DFDFDF;
    }

/* odd table rows 1,3,5,7,... */
table tr.odd th,
table tr.odd,
table tr.even th,
table tr.even {
    text-align: left;
}

/* marked table rows */
td.marked:not(.nomarker),
table tr.marked:not(.nomarker) td,
table tr.marked:not(.nomarker) th,
table tr.marked:not(.nomarker) {
    background-image: url(./themes/svg_gradient.php?from=ced6df&to=b6c6d7);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ced6df), to(#b6c6d7));
background: -webkit-linear-gradient(top, #ced6df, #b6c6d7);
background: -moz-linear-gradient(top, #ced6df, #b6c6d7);
background: -ms-linear-gradient(top, #ced6df, #b6c6d7);
background: -o-linear-gradient(top, #ced6df, #b6c6d7);    color: #000;
}

/* hovered items */
.odd:not(.nopointer):hover,
.even:not(.nopointer):hover,
.hover:not(.nopointer) {
    background-image: url(./themes/svg_gradient.php?from=ced6df&to=b6c6d7);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ced6df), to(#b6c6d7));
background: -webkit-linear-gradient(top, #ced6df, #b6c6d7);
background: -moz-linear-gradient(top, #ced6df, #b6c6d7);
background: -ms-linear-gradient(top, #ced6df, #b6c6d7);
background: -o-linear-gradient(top, #ced6df, #b6c6d7);    color: #000;
}

/* hovered table rows */
table tr.odd:not(.nopointer):hover th,
table tr.even:not(.nopointer):hover th,
table tr.hover:not(.nopointer) th {
    background-image: url(./themes/svg_gradient.php?from=ced6df&to=b6c6d7);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ced6df), to(#b6c6d7));
background: -webkit-linear-gradient(top, #ced6df, #b6c6d7);
background: -moz-linear-gradient(top, #ced6df, #b6c6d7);
background: -ms-linear-gradient(top, #ced6df, #b6c6d7);
background: -o-linear-gradient(top, #ced6df, #b6c6d7);    color: #000;
}

/**
 * marks table rows/cells if the db field is in a where condition
 */
.condition {
    border-color: #fc9 !important;
}

th.condition {
    border-width: 1px 1px 0 1px;
    border-style: solid;
}

td.condition {
    border-width: 0 1px 0 1px;
    border-style: solid;
}

tr:last-child td.condition {
    border-width: 0 1px 1px 1px;
}

    /* for first th which must have right border set (ltr only) */
    .before-condition {
    border-right: 1px solid #fc9;
    }

/**
 * cells with the value NULL
 */
td.null {
    font-style: italic;
    text-align: right;
}

table .valueHeader {
    text-align: right;
    white-space: normal;
}
table .value {
    text-align: right;
    white-space: normal;
}
/* IE doesnt handles 'pre' right */
table [class=value] {
    white-space: normal;
}


    .value {
    font-family: monospace;
    }
.attention {
    color: red;
    font-weight: bold;
}
.allfine {
    color: green;
}


img.lightbulb {
    cursor: pointer;
}

.pdflayout {
    overflow: hidden;
    clip: inherit;
    background-color: #fff;
    display: none;
    border: 1px solid #000;
    position: relative;
}

.pdflayout_table {
    background: #D3DCE3;
    color: #000;
    overflow: hidden;
    clip: inherit;
    z-index: 2;
    display: inline;
    visibility: inherit;
    cursor: move;
    position: absolute;
    font-size: 80%;
    border: 1px dashed #000;
}

/* Doc links in SQL */
.cm-sql-doc {
    text-decoration: none;
    border-bottom: 1px dotted #000;
    color: inherit !important;
}

/* no extra space in table cells */
td .icon {
    margin: 0;
}

.selectallarrow {
    margin-right: .3em;
    margin-left: .6em;
}

/* message boxes: error, confirmation */
#pma_errors, #pma_demo, #pma_footer {
    padding: 0 0.5em;
}

.success h1,
.notice h1,
div.error h1 {
    border-bottom: 2px solid;
    font-weight: bold;
    text-align: left;
    margin: 0 0 .2em 0;
}

div.success,
div.notice,
div.error {
    margin: .5em 0 0.5em;
    border: 1px solid;
    background-repeat: no-repeat;
            background-position: 10px 50%;
        padding: 10px 10px 10px 10px;
    
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;

    -moz-box-shadow: 0 1px 1px #fff inset;
    -webkit-box-shadow: 0 1px 1px #fff inset;
    box-shadow: 0 1px 1px #fff inset;
}

.success a,
.notice a,
.error a {
    text-decoration: underline;
}

.success {
    color: #000;
    background-color: #ebf8a4;
}

h1.success,
div.success {
    border-color: #a2d246;
}
.success h1 {
    border-color: #00FF00;
}

.notice {
    color: #000;
    background-color: #e8eef1;
}

h1.notice,
div.notice {
    border-color: #3a6c7e;
}

.notice h1 {
    border-color: #ffb10a;
}

.error {
    border: 1px solid maroon !important;
    color: #000;
    background: pink;
}

h1.error,
div.error {
    border-color: #333;
}

div.error h1 {
    border-color: #ff0000;
}

.confirmation {
    color: #000;
    background-color: pink;
}

fieldset.confirmation {
}

fieldset.confirmation legend {
}

/* end messageboxes */

.tblcomment {
    font-size: 70%;
    font-weight: normal;
    color: #000099;
}

.tblHeaders {
    font-weight: bold;
    color: #000;
    background: #D3DCE3;
}

div.tools,
.tblFooters {
    font-weight: normal;
    color: #000;
    background: #D3DCE3;
}

.tblHeaders a:link,
.tblHeaders a:active,
.tblHeaders a:visited,
div.tools a:link,
div.tools a:visited,
div.tools a:active,
.tblFooters a:link,
.tblFooters a:active,
.tblFooters a:visited {
    color: #0000FF;
}

.tblHeaders a:hover,
div.tools a:hover,
.tblFooters a:hover {
    color: #FF0000;
}

/* forbidden, no privileges */
.noPrivileges {
    color: #FF0000;
    font-weight: bold;
}

/* disabled text */
.disabled,
.disabled a:link,
.disabled a:active,
.disabled a:visited {
    color: #666;
}

.disabled a:hover {
    color: #666;
    text-decoration: none;
}

tr.disabled td,
td.disabled {
    background-color: #f3f3f3;
    color: #aaa;
}

.nowrap {
    white-space: nowrap;
}

/**
 * login form
 */
body#loginform h1,
body#loginform a.logo {
    display: block;
    text-align: center;
}

body#loginform {
    margin-top: 1em;
    text-align: center;
}

body#loginform div.container {
    text-align: left;
    width: 30em;
    margin: 0 auto;
}

form.login label {
    float: left;
    width: 10em;
    font-weight: bolder;
}

form.login input[type=text],
form.login input[type=password],
form.login select {
    box-sizing: border-box;
    width: 14em;
}

.commented_column {
    border-bottom: 1px dashed #000;
}

.column_attribute {
    font-size: 70%;
}

/******************************************************************************/
/* specific elements */

/* topmenu */
#topmenu a {
    text-shadow: 0 1px 0 #fff;
}

#topmenu .error {
    background: #eee;border: 0 !important;color: #aaa;
}

ul#topmenu,
ul#topmenu2,
ul.tabs {
    font-weight: bold;
    list-style-type: none;
    margin: 0;
    padding: 0;

}

ul#topmenu2 {
    margin: .25em .5em 0;
    height: 2em;
    clear: both;
}

ul#topmenu li,
ul#topmenu2 li {
    float: left;
    margin: 0;
    vertical-align: middle;
}

#topmenu img,
#topmenu2 img {
    margin-right: .5em;
    vertical-align: -3px;
}

.menucontainer {
    background-image: url(./themes/svg_gradient.php?from=ffffff&to=dcdcdc);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#dcdcdc));
background: -webkit-linear-gradient(top, #ffffff, #dcdcdc);
background: -moz-linear-gradient(top, #ffffff, #dcdcdc);
background: -ms-linear-gradient(top, #ffffff, #dcdcdc);
background: -o-linear-gradient(top, #ffffff, #dcdcdc);    border-top: 1px solid #aaa;
}

/* default tab styles */
.tabactive {
    background: #fff !important;
}

ul#topmenu2 a {
    display: block;
    margin: 7px 6px 7px;
    margin-left: 0;
    padding: 4px 10px;
    white-space: nowrap;
    border: 1px solid #ddd;
    border-radius: 20px;
    -moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    background: #f2f2f2;

}

fieldset.caution a {
    color: #FF0000;
}
fieldset.caution a:hover {
    color: #fff;
    background-color: #FF0000;
}

#topmenu {
    margin-top: .5em;
    padding: .1em .3em;
}

ul#topmenu ul {
    -moz-box-shadow: 1px 1px 6px #ddd;
    -webkit-box-shadow: 2px 2px 3px #666;
    box-shadow: 2px 2px 3px #666;
}

ul#topmenu ul.only {
    left: 0;
}

ul#topmenu > li {
    border-right: 1px solid #fff;
    border-left: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
}

ul#topmenu > li:first-child {
    border-left: 0;
}

/* default tab styles */
ul#topmenu a,
ul#topmenu span {
    padding: .6em;
}

ul#topmenu ul a {
    border-width: 1pt 0 0 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
}

ul#topmenu ul li:first-child a {
    border-width: 0;
}

/* enabled hover/active tabs */
ul#topmenu > li > a:hover,
ul#topmenu > li > .tabactive {
    text-decoration: none;
}

ul#topmenu ul a:hover,
ul#topmenu ul .tabactive {
    text-decoration: none;
}

ul#topmenu a.tab:hover,
ul#topmenu .tabactive {
    /* background-color: #fff;  */
}

ul#topmenu2 a.tab:hover,
ul#topmenu2 a.tabactive {
    background-color: #E5E5E5;
    border-radius: .3em;
    -moz-border-radius: .3em;
    -webkit-border-radius: .3em;
    text-decoration: none;
}

/* to be able to cancel the bottom border, use <li class="active"> */
ul#topmenu > li.active {
    /* border-bottom: 0pt solid #fff; */
    border-right: 0;
    border-bottom-color: #fff;
}
/* end topmenu */

/* zoom search */
div#dataDisplay input,
div#dataDisplay select {
    margin: 0;
    margin-right: .5em;
}
div#dataDisplay th {
    line-height: 2em;
}
table#tableFieldsId {
    width: 100%;
}

/* Calendar */
table.calendar {
    width: 100%;
}
table.calendar td {
    text-align: center;
}
table.calendar td a {
    display: block;
}

table.calendar td a:hover {
    background-color: #CCFFCC;
}

table.calendar th {
    background-color: #D3DCE3;
}

table.calendar td.selected {
    background-color: #FFCC99;
}

img.calendar {
    border: none;
}
form.clock {
    text-align: center;
}
/* end Calendar */


/* table stats */
div#tablestatistics table {
    float: left;
    margin-bottom: .5em;
    margin-right: 1.5em;
    margin-top: .5em;
    min-width: 16em;
}

/* end table stats */


/* server privileges */
#tableuserrights td,
#tablespecificuserrights td,
#tabledatabases td {
    vertical-align: middle;
}
/* end server privileges */


/* Heading */
#topmenucontainer {
    padding-right: 1em;
    width: 100%;
}

#serverinfo {
    background: #888;
    padding: .3em .9em;
    padding-left: 2.2em;
    text-shadow: 0 1px 0 #000;
    width: 10000px;
    overflow: hidden;
}

#serverinfo .item {
    white-space: nowrap;
    color: #fff;
}

#page_nav_icons {
    position: fixed;
    top: 0;
    right: 0;
    z-index: 99;
    padding: .25em 0;
}

#goto_pagetop, #lock_page_icon, #page_settings_icon {
    padding: .25em;
    background: #888;
}

#page_settings_icon {
    cursor: pointer;
    display: none;
}

#page_settings_modal {
    display: none;
}

#pma_navigation_settings {
    display: none;
}

#span_table_comment {
    font-weight: bold;
    font-style: italic;
    white-space: nowrap;
    margin-left: 10px;
    color: #D6D6D6;
    text-shadow: none;
}

#serverinfo img {
    margin: 0 .1em 0;
    margin-left: .2em;
}


#textSQLDUMP {
    width: 95%;
    height: 95%;
    font-family: Consolas, "Courier New", Courier, mono;
    font-size: 110%;
}

#TooltipContainer {
    position: absolute;
    z-index: 99;
    width: 20em;
    height: auto;
    overflow: visible;
    visibility: hidden;
    background-color: #ffffcc;
    color: #006600;
    border: .1em solid #000;
    padding: .5em;
}

/* user privileges */
#fieldset_add_user_login div.item {
    border-bottom: 1px solid silver;
    padding-bottom: .3em;
    margin-bottom: .3em;
}

#fieldset_add_user_login label {
    float: left;
    display: block;
    width: 10em;
    max-width: 100%;
    text-align: right;
    padding-right: .5em;
}

#fieldset_add_user_login span.options #select_pred_username,
#fieldset_add_user_login span.options #select_pred_hostname,
#fieldset_add_user_login span.options #select_pred_password {
    width: 100%;
    max-width: 100%;
}

#fieldset_add_user_login span.options {
    float: left;
    display: block;
    width: 12em;
    max-width: 100%;
    padding-right: .5em;
}

#fieldset_add_user_login input {
    width: 12em;
    clear: right;
    max-width: 100%;
}

#fieldset_add_user_login span.options input {
    width: auto;
}

#fieldset_user_priv div.item {
    float: left;
    width: 9em;
    max-width: 100%;
}

#fieldset_user_priv div.item div.item {
    float: none;
}

#fieldset_user_priv div.item label {
    white-space: nowrap;
}

#fieldset_user_priv div.item select {
    width: 100%;
}

#fieldset_user_global_rights fieldset {
    float: left;
}

#fieldset_user_group_rights fieldset {
    float: left;
}

#fieldset_user_global_rights>legend input {
    margin-left: 2em;
}
/* end user privileges */


/* serverstatus */

.linkElem:hover {
    text-decoration: underline;
    color: #235a81;
    cursor: pointer;
}

h3#serverstatusqueries span {
    font-size: 60%;
    display: inline;
}

.buttonlinks {
    float: right;
    white-space: nowrap;
}

/* Also used for the variables page */
fieldset#tableFilter {
    margin-bottom: 1em;
}

div#serverStatusTabs {
    margin-top: 1em;
}

caption a.top {
    float: right;
}

div#serverstatusquerieschart {
    float: left;
    width: 500px;
    height: 350px;
    padding-left: 30px;
}

table#serverstatusqueriesdetails,
table#serverstatustraffic {
    float: left;
}

table#serverstatusqueriesdetails th {
    min-width: 35px;
}

table#serverstatusvariables {
    width: 100%;
    margin-bottom: 1em;
}
table#serverstatusvariables .name {
    width: 18em;
    white-space: nowrap;
}
table#serverstatusvariables .value {
    width: 6em;
}
table#serverstatusconnections {
    float: left;
    margin-left: 30px;
}

div#serverstatus table tbody td.descr a,
div#serverstatus table .tblFooters a {
    white-space: nowrap;
}

div.liveChart {
    clear: both;
    min-width: 500px;
    height: 400px;
    padding-bottom: 80px;
}

#addChartDialog input[type="text"] {
    margin: 0;
    padding: 3px;
}

div#chartVariableSettings {
    border: 1px solid #ddd;
    background-color: #E6E6E6;
    margin-left: 10px;
}

table#chartGrid td {
    padding: 3px;
    margin: 0;
}

table#chartGrid div.monitorChart {
    background: #EBEBEB;
    overflow: hidden;
    border: none;
}

div.tabLinks {
    margin-left: 0.3em;
    float: left;
    padding: 5px 0;
}

div.tabLinks a, div.tabLinks label {
    margin-right: 7px;
}

div.tabLinks .icon {
    margin: -0.2em 0.3em 0 0;
}

.popupContent {
    display: none;
    position: absolute;
    border: 1px solid #CCC;
    margin: 0;
    padding: 3px;
    -moz-box-shadow: 2px 2px 3px #666;
    -webkit-box-shadow: 2px 2px 3px #666;
    box-shadow: 2px 2px 3px #666;
    background-color: #fff;
    z-index: 2;
}

div#logTable {
    padding-top: 10px;
    clear: both;
}

div#logTable table {
    width: 100%;
}

div#queryAnalyzerDialog {
    min-width: 700px;
}

div#queryAnalyzerDialog div.CodeMirror-scroll {
    height: auto;
}

div#queryAnalyzerDialog div#queryProfiling {
    height: 300px;
}

div#queryAnalyzerDialog td.explain {
    width: 250px;
}

div#queryAnalyzerDialog table.queryNums {
    display: none;
    border: 0;
    text-align: left;
}

.smallIndent {
    padding-left: 7px;
}

/* end serverstatus */

/* server variables */
#serverVariables {
    table-layout: fixed;
    width: 100%;
}
#serverVariables .var-row > td {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 2em;
}
#serverVariables .var-header {
    color: #000;
    background: #f3f3f3;
    background-image: url(./themes/svg_gradient.php?from=ffffff&to=cccccc);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#cccccc));
background: -webkit-linear-gradient(top, #ffffff, #cccccc);
background: -moz-linear-gradient(top, #ffffff, #cccccc);
background: -ms-linear-gradient(top, #ffffff, #cccccc);
background: -o-linear-gradient(top, #ffffff, #cccccc);    font-weight: bold;
}
#serverVariables .var-header {
    text-align: left;
}
#serverVariables .var-row {
    padding: 0.5em;
    min-height: 18px;
}
#serverVariables .var-action {
    width: 120px;
}
#serverVariables .var-name {
    float: left;
    font-weight: bold;
}
#serverVariables .var-name.session {
    font-weight: normal;
    font-style: italic;
}
#serverVariables .var-value {
    width: 50%;
    float: right;
    text-align: right;
}
#serverVariables .var-doc {
    overflow:visible;
    float: right;
}

/* server variables editor */
#serverVariables .editLink {
    padding-right: 1em;
    float: left;
    font-family: sans-serif;
}
#serverVariables .serverVariableEditor {
    width: 100%;
    overflow: hidden;
}
#serverVariables .serverVariableEditor input {
    width: 100%;
    margin: 0 0.5em;
    box-sizing: border-box;
    -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    height: 2.2em;
}
#serverVariables .serverVariableEditor div {
    display: block;
    overflow: hidden;
    padding-right: 1em;
}
#serverVariables .serverVariableEditor a {
    float: right;
    margin: 0 0.5em;
    line-height: 2em;
}
/* end server variables */


p.notice {
    margin: 1.5em 0;
    border: 1px solid #000;
    background-repeat: no-repeat;
            background-position: 10px 50%;
        padding: 10px 10px 10px 25px;
        -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0 1px 2px #fff inset;
    -webkit-box-shadow: 0 1px 2px #fff inset;
    box-shadow: 0 1px 2px #fff inset;
    background: #555;
    color: #d4fb6a;
}

p.notice a {
    color: #fff;
    text-decoration: underline;
}

/* profiling */

div#profilingchart {
    width: 850px;
    height: 370px;
    float: left;
}

#profilingchart .jqplot-highlighter-tooltip{
    top: auto !important;
    left: 11px;
    bottom:24px;
}
/* end profiling */

/* table charting */
#resizer {
    border: 1px solid silver;
}
#inner-resizer { /* make room for the resize handle */
    padding: 10px;
}
.chartOption {
    float: left;
    margin-right: 40px;
}
/* end table charting */

/* querybox */

#togglequerybox {
    margin: 0 10px;
}

#serverstatus h3
{
    margin: 15px 0;
    font-weight: normal;
    color: #999;
    font-size: 1.7em;
}
#sectionlinks {
    padding: 16px;
    background: #f3f3f3;
    border: 1px solid #aaa;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    box-shadow: 0 1px 1px #fff inset;
    -webkit-box-shadow: 0 1px 1px #fff inset;
    -moz-box-shadow: 0 1px 1px #fff inset;
}
#sectionlinks a,
.buttonlinks a,
a.button {
    font-weight: bold;
    text-shadow: 0 1px 0 #fff;
    line-height: 35px;
    margin-left: 7px;
    border: 1px solid #aaa;
    padding: 3px 7px;
    color: #111 !important;
    text-decoration: none;
    background: #ddd;
    white-space: nowrap;
    border-radius: 20px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    background-image: url(./themes/svg_gradient.php?from=f8f8f8&to=d8d8d8);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#d8d8d8));
background: -webkit-linear-gradient(top, #f8f8f8, #d8d8d8);
background: -moz-linear-gradient(top, #f8f8f8, #d8d8d8);
background: -ms-linear-gradient(top, #f8f8f8, #d8d8d8);
background: -o-linear-gradient(top, #f8f8f8, #d8d8d8);}
#sectionlinks a:hover,
.buttonlinks a:hover,
a.button:hover {
    background-image: url(./themes/svg_gradient.php?from=ffffff&to=dddddd);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#dddddd));
background: -webkit-linear-gradient(top, #ffffff, #dddddd);
background: -moz-linear-gradient(top, #ffffff, #dddddd);
background: -ms-linear-gradient(top, #ffffff, #dddddd);
background: -o-linear-gradient(top, #ffffff, #dddddd);}

div#sqlquerycontainer {
    float: left;
    width: 69%;
    /* height: 15em; */
}

div#tablefieldscontainer {
    float: right;
    width: 29%;
    margin-top: -20px;
    /* height: 15em; */
}

div#tablefieldscontainer select {
    width: 100%;
    background: #fff;
    /* height: 12em; */
}

textarea#sqlquery {
    width: 100%;
    /* height: 100%; */
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    border: 1px solid #aaa;
    padding: 5px;
    font-family: inherit;
}
textarea#sql_query_edit {
    height: 7em;
    width: 95%;
    display: block;
}
div#queryboxcontainer div#bookmarkoptions {
    margin-top: .5em;
}
/* end querybox */

/* main page */
#maincontainer {
    /* background-image: url(./themes/pmahomme/img/logo_right.png); */
    /* background-position: right bottom; */
    /* background-repeat: no-repeat; */
}

#mysqlmaininformation,
#pmamaininformation {
    float: left;
    width: 49%;
}

#maincontainer ul {
    list-style-type: disc;
    vertical-align: middle;
}

#maincontainer li {
    margin-bottom: .3em;
}

#full_name_layer {
    position: absolute;
    padding: 2px;
    margin-top: -3px;
    z-index: 801;

    border-radius: 3px;
    border: solid 1px #888;
    background: #fff;

}
/* end main page */


/* iconic view for ul items */

li.no_bullets {
    list-style-type:none !important;
    margin-left: -25px !important;      //align with other list items which have bullets
}

/* end iconic view for ul items */

#body_browse_foreigners {
    background: #f3f3f3;
    margin: .5em .5em 0 .5em;
}

#bodythemes {
    width: 500px;
    margin: auto;
    text-align: center;
}

#bodythemes img {
    border: .1em solid #000;
}

#bodythemes a:hover img {
    border: .1em solid red;
}

#fieldset_select_fields {
    float: left;
}

#selflink {
    clear: both;
    display: block;
    margin-top: 1em;
    margin-bottom: 1em;
    width: 98%;
    margin-left: 1%;
    border-top: .1em solid silver;
    text-align: right;
}

#table_innodb_bufferpool_usage,
#table_innodb_bufferpool_activity {
    float: left;
}

#div_mysql_charset_collations table {
    float: left;
}

#div_mysql_charset_collations table th,
#div_mysql_charset_collations table td {
    padding: 0.4em;
}

#div_mysql_charset_collations table th#collationHeader {
    width: 35%;
}

.operations_half_width {
    width: 48%;
    float: left;
}
.operations_half_width input[type=text],
.operations_half_width input[type=password],
.operations_half_width input[type=number],
.operations_half_width select {
    width: 95%;
}
.operations_half_width input[type=text].halfWidth,
.operations_half_width input[type=password].halfWidth,
.operations_half_width input[type=number].halfWidth,
.operations_half_width select.halfWidth {
    width: 40%;
}
.operations_half_width ul {
    list-style-type: none;
    padding: 0;
}
.operations_full_width {
    width: 100%;
    clear: both;
}

#qbe_div_table_list {
    float: left;
}

#qbe_div_sql_query {
    float: left;
}

label.desc {
    width: 30em;
    float: left;
}

label.desc sup {
    position: absolute;
}

code.sql,
div.sqlvalidate {
    display: block;
    padding: 1em;
    margin-top: 0;
    margin-bottom: 0;
    max-height: 10em;
    overflow: auto;
    direction: ltr;
}

.result_query div.sqlOuter {
    background: #E5E5E5;
}

.result_query .success, .result_query .error {
    margin-bottom: 0;
    border-bottom: none !important;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    padding-bottom: 5px;
}

#PMA_slidingMessage code.sql,
div.sqlvalidate {
    background: #E5E5E5;
}

#main_pane_left {
    width: 60%;
    min-width: 260px;
    float: left;
    padding-top: 1em;
}

#main_pane_right {
    overflow: hidden;
    min-width: 160px;
    padding-top: 1em;
    padding-left: 1em;
    padding-right: .5em;
}

.group {

    border: 1px solid #999;
    background: #f3f3f3;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-box-shadow: 2px 2px 5px #ccc;
    -webkit-box-shadow: 2px 2px 5px #ccc;
    box-shadow: 2px 2px 5px #ccc;
    margin-bottom: 1em;
    padding-bottom: 1em;
}

.group h2 {
    background-color: #bbb;
    padding: .1em .3em;
    margin-top: 0;
    color: #fff;
    font-size: 1.6em;
    font-weight: normal;
    text-shadow: 0 1px 0 #777;
    -moz-box-shadow: 1px 1px 15px #999 inset;
    -webkit-box-shadow: 1px 1px 15px #999 inset;
    box-shadow: 1px 1px 15px #999 inset;
}

.group-cnt {
    padding: 0;
    padding-left: .5em;
    display: inline-block;
    width: 98%;
}

textarea#partitiondefinition {
    height: 3em;
}


/* for elements that should be revealed only via js */
.hide {
    display: none;
}

#list_server {
    list-style-type: none;
    padding: 0;
}

/**
  *  Progress bar styles
  */
div.upload_progress
{
    width: 400px;
    margin: 3em auto;
    text-align: center;
}

div.upload_progress_bar_outer
{
    border: 1px solid #000;
    width: 202px;
    position: relative;
    margin: 0 auto 1em;
    color: #444;
}

div.upload_progress_bar_inner
{
    background-color: #ddd;
    width: 0;
    height: 12px;
    margin: 1px;
    overflow: hidden;
    color: #000;
    position: relative;
}

div.upload_progress_bar_outer div.percentage
{
    position: absolute;
    top: 0;
    left: 0;
    width: 202px;
}

div.upload_progress_bar_inner div.percentage
{
    top: -1px;
    left: -1px;
}

div#statustext {
    margin-top: .5em;
}

table#serverconnection_src_remote,
table#serverconnection_trg_remote,
table#serverconnection_src_local,
table#serverconnection_trg_local  {
  float: left;
}
/**
  *  Validation error message styles
  */
input[type=text].invalid_value,
input[type=password].invalid_value,
input[type=number].invalid_value,
input[type=date].invalid_value,
select.invalid_value,
.invalid_value {
    background: #FFCCCC;
}

/**
  *  Ajax notification styling
  */
 .ajax_notification {
    top: 0;           /** The notification needs to be shown on the top of the page */
    position: fixed;
    margin-top: 0;
    margin-right: auto;
    margin-bottom: 0;
    margin-left: auto;
    padding: 5px;   /** Keep a little space on the sides of the text */
    width: 350px;

    z-index: 1100;      /** If this is not kept at a high z-index, the jQueryUI modal dialogs (z-index: 1000) might hide this */
    text-align: center;
    display: inline;
    left: 0;
    right: 0;
    background-image: url(./themes/pmahomme/img/ajax_clock_small.gif);
    background-repeat: no-repeat;
    background-position: 2%;
    border: 1px solid #e2b709;
 }

/* additional styles */
.ajax_notification {
    margin-top: 200px;
    background: #ffe57e;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    box-shadow: 0 5px 90px #888;
    -moz-box-shadow: 0 5px 90px #888;
    -webkit-box-shadow: 0 5px 90px #888;
}

#loading_parent {
    /** Need this parent to properly center the notification division */
    position: relative;
    width: 100%;
 }
/**
  * Export and Import styles
  */

.export_table_list_container {
    display: inline-block;
    max-height: 20em;
    overflow-y: scroll;
}

.export_table_select th {
    text-align: center;
    vertical-align: middle;
}

.export_table_select .all {
    font-weight: bold;
    border-bottom: 1px solid black;
}

.export_structure, .export_data {
    text-align: center;
}

.export_table_name {
    vertical-align: middle;
}

.exportoptions h3,
.importoptions h3 {
    border-bottom: 1px #999 solid;
    font-size: 110%;
}

.exportoptions ul,
.importoptions ul,
.format_specific_options ul {
    list-style-type: none;
    margin-bottom: 15px;
}

.exportoptions li,
.importoptions li {
    margin: 7px;
}
.exportoptions label,
.importoptions label,
.exportoptions p,
.importoptions p {
    margin: 5px;
    float: none;
}

#csv_options label.desc,
#ldi_options label.desc,
#latex_options label.desc,
#output label.desc {
    float: left;
    width: 15em;
}

.exportoptions,
.importoptions {
    margin: 20px 30px 30px;
    margin-left: 10px;
}

.exportoptions #buttonGo,
.importoptions #buttonGo {
    font-weight: bold;
    margin-left: 14px;
    border: 1px solid #aaa;
    padding: 5px 12px;
    color: #111;
    text-decoration: none;

    border-radius: 12px;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;

    text-shadow: 0 1px 0 #fff;

    background-image: url(./themes/svg_gradient.php?from=ffffff&to=cccccc);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#cccccc));
background: -webkit-linear-gradient(top, #ffffff, #cccccc);
background: -moz-linear-gradient(top, #ffffff, #cccccc);
background: -ms-linear-gradient(top, #ffffff, #cccccc);
background: -o-linear-gradient(top, #ffffff, #cccccc);    cursor: pointer;
}

.format_specific_options h3 {
    margin: 10px 0 0;
    margin-left: 10px;
    border: 0;
}

.format_specific_options {
    border: 1px solid #999;
    margin: 7px 0;
    padding: 3px;
}

p.desc {
    margin: 5px;
}

/**
  * Export styles only
  */
select#db_select,
select#table_select {
    width: 400px;
}

.export_sub_options {
    margin: 20px 0 0;
    margin-left: 30px;
}

.export_sub_options h4 {
    border-bottom: 1px #999 solid;
}

.export_sub_options li.subgroup {
    display: inline-block;
    margin-top: 0;
}

.export_sub_options li {
    margin-bottom: 0;
}

#output_quick_export {
    display: none;
}
/**
 * Import styles only
 */

.importoptions #import_notification {
    margin: 10px 0;
    font-style: italic;
}

input#input_import_file {
    margin: 5px;
}

.formelementrow {
    margin: 5px 0 5px 0;
}

#popup_background {
    display: none;
    position: fixed;
    _position: absolute; /* hack for IE6 */
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: #000;
    z-index: 1000;
    overflow: hidden;
}

/**
 * Table structure styles
 */
#fieldsForm ul.table-structure-actions {
    margin: 0;
    padding: 0;
    list-style: none;
}
#fieldsForm ul.table-structure-actions li {
    float: left;
    margin-right: 0.3em; /* same as padding of "table td" */
}
#fieldsForm ul.table-structure-actions .submenu li {
    padding: 0;
    margin: 0;
}
#fieldsForm ul.table-structure-actions .submenu li span {
    padding: 0.3em;
    margin: 0.1em;
}
#structure-action-links a {
    margin-right: 1em;
}
#addColumns input[type="radio"] {
    margin: 3px 0 0;
    margin-left: 1em;
}
/**
 * Indexes
 */
#index_frm .index_info input,
#index_frm .index_info select {
    width: 14em;
    margin: 0;
    box-sizing: border-box;
    -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}

#index_frm .index_info div {
    padding: .2em 0;
}

#index_frm .index_info .label {
    float: left;
    min-width: 12em;
}

#index_frm .slider {
    width: 10em;
    margin: .6em;
    float: left;
}

#index_frm .add_fields {
    float: left;
}

#index_frm .add_fields input {
    margin-left: 1em;
}

#index_frm input {
    margin: 0;
}

#index_frm td {
    vertical-align: middle;
}

table#index_columns {
    width: 100%;
}

table#index_columns select {
    width: 85%;
    float: right;
}

#move_columns_dialog div {
    padding: 1em;
}

#move_columns_dialog ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

#move_columns_dialog li {
    background: #D3DCE3;
    border: 1px solid #aaa;
    color: #000;
    font-weight: bold;
    margin: .4em;
    padding: .2em;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
}

/* config forms */
.config-form ul.tabs {
    margin: 1.1em .2em 0;
    padding: 0 0 .3em 0;
    list-style: none;
    font-weight: bold;
}

.config-form ul.tabs li {
    float: left;
    margin-bottom: -1px;
}

.config-form ul.tabs li a {
    display: block;
    margin: .1em .2em 0;
    white-space: nowrap;
    text-decoration: none;
    border: 1px solid #D5D5D5;
    border-bottom: 1px solid #aaa;
}

.config-form ul.tabs li a {
    padding: 7px 10px;
    -webkit-border-radius: 5px 5px 0 0;
    -moz-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
    background: #f2f2f2;
    color: #555;
    text-shadow: 0 1px 0 #fff;
}

.config-form ul.tabs li a:hover,
.config-form ul.tabs li a:active {
    background: #e5e5e5;
}

.config-form ul.tabs li.active a {
    background-color: #fff;
    margin-top: 1px;
    color: #000;
    text-shadow: none;
    border-color: #aaa;
    border-bottom: 1px solid #fff;
}

.config-form fieldset {
    margin-top: 0;
    padding: 0;
    clear: both;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}

.config-form legend {
    display: none;
}

.config-form fieldset p {
    margin: 0;
    padding: .5em;
    background: #fff;
    border-top: 0;
}

.config-form fieldset .errors { /* form error list */
    margin: 0 -2px 1em;
    padding: .5em 1.5em;
    background: #FBEAD9;
    border: 0 #C83838 solid;
    border-width: 1px 0;
    list-style: none;
    font-family: sans-serif;
    font-size: small;
}

.config-form fieldset .inline_errors { /* field error list */
    margin: .3em .3em .3em;
    margin-left: 0;
    padding: 0;
    list-style: none;
    color: #9A0000;
    font-size: small;
}

.config-form fieldset th {
    padding: .3em .3em .3em;
    padding-left: .5em;
    text-align: left;
    vertical-align: top;
    width: 40%;
    background: transparent;
    filter: none;
}

.config-form fieldset .doc,
.config-form fieldset .disabled-notice {
    margin-left: 1em;
}

.config-form fieldset .disabled-notice {
    font-size: 80%;
    text-transform: uppercase;
    color: #E00;
    cursor: help;
}

.config-form fieldset td {
    padding-top: .3em;
    padding-bottom: .3em;
    vertical-align: top;
}

.config-form fieldset th small {
    display: block;
    font-weight: normal;
    font-family: sans-serif;
    font-size: x-small;
    color: #444;
}

.config-form fieldset th,
.config-form fieldset td {
    border-top: 1px #D5D5D5 solid;
    border-right: none;
}

fieldset .group-header th {
    background: #D5D5D5;
}

fieldset .group-header + tr th {
    padding-top: .6em;
}

fieldset .group-field-1 th,
fieldset .group-header-2 th {
    padding-left: 1.5em;
}

fieldset .group-field-2 th,
fieldset .group-header-3 th {
    padding-left: 3em;
}

fieldset .group-field-3 th {
    padding-left: 4.5em;
}

fieldset .disabled-field th,
fieldset .disabled-field th small,
fieldset .disabled-field td {
    color: #666;
    background-color: #ddd;
}

.config-form .lastrow {
    border-top: 1px #000 solid;
}

.config-form .lastrow {
    background: #D3DCE3;
    padding: .5em;
    text-align: center;
}

.config-form .lastrow input {
    font-weight: bold;
}

/* form elements */

.config-form span.checkbox {
    padding: 2px;
    display: inline-block;
}

.config-form .custom { /* customized field */
    background: #FFC;
}

.config-form span.checkbox.custom {
    padding: 1px;
    border: 1px #EDEC90 solid;
    background: #FFC;
}

.config-form .field-error {
    border-color: #A11 !important;
}

.config-form input[type="text"],
.config-form input[type="password"],
.config-form input[type="number"],
.config-form select,
.config-form textarea {
    border: 1px #A7A6AA solid;
    height: auto;
}

.config-form input[type="text"]:focus,
.config-form input[type="password"]:focus,
.config-form input[type="number"]:focus,
.config-form select:focus,
.config-form textarea:focus {
    border: 1px #6676FF solid;
    background: #F7FBFF;
}

.config-form .field-comment-mark {
    font-family: serif;
    color: #007;
    cursor: help;
    padding: 0 .2em;
    font-weight: bold;
    font-style: italic;
}

.config-form .field-comment-warning {
    color: #A00;
}

/* error list */
.config-form dd {
    margin-left: .5em;
}

.config-form dd:before {
    content: "\25B8  ";
}

.click-hide-message {
    cursor: pointer;
}

.prefsmanage_opts {
    margin-left: 2em;
}

#prefs_autoload {
    margin-bottom: .5em;
    margin-left: .5em;
}

#placeholder .button {
    position: absolute;
    cursor: pointer;
}

#placeholder div.button {
    font-size: smaller;
    color: #999;
    background-color: #eee;
    padding: 2px;
}

.wrapper {
    float: left;
    margin-bottom: 1.5em;
}
.toggleButton {
    position: relative;
    cursor: pointer;
    font-size: .8em;
    text-align: center;
    line-height: 1.4em;
    height: 1.55em;
    overflow: hidden;
    border-right: .1em solid #888;
    border-left: .1em solid #888;
    -webkit-border-radius: .3em;
    -moz-border-radius: .3em;
    border-radius: .3em;
}
.toggleButton table,
.toggleButton td,
.toggleButton img {
    padding: 0;
    position: relative;
}
.toggleButton .container {
    position: absolute;
}
.toggleButton .container td {
    background-image: none;
    background: none;
}
.toggleButton .toggleOn {
    color: #fff;
    padding: 0 1em;
    text-shadow: 0 0 .2em #000;
}
.toggleButton .toggleOff {
    padding: 0 1em;
}

.doubleFieldset fieldset {
    width: 48%;
    float: left;
    padding: 0;
}
.doubleFieldset fieldset.left {
    margin-right: 1%;
}
.doubleFieldset fieldset.right {
    margin-left: 1%;
}
.doubleFieldset legend {
    margin-left: 1.5em;
}
.doubleFieldset div.wrap {
    padding: 1.5em;
}

#table_name_col_no_outer {
    margin-top: 45px;
}

#table_name_col_no {
    position: fixed;
    top: 55px;
    width: 100%;
    background: #ffffff;
}

#table_columns input[type="text"],
#table_columns input[type="password"],
#table_columns input[type="number"],
#table_columns select {
    width: 10em;
    box-sizing: border-box;
    -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}

#placeholder {
    position: relative;
    border: 1px solid #aaa;
    float: right;
    overflow: hidden;
}

.placeholderDrag {
    cursor: move;
}

#placeholder .button {
    position: absolute;
}

#left_arrow {
    left: 8px;
    top: 26px;
}

#right_arrow {
    left: 26px;
    top: 26px;
}

#up_arrow {
    left: 17px;
    top: 8px;
}

#down_arrow {
    left: 17px;
    top: 44px;
}

#zoom_in {
    left: 17px;
    top: 67px;
}

#zoom_world {
    left: 17px;
    top: 85px;
}

#zoom_out {
    left: 17px;
    top: 103px;
}

.colborder {
    cursor: col-resize;
    height: 100%;
    margin-left: -6px;
    position: absolute;
    width: 5px;
}

.colborder_active {
    border-right: 2px solid #a44;
}

.pma_table td {
    position: static;
}

.pma_table th.draggable span,
.pma_table tbody td span {
    display: block;
    overflow: hidden;
}

.pma_table tbody td span code span {
    display: inline;
}

.pma_table th.draggable.right span {
    margin-right: 0px;
}

.pma_table th.draggable span {
    margin-right: 10px;
}

.modal-copy input {
    display: block;
    width: 100%;
    margin-top: 1.5em;
    padding: .3em 0;
}

.cRsz {
    position: absolute;
}

.cCpy {
    background: #333;
    color: #FFF;
    font-weight: bold;
    margin: .1em;
    padding: .3em;
    position: absolute;
    text-shadow: -1px -1px #000;

    -moz-box-shadow: 0 0 .7em #000;
    -webkit-box-shadow: 0 0 .7em #000;
    box-shadow: 0 0 .7em #000;
    -moz-border-radius: .3em;
    -webkit-border-radius: .3em;
    border-radius: .3em;
}

.cPointer {
    background: url(./themes/pmahomme/img/col_pointer.png);
    height: 20px;
    margin-left: -5px;  /* must be minus half of its width */
    margin-top: -10px;
    position: absolute;
    width: 10px;
}

.tooltip {
    background: #333 !important;
    opacity: .8 !important;
    border: 1px solid #000 !important;
    -moz-border-radius: .3em !important;
    -webkit-border-radius: .3em !important;
    border-radius: .3em !important;
    text-shadow: -1px -1px #000 !important;
    font-size: .8em !important;
    font-weight: bold !important;
    padding: 1px 3px !important;
}

.tooltip * {
    background: none !important;
    color: #FFF !important;
}

.cDrop {
    left: 0;
    position: absolute;
    top: 0;
}

.coldrop {
    background: url(./themes/pmahomme/img/col_drop.png);
    cursor: pointer;
    height: 16px;
    margin-left: .3em;
    margin-top: .3em;
    position: absolute;
    width: 16px;
}

.coldrop:hover,
.coldrop-hover {
    background-color: #999;
}

.cList {
    background: #EEE;
    border: solid 1px #999;
    position: absolute;
    -moz-box-shadow: 0 .2em .5em #333;
    -webkit-box-shadow: 0 .2em .5em #333;
    box-shadow: 0 .2em .5em #333;
}

.cList .lDiv div {
    padding: .2em .5em .2em;
    padding-left: .2em;
}

.cList .lDiv div:hover {
    background: #DDD;
    cursor: pointer;
}

.cList .lDiv div input {
    cursor: pointer;
}

.showAllColBtn {
    border-bottom: solid 1px #999;
    border-top: solid 1px #999;
    cursor: pointer;
    font-size: .9em;
    font-weight: bold;
    padding: .35em 1em;
    text-align: center;
}

.showAllColBtn:hover {
    background: #DDD;
}

.turnOffSelect {
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  user-select: none;
}

.navigation {
    margin: .8em 0;

    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;

    background-image: url(./themes/svg_gradient.php?from=eeeeee&to=cccccc);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#eeeeee), to(#cccccc));
background: -webkit-linear-gradient(top, #eeeeee, #cccccc);
background: -moz-linear-gradient(top, #eeeeee, #cccccc);
background: -ms-linear-gradient(top, #eeeeee, #cccccc);
background: -o-linear-gradient(top, #eeeeee, #cccccc);}

.navigation td {
    margin: 0;
    padding: 0;
    vertical-align: middle;
    white-space: nowrap;
}

.navigation_separator {
    color: #999;
    display: inline-block;
    font-size: 1.5em;
    text-align: center;
    height: 1.4em;
    width: 1.2em;
    text-shadow: 1px 0 #FFF;
}

.navigation input[type=submit] {
    background: none;
    border: 0;
    filter: none;
    margin: 0;
    padding: .8em .5em;

    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
}

.navigation input[type=submit]:hover,
.navigation input.edit_mode_active {
    color: #fff;
    cursor: pointer;
    text-shadow: none;

    background-image: url(./themes/svg_gradient.php?from=333333&to=555555);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#333333), to(#555555));
background: -webkit-linear-gradient(top, #333333, #555555);
background: -moz-linear-gradient(top, #333333, #555555);
background: -ms-linear-gradient(top, #333333, #555555);
background: -o-linear-gradient(top, #333333, #555555);}

.navigation select {
    margin: 0 .8em;
}

.cEdit {
    margin: 0;
    padding: 0;
    position: absolute;
}

.cEdit input[type=text] {
    background: #FFF;
    height: 100%;
    margin: 0;
    padding: 0;
}

.cEdit .edit_area {
    background: #FFF;
    border: 1px solid #999;
    min-width: 10em;
    padding: .3em .5em;
}

.cEdit .edit_area select,
.cEdit .edit_area textarea {
    width: 97%;
}

.cEdit .cell_edit_hint {
    color: #555;
    font-size: .8em;
    margin: .3em .2em;
}

.cEdit .edit_box {
    overflow: hidden;
    padding: 0;
    margin: 0;
}

.cEdit .edit_box_posting {
    background: #FFF url(./themes/pmahomme/img/ajax_clock_small.gif) no-repeat right center;
    padding-right: 1.5em;
}

.cEdit .edit_area_loading {
    background: #FFF url(./themes/pmahomme/img/ajax_clock_small.gif) no-repeat center;
    height: 10em;
}

.cEdit .goto_link {
    background: #EEE;
    color: #555;
    padding: .2em .3em;
}

.saving_edited_data {
    background: url(./themes/pmahomme/img/ajax_clock_small.gif) no-repeat left;
    padding-left: 20px;
}

.relationalTable select {
    width: 125px;
    margin-right: 5px;
}

/* css for timepicker */
.ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
.ui-timepicker-div dl { text-align: left; }
.ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; }
.ui-timepicker-div dl dd { margin: 0 10px 10px 85px; }
.ui-timepicker-div td { font-size: 90%; }
.ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }
.ui-timepicker-rtl { direction: rtl; }
.ui-timepicker-rtl dl { text-align: right; }
.ui-timepicker-rtl dl dd { margin: 0 65px 10px 10px; }

input.btn {
    color: #333;
    background-color: #D0DCE0;
}

body .ui-widget {
    font-size: 1em;
}

.ui-dialog fieldset legend a {
    color: #235A81;
}

/* over-riding jqplot-yaxis class */
.jqplot-yaxis {
    left:0 !important;
    min-width:25px;
    width:auto;
}
.jqplot-axis {
    overflow:hidden;
}

.report-data {
    height:13em;
    overflow:scroll;
    width:570px;
    border: solid 1px;
    background: white;
    padding: 2px;
}

.report-description {
    height:10em;
    width:570px;
}

div#page_content div#tableslistcontainer table.data {
    border-top: 0.1px solid #EEEEEE;
}

div#page_content form#db_search_form.ajax fieldset {
    margin-top: -0.3em;
}

div#page_content div#tableslistcontainer, div#page_content div.notice, div#page_content div.result_query {
    margin-top: 1em;
}

table.show_create {
    margin-top: 1em;
}

table.show_create td {
    border-right: 1px solid #bbb;
}

#alias_modal table th {
    vertical-align: middle;
    padding-left: 1em;
}

#alias_modal label.col-2 {
    min-width: 20%;
    display: inline-block;
}

#alias_modal select {
    width: 25%;
    margin-right: 2em;
}

#alias_modal label {
    font-weight: bold;
}

.ui-dialog {
    position: fixed;
}


.small_font {
    font-size: smaller;
}

/* Console styles */
#pma_console_container {
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
    z-index: 100;
}
#pma_console {
    position: relative;
    margin-left: 240px;
}
#pma_console .templates {
    display: none;
}
#pma_console .mid_text,
#pma_console .toolbar span {
    vertical-align: middle;
}
#pma_console .toolbar {
    position: relative;
    background: #ccc;
    border-top: solid 1px #aaa;
    cursor: n-resize;
}
#pma_console .toolbar.collapsed:not(:hover) {
    display: inline-block;
    border-top-right-radius: 3px;
    border-right: solid 1px #aaa;
}
#pma_console .toolbar.collapsed {
    cursor: default;
}
#pma_console .toolbar.collapsed>.button {
    display: none;
}
#pma_console .message span.text,
#pma_console .message span.action,
#pma_console .toolbar .button,
#pma_console .toolbar .text,
#pma_console .switch_button {
    padding: 0 3px;
    display: inline-block;
}
#pma_console .message span.action,
#pma_console .toolbar .button,
#pma_console .switch_button {
    cursor: pointer;
}
#pma_console .message span.action:hover,
#pma_console .toolbar .button:hover,
#pma_console .switch_button:hover,
#pma_console .toolbar .button.active {
    background: #ddd;
}
#pma_console .toolbar .text {
    font-weight: bold;
}
#pma_console .toolbar .button,
#pma_console .toolbar .text {
    margin-right: .4em;
}
#pma_console .toolbar .button,
#pma_console .toolbar .text {
    float: right;
}
#pma_console .content {
    overflow-x: hidden;
    overflow-y: auto;
    margin-bottom: -65px;
    border-top: solid 1px #aaa;
    background: #fff;
    padding-top: .4em;
}
#pma_console .content.console_dark_theme {
    background: #000;
    color: #fff;
}
#pma_console .content.console_dark_theme .CodeMirror-wrap {
    background: #000;
    color: #fff;
}
#pma_console .content.console_dark_theme .action_content {
    color: #000;
}
#pma_console .content.console_dark_theme .message {
    border-color: #373B41;
}
#pma_console .content.console_dark_theme .CodeMirror-cursor {
    border-color: #fff;
}
#pma_console .content.console_dark_theme .cm-keyword {
    color: #de935f;
}
#pma_console .message,
#pma_console .query_input {
    position: relative;
    font-family: Monaco, Consolas, monospace;
    cursor: text;
    margin: 0 10px .2em 1.4em;
}
#pma_console .message {
    border-bottom: solid 1px #ccc;
    padding-bottom: .2em;
}
#pma_console .message.expanded>.action_content {
    position: relative;
}
#pma_console .message:before,
#pma_console .query_input:before {
    left: -0.7em;
    position: absolute;
    content: ">";
}
#pma_console .query_input:before {
    top: -2px;
}
#pma_console .query_input textarea {
    width: 100%;
    height: 4em;
    resize: vertical;
}
#pma_console .message:hover:before {
    color: #7cf;
    font-weight: bold;
}
#pma_console .message.expanded:before {
    content: "]";
}
#pma_console .message.welcome:before {
    display: none;
}
#pma_console .message.failed:before,
#pma_console .message.failed.expanded:before,
#pma_console .message.failed:hover:before {
    content: "=";
    color: #944;
}
#pma_console .message.pending:before {
    opacity: .3;
}
#pma_console .message.collapsed>.query {
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
#pma_console .message.expanded>.query {
    display: block;
    white-space: pre;
    word-wrap: break-word;
}
#pma_console .message .text.targetdb,
#pma_console .message.collapsed .action.collapse,
#pma_console .message.expanded .action.expand,
#pma_console .message .action.requery,
#pma_console .message .action.profiling,
#pma_console .message .action.explain,
#pma_console .message .action.bookmark {
    display: none;
}
#pma_console .message.select .action.profiling,
#pma_console .message.select .action.explain,
#pma_console .message.history .text.targetdb,
#pma_console .message.successed .text.targetdb,
#pma_console .message.history .action.requery,
#pma_console .message.history .action.bookmark,
#pma_console .message.bookmark .action.requery,
#pma_console .message.bookmark .action.bookmark,
#pma_console .message.successed .action.requery,
#pma_console .message.successed .action.bookmark {
    display: inline-block;
}
#pma_console .message .action_content {
    position: absolute;
    bottom: 100%;
    background: #ccc;
    border: solid 1px #aaa;
    border-top-left-radius: 3px;
}
html.ie8 #pma_console .message .action_content {
    position: relative!important;
}
#pma_console .message.bookmark .text.targetdb,
#pma_console .message .text.query_time {
    margin: 0;
    display: inline-block;
}
#pma_console .message.failed .text.query_time,
#pma_console .message .text.failed {
    display: none;
}
#pma_console .message.failed .text.failed {
    display: inline-block;
}
#pma_console .message .text {
    background: #fff;
}
#pma_console .message.collapsed>.action_content {
    display: none;
}
#pma_console .message.collapsed:hover>.action_content {
    display: block;
}
#pma_console .message .bookmark_label {
    padding: 0 4px;
    top: 0;
    background: #369;
    color: #fff;
    border-radius: 3px;
}
#pma_console .message .bookmark_label.shared {
    background: #396;
}
#pma_console .message.expanded .bookmark_label {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
#pma_console .query_input {
    position: relative;
}
#pma_console .mid_layer {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    /* For support IE8, this layer doesn't use filter:opacity or opacity,
    js code will fade this layer opacity to 0.18(using animation) */
    background: #666;
    display: none;
    cursor: pointer;
    z-index: 200;
}
#pma_console .card {
    position: absolute;
    width: 94%;
    height: 100%;
    min-height: 48px;
    left: 100%;
    top: 0;
    border-left: solid 1px #999;
    z-index: 300;
    transition: left 0.2s;
    -ms-transition: left 0.2s;
    -webkit-transition: left 0.2s;
    -moz-transition: left 0.2s;
}
#pma_console .card.show {
    left: 6%;
    box-shadow: -2px 1px 4px -1px #999;
}

html.ie7 #pma_console .query_input {
    display: none;
}

#pma_bookmarks .content.add_bookmark,
#pma_console_options .content {
    padding: 4px 6px;
}
#pma_bookmarks .content.add_bookmark .options {
    margin-left: 1.4em;
    padding-bottom: .4em;
    margin-bottom: .4em;
    border-bottom: solid 1px #ccc;
}
#pma_bookmarks .content.add_bookmark .options button {
    margin: 0 7px;
    vertical-align: bottom;
}
#pma_bookmarks .content.add_bookmark input[type=text] {
    margin: 0;
    padding: 2px 4px;
}
#pma_console .button.hide,
#pma_console .message span.text.hide {
    display: none;
}
#debug_console.grouped .ungroup_queries,
#debug_console.ungrouped .group_queries {
    display: inline-block;
}
#debug_console.ungrouped .ungroup_queries,
#debug_console.ungrouped .sort_count,
#debug_console.grouped .group_queries {
    display: none;
}
#debug_console .count {
    margin-right: 8px;
}
#debug_console .show_trace .trace,
#debug_console .show_args .args {
    display: block;
}
#debug_console .hide_trace .trace,
#debug_console .hide_args .args,
#debug_console .show_trace .action.dbg_show_trace,
#debug_console .hide_trace .action.dbg_hide_trace,
#debug_console .traceStep.hide_args .action.dbg_hide_args,
#debug_console .traceStep.show_args .action.dbg_show_args {
    display: none;
}

#debug_console .traceStep:after,
#debug_console .trace.welcome:after,
#debug_console .debug>.welcome:after {
    content: "";
    display: table;
    clear: both;
}
#debug_console .debug_summary {
    float: left;
}
#debug_console .trace.welcome .time {
    float: right;
}
#debug_console .traceStep .file,
#debug_console .script_name {
    float: right;
}
#debug_console .traceStep .args pre {
    margin: 0;
}

/* Code mirror console style*/

.cm-s-pma .CodeMirror-code pre,
.cm-s-pma .CodeMirror-code {
    font-family: Monaco, Consolas, monospace;
}
.cm-s-pma .CodeMirror-measure>pre,
.cm-s-pma .CodeMirror-code>pre,
.cm-s-pma .CodeMirror-lines {
    padding: 0;
}
.cm-s-pma.CodeMirror {
    resize: none;
    height: auto;
    width: 100%;
    min-height: initial;
    max-height: initial;
}
.firefox .cm-s-pma.CodeMirror {
    font-size: 120%;
}
.cm-s-pma .CodeMirror-scroll {
    cursor: text;
}

/* PMA drop-improt style */

.pma_drop_handler {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.6);
    height: 100%;
    z-index: 999;
    color: white;
    font-size: 30pt;
    text-align: center;
    padding-top: 20%;
}

.pma_sql_import_status {
    display: none;
    position: fixed;
    bottom: 0;
    right: 25px;
    width: 400px;
    border: 1px solid #999;
    background: #f3f3f3;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-box-shadow: 2px 2px 5px #ccc;
    -webkit-box-shadow: 2px 2px 5px #ccc;
    box-shadow: 2px 2px 5px #ccc;
}

.pma_sql_import_status h2,
.pma_drop_result h2 {
    background-color: #bbb;
    padding: .1em .3em;
    margin-top: 0;
    margin-bottom: 0;
    color: #fff;
    font-size: 1.6em;
    font-weight: normal;
    text-shadow: 0 1px 0 #777;
    -moz-box-shadow: 1px 1px 15px #999 inset;
    -webkit-box-shadow: 1px 1px 15px #999 inset;
    box-shadow: 1px 1px 15px #999 inset;
}

.pma_sql_import_status div {
    height: 270px;
    overflow-y:auto;
    overflow-x:hidden;
    list-style-type: none;
}

.pma_sql_import_status div li {
    padding: 8px 10px;
    border-bottom: 1px solid #bbb;
    color: rgb(148, 14, 14);
    background: white;
}

.pma_sql_import_status div li .filesize {
    float: right;
}

.pma_sql_import_status h2 .minimize {
    float: right;
    margin-right: 5px;
    padding: 0 10px;
}

.pma_sql_import_status h2 .close {
    float: right;
    margin-right: 5px;
    padding: 0 10px;
    display: none;
}

.pma_sql_import_status h2 .minimize:hover,
.pma_sql_import_status h2 .close:hover,
.pma_drop_result h2 .close:hover {
    background: rgba(155, 149, 149, 0.78);
    cursor: pointer;
}

.pma_drop_file_status {
    color: #235a81;
}

.pma_drop_file_status span.underline:hover {
    cursor: pointer;
    text-decoration: underline;
}

.pma_drop_result {
    position: fixed;
    top: 10%;
    left: 20%;
    width: 60%;
    background: white;
    min-height: 300px;
    z-index: 800;
    -webkit-box-shadow: 0 0 15px #999;
    border-radius: 10px;
    cursor: move;
}

.pma_drop_result h2 .close {
    float: right;
    margin-right: 5px;
    padding: 0 10px;
}

.dependencies_box {
    background-color: white;
    border: 3px ridge black;
}

#composite_index_list {
    list-style-type: none;
    list-style-position: inside;
}

span.drag_icon {
    display: inline-block;
    background-image: url('./themes/pmahomme/img/s_sortable.png');
    background-position: center center;
    background-repeat: no-repeat;
    width: 1em;
    height: 3em;
    cursor: move;
}

.topmargin {
    margin-top: 1em;
}

/* styles for sortable tables created with tablesorter jquery plugin */
th.header {
    cursor: pointer;
    color: #235a81;
}

th.header:hover {
    text-decoration: underline;
}

th.header .sorticon {
    width: 16px;
    height: 16px;
    background-repeat: no-repeat;
    background-position: right center;
    display: inline-table;
    vertical-align: middle;
    float: right;
}

th.headerSortUp .sorticon, th.headerSortDown:hover .sorticon {
    background-image: url(./themes/pmahomme/img/s_desc.png);
}

th.headerSortDown .sorticon, th.headerSortUp:hover .sorticon {
    background-image: url(./themes/pmahomme/img/s_asc.png);
}
/* end of styles of sortable tables */

/* styles for jQuery-ui to support rtl languages */
body .ui-dialog .ui-dialog-titlebar-close {
    right: .3em;
    left: initial;
}

body .ui-dialog .ui-dialog-title {
    float: left;
}

body .ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
    float: right;
}
/* end of styles for jQuery-ui to support rtl languages */

/* FILE: enum_editor.css.php */

/**
 * ENUM/SET editor styles
 */
p.enum_notice {
    margin: 5px 2px;
    font-size: 80%;
}

#enum_editor p {
    margin-top: 0;
    font-style: italic;
}

#enum_editor .values,
#enum_editor .add {
    width: 100%;
}

#enum_editor .add td {
    vertical-align: middle;
    width: 50%;
    padding: 0 0 0;
    padding-left: 1em;
}

#enum_editor .values td.drop {
    width: 1.8em;
    cursor: pointer;
    vertical-align: middle;
}

#enum_editor .values input {
    margin: .1em 0;
    padding-right: 2em;
    width: 100%;
}

#enum_editor .values img {
    width: 1.8em;
    vertical-align: middle;
}

#enum_editor input.add_value {
    margin: 0;
    margin-right: 0.4em;
}

#enum_editor_output textarea {
    width: 100%;
    float: right;
    margin: 1em 0 0 0;
}

/**
 * ENUM/SET editor integration for the routines editor
 */
.enum_hint {
    position: relative;
}

.enum_hint a {
    position: absolute;
    left: 81%;
    bottom: .35em;
}

/* FILE: gis.css.php */

/**
 * GIS data editor styles
 */
a.close_gis_editor {
    float: right;
}

#gis_editor {
    display: none;
    position: fixed;
    _position: absolute; /* hack for IE */
    z-index: 1001;
    overflow-y: auto;
    overflow-x: hidden;
}

#gis_data {
    min-height: 230px;
}

#gis_data_textarea {
    height: 6em;
}

#gis_data_editor {
    background: #D0DCE0;
    padding: 15px;
    min-height: 500px;
}

#gis_data_editor .choice {
    display: none;
}

#gis_data_editor input[type="text"] {
    width: 75px;
}

/* FILE: navigation.css.php */

/******************************************************************************/
/* Navigation */

#pma_navigation {
    width: 240px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    background: url(./themes/pmahomme/img/left_nav_bg.png) repeat-y right 0 #f3f3f3;
    color: #000;
    z-index: 800;
}

#pma_navigation_header {
    overflow: hidden;
}

#pma_navigation_content {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
}

#pma_navigation ul {
    margin: 0;
}

#pma_navigation form {
    margin: 0;
    padding: 0;
    display: inline;
}

#pma_navigation select#select_server,
#pma_navigation select#lightm_db {
    width: 100%;
}

/******************************************************************************/
/* specific elements */

#pma_navigation div.pageselector {
    text-align: center;
    margin: 0;
    margin-left: 0.75em;
    border-left: 1px solid #666;
}

#pma_navigation div#pmalogo {
    }

#pma_navigation #pmalogo,
#pma_navigation #serverChoice,
#pma_navigation #navipanellinks,
#pma_navigation #recentTableList,
#pma_navigation #favoriteTableList,
#pma_navigation #databaseList,
#pma_navigation div.pageselector.dbselector {
    text-align: center;
    padding: 5px 10px 0;
    border: 0;
}

#pma_navigation #recentTable,
#pma_navigation #favoriteTable {
    width: 200px;
}

#pma_navigation #favoriteTableList select,
#pma_navigation #serverChoice select
 {
    width: 80%;
}

#pma_navigation_content > img.throbber {
    display: none;
    margin: .3em auto 0;
}

/* Navigation tree*/
#pma_navigation_tree {
    margin: 0;
    margin-left: 5px;
    overflow: hidden;
    color: #444;
    height: 74%;
    position: relative;
}
#pma_navigation_select_database {
    text-align: left;
    padding: 0 0 0;
    border: 0;
    margin: 0;
}

#pma_navigation_db_select {
    margin-top: 0.5em;
    margin-left: 0.75em;
}
#pma_navigation_db_select select {
    background: url("./themes/pmahomme/img/select_bg.png") repeat scroll 0 0;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    border: 1px solid #bbb;
    border-top: 1px solid #bbb;
    color: #333;
    padding: 4px 6px;
    margin: 0 0 0;
    width: 92%;
    font-size: 1.11em;
}

#pma_navigation_tree_content {
    width: 100%;
    overflow: hidden;
    overflow-y: auto;
    position: absolute;
    height: 100%;
}
#pma_navigation_tree_content a.hover_show_full {
    position: relative;
    z-index: 100;
}
#pma_navigation_tree a {
    color: #000;
}
#pma_navigation_tree a:hover {
    text-decoration: underline;
}
#pma_navigation_tree li.activePointer {
    color: #000;
    background-color: #ddd;
}
#pma_navigation_tree li.selected {
    color: #000;
    background-color: #ddd;
}
#pma_navigation_tree li .dbItemControls {
    padding-left: 4px;
}
#pma_navigation_tree li .navItemControls {
    display: none;
    padding-left: 4px;
}
#pma_navigation_tree li.activePointer .navItemControls {
    display: inline;
    opacity: 0.5;
}
#pma_navigation_tree li.activePointer .navItemControls:hover {
    display: inline;
    opacity: 1.0;
}
#pma_navigation_tree ul {
    clear: both;
    padding: 0;
    list-style-type: none;
    margin: 0;
}
#pma_navigation_tree ul ul {
    position: relative;
}
#pma_navigation_tree li,
#pma_navigation_tree li.fast_filter {
    white-space: nowrap;
    padding-bottom: 4px;
    clear: both;
    min-height: 16px;
}
#pma_navigation_tree img {
    margin: 0;
}
#pma_navigation_tree i {
    display: block;
}
#pma_navigation_tree div.block {
    position: relative;
    width: 1.5em;
    height: 1.5em;
    min-width: 16px;
    min-height: 16px;
    float: left;
}
#pma_navigation_tree div.block.double {
    width: 2.5em;
}
#pma_navigation_tree div.block i,
#pma_navigation_tree div.block b {
    width: 1.5em;
    height: 1.7em;
    min-width: 16px;
    min-height: 8px;
    position: absolute;
    bottom: 0.7em;
    left: 0.75em;
    z-index: 0;
}
#pma_navigation_tree div.block i { /* Top and right segments for the tree element connections */
    display: block;
    border-left: 1px solid #666;
    border-bottom: 1px solid #666;
    position: relative;
    z-index: 0;
}
#pma_navigation_tree div.block i.first { /* Removes top segment */
    border-left: 0;
}
#pma_navigation_tree div.block b { /* Bottom segment for the tree element connections */
    display: block;
    height: 0.75em;
    bottom: 0;
    left: 0.75em;
    border-left: 1px solid #666;
}
#pma_navigation_tree div.block a,
#pma_navigation_tree div.block u {
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 10;
}
#pma_navigation_tree div.block a + a {
    left: 100%;
}
#pma_navigation_tree div.block.double a,
#pma_navigation_tree div.block.double u {
    left: 33%;
}
#pma_navigation_tree div.block.double a + a {
    left: 85%;
}
#pma_navigation_tree div.block img {
    position: relative;
    top: -0.6em;
    left: 0;
    margin-left: -7px;
}
#pma_navigation_tree div.throbber img {
    top: 2px;
    left: 2px;
}
#pma_navigation_tree li.last > ul {
    background: none;
}
#pma_navigation_tree li > a, #pma_navigation_tree li > i {
    line-height: 1.5em;
    height: 1.5em;
    padding-left: 0.3em;
}
#pma_navigation_tree .list_container {
    border-left: 1px solid #666;
    margin-left: 0.75em;
    padding-left: 0.75em;
}
#pma_navigation_tree .last > .list_container {
    border-left: 0 solid #666;
}

/* Fast filter */
li.fast_filter {
    padding-left: 0.75em;
    margin-left: 0.75em;
    padding-right: 35px;
    border-left: 1px solid #666;
    list-style: none;
}
li.fast_filter input {
    margin: 3px 0 0 0;
    font-size: 0.7em;
    padding-top: 2px;
    padding-bottom: 2px;
    padding-left: 4px;
    padding-right: 1.7em;
    width: 100%;
}
li.fast_filter span {
    position: relative;
    right: 1.5em;
    padding: 0.2em;
    cursor: pointer;
    font-weight: bold;
    color: #800;
    font-size: 0.7em;
}
/* IE10+ has its own reset X */
html.ie li.fast_filter span {
    display: none;
}
html.ie.ie9 li.fast_filter span,
html.ie.ie8 li.fast_filter span {
    display: auto;
}
html.ie li.fast_filter input {
    padding-right: .2em;
}
html.ie.ie9 li.fast_filter input,
html.ie.ie8 li.fast_filter input {
    padding-right: 1.7em;
}
li.fast_filter.db_fast_filter {
    border: 0;
    margin-left: 0;
    margin-right: 10px;
}

#navigation_controls_outer {
    min-height: 21px !important;
}

#navigation_controls_outer.activePointer {
    background-color: transparent !important;
}

#navigation_controls {
    float: right;
    padding-right: 23px;
}

/* Resize handler */
#pma_navigation_resizer {
    width: 3px;
    height: 100%;
    background-color: #aaa;
    cursor: col-resize;
    position: fixed;
    top: 0;
    left: 240px;
    z-index: 801;
}
#pma_navigation_collapser {
    width: 20px;
    height: 22px;
    line-height: 22px;
    background: #eee;
    color: #555;
    font-weight: bold;
    position: fixed;
    top: 0;
    left: 240px;
    text-align: center;
    cursor: pointer;
    z-index: 800;
    text-shadow: 0 1px 0 #fff;
    filter: dropshadow(color=#fff, offx=0, offy=1);
    border: 1px solid #888;
}

/* Quick warp links */
.pma_quick_warp {
    margin-top: 5px;
    margin-left: 2px;
    position: relative;
}
.pma_quick_warp .drop_list {
    float: left;
    margin-left: 3px;
    padding: 2px 0;
}
.pma_quick_warp .drop_button {
    padding: 0 .3em;
    border: 1px solid #ddd;
    border-radius: .3em;
    background: #f2f2f2;
    cursor: pointer;
}
.pma_quick_warp .drop_list:hover .drop_button {
    background: #fff;
}
.pma_quick_warp .drop_list ul {
    position: absolute;
    margin: 0;
    padding: 0;
    overflow: hidden;
    overflow-y: auto;
    list-style: none;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: .3em;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    box-shadow: 0 0 5px #ccc;
    top: 100%;
    left: 3px;
    right: 0;
    display: none;
    z-index: 802;
}
.pma_quick_warp .drop_list:hover ul {
    display: block;
}
.pma_quick_warp .drop_list li {
    white-space: nowrap;
    padding: 0;
    border-radius: 0;
}
.pma_quick_warp .drop_list li img {
    vertical-align: sub;
}
.pma_quick_warp .drop_list li:hover {
    background: #f2f2f2;
}
.pma_quick_warp .drop_list a {
    display: block;
    padding: .2em .3em;
}
.pma_quick_warp .drop_list a.favorite_table_anchor {
    clear: left;
    float: left;
    padding: .1em .3em 0;
}

/* FILE: pmd.css.php */

/* Designer */
.input_tab {
    background-color: #A6C7E1;
    color: #000;
}

.content_fullscreen {
    position: relative;
    overflow: auto;
}

#canvas_outer {
    position: relative;
    width: 100%;
    display: block;
}

#canvas {
    background-color: #fff;
    color: #000;
}

canvas.pmd {
    display: inline-block;
    overflow: hidden;
    text-align: left;
}

canvas.pmd * {
    behavior: url(#default#VML);
}

.pmd_tab {
    background-color: #fff;
    color: #000;
    border-collapse: collapse;
    border: 1px solid #aaa;
    z-index: 1;
    -moz-user-select: none;
}

.pmd_tab .header {
    background-image: url(./themes/pmahomme/img/pmd/Header.png);
    background-repeat: repeat-x;
}

.tab_zag {
    text-align: center;
    cursor: move;
    padding: 1px;
    font-weight: bold;
}

.tab_zag_2 {
    background-image: url(./themes/pmahomme/img/pmd/Header_Linked.png);
    background-repeat: repeat-x;
    text-align: center;
    cursor: move;
    padding: 1px;
    font-weight: bold;
}

.tab_field {
    background: #fff;
    color: #000;
    cursor: default;
}

.tab_field_2 {
    background-color: #CCFFCC;
    color: #000;
    background-repeat: repeat-x;
    cursor: default;
}

.tab_field_3 {
    background-color: #FFE6E6; /*#DDEEFF*/
    color: #000;
    cursor: default;
}

#pmd_hint {
    white-space: nowrap;
    position: absolute;
    background-color: #99FF99;
    color: #000;
    z-index: 3;
    border: #00CC66 solid 1px;
    display: none;
}

.scroll_tab {
    overflow: auto;
    width: 100%;
    height: 500px;
}

.pmd_Tabs {
    cursor: default;
    color: #0055bb;
    white-space: nowrap;
    text-decoration: none;
    text-indent: 3px;
    font-weight: bold;
    margin-left: 2px;
    text-align: left;
    background-color: #fff;
    background-image: url(./themes/pmahomme/img/pmd/left_panel_butt.png);
    border: #ccc solid 1px;
}

.pmd_Tabs2 {
    cursor: default;
    color: #0055bb;
    background: #FFEE99;
    text-indent: 3px;
    font-weight: bold;
    white-space: nowrap;
    text-decoration: none;
    border: #9999FF solid 1px;
    text-align: left;
}

.owner {
    font-weight: normal;
    color: #888;
}

.option_tab {
    padding-left: 2px;
    padding-right: 2px;
    width: 5px;
}

.select_all {
    vertical-align: top;
    padding-left: 2px;
    padding-right: 2px;
    cursor: default;
    width: 1px;
    color: #000;
    background-image: url(./themes/pmahomme/img/pmd/Header.png);
    background-repeat: repeat-x;
}

.small_tab {
    vertical-align: top;
    background-color: #0064ea;
    color: #fff;
    background-image: url(./themes/pmahomme/img/pmd/small_tab.png);
    cursor: default;
    text-align: center;
    font-weight: bold;
    padding-left: 2px;
    padding-right: 2px;
    width: 1px;
    text-decoration: none;
}

.small_tab2 {
    vertical-align: top;
    color: #fff;
    background-color: #FF9966;
    cursor: default;
    padding-left: 2px;
    padding-right: 2px;
    text-align: center;
    font-weight: bold;
    width: 1px;
    text-decoration: none;
}

.small_tab_pref {
    background-image: url(./themes/pmahomme/img/pmd/Header.png);
    background-repeat: repeat-x;
    text-align: center;
    width: 1px;
}

.small_tab_pref2 {
    vertical-align: top;
    color: #fff;
    background-color: #FF9966;
    cursor: default;
    text-align: center;
    font-weight: bold;
    width: 1px;
    text-decoration: none;
}

.butt {
    border: #4477aa solid 1px;
    font-weight: bold;
    height: 19px;
    width: 70px;
    background-color: #fff;
    color: #000;
    vertical-align: baseline;
}

.L_butt2_1 {
    padding: 1px;
    text-decoration: none;
    vertical-align: middle;
    cursor: default;
}

.L_butt2_2 {
    padding: 0;
    border: #0099CC solid 1px;
    background: #FFEE99;
    color: #000;
    text-decoration: none;
    vertical-align: middle;
    cursor: default;
}

/* ---------------------------------------------------------------------------*/
.bor {
    width: 10px;
    height: 10px;
}

.frams1 {
    background: url(./themes/pmahomme/img/pmd/1.png) no-repeat right bottom;
}

.frams2 {
    background: url(./themes/pmahomme/img/pmd/2.png) no-repeat left bottom;
}

.frams3 {
    background: url(./themes/pmahomme/img/pmd/3.png) no-repeat left top;
}

.frams4 {
    background: url(./themes/pmahomme/img/pmd/4.png) no-repeat right top;
}

.frams5 {
    background: url(./themes/pmahomme/img/pmd/5.png) repeat-x center bottom;
}

.frams6 {
    background: url(./themes/pmahomme/img/pmd/6.png) repeat-y left;
}

.frams7 {
    background: url(./themes/pmahomme/img/pmd/7.png) repeat-x top;
}

.frams8 {
    background: url(./themes/pmahomme/img/pmd/8.png) repeat-y right;
}

#osn_tab {
    position: absolute;
    background-color: #fff;
    color: #000;
}

.pmd_header {
    background-color: #EAEEF0;
    color: #000;
    text-align: center;
    font-weight: bold;
    margin: 0;
    padding: 0;
    background-image: url(./themes/pmahomme/img/pmd/top_panel.png);
    background-position: top;
    background-repeat: repeat-x;
    border-right: #999 solid 1px;
    border-left: #999 solid 1px;
    height: 28px;
    z-index: 101;
    width: 100%;
    position: fixed;
}

.pmd_header a, .pmd_header span{
    display: block;
    float: left;
    margin: 3px 1px 4px;
    height: 20px;
    border: 1px dotted #fff;
}

.pmd_header .M_bord {
    display: block;
    float: left;
    margin: 4px;
    height: 20px;
    width: 2px;
}

.pmd_header a.first {
    margin-right: 1em;
}

.pmd_header a.last {
    margin-left: 1em;
}

a.M_butt_Selected_down_IE,
a.M_butt_Selected_down {
    border: 1px solid #C0C0BB;
    background-color: #99FF99;
    color: #000;
}

a.M_butt_Selected_down_IE:hover,
a.M_butt_Selected_down:hover,
a.M_butt:hover {
    border: 1px solid #0099CC;
    background-color: #FFEE99;
    color: #000;
}

#layer_menu {
    z-index: 98;
    position: relative;
    float: right;
    background-color: #EAEEF0;
    border: #999 solid 1px;
}

#layer_menu.left {
    float: left;
}

#layer_upd_relation {
    position: absolute;
    left: 637px;
    top: 224px;
    z-index: 100;
}

#layer_new_relation {
    position: absolute;
    left: 636px;
    top: 85px;
    z-index: 100;
    width: 153px;
}

#pmd_optionse {
    position: absolute;
    left: 636px;
    top: 85px;
    z-index: 100;
    width: 153px;
}

#layer_menu_sizer {
    background-image: url(./themes/pmahomme/img/pmd/resize.png);
    cursor: ew-resize;
}

#layer_menu_sizer .icon {
    margin: 0;
}

.panel {
    position: fixed;
    top: 60px;
    right: 0;
    width: 350px;
    max-height: 500px;
    display: none;
    overflow: auto;
    padding-top: 34px;
    z-index: 102;
}

a.trigger {
    position: fixed;
    text-decoration: none;
    top: 60px;
    right: 0;
    color: #fff;
    padding: 10px 40px 10px 15px;
    background: #333 url(./themes/pmahomme/img/pmd/plus.png) 85% 55% no-repeat;
    border: 1px solid #444;
    display: block;
    z-index: 102;
}

a.trigger:hover {
    color: #080808;
    background: #fff696 url(./themes/pmahomme/img/pmd/plus.png) 85% 55% no-repeat;
    border: 1px solid #999;
}

a.active.trigger {
    background: #222 url(./themes/pmahomme/img/pmd/minus.png) 85% 55% no-repeat;
    z-index: 999;
}

a.active.trigger:hover {
    background: #fff696 url(./themes/pmahomme/img/pmd/minus.png) 85% 55% no-repeat;
}

.toggle_container .block {
    background-color: #DBE4E8;
    border-top: 1px solid #999;
}

.history_table {
    text-align: center;
    background-color: #9999CC;
    cursor: pointer;
}

.history_table2 {
    text-align: center;
    background-color: #DBE4E8;
}

#ab {
    min-width: 300px;
}

#ab .ui-accordion-content {
    padding: 0;
}

#box {
    display: none;
}

#foreignkeychk {
    text-align: left;
    position: absolute;
    cursor: pointer;
}

.side-menu {
    float: left;
    position: fixed;
    width: auto;
    height: auto;
    background: #efefef;
    border: 1px solid grey;
    overflow: hidden;
    z-index: 50;
    padding: 2px;
}

.side-menu.right {
    float: right;
    right: 0;
}

.side-menu .hide {
    display: none;
}

.side-menu a {
    display: block;
    float: none;
    overflow: hidden;
}

.side-menu img,
.side-menu .text {
    float: left;
}

#name-panel {
    border-bottom: 1px solid grey;
    text-align: center;
    background: #efefef;
    width: 100%;
    font-size: 1.2em;
    padding: 10px;
    font-weight: bold;
}

#container-form {
    width: 100%;
    position: absolute;
    left: 0;
}

/* FILE: rte.css.php */

.rte_table {
    table-layout: fixed;
}

.rte_table td {
    vertical-align: middle;
    padding: 0.2em;
}

.rte_table tr td:nth-child(1) {
    font-weight: bold;
}

.rte_table input,
.rte_table select,
.rte_table textarea {
    width: 100%;
    margin: 0;
    box-sizing: border-box;
    -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}

.rte_table input[type=checkbox],
.rte_table input[type=radio] {
    width: auto;
    margin-right: 6px;
}

.rte_table .routine_params_table {
    width: 100%;
}

/* FILE: codemirror.css.php */

.CodeMirror {
    height: 18em;
    direction: ltr;
}
#inline_editor_outer .CodeMirror {
    height: 6em;
}
.insertRowTable .CodeMirror {
    height: 9em;
    width: 24em;
    border: 1px solid #a9a9a9;
}
#pma_console .CodeMirror-gutters {
    background-color: initial;
    border: none;
}
span.cm-keyword, span.cm-statement-verb {
    color: #909;
}
span.cm-variable {
    color: black;
}
span.cm-comment {
    color: #808000;
}
span.cm-mysql-string {
    color: #008000;
}
span.cm-operator {
    color: fuchsia;
}
span.cm-mysql-word {
    color: black;
}
span.cm-builtin {
    color: #f00;
}
span.cm-variable-2 {
    color: #f90;
}
span.cm-variable-3 {
    color: #00f;
}
span.cm-separator {
    color: fuchsia;
}
span.cm-number {
    color: teal;
}
.autocomplete-column-name {
    display: inline-block;
}
.autocomplete-column-hint {
    display: inline-block;
    float: right;
    color: #666;
    margin-left: 1em;
}
.CodeMirror-hints {
    z-index: 200;
}
.CodeMirror-lint-tooltip {
    z-index: 200;
}

/* FILE: jqplot.css.php */

/* jqPlot */

/*rules for the plot target div.  These will be cascaded down to all plot elements according to css rules*/
.jqplot-target {
    position: relative;
    color: #222222;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size: 1em;
/*    height: 300px;
    width: 590px;*/
}

/*rules applied to all axes*/
.jqplot-axis {
    font-size: 0.75em;
}

.jqplot-xaxis {
    margin-top: 10px;
}

.jqplot-x2axis {
    margin-bottom: 10px;
}

.jqplot-yaxis {
    margin-right: 10px;
}

.jqplot-y2axis, .jqplot-y3axis, .jqplot-y4axis, .jqplot-y5axis, .jqplot-y6axis, .jqplot-y7axis, .jqplot-y8axis, .jqplot-y9axis, .jqplot-yMidAxis {
    margin-left: 10px;
    margin-right: 10px;
}

/*rules applied to all axis tick divs*/
.jqplot-axis-tick, .jqplot-xaxis-tick, .jqplot-yaxis-tick, .jqplot-x2axis-tick, .jqplot-y2axis-tick, .jqplot-y3axis-tick, .jqplot-y4axis-tick, .jqplot-y5axis-tick, .jqplot-y6axis-tick, .jqplot-y7axis-tick, .jqplot-y8axis-tick, .jqplot-y9axis-tick, .jqplot-yMidAxis-tick {
    position: absolute;
    white-space: pre;
}


.jqplot-xaxis-tick {
    top: 0;
    /* initial position untill tick is drawn in proper place */
    left: 15px;
    vertical-align: top;
}

.jqplot-x2axis-tick {
    bottom: 0;
    /* initial position untill tick is drawn in proper place */
    left: 15px;
    vertical-align: bottom;
}

.jqplot-yaxis-tick {
    right: 0px;
    /* initial position untill tick is drawn in proper place */
    top: 15px;
    text-align: right;
}

.jqplot-yaxis-tick.jqplot-breakTick {
    right: -20px;
    margin-right: 0;
    padding:1px 5px 1px;
    z-index: 2;
    font-size: 1.5em;
}

.jqplot-y2axis-tick, .jqplot-y3axis-tick, .jqplot-y4axis-tick, .jqplot-y5axis-tick, .jqplot-y6axis-tick, .jqplot-y7axis-tick, .jqplot-y8axis-tick, .jqplot-y9axis-tick {
    left: 0px;
    /* initial position untill tick is drawn in proper place */
    top: 15px;
/*    padding-left: 10px;*/
/*    padding-right: 15px;*/
    text-align: left;
}

.jqplot-yMidAxis-tick {
    text-align: center;
    white-space: nowrap;
}

.jqplot-xaxis-label {
    margin-top: 10px;
    font-size: 11pt;
    position: absolute;
}

.jqplot-x2axis-label {
    margin-bottom: 10px;
    font-size: 11pt;
    position: absolute;
}

.jqplot-yaxis-label {
    margin-right: 10px;
/*    text-align: center;*/
    font-size: 11pt;
    position: absolute;
}

.jqplot-yMidAxis-label {
    font-size: 11pt;
    position: absolute;
}

.jqplot-y2axis-label, .jqplot-y3axis-label, .jqplot-y4axis-label, .jqplot-y5axis-label, .jqplot-y6axis-label, .jqplot-y7axis-label, .jqplot-y8axis-label, .jqplot-y9axis-label {
/*    text-align: center;*/
    font-size: 11pt;
    margin-left: 10px;
    position: absolute;
}

.jqplot-meterGauge-tick {
    font-size: 0.75em;
    color: #999999;
}

.jqplot-meterGauge-label {
    font-size: 1em;
    color: #999999;
}

table.jqplot-table-legend {
    margin-top: 12px;
    margin-bottom: 12px;
    margin-left: 12px;
    margin-right: 12px;
}

table.jqplot-table-legend, table.jqplot-cursor-legend {
    background-color: rgba(255,255,255,0.6);
    border: 1px solid #cccccc;
    position: absolute;
    font-size: 0.75em;
}

td.jqplot-table-legend {
    vertical-align: middle;
}

/*
These rules could be used instead of assigning
element styles and relying on js object properties.
*/

/*
td.jqplot-table-legend-swatch {
    padding-top: 0.5em;
    text-align: center;
}

tr.jqplot-table-legend:first td.jqplot-table-legend-swatch {
    padding-top: 0px;
}
*/

td.jqplot-seriesToggle:hover, td.jqplot-seriesToggle:active {
    cursor: pointer;
}

.jqplot-table-legend .jqplot-series-hidden {
    text-decoration: line-through;
}

div.jqplot-table-legend-swatch-outline {
    border: 1px solid #cccccc;
    padding: 1px;
}

div.jqplot-table-legend-swatch {
    width: 0;
    height: 0;
    border-top-width: 5px;
    border-bottom-width: 5px;
    border-left-width: 6px;
    border-right-width: 6px;
    border-top-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-right-style: solid;
}

.jqplot-title {
    top: 0;
    left: 0px;
    padding-bottom: 0.5em;
    font-size: 1.2em;
}

table.jqplot-cursor-tooltip {
    border: 1px solid #cccccc;
    font-size: 0.75em;
}


.jqplot-cursor-tooltip {
    border: 1px solid #cccccc;
    font-size: 0.75em;
    white-space: nowrap;
    background: rgba(208,208,208,0.5);
    padding: 1px;
}

.jqplot-highlighter-tooltip, .jqplot-canvasOverlay-tooltip {
    border: 1px solid #cccccc;
    font-size: 0.75em;
    white-space: nowrap;
    background: rgba(208,208,208,0.5);
    padding: 1px;
}

.jqplot-point-label {
    font-size: 0.75em;
    z-index: 2;
}

td.jqplot-cursor-legend-swatch {
    vertical-align: middle;
    text-align: center;
}

div.jqplot-cursor-legend-swatch {
    width: 1.2em;
    height: 0.7em;
}

.jqplot-error {
/*   Styles added to the plot target container when there is an error go here.*/
    text-align: center;
}

.jqplot-error-message {
/*    Styling of the custom error message div goes here.*/
    position: relative;
    top: 46%;
    display: inline-block;
}

div.jqplot-bubble-label {
    font-size: 0.8em;
/*    background: rgba(90%, 90%, 90%, 0.15);*/
    padding-left: 2px;
    padding-right: 2px;
    color: rgb(20%, 20%, 20%);
}

div.jqplot-bubble-label.jqplot-bubble-label-highlight {
    background: rgba(90%, 90%, 90%, 0.7);
}

div.jqplot-noData-container {
    text-align: center;
    background-color: rgba(96%, 96%, 96%, 0.3);
}

/* FILE: resizable-menu.css.php */
ul.resizable-menu a,
ul.resizable-menu span {
    display: block;
    margin: 0;
    padding: 0;
    white-space: nowrap;
}

ul.resizable-menu .submenu {
    display: none;
    position: relative;
}

ul.resizable-menu .shown {
    display: inline-block;
}

ul.resizable-menu ul {
    margin: 0;
    padding: 0;
    position: absolute;
    list-style-type: none;
    display: none;
    border: 1px #ddd solid;
    z-index: 2;
    right: 0;
}

ul.resizable-menu li:hover {
    background-image: url(./themes/svg_gradient.php?from=ffffff&to=e5e5e5);
background-size: 100% 100%;
background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#e5e5e5));
background: -webkit-linear-gradient(top, #ffffff, #e5e5e5);
background: -moz-linear-gradient(top, #ffffff, #e5e5e5);
background: -ms-linear-gradient(top, #ffffff, #e5e5e5);
background: -o-linear-gradient(top, #ffffff, #e5e5e5);}

ul.resizable-menu li:hover ul,
ul.resizable-menu .submenuhover ul {
    display: block;
    background: #fff;
}

ul.resizable-menu ul li {
    width: 100%;
}
    /* Icon sprites */
    .icon {
    margin: 0;
    margin-left: .3em;
    padding: 0 !important;
    width: 16px;
    height: 16px;
    background-image: url('./themes/pmahomme/img/sprites.png?v=4.6.4') !important;
    background-repeat: no-repeat !important;
    background-position: top left !important;
    }
    .ic_asc_order { background-position: 0 -16px !important; }
.ic_b_bookmark { background-position: 0 -32px !important; }
.ic_b_browse { background-position: 0 -48px !important; }
.ic_b_calendar { background-position: 0 -64px !important; }
.ic_b_chart { background-position: 0 -80px !important; }
.ic_b_close { background-position: 0 -96px !important; }
.ic_b_column_add { background-position: 0 -112px !important; }
.ic_b_comment { background-position: 0 -128px !important; }
.ic_b_dbstatistics { background-position: 0 -144px !important; }
.ic_b_deltbl { background-position: 0 -160px !important; }
.ic_b_docs { background-position: 0 -176px !important; }
.ic_b_docsql { background-position: 0 -192px !important; }
.ic_b_drop { background-position: 0 -208px !important; }
.ic_b_edit { background-position: 0 -224px !important; }
.ic_b_empty { background-position: 0 -240px !important; }
.ic_b_engine { background-position: 0 -256px !important; }
.ic_b_event_add { background-position: 0 -272px !important; }
.ic_b_events { background-position: 0 -288px !important; }
.ic_b_export { background-position: 0 -304px !important; }
.ic_b_favorite { background-position: 0 -320px !important; }
.ic_b_find_replace { background-position: 0 -336px !important; }
.ic_b_firstpage { background-position: 0 -352px !important; }
.ic_b_ftext { background-position: 0 -368px !important; }
.ic_b_group { background-position: 0 -384px !important; }
.ic_b_help { background-position: 0 -400px !important; }
.ic_b_home { background-position: 0 -416px !important; }
.ic_b_import { background-position: 0 -432px !important; }
.ic_b_index { background-position: 0 -448px !important; }
.ic_b_index_add { background-position: 0 -464px !important; }
.ic_b_info { background-position: 0 -480px !important; width: 11px; height: 11px; }
.ic_b_inline_edit { background-position: 0 -496px !important; }
.ic_b_insrow { background-position: 0 -512px !important; }
.ic_b_lastpage { background-position: 0 -528px !important; }
.ic_b_minus { background-position: 0 -544px !important; }
.ic_b_more { background-position: 0 -560px !important; }
.ic_b_move { background-position: 0 -576px !important; }
.ic_b_newdb { background-position: 0 -592px !important; }
.ic_b_newtbl { background-position: 0 -608px !important; }
.ic_b_nextpage { background-position: 0 -624px !important; }
.ic_b_no_favorite { background-position: 0 -640px !important; }
.ic_b_pdfdoc { background-position: 0 -656px !important; }
.ic_b_plus { background-position: 0 -672px !important; }
.ic_b_prevpage { background-position: 0 -688px !important; }
.ic_b_primary { background-position: 0 -704px !important; }
.ic_b_print { background-position: 0 -720px !important; }
.ic_b_props { background-position: 0 -736px !important; }
.ic_b_relations { background-position: 0 -752px !important; }
.ic_b_report { background-position: 0 -768px !important; }
.ic_b_routine_add { background-position: 0 -784px !important; }
.ic_b_routines { background-position: 0 -800px !important; }
.ic_b_save { background-position: 0 -816px !important; }
.ic_b_saveimage { background-position: 0 -832px !important; }
.ic_b_sbrowse { background-position: 0 -848px !important; }
.ic_b_sdb { background-position: 0 -864px !important; width: 10px; height: 10px; }
.ic_b_search { background-position: 0 -880px !important; }
.ic_b_selboard { background-position: 0 -896px !important; }
.ic_b_select { background-position: 0 -912px !important; }
.ic_b_snewtbl { background-position: 0 -928px !important; }
.ic_b_spatial { background-position: 0 -944px !important; }
.ic_b_sql { background-position: 0 -960px !important; }
.ic_b_sqldoc { background-position: 0 -976px !important; }
.ic_b_sqlhelp { background-position: 0 -992px !important; }
.ic_b_table_add { background-position: 0 -1008px !important; }
.ic_b_tblanalyse { background-position: 0 -1024px !important; }
.ic_b_tblexport { background-position: 0 -1040px !important; }
.ic_b_tblimport { background-position: 0 -1056px !important; }
.ic_b_tblops { background-position: 0 -1072px !important; }
.ic_b_tbloptimize { background-position: 0 -1088px !important; }
.ic_b_tipp { background-position: 0 -1104px !important; }
.ic_b_trigger_add { background-position: 0 -1120px !important; }
.ic_b_triggers { background-position: 0 -1136px !important; }
.ic_b_undo { background-position: 0 -1152px !important; }
.ic_b_unique { background-position: 0 -1168px !important; }
.ic_b_usradd { background-position: 0 -1184px !important; }
.ic_b_usrcheck { background-position: 0 -1200px !important; }
.ic_b_usrdrop { background-position: 0 -1216px !important; }
.ic_b_usredit { background-position: 0 -1232px !important; }
.ic_b_usrlist { background-position: 0 -1248px !important; }
.ic_b_versions { background-position: 0 -1264px !important; }
.ic_b_view { background-position: 0 -1280px !important; }
.ic_b_view_add { background-position: 0 -1296px !important; }
.ic_b_views { background-position: 0 -1312px !important; }
.ic_bd_browse { background-position: 0 -1328px !important; }
.ic_bd_deltbl { background-position: 0 -1344px !important; }
.ic_bd_drop { background-position: 0 -1360px !important; }
.ic_bd_edit { background-position: 0 -1376px !important; }
.ic_bd_empty { background-position: 0 -1392px !important; }
.ic_bd_export { background-position: 0 -1408px !important; }
.ic_bd_firstpage { background-position: 0 -1424px !important; }
.ic_bd_ftext { background-position: 0 -1440px !important; }
.ic_bd_index { background-position: 0 -1456px !important; }
.ic_bd_insrow { background-position: 0 -1472px !important; }
.ic_bd_lastpage { background-position: 0 -1488px !important; }
.ic_bd_nextpage { background-position: 0 -1504px !important; }
.ic_bd_prevpage { background-position: 0 -1520px !important; }
.ic_bd_primary { background-position: 0 -1536px !important; }
.ic_bd_routine_add { background-position: 0 -1552px !important; }
.ic_bd_sbrowse { background-position: 0 -1568px !important; }
.ic_bd_select { background-position: 0 -1584px !important; }
.ic_bd_spatial { background-position: 0 -1600px !important; }
.ic_bd_unique { background-position: 0 -1616px !important; }
.ic_centralColumns { background-position: 0 -1632px !important; }
.ic_centralColumns_add { background-position: 0 -1648px !important; }
.ic_centralColumns_delete { background-position: 0 -1664px !important; }
.ic_col_drop { background-position: 0 -1680px !important; }
.ic_console { background-position: 0 -1696px !important; }
.ic_database { background-position: 0 -1712px !important; }
.ic_eye { background-position: 0 -1728px !important; }
.ic_eye_grey { background-position: 0 -1744px !important; }
.ic_item { background-position: 0 -1760px !important; width: 9px; height: 9px; }
.ic_lightbulb { background-position: 0 -1776px !important; }
.ic_lightbulb_off { background-position: 0 -1792px !important; }
.ic_more { background-position: 0 -1808px !important; width: 13px; }
.ic_new_data { background-position: 0 -1824px !important; }
.ic_new_data_hovered { background-position: 0 -1840px !important; }
.ic_new_data_selected { background-position: 0 -1856px !important; }
.ic_new_data_selected_hovered { background-position: 0 -1872px !important; }
.ic_new_struct { background-position: 0 -1888px !important; }
.ic_new_struct_hovered { background-position: 0 -1904px !important; }
.ic_new_struct_selected { background-position: 0 -1920px !important; }
.ic_new_struct_selected_hovered { background-position: 0 -1936px !important; }
.ic_normalize { background-position: 0 -1952px !important; }
.ic_pause { background-position: 0 -1968px !important; }
.ic_php_sym { background-position: 0 -1984px !important; }
.ic_play { background-position: 0 -2000px !important; }
.ic_s_asc { background-position: 0 -2016px !important; }
.ic_s_asci { background-position: 0 -2032px !important; }
.ic_s_attention { background-position: 0 -2048px !important; }
.ic_s_cancel { background-position: 0 -2064px !important; }
.ic_s_cancel2 { background-position: 0 -2080px !important; }
.ic_s_cog { background-position: 0 -2096px !important; }
.ic_s_db { background-position: 0 -2112px !important; }
.ic_s_desc { background-position: 0 -2128px !important; }
.ic_s_error { background-position: 0 -2144px !important; }
.ic_s_error2 { background-position: 0 -2160px !important; width: 11px; height: 11px; }
.ic_s_host { background-position: 0 -2176px !important; }
.ic_s_info { background-position: 0 -2192px !important; }
.ic_s_lang { background-position: 0 -2208px !important; }
.ic_s_link { background-position: 0 -2224px !important; }
.ic_s_lock { background-position: 0 -2240px !important; }
.ic_s_loggoff { background-position: 0 -2256px !important; }
.ic_s_notice { background-position: 0 -2272px !important; }
.ic_s_okay { background-position: 0 -2288px !important; }
.ic_s_passwd { background-position: 0 -2304px !important; }
.ic_s_process { background-position: 0 -2320px !important; }
.ic_s_really { background-position: 0 -2336px !important; width: 11px; height: 11px; }
.ic_s_reload { background-position: 0 -2352px !important; }
.ic_s_replication { background-position: 0 -2368px !important; }
.ic_s_rights { background-position: 0 -2384px !important; }
.ic_s_sortable { background-position: 0 -2400px !important; }
.ic_s_status { background-position: 0 -2416px !important; }
.ic_s_success { background-position: 0 -2432px !important; }
.ic_s_sync { background-position: 0 -2448px !important; }
.ic_s_tbl { background-position: 0 -2464px !important; }
.ic_s_theme { background-position: 0 -2480px !important; }
.ic_s_top { background-position: 0 -2496px !important; }
.ic_s_unlink { background-position: 0 -2512px !important; }
.ic_s_vars { background-position: 0 -2528px !important; }
.ic_s_views { background-position: 0 -2544px !important; }
.ic_window-new { background-position: 0 -2560px !important; }
