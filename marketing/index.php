<?PHP
session_start();

if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: ../login/index.php");
}
var_dump($_SESSION);
if($_SESSION['divisi'] =='MKT'){
  
include ('../connection.php');

/*$con    = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
*/
$sql    = "SELECT * FROM customer_list   ORDER BY 'customerlist_id' ASC";  //customer
$sql1   = "SELECT * FROM supplier_list   ORDER BY 'inventory_id'    ASC";  //supplier
$sql2   = "SELECT * FROM inventory_list  ORDER BY 'customerlist_id' DESC"; //inventory

  $customer_result  = mysqli_query ($con, $sql);  //customer
  $supplier_result  = mysqli_query ($con, $sql1); //supplier
  $inventory_result = mysqli_query ($con, $sql2); //inventory

  session_start();

?>

<link rel="stylesheet" href="../style2.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
              <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../register customer/">Register Customer <span class="sr-only"></span></a>
            </li>
<!--              <li class="nav-item active">
              <a class="nav-link" href="../marketing/pilihcustomer.php">Pilih Customer<span class="sr-only">(current)</span></a>
            </li> -->

            <li class="nav-item text-nowrap">
          <a class="nav-link" href="../login/logout.php">Sign out</a>
        </li>
          </ul>
  <ul class=" nav-tabs--vertical nav" role="navigation">
    <li class="nav-item active">

            </li>
        <li class="nav-item">
           <a href="#lorem" class="nav-link active" data-toggle="tab" role="tab" aria-controls="lorem">Customer List</a>
        </li>
    </ul>
  </li>
</ul>
        </div>
      </nav>
    </header>
		<li class="nav-item">
			<a href="../detail.php" class="nav-link" data-toggle="tab" role="tab" aria-controls="sit-amet">Home</a>
		</li>
	   </ul>
	     </div>
        <div class="right_bar ">
          <div class="tab-content ">
		      <div class="tab-pane fade show active" id="lorem" role="tabpanel">
            <br>
            <br>
<table class="table table-bordered">
    <thead>
      <tr>
        <th><center>Customer ID    </center></th>
        <th><center>Nama           </center></th>
        <th><center>Email          </center></th>
        <th><center>Alamat         </center></th>
        <th><center>Nomor Telepon  </center></th>
        <th><center>Type           </center></th>
             
        <th><center>Submitted Time </center></th>
        <th><center>Processed Time </center></th>
        <th><center>Done Time      </center></th>
        <th><center>Status         </center></th> 
        <th><center>Update         </center></th>

      </tr>
    </thead>
    <tbody>

      <?PHP while($list1  = mysqli_fetch_array($customer_result)) { // Customer List ?>
        <tr>
        <td><center><?PHP echo $list1['customerlist_id']  ?></center></td>
        <td><center><?PHP echo $list1['nama']             ?></center></td>
        <td><center><?PHP echo $list1['email']            ?></center></td>
        <td><center><?PHP echo $list1['alamat']           ?></center></td>
        <td><center><?PHP echo $list1['notelp']           ?></center></td>
        <td><center><?PHP echo $list1['type']             ?></center></td>
          <?PHP 
            if($list1['status']=='Pending') //Status BG Color Red
          { 
              $status_color='#FF0000';
          }
            else if($list1['status']=='On Process') //Status BG Color Yellow
          {
              $status_color='#FFFF00';
          }
            else if($list1['status']=='Done') //Status BG Color Green
          {
              $status_color='#00FF00';
          }
            else
          {
              $status_color='#FFFFFF';
          }
          ?>
          
         
      </form>
        <td><center>


          <?PHP echo $list1['timestamp']        ?>
            

            
          </center></td>
        <td><center><?PHP echo $list1['download_ts']      ?></center></td>
        <td><center><?PHP echo $list1['upload_ts']        ?></center></td>
        <td style="background-color: <?php echo $status_color;?>;">
            
              <?PHP echo $list1['status']?></td>
        <td>
          <?php 
        if($list1['status'] == 'Done')
        { ?>
          <center>
            <form action="download.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $list1['customerlist_id']?>"> <!-- download -->
            <button type="submit" value="Submit">Download</button>
            </form>
            
            <center>
            <form action="edit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $list1['customerlist_id']?>"> <!-- download -->
            <button type="submit" value="Submit">Edit</button>
            </form>
            <form action="delete.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $list1['customerlist_id']?>"> 
            <button type="submit" value="Submit">Delete</button>
            </form>
          
          <?php
        }
        else
        { ?>
          <center> File Not Ready 
          <!-- <center> -->
            <form action="edit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $list1['customerlist_id']?>">
            <button type="submit" value="Submit">Edit</button>
           </form>
            <form action="delete.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $list1['customerlist_id']?>"> 
            <button type="submit" value="Submit">Delete</button>
          </td>
          <?php
        }
          ?>    
            
        </td> 
      </tr>
      <?PHP }
} 
      else
      header("location: ../login/index.php");?>
    </tbody>   
  </table>
		</div>
    </tbody>
  </table>
		</div>
  </table>
			</div>
	</div>
    </div>
</div>
