<?php

function convert_tasks($text) {
	$text = preg_replace('/^\s*- \[x\]/mi', '<input type="checkbox" checked>', $text);
	$text = preg_replace('/^\s*- \[ \]/mi', '<input type="checkbox">', $text);
	return $text;

}

kirbytext::$pre[] = function($kirbytext, $value) {
	return convert_tasks($value);
};