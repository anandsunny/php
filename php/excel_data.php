<?php

require_once("conn.php");
/**
* export data in excel sheet
*/
class ExportData extends Conn
{

	
	public function exportInExcel($table, $class, $stream, $session, $forward)
	{
		if ($class == "class12" and $forward == "forwarded") {
			$query = $this->db->prepare("SELECT * FROM $table WHERE reg_appl_for = '$class' AND reg_stream = '$stream' AND reg_session = '$session' AND reg_forward = 'forwarded'");
		}
		else if (($class == "class8" or $class == "class10") and $forward == "forwarded" ) {
			$query = $this->db->prepare("SELECT * FROM $table WHERE reg_appl_for = '$class' AND reg_session = '$session' AND reg_forward = 'forwarded'");
		}
		else if ($class == "class12" and $forward == "non-forward") {
			$query = $this->db->prepare("SELECT * FROM $table WHERE reg_appl_for = '$class' AND reg_stream = '$stream' AND reg_session = '$session'");
		}
		else {
			$query = $this->db->prepare("SELECT * FROM $table WHERE reg_appl_for = '$class' AND reg_session = '$session'");
		}
		$query->execute();
		$arr = array();
		if ($query->rowCount()) {
			while($rows = $query->fetch()) {
				$arr[] = $rows;
			}
		}
		return $arr;
	}

	// for attendance sheet at formate PDF
	public function attendanceReport($table, $session, $class, $subject, $forward)
	{
		if ($class == "class12" and $forward == "forwarded") {
			$query = $this->db->prepare("SELECT * FROM $table WHERE reg_appl_for = '$class' AND reg_session = '$session' AND reg_forward = 'forwarded' AND (reg_add_sub1 = '$subject' OR reg_add_sub2 = '$subject' OR reg_add_sub3 = '$subject' OR reg_add_sub4 = '$subject' OR reg_add_sub5 = '$subject' OR reg_add_sub6 = '$subject') ORDER BY reg_full_name ASC ");
			
		}
		else if (($class == "class8" or $class == "class10") and $forward == "forwarded" ) {
			$query = $this->db->prepare("SELECT * FROM $table WHERE reg_appl_for = '$class' AND reg_session = '$session' AND reg_forward = 'forwarded' AND (reg_add_sub1 = '$subject' OR reg_add_sub2 = '$subject' OR reg_add_sub3 = '$subject' OR reg_add_sub4 = '$subject' OR reg_add_sub5 = '$subject' OR reg_add_sub6 = '$subject') ORDER BY reg_full_name ASC");
			
		}
		else if ($class == "class12" and $forward == "non-forward") {
			$query = $this->db->prepare("SELECT * FROM $table WHERE reg_appl_for = '$class' AND reg_session = '$session' AND (reg_add_sub1 = '$subject' OR reg_add_sub2 = '$subject' OR reg_add_sub3 = '$subject' OR reg_add_sub4 = '$subject' OR reg_add_sub5 = '$subject' OR reg_add_sub6 = '$subject') ORDER BY reg_full_name ASC");
		
		}
		else {
			$query = $this->db->prepare("SELECT * FROM $table WHERE reg_appl_for = '$class' AND reg_session = '$session' AND (reg_add_sub1 = '$subject' OR reg_add_sub2 = '$subject' OR reg_add_sub3 = '$subject' OR reg_add_sub4 = '$subject' OR reg_add_sub5 = '$subject' OR reg_add_sub6 = '$subject') ORDER BY reg_full_name ASC");
		
		}
		$query->execute();
		$arr = array();
		if ($query->rowCount()) {
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
		}
		return $arr;
	}
	 
}

$exportDataObj = new ExportData;