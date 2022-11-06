<?php

			$langs = DB::table('achievements')->select('keyacievement','brief_bn')->get();
	$output=array();

	foreach ($langs as $lang){

		$output[$lang->keyacievement] = $lang->brief_bn;
	}
	return $output;

?>