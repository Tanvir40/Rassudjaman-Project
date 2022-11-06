<?php
	$langs = DB::table('lectures')->select('lecture_key','lecture_details_part_en')->get();
	$output=array();

	foreach ($langs as $lang){

		$output[$lang->lecture_key] = $lang->lecture_details_part_en;
	}
	return $output;

?>