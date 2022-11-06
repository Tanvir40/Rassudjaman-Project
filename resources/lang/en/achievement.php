<?php

$langs = DB::table('achievements')->select('keyacievement','brief_en')->get();
	$output=array();

	foreach ($langs as $lang)
	{

		$output[$lang->keyacievement] = $lang->brief_en;
	}
	return $output;

?>
