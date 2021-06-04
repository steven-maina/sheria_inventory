<?php 
require_once('../class/Item.php');
if(isset($_POST['choice'])){
	$choice = $_POST['choice'];

	$reports = $item->item_report($choice);
	// echo '<pre>';
	// 	print_r($reports);
	// echo '</pre>';

?>

<br />
<br />
<table id="myTable-report" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
	    <tr>
	        <th>Item Model No:</th>
	        <th>User Name</th>
	        <th>Office Room No:</th>
	        <th>Category</th>
	        <th>Condition</th>
	    </tr>
	</thead>
    <tbody>
    	<?php foreach($reports as $r): 
    		$fN = $r['emp_fname'];
    		$mN = $r['emp_mname'];
    		$lN = $r['emp_lname'];
    		$mN = $mN[0];
    		$fullName = "$fN $mN. $lN";
    		$fullName = ucwords($fullName);
    	?>
    		<tr>
    			<td><?= $r['item_modno']; ?></td>
    			<td><?= ucwords($r['username']); ?></td>
    			<td><?= $r['room_no']; ?></td>
    			<td><?= $r['cat_desc']; ?></td>
    			<td><?= $r['con_desc']; ?></td>
    		</tr>
    	<?php endforeach; ?>
    </tbody>
</table>


<?php 
// $db->Disconnect();
 ?>

<!-- for the datatable of employee -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable-report').DataTable();
	});
</script>



<?php

	// echo $choice;
}//end isset

