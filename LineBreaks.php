<?php
class LineBreaks
{
    public static function onParserBeforeStrip(&$parser, &$text, &$strip_state)
    {
	global $wgLbUseBackslash;    
	$text = str_replace("  \n", "<br />\n", $text);
	if ($wgLbUseBackslash) {
	  $text = str_replace("\\\n", "<br />\n", $text);
	}
    }
}
