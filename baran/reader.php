<?php
include('login/includes/dbh.inc.php');

$fp = fopen('result.txt', 'a+');

if($_POST){
	
	
	$mcu_id    = ($_POST['mcu_id'] 				    == 'nan') ? null : $_POST['mcu_id']           ; 
	$temp_1    = ($_POST['temp_ambient'] 			== 'nan') ? null : $_POST['temp_ambient']     ;    
	$temp_2    = ($_POST['radiator_temp_in'] 		== 'nan') ? null : $_POST['radiator_temp_in'] ; 
	$temp_3    = ($_POST['radiator_temp_out'] 	    == 'nan') ? null : $_POST['radiator_temp_out']; 
	$hum_1     = ($_POST['humidity_ambient'] 		== 'nan') ? null : $_POST['humidity_ambient'] ; 
	$pw_volt   = ($_POST['pw_volt']                 == 'nan') ? null : $_POST['pw_volt']          ;
	$inv_volt  = ($_POST['inv_volt']                == 'nan') ? null : $_POST['inv_volt']         ;
	$grid_volt = ($_POST['grid_volt']               == 'nan') ? null : $_POST['grid_volt']        ;
	$pw_amp    = ($_POST['pw_amp']                  == 'nan') ? null : $_POST['pw_amp']           ;
	$inv_amp   = ($_POST['inv_amp']                 == 'nan') ? null : $_POST['inv_amp']          ;
	$grid_amp  = ($_POST['grid_amp']                == 'nan') ? null : $_POST['grid_amp']         ;
	
	$sql = "INSERT INTO dt_sensor_result (mcu_id, 
										  ambient_temp, 
										  radiator_temp_in, 
										  radiator_temp_out, 
										  humidity_ambient) 
										  
										 VALUES ('$mcu_id', 
												 '$temp_1', 
											     '$temp_2', 
											     '$temp_3', 
												 '$hum_1') ";
	$result = mysqli_query($con, $sql);

	
}