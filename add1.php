
<?php
       
       require_once "connection.php";
       
        ?>  


  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add lease</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<div id="wrapper">

        
<div id="page-wrapper">

    <div class="container p-5 my-5 mt-5 bg-light border card  col-sm-7 rounded text-dark text-center">
     <div class="col-lg-12">
          <h2>Add new Records</h2>
              <div class="col-lg-6">
                <form role="form" method="post" action="transac1.php?action=add">           
                    <div class="form-group">
                      <input class="form-control" placeholder="Title Deeded Num" name="title_deeded_num">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="date" placeholder="Date of Deliver" name="date_of_deliver">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" placeholder="Site Plan" name="site_plan">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="date" placeholder="Plan Agreement" name="plan_agreement">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="date" placeholder="permission of Bilding" name="permission_of_building">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="date" placeholder="Starting of Building" name="starting_of_building">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="date" placeholder="Finshing of Building" name="finshing_of_building">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" placeholder="nationality" name="nationality">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="email" placeholder="Email" name="email">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" type="number" placeholder="Phone Number" name="phone_number">
                    </div> 
                    <div class="form-group">
                      <input class="form-control" placeholder="EIA" name="eia">
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