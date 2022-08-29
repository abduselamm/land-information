<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$idd = $_post['id'];
			$pname = $_post['project_name'];
			$purpose =$_post['purpose'];
			$cluster =$_post['cluster'];
			$icapital =$_post['investment_capital'];
			$jcreation =$_post['job_creation'];
			$mapproval =$_post['mayor_approval'];
			$rland =$_post['received_land'];
			$ivillage =$_post['industry_village'];
			$unumber =$_post['upin_number'];
			$bnumber =$_post['block_number'];
			$pnumber =$_post['parcel_number'];

			
	   include('conn.php');
		
	 			$query = 'UPDATE project SET project_name ="'.$pname.'",
											 purpose = "'.$purpose.'", 
											 cluster="'.$cluster.'",
											 investment_capital="'.$icapital.'",
											 job_creation="'.$jcreation.'",
											 mayor_approval="'.$mapproval.'",
											 received_land="'.$rland.'",
											 industry_village="'.$ivallage.'",
											 upin_number="'.$unumber.'",
											 block_number="'.$bnumber.'",
											 parcel_number="'.$pnumber.'" WHERE 
									pid ="'.$idd.'"';
				$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "project.php";
		</script>
 </body>
</html>