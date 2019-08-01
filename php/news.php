<?php
//include "conn.php";
/**
* latest news 
*/
class News extends Conn
{	
	public $status = "approve";
	public $dateObj;
	public $current_date;
	public $total_news;
	
	
	public function currentDate()
	{
		$this->dateObj = new DateTime(); 
		return $this->currentDate = $this->dateObj->format("Y-m-d");
	}

	//display all news for fornt-end
	public function getNews()
	{
		$query = $this->db->prepare("SELECT * FROM news WHERE news_status = :status");
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

	//display all news for admin
	public function adminGetNews()
	{
		$query = $this->db->prepare("SELECT * FROM news");
		$query->execute();
		$this->total_news = $query->rowCount();
		if ($query->rowCount()) {
			$arr = array();
			while ($rows = $query->fetch()) {
				$arr[] = $rows;
			}
			return $arr;
		}
		
	}
	// for news tagline on index page 
	public function newsTagline()
	{
		$query = $this->db->prepare("SELECT * FROM news WHERE news_status = :status");
		$query->bindParam("status", $this->status);
		$query->execute();
		if ($query->rowCount()) {
			$row = $query->fetch();
		}
		// var_dump($row);
		return $row;

		// echo "SELECT * FROM news WHERE news_status = 'approve'";
	}
	//display single news
	public function singleNews($id)
	{
		$query = $this->db->prepare("SELECT * FROM news WHERE news_id = :id");
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			$row = $query->fetch();
		}
		return $row;
	}

	//update status approve/unapprove
	public function newsStatus($id, $status)
	{
		$query = $this->db->prepare("UPDATE news SET news_status = :status WHERE news_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("status", $status);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}

	// update condition new/old
	public function newsCondition($id, $condition)
	{
		$query = $this->db->prepare("UPDATE news SET news_condition = :condition WHERE news_id = :id");
		$query->bindParam("id", $id);
		$query->bindParam("condition", $condition);
		//var_dump($query);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
		//echo "UPDATE news SET news_condition = $condition WHERE news_id = $id";
	}

	// news delete
	public function newsDelete($id)
	{
		$query = $this->db->prepare("DELETE FROM news WHERE news_id = :id ");
		$query->bindParam("id", $id);
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}

	//insert new news
	public function insertNews($img, $img_tmp, $fields)
	{	
		$v1 = rand(1111,9999);
		$v2 = rand(1111,9999);
		$v3 = $v1.$v2;
		$v3 = md5($v3);
		$img = $v3.$img;
		$news_date = $this->currentDate();
		$query = $this->db->prepare("INSERT INTO news (".implode(",", array_keys($fields)).", news_date, news_image) VALUES ('".implode("','", array_values($fields))."', '$news_date' , '$img')");
		
		$query->execute();
		if ($query->rowCount()) {
			if(move_uploaded_file($img_tmp, './assets/img/news/'.$img)){
				return true;
			}
		}

	}

	//edit news 
	public function editNews($up_news_img, $up_news_img_tmp, $fields, $id)
	{
		$v1 = rand(1111,9999);
		$v2 = rand(1111,9999);
		$v3 = $v1.$v2;
		$v3 = md5($v3);
		$up_news_img = $v3.$up_news_img;
		$values = "";
		foreach ($fields as $key => $value) {
			$values .= $key."='".$value."',";
		}
		//echo "UPDATE INTO news SET $values news_image = '$up_news_img' WHERE news_id = $id";
		$query = $this->db->prepare("UPDATE news SET $values news_image = '$up_news_img' WHERE news_id = $id");
		$query->execute();
		if ($query->rowCount()) {
			if (move_uploaded_file($up_news_img_tmp, './assets/img/news/'.$up_news_img)) {
				return true;
			}
		}
	}

	// edit news for empty file 
	public function editNewsDefaultImg($default_image, $fields, $id)
	{
		$values = "";
		foreach ($fields as $key => $value) {
			$values .= $key."='".$value."',";
		}
		$query = $this->db->prepare("UPDATE news SET $values news_image = '$default_image' WHERE news_id = $id");
		$query->execute();
		if ($query->rowCount()) {
			return true;
		}
	}
}
$newsObj = new News;
//print_r($newsObj->getNews());
?>