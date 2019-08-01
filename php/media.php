<?php

/**
* for media files
*/
class Media extends Conn
{
	public $total_media;

	// insert media files
	public function insertMedia($img, $img_tmp)
	{	
		for ($i=0; $i < count($img); $i++) { 
			$media = $img[$i];
			$media_tmp = $img_tmp[$i];
			$query = $this->db->prepare("INSERT INTO media (media_img) VALUES (:image)");
			$query->bindParam("image", $media);
			$query->execute();
			
			if ($query->rowCount()) {
				move_uploaded_file($media_tmp, './assets/media/'.$media);		
			}
		}
		if ($query->rowCount()) {
			return true;
		}	
	}

	// view all media files
	public function getMedia()
	{
		$query = $this->db->prepare("SELECT * FROM media ORDER BY media_id ASC");
		$query->execute();
		$this->total_media = $query->rowCount();
		if ($query->rowCount()) {
			$arr = array();
			while($rows = $query->fetch()) {
				$arr[] = $rows;
			}
			return $arr;
		}
	}

	//delete media files
	public function deleteMedia($id)
	{
		$query = $this->db->prepare("DELETE FROM media WHERE media_id = :id");
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}
}

$mediaObj = new Media;
?>