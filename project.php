<?php
// Initialize the session
session_start();
 
require_once "connection.php";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                <h4 class="my-5"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome admin dashboard.</h4>
                </div>
                <div class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav ">
                    <button ><a href="logout.php" class="btn btn-danger ml-3">Sign Out</a></button>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" />
						<br/>
    <label>set your profile:</label>
    <input type="file"name="newfile"><br/>
                    </li>

                    <li>
                        <a href="admin.php"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>

                    <li>
                        <a href="project.php"><i class="fa fa-table "></i>projects</a>
                    </li>
                    <li>
                        <a href="lease.php"><i class="fa fa-table "></i>lease</a>
                    </li> 
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Notifications</a>
                            </li>
                            <li>
                                <a href="#">Elements</a>
                            </li>
                            <li>
                                <a href="#">Free Link</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h3>projects</h3>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="col-lg-12">
                        <a href="add.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Purpose</th>
                                        <th>Cluster</th>
                                        <th>Investment Capital</th>
                                        <th>Job Creation</th>
                                        <th>Mayor Approval of land</th>
                                        <th>Recived Land Meter Square</th>
                                        <th>Industry Village</th>
                                        <th>UPIN Number</th>
                                        <th>Block Number</th>
                                        <th>Parcel Number</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM project';
                    $result = mysqli_query($conn, $query) or die (mysqli_error($conn));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['project_name'].'</td>';
                            echo '<td>'. $row['purpose'].'</td>';
                            echo '<td>'. $row['cluster'].'</td>';
                            echo '<td>'. $row['investment_capital'].'</td>';
                            echo '<td>'. $row['job_creation'].'</td>';
                            echo '<td>'. $row['mayor_approval'].'</td>';
                            echo '<td>'. $row['received_land'].'</td>';
                            echo '<td>'. $row['industry_village'].'</td>';
                            echo '<td>'. $row['upin_number'].'</td>';
                            echo '<td>'. $row['block_number'].'</td>';
                            echo '<td>'. $row['parcel_number'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id='.$row['pid'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['pid'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=project&delete & id=' . $row['pid'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
               
                <!-- /. ROW  -->
             

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
