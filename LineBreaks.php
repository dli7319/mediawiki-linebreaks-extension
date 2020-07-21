<?php
class LineBreaks
{
    public static function onParserBeforeStrip(&$parser, &$text, &$strip_state)
    {
	$text = str_replace("  \n", "<br />\n", $text);
	$text = str_replace("\\\n", "<br />\n", $text);
    }
}
