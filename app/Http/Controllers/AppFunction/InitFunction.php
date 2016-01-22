<?php

/* text verif in url exp : [ my first post => my-first-post]*/
function toAscii($str, $replace=array(), $delimiter='-') {
	if( !empty($replace) ) {
		$str = str_replace((array)$replace, ' ', $str);
	}
	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	return $clean;
}
	/* convert arraydata to text exp : [ array('php','html',css) => 'php , html , css']*/
   function convertArraytoData($data) {
	$text = "";
	foreach ($data as $tag) {
		if ($tag != end($data)) {
			$text .= $tag.' , ';
		}else{
			$text .= $tag;
		}
	}
	return $text;
}
	/* convert data to array exp : [ 'php , html , css' => array('php','html',css)]*/
    function convertDatatoArray($data,$key=null) {
	if (empty($key)) {
		$array = explode(" , ",$data);
	}else{
		$array = explode($key,$data);
	}
	return $array;
	}


	function assets($url=null){
		return url('assets/'.$url);
	}