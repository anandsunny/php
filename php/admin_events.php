<?php

/**
* admin events only
*/
class AdminEvents extends Conn
{
	public $dateObj;
	public $current_date;
	public $total_events;
	
	public function currentDate()
	{
		$this->dateObj = new DateTime(); 
		return $this->currentDate = $this->dateObj->format("Y-m-d");
	}


	// for admin page events
	public function getEvents()
	{
		$query = $this->db->prepare("SELECT * FROM events");
		$query->execute();
		$this->total_events = $query->rowCount();
		if ($query->rowCount()) {
			$arr = array();
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
			return $arr;
		}
		
	}

	//update status approve/unapprove
	public function eventStatus($id, $status)
	{
		$query = $this->db->prepare("UPDATE events SET event_status = :status WHERE event_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("status", $status);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}

	// update condition new/old
	public function eventCondition($id, $condition)
	{
		$query = $this->db->prepare("UPDATE events SET event_condition = :condition WHERE event_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("condition", $condition);
		//var_dump($query);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
		//echo "UPDATE news SET news_condition = $condition WHERE news_id = $id";
	}

	// event delete
	public function eventDelete($id)
	{
		$query = $this->db->prepare("DELETE FROM events WHERE event_id = :id ");
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}

	//insert new event
	public function insertEvent($img, $img_tmp, $fields)
	{	
		
		$event_date = $this->currentDate();
		$query = $this->db->prepare("INSERT INTO events (".implode(",", array_keys($fields)).", event_date, event_image) VALUES ('".implode("','", array_values($fields))."', '$event_date' , '$img')");
		
		$query->execute();
		if ($query->rowCount()) {
			if(move_uploaded_file($img_tmp, './assets/img/events/'.$img)){
				return true;
			}
		}
		//echo "INSERT INTO events (".implode(",", array_keys($fields)).", event_date, event_image) VALUES ('".implode("','", array_values($fields))."', '$event_date' , '$img')";
	
	}

	// for admin page view single event
	public function singleEvent($id)
	{
		$query = $this->db->prepare("SELECT * FROM events WHERE event_id = :id");
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			$rows = $query->fetch();
			return $rows;
		}	
	}

	// edit event for empty file
	public function editeventDefaultImg($event_image, $fields, $id)
	{
		$values = "";
		foreach ($fields as $key => $value) {
			$values .= $key."='".$value."',";
		}
		$query = $this->db->prepare("UPDATE events SET $values event_image = :image WHERE event_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("image", $event_image);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}

	//edit event
	public function editEvent($up_event_img, $up_event_img_tmp, $fields, $id)
	{
		$values = "";
		foreach ($fields as $key => $value) {
			$values .= $key."='".$value."',";
		}
		$query = $this->db->prepare("UPDATE events SET $values event_image = :image WHERE event_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("image", $up_event_img);
		$query->execute();
		if ($query->rowCount()) {
			if (move_uploaded_file($up_event_img_tmp, './assets/img/events/'.$up_event_img)) {
				return true;
			}
		}
		//echo "UPDATE events SET $values event_image = $up_event_img WHERE event_id = $id";
	}
}
$adminEventsObj = new AdminEvents;
?>