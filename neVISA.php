<?php
$conn=mysqli_connect('localhost','wrSports','Champion1@','neVISA');
if(!$conn){
  echo 'connection error';
}
$sql='SELECT name from countries';

$res=mysqli_query($conn,$sql) or die( mysqli_error($conn));
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
  <link rel="stylesheet" href="neVISA.css">
</head>
<style media="screen">
.class{
  background-color: #5F7AE8;
  text-align: center;
  color:white;
  padding-top:50px;
  margin-left: 6%;
  margin-right:6%;
}
  label{
    display: inline-block;
    font-style: bold;
  }
  .travel{
    margin-left:2%;
  }
  .classA{
    text-align:center;
  }
  .userDetails{
    padding-top:3%;
    padding-left: 30%;

  }
  label{
      width:240px;
      display:inline-block;
      /* font-family:bold; */
      font-size: 20px;

  }
  .button{

    float:right;
    margin-right:50%;
  }
</style>

<body>
  <div class="class">
       <h1 class="title">neVISA<h1>
        <h2 class="title">Life of Visa made easy</h2>
        <img src="page1.png" alt="" width="60%">



  </div>



    <form action="neVISA3.php"method="POST">
      <div class="container-fluid userDetails">
            <label><strong>Destination</strong></label>
    <select style="border-width: 0px 0px 2px"  name="des" id="selectBox" required>
         <option value="" disabled selected hidden>Select Destination</option>
      <?php foreach($names as $name):?>
         <option value="<?php echo implode($name);?>"><?php echo implode($name)  ?> </option>
      <?php endforeach; ?>
    </select><br><br>

        <label><strong>Origin</strong></label>
         <select style="border-width: 0px 0px 2px" name="Origin" id="selectOrigin" required>
         <option value="" disabled selected hidden>Select Origin</option>
        <option value="India">India</option>

        </select><br><br>

            <label><strong>Which country passport<br>do you have?<strong></label>
              <select style="border-width: 0px 0px 2px"class="travel" id="originpassport">
                <option value="India">India</option>
              </select><br><br>

                  <label><strong>Purpose of travel?</strong></label>
                <input class="travel"style="border-top:0px;border-left-width:0px;border-right:0px;"type="text" name="" value=""maxlength="20" size="20">

            <br><br>
       <input  class="btn btn-primary btn-lg button" type="submit" value="next" name="send">
       </div>
    </form>






</body>

</html>
