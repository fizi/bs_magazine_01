<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */



$POPULAR_MENU_TEMPLATE['default']['start'] 	= "
<ul class='media-list popular-menu'>";

$POPULAR_MENU_TEMPLATE['default']['item'] 	= '
  {SETIMAGE: w=80&h=80&crop=1}
  <li class="media">
		<a class="pull-left" href="{NEWS_URL}">{NEWS_IMAGE: type=tag&class=media-object}</a>
		<div class="media-body">
      <div class="news-category">{NEWS_CATEGORY_NAME: link=1}</div>
			<h4 class="media-heading">{NEWS_TITLE: link=1&limit=46}</h4>
			<div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M}&nbsp;{NEWS_DATE=dd},&nbsp;{NEWS_DATE=yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}</div>
			<small>{GLYPH=fa-stats} {HITS_COUNTER}</small>
		</div>
	</li>';
										
$POPULAR_MENU_TEMPLATE['default']['end'] 	= "
</ul>";