<?php 
require_once('../class/Item.php'); 
require_once('../class/Employee.php'); 

$employees = $employee->get_employees();
$categories = $item->item_categories();
$conditions = $item->item_conditions();

?>
<div class="modal fade" id="modal-add-item">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add An Equipment</h4>
				
			</div>
			<div class="modal-body">
				<!-- main form -->
				<div id="show_message" class="alert alert-success" style="display: none">Successfully saved </div>
	 
	 <div id="error" class="alert alert-danger" style="display: none">could not save!!</div>

					<form class="form-horizontal" role="form" id="add-item-form">
					<div class="form-group">
					    <label class="control-label col-sm-3" for="catID">Category:</label>
					    <div class="col-sm-3"> 
					    	<select name="" class="btn btn-default" id="catID" required>
							<option disabled selected value="">Select Category</option>
					    		<?php 
					    			foreach ($categories as $category) {
					    				
					    			$catID = $category['cat_id'];
					    			$catDesc = ucwords($category['cat_desc']);
					    		?>
					    			<option value="<?php echo $catID; ?>"><?php echo $catDesc; ?></option>}
					    		<?php
					    			}//end foreach of category
					    		 ?>
					    	</select>
					    </div>
							</div>
					  <div class="form-group" id="item_user">
					    <label class="control-label col-sm-3" for="itemUser">User Name:</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="itemUser" placeholder="Enter User Name" autofocus>
					    </div>
					  </div>
					  <div class="form-group" id="o_s">
					    <label class="control-label col-sm-3" for="os">Operating System</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="os" placeholder="Enter Operating System">
					    </div>
						 </div>
					  <div class="form-group" id="ram_capacity">
					    <label class="control-label col-sm-3" for="ramCapacity">RAM Capacity</label>
					    <div class="col-sm-9"> 
					      <input type="text"class="form-control" id="ramCapacity" placeholder="Enter RAM size">
					    </div>
					  </div>
					  <div class="form-group" id="rom_capacity">
					    <label class="control-label col-sm-3" for="romCapacity">ROM Capacity</label>
					    <div class="col-sm-9"> 
					      <input type="text"class="form-control" id="romCapacity" placeholder="Enter HDD size">
					    </div>
						<div class="modal-busy" id="loader" style="margin-top:2px; display:none;">
						  <center>
						  <div class="center-busy" id="test-git">
						  <img src="../img/ajax-loader1.gif" width=50px height=35px>Processing...</imgn>
								</div>		
						</center>  
						</div>
					  </div>
					  <div class="form-group" >
					    <label class="control-label col-sm-3" for="serialNumber">Serial No.:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="serialNumber" placeholder="Enter Serial No" >
					    </div>
					  </div>
					  
					   <div class="form-group" >
					    <label class="control-label col-sm-3" for="modelNumber">Model: </label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="modelNumber" placeholder="Enter Model No/Name" >
					    </div>
					  </div>
					  
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="roomNo"> Room No:</label>
					    <div class="col-sm-9"> 
					      <input type="text"class="form-control" id="roomNo" placeholder="Enter Room No" required >
					    </div>
					  </div>	

					   <div class="form-group">
					    <label class="control-label col-sm-3" for="purDate">Purchase Date:</label>
					    <div class="col-sm-9"> 
					      <input type="date" class="form-control" id="purDate" >
					    </div>
					  </div>
				    <div class="form-group" >
					    <label class="control-label col-sm-3" for="conID">Condition:</label>
					    <div class="col-sm-3"> 
					    	<select class="btn btn-default" id="conID" required >
							<option disabled selected value="">Select Condition</option>
					    		<option value="1">Spoiled</option>
								<option value="2">Working</option>
								<option value="3">Not-Being-Used</option>
							 
					    	</select>
					    </div>
					  </div>
					  <div class="form-group" id="description">
					    <label class="control-label col-sm-3" for="moreDescription">More Description</label>
					    <div class="col-sm-9">
					    <input type="textarea" class="form-control" id="moreDescription" placeholder="More description"></input>
					    </div>
					  </div>

					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" id="btn-submit" value="submit" class="btn btn-primary">Save
					      <span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
					      </button>
						  
					    </div>
						</div>
						
					</form>
					
				<!-- /main form -->

				<script>
				
				</script>
			</div>
		</div>
	</div>
</div>
