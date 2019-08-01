<?php

/**
* results
*/
class Results extends Conn
{
	
	public function getResults()
	{
		$query = $this->db->prepare("SELECT * FROM results");
		$query->execute();
		if ($query->rowCount()) {
			$arr = array();
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
			return $arr;
		}
	}

	// update results
	public function updateResult($id, $file, $file_tmp)
	{
		$query = $this->db->prepare("UPDATE results SET result_path = :result_file WHERE result_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("result_file", $file);
		$query->execute();
		if ($query->rowCount()) {
			if (move_uploaded_file($file_tmp, './assets/results/'.$file)) {
				return true;
			}
		}
	}
}

$resultsObj = new Results;
?>