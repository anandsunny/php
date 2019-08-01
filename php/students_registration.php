<?php

/**
* registration form fill up action file
*/

class Registrations extends Conn
{
	

	public $total_registrations;
	//get all registrations
	public function getRegistraions()
	{
		$query = $this->db->prepare("SELECT * FROM registrations");
		$query->execute();
		$this->total_registrations = $query->rowCount();
		if ($query->rowCount()) {
			$arr = array();
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
			return $arr;
		}
	}

	//get all registrations for dashboard
	public function getForDashboard()
	{
		$query = $this->db->prepare("SELECT * FROM registrations ORDER BY reg_id DESC LIMIT 0, 10");
		$query->execute();
		if ($query->rowCount()) {
			$arr = array();
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
			return $arr;
		}
	}

	// single registration profile view for view_profile.php
	public function singleProfile($id)
	{
		$query = $this->db->prepare("SELECT * FROM registrations WHERE reg_id = :id");
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			$row = $query->fetch();
			return $row;
		}
	}

	// print page single profile display
	public function printSingle($id)
	{
		$query = $this->db->prepare("SELECT * FROM registrations WHERE reg_form_no = :id");
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			$row = $query->fetch();
			return $row;
		}
	}

	// search by form_no and reg_date for print_application.php
	public function printAppl($form_no, $reg_dob)
	{
		$query = $this->db->prepare("SELECT * FROM registrations WHERE reg_form_no = :id AND reg_date_of_birth = :reg_dob");
		$query->bindParam("id", $form_no);
		$query->bindParam("reg_dob", $reg_dob);
		$query->execute();
		if ($query->rowCount()) {
			$row = $query->fetch();
			return $row;
		}
	}

	// insert registration form data
	public function insertRegistration($fields, $photo_tmp, $photo, $mark_sheet_8_tmp, $mark_sheet_8, $mark_sheet_10_tmp, $mark_sheet_10, $mark_sheet_12_tmp, $mark_sheet_12, $class_mark_sheet_tmp, $class_mark_sheet, $transfer_cert_tmp, $transfer_cert, $income_cert_tmp, $income_cert, $caste_cert_tmp, $caste_cert, $domicile_cert_tmp, $domicile_cert, $samagra_cert_tmp, $samagra_cert, $aadhar_cert_tmp, $aadhar_cert, $voter_id_tmp, $voter_id, $rashan_card_tmp, $rashan_card, $passport_tmp, $passport, $other1_tmp, $other1)
	{
		
		$v1 = rand(1111,9999);
		$v2 = rand(1111,9999);
		$v3 = $v1.$v2;
		$v3 = md5($v3);
		$photo = $v3.$photo;
		if (!empty($mark_sheet_8)) {
			$mark_sheet_8 = $v3."0".$mark_sheet_8;
		}
		if (!empty($mark_sheet_10)) {
			$mark_sheet_10 = $v3."1".$mark_sheet_10;
		}
		if (!empty($mark_sheet_12)) {
			$mark_sheet_12 = $v3."2".$mark_sheet_12;
		}
		if (!empty($class_mark_sheet)) {
			$class_mark_sheet = $v3."3".$class_mark_sheet;
		}
		if (!empty($transfer_cert)) {
			$transfer_cert = $v3."4".$transfer_cert;
		}
		if (!empty($income_cert)) {
			$income_cert = $v3."5".$income_cert;
		}
		if (!empty($caste_cert)) {
			$caste_cert = $v3."6".$caste_cert;
		}
		if (!empty($domicile_cert)) {
			$domicile_cert = $v3."7".$domicile_cert;
		}
		if (!empty($samagra_cert)) {
			$samagra_cert = $v3."8".$samagra_cert;
		}
		if (!empty($aadhar_cert)) {
			$aadhar_cert = $v3."9".$aadhar_cert;
		}
		if (!empty($voter_id)) {
			$voter_id = $v3."10".$voter_id;
		}
		if (!empty($rashan_card)) {
			$rashan_card = $v3."11".$rashan_card;
		}
		if (!empty($passport)) {
			$passport = $v3."12".$passport;
		}
		if (!empty($other1)) {
			$other1 = $v3."13".$other1;
		}

		$query = $this->db->prepare("INSERT INTO registrations (".implode(",", array_keys($fields)).", reg_photo, reg_marksheet_8, reg_marksheet_10, reg_marksheet_12, reg_marksheet_class, reg_transfer_cert, reg_income_cert, reg_caste_cert, reg_domicile_cert, reg_samagra_cert, reg_aadhar_cert, reg_voter_id, reg_rashan_card, reg_passport, reg_other1) VALUES ('".implode("','", array_values($fields))."', '".$photo."', '".$mark_sheet_8."', '".$mark_sheet_10."', '".$mark_sheet_12."', '".$class_mark_sheet."', '".$transfer_cert."', '".$income_cert."', '".$caste_cert."', '".$domicile_cert."', '".$samagra_cert."', '".$aadhar_cert."', '".$voter_id."', '".$rashan_card."', '".$passport."', '".$other1."')");
		$query->execute();
		if ($query->rowCount()) {
			move_uploaded_file($photo_tmp, './assets/img/documents/'.$photo);
			move_uploaded_file($mark_sheet_8_tmp, './assets/img/documents/'.$mark_sheet_8);
			move_uploaded_file($mark_sheet_10_tmp, './assets/img/documents/'.$mark_sheet_10);
			move_uploaded_file($mark_sheet_12_tmp, './assets/img/documents/'.$mark_sheet_12);
			move_uploaded_file($class_mark_sheet_tmp, './assets/img/documents/'.$class_mark_sheet);
			move_uploaded_file($transfer_cert_tmp, './assets/img/documents/'.$transfer_cert);
			move_uploaded_file($income_cert_tmp, './assets/img/documents/'.$income_cert);
			move_uploaded_file($caste_cert_tmp, './assets/img/documents/'.$caste_cert);
			move_uploaded_file($domicile_cert_tmp, './assets/img/documents/'.$domicile_cert);
			move_uploaded_file($samagra_cert_tmp, './assets/img/documents/'.$samagra_cert);
			move_uploaded_file($aadhar_cert_tmp, './assets/img/documents/'.$aadhar_cert);
			move_uploaded_file($voter_id_tmp, './assets/img/documents/'.$voter_id);
			move_uploaded_file($rashan_card_tmp, './assets/img/documents/'.$rashan_card);
			move_uploaded_file($passport_tmp, './assets/img/documents/'.$passport);
			move_uploaded_file($other1_tmp, './assets/img/documents/'.$other1);
			return true;
		}
		// echo "INSERT INTO registrations (".implode(",", array_keys($fields)).", reg_photo, reg_marksheet_8, reg_marksheet_10, reg_marksheet_12, reg_marksheet_class, reg_transfer_cert, reg_income_cert, reg_caste_cert, reg_domicile_cert, reg_samagra_cert, reg_aadhar_cert, reg_voter_id, reg_rashan_card, reg_passport, reg_other1) VALUES ('".implode("','", array_values($fields))."', '".$photo."', '".$mark_sheet_8."', '".$mark_sheet_10."', '".$mark_sheet_12."', '".$class_mark_sheet."', '".$transfer_cert."', '".$income_cert."', '".$caste_cert."', '".$domicile_cert."', '".$samagra_cert."', '".$aadhar_cert."', '".$voter_id."', '".$rashan_card."', '".$passport."', '".$other1."')";
	}

	// update status
	public function regStatus($id, $status, $payment_id, $amount)
	{
		$query = $this->db->prepare("UPDATE registrations SET reg_payment_status = :status, reg_payment_id= :payment_id, reg_amount = :amount WHERE reg_form_no = :id");
		$query->bindParam("id", $id);
		$query->bindParam("status", $status);
		$query->bindParam("payment_id", $payment_id);
		$query->bindParam("amount", $amount);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
		
		// echo "UPDATE registrations SET reg_payment_status = $status, reg_payment_id= $payment_id, reg_amount = $amount WHERE reg_form_no = $id";
	}

	// updata payment status by admin
	public function paymentStatus($id, $status)
	{
		$query = $this->db->prepare("UPDATE registrations SET reg_payment_status = :status WHERE reg_id = :id");
		$query->bindParam("status", $status);
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}

	// updata forward status by admin
	public function forwardStatus($id, $status)
	{
		$payment_status = "offline_paid";
		$query = $this->db->prepare("UPDATE registrations SET reg_forward = :forward, reg_payment_status = :payment_status WHERE reg_id = :id");
		$query->bindParam("forward", $status);
		$query->bindParam("payment_status", $payment_status);
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			$this->updateRandomUrduFormString($id);
			$this->sendUrduEducationForm($id);
			return true;
		}
	}

	// update random string urdu education form
	public function updateRandomUrduFormString($id)
	 {	
	 	//$id = 71;
	 	$random_string = $this->generateRandomString();
	 	$query = $this->db->prepare("UPDATE registrations SET reg_urdu_form_forward_id = :random_string WHERE reg_id = :id");
	 	$query->bindParam("random_string", $random_string);
	 	$query->bindParam("id", $id);
	 	$query->execute();
	 	//echo "UPDATE registrations SET reg_urdu_form_forward_id = $random_string WHERE reg_id = $id";

	 }

	// generate random string for urdu education form
	function generateRandomString($length = 20) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	// send email with urdu education form
	public function sendUrduEducationForm($id)
		{
			$query = $this->db->prepare("SELECT * FROM registrations WHERE reg_id = :id");
			$query->bindParam("id", $id);
			$query->execute();
			$row = $query->fetch();
			$random_string = $row['reg_urdu_form_forward_id'];
			$user_email = $row['reg_email'];
			$mail_msg = "Print your Urdu Education Board Registration Form by below link(URL).<br />Click here For get form print: <a href='https://www.uiindia.in/urdu_education_form.php?id=".$random_string."'";
			$master_email = "uiindia.in@gmail.com";
			mail($user_email, "Urdu Education Board Registration Form", $mail_msg);
		}

	// delete registration
	// news delete
	public function regDelete($id)
	{
		$query = $this->db->prepare("DELETE FROM registrations WHERE reg_id = :id ");
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}

	//payments insert value 
	public function payments($fields, $status)
	{
		$query = $this->db->prepare("INSERT INTO payments (".implode(",", array_keys($fields)).", pay_status) VALUES ('".implode("','", array_values($fields))."', :status)");
		$query->bindParam("status", $status);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
		//echo "INSERT INTO payments (".implode(",", array_keys($fields)).", pay_status) VALUES ('".implode("','", array_values($fields))."', $status)";
	}

	// edit button update
	public function editUpdate($fields, $where)
	{
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key."='".$value."'";
		}

		foreach ($fields as $key => $value) {
			$sql .= $key."='".$value."',";
		}
		$sql .= substr($sql, 0, -1);
		$query = $this->db->prepare("UPDATE registrations SET $sql WHERE $condition");
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
		//echo "UPDATE registrations SET $sql WHERE $condition";
	}

	// edit by admin
	public function editAdmin($fields, $where)
	{
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key."='".$value."'";
		}

		foreach ($fields as $key => $value) {
			$sql .= $key."='".$value."',";
		}
		$sql .= substr($sql, 0, -1);
		$query = $this->db->prepare("UPDATE registrations SET $sql WHERE $condition");
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
		// echo "UPDATE registrations SET $sql WHERE $condition";
	}

	// search registrations by class, session, payment
	public function searchRegistrations($class, $session, $payment_status)
	{
		$query = $this->db->prepare("SELECT * FROM registrations WHERE reg_appl_for = :class AND reg_session = :session AND reg_payment_status = :payment_status");
		$query->bindParam("class", $class);
		$query->bindParam("session", $session);
		$query->bindParam("payment_status", $payment_status);
		$query->execute();
		$arr = array();
		if ($query->rowCount()) {
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
		}
		return $arr;
		//echo "SELECT * FROM registrations WHERE reg_appl_for = $class AND reg_session = $session AND reg_payment_status = $payment_status";
	}

	// view urdu education board by mail link
	public function mailUrduEducationForm($id)
	 {
	 	$query = $this->db->prepare("SELECT * FROM registrations WHERE reg_urdu_form_forward_id = :id");
	 	$query->bindParam("id", $id);
	 	$query->execute();
	 	if ($query->rowCount()) {
	 		$row = $query->fetch();
	 	}
	 	return $row;
	 } 
}

$registrationsObj = new Registrations;
?>