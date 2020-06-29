<?php
$conn=mysqli_connect('localhost','neVISA','neVISA@2020','ninja_pizza');
if(!$conn){
  echo 'Connection error'.mysqli_connect_error;
}



 ?>
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
    <div class="classf">
      <h1>neVISA</h1>
      <h3>Life of Visa made easy</h3>

    </div>
    <div class="row input">
      <div class="col">
        <!-- <h4>From <br><span id="des"></span></h4> -->
     <?php
     $countryname=$_POST['try'];
     echo 'from '.$countryname; ?>

      </div>
      <div class="col">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPbnwVNkaPZ7wa2nhQavhQoHtQ13CXaScY-txtIssoZcLE3dSs&usqp=CAU" alt="" height="50%" width="20%">

      </div>
      <div class="col">
        <!-- <h4>TO<br><span id="arr"></span></h4> -->

      </div>
      </div>
      <div class="classg">
        <h3 class="h" >FOR TOURISM</h3>
        <h3 class="g">VISA REQUIREMENTS</h3>


        <?php

          $month = $_POST["destination"];
         echo implode("",$_GET);
         var_dump($month);



            $sql="SELECT Visa_name FROM visa_info WHERE Country='$month'";

          $result=mysqli_query($conn,$sql) or die(mysql_error());

             while($rows=mysqli_fetch_all($result)){
             extract($row);
             echo $Visa_name;
  }
          ?>

</div>
<!-- <script>
document.getElementById("des").innerHTML=localStorage.getItem("depart");
 document.getElementById("arr").innerHTML=localStorage.getItem("arrival");
</script> -->



  </body>
</html>
