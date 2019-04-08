<?php
/*
* Copyright (c) e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Featurebox shortcode batch class - shortcodes available site-wide. ie. equivalent to multiple .sc files.
*/

if(!defined('e107_INIT'))
{
	exit;
}



class hits_shortcodes extends e_shortcode
{
	public $override = false; // when set to true, existing core/plugin shortcodes matching methods below will be overridden. 


	function sc_hits_counter($parm = null)
	{
		return $this->getData('hits_counter', 'news');
	}

	function sc_hits_unique($parm = null)
	{
		return $this->getData('hits_unique', 'news');
	}

	private function getData($field, $type)
	{
		$sc = e107::getScBatch('news');
		$sql = e107::getDb();
		$row = $sc->getScVar('news_item');

		if(!empty($row['news_id']) && $count = $sql->retrieve('hits', $field, "hits_type = '".$type."' AND hits_itemid = ".intval($row['news_id'])." LIMIT 1"))
		{
			$count = intval($count);
			return number_format($count,0);
		}

		return false;

	}

}
