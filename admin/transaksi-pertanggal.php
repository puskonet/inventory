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
          <h1 class="h3 mb-2 text-gray-800">Laporan Transaksi</h1>
          <p class="mb-4">Inventory<sup>App</sup> PT. PUSKOMEDIA INDONESIA KREATIF</p>
        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Transaksi Keluar/Masuk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="export-transaksi.php" class="btn btn-sm btn-primary" target="_blank">Export Data Transaksi</a> 
                <br/><br/>
              <table id="lookup" class="table table-bordered table-hover">  
	<thead bgcolor="eeeeee" align="center">

    <div class="form-group">
                              <form method="get">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label">Periode</label>
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="dari" required>
                    </div>
                    <div class="col-auto">
                        -
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="ke" required>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
<?php 
     
      ?>

  
      <tr>
	 
       <th>Id Transaksi</th>
	   <th>Tanggal</th>
       <th>Id Produk</th>
       <th>Nama Produk</th>
       <th>Qty</th>
       <th>Satuan</th>
       <th>Status</th>
       <th>Pic</th>
       <th>Note</th>
       <th>Entry</th>
	
	  
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
						url :"ajax-data-transaksi.php", // json datasource
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