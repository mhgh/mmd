<?php
/*
        Copyright (c) 2015 Mohammad Hossein Ghaffari
	Question2Answer MathMirrorDown editor plugin
	Plugin URI: https://github.com/mhgh/mmd
	License: http://opensource.org/licenses/MIT
*/

class qa_mmd_editor
{
	private $pluginurl;
	private $cssopt = 'mmd_editor_css';
	private $convopt = 'mmd_comment';
	private $hljsopt = 'mmd_highlightjs';

	function load_module( $directory, $urltoroot )
	{
		$this->pluginurl = $urltoroot;
	}

	function calc_quality( $content, $format )
	{
		if ($format=='html')
			return 1.0;
		elseif ($format=='')
			return 0.8;
		else
			return 0;
	}

	function get_field(&$qa_content, $content, $format, $fieldname, $rows, $autofocus)
	{                
                $html = '<link rel="stylesheet" href="'.$this->pluginurl.'libs/codemirror.css">' . "\n";
                           
                $html .= '<link rel="stylesheet" href="'.$this->pluginurl.'libs/htmleditor.css">' . "\n";
                $html .= '<script src="'.$this->pluginurl.'libs/mmd_htmleditor.js"></script>' . "\n";
                             
		$html .= '<textarea data-uk-htmleditor="{markdown:true, mode:\'split\', codemirror:{ mode: \'gfm\', lineWrapping: true, dragDrop: false, autoCloseTags: true, matchTags: true, autoCloseBrackets: true, matchBrackets: true, indentUnit: 4, indentWithTabs: false, tabSize: 4, hintOptions: {completionSingle:false} }}" id="'.$fieldname.'" name="'.$fieldname.'">'.$content.'</textarea>' . "\n";
                
                $html .= '<script src="'.$this->pluginurl.'libs/mmd.js"></script>' . "\n";

		return array( 'type'=>'custom', 'html'=>$html );
	}

	function read_post($fieldname) {
		$html=qa_post_text($fieldname);
		
// 		$htmlformatting=preg_replace('/<\s*\/?\s*(br|p)\s*\/?\s*>/i', '', $html); // remove <p>, <br>, etc... since those are OK in text
		
// 		if (preg_match('/<.+>/', $htmlformatting)) // if still some other tags, it's worth keeping in HTML
// 			return array(
// 				'format' => 'html',
// 				'content' => qa_sanitize_html($html, false, true), // qa_sanitize_html() is ESSENTIAL for security
// 			);
// 		
// 		else { // convert to text
// 			$viewer=qa_load_module('viewer', '');
// 
// 			return array(
// 				'format' => '',
// 				'content' => $viewer->get_text($html, 'html', array())
// 			);
// 		}

                return array(
                        'format' => 'html',
                        'content' => qa_sanitize_html($html, false, true), // qa_sanitize_html() is ESSENTIAL for security
                );

	}

// 	function load_script($fieldname)
// 	{
// 		return '' ;
// 
// 	}


// 	function update_script($fieldname) {
// 		return " ";
// 	}


	// copy of qa-base.php > qa_post_text, with trim() function removed.
	function _my_qa_post_text($field)
	{
		return isset($_POST[$field]) ? preg_replace( '/\r\n?/', "\n", qa_gpc_to_string($_POST[$field]) ) : null;
	}


}
