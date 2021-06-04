<!DOCTYPE html>
<html>
<head>
	<title>Sheria Inventory</title>
	<link rel = "icon" href = "img/title_logo.png"
        type = "image/png">
	
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css"/>

</head>
    
<body style="background-color:rgb(255,245,240); padding-top:30px;">

<div class="container" style="background-color:white;"> 
<nav style="margin-top:5px;">
    <div class="container-fluid">
     <div class="banner" style="height:100%, width:75%;">
                    <img src="img/Logo.png" width="430" height="200" style="position:absolute;margin-top:20px">
<div style="color:#4682B4; text-align:center; margin-bottom:50px;
-top:-30px;font-size:30px;font-family:Bodoni MT Black;">Sheria Inventory System</div>

               </div> 
     
     </div>
    </nav>

	<div class="container-fluid" style="margin-top: 95px; margin-bottom:5px; border-color:pink">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-primary  style="color: pink;>
			<div class="panel-heading" style="color: pink;">
				<h3 class="panel-title" style="color: pink;">Recover Password</h3>
			</div>
			<div class="panel-body">
				<!-- logn form -->
					<form class="form-horizontal" role="form" id="form-recoverpass">
					<center>
						<strong class="text-danger"></strong>
					</center>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="recover_email">Recovery Email</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="recover_email" placeholder="Enter Recover Email">
					    </div>
					  </div>
					  <div class="form-group" style="align:right;"> 
					    <div class="col-sm-offset-2 col-sm-10" >
						
					      <button type="submit" class="btn btn-default" id="recoverpass" style="color:#4682B4; margin: 10px 0;">Send Password Recovery Link 
						     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					      </button>
						  <span>&nbsp;</span>&nbsp;
						  <span>&nbsp;</span>&nbsp;
						  <span>&nbsp;</span>&nbsp;
						  <span>  &nbsp;<a href="index.php" style="color:#4682B4;" >Back to Login</a></span>
						   </div>
					  </div>
									  
					</form>
				<!-- logn form -->
			</div>
		</div>
		</div>
		<div class="col-md-2"></div>
	</div>

</div>
	 
   <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/js/login.js"></script>


</body>
</html>	

