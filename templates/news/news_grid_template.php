<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	$NEWS_GRID_TEMPLATE['col-md-6']['start'] = '
  <div class="row news-grid-default news-menu-grid">';

	$NEWS_GRID_TEMPLATE['col-md-6']['featured'] = '
    <div class="row featured">
		  <div class="col-sm-12">
			  <div class="item col-sm-6" >
					{SETIMAGE: w=600&h=400&crop=1}
					{NEWSTHUMBNAIL=placeholder}
				</div>
			  <div class="item col-sm-6">
		      <h3>{NEWSTITLE}</h3>
		      <p>{NEWSMETADIZ: limit=100}</p>
		      <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">'.LAN_READ_MORE.'</a></p>
	      </div>
	    </div>
	  </div>';

	$NEWS_GRID_TEMPLATE['col-md-6']['item'] = '
    <div class="item col-md-6">
			{SETIMAGE: w=400&h=400&crop=1}
			{NEWSTHUMBNAIL=placeholder}
      <h3>{NEWS_TITLE}</h3>
      <p>{NEWS_SUMMARY}</p>
      <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
    </div>';

	$NEWS_GRID_TEMPLATE['col-md-6']['end'] = '
  </div>';




	$NEWS_GRID_TEMPLATE['col-md-4']['start'] = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
  
	$NEWS_GRID_TEMPLATE['col-md-4']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
  
  $NEWS_GRID_TEMPLATE['col-md-4']['item'] = '
    <div class="item col-md-4">
			{SETIMAGE: w=400&h=400&crop=1}
			{NEWSTHUMBNAIL=placeholder}
	    <h3>{NEWS_TITLE}</h3>
	    <p>{NEWS_SUMMARY}</p>
	    <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
    </div>';
    
	$NEWS_GRID_TEMPLATE['col-md-4']['end'] = $NEWS_GRID_TEMPLATE['col-md-6']['end'];




	$NEWS_GRID_TEMPLATE['col-md-3']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
  
	$NEWS_GRID_TEMPLATE['col-md-3']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
  
  $NEWS_GRID_TEMPLATE['col-md-3']['item']     = '
    <div class="item col-md-3">
			{SETIMAGE: w=400&h=400&crop=1}
			{NEWSTHUMBNAIL=placeholder}
	    <h3>{NEWS_TITLE}</h3>
	    <p>{NEWS_SUMMARY}</p>
	    <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
    </div>';
    
	$NEWS_GRID_TEMPLATE['col-md-3']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];




	//@todo find a better name than 'other'
	$NEWS_GRID_TEMPLATE['other']['start'] = '
  <div class="row news-grid-other">';

	$NEWS_GRID_TEMPLATE['other']['featured'] = '
    <div class="featured item col-sm-6" >
			{SETIMAGE: w=600&h=400&crop=1}
			{NEWSTHUMBNAIL=placeholder}
			<h3><a href="{NEWS_URL}">{NEWS_TITLE}</a></h3>
			<p>{NEWS_SUMMARY: limit=60}</p>
		</div>';

	$NEWS_GRID_TEMPLATE['other']['item'] = '
    <div class="item col-sm-6">
			{SETIMAGE: w=120&h=120&crop=1}
			<ul class="media-list">
				<li class="media">
					<div class="media-left media-top">
						<a href="{NEWS_URL}">{NEWS_IMAGE: class=media-object img-rounded&placeholder=1}</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading"><a href="{NEWS_URL}">{NEWS_TITLE}</a></h4>
						<p>{NEWS_SUMMARY: limit=60}</p>
					</div>
				</li>
			</ul>
    </div>';

	$NEWS_GRID_TEMPLATE['other']['end'] = '</div>';
  
  
  
  
/***********************************************************************************************************************************/
  
  //  fizi - This News Grid for 2. category's news (exaple: politics in test site) 
	$NEWS_GRID_TEMPLATE['news-grid-1']['start'] = '
    <div class="news-grig-1-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-1">
      <div class="panel panel-default">
        <div class="panel-body">';

	$NEWS_GRID_TEMPLATE['news-grid-1']['featured'] = '
          <div class="featured-item">
			      {SETIMAGE: w=320&h=240&crop=1}
            <div class="media">
              <a class="pull-left news-image" href="{NEWSURL}">{NEWS_IMAGE: type=tag&class=media-object}</a>
              <div class="media-body">
                <h3 class="media-heading">{NEWS_TITLE: link=1}</h3>
                <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
						    <div class="news-body">{NEWSSUMMARY: limit=200}</div>
                <div class="text-right"><a class="btn btn-primary btn-sm" href="{NEWSURL}">'.LAN_READ_MORE.'</a></div>
					    </div>
				    </div>
          </div>
          <div class="items">';

	$NEWS_GRID_TEMPLATE['news-grid-1']['item'] = '
            <div class="col-sm-3 item">
			        {SETIMAGE: w=800&h=600&crop=1}
              <div class="news-image">
                {NEWS_IMAGE}
              </div>
				      <h4 class="news-title">{NEWS_TITLE: link=1&limit=50}</h4>
              <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
				      <div class="news-body">{NEWSSUMMARY: limit=100}</div>
            </div>';

	$NEWS_GRID_TEMPLATE['news-grid-1']['end'] = '
          </div>
        </div>
      </div>
    </div>';
    
    
  //  fizi - This News Grid for 3. category's news (exaple: culture in test site)
	$NEWS_GRID_TEMPLATE['news-grid-2']['start'] = '
    <div class="news-grig-2-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-2"> 
      <div class="panel panel-default">
        <div class="panel-body">';

	$NEWS_GRID_TEMPLATE['news-grid-2']['featured'] = '
          <div class="featured-item col-sm-7" >
			      {SETIMAGE: w=800&h=600&crop=1}
            <div class="news-image">
				      {NEWS_IMAGE}
            </div>
				    <h3 class="news-title">{NEWS_TITLE: link=1}</h3>
            <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
				    <div class="news-body">{NEWSSUMMARY: limit=200}</div>
            <div class="text-left"><a class="btn btn-primary btn-sm" href="{NEWSURL}">'.LAN_READ_MORE.'</a></div>
			    </div>
          <div class="items col-sm-5">';

	$NEWS_GRID_TEMPLATE['news-grid-2']['item'] = '
            <div class="item">
			        {SETIMAGE: w=100&h=100&crop=1} 
				      <div class="media">
							  <a class="pull-left news-image" href="{NEWSURL}">{NEWS_IMAGE: type=tag&class=media-object}</a>
						    <div class="media-body">
							    <h4 class="media-heading">{NEWS_TITLE: link=1&limit=50}</h4>
                  <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
							    <div class="news-body">{NEWSSUMMARY: limit=100}</div>
						    </div>
				      </div>
            </div>';

	$NEWS_GRID_TEMPLATE['news-grid-2']['end'] = '
          </div>
        </div>
      </div>
    </div>';
    
    
  //  fizi - This News Grid for 6. category's news (exaple: music in test site)
	$NEWS_GRID_TEMPLATE['news-grid-3']['start'] = '
    <div class="col-sm-6">
      <div class="news-grig-3-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
      <div class="news-grid-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="items">';

	// $NEWS_GRID_TEMPLATE['news-grid-3']['featured'] = '';

	$NEWS_GRID_TEMPLATE['news-grid-3']['item'] = '
              <div class="item">
			          {SETIMAGE: w=100&h=100&crop=1}
				        <div class="media">
							    <a class="pull-left news-image" href="{NEWSURL}">{NEWS_IMAGE: type=tag&class=media-object}</a>
						      <div class="media-body">
							      <h4 class="media-heading">{NEWS_TITLE: link=1&limit=50}</h4>
                    <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
							      <div class="news-body">{NEWSSUMMARY: limit=100}</div>
						      </div>
				        </div>
              </div>';

	$NEWS_GRID_TEMPLATE['news-grid-3']['end'] = '
            </div>
          </div>
        </div>
      </div>
    </div>';
    
    
  //  fizi - This News Grid for 9. category's news (exaple: movie in test site)
	$NEWS_GRID_TEMPLATE['news-grid-4']['start'] = '
    <div class="col-sm-6">
      <div class="news-grig-4-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
      <div class="news-grid-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="items">';

  // $NEWS_GRID_TEMPLATE['news-grid-4']['featured'] = '';

	$NEWS_GRID_TEMPLATE['news-grid-4']['item'] = '
              <div class="item">
			          {SETIMAGE: w=800&h=600&crop=1}
                <div class="news-image">
                  {NEWS_IMAGE}
                </div>
				        <h4 class="news-title">{NEWS_TITLE: link=1}</h4>
                <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
				        <div class="news-body">{NEWSSUMMARY: limit=200}</div>
              </div>';

	$NEWS_GRID_TEMPLATE['news-grid-4']['end'] = '
            </div>
          </div>
        </div>
      </div>
    </div>';
    
    
  //  fizi - This News Grid for 4. category's news (exaple: economy in test site)
	$NEWS_GRID_TEMPLATE['news-grid-5']['start'] = '
    <div class="news-grig-5-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-5">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="items">';

	// $NEWS_GRID_TEMPLATE['news-grid-5']['featured'] = '';

	$NEWS_GRID_TEMPLATE['news-grid-5']['item'] = '
            <div class="col-sm-3 item">
			        {SETIMAGE: w=800&h=600&crop=1}
              <div class="news-image">
                {NEWS_IMAGE}
              </div>
				      <h4 class="news-title">{NEWS_TITLE: link=1&limit=50}</h4>
              <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
				      <div class="news-body">{NEWSSUMMARY: limit=100}</div>
            </div>';

	$NEWS_GRID_TEMPLATE['news-grid-5']['end'] = '
          </div>
        </div>
      </div>
    </div>';


  //  fizi - This News Grid for 5. category's news (exaple: sport in test site)
	$NEWS_GRID_TEMPLATE['news-grid-6']['start'] = '
    <div class="news-grig-6-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-6">
      <div class="panel panel-default">
        <div class="panel-body">';

	$NEWS_GRID_TEMPLATE['news-grid-6']['featured'] = '
          <div class="featured-item" >
			      {SETIMAGE: w=800&h=600&crop=1}
            <div class="news-image">
				      {NEWS_IMAGE}
            </div>
				    <h3 class="news-title">{NEWS_TITLE: link=1}</h3>
            <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
				    <div class="news-body">{NEWSSUMMARY: limit=200}</div>
            <div class="text-right"><a class="btn btn-primary btn-sm" href="{NEWSURL}">'.LAN_READ_MORE.'</a></div>
			    </div>
          <div class="items">';

	$NEWS_GRID_TEMPLATE['news-grid-6']['item'] = '
            <div class="item">
			        {SETIMAGE: w=100&h=100&crop=1}
				      <div class="media">
							  <a class="pull-left news-image" href="{NEWSURL}">{NEWS_IMAGE: type=tag&class=media-object}</a>
						    <div class="media-body">
							    <h4 class="media-heading">{NEWS_TITLE: link=1&limit=50}</h4>
                  <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
							    <div class="news-body">{NEWSSUMMARY: limit=100}</div>
						    </div>
				      </div>
            </div>';

	$NEWS_GRID_TEMPLATE['news-grid-6']['end'] = '
          </div>
        </div>
      </div>
    </div>';
    
    
  //  fizi - This News Grid for 8. category's news (exaple: travel in test site)
	$NEWS_GRID_TEMPLATE['news-grid-7']['start'] = '
    <div class="news-grig-7-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-7">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="items">';

	// $NEWS_GRID_TEMPLATE['news-grid-7']['featured'] = '';

	$NEWS_GRID_TEMPLATE['news-grid-7']['item'] = '
            <div class="item">
				      {SETIMAGE: w=800&h=600&crop=1}
              <div class="news-image">
                {NEWS_IMAGE}
              </div>
				      <h4 class="news-title">{NEWS_TITLE: link=1&limit=50}</h4>
              <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
				      <div class="news-body">{NEWSSUMMARY: limit=100}</div>
            </div>';

	$NEWS_GRID_TEMPLATE['news-grid-7']['end'] = '
          </div> 
        </div>
      </div>
    </div>';
    
    
  //  fizi - This News Grid for 7. category's news (exaple: games in test site)
	$NEWS_GRID_TEMPLATE['news-grid-8']['start'] = '
    <div class="news-grig-8-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-8">
      <div class="panel panel-default">
        <div class="panel-body">';

	$NEWS_GRID_TEMPLATE['news-grid-8']['featured'] = '
          <div class="featured-item" >
			      {SETIMAGE: w=800&h=600&crop=1}
            <div class="news-image">
				      {NEWS_IMAGE}
            </div>
				    <h4 class="news-title">{NEWS_TITLE: link=1}</h4>
            <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
				    <div class="news-body">{NEWSSUMMARY: limit=200}</div>
            <div class="text-center"><a class="btn btn-primary btn-xs" href="{NEWSURL}">'.LAN_READ_MORE.'</a></div>
			    </div>
          <div class="items">';

	$NEWS_GRID_TEMPLATE['news-grid-8']['item'] = '
            <div class="item">
			        {SETIMAGE: w=100&h=100&crop=1}
				      <div class="media">
						    <div class="media-body">
							    <h5 class="media-heading">{NEWS_TITLE: link=1&limit=50}</h5>
                  <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
						    </div>
				      </div>
            </div>';

	$NEWS_GRID_TEMPLATE['news-grid-8']['end'] = '
          </div>
        </div>
      </div>
    </div>';
 
    
    //  fizi - This News Grid for all category's news - 4 items on top
	$NEWS_GRID_TEMPLATE['news-grid-9']['start'] = '
    <div class="col-md-12">
      <div class="items">';

	// $NEWS_GRID_TEMPLATE['news-grid-9']['featured'] = '';

	$NEWS_GRID_TEMPLATE['news-grid-9']['item'] = '
        <div class="col-sm-3 item">
			    {SETIMAGE: w=800&h=600&crop=1}
          <a href="{NEWSURL}">
            <div class="image">
              {NEWS_IMAGE: type=tag}
            </div>
            <div class="news-header">
              <div class="news-header-category">{NEWS_CATEGORY_NAME}</div>
              <h5>{NEWS_TITLE}</h5> 
            </div>  
            <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>                     
          </a>
        </div>';

	$NEWS_GRID_TEMPLATE['news-grid-9']['end'] = '
      </div>
    </div>';
    
    
  //  fizi - This News Grid 10 for XXX. category's news (text on image)
	$NEWS_GRID_TEMPLATE['news-grid-10']['start'] = '
    <div class="news-grig-10-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
    <div class="news-grid-10">
      <div class="panel panel-default">
        <div class="panel-body">';

	$NEWS_GRID_TEMPLATE['news-grid-10']['featured'] = '
          <div class="featured-item" >
			      {SETIMAGE: w=800&h=600&crop=1}
            <div class="news-image">
				      {NEWS_IMAGE}
            </div>
				    <h3 class="news-title">{NEWS_TITLE: link=1}</h3>
            <div class="news-date">{GLYPH=fa-calendar-o}&nbsp;{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
				    <div class="news-body">{NEWSSUMMARY: limit=200}</div>
            <div class="text-right"><a class="btn btn-primary btn-sm" href="{NEWSURL}">'.LAN_READ_MORE.'</a></div>
			    </div>
          <div class="items">';

	$NEWS_GRID_TEMPLATE['news-grid-10']['item'] = '
            <div class="item">
				      {SETIMAGE: w=800&h=600&crop=1}
              <div class="news-image">
                {NEWS_IMAGE}
                <div class="news-header">
                  <h4 class="news-title">{NEWS_TITLE}</h4>
                  <div class="news-date">{NEWS_DATE=M dd, yyyy}</div>
                </div>
                <div class="news-info">{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_UNIQUE}</div>
              </div>
            </div>';

	$NEWS_GRID_TEMPLATE['news-grid-10']['end'] = '
          </div> 
        </div>
      </div>
    </div>';
 