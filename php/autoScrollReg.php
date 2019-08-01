<?php

include "conn.php";
/**
* autoSroll for registration view
*/
class AutoScroll extends Conn
{
	
	public function getRegistrations($offset, $limit)
	{
		$query = $this->db->prepare("SELECT * FROM registrations LIMIT {$limit} OFFSET {$offset} ");
		$query->execute();
		if ($query->rowCount()) {
			while ($rows = $query->fetch()) {

			$reg_id = $rows['reg_id'];
			$reg_date = $rows['reg_date'];
			$reg_form_no = $rows['reg_form_no'];
			$reg_full_name = $rows['reg_full_name'];
			$reg_father_name = $rows['reg_father_name'];
			$reg_mother_name = $rows['reg_mother_name'];
			$reg_date_of_birth = $rows['reg_date_of_birth'];
			$reg_gender = $rows['reg_gender'];
			$reg_category = $rows['reg_caste'];
			$reg_payment_status = $rows['reg_payment_status'];
			$reg_amount = $rows['reg_amount'];
			$reg_forward = $rows['reg_forward'];
			?>
			<tr>
				<th><input type="checkbox" name="checkboxs[]" id="checkboxs" class="checkboxs" value="<?php echo $reg_id;?>" /></th>
				<td><?php echo $reg_id;?></td>
				<td><a href="view_profile.php?profile=<?php echo $reg_id;?>"><i class="glyphicon glyphicon-edit"></i></a></td>
				<td><?php echo $reg_form_no;?></td>
				<td><?php echo ucfirst($reg_full_name); ?></td>
				<td><?php echo ucfirst($reg_father_name);?></td>
				<td><?php echo $reg_date_of_birth;?></td>
				<td><?php echo strtoupper($reg_category);?></td>
				<td>
					<?php
					if ($reg_forward == "forwarded") {
						echo "Forwarded";
					}
					else {
						echo "Not Forwarded";
					}
					?>
						
				</td>
				<td><?php echo ucfirst($reg_payment_status);?></td>
				<td><i class="fa fa-rupee"> </i><?php echo $reg_amount;?></td>
				<td><a href="registrations.php?del=<?php echo $reg_id;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
			</tr>
			<?php
			}
		}
		// else {
		// 	echo "<center><h1 class='err'>No Registrations Available.</h1></center>";
		// }	
	}
}

$AutoScrollObj = new AutoScroll;

if (isset($_GET['offset']) && isset($_GET['limit'])) {
	$offset = $_GET['offset'];
	$limit = $_GET['limit'];
	$AutoScrollObj->getRegistrations($offset, $limit);
}

?>


