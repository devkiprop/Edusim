<?php
  // Insert the page header
  $page_title = 'Edusim - Category';
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
                            <h6><i class="glyphicon glyphicon-scale"></i><b> EXAMS RESULTS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 panel-warning">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">
                            <h6><b>EXAM CATEGORY LISTING RESULTS</b></h6> 
                        </div>
                    </div>              
                </div>
            </div>

            <div class="content-box-large">
                <div class="panel-body">

                            <h6><table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Exam Category Name</th>
                                        <th>Date Ended</th>
                                        <th>Names</th>
                                        <th>Grade Level</th>
                                        <th>Position</th>
                                        <th>Total Marks(500)</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>ELDAMA RAVINE DIVISION END TERM</td>
                                        <td>01-01-2020</td>
                                        <td>VINCENT NZOMO MWINZILA</td>
                                        <td>Grade 6</td>
                                        <td>21</td>
                                        <td>327</td>
                                         <td class="center"><button class="btn btn-success btn-xs"><a href="manage_exam_detail_examiner.php"><b style="color: white;"> MORE</b></a></button> <button class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-print"></button></td>
                                        <td class=""><p class="text-danger"><i class="glyphicon glyphicon-off"></i></p></td>
                                    </tr>                             
                                    <tr class="odd gradeX">
                                        <td>HIGH FLYER BOOK EXAMS</td>
                                        <td>01-01-0000</td>
                                        <td>VINCENT NZOMO MWINZILA</td>
                                        <td>Grade 6</td>
                                        <td>1</td>
                                        <td>417</td>
                                         <td class="center"><button class="btn btn-success btn-xs"><a href="manage_exam_detail_examiner.php"><b style="color: white;"> MORE</b></a></button> <button class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-print"></button></td>
                                        <td class=""><p class="text-success"><i class="glyphicon glyphicon-ok"></i></p></td>
                                    </tr>     
                                    <tr class="odd gradeX">
                                        <td>GRADE SIX GENERAL CATS</td>
                                        <td>01-01-0000</td>
                                        <td>VINCENT NZOMO MWINZILA</td>
                                        <td>Grade 6</td>
                                        <td>3</td>
                                        <td>391</td>
                                         <td class="center"><button class="btn btn-success btn-xs"><a href="manage_exam_detail_examiner.php"><b style="color: white;"> MORE</b></a></button> <button class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-print"></button></td>
                                        <td class=""><p class="text-success"><i class="glyphicon glyphicon-ok"></i></p></td>
                                    </tr>     
                                </tbody>
                            </table>
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