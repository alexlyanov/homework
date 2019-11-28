<?php

class Comments {

	public function getComments()
	{
		$mysqli = new mysqli("localhost", "root", "", "lyanov_business_card");
		$res = $mysqli->query("SELECT author_name, comment_text FROM user_comments ORDER BY id");
		$result_arr = array();
		while($obj = $res->fetch_object()){
			$new_line = '';
            $new_line .= $obj->author_name.'~';
            $new_line .= $obj->comment_text;
            array_push($result_arr, $new_line);
        }
        return $result_arr;
	}

	public function postComment($name, $comment)
	{
		$mysqli = new mysqli("localhost", "root", "", "lyanov_business_card");
		$mysqli->query("INSERT INTO user_comments(author_name, comment_text) VALUES('".$name."', '".$comment."')");
	}
}