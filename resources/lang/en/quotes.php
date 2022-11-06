<?php

	

		$langs = DB::table('quotes')->select('key','quotes_en')->get();
	$output=array();

	foreach ($langs as $lang){

		$output[$lang->key] = $lang->quotes_en;
	}
	return $output;

?>