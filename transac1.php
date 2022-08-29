
<?php
       
       require_once "connection.php";
       
        ?>   
<body>

    <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

             <div class="col-lg-12">
                <?php
				    			$td=$_post['title_deeded_num'];
								$dd=$_post['date_of_deliver'];
								$sp=$_post['site_plan'];
								$pa=$_post['plan_agreement'].'</td>';
								$pb=$_post['permission_of_building'];
								$sb=$_post['starting_of_building'];
								$fb=$_post['finshing_of_building'];
								$n=$_post['nationality'];
								$e=$_post['email'];
								$pn=$_post['phone_number'];
								$eia=$_post['eia'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO lease
								(title_deeded_num, date_of_deliver, site_plan, plan_agreement,permission_of_building, starting_of_building,finshing_of_building,nationality,email,phone_number,eia)
								VALUES ('".$td."','".$dd."','".$sp."','".$pa."','$pb','".$sb."','".$fb."','".$n."','".$e."','".$pn."','".$eia."')";
								mysqli_query($conn,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "lease.php";
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

