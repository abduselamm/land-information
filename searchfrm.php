
<?php
       
       include('conn.php');
       
        ?>  
<body>

            
       
<?php 
$query = 'SELECT * FROM project
              WHERE
              pid ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $idd = $row['pid'];
                $pname = $row['project_name'];
					      $purpose =$row['purpose'];
                $cluster =$row['cluster'];
                $icapital =$row['investment_capital'];
                $jcreation =$row['job_creation'];
                $mapproval =$row['mayor_approval'];
                $rland =$row['received_land'];
                $ivillage =$row['industry_village'];
                $unumber =$row['upin_number'];
                $bnumber =$row['block_number'];
                $pnumber =$row['parcel_number'];
             
              }
              
              $id = $_GET['id'];
         
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>search</title>
  <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<div class="container p-5 my-5 mt-5 bg-light border card  col-lg-6 rounded text-dark text-center">
     <div class="col-lg-12">
              <div class="col-lg-6">
                <form role="form" method="post" action="project.php">  
                    <div class="form-group">
                      <input class="form-control" placeholder="id" name="id" value="<?php echo $idd; ?>">
                    </div>       
                    <div class="form-group">
                      <input class="form-control" placeholder="Project Name" name="project_name" value="<?php echo $pname; ?>">
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Purpose" name="purpose" value="<?php echo $purpose; ?>">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" placeholder="Cluster" name="cluster" value="<?php echo $cluster; ?>">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="float" placeholder="Investment Capital" name="investment_capital" value="<?php echo $icapital; ?>">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="number" placeholder="Job Creation" name="job_creation" value="<?php echo $jcreation; ?>">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="float" placeholder="Mayor Approval" name="mayor_approval" value="<?php echo $mapproval; ?>">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="float" placeholder="Received Land" name="received_land" value="<?php echo $rland; ?>">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="number" placeholder="Industry Village" name="industry_village" value="<?php echo $ivillage; ?>">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" placeholder="UPIN Number" name="upin_number" value="<?php echo $unumber; ?>">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" placeholder="Block Number" name="block_number" value="<?php echo $bnumber; ?>">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="number" placeholder="Parcel Number" name="parcel_number" value="<?php echo $pnumber; ?>">
                    </div> 
                            <button type="submit" class="btn btn-default">Return to main menu</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
</body>
</html>


  

