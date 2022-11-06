<?php
	$langs = DB::table('lectures')->select('lecture_key','lecture_details_part_bn')->get();
	$output=array();

	foreach ($langs as $lang){

		$output[$lang->lecture_key] = $lang->lecture_details_part_bn;
	}
	return $output;

?>