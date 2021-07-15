<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<title>รายงานสถานการณ์ โควิด-19, devbanban.com</title>
	</head>
	<body>
		<?php
		//ถ้าใช้งานบน ssl หรือ HTTPS แล้วให้เอา @ ออกได้เลยจ้า เพราะตัว API Request SSL 
		    @$get_data=file_get_contents('https://covid19.th-stat.com/json/covid19v2/getTodayCases.json');
			//เปลี่ยนลิงค์ api 15072021 https://covid19.th-stat.com/json/covid19v2/getTodayCases.json
			$covid19_th=json_decode($get_data);

			//print_r ออกมาดูซะหน่อย มีอะไรบ้าง
			echo '<pre>';
			print_r($covid19_th);
			echo '</pre>';

			echo '<center><b> <a href="https://covid19.th-stat.com/api/open/today" target="_blank"> หน้าตา API Click... </a></b></center>';


			//อย่าลืมปิด print_r นะครับ จะได้แสดงออกมาสวยๆ 


			//ประกาศตัวแปรแยกเป็นแต่ละคอลัมภ์ เพื่อเอาไปใช้งาน/ตกแต่งให้สวยงามตามใจคุณ ^^
			$Confirmed=$covid19_th->Confirmed;
			$Recovered=$covid19_th->Recovered;
			$Hospitalized=$covid19_th->Hospitalized;
			$NewConfirmed=$covid19_th->NewConfirmed;
			$NewRecovered =$covid19_th->NewRecovered;
			$NewHospitalized =$covid19_th->NewHospitalized;
			$NewDeaths =$covid19_th->NewDeaths;
			$UpdateDate=$covid19_th->UpdateDate;
			$Deaths=$covid19_th->Deaths; 
		
		//ที่มาของ API ข้อมูล 
		// https://covid19.th-stat.com/api/open/today ****เอาลิงค์นี้ไป run ครับ จะเห็นหน้าตาของข้อมูล

		//data from https://covid19.th-stat.com/

		/*  ศึกษาเรื่อง JSON PHP เพิ่มเติมได้ที่ https://www.w3schools.com/js/js_json_php.asp  */


		?>

		<!-- ส่วนนี้ก็ตกแต่งง่ายๆด้วย Bootstrap4 -->
		<div class="container">
			<div class="row">
				<div class="col col-sm-12">
					<h3 style="margin-top: 30px;"> รายงานสถานการณ์ โควิด-19 </h3>
					<h5>อัพเดทข้อมูลล่าสุด :  
						<?php echo  $UpdateDate;?> </h5>
				</div>

				<div class="col-12 col-sm-12">
					 <div class="alert alert-danger" role="alert">
						<b>ติดเชื้อรายใหม่ <?php echo  $NewConfirmed;?>  </b>
					</div>
				</div>

				<div class="col-6 col-sm-3">
					<div class="alert alert-info" role="alert">
						<b>ติดเชื้อสะสม  <br> <?php echo  $Confirmed;?>  </b>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="alert alert-success" role="alert">
						<b>หายแล้ว <br> <?php echo  $Recovered;?> </b>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="alert alert-warning" role="alert">
						<b>รักษาอยู่ใน รพ.  <br> <?php echo  $Hospitalized;?> </b>
					</div>
				</div>
				<div class="col-6 col-sm-3">
					<div class="alert alert-dark" role="alert">
						<b>เสียชีวิต <br> <?php echo  $Deaths;?> </b>
					</div>
				</div>

			</div>
		</div>
		<center>API ::  https://covid19.th-stat.com <br> devbanban.com </center>
		<br>
		<center> <a href="https://devbanban.com/?cat=250"> คอร์สออนไลน์ ราคาถูก คลิก </a></center>
	</body>
</html>
