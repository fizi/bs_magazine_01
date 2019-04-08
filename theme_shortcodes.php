<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/

class theme_shortcodes extends e_shortcode {
  function __construct(){
		
	}
  
/*----------------------------- 
  LOGIN SHORTCODE 
-----------------------------*/  
	                     
	function sc_bootstrap_usernav($parm='')
	{

		$placement = e107::pref('theme', 'usernav_placement', 'top');

		if($parm['placement'] != $placement)
		{
			return '';
		}

		e107::includeLan(e_PLUGIN."login_menu/languages/".e_LANGUAGE.".php");
		
		$tp = e107::getParser();		   
		require(e_PLUGIN."login_menu/login_menu_shortcodes.php"); // don't use 'require_once'.

		$direction = vartrue($parm['dir']) == 'up' ? ' dropup' : '';
		
		$userReg = defset('USER_REGISTRATION');
				   
		if(!USERID) // Logged Out. 
		{		
			$text = '
			<ul class="nav navbar-nav navbar-right'.$direction.'">';

			if($userReg==1)
			{
				$text .= '
				<li><a href="'.e_SIGNUP.'">'.LAN_LOGINMENU_3.'</a></li>
				'; // Signup
			}


			$socialActive = e107::pref('core', 'social_login_active');

			if(!empty($userReg) || !empty($socialActive)) // e107 or social login is active.
			{
				$text .= '
				<li class="divider-vertical"></li>
				<li class="dropdown">
			
				<a class="dropdown-toggle" href="#" data-toggle="dropdown">'.LAN_LOGINMENU_51.' <strong class="caret"></strong></a>
				<div class="dropdown-menu col-sm-12" style="min-width:250px; padding: 15px; padding-bottom: 0px;">
				
				{SOCIAL_LOGIN: size=2x&label=1}
				'; // Sign In
			}
			else
			{
				return '';
			}
			
			
			if(!empty($userReg)) // value of 1 or 2 = login okay. 
			{

			//	global $sc_style; // never use global - will impact signup/usersettings pages. 
			//	$sc_style = array(); // remove any wrappers.

				$text .='	
				
				<form method="post" onsubmit="hashLoginPassword(this);return true" action="'.e_REQUEST_HTTP.'" accept-charset="UTF-8">
				<p>{LM_USERNAME_INPUT}</p>
				<p>{LM_PASSWORD_INPUT}</p>


				<div class="form-group"></div>
				{LM_IMAGECODE_NUMBER}
				{LM_IMAGECODE_BOX}
				
				<div class="checkbox">
				
				<label class="string optional" for="autologin"><input style="margin-right: 10px;" type="checkbox" name="autologin" id="autologin" value="1">
				'.LAN_LOGINMENU_6.'</label>
				</div>
				<input class="btn btn-primary btn-block" type="submit" name="userlogin" id="userlogin" value="'.LAN_LOGINMENU_51.'">
				';
				
				$text .= '
				
				<a href="{LM_FPW_LINK=href}" class="btn btn-default btn-sm  btn-block">'.LAN_LOGINMENU_4.'</a>
				<a href="{LM_RESEND_LINK=href}" class="btn btn-default btn-sm  btn-block">'.LAN_LOGINMENU_40.'</a>
				';
				
				
				/*
				$text .= '
					<label style="text-align:center;margin-top:5px">or</label>
					<input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
					<input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
				';
				*/
				
				$text .= "<p></p>
				</form>
				</div>
				
				</li>
				";
			
			}

			$text .= "
			
			
			</ul>";	
			
			
			
			return $tp->parseTemplate($text, true, $login_menu_shortcodes);
		}  

		
		// Logged in. 
		//TODO Generic LANS. (not theme LANs) 	

		$userNameLabel = !empty($parm['username']) ? USERNAME : '';

		$text = '
		
		<ul class="nav navbar-nav navbar-right'.$direction.'">
		<li class="dropdown">{PM_NAV}</li>
		<li class="dropdown dropdown-avatar"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{SETIMAGE: w=30} {USER_AVATAR: shape=circle} '. $userNameLabel.' <b class="caret"></b></a>
		<ul class="dropdown-menu">
		<li>
			<a href="{LM_USERSETTINGS_HREF}"><span class="glyphicon glyphicon-cog"></span> '.LAN_SETTINGS.'</a>
		</li>
		<li>
			<a class="dropdown-toggle no-block" role="button" href="{LM_PROFILE_HREF}"><span class="glyphicon glyphicon-user"></span> '.LAN_LOGINMENU_13.'</a>
		</li>
		<li class="divider"></li>';
		
		if(ADMIN) 
		{
			$text .= '<li><a href="'.e_ADMIN_ABS.'"><span class="fa fa-cogs"></span> '.LAN_LOGINMENU_11.'</a></li>';	
		}
		
		$text .= '
		<li><a href="'.e_HTTP.'index.php?logout"><span class="glyphicon glyphicon-off"></span> '.LAN_LOGOUT.'</a></li>
		</ul>
		</li>
		</ul>
		
		';


		return $tp->parseTemplate($text,true,$login_menu_shortcodes);
	}	
	
    
/*----------------------------- 
  NEWS GRID SHORTCODE 
-----------------------------*/  
  function sc_bootstrap_grid_news(){
  
    $template = "
        <!-- News Grid Menu for Center Column 1. category -->
        {MENU: path=news/news_grid&limit=5&category=2&source=latest&featured=1&layout=news-grid-1}
        <!-- News Grid Menu for Center Column 2. category -->
        {MENU: path=news/news_grid&limit=5&category=3&source=latest&featured=1&layout=news-grid-2}
        
        <div class='row'> 
          <!-- News Grid Menu for Center Column 3. category -->
          {MENU: path=news/news_grid&limit=5&category=6&source=latest&featured=0&layout=news-grid-3}
          <!-- News Grid Menu for Center Column 4. category -->
          {MENU: path=news/news_grid&limit=2&category=9&source=latest&featured=2&layout=news-grid-4}
        </div>
        <!-- News Grid Menu for Center Column 5. category -->
        {MENU: path=news/news_grid&limit=4&category=4&source=latest&featured=0&layout=news-grid-5}

    ";

    $text = e107::getParser()->parseTemplate($template,true);

    echo $text;
  
  }
  
  function sc_bootstrap_grid_news_menu_3(){
  
    $template = "
        <!-- News Grid Menu for Right Column 6. category -->
        {MENU: path=news/news_grid&limit=4&category=5&source=latest&featured=1&layout=news-grid-10}

    ";

    $text = e107::getParser()->parseTemplate($template,true);

    echo $text;
  
  }
  
  function sc_bootstrap_grid_news_menu_1(){
  
    $template = "
        <!-- News Grid Menu for Left Column 7. category -->
        {MENU: path=news/news_grid&limit=4&category=8&source=latest&featured=0&layout=news-grid-7}

    ";

    $text = e107::getParser()->parseTemplate($template,true);

    echo $text;
  
  }  
  
  function sc_bootstrap_grid_news_menu_2(){
  
    $template = "
        <!-- News Grid Menu for Left Column 8. category -->
        {MENU: path=news/news_grid&limit=5&category=7&source=latest&featured=1&layout=news-grid-7}

    ";

    $text = e107::getParser()->parseTemplate($template,true);

    echo $text;
  
  }
  
  function sc_bootstrap_grid_news_features_top(){
  
    $template = "
        <!-- News Grid Menu for PageTop Latest 4 News -->
        {MENU: path=news/news_grid&limit=4&category=0&source=latest&featured=0&layout=news-grid-9}

    ";

    $text = e107::getParser()->parseTemplate($template,true);

    echo $text;
  
  }   
  

/*----------------------------- 
  NEWS CATEGORIES ON TOP 
-----------------------------*/  
  function sc_bootstrap_news_categories(){
  
    $news   = e107::getObject('e_news_category_tree');  // get news class.
    $sc     = e107::getScBatch('news'); // get news shortcodes.
    $tp     = e107::getParser(); // get parser.

    // load active news categories. ie. the correct userclass etc.
    $data = $news->loadActive(false)->toArray();  // false to utilize the built-in cache.

    $TEMPLATE = "<li>{NEWS_CATEGORY_NAME: link=1}</li>";

    $text = '';

    foreach($data as $row){
      $sc->setScVar('news_item', $row); // send $row values to shortcodes.
      $text .= $tp->parseTemplate($TEMPLATE, true, $sc); // parse news shortcodes.
    }

    return $text;

  }


/*----------------------------- 
  DATE ON TOP OF PAGE 
-----------------------------*/    
  function sc_bootstrap_date(){
  
    return e107::getParser()->toDate(time(), 'DD, MM dd, yyyy');
  
  } 


/*----------------------------- 
  NEWSTICKER ON TOP 
-----------------------------*/    
  function sc_bootstrap_newsticker(){
  
    $news   = e107::getObject('e_news_tree');  // get news class.
    $sc     = e107::getScBatch('news'); // get news shortcodes.
    $tp     = e107::getParser(); // get parser.

    $newsCategory = 0; // null, number or array(1,3,4);

    $opts = array(
        'db_order'  =>'n.news_sticky DESC, n.news_datestamp DESC', //default is n.news_datestamp DESC
        'db_where'  => "FIND_IN_SET(0, n.news_render_type)", // optional
        'db_limit'  => '10', // default is 10
    );

    // load active news items. ie. the correct userclass, start/end time etc.
    $data = $news->loadJoinActive($newsCategory, false, $opts)->toArray();  // false to utilize the built-in cache.
    $TEMPLATE = "<li>{NEWS_TITLE: link=1}</li>";

    $text = '';

    foreach($data as $row)
    {

        $sc->setScVar('news_item', $row); // send $row values to shortcodes.
        $text .= $tp->parseTemplate($TEMPLATE, true, $sc); // parse news shortcodes.
    }

    return $text;
  
  } 
  
} 
 
?>