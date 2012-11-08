<?php
	// basic functions
	function confirm_query($result_set){
		if(!$result_set){
			die("Database query failed" . mysql_error());
		}
	}

	function get_all_subjects(){
		// 用全局得变量
		global $connection;
		$query = "select * " .
				"from subjects " .
				"order by position";
		$result = mysql_query($query, $connection);
		confirm_query($result);

		return $result;
	}

	function get_pages_for_subject($sub_id){
		$query = "select * " .
				"from pages " .
				"where subject_id = {$sub_id} " .
				"order by position";
		$result = mysql_query($query);
		confirm_query($result);

		return $result;
	}
?>