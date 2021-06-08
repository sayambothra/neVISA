<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
    <title>neVISA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="neVISA.css"> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


  </head>

  <body>
    <div class="container-fluid ">
     <img src="neVISA-page2.jpg" alt="" width="100%">
   </div>
 <br>





  <div class="classD text-center">
  <form  action="neVISA3.php" method="post">
    <?php
    if(isset($_POST['send'])){
    $countryname=$_POST['des'];
    $country_from_name=$_POST['Origin'];

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
