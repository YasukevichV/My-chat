<?php
    if(isset($_POST["name"])) {
			 $name = $_POST["name"];
			 $message = $_POST["message"];
			 file_put_contents("messege.txt", file_get_contents("masseges.txt")."\n$name;$massege");
	 }
	 elseif(isset($_POST["update"])) {
		 $string = file_get_contents("massege.txt");
		 $array = $explode("\n", $string);
		 $result = array();
		 for ($i = 0; $i < count($array); $i++)  {
			 $temp = $explode(":", $array[$i]);
			 $result[$i]["name"] = $temp[0];
			 $result[$i]["massege"] = $temp[1];
		 }
		 echo json_encode($result);
	 }	 
?>
