
<?php
$connect=mysqli_connect('localhost','root','','googlesearch') or die('Connection Failed');
class sample
{
	function search($search){

		global $connect;
		$word = "-";
		$st = $search;
		if (strpos($st, $word) !== false) {
			$st1 = strpos($st, $word);
			$st1 = $st1 + 1;
			$st = $search;
			$st2 = substr($st,$st1);
			$query = "SELECT `title`, `text` FROM `articles` WHERE title NOT LIKE '%$st2%' And text NOT LIKE '%$st2%'";
			$result = mysqli_query($connect,$query);

			$results= mysqli_num_rows($result);
			
			while ($row = mysqli_fetch_assoc($result)) {
				$results[] = array(
					'title' => $row['title'],
					'text' => $row['text'],
				);
			}
			return $results;
			;
		}
		else{
		$find = ""; // to store infromation of find clause
		$search = preg_split("/[\s]+/",$search);   // what we search in array is stored here //The preg_split() function breaks a string into an array using matches of a regular expression as separators.
		$total = count($search); // count total search{
			foreach ($search as $key => $val)
			{
				$find .="title LIKE '%$val%' OR text LIKE '%$val%'"; 
				if ($key != $total-1) 
				{
					$find .= " OR ";	
				}
			}
			$query = "SELECT `title`, `text` FROM `articles` WHERE $find";
			$result = mysqli_query($connect,$query);
			$num = mysqli_num_rows($result);
			while ($row = mysqli_fetch_assoc($result)) { // returns result in associative array
				$results[] = array(
					'title' => $row['title'],
					'text' => $row['text'],
				);
			}
			return $results;
		}
			// $num="";

			// if($result)
			// {
			// 	$num = mysqli_num_rows($result);
			// }
			// else
			// {
			// 	$num = 0;
			// }
			// if($num===0)
			// {
			// 	return false;
			// }
			// else
			// {
			// 	while ($row = mysqli_fetch_assoc($result)) { // returns result in associative array
			// 		$results[] = array(
			// 			'title' => $row['title'],
			// 			'text' => $row['text'],
			// 		);
			// 	}
			// 	return $results;
			// }
	}
}


?>