<?php
  // Insert the page header
  $page_title = 'Edusim - Category';
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
                            <h6><i class="glyphicon glyphicon-list-alt"></i>  <b>CATEGORY</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">
                            <h6><b>EDIT EXAM CATEGORY</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>

            <div class="content-box-large"> 
                                                 <?php

                                                // Connect to the database
                                                $tt = mysqli_connect('localhost', 'root', '', 'test');


                                                if (isset($_GET['category_id']) && isset($_GET['category_name']) && isset($_GET['start_date']) && isset($_GET['end_date']) && isset($_GET['grade_level']) && isset($_GET['category_status'])) 

                                                {
                                                  // Grab the data from the GET
                                                  
                                                  $category_id = ($_GET['category_id']);
                                                  $category_type = ($_GET['category_type']);
                                                  $category_name = ($_GET['category_name']);
                                                  $start_date = ($_GET['start_date']);
                                                  $end_date = ($_GET['end_date']);
                                                  $grade_level = ($_GET['grade_level']);
                                                  $category_status = ($_GET['category_status']);

                                                
                                                }

                                                else 
                                                {
                                                  echo '';
                                                }

                                                if (isset($_POST['submit'])) 
                                                        {

                                                          // Grab the data from post

                                                          $category_id = ($_POST['category_id']);
                                                          $category_type = ($_POST['category_type']);
                                                          $category_name = ($_POST['category_name']);
                                                          $start_date = ($_POST['start_date']);
                                                          $end_date = ($_POST['end_date']);
                                                          $grade_level = ($_POST['grade_level']);
                                                          $category_status = ($_POST['category_status']);

                                                          
                                                          


                                                            if (!empty($category_type) && !empty($category_name) && !empty($start_date) && !empty($end_date) && !empty($grade_level) && !empty($category_status))

                                                              {
                                                                          
                                                                          $tt = mysqli_connect('localhost', 'root', '', 'test');
                                                                          $query = "UPDATE `category` SET `category_type` = '$category_type', `category_name` = '$category_name', `start_date` = '$start_date', `end_date` = '$end_date', `grade_level` = '$grade_level', `category_status` = '$category_status' WHERE `category`.`category_id` = '$category_id'";



                                                                          mysqli_query($tt, $query);
                                                                                 // Confirm success with the user
                                                                                 
                                                                                  echo '<div class="text-success"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>THE RECORD WAS UPDATED SUCCESFULLY</strong></h6></strong></div>';
                                                                                  
                                                                }
                                                              else 
                                                                {
                                                                  echo '<div class="text-danger"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>PLEASE PROVIDE ALL THE INFORMATION</strong></h6></strong></div>';
                                                                }
                                                        }
                                                    else
                                                    {

                                                          // Grab the profile data from the database
                                                          $tt = mysqli_connect('localhost', 'root', '', 'test');
                                                          $query = "SELECT * FROM `category` WHERE `category_id` ='$category_id'";
                                                          $data = mysqli_query($tt, $query);
                                                          $row = mysqli_fetch_array($data);


                                                    

                                                          if ($row != NULL) 
                                                          {
                                                            $category_id = ($row['category_id']);
                                                            $category_type = ($row['category_type']);
                                                            $category_name = ($row['category_name']);
                                                            $start_date = ($row['start_date']);
                                                            $end_date = ($row['end_date']);
                                                            $grade_level = ($row['grade_level']);
                                                            $category_status = ($row['category_status']);

                                                          }
                                                          else 
                                                          {
                                                            echo '<div class="text-danger"><strong><h6><i class="glyphicon glyphicon-remove-circle">&emsp;</i>THERE HAS BEEN AN ERROR ACCESSING YOUR PROFILE</strong></h6></strong></div>';
                                                          }
                                                           mysqli_close($tt);                
                                                      }
                                      ?>                            
                                                <div class="panel-body"> 
                         <h6>
                            
                        <form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="form-group">
                                  <input type="hidden"class="form-control" id="category_id" name="category_id" value="<?php if (!empty($category_id)) echo $category_id; ?>" />
                                <label for="category_name" class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-8">
                                <input type="text"class="form-control" id="category_name" name="category_name" value="<?php if (!empty($category_name)) echo $category_name; ?>" />
                                </div>
                                </div>
                                   <div class="form-group">
                                   <label for="category_type" class="col-sm-2 control-label" >Category Type</label>
                                   <div class="col-sm-5">
                                   <select class="form-control" for="category_type" name="category_type" id="category_type" value="<?php if (!empty($category_type)) echo $category_type; ?>">
                                                  <option value="">-- Select Category Type -- </option>
                                                  <option value="MAIN EXAMINATIONS">Main Examinations</option>
                                                  <option value="PRACTICE TESTS">Practice Tests</option>
                                                  <option value="CATS">Cats</option>
                                                  <option value="RATS">Rats</option>
                                                  <option value="EXAM ASSIGNMENTS">Exam Assignments</option>                 
                                   </select>
                                   </div>
                                   </div>
                                <div class="form-group">
                                <label for="start_date" class="col-sm-2 control-label">Start Date</label>
                                <div class="col-sm-8">
                                <input type="text"class="form-control" id="start_date" name="start_date" value="<?php if (!empty($start_date)) echo $start_date; ?>" />
                                </div>
                               </div>
                               <div class="form-group">
                                <label for="end_date" class="col-sm-2 control-label">End Date</label>
                                <div class="col-sm-8">
                                <input type="text"class="form-control" id="end_date" name="end_date" value="<?php if (!empty($end_date)) echo $end_date; ?>" />
                                </div>
                               </div>
                               <div class="form-group">
                                <label for="grade_level" class="col-sm-2 control-label" >Grade Level</label>
                                   <div class="col-sm-8">
                                   <select class="form-control" for="grade_level" name="grade_level" id="grade_level" value="<?php if (!empty($grade_level)) echo $grade_level; ?>">
                                                  <option value="">-- Select Grade Level -- </option>
                                                  <option value="VI">Grade VI</option>
                                                  <option value="VII">Grade VII</option>
                                                  <option value="VIII">Grade VIII</option>                 
                                   </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-2 control-label" for="category_status">Status:</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="category_status" name="category_status" value="<?php if (!empty($category_status)) echo $category_status; ?>" style="text-align: left;" />
                                </div>
                              </div>
                             <div class="form-group">
                             </div>
                              <br>
                              <div style="text-align: center;">
                              <input style="color: white; font-weight: bold;" type="submit" value="SUBMIT" class="btn btn-success" name="submit" />
                              </div>
                         </form>
                         </h6>              
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