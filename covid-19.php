<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID-19 LIVE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="covid.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info nav_style p-3">
  <a class="navbar-brand pl-5" href="covid-19.php"><h2 style="color: #fff">C <span class="corona_rot"><img src="ooo.jpg" style="margin-top: -10px;" height="45"width="45"></span> VID-19</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="covid-19.php"><h5 style="color: #fff">Home&nbsp;&nbsp;</h5><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="covid-19world.php"><h5 style="color: #fff">Covid-19 World <span style="color: red;">LIVE</span>&nbsp;&nbsp;</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="covid-19states.php"><h5 style="color: #fff">Covid-19 State <span style="color: red;">LIVE</span>&nbsp;&nbsp;</h5></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="covid-19daywise.php"><h5 style="color: #fff">Covid-19 DayWise <span style="color: red;">LIVE</span>&nbsp;&nbsp;</h5></a>
      </li>
    </ul>
  </div>
</nav>

 <?php
    if( isset($_POST['clicks']) )
    { 
        clickInc();
    }
    function clickInc()
    {
        $count = ("clickcount.txt");

        $clicks = file($count);
        $clicks[0]++;

        $fp = fopen($count, "w") or die("Can't open file");
        fputs($fp, "$clicks[0]");
        fclose($fp);
        ?>
        <p style="margin-left: 36px; margin-top: 7px; margin-bottom: -7px"><b><?php echo $clicks[0]; ?></b></p>

      <!--  echo  $clicks[0]; -->
      <?php
    }
    ?>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
         <span><i aria-hidden="true"></i></span> 
         <!-- <input type="submit" value="Like" name="clicks" class="btn btn-danger" class="corona_rot" img src="li.jpg" height="37"width="37" style="margin-left: 17px; margin-top: 10px;"> -->

         <button name="clicks" class="btn" style="margin-left: 11px; margin-top: 12px"><span class="leftside"><img src="ll.jpg" height="47"width="47"></span></button>
      </form>
 

<div class="main_header">
  <div class="row w-100 h-100">
     
     <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
       <div class="rightside w-100 h-100 d-flex justyfy-content-center align-items-center" style="margin-left: 50px; margin-top: 20px;">
        <h2>Let's Stay Safe & Fight Together Against <br> Cor <span class="corona_rot"><img src="cor.jpg" height="42"width="42"></span> na Virus</h2>  
       </div>
     </div>
     <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
       <div class="leftside w-100 h-100 d-flex justyfy-content-center align-items-center" style="margin-left: 50px; margin-top: 20px;">
         <img src="coro.jpg" width="330" height="330">
       </div>
     </div>
     <!-- <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
       <div class="leftside w-100 h-100 d-flex justyfy-content-center align-items-center" style="margin-left: 80px; margin-top: 20px;">
         <img src="co.jpg" width="330" height="330">
       </div>
     </div>
 -->
  </div>   
</div>

<section class="corona_update container-fluid">
    <div style="margin-top: 100px;" class=" mb-4 ">
      <h5 class="text-center" style="color: green;text-shadow: 0 0 46px red;"> COVID-19 <span style="color: red;text-shadow: 0 0 30px red;">LIVE</span> UPDATES OF WORLD </h5>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <tr style="font-size: 13px;">
        <th style="background-color: rgba(193, 255, 82, 0.3); color: black;" class="text-center">TOTAL CONFIRMED</th>
          <th style="background-color: hsla(86, 37%, 77%, 0.6); color: black;" class="text-center">NEW CONFIRMED</th>
          <th style="background-color: rgba(193, 255, 82, 0.3);color: black" class="text-center">TOTAL RECOVERED</th>
          <th style="background-color: hsla(86, 37%, 77%, 0.6); color: black" class="text-center">NEW RECOVERED</th>
          <th style="background-color: rgba(193, 255, 82, 0.3); color: black" class="text-center">TOTAL DEATHS</th>
          <th style="background-color: hsla(86, 37%, 77%, 0.6); color: black" class="text-center">NEW DEATHS</th>
        </tr>

        <?php
          $data = file_get_contents('https://api.covid19api.com/summary');
          $coronatotal = json_decode($data, true);

         
        $worldcount1 = count($coronatotal['Global']);
      
        if($worldcount1) {
        ?>
        <tr style="font-size: 21px; color: red; background-color: rgba(255, 255, 133, 0.2);">
        <td><?php echo $coronatotal['Global']['TotalConfirmed']."<br>"; ?></td>
        <td><?php echo $coronatotal['Global']['NewConfirmed']."<br>"; ?></td>
        <td><?php echo $coronatotal['Global']['TotalRecovered']."<br>"; ?></td>
        <td><?php echo $coronatotal['Global']['NewRecovered']."<br>"; ?></td>
        <td><?php echo $coronatotal['Global']['TotalDeaths']."<br>"; ?></td>
        <td><?php echo $coronatotal['Global']['NewDeaths']."<br>"; ?></td>
        </tr>
        
        <?php  
        
      }
        ?>
      </table>
              <a href="covid-19world.php"><h7>View</h7></a>
</div> 
</section>
<section class="corona_update container-fluid">
    <div style="margin-top: 50px;" class=" mb-4 ">
      <h5 class="text-center" style="color: green;text-shadow: 0 0 46px red;"> COVID-19 <span style="color: red;text-shadow: 0 0 30px red;">LIVE</span> UPDATES OF INDIA </h5>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <tr style="font-size: 13px;">
        <th style="background-color: hsla(86, 37%, 77%, 0.6); color: black;" class="text-center">DATE & TIME</th>
          <th style="background-color: rgba(193, 255, 82, 0.3); color: black;" class="text-center">TOTAL CONFIRMED</th>
          <th style="background-color: hsla(86, 37%, 77%, 0.6); color: black;" class="text-center">TOTAL ACTIVE</th>
          <th style="background-color: rgba(193, 255, 82, 0.3);color: black" class="text-center">TOTAL RECOVERED</th>
          <th style="background-color: hsla(86, 37%, 77%, 0.6); color: black" class="text-center">TOTAL DEATHS</th>
        </tr>

        <?php
          $data = file_get_contents('https://api.covid19india.org/data.json');
          $coronatotal = json_decode($data, true);

         
        $statescount1 = count($coronatotal['statewise']);
        $i=0;
        if($i < $statescount1) {
        ?>
        <tr style="font-size: 20px; color: red; background-color: rgba(255, 255, 133, 0.2);">
        <td><?php echo $coronatotal['statewise'][$i]['lastupdatedtime']."<br>"; ?></td>
        <td><?php echo $coronatotal['statewise'][$i]['confirmed']."<br>"; ?></td>
        <td><?php echo $coronatotal['statewise'][$i]['active']."<br>"; ?></td>
        <td><?php echo $coronatotal['statewise'][$i]['recovered']."<br>"; ?></td>
        <td><?php echo $coronatotal['statewise'][$i]['deaths']."<br>"; ?></td>
        </tr>
        
        <?php  
        
      }
        ?>
      </table>
                    <a href="covid-19states.php"><h7>View</h7></a>
</div> 
</section>

  <div class="container-fluid sub_section pt-3 pb-5" id="aboutid" style="background-color: #333333c7">
    <div class="section_header text-center mb-3 mt-4">
      <h2 style="color: #fff000; text-shadow: 0 0 57px #fff000;">About&nbsp; C <span class="corona_rot"><img src="mass.jpg" height="50"width="50"></span> VID-19</h2> 
    </div>
    <div class="row pt-5">
      <div class="col-lg-5 col-md-5 col-12 order-lg-2 order-1">
       <div class="leftside w-100 h-100 d-flex justyfy-content-center align-items-center" style="margin-left: ;">
         <img src="co.jpg" width="420" height="370">
       </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12 order-lg-1 order-2">
       <h3 style="margin-top: 25px; color: #fff"><b>*</b> What is COVID-19 (Corona-Virus)</h3>
       <h5 style="color: #fff; margin-top: 15px; margin-left: 15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in wuhan, China, in December 2019.</h5>
       <h5 style="color: #fff; margin-top: 13px; margin-left: 15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       Coronaviruses are a large family of viruses which may caues illness in animals or human. In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as middle East Respiratory syndrome (MERS) and severe Acute Respiratory syndrome (SARS). The most recently discovered coronaviruses cause coronavirus disease COVID-19.</h5>
      </div>
    </div> 
  </div>
    <h5>Developed by: Maherbanhusen</h5>
 </body>
</html>