<?php


/**
* event action features
*/
class Events extends Conn
{	
	public $status = "approve";

	// get events for status == approve
	public function getEvents()
	{
		$query = $this->db->prepare("SELECT * FROM events WHERE event_status = :status");
		$query->bindParam("status", $this->status);
		$query->execute();
		if ($query->rowCount()) {
			$arr = array();
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
		}
		return $arr;
	}

	// for index page events
	public function indexEvents()
	{
		$query = $this->db->prepare("SELECT * FROM events WHERE event_status = :status ORDER BY event_id DESC LIMIT 0,3");
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

	// for single page event
	public function sigleEvent($id)
	{
		$query = $this->db->prepare("SELECT * FROM events WHERE event_status = :status AND event_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("status", $this->status);
		$query->execute();
		$row = $query->fetch();
		return $row;
	}

	
}

$eventsObj = new Events;

?>