<?php

/**
* student notice actions
*/
class Notice extends Conn
{
	
	public $status = "approve";
	public $dateObj;
	public $current_date;
	public $total_notices;
	
	// get current date
	public function currentDate()
	{
		$this->dateObj = new DateTime(); 
		return $this->currentDate = $this->dateObj->format("Y-m-d");
	}

	// get notice for front-end
	public function getNotice()
	{
		$query = $this->db->prepare("SELECT * FROM student_notice WHERE notice_status = :status");
		$query->bindParam("status", $this->status);
		$query->execute();
		if ($query->rowCount()) {
			$arr = array();
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
			return $arr;
		}
		
	}

	// single notice page
	public function sigleNotice($id)
	{
		$query = $this->db->prepare("SELECT * FROM student_notice WHERE notice_id = :id");
		$query->bindParam("id", $id);
		$query->execute();
		$row = $query->fetch();
		return $row;
	}

	// all notive for admin
	public function adminNotice()
	{
		$query = $this->db->prepare("SELECT * FROM student_notice");
		$query->execute();
		$this->total_notices = $query->rowCount();
		if ($query->rowCount()) {
			$arr = array();
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
			return $arr;
		}
		
	}

	//update status approve/unapprove
	public function noticeStatus($id, $status)
	{
		$query = $this->db->prepare("UPDATE student_notice SET notice_status = :status WHERE notice_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("status", $status);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}

	// update condition new/old
	public function noticeCondition($id, $condition)
	{
		$query = $this->db->prepare("UPDATE student_notice SET notice_condition = :condition WHERE notice_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("condition", $condition);
		//var_dump($query);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
		//echo "UPDATE news SET news_condition = $condition WHERE news_id = $id";
	}

	// Notice delete
	public function noticeDelete($id)
	{
		$query = $this->db->prepare("DELETE FROM student_notice WHERE notice_id = :id ");
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}

	//insert new notice
	public function insertNotice($img, $img_tmp, $fields)
	{	
		
		$event_date = $this->currentDate();
		$query = $this->db->prepare("INSERT INTO student_notice (".implode(",", array_keys($fields)).", notice_date, notice_image) VALUES ('".implode("','", array_values($fields))."', '$event_date' , '$img')");
		
		$query->execute();
		if ($query->rowCount()) {
			if(move_uploaded_file($img_tmp, './assets/img/notice/'.$img)){
				return true;
			}
		}
		//echo "INSERT INTO events (".implode(",", array_keys($fields)).", event_date, event_image) VALUES ('".implode("','", array_values($fields))."', '$event_date' , '$img')";
	
	}

	// for admin page view single event
	public function singleNotice($id)
	{
		$query = $this->db->prepare("SELECT * FROM student_notice WHERE notice_id = :id");
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			$rows = $query->fetch();
			return $rows;
		}	
	}

	// edit event for empty file
	public function editNoticeDefaultImg($event_image, $fields, $id)
	{
		$values = "";
		foreach ($fields as $key => $value) {
			$values .= $key."='".$value."',";
		}
		$query = $this->db->prepare("UPDATE student_notice SET $values notice_image = :image WHERE notice_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("image", $event_image);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}

	//edit event
	public function editNotice($up_event_img, $up_event_img_tmp, $fields, $id)
	{
		$values = "";
		foreach ($fields as $key => $value) {
			$values .= $key."='".$value."',";
		}
		$v1 = rand(1111,9999);
		$v2 = rand(1111,9999);
		$v3 = $v1.$v2;
		$v3 = md5($v3);
		$up_event_img = $v3.$up_event_img;
		$query = $this->db->prepare("UPDATE student_notice SET $values notice_image = :image WHERE notice_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("image", $up_event_img);
		$query->execute();
		if ($query->rowCount()) {
			if (move_uploaded_file($up_event_img_tmp, './assets/img/notice/'.$up_event_img)) {
				return true;
			}
		}
		// echo "UPDATE student_notice SET $values notice_image = $up_event_img WHERE notice_id = :$id";
	}

}
$noticeObj = new Notice;
?>