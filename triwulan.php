<?php 
 
 session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 

?>

<?php include 'components/head.php';?>

<body id="page-top">

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
                        <h1 class="h3 mb-0 text-gray-800">DATA LAPORAN TRIWULAN</h1>
                        <a href="add_triwulan.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Create</a>
                    </div>
                
                    <div class="card shadow mb-4">
                                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">File</th>
                            <th scope="col">Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'config.php';
                            $no = 1;
                            $get_data = mysqli_query($conn,"SELECT * FROM triwulan");
                            while ($data = mysqli_fetch_array($get_data)) {
                            ?>
                            <tr>
                            <th><?php echo $no++; ?></th>
                            <td><?php echo $data['tgl']; ?></td>
                            <td>
                            <?php 
							if ($data['doc'] == "") { ?>
								<img src="https://via.placeholder.com/500x500.png?text=FOTO+KEGIATAN" style="width:100px;height:100px;">
							<?php }else{ ?>
								<img src="file/<?php echo $data['doc']; ?>" style="width:100px;height:100px;">
							<?php } ?>
                            </td>
                           
                            <td>
                            <a href="download2.php?path=file/<?php echo $data['doc']  ?>" target="_BLANK" class="btn btn-success text-white">Cetak</a>
                            
			                <a href="delete_triwulan.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Hapus</a>
                            </td>
                            
                            </tr>
                            <?php } ?>
                           
                           
                        </tbody>
                        </table>
                        </div>
                        </div>

                </div>
                <!-- /.container-fluid -->



            </div>
            <!-- End of Main Content -->


            

            <?php include 'components/footer.php';?>

</body>

</html>