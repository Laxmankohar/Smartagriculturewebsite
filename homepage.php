<?php
	session_start();
	require'dbconfig/config.php';
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>homepage</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="homepage.css" type="text/css">
</head>

<header>
	<nav>
		<ul>
		
			<li><a class="smart-agriculture">Smart Agriculture</a></li>
			<li><a class = "active"href="#">Home</a></li>
			<li><a href="#" >services</a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Blogs</a></li>
		</ul>
	</nav>
</header>
<body>
	<form action="homepage.php" method="POST">	
	<div class="log-out">
    <button name="logout" type="submit" class="logout-btn">Log out</button>
    </div>
    </form>
    <?php  
        if (isset($_POST['logout'])) {
            session_destroy();
            header('Location:Login.php');
        }
	?>
	<div class="image-1"><img src = "IoT.jpg">
	<figcaption class="img-credit-1">Image credit:IOT business News</figcaption>
	</div>
	<div class="description-1">
		<p><strong>iot(internet of things):</strong></p>
	</div>
	<div class="paragraph-1">
		<p>Nowadays everyone is familiar about the concepts of iot and its uses.simply,iot have a pretty simple concept that it takes all the things available in the world and connect them through the internet.This is the simple definition of iot.In other words, we can define the iot like,it is system which is interrelated with the mechanical devices, digital machines and computational devices which helps to connect everythings with the internet and helps to transfer the data over network without the interaction of human-to-human or human-to-computer. <br><br>
		</p>
	</div>
	<div class="description-2">
		<p><strong>iot in agriculture:</strong></p>
	</div>
	<div class="image-2"><img src = "iot-1.jpg">
	<figcaption class="img-credit-2">Image credit: iotdesignpro</figcaption><br>
	</div>
	<div class="paragraph-2">
		<p>Agriculture is a science and art of cultivating crops and livestocks. Agriculture is the only key to rise the human civilization.so,agriculture become the important sector to develop.As the demand of  food production has been increasing day by day.So, to feed the global population,we are applying the new technology(IOT) and methodology to increase the production of food crops. Mainly, farmers of india uses traditional method of farming which is very less to feed the whole global population.Sothat, we are using IOT in agriculture to meet the needs of global population.Different IOT devices are used like <strong>Sensor,GPS,Drones,</strong>etc.are used in the field sothat we can improve tha quality and quantity of food crops.IOT also helps to reduce the labor efforts and saving the time of hardworking farmer. <br><br>
		</p>
	</div><br><br>
	<div class="heading-1">List of IOT devices</div>
	<div class="heading-para-1">Here are the list of IOT devices which are used in smart farming:</div>
	<div class="device-1">
	<div class="point-2">1. pH sensor:</div>
		<div class="image-3"><img src = "ph-sensors.jpg">
		<figcaption class="img-credit-3">Image credit: tinkersphere.com</figcaption>
	</div>
	<div class="paragraph-3">
		<p>This is the most important tool for the measuring of the acidity and basicity of liquid present in the soil.It have the reading from 1 to 14 in which 1 shows the most acidic in nature and 14 shows the most basic in nature.It helps to monitor the quality of water.The operating voltage is 3.3V/5V and the response time is 1minute.The measure temperature is about 0-60'c.
		</p>
	</div>
	</div>
	<div class="device-2">
	<div class="point-2">2. pH meter soil:</div>
	<div class="image-4"><img src = "Kelway-Soil-pH-and-Moisture-Meter.jpg">
		<figcaption class="img-credit-4">Image credit: forgardening.org</figcaption><br>
	</div>
	<div class="paragraph-4">
		<P>
			This meter uses a single, easy to use probe that measures pH levels between 3 and 8.It can tell you the moisture level,too,just press the button on the base for an accurate reading.Because it doesnot require batteries,it's always ready to go when you are.One of the nice things about this meter is it's really lightweight so it's easy to take with you wherever you need it.The probe is really long,too,so you can even get soil readings deep down by the roots. 
		</P>
	</div>
	</div>
	<div class="device-3">
	<div class="point-2">3.Drones:</div>
	<div class="image-5"><img src = "drone.jpg">
		<figcaption class="img-credit-5">Image credit: Ranconteur</figcaption><br>
	</div>
	<div class="paragraph-5">
		<P>
			Drones are equipped with sensors and camera which are used for imaging, mapping and surveying the farms.There are two types of drones i.e. ground based dones and aerial based drones.Drones can remotely controlled or they can fly automatically through software controlled flight plans in their embedded system, working in coordination with the sensors and GPS.
		</P>
	</div>
	</div>
	<div class="device-4">
	<div class="point-2">4.Soil moisture sensor:</div>
	<div class="image-6"><img src = "soil moisture meter.jpg">
		<figcaption class="img-credit-6">Image credit: forgardening.org</figcaption><br>
	</div>
	<div class="paragraph-4">
		<P>
			The soil monitoring system can realize the continous monitoring of soil moisture for a long time. The user can flexibly arrange the soil moisture sensor according to the monitoring needs; The sensor can also be arranged at different depths to measure the soil moisture situation in the profile.The soil moisture monitoring system can comphrensively, scientifically and truthfully reflect the soil changes in the monitored area, and can provide the soil moisture status of each monitoring point in time and accurately, which provides important basic information for disaster reduction and drought resistance,fertilization and irrigation.
		</P>
	</div>	
	</div>
	<div class="device-5">
	<div class="point-2">5.Air flow sensor:</div>
	<div class="image-7"><img src = "airflow sensor1.jpg">
		<figcaption class="img-credit-7">Image credit: epulse.com</figcaption><br>
	</div>
	<div class="paragraph-7">
		<P>
		These sensors are used to measure air permeability. They are used in fixed position or in mobile mode.The range of this air flow sensor is  0 to 2 m/s.
		The working range of humidity, working temperature and storage temperature are 10-95% RH , -20 to 60'C and -22 to 140'F.The power supply of this sensor is around 24vdc.
		</P>
	</div>
	</div>
	<div class="device-6">
	<div class="point-2">6.GPS sensor:</div>
	<div class="image-8"><img src = "gps.png">
		<figcaption class="img-credit-8">Image credit: mysensors.org</figcaption><br>
	</div>
	<div class="paragraph-8">
		<P>The name of the GPS is NEO-6M GPS Chip.
		It comes with an external antenna and does not come with header pins. So you will need to solder it.It comes with an externa antenna and does not come with header pins. So you will need to solder it.The heart of the module is a NEO-6M GPS chip from u-blox. It can track up to 22 satellites on 50 channels and achieves the industry’s highest level of sensitivity i.e. -161 dB tracking, while consuming only 45mA supply current.
		</P>
	</div>	
	</div><br><br><br><br><br><br>
	<hr/>
	<div class="show-data">
	<h2>Data obtained from the field</h2>
	</div>
	<form action = "homepage.php" method = "POST">
  	<div class="container" style="background-color:rgb(0,0,0,0.8)">
	  <div class="data-page-1">
    
	<p>Please Enter The Data.</p>
	</div>
    
	<div class="temperature">
    <label for="temperature" style="color:white"><b>Temperature</b></label>
	<input type="number" placeholder="Enter temperature" name="temperature" step="any" required><br>
	</div>

	<div class="humidity">
    <label for="Humidity" style="color:white"><b>Humidity</b></label>
	<input type="number" placeholder="Enter humidity" name="humidity"  step="any" required><br>
	</div>

	<div class="moisture">
    <label for="moisture" style="color:white"><b>Moisture</b></label>
	<input type="number" placeholder="Enter moisture" name="moisture" step="any" required><br>
	</div>
	<button name = "submit-here" class = "submit">Submit</button>
	<button class = "submit"><a href="table.php">Check data</a></button>
</div>
</form>	
<?php
	if(isset($_POST['submit-here'])){
	
		$temperature = $_POST['temperature'];
		$humidity = $_POST['humidity'];
		$moisture = $_POST['moisture'];
		
			$query = "select * from datatable WHERE temperature = '$temperature' AND humidity = '$humidity' AND moisture = '$moisture'";
			$query_run = mysqli_query($con,$query);
	
			if (mysqli_num_rows($query_run)>0) {
				echo '<script type = "text/javascript"> alert("Same data is already recorded.")</script>';
				
			}
			else{
				$query = "insert into datatable values('','$temperature','$humidity','$moisture',NOW())";
				$query_run = mysqli_query($con,$query);

				if($query_run){
					echo '<script type="text/javascript"> alert("Data is recorded successfully.")</script>';
				}
				else{
					echo '<script type="text/javascript"> alert("Error.")</script>';
				}
			
				
			}
	}
?>

<div class="ground-page">
<h3>This website is developed By:</h3>
<p>Laxman kohar verma<br>Manish kumar<br>Lakhan kumar</p>
<div class="social-link">
	<h3 class="social-heading">Connect with us</h3>
	<a href="https://www.facebook.com/">Facebook</a><br>
	<a href="https://www.instagram.com/">instagram</a><br>
	<a href="https://www.linkedin.com/">linkedin</a><br>
	<a href="https://www.youtube.com/">Youtube </a><br>
</div>
<div class="sharda">
	<img class ="sharda-logo"src="sharda.png">
	<h1>SHARDA UNIVERSITY</h1>

</div>
</div>
    <footer>
	<div class="last-page">
		<a href="#">Home</a>
		<a href="#">About Us</a>
		<a href="#">Terms & conditions</a>
		<a href="#">Privacy & Policy </a>
		
	</div>
	<div class="copyright">
		<p> copyright &copy; 2020 all rights are reserved</p>
	</div>
</footer>
</body>
</html>