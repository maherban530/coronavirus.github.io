<!DOCTYPE html>
<html>
<head>
  <title>COVID-19 DAY WISE LIVE</title>
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
  <a class="navbar-brand pl-5"><h2 style="color: #fff">C <span class="corona_rot"><img src="ooo.jpg" style="margin-top: -10px;" height="45"width="45"></span> VID-19</h2></a>
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

   <section class="corona_update container-fluid">
    <div class=" mb-4 ">
      <h4 class="text-center" style="color: green;text-shadow: 0 0 46px red; margin-top: 25px;"> COVID-19 <span style="color: red;text-shadow: 0 0 30px red;">LIVE</span> UPDATES OF THE INDIA DAY WISE</h4>
    </div>
    <div class="table-responsive">
      <table class="table text-center" id="tbl">
    
      <?php
      $data = file_get_contents('https://api.covid19india.org/data.json');
      $coronadata = json_decode($data, true);

      $totalcount = count($coronadata['cases_time_series']);
      $i=1;
      while ($i < $totalcount) {
        ?>
        
        <tr>
          <th class="text-left" colspan="6">DATE & MONTH</th>
        </tr>
        <tr>
          <td colspan="6" class="text-left"><?php echo $coronadata['cases_time_series'][$i]['date']."<br>"; ?></td>
        </tr>
        <tr>
          <th style="color: #fff;background-color: darkgray" class="text-center">TOTAL CONFIRMED</th>
          <th style="color: #fff;background-color: gray" class="text-center">DAILY CONFIRMED</th>
          <th style="color: #fff;background-color: darkgray" class="text-center">TOTAL RECOVERED</th>
          <th style="color: #fff;background-color: gray" class="text-center">DAILY RECOVERED</th>
          <th style="color: #fff;background-color: darkgray" class="text-center">TOTAL DEATHS</th>
          <th style="color: #fff;background-color: gray" class="text-center">DAILY DEATHS</th>
        
        </tr>
        <tr>
          <td style="background-color: #DAF7A6"><?php echo $coronadata['cases_time_series'][$i]['totalconfirmed']."<br>"; ?></td>
          <td style="background-color: pink"><?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed']."<br>"; ?></td>
          <td style="background-color: #F3ECB7"><?php echo $coronadata['cases_time_series'][$i]['totalrecovered']."<br>"; ?></td>
          <td style="background-color:lightblue"><?php echo $coronadata['cases_time_series'][$i]['dailyrecovered']."<br>"; ?></td>
          <td style="background-color: #E3CCD3"><?php echo $coronadata['cases_time_series'][$i]['totaldeceased']."<br>"; ?></td>
          <td style="background-color:#E2AEA3"><?php echo $coronadata['cases_time_series'][$i]['dailydeceased']."<br>"; ?></td>

        </tr>
       <?php 
     $i++; 

    }
    ?>
   </table>
    </div>
   </section>
 </body>
</html>