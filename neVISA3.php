<?php
$conn=mysqli_connect('localhost','wrSports','Champion1@','neVISA');
if(!$conn){
  echo 'connection error';
}
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>neVISA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="neVISA.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="classf container-fluid">
      <h1>neVISA</h1>
      <h3>Life of Visa made easy</h3>

    </div>
    <div class="row input">
      <div class="col-sm-4">
        <!-- <h4>From <br><span id="des"></span></h4> -->


     <?php
     if(isset($_POST['send'])){
     $countryname=$_POST['des'];
     echo"<h3>TO</h3>\n";
     // echo $countryname;
   }
   ?>
   <?php echo $countryname; ?>
   <?php

   $sql1 = "SELECT  CountryName,CountryImage FROM country_image WHERE CountryName='$countryname'";
   $result = mysqli_query($conn,$sql1);

   while($row = mysqli_fetch_array($result))
   {
   $image_src2 = $row['CountryImage'];
}


 ?>
 <br><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image_src2 ).'" height="200" width="200"/>'?>



      </div>
      <div   class="col-sm-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPbnwVNkaPZ7wa2nhQavhQoHtQ13CXaScY-txtIssoZcLE3dSs&usqp=CAU" alt="" height="50%" width="20%">

      </div>
      <div class="col-sm-4">
        <!-- <h4>TO<br><span id="arr"></span></h4> -->
        <?php
        if(isset($_POST['send'])){
        $country_from_name=$_POST['Origin'];
        echo"<h3>From</h3>\n";
        echo $country_from_name;
      }
        ?>
        <?php
        $sql2 = "SELECT  countryName,CountryImage FROM country_image WHERE CountryName='$country_from_name'";
        $result = mysqli_query($conn,$sql2);
        $image_src2;
        if (!$result) {
       printf("Error: %s\n", mysqli_error($conn));
       exit();
     }
        while($row = mysqli_fetch_array($result))
        {
        $image_src2 = $row['CountryImage'];

     }


      ?>
      <br><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image_src2 ).'" height="200" width="200"/>'?>

      </div>
      </div>
      <div class="classg">
        <h3 class="h" >FOR TOURISM</h3>
        <h3 class="g">VISA REQUIREMENTS</h3>
        <?php
        error_reporting(0);
        $sql="SELECT * FROM visa_info WHERE CountryName= '$countryname'";
        $count;
        $result=$conn->query($sql);
        //echo $countryname;
           $banCountries=array("Canada","United Arab Emirates","United Kingdom","France","Singapore","Hongkong","Oman","Pakistan","Italy","Bangladesh",
           "Thailand","Iran","Australia","Czech Republic","Spain","Belgium","Netherlands","Malaysia","Nigeria",
           "Malawi","Israel","Taiwan","Phillipines","Combodia","Srilanka","United States");
            for($i=0;$i<sizeof($banCountries);$i++){
           if($countryname==$banCountries[$i]){
             //echo $banCountries[$i];
             $count++;

           }

         }
         if($count>=1){
            echo "<h2>Currently Flights from India to ".$countryname." are banned.</h2>";
         }else{
            $rows= mysqli_fetch_row($result);

              $line1=$rows[3];
             $link=strchr($line1,"http");
             // echo "$link <br>";
             echo "<a href='$link'>$link</a><br>";
             echo "$rows[5]<br>";

               $line2=$rows[6];
               //echo $line2;
               if(strpos($line2,'https')==true){
                 $lb='https';
                 echo strstr($line2,$lb,true);
                 echo"<br>";
               // echo "$line2 <br>";
                 $link2=strchr($line2,"https");
                 echo "<a href='$link2'>$link2</a><br>";
              }
              else{
                 echo $line2;
              }
              echo "<br>";

              //echo "$rows[6]<br>";
              // $line3=$rows[7];
              // $lbs='http';
              // echo strstr($line3,$lbs,true);
              // echo"<br>";
              // // echo "$line2 <br>";
              // $link3=strchr($line3,"http");
              //  echo "<a href='$link3'>$link3</a><br>";
              //  $line4=$rows[8];
              //  $lbt='http';
              //  echo strstr($line4,$lbt,true);
              //  echo"<br>";
              //  // echo "$line2 <br>";
              //  $link4=strchr($line4,"http");
              //  $link5=explode("and",$link4);
              //
              //  echo "<a href='$link5[0]'>$link5[0]</a> ";
              //  echo "$link5[1]<br>";
              // function reframe($line){
              //   echo $line;
              //   $i=0;
              //  $step2=explode("*",$line);
              //  //echo $step2[0];
              //   $St=count($step2);
              //    for($i=0;$i<$St;$i++){
              //      //echo $step2[$i];
              //     if(strpos($step2[$i],'http')==true){
              //       $lbst='https';
              //       echo strstr($step2[$i],$lbst,true);
              //       echo"<br>";
              //       $link1=strchr($step2[$i],"http");
              //       echo "<a href='$link1'>$link1</a><br>";
              //     }
              //     else{
              //       echo $step2[$i];
              //       echo " <br> -";
              //     }
              //   }

              // }
              // reframe($rows[7]);

                $line6=$rows[7];//explode(" ",$row[7]);
               $i=0;
              $step2=explode("*",$line6);
              //echo $step2[0];
               $St=count($step2);
                for($i=0;$i<$St;$i++){
                  //echo $step2[$i];
                 if(strpos($step2[$i],'http')==true){
                   $lbst='https';
                   echo strstr($step2[$i],$lbst,true);
                   echo"<br>";
                   $link6=strchr($step2[$i],"http");
                   echo "<a href='$link6'>$link6</a><br>";
                 }
                 else{
                   echo $step2[$i];
                   echo " <br> -";
                 }
               }
               $line7=$rows[8];//explode(" ",$row[7]);
              $j=0;
             $step3=explode("*",$line7);
             //echo $step2[0];
              $St3=count($step3);
               for($j=0;$j<$St3;$j++){
                 //echo $step2[$i];
                if(strpos($step3[$j],'http')==true){
                  $lbst3='https';
                  echo strstr($step3[$j],$lbst3,true);
                  //echo"<br>";
                  $link7=strchr($step3[$j],"http");
                  echo "<a href='$link7'>$link7</a><br>";
                }
                else{
                  echo $step3[$j];
                  echo " <br> -";
                }
              }
              $line8=$rows[9];//explode(" ",$row[7]);
             $k=0;
            $step4=explode("*",$line8);
            //echo $step2[0];
             $St4=count($step4);
              for($k=0;$k<$St4;$k++){
                //echo $step2[$i];
               if(strpos($step4[$k],'http')==true){
                 $lbst4='https';
                 echo strstr($step4[$k],$lbst4,true);
                 //echo"<br>";
                 $link8=strchr($step4[$k],"http");
                 echo "<a href='$link8'>$link8</a><br>";
               }
               else{
                 echo $step4[$k];
                 echo " <br> -";
               }
             }
             $line9=$rows[10];//explode(" ",$row[7]);
            $k=0;
           $step5=explode("*",$line9);
           //echo $step2[0];
            $St5=count($step5);
             for($k=0;$k<$St5;$k++){
               //echo $step2[$i];
              if(strpos($step5[$k],'http')==true){
                $lbst5='https';
                echo strstr($step5[$k],$lbst5,true);
                //echo"<br>";
                $link9=strchr($step5[$k],"http");
                echo "<a href='$link9'>$link9</a><br>";
              }
              else{
                echo $step5[$k];
                echo " <br> -";
              }
            }
            $line10=$rows[11];//explode(" ",$row[7]);
           $k=0;
          $step6=explode("*",$line10);
          //echo $step2[0];
           $St6=count($step6);
            for($k=0;$k<$St6;$k++){
              //echo $step2[$i];
             if(strpos($step6[$k],'http')==true){
               $lbst6='https';
               echo strstr($step6[$k],$lbst6,true);
               //echo"<br>";
               $link10=strchr($step6[$k],"http");
               echo "<a href='$link10'>$link10</a><br>";
             }
             else{
               echo $step6[$k];
               echo " <br> -";
             }
           }
         }


?>
</div>

  </body>
</html>
