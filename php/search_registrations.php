<?php
include "conn.php";
include "students_registration.php";


$page = isset($_GET['p'])?$_GET['p']:'';
//echo $page;
if ($page == "select") {
	$class = $_POST['class'];
	$session = $_POST['session'];
	$payment_status = $_POST['payment_status'];

	// $class = "class8";
	// $session = "DEC-2017";
	// $payment_status = "offline_paid";
	$rows = $registrationsObj->searchRegistrations($class, $session, $payment_status);

	if ($rows == Null) {
		echo "<h1 class='err'>Data Not Found!</h1>";
	}
	else {
		?>
		<form method="post">
			<div class="row">
					<div class="col-sm-8">
						
							<div class="row">
								<p>
									 <b>Change Payment Status or Delete Unnecessary Registrations.</b>
								</p>
								<div class="col-xs-4">
									
									<select class="form-control" name="bulk_options" id="bulk_options">
										<option value="">Select</option>
										<option value="offline_paid">Offline Paid</option>
										<option value="forwarded">Forwarded</option>
										<option value="del">Delete</option>
									</select>
								</div>
								<div class="col-xs-8">
									<input type="submit" name="" class="btn btn-success" value="Apply" />
									<!-- <a href="#" class="btn btn-primary">Add New</a> -->
									
										<span class="pull-right" style="color: red;">
											<?php
											if (isset($newsMsg)) {
												echo $newsMsg;
											}

											?>
										</span>
									
								</div>
							</div>
					
					</div>
				</div>
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr class="info">
						<th><input type="checkbox" name="check_all_srch" id="check_all_srch" /></th>
						<th>Sr #</th>
						<th>View</th>
						<th>Form No.</th>
						<th>Name</th>
						<th>Father Name</th>
						<th>DOB</th>
						<th>Cetagory</th>
						<th>Forward</th>
						<th>Payment Status</th>
						<th>Fee</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
			
		<?php
		foreach ($rows as $row) {
			$reg_id = $row['reg_id'];
			$reg_date = $row['reg_date'];
			$reg_form_no = $row['reg_form_no'];
			$reg_full_name = $row['reg_full_name'];
			$reg_father_name = $row['reg_father_name'];
			$reg_mother_name = $row['reg_mother_name'];
			$reg_date_of_birth = $row['reg_date_of_birth'];
			$reg_gender = $row['reg_gender'];
			$reg_category = $row['reg_caste'];
			$reg_payment_status = $row['reg_payment_status'];
			$reg_amount = $row['reg_amount'];
			$reg_forward = $row['reg_forward'];
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
				<td><a href="search_registrations.php?del=<?php echo $reg_id;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
			</tr>
			<?php
		}
		// foreach end
		?>
				</tbody>
			</table>
		</div>
		</form>
		<?php
	}
}

?>
