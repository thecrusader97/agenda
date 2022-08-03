<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

 
?>

<?php include 'components/head.php';?>

<body id="page-top">
   
    <?php
    include 'config.php';
    if (isset($_GET['id'])) {
                if ($_GET['id'] != "") {
                    
                    $id = $_GET['id'];

                    $query = mysqli_query($conn,"SELECT * FROM lapangan WHERE id='$id'");
                    $row = mysqli_fetch_array($query);

                }else{
                    header("location:lapangan.php");
                }
            }else{
                header("location:lapangan.php");
            }

        $options=$row['jenis'];
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
                        <h1 class="h3 mb-0 text-gray-800">Edit</h1>
                      
                    </div>
                
                    <div class="card shadow mb-4">
                                <div class="card-body">

                                <form action="edt_lapangan.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Tanggal Input :</label>
                                    <input class="form-control" type="date" id="tgl" name="tgl" value="<?php echo $row['tgl']; ?>">
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Uraian Kegiatan :</label>
                                    <input class="form-control" type="text" id="kegiatan" name="kegiatan" value="<?php echo $row['kegiatan']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Jenis Dokumen :</label>
                                    <select class="form-control"  id="jenis" name="jenis">
                                        <option>Pilih Jenis Dokumen</option>
                                        <option value="Dokumen" <?php if($options=="Dokumen") echo 'selected="selected"'; ?>>Dokumen</option>
                                        <option value="Foto" <?php if($options=="Foto") echo 'selected="selected"'; ?>>Foto</option>
                                    </select>
                                </div>
                                
                                <div class="form-group" >
                                    <label class="form-label">Dokumen Kegiatan :</label>
                                    <input class="form-control" type="file" id="doc" name="doc">
                                    <br>
                                    <a class="btn btn-warning" href="download.php?filename=<?=$row['doc']?>">Download</a>
                                </div>
                                
                                <div class="form-group">
                                <button class="btn btn-success" type="submit">Submit</button>
				                <a href="lapangan.php" class="btn btn-danger">Kembali</a>
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