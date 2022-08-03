<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

 
?>

<?php include 'components/head.php';?>

<body id="page-top">
   
    <?php if (isset($_GET['pesan'])) { ?>
			<?php if ($_GET['pesan'] == "berhasil") { ?>
				<div class="alert alert-primary" role="alert">
					Berhasil Menambahkan Data 
				</div>
			<?php }elseif ($_GET['pesan'] == "gagal") { ?>
				<div class="alert alert-danger" role="alert">
					Gagal Menambahkan Data 
				</div>
			<?php }elseif ($_GET['pesan'] == "ekstensi") { ?>
				<div class="alert alert-warning" role="alert">
					Ekstensi File Harus PNG , JPG, XLSX, DOCS, PDF
				</div>
			<?php }elseif ($_GET['pesan'] == "size") { ?>
				<div class="alert alert-warning" role="alert">
					Size File Tidak Boleh Lebih Dari 1 GB
				</div>
			<?php } ?>
		<?php } 
        
        ?>
    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'components/sidebar.php';?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'components/Topbar.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Create</h1>
                      
                    </div>
                
                    <div class="card shadow mb-4">
                                <div class="card-body">

                                <form action="act_rapat.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Tanggal Input :</label>
                                    <input class="form-control" type="date" id="tgl" name="tgl">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Uraian rapat :</label>
                                    <input class="form-control" type="text" id="kegiatan" name="kegiatan">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jenis Dokumen :</label>
                                    <select class="form-control"  id="jenis" name="jenis">
                                        <option >Pilih Jenis Dokumen</option>
                                        <option value="Dokumen">Dokumen</option>
                                        <option value="Foto">Foto</option>
                                    </select>
                                </div>
                                
                                <div class="form-group" >
                                    <label class="form-label">Dokumen Kegiatan :</label>
                                    <input class="form-control" type="file" id="doc" name="doc">
                                </div>
                                
                                <div class="form-group">
                                <button class="btn btn-success" type="submit">Submit</button>
				                <a href="rapat.php" class="btn btn-danger">Kembali</a>
                                </div>

                                </form>

                    
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->



            </div>
            <!-- End of Main Content -->


             

            <?php include 'components/footer.php';?>

</body>

</html>