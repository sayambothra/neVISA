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

<!-- <script>
function fn1(){
  var destination=document.getElementById("selectBox").value;
  localStorage.setItem("arrival",destination);
  var departure=document.getElementById("selectOrigin").value;
  localStorage.setItem("depart",departure);
  return false;
  $.ajax({
    url: 'neVISA3.php',
    type:'POST',
    data:{destination:value},

}); -->

}
  </script>

</head>

<body>
  <div class="container-fluid class">
    <h1>neVISA<h1>
        <h2>Life of Visa made easy</h2>
        <img src="page1.png" alt="" height="300px" width="100%">
         <img class=page1img src="https://previews.123rf.com/images/lumut/lumut1804/lumut180400419/99293062-plane-ilustration-logo-vector-icon-template.jpg" alt="" height="80px" width="100px">



  </div>

  <div class="container-fluid classB">
    <h4>Destination</h4>
    <form action="neVISA3.php"method="POST">


    <select  name="try" id="selectBox">

      <?php foreach($names as $name):?>
         <option value=""><?php echo implode($name)  ?><option>

      <?php endforeach; ?>

      </select>
      </form>

      </div>

    <div class="container-fluid classC">
      <h4>Origin</h4>
      <form action="neVISA3.html">
      <select id="selectOrigin">
        <option value="India">India</option>
          <option value="NewZealand">NewZealand</option>
          <option value="Australia">Australia</option>
          <option value="pakistan">pakistan</option>
        </select>
    </form>

    </div>
      <div class="classD text-center">
      <a href="neVISA2.php" class="btn btn-primary btn-lg"type="submit">Next</button></a>
          </div>



</body>

</html>
