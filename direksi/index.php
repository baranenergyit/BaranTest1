<?PHP
include ('../connection.php');
$sql    = "SELECT * FROM customer_list   ORDER BY 'customerlist_id' ASC";  //customer
$sql1   = "SELECT * FROM supplier_list   ORDER BY 'inventory_id'    ASC";  //supplier
$sql2   = "SELECT * FROM inventory_list  ORDER BY 'customerlist_id' DESC"; //inventory
  $customer_result  = mysqli_query ($con, $sql);  //customer
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
              <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
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
        <th><center>NO.           </center></th>
        <th><center>Nama          </center></th>
        <th><center>Email         </center></th>
        <th><center>Alamat        </center></th>
        <th><center>Nomor Telphone</center></th>
        <th><center>Type          </center></th>
      </tr>
    </thead>
    <tbody>
      <?PHP while($list1  = mysqli_fetch_array($customer_result)) { // Customer List ?>
        <tr>
        <td><center><?PHP echo $list1['customerlist_id']?></center></td>
        <td><center><?PHP echo $list1['nama']             ?></center></td>
        <td><center><?PHP echo $list1['email']            ?></center></td>
        <td><center><?PHP echo $list1['alamat']           ?></center></td>
        <td><center><?PHP echo $list1['notelp']           ?></center></td>
        <td><center><?PHP echo $list1['type']             ?></center></td>
      </tr>
    </tbody>
     <?PHP } ?>
  </table>
		</div>
		<div class="tab-pane fade" id="ipsum" role="tabpanel">
		<table class="table table-bordered">
    <thead>
      <tr>
        <th><center>NO.           </center></th>
        <th><center>Nama          </center></th>
        <th><center>Alamat        </center></th>
        <th><center>Email         </center></th>
        <th><center>Nomor Telphone</center></th>
        <th><center>Jenis Barang  </center></th>
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
        <th><center>Nama Barang  </center></th>
        <th><center>Size         </center></th>
        <th><center>Berat        </center></th>
        <th><center>warna        </center></th>
        <th><center>Jumlah Barang</center></th>
        <th><center>Satuan       </center></th>
        <th><center>Harga Barang </center></th>
        <th><center>Supplier     </center></th>
        <th><center>Divisi       </center></th>
        <th><center>keterangan   </center></th>
        <th><center>tambah       </center></th>
        <th><center>kurang       </center></th>
      </tr>
    </thead>
    <tbody><br><br>
    <?PHP while($list3  = mysqli_fetch_array($inventory_result)) { //Inventory_list ?>
        <tr>  
        <td><center><?PHP echo $list3['inventory_id']  ?></center></td>
        <td><center><?PHP echo $list3['nama_barang']   ?></center></td>
        <td><center><?PHP echo $list3['size']          ?></center></td>
        <td><center><?PHP echo $list3['berat']         ?></center></td>
        <td><center><?PHP echo $list3['warna']         ?></center></td>
        <td><center><?PHP echo $list3['jumlah_barang'] ?></center></td>
        <td><center><?PHP echo $list3['satuan']        ?></center></td>
        <td><center><?PHP echo $list3['harga_barang']  ?></center></td>
        <td><center><?PHP echo $list3['supplier']      ?></center></td>
        <td><center><?PHP echo $list3['divisi']        ?></center></td>
        <td><center><?PHP echo $list3['keterangan']    ?></center></td>
    </tr><?PHP } ?>
    </tbody>
  </table>
		</div>
  </table>
			</div>
	</div>
    </div>
</div>
