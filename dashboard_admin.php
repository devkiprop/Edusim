<?php
  // Insert the page header
  $page_title = 'Dashboard';
  require_once('session_start.php');
  require_once('header.php');
  require_once('admin_db.php');
?>

		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-6">
		  			
		  		</div>
		  	</div>		  	
		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">

	  					<div class="panel-title ">
	  						<h6><i class="glyphicon glyphicon-dashboard"></i>  <b>DASHBOARD</b></h6> 
	  					</div>
		  			</div>  			
		  		</div>
		  	</div>

		  	<div class="content-box-large">
				<div class="panel-body">
					  <div class="alert alert-success" style="width: 32%; position: relative; float: left; left: 33%;"><p class="mb-0"><strong><h6><i class="glyphicon glyphicon-ok"></i> &nbsp;The question was updated successfully</strong></h6></strong></p></div>


		  	    </div>				
		  </div>
		</div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">     
    $(document).ready(function () 
    {
    $('#dtexample').DataTable();
    } 
    );
    </script>
  </body>
</html>