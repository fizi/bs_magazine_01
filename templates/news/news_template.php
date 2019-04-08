<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;

###### Default list item (temporary) - TODO rewrite news ######
//$NEWS_MENU_TEMPLATE['list']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['list']['end']         = '</ul>';

$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '{SETIMAGE: w=400&h=350&crop=1}';
$NEWS_TEMPLATE['list']['end']	= '';
$NEWS_TEMPLATE['list']['item']	= '
<div class="row">
  <div class="news-list-item">
    <div class="col-md-4">
      <div class="news-list-image">
        {NEWSIMAGE: item=1}
      </div>
	  </div>
	  <div class="col-md-8">
      <h3 class="news-list-title">{NEWS_TITLE: link=1}</h3>
      <div class="news-list-summary">{NEWS_SUMMARY: limit=100}</div>
      <div class="news-list-more">
        <a href="{NEWSURL}" class="btn btn-small btn-primary">'.LAN_READ_MORE.'</a>
      </div>
    </div> 
 	</div>
</div>
<hr />';



/* FOR NEWS ITEM ON NEWS.PHP ***********************************************************************/

// $NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>'; 


$NEWS_TEMPLATE['default']['start'] = ' ';
$NEWS_TEMPLATE['default']['end'] = ' ';

$NEWS_TEMPLATE['default']['item'] = '
{SETIMAGE: w=900&h=600&crop=1}
<div class="default-item">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="default-item-header">
        <div class="news-category">{NEWSCATEGORY}</div> 
        <div class="news-title"><h2>{NEWS_TITLE: link=1}</h2></div>
        <div class="news-info">
          <span>{NEWS_DATE=short}</span>
          <span>'.LAN_THEME_4.'&nbsp;{NEWS_AUTHOR}</span>
          <span>'.LAN_THEME_1.'&nbsp;{NEWS_COMMENT_COUNT}</span>
          <span>'.LAN_THEME_50.'&nbsp;{HITS_UNIQUE}</span>
        </div>
      </div>
      <div class="news-images-main">{NEWSIMAGE: item=1}</div>
      <div class="news-content">
        <div class="lead">{NEWS_SUMMARY}</div>
        {NEWSVIDEO: item=1}
        <div class="news-body">{NEWS_BODY}</div>
        <div class="news-extended text-center">{EXTENDED}</div>
        <div class="row news-bottom">
          <div class="col-md-6 tags"><small>{GLYPH=tags} &nbsp;{NEWSTAGS}</small></div>
          <div class="clo-md-6 btn-group hidden-print">{PRINTICON: class=btn btn-default}{ADMINOPTIONS: class=btn btn-default}{SOCIALSHARE: type=basic}</div> 
        </div>
      </div>
    </div>
  </div>
</div>'; 



/* FOR NEWS ITEM ON CATEGORY'S PAGE **************************************************************************/
$NEWS_TEMPLATE['category']['start'] = '
<div class="newscatitems">
  <div class="newscatitems-header"><h2>{NEWS_CATEGORY_NAME}</h2></div>
  <div class="panel panel-default">
    <div class="panel-body">
';
$NEWS_TEMPLATE['category']['end'] = '
    </div>
  </div>
</div>
';

$NEWS_TEMPLATE['category']['item'] = '
{SETIMAGE: w=900&h=600&crop=1}
<div class="newscatitem">
  <div class="newscatitem-header">
    <div class="newscatitem-category">{NEWSCATEGORY}</div> 
    <div class="newscatitem-title"><h2>{NEWS_TITLE: link=1}</h2></div>
    <div class="newscatitem-info">
      <span>{NEWS_DATE=short}</span>
      <span>'.LAN_THEME_4.'&nbsp;{NEWS_AUTHOR}</span>
      <span>'.LAN_THEME_1.'&nbsp;{NEWS_COMMENT_COUNT}</span>
      <span>'.LAN_THEME_50.'&nbsp;{HITS_UNIQUE}</span>
    </div>
  </div>
  <div class="newscatitem-images-main">{NEWSIMAGE: item=1}</div>
  <div class="newscatitem-content">
    <div class="lead">{NEWS_SUMMARY}</div>
    {NEWSVIDEO: item=1}
    <div class="newscatitem-body">{NEWS_BODY}</div>
    <div class="newscatitem-extended text-center">{EXTENDED}</div>
    <div class="row newscatitem-bottom">
      <div class="col-md-6 tags"><small>{GLYPH=tags} &nbsp;{NEWSTAGS}</small></div>
      <div class="clo-md-6 btn-group hidden-print">{PRINTICON: class=btn btn-default}{ADMINOPTIONS: class=btn btn-default}{SOCIALSHARE: type=basic}</div> 
    </div>      
  </div>
</div>'; 



/* FOR EXTEND NEWS ITEM ***************************************************************************/

// $NEWS_WRAPPER['view']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>';

$NEWS_TEMPLATE['view']['item'] = ' 
{SETIMAGE: w=900&h=600&crop=1} 
<div class="view-item">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="view-item-header">
        <div class="news-category">{NEWSCATEGORY}</div> 
        <div class="news-title"><h2>{NEWS_TITLE}</h2></div>
        <div class="news-info">
          <span>{NEWS_DATE=short}</span>
          <span>'.LAN_THEME_1.'&nbsp;{NEWS_COMMENT_COUNT}</span>
          <span>'.LAN_THEME_50.'&nbsp;{HITS_UNIQUE}</span>
        </div>
      </div>
      <div class="news-images-main">{NEWSIMAGE: item=1}</div>
      <div class="news-author">
        <div class="news-author-image">
          {SETIMAGE: w=100&h=100&crop=1} 
          {NEWS_AUTHOR_AVATAR: shape=circle}
        </div>
        <div class="news-author-name">'.LAN_THEME_4.'&nbsp;{NEWS_AUTHOR}</div>
      </div>
      <div class="news-content"> 
        <div class="news-body">{NEWS_BODY=body}</div>
        <div class="row news-videos-1">
			    <div class="col-md-4">{NEWSVIDEO: item=1}</div>
		 	    <div class="col-md-4">{NEWSVIDEO: item=2}</div>
		 	    <div class="col-md-4">{NEWSVIDEO: item=3}</div>
			  </div>
        {SETIMAGE: w=400&h=400}			
			  <div class="row news-images-1">
        	<div class="col-md-6">{NEWSIMAGE: item=2}</div>
        	<div class="col-md-6">{NEWSIMAGE: item=3}</div>
        </div>
        <div class="row news-images-2">
        	<div class="col-md-6">{NEWSIMAGE: item=4}</div>
        	<div class="col-md-6">{NEWSIMAGE: item=5}</div>
        </div>
        <div class="news-body-extended">
				  {NEWS_BODY=extended}
			  </div>
        <div class="row news-videos-2">
          <div class="col-md-6">{NEWSVIDEO: item=4}</div>
			    <div class="col-md-6">{NEWSVIDEO: item=5}</div>
        </div>
        <div class="news-tags"><span>'.LAN_THEME_60.'</span>&nbsp;{NEWSTAGS}</div>
        <div class="news-options">
			    <div class="btn-group">{PRINTICON: class=btn btn-default}{ADMINOPTIONS: class=btn btn-default}{SOCIALSHARE: type=basic}</div>
		    </div>
      </div>
    </div>
    <div class="row post-by-author">
      <h3 class="about-author">'.LAN_THEME_70.'</h3>    
      <div class="col-md-12 post-by-author-inner">
        <div class="col-md-3">
	        <div class="post-by-author-avatar">
            {SETIMAGE: w=120&h=120&crop=1}
            {NEWS_AUTHOR_AVATAR: shape=circle}
          </div>
        </div> 
        <div class="col-md-9">                 
	        <div class="post-by-author-body">
	          <h4>{NEWS_AUTHOR}</h4>
	          <div class="post-by-author-signature">{NEWS_AUTHOR_SIGNATURE}</div>
	          <a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">'.LAN_THEME_71.'</a>
	        </div>
        </div>          
      </div>
    </div>    
  </div>
</div>
{NEWSRELATED: limit=6&types=news}
{NEWSNAVLINK}
';


/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


//$NEWS_MENU_TEMPLATE['view']['separator']   = '<br />';


### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['start'] = '
{SETIMAGE: w=800&h=600&crop=1}
<div class="related-news-title"><h2>'.LAN_RELATED.'</h2></div>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">';

$NEWS_TEMPLATE['related']['item'] = '
      <div class="col-md-4">
        <div class="related-news-image">
          <a href="{RELATED_URL}">{RELATED_IMAGE}</a>
        </div> 
        <div class="related-news-header">
          <h4 class="related-news-caption"><a href="{RELATED_URL}">{RELATED_TITLE}</a></h4>
          <div class="related-news-summary">{RELATED_SUMMARY}</div> 
        </div>
      </div>';
  
$NEWS_TEMPLATE['related']['end'] = '
    </div>
  </div>
</div>';