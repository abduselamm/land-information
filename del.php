
<?php
       
       include('conn.php');
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'project':
					$query = 'DELETE FROM project
							WHERE
							pid = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "project.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>