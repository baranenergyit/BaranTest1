<?php
   include ('../connection.php');
   //include ('../download/download.php');
   $id = $_POST['customer']
?>
<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- <link rel="stylesheet" href="../style2.css"> -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <link href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->

 <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<!--         <a class="navbar-brand" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
<!--               <a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/#">Home <span class="sr-only">(current)</span></a> -->
                      <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../se/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../se/pilihcustomer.php">SE<span class="sr-only">(current)</span></a>
            </li>
                        <li class="nav-item active">
              <a class="nav-link" href="../se/pilihcustomer.php">Pilih Customer<span class="sr-only">(current)</span></a>
            </li>
          </ul>
  <ul class=" nav-tabs--vertical nav" role="navigation">
    <li class="nav-item active">
              <!-- <a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/carousel/#">Home <span class="sr-only">(current)</span></a> -->
            </li>
    </ul>
  </li>
</ul>
       <!--    <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </nav>
    </header><br><br><br>
<body>

<div class="container">
<!--   <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>  -->    


        <?php
          $done = "SELECT * FROM customer_list WHERE customerlist_id = '$id'";
          function addition(){
            $GLOBALS['z'] = '$id';
                }
            $result = mysqli_query($con, $done);
            $row1  = mysqli_fetch_array($result);
        ?>

  <table class="table table-bordered">
    <thead>



      <tr>
            <td>Customer ID </td>
            <td><?php echo $row1['customerlist_id'] ?></td>
           </tr>
<tr>
            <td>Name : </td>
            <td><?php echo $row1['nama'] ?></td>
           </tr>
           <tr>
            <td>Address : </td>
            <td><?php echo $row1['alamat'] ?></td>
           </tr>
           <tr>
            <td>Phone : </td>
            <td><?php echo $row1['notelp'] ?></td>
                </tr>
                <tr>
                <td>Email : </td>
                <td><?php echo $row1['alamat'] ?></td>
                </tr>
                <tr>
                <td>Customer Type : </td>
                <td><?php echo $row1['type'] ?></td>
                </tr>
    </tbody>
  </table>
            <button onclick="window.location.href='/file/<?php echo $row1['filenames'];?>'">Download</button>
          <button onclick="window.location.href='/file/<?php echo $row1['filenames'];?>'">Upload</button>
</div>


<!--   <div class="container">
    <div class="row">
      <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div> -->
        <!-- ?php
          $done = "SELECT * FROM customer_list WHERE customerlist_id = '$id'";
          function addition(){
            $GLOBALS['z'] = '$id';
                }
            $result = mysqli_query($con, $done);
            $row1  = mysqli_fetch_array($result);
        ? -->
<!--  -->

        </table>
      </div>
    </div>
  </div>
<!-- <table>
</form>
    <H1>Form History</H1>
  <tr>
    <th>Activity</th>
    <th>Time</th>
    <th>User</th>
  </tr>
  <tr>
    <td>Uploaded</td>
    <td>12:00pm</td>
    <td>Marketing</td>
  </tr>
  <tr>
    <td>Downloaded</td>
    <td>13:00pm</td>
    <td>Sales</td>
  </tr>
  <tr>
    <td>Uploaded</td>
    <td>14:00pm</td>
    <td>Sales</td>
  </tr>
  <tr>
    <td>Downloaded</td>
    <td>15:00pm</td>
    <td>Marketing</td>
  </tr>
  <tr>
    <td>Verified</td>
    <td>16:00pm</td>
    <td>Marketing</td>
  </tr>
</table> -->
</div>
</body>
</html>