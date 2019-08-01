<?php

/**
* contact form
*/
class ContactForm extends Conn
{
	
	public function insertFormData($fields)
	{
		$query = $this->db->prepare("INSERT INTO contact_form (".implode(",", array_keys($fields)).") VALUES ('".implode("','", array_values($fields))."')");
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
		return false;
		// echo "INSERT INTO contact_form (".implode(",", array_keys($fields)).") VALUES ('".implode("','", array_values($fields))."')";

	}
}

$contactFormObj = new ContactForm
?>