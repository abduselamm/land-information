
<?php
       
       require_once "connection.php";
       
        ?>  


  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<div id="wrapper">

        
<div id="page-wrapper">

    <div class="container p-5 my-5 mt-5 bg-light border card  col-sm-7 rounded text-dark text-center">
     <div class="col-lg-12">
          <h2>Add new Records</h2>
              <div class="col-lg-6">
                <form role="form" method="post" action="transac.php?action=add">           
                    <div class="form-group">
                      <input class="form-control" placeholder="Project Name" name="project_name">
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Purpose" name="purpose">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" placeholder="Cluster" name="cluster">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="float" placeholder="Investment Capital" name="investment_capital">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="number" placeholder="Job Creation" name="job_creation">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="float" placeholder="Mayor Approval" name="mayor_approval">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="float" placeholder="Received Land" name="received_land">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="number" placeholder="Industry Village" name="industry_village">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" placeholder="UPIN Number" name="upin_number">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" placeholder="Block Number" name="block_number">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="number" placeholder="Parcel Number" name="parcel_number">
                    </div> 
                   
                    <button type="submit" class="btn btn-default">Save Record</button>
                    <button type="reset" class="btn btn-default">Clear Entry</button>


              </form>  
            </div>
        </div>
        
    </div>
</div>

</div>
</body>
</html>