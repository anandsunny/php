<?php

/**
* syllabus for all class
*/
class Syllabus extends Conn
{
	
	// get all syllabus
	public function getSyllabus()
	{
		$query = $this->db->prepare("SELECT * FROM syllabus");
		$query->execute();
		if ($query->rowCount()) {
			$arr = array();
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
			return $arr;
		}
	}

	// update syllabus
	public function updateSyllabus($id, $file, $file_tmp)
	{
		$query = $this->db->prepare("UPDATE syllabus SET syllabus_path = :syllabus_file WHERE syllabus_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("syllabus_file", $file);
		$query->execute();
		if ($query->rowCount()) {
			if (move_uploaded_file($file_tmp, './assets/syllabus/'.$file)) {
				return true;
			}
		}
	}
}


$syllabusObj = new Syllabus;
?>