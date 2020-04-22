<!DOCTYPE html>
<html>
<head>
	<title>COVID-19 STATES LIVE</title>
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
   		<h4 class="text-center" style="color: green;text-shadow: 0 0 46px red; margin-top: 25px;"> COVID-19 <span style="color: red;text-shadow: 0 0 30px red;">LIVE</span> UPDATES OF INDIA </h4>
   	</div>
   	<div class="table-responsive">
   		<table class="table table-bordered table-striped text-center">
   			<tr>
   				
   				<th style="background-color: gray;color: #fff" class="text-center">DATE & TIME</th>
   				<th style="background-color: darkgray;color: #fff" class="text-center">STATE</th>
   				<th style="background-color: gray;color: #fff" class="text-center">CONFIRMED</th>
   				<th style="background-color: darkgray;color: #fff" class="text-center">ACTIVE</th>
   				<th style="background-color: gray;color: #fff" class="text-center">RECOVERED</th>
   				<th style="background-color: darkgray;color: #fff" class="text-center">DEATHS</th>
   			
   			</tr>

    <?php
    //countries   https://api.covid19api.com/summary
      $data = file_get_contents('https://api.covid19india.org/data.json');
      $coronalive = json_decode($data, true);

        // echo "<pre>"; 
        //    print_r($coronalive);
        //  echo "</pre>";

      // echo $coronalive["statewise"][1]['state'];

      $statescount = count($coronalive['statewise']);
      $i=0;
      while ($i < $statescount) {

      	?>
      	<tr>
      	<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>"; ?></td>
        <td><?php echo $coronalive['statewise'][$i]['state']."<br>"; ?></td>
        <td><?php echo $coronalive['statewise'][$i]['confirmed']."<br>"; ?></td>
        <td><?php echo $coronalive['statewise'][$i]['active']."<br>"; ?></td>
        <td><?php echo $coronalive['statewise'][$i]['recovered']."<br>"; ?></td>
        <td><?php echo $coronalive['statewise'][$i]['deaths']."<br>"; ?></td>
      	</tr>
      	<!-- echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>";
      	echo $coronalive['statewise'][$i]['state']."<br>";
      	echo $coronalive['statewise'][$i]['confirmed']."<br>";
      	echo $coronalive['statewise'][$i]['active']."<br>";
      	echo $coronalive['statewise'][$i]['recovered']."<br>";
      	echo $coronalive['statewise'][$i]['deaths']."<br>";
 -->
        <?php   
      	$i++;
      }
    ?>

   		</table>
   	</div>
   </section>
</body>
</html>
