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

$plugin_info = array(
						'pi_name'			=> 'Hop Listifier',
						'pi_version'		=> '1.0',
						'pi_author'			=> 'Travis Smith',
						'pi_author_url'		=> 'https://www.hopstudios.com/software/listifier',
						'pi_description'	=> 'Makes a block of text into list items',
						'pi_usage'			=> Hop_listifier::usage()
					);


class Hop_listifier {
	
	var $return_data;
	
	// ----------------------------------------
	//  Constructor
	// ----------------------------------------
	
	function __construct()
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
		$this->return_data =  $text;
	}
		 
		
	// ----------------------------------------
	//  Plugin Usage
	// ----------------------------------------
	
	// This function describes how the plugin is used.
	// Make sure and use output buffering
	
	function usage()
	{
	ob_start(); 
?>
To use this plugin, wrap the block of text you want to be processed by it between these tag pairs:

{exp:listifier separator=","}

:replace me:

{/exp:listifier}

Please see <a href="http://www.hopstudios.com/software/">http://www.hopstudios.com/software/</a> for additional documentation.</p>

<?php
	$buffer = ob_get_contents();
		
	ob_end_clean(); 
	
	return $buffer;
	}
	// END

}
?>