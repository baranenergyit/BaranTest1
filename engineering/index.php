<?PHP
session_start();
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: ../Latihan Session/index.php");
}
include ('../connection.php');
$sql1   = "SELECT * FROM supplier_list   ORDER BY 'inventory_id'    ASC";  //supplier
$sql2   = "SELECT * FROM inventory_list  ORDER BY 'customerlist_id' DESC"; //inventory

  $supplier_result  = mysqli_query ($con, $sql1); //supplier
  $inventory_result = mysqli_query ($con, $sql2); //inventory

?>
<link rel="stylesheet" href="../style2.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->
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
                <a href="#ipsum" class="nav-link" data-toggle="tab" role="tab" aria-controls="ipsum">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../register supplier/">Register Supplier <span class="sr-only"></span></a>
            </li>
                        <li class="nav-item active">
              <a class="nav-link" href="../register inventory/">Add Inventory <span class="sr-only"></span></a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="../login/logout.php">Sign out</a>
            </li>
          </ul>
  <ul class=" nav-tabs--vertical nav" role="navigation">
      <li class="nav-item">
           <a href="#ipsum" class="nav-link" data-toggle="tab" role="tab" aria-controls="ipsum">Supplier List</a>
      </li>
      <li class="nav-item">
           <a href="#dolor" class="nav-link " data-toggle="tab" role="tab" aria-controls="dolor">inventory List</a>
      </li>
    </ul>
  </li>
</ul>
        </div>
      </nav>
    </header>
<br>
<div class="content_box">
	<div class="left_bar">
	    <ul class=" nav-tabs--vertical nav" role="navigation">
		  <li class="nav-item">
			     <a href="#ipsum" class="nav-link" data-toggle="tab" role="tab" aria-controls="ipsum">Supplier List</a>
		  </li>
		  <li class="nav-item">
			     <a href="#dolor" class="nav-link " data-toggle="tab" role="tab" aria-controls="dolor">inventory List</a>
		  </li>
		<li class="nav-item">
			<a href="../engineering/index.php" class="nav-link" data-toggle="tab" role="tab" aria-controls="ipsum">Home</a>
		</li>
	   </ul>
	     </div>
        <div class="right_bar ">
          <div class="tab-content ">
		      <div class="tab-pane fade " id="lorem" role="tabpanel">
            <br>
            <br>
            <table class="table table-bordered">
      <?PHP while($list1  = mysqli_fetch_array($customer_result)) { // Customer List ?>
        <tr>
        <td><center> <?PHP echo $list1['customerlist_id']?></center></td>
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
          ?>

          <td style="background-color: <?php echo $status_color; ?>;"><center><?PHP echo $list1['status']             ?></center></td>
          }

        }
        <td><center><button onclick="window.location.href='/file/raw/<?php echo $list1['filenames'];?>'">Download</button></center> </td>
      </tr>
    </tbody>
     <?PHP } ?>  
  </table>
		</div>
		<div class="tab-pane fade show active" id="ipsum" role="tabpanel">
		<table class="table table-bordered">
    <thead>
      <tr>
        <th><center>NO.           </center></th>
        <th><center>Nama          </center></th>
        <th><center>Alamat        </center></th>
        <th><center>Email         </center></th>
        <th><center>Nomor Telphone</center></th>
        <th><center>Jenis Barang  </center></th>
        <th><center>Update        </center></th>

      </tr>
    </thead>
    <tbody>
            <br>
            <br>
    <?PHP while($list2  = mysqli_fetch_assoc($supplier_result)) { //supplier_result ?>
        <tr>
        <td><center><?PHP echo $list2['supplier_id']  ?></center></td>
        <td><center><?PHP echo $list2['nama']         ?></center></td>
        <td><center><?PHP echo $list2['alamat']       ?></center></td>
        <td><center><?PHP echo $list2['email']        ?></center></td>
        <td><center><?PHP echo $list2['telp']         ?></center></td>
        <td><center><?PHP echo $list2['jenis_barang'] ?></center></td>
        <td><center>
            <form action="edit_supplier.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $list2['supplier_id']?>"> <!-- download -->
            <button type="submit" value="Submit">Edit</button>
            </form>
            <form action="delete_supplier.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $list2['supplier_id']?>"> 
            <button type="submit" value="Submit">Delete</button>
            </form></td>
      </tr>
    <?PHP } ?>
    </tbody>
  </table>
		</div>
		<div class="tab-pane fade" id="dolor" role="tabpanel">
		<table class="table table-bordered">
    <thead>
    <tr>
        <th><center>NO.          </center></th>
        <th><center>Kategori Barang</center></th>
        <th><center>Nama Barang  </center></th>
        <th><center>Size         </center></th>
        <th><center>Berat        </center></th>
        <th><center>Warna        </center></th>
<!--         <th><center>Jumlah Barang</center></th> -->
        <th><center>Satuan       </center></th>
        <th><center>Harga Barang </center></th>
        <th><center>Supplier     </center></th>
        <th><center>Keterangan   </center></th>
        <th><center>Divisi       </center></th>
        <th><center>Jumlah Barang</center></th>
        <th><center>Update       </center></th>
      </tr>
    </thead>
    <tbody> <br> <br>
    <?PHP while($list3  = mysqli_fetch_array($inventory_result)) { //Inventory_list ?>
        <tr>  
        <td><center><?PHP echo $list3['inventory_id']       ?></center></td>
        <td><center><?PHP echo $list3['kategori_barang']    ?></center></td>
        <td><center><?PHP echo $list3['nama_barang']        ?></center></td>
        <td><center><?PHP echo $list3['size']               ?></center></td>
        <td><center><?PHP echo $list3['berat']              ?></center></td>
        <td><center><?PHP echo $list3['warna']              ?></center></td>
<!--<td><center><//?PHP echo $list3['jumlah_barang'] ?></center></td> -->
        <td><center><?PHP echo $list3['satuan']             ?></center></td>
        <td><center>Rp.<?PHP echo $list3['harga_barang']     ?></center></td>
        <td><center><?PHP echo $list3['supplier']            ?></center></td>
        <td><center><?PHP echo $list3['keterangan']          ?></center></td>
        <td><center><?PHP echo $list3['divisi']              ?></center></td>
        <td>
          <center>
          <form action="../function/ubah.php" method="post">
          <input type= "hidden" name="id" value="<?PHP echo $list3['inventory_id']?>">
          <input type="number" name="tmbh" value="<?PHP echo $list3['jumlah_barang']?>">
          <input type="submit" value="Submit"></td>
        </form>
</center>
        <td>
          
<center>
            <form action="edit_inventory.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $list3['inventory_id']?>"> <!-- download -->
            <button type="submit" value="Submit">Edit</button>
            </form>
            <form action="delete_inventory.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $list3['inventory_id']?>"> 
            <button type="submit" value="Submit">Delete</button>
            </form>  
        </td>


      </tr>
    <?PHP } ?>
    </tbody>
  </table>
		</div>
  </table>
			</div>
	</div>
    </div>
</div>
