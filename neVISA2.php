<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>neVISA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="neVISA CSS/neVISA.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid classE">
     <img src="https://image.freepik.com/free-vector/global-network-connection-world-map-digital-background_1017-23322.jpg" alt="" height="100%" width="100%">
    </div>
    <div class="container-fluid classB">
      <h4>Which country passport do you have?</h4>
      <select id="originpassport">
        <option value="India">India</option>
          <option value="NewZealand">NewZealand</option>
          <option value="Australia">Australia</option>
          <option value="pakistan">Pakistan</option>

      </select>
  </div>
  <div class="container-fluid classC">
    <h4>Purpose of travel?</h4>
    <input type="text" name="" placeholder="enter purpose of travel">
  </div>
  <div class="classD text-center">
  <form  action="neVISA3.php" method="post">
    <?php
    if(isset($_POST['send'])){
    $countryname=$_POST['des'];
    $country_from_name=$_POST['Origin'];
     //echo"<h3>TO</h3>\n";
    //echo $countryname;
  }
  ?>





<input type="hidden" name="send2" value="<?php echo $countryname;?>">
<input type="hidden" name="send3" value="<?php echo $country_from_name;?>">
<input type="submit" name="send4" value="next" class="btn btn-primary btn-lg">

  </form>
</div>
 <!-- <a href="neVISA3.php"  <button  class="btn btn-primary btn-lg">Next</button> </a> -->


  </body>
</html>
