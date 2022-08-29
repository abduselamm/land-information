
<?php
       
       require_once "connection.php";
       
        ?>   
<body>

    <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

             <div class="col-lg-12">
                <?php
						$pname = $_POST['project_name'];
					    $purpose = $_POST['purpose'];
						$cluster = $_POST['cluster'];
						$icapital = $_POST['investment_capital'];
						$jcreation = $_POST['job_creation'];
						$mapproval = $_POST['mayor_approval'];
						$rland = $_POST['received_land'];
						$ivillage = $_POST['industry_village'];
						$unumber = $_POST['upin_number'];
						$bnumber = $_POST['block_number'];
						$pnumber = $_POST['parcel_number'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO project
								(project_name, purpose, cluster, investment_capital,job_creation, mayor_approval,received_land,industry_village,upin_number,block_number,parcel_number)
								VALUES ('".$pname."','".$purpose."','".$cluster."','".$icapital."','$jcreation','".$mapproval."','".$rland."','".$ivillage."','".$unumber."','".$bnumber."','".$pnumber."')";
								mysqli_query($conn,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "project.php";
		</script>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

