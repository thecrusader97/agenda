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
                        <h1 class="h3 mb-0 text-gray-800">jadwal kegiatan</h1>
                        <a href="add_kegiatan.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Create</a>
                    </div>
                
                    <div class="card shadow mb-4">
                                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kegiatan</th>
                            <th scope="col">Yang menghadiri</th>
                            <th scope="col">Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'config.php';
                            $no = 1;
                            $get_data = mysqli_query($conn,"SELECT * FROM kegiatan");
                            while ($data = mysqli_fetch_array($get_data)) {
                            ?>
                            <tr>
                            <th><?php echo $no++; ?></th>
                            <td><?php echo $data['tgl']; ?></td>
                            <td><?php echo $data['kegiatan']; ?></td>
                            <td>
                            <?php echo $data['org']; ?>
                            </td>
                           
                            <td>
                            <a href="c_keg.php?id=<?php echo $data['id']  ?>" target="_BLANK" class="btn btn-success text-white">Cetak</a>
                            <a href="edit_kegiatan.php?id=<?php echo $data['id'] ?>" class="btn btn-warning text-white">Edit</a>
			                <a href="delete_kegiatan.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Hapus</a>
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