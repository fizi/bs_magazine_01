<?php

/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * @file
 * Magazine Theme for e107 v2.x.
 */

if(!defined('e107_INIT')) { exit; }

// [multilanguage]
e107::lan('theme'); // loads e107_themes/CURRENT_THEME/languages/English.php (when English is selected)

define("BOOTSTRAP", 3);
define("FONTAWESOME", 4);
define('VIEWPORT', "width=device-width, initial-scale=1.0");

e107::library('load', 'bootstrap');
e107::library('load', 'fontawesome');

// CDN provider for Bootswatch.
$cndPref = e107::pref('theme', 'cdn', 'cdnjs');

switch($cndPref) {

	case "jsdelivr":
	//	e107::css('url', 'https://cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.min.css');
	//	e107::css('url',    'https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css');
	//	e107::js("footer", "https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js", 'jquery');
	break;			
	
	case "cdnjs":
	default:
	//	e107::css('url', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css');
	//	e107::css('url', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	//	e107::js("footer", "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js", 'jquery', 2);

}

/* @example prefetch  */
//e107::link(array('rel'=>'prefetch', 'href'=>THEME.'images/browsers.png'));

e107::js("theme", 			"js/jquery.lettering.js");  // 0.7.0  
e107::js("theme", 			"js/jquery.sticky.js");
e107::js("theme", 			"js/jquery.newsTicker.js"); 
e107::js("theme", 			"js/custom.js");
                 

e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips. 

// Legacy Stuff.
define('OTHERNEWS_COLS',false); // no tables, only divs. 
define('OTHERNEWS_LIMIT', 3); // Limit to 3. 
define('OTHERNEWS2_COLS',false); // no tables, only divs. 
define('OTHERNEWS2_LIMIT', 3); // Limit to 3.

// Theme disclaimer is displayed in your site disclaimer appended to the site disclaimer text.
// Uncomment the line below to set a theme disclaimer (remove the // ).
define('THEME_DISCLAIMER', "<br />".LAN_THEME_6.""); 

// applied before every layout.
// $LAYOUT['_header_'] = "";

// applied after every layout. 
// $LAYOUT['_footer_'] = "";

$LAYOUT = array();

// Default Header layout for ALL layouts
$LAYOUT['_header_'] = "
<div id='header' class='header'>
  <div class='container'>
    <div class='row'>
      <div class='header-top'>
        <div class='header-navigation'>                                        
          <div class='navbar navbar-default'> 
            <div class='navbar-header'> 
              <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-navbar-collapse-1'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
              </button>
            </div>
            <div id='bs-navbar-collapse-1' class='collapse navbar-collapse'>                 
              {NAVIGATION=main}
              {BOOTSTRAP_USERNAV: placement=top} 
            </div>
          </div>                  
        </div>    
      </div>
    </div>
    <div class='row'>
      <div class='header-middle'>
        <div class='col-md-6'>
          <div class='sitename'><a href='".e_HTTP."index.php' title='{SITENAME}'>{SITENAME}</a></div>
          <div class='sitetag'>{SITETAG}</div>
        </div>
        <div class='col-md-6'>
          <div class='top-banner'>
            {SETIMAGE: w=560&h=70&crop=1}
            {BANNER=e107promo}
          </div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='header-bottom'>
        <div class='navbar navbar-default'>
          <div class='navbar-header'> 
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-navbar-collapse-2'>
              <span class='sr-only'>Toggle navigation</span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>
          </div>
          <div id='bs-navbar-collapse-2' class='collapse navbar-collapse'>
            <ul class='nav navbar-nav'>                 
              {BOOTSTRAP_NEWS_CATEGORIES}
            </ul> 
            <div class='nav navbar-nav navbar-right'>
              {SEARCH}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
{ALERTS}
";

// Default Footer layout for ALL layouts
$LAYOUT['_footer_'] = "
<div id='footer' class='footer'>
  <div class='container'>
    <div class='row'>
      <div class='footer-inner'>
        <div class='col-md-3'>
          {SETSTYLE=bottomside}
          {MENU=10}        
        </div>
        <div class='col-md-3'>
          {SETSTYLE=bottomside}
          {MENU=11}        
        </div>
        <div class='col-md-3'>
          {SETSTYLE=bottomside}
          {MENU=12}        
        </div>
        <div class='col-md-3'>
          {SETSTYLE=bottomside}
          {MENU=13}        
        </div>
      </div>              
    </div>
    <div class='row'>
      <div class='site-info'>
        <div class='col-md-6'>
          {SITEDISCLAIMER}
          {THEME_DISCLAIMER}
        </div>
        <div class='col-md-6'>
          <div class='move-to-top'>
            <a href='#' class='top'><i class='fa fa-angle-double-up'></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>		
";

// Default layout 
$LAYOUT['magazine_three_columns'] =  "
<div id='main-content' class='container maincontent'> 
  <div class='row'>
    <div class='news-bar col-md-12'>
      <div class='panel panel-default'>
        <div class='panel-body'>
          <div class='news-bar-clock col-md-3'>
            {BOOTSTRAP_DATE}
          </div>
          <div class='breaking-news col-md-6'>
            <strong class='breaking-news-latest'>".LAN_THEME_100."</strong>
            <ul class='newsticker'>
              {BOOTSTRAP_NEWSTICKER}
            </ul>
          </div>
          <div class='page-social text-right col-md-3'>
            {XURL_ICONS}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-2'>
      <div class='leftside'>
        {SETSTYLE=leftside}
        {MENU=1}
        {MENU=2}         
      </div>
    </div>
    <div class='col-md-7'>
      <div class='centerside'>
        {SETSTYLE=centerside}
{---}  
      </div>
    </div>
    <div class='col-md-3'>
      <div class='rightside'>
        <div class='social-connected'>
          <div class='social_facebook'>
            {XURL_ICONS: type=facebook} 
            <span class='xurl-text'>".LAN_THEME_200."</span>
          </div>
          <div class='social_twitter'>
            {XURL_ICONS: type=twitter}
            <span class='xurl-text'>".LAN_THEME_201."</span>
            </div>
          <div class='google-plus'>
            {XURL_ICONS: type=google-plus}
            <span class='xurl-text'>".LAN_THEME_202."</span>
          </div>
        </div>
        <div class='tabs-wrapper'> 
          <ul class='nav nav-tabs'>
            <li class='active'><a href='#tab-1' data-toggle='tab'>".LAN_THEME_300."</a></li>
            <li><a href='#tab-2' data-toggle='tab'>".LAN_THEME_301."</a></li>
            <li><a href='#tab-3' data-toggle='tab'>".LAN_THEME_302."</a></li>
          </ul>
          <div class='tab-content'>
            <div id='tab-1' class='tab-pane fade in active'>
              {SETSTYLE=tabbedmenu}
              {MENU=20} 
            </div>
            <div id='tab-2' class='tab-pane fade'>
              {SETSTYLE=tabbedmenu}
              {MENU=21}  
            </div>
            <div id='tab-3' class='tab-pane fade'>
              {SETSTYLE=tabbedmenu}
              {MENU=22} 
            </div>
          </div>
        </div> 
        {SETSTYLE=rightside}
        {MENU=3}
        {MENU=4}         
      </div>
    </div>
  </div> 
</div>
";


// Layout for HOME -FRONTPAGE
$LAYOUT['magazine_home'] =  "
<div id='main-content' class='container maincontent'>
  <div class='row'>
    <div class='news-bar col-md-12'>
      <div class='panel panel-default'>
        <div class='panel-body'>
          <div class='news-bar-clock col-md-3'>
            {BOOTSTRAP_DATE}
          </div>
          <div class='breaking-news col-md-6'>
            <strong class='breaking-news-latest'>".LAN_THEME_100."</strong>
            <ul class='newsticker'>
              {BOOTSTRAP_NEWSTICKER}
            </ul>
          </div>
          <div class='page-social text-right col-md-3'>
            {XURL_ICONS}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='row'>
    <div class='page-top-news'>
      {BOOTSTRAP_GRID_NEWS_FEATURES_TOP}         
    </div>
  </div>
  <div class='row'>
    <div class='col-md-2'>
      <div class='leftside'>
        {BOOTSTRAP_GRID_NEWS_MENU_1}
        {BOOTSTRAP_GRID_NEWS_MENU_2}
        {SETSTYLE=leftside}
        {MENU=1}
        {MENU=2}         
      </div>
    </div>
    <div class='col-md-7'>
      <div class='centerside'>
        {BOOTSTRAP_GRID_NEWS}
        {SETIMAGE: w=720&h=90&crop=1}
        {BANNER=fizithemes_ad}
        {SETSTYLE=centerside}
        {MENU=5}          
{---}  
      </div>
    </div>
    <div class='col-md-3'>
      <div class='rightside'>
        <div class='social-connected'>
          <div class='social_facebook'>
            {XURL_ICONS: type=facebook} 
            <span class='xurl-text'>".LAN_THEME_200."</span>
          </div>
          <div class='social_twitter'>
            {XURL_ICONS: type=twitter}
            <span class='xurl-text'>".LAN_THEME_201."</span>
            </div>
          <div class='google-plus'>
            {XURL_ICONS: type=google-plus}
            <span class='xurl-text'>".LAN_THEME_202."</span>
          </div>
        </div>
        {BOOTSTRAP_GRID_NEWS_MENU_3}
        <div class='tabs-wrapper'> 
          <ul class='nav nav-tabs'>
            <li class='active'><a href='#tab-1' data-toggle='tab'>".LAN_THEME_300."</a></li>
            <li><a href='#tab-2' data-toggle='tab'>".LAN_THEME_301."</a></li>
            <li><a href='#tab-3' data-toggle='tab'>".LAN_THEME_302."</a></li>
          </ul>
          <div class='tab-content'>
            <div id='tab-1' class='tab-pane fade in active'>
              {SETSTYLE=tabbedmenu}
              {MENU=20} 
            </div>
            <div id='tab-2' class='tab-pane fade'>
              {SETSTYLE=tabbedmenu}
              {MENU=21}  
            </div>
            <div id='tab-3' class='tab-pane fade'>
              {SETSTYLE=tabbedmenu}
              {MENU=22} 
            </div>
          </div>
        </div> 
        {SETSTYLE=rightside}
        {MENU=3}
        {MENU=4}         
      </div>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-12'>
      <div class='page-bottom-news'>     
        {SETSTYLE=centerside}
        {MENU=6}
      </div>         
    </div>
  </div> 
</div>
";


// Layout for FORUM 
$LAYOUT['magazine_full_width'] =  "
<div id='main-content' class='container maincontent'> 
  <div class='row'>
    <div class='news-bar col-md-12'>
      <div class='panel panel-default'>
        <div class='panel-body'>
          <div class='news-bar-clock col-md-3'>
            {BOOTSTRAP_DATE}
          </div>
          <div class='breaking-news col-md-6'>
            <strong class='breaking-news-latest'>".LAN_THEME_100."</strong>
            <ul class='newsticker'>
              {BOOTSTRAP_NEWSTICKER}
            </ul>
          </div>
          <div class='page-social text-right col-md-3'>
            {XURL_ICONS}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-12'>
      <div class='centerside'>
        {SETSTYLE=centerside}
{---}  
      </div>
    </div>
  </div> 
</div>
";


// Layout for EXTEND NEWS 
$LAYOUT['magazine_extend_news'] =  "
<div id='main-content' class='container maincontent'> 
  <div class='row'>
    <div class='news-bar col-md-12'>
      <div class='panel panel-default'>
        <div class='panel-body'>
          <div class='news-bar-clock col-md-3'>
            {BOOTSTRAP_DATE}
          </div>
          <div class='breaking-news col-md-6'>
            <strong class='breaking-news-latest'>".LAN_THEME_100."</strong>
            <ul class='newsticker'>
              {BOOTSTRAP_NEWSTICKER}
            </ul>
          </div>
          <div class='page-social text-right col-md-3'>
            {XURL_ICONS}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-9'>
      <div class='centerside'>
        {SETSTYLE=centerside}
{---}  
      </div>
    </div>
    <div class='col-md-3'>
      <div class='rightside'>
        <div class='social-connected'>
          <div class='social_facebook'>
            {XURL_ICONS: type=facebook} 
            <span class='xurl-text'>".LAN_THEME_200."</span>
          </div>
          <div class='social_twitter'>
            {XURL_ICONS: type=twitter}
            <span class='xurl-text'>".LAN_THEME_201."</span>
            </div>
          <div class='google-plus'>
            {XURL_ICONS: type=google-plus}
            <span class='xurl-text'>".LAN_THEME_202."</span>
          </div>
        </div>
        <div class='tabs-wrapper'> 
          <ul class='nav nav-tabs'>
            <li class='active'><a href='#tab-1' data-toggle='tab'>".LAN_THEME_300."</a></li>
            <li><a href='#tab-2' data-toggle='tab'>".LAN_THEME_301."</a></li>
            <li><a href='#tab-3' data-toggle='tab'>".LAN_THEME_302."</a></li>
          </ul>
          <div class='tab-content'>
            <div id='tab-1' class='tab-pane fade in active'>
              {SETSTYLE=tabbedmenu}
              {MENU=20} 
            </div>
            <div id='tab-2' class='tab-pane fade'>
              {SETSTYLE=tabbedmenu}
              {MENU=21}  
            </div>
            <div id='tab-3' class='tab-pane fade'>
              {SETSTYLE=tabbedmenu}
              {MENU=22} 
            </div>
          </div>
        </div> 
        {SETSTYLE=rightside} 
        {MENU=3}
        {MENU=4}      
      </div>
    </div>
  </div>   
</div>
";


function rand_tag(){
        $tags = file(e_BASE."files/taglines.txt");
        return stripslashes(htmlspecialchars($tags[rand(0, count($tags))]));
}


//        [newsstyle]
/* NEWSSTYLE IS UNUSED FOR NOW */
/* NEWSSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */

      

//  [list of news category]
/* NEWSLISTSTYLE IS UNUSED FOR NOW */
/* NEWSLISTSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */


// define('ICONPRINTPDF', 'pdf.png');
// define('ICONMAIL', 'email.png');
// define('ICONPRINT', 'printer.png');
// define('ICONSTYLE', 'float: left; border:0');
define('COMMENTLINK', 	e107::getParser()->toGlyph('fa-comment'));
define('COMMENTOFFSTRING', LAN_THEME_2);
define('PRE_EXTENDEDSTRING', '');
define('EXTENDEDSTRING', LAN_THEME_3);
define('POST_EXTENDEDSTRING', '');
define('TRACKBACKSTRING', LAN_THEME_7);
define('TRACKBACKBEFORESTRING', '&nbsp;|&nbsp;');


// linkstyle
/* LINKSTYLE IS UNUSED FOR NOW */
/* LINKSTYLE IS IN THEME FOLDER/TEMPLATES/navigation_template.php */


/**
 * @param string $caption
 * @param string $text
 * @param string $id : id of the current render
 * @param array $info : current style and other menu data. 
 */ 


function tablestyle($caption, $text, $id='', $info=array()){

//	global $style; // no longer needed.

  $style = $info['setStyle'];
  
  echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";
	
	$type = $style;

	//@todo a switch will be faster than all these elseif statements. 
	
	switch($style){
  
		case "banner":
      echo "<div class='banner-menu'>{$text}</div>";
    break;
    
		case "leftside":
      echo "<div class='left-menu'>
              <div class='panel-header'><h2>{$caption}</h2></div>         		                                                      
              <div class='panel panel-default'>
                <div class='panel-body'>{$text}</div> 
              </div> 
            </div>";
    break;
    
    case "centerside":
      echo "<div class='center-menu'>
              <div class='panel-header'><h2>{$caption}</h2></div>         		                                                      
              <div class='panel panel-default'>
                <div class='panel-body'>{$text}</div> 
              </div>
            </div>";
    break;

		case "rightside":
      echo "<div class='right-menu'>
              <div class='panel-header'><h2>{$caption}</h2></div>
              <div class='panel panel-default'>
                <div class='panel-body'>{$text}</div> 
              </div>
            </div>";
    break;

		case "bottomside": 
      echo "<div class='bottom-menu'>
              <div class='bottom-menu-title'>          		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='bottom-menu-body'>{$text}</div> 
            </div>";
    break;
    
    case "tabbedmenu": 
      echo "<div class='tabbed-menu'>
              <div class='tabbed-menu-body'>{$text}</div> 
            </div>";
    break;

    default: 
      echo "<div class='other-menu'>
		          <div class='panel-header'><h2>{$caption}</h2></div>	
              <div class='panel panel-default'>	                                 
                <div class='panel-body'>{$text}</div>                       
              </div>
            </div>";
	}
}


// chatbox post style
// $CHATBOXSTYLE in THEME FOLDER/templates/chatbox_menu/chat_template.php    


// Image Version Example
// $SEARCH_SHORTCODE in THEME FOLDER/search_template.php


?>