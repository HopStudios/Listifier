<?php

/*
==========================================================
	This software package is intended for use with 
	ExpressionEngine.	ExpressionEngine is Copyright � 
	2002-2009 EllisLab, Inc. 
	http://ellislab.com/
==========================================================
	THIS IS COPYRIGHTED SOFTWARE, All RIGHTS RESERVED.
	Written by: Travis Smith
	Copyright (c) 2009 Hop Studios
	http://www.hopstudios.com/software/
--------------------------------------------------------
	Please do not distribute this software without written
	consent from the author.
==========================================================
	Files:
	- pi.listifier.php
----------------------------------------------------------
	Purpose: 
	- Makes a block of text into list items
----------------------------------------------------------
	Notes: 
	- None
==========================================================
*/

require_once PATH_THIRD.'listifier/config.php';


class Listifier {
	
	var $return_data;
	
	// ----------------------------------------
	//  Constructor
	// ----------------------------------------
	
	function Listifier()
	{
		// Define stuff
		$text = "";

		// Fetch parameters
		$text = ee()->TMPL->tagdata;
		
		$separator = (ee()->TMPL->fetch_param('separator')) ? ee()->TMPL->fetch_param('separator') : "\n";

		// put in li tags between each item
		$text = str_replace($separator, "</li>\n<li>" , $text);
		// and at the beginning and end
		$text = "<li>" . $text . "</li>";
		
		// Return it
		$this->return_data = $text;
	}

}
?>