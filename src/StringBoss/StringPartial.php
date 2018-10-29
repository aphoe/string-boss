<?php
namespace StringBoss;

class StringPartial{
	public static function partial($string, $start='4', $end='3', $chars='***'){
		$hide = substr($string, $start, -$end);
        return str_replace($hide, $chars, $string);
	}
}