<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * bookmarks_model
 * 
 * Description
 * 
 * @license		Copyright Xulon Press, Inc. All Rights Reserved.
 * @author		Xulon Press
 * @link		http://xulonpress.com
 * @email		info@xulonpress.com
 * 
 * @file		bookmarks_model.php
 * @version		1.0
 * @date		02/08/2012
 * 
 * Copyright (c) 2012
 */

// --------------------------------------------------------------------------

/**
 * bookmarks_model class.
 * 
 * @extends CI_Model
 */
class bookmarks_model extends CI_Model
{
	// --------------------------------------------------------------------------
	
	/**
	 * bookmarks_table function.
	 * 
	 * @access public
	 * @return void
	 */
	public function bookmarks_table()
	{
		return $this->db->get('bookmarks');
	}
	
	// --------------------------------------------------------------------------
}
/* End of file bookmarks_model.php */
/* Location: ./bookymark/application/models/bookmarks_model.php */