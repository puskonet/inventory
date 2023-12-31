<?php include "session.php"; ?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   <?php include "menu.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include "navbar.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">STOK OPNAME</h1>
          <p class="mb-4">Inventory <sup>App</sup> PT. PUSKOMEDIA INDONESIA KREATIF</p>
          <?php
             if(isset($_GET['aksi']) == 'delete'){
				$id = $_GET['id'];
				$cek = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}
				}
			
			?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="export-produk.php" class="btn btn-sm btn-primary" target="_blank">Export Data Produk</a> 
                <br/><br/>
              <table id="lookup" class="table table-bordered table-hover">  
	<thead bgcolor="eeeeee" align="center">
      <tr>
	 
       <th>Part No</th>
	   <th>Partname</th>
       <th>Description</th>
       <th>Qty</th>
       <th>Satuan</th>
       <th>Remark</th> 

      </tr>
    </thead>
    <tbody>
	 
					 
    </tbody>
  </table>  
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
  <?php include "footer.php"; ?>

  <script>
        $(document).ready(function() {
				var dataTable = $('#lookup').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"ajax-data-master.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".lookup-error").html("");
							$("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#lookup_processing").css("display","none");
							
						}
					}
				} );
			} );
        </script>
</body>

</html>
