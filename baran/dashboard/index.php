		<?PHP
	 $dbServername = "localhost";
	$dbUsername = "phpmyadmin";
	$dbPassword = "123";
	$dbName = "baran_energy";

$con    = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql    = "SELECT * FROM dt_power_reading ORDER BY power_reading_id DESC";
$result = mysqli_query($con, $sql);


$dataPoints = array();	
 //exit;
$i = "";
?>
<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.1/examples/dashboard/ -->
<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Baran Energy</title>

    <!-- Bootstrap core CSS -->
    <link href="Bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Bootstrap/dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */

@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
		
		
	</head>
  <body style="">
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../dashboard/">Baran Energy</a> 
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/dashboard/#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="../dashboard/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  PowerWall 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Grid/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Grid<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../solarpanel/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Solar Panel
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../CustomerService/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Customer Service
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../report/Reports/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Integrations/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="../report/SavedReports/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="../report/CurrentDay/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Current Day
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../report/CurrentMonth/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Current Month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../report/CurrentYear/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Current Year
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Total/">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Total
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
			  
          </div>
		  <div> 
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script><div id="chartContainer" style="height: 370px; width: 100%;"></div><script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
				  <script src="https://canvasjs.com/assets/script/canvasjs.min.js">	</script>
	  
          </div>
			
          <h2>Power Wall Status</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                
          <th>ID                    </th>
				  <th>Ampere                </th>
				  <th>Volt                  </th>
				  <th>Average KW/h          </th>
				  <th>Total KW/h            </th>
				  <th>Timestamp             </th>
          <th>Time                  </th>
              </thead>
				
					<?PHP while($sense  = mysqli_fetch_assoc($result)){
					$date = $sense['timestamp'];
							 $time = strtotime($date);
               $jam = gmdate("H",$time);
               $jam += 7 ;
               if($jam > 23 ) $jam -= 24;
               $waktu = gmdate("H:i:s",$time);
					?>

				<tr>
        <td> <?PHP  echo $sense['power_reading_id'];    ?>          </td>
				<td> <?PHP  echo $sense['pw_amp']     ;       ?> A     </td>
				<td> <?PHP  echo $sense['pw_volt']    ; 	    ?> V     </td>
				<td> <?PHP  echo $sense['pw_kwh']     ;       ?> KW/h  </td>
				<td> <?PHP  echo $sense['pw_kwh']     ;       ?> KW/h  </td>
				<td> <?PHP  echo $sense['timestamp'];           ?></td>
				<td> <?PHP echo "$jam:00:00"; ?></td>
        <?PHP 
	       
				array_push($dataPoints, array('x' => $jam,
											  'y' => floatval($sense['pw_kwh'])));
				//$i++;if($i == 24) break;	
				}              
					
				?>
				</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Bootstrap/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="../dashboard/Grid/Bootstrap/popper.min.js.download"></script><script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="../dashboard/Grid/Bootstrap/bootstrap.min.js.download"></script><script src="../dashboard/Grid/Bootstrap/popper.min.js.download"></script>
    <script src="../dashboard/Grid/Bootstrap/bootstrap.min.js.download"></script><script src="../dashboard/Grid/Bootstrap/feather.min.js.download"></script><!-- Icons --><script>
      feather.replace()
    </script><script src="../dashboard/Grid/Bootstrap/feather.min.js.download"></script>
    <script>
      feather.replace()
    </script><script src="../dashboard/Grid/Bootstrap/Chart.min.js.download"></script><!-- Graphs -->
  	<script>
window.onload = function () {
 
 

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Power Wall"
	},
	axisY: {
		title: "Kilo Watt Hour (KWh)",
		suffix: " KWh"
	},
	axisX: {
    title: "Timestamp",
    suffix: ":00",
    interval: 1,
    gridThickness: 1
  },
	data: [
  {
		type: "splineArea",
    xValueFormatString:"Power Wall",
		yValueFormatString: "#,##0.0 KWh",
    fillOpacity: .15, 
		dataPoints: <?php echo json_encode($dataPoints); ?>
	},
  {
    type: "splineArea",
    xValueFormatString:"Gid",
    yValueFormatString: "#,##0.0 KWh",
    fillOpacity: .15,
    color: "#FF0000",
    dataPoints: [
      { x: 0, y: 1.9 },
      { x: 1, y: 1.9 },
      { x: 2, y: 2 },
      { x: 3, y: 3 },
      { x: 4, y: 3 },
      { x: 5, y: 1 },
      { x: 6, y: 4 },
      { x: 7, y: 2 },
      { x: 8, y: 0 },
      { x: 9, y: 0 },
      { x: 10, y: 0 },
      { x: 11, y: 0 },
      { x: 12, y: 0 },
      { x: 13, y: 0 },
      { x: 14, y: 0 },
      { x: 15, y: 0 },
      { x: 16, y: 0 },
      { x: 17, y: 0 },
      { x: 18, y: 0 },
      { x: 19, y: 0 },
      { x: 20, y: 0 },
      { x: 21, y: 0 },
      { x: 22, y: 0 },
      { x: 23, y: 1.7 }
      
    ]

  }

  ]
});
 
chart.render(); 
}
</script>	
<input id="ext-version" type="hidden" value="1.4.1"></body></html>