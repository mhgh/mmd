<?php
/*
	Plugin Name: MathMirrorDown editor
	Plugin URI: https://github.com/mhgh/mmd
	Plugin Description: MathMirrorDown is an editor for Question2Answer with uikit's htmleditor powered by CodeMirror, MarkDown and MathJax.
	Plugin Version: 0.9
	Plugin Date: 2015-07-07
	Plugin Author: Mohammad Hossein Ghaffari
	Plugin Author URI: http://www.mhghaffari.ir
	Plugin License: MIT
	Plugin Minimum Question2Answer Version: 1.4

	
        The MIT License (MIT)
        Copyright (c) 2015 Mohammad Hossein Ghaffari
	More about this license: http://opensource.org/licenses/MIT
	
	
=================================================

	Dependency: 
            uikit (http://getuikit.com)
            MathJax (http://mathjax.org)
            CodeMirror (http://codemirror.net/)
            Marked (https://github.com/chjj/marked)
*/

if ( !defined('QA_VERSION') )
{
	header('Location: ../../');
	exit;
}


qa_register_plugin_module('editor', 'qa-mmd-editor.php', 'qa_mmd_editor', 'MathMirrorDown Editor');
qa_register_plugin_layer('qa-mmd-layer.php', 'MathMirrorDown Editor layer');


