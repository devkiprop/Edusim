<?php
  // Insert the page header
  $page_title = 'Edusim - Dashboard';
  require_once('session_start.php');
  require_once('header.php');
  require_once('pupil_db.php');
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
			<?php
             $username = $_SESSION['username'] ;
             echo'<div class="alert alert-success" style="width: 45%; position: relative; float: left; left: 27%;"><p class="mb-0"><strong><h6><b><i class="glyphicon glyphicon-info-sign"></i> &nbsp; 
                 Welcome ' . $username . '. This is the Edusim examination platform. </b>
                 </h6><p>



             </p></strong></h6></strong></p></div>';
			?>				
		  	</div>				
		  </div>
		</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>