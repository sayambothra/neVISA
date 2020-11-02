<?php
$conn=mysqli_connect('localhost','neVISA','neVISA@2020','ninja_pizza');

if(!$conn){
  echo 'connection error'.mysqli_connect_error();
}
$sql='SELECT name from ninja_info';

$res=mysqli_query($conn,$sql);
$names=mysqli_fetch_all($res,MYSQLI_ASSOC);

mysqli_free_result($res);
mysqli_close($conn);

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>neVISA</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="neVISA CSS/neVISA.css">
</head>

<body>
  <div class="container-fluid class">
    <h1 class="title">neVISA<h1>
        <h2 class="title">Life of Visa made easy</h2>
        <img src="page1.png" alt="" height="300px" width="100%">
         <img class=page1img src="https://previews.123rf.com/images/lumut/lumut1804/lumut180400419/99293062-plane-ilustration-logo-vector-icon-template.jpg" alt="" height="80px" width="100px">



  </div>

  <div class="container-fluid classB">
    <h4>Destination</h4>
    <form action="neVISA2.php"method="POST">


    <select style="border-width: 0px 0px 2px"  name="des" id="selectBox">
         <option value="" disabled selected hidden>Select Destination</option>
      <?php foreach($names as $name):?>
         <option value="<?php echo implode($name);?>"><?php echo implode($name)  ?></option>

      <?php endforeach; ?>

    </select><br><br>

        <h4>Origin</h4>
         <select style="border-width: 0px 0px 2px" name="Origin" id="selectOrigin">
         <option value="" disabled selected hidden>Select Origin</option>
        <option value="India">India</option>
          
        </select><br><br>
       <input class="btn btn-primary btn-lg button" type="submit" value="next" name="send">
    </form>

    </div>




</body>

</html>
