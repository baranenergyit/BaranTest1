<?php
  session_start();
  if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
      header("location: ../login/index.php");
    }
    // var_dump($_SESSION);
    if($_SESSION['divisi'] =='SE'){
   include ('../connection.php');
   $id = $_POST['customer']
?>
<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->
 <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                      <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../se/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <!--<a class="nav-link" href="../se/pilihcustomer.php">SE<span class="sr-only">(current)</span></a>
            -->
            </li>
                        <li class="nav-item active">
              <a class="nav-link" href="../se/pilihcustomer.php">Pilih Customer<span class="sr-only">(current)</span></a>
            </li>
                       <li class="nav-item text-nowrap">
          <a class="nav-link" href="../login/logout.php">Sign out</a>
        </li>
          </ul>
  <ul class=" nav-tabs--vertical nav" role="navigation">
    <li class="nav-item active">
              
            </li>
    </ul>
  </li>
</ul>
        </div>
      </nav>
    </header><br><br><br><br><br><br><br><br><br>
<body>
<div class="container">
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
            <td bgcolor="#44AAFF";><b>Customer ID </b></td>
            <td bgcolor="#AAAAAA";><b><?php echo $row1['customerlist_id'] ?></b></td>
           </tr>
            <tr>
            <td bgcolor="#44AAFF";><b>Name         </b></td>
            <td bgcolor="#AAAAAA";><b><?php echo $row1['nama'] ?></b></td>
           </tr>
            <tr>
            <td bgcolor="#44AAFF";><b>Address      </b></td>
            <td bgcolor="#AAAAAA";><b><?php echo $row1['alamat'] ?></ ></td>
           </tr>
           <tr>
            <td bgcolor="#44AAFF";><b>Phone        </b></td>
            <td bgcolor="#AAAAAA";><b><?php echo $row1['notelp'] ?></b></td>
                </tr>
                <tr>
                <td bgcolor="#44AAFF";><b>Email             </b></td>
                <td bgcolor="#AAAAAA";><b><?php echo $row1['alamat'] ?></b></td>
                </tr>
                <tr>
                <td bgcolor="#44AAFF";><b>Customer Type     </b></td>
                <td bgcolor="#AAAAAA";><b><?php echo $row1['type'] ?></b></td>
                </tr>
    </tbody>
  </table>
  <form action="download.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row1['customerlist_id']?>"> <!-- download -->
    <button type="submit" value="Submit">Download</button>
      </form>
<br>
<form action="uploadpage.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row1['customerlist_id']?>">  <!-- upload -->
         <input type="file" name="fileToUpload" />
         <input type="submit" name="submit" />
      </form>
</div>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>
              <?php } ?>