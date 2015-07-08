<?php
/*
        Copyright (c) 2015 Mohammad Hossein Ghaffari
	Question2Answer MathMirrorDown editor plugin
	Plugin URI: https://github.com/mhgh/mmd
	License: http://opensource.org/licenses/MIT
*/

class qa_html_theme_layer extends qa_html_theme_base
{
	private $cssopt = 'mmd_editor_css';
	private $hljsopt = 'mmd_highlightjs';

	function head_custom()
	{
		parent::head_custom();

		$tmpl = array( 'ask', 'question' );
		if ( !in_array($this->template, $tmpl) )
			return;

                $this->output_raw(
// 			"<script type="text/x-mathjax-config"> MathJax.Hub.Config({ tex2jax: { inlineMath: [["$","$"], ["\\(","\\)"]], displayMath: [["$$","$$"], ["\\[","\\]"]] }, "HTML-CSS": { availableFonts: ["STIX", "TeX"], linebreaks: { automatic: true }, imageFont: null } }); </script>\n" . "\n"
// 			"<script src=\"//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>\n" . "\n".
// 			"<script src=\"" . QA_HTML_THEME_LAYER_URLTOROOT . "libs/prettify.js\"></script>\n" . "\n".
                        "<script src=\"https://cdn.jsdelivr.net/highlight.js/8.4.0/highlight.min.js\"></script>\n" . "\n".
			"<script src=\"" . QA_HTML_THEME_LAYER_URLTOROOT . "libs/remarkable.min.js\"></script>\n" . "\n".
			"<script src=\"" . QA_HTML_THEME_LAYER_URLTOROOT . "libs/codemirror.js\"></script>\n" . "\n".
			"<script src=\"" . QA_HTML_THEME_LAYER_URLTOROOT . "libs/markdown.js\"></script>\n" . "\n".
			"<script src=\"" . QA_HTML_THEME_LAYER_URLTOROOT . "libs/overlay.js\"></script>\n" . "\n".
			"<script src=\"" . QA_HTML_THEME_LAYER_URLTOROOT . "libs/xml.js\"></script>\n" . "\n".
			"<script src=\"" . QA_HTML_THEME_LAYER_URLTOROOT . "libs/gfm.js\"></script>\n" . "\n"
// 			"<script src=\"" . QA_HTML_THEME_LAYER_URLTOROOT . "libs/marked.js\"></script>\n" . "\n"
		);

// 		$hidecss = qa_opt($this->cssopt) === '1';
// 		$usehljs = qa_opt($this->hljsopt) === '1';
// 		$wmd_buttons = QA_HTML_THEME_LAYER_URLTOROOT . 'pagedown/wmd-buttons.png';

// 		$this->output_raw(
// 			"<style>\n" .
// 			".wmd-button > span { background-image: url('$wmd_buttons') }\n"
// 		);
// 
// 		// display CSS for MathMirrorDown Editor
// 		if ( !$hidecss )
// 		{
// 			$cssWMD = file_get_contents( QA_HTML_THEME_LAYER_DIRECTORY . 'pagedown/wmd.css' );
// 			$this->output_raw($cssWMD);
// 
// 			// display CSS for HighlightJS
// 			if ( $usehljs )
// 			{
// 				$cssHJS = file_get_contents( QA_HTML_THEME_LAYER_DIRECTORY . 'pagedown/highlightjs.css' );
// 				$this->output_raw($cssHJS);
// 			}
// 		}
// 
// 		$this->output_raw("</style>\n\n");

// 		// set up HighlightJS
// 		if ( $usehljs )
// 		{
// 			$this->output_raw(
// 				"<script src=\"" . QA_HTML_THEME_LAYER_URLTOROOT . "pagedown/highlight.min.js\"></script>\n" .
// 
// 				"<script type=\"text/javascript\">\n" .
// 				"$(function(){\n" .
// 				"	$('.wmd-input').keypress(function(){\n" .
// 				"		window.clearTimeout(hljs.Timeout);\n" .
// 				"		hljs.Timeout = window.setTimeout(function() {\n" .
// 				"			hljs.initHighlighting.called = false;\n" .
// 				"			hljs.initHighlighting();\n" .
// 				"		}, 500);\n" .
// 				"	});\n" .
// 				"	window.setTimeout(function() {\n" .
// 				"		hljs.initHighlighting.called = false;\n" .
// 				"		hljs.initHighlighting();\n" .
// 				"	}, 500);\n" .
// 				"});\n" .
// 				"</script>\n\n"
// 			);
// 		}
	}

}
