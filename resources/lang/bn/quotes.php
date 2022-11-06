<?php

	

		$langs = DB::table('quotes')->select('key','quotes_bn')->get();
	$output=array();

	foreach ($langs as $lang){

		$output[$lang->key] = $lang->quotes_bn;
	}
	return $output;

?>