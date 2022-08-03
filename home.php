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
                        <h1 class="h3 mb-0 text-gray-800">Home</h1>
                        
                    </div>

                   

                    <!-- Content Row -->
                    <div class="row">


                         <div class="col-sm">
                                
                                  
                        </div>

                      

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-sm">
                            
                                    <img src="img/1.jpg"  width="50%" height="100%">
                                    
                            
                        </div>
                        <div class="col-sm">
                                
                                  
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-sm">
                                    <img src="img/2.jpg"  width="50%" height="100%">
                        </div>
                        <div class="col-sm">
                                
                                  
                        </div>
                    </div>
                  
                    <br>

                    <!-- Content Row -->

                    

                        <!-- Area Chart -->
                        
                            <div class="card shadow mb-4">
                                
                             
                                <div class="card-body">
                                <div class="text-center">
                                    <h5 class="m-0 font-weight-bold text-dark ">VISI - MISI</h5>
                                </div>
                                    <h6>VISI<h6>
                                    <p><b>”Garut yang Bertaqwa, Maju dan Sejahtera”</b></p>
                                    <p>-</p>
                                    <h6>MISI<h6>
                                    <p>-</p>

                                  
                                </div>
                            </div>

                            <div class="card shadow mb-4 bg-info">
                                <div class="card-body">
                                <div class="text-center">
                                    <h5 class="m-0 font-weight-bold text-light ">ANGGOTA TEAM PERCEPATAN PEMBANGUNAN KABUPATEN GARUT</h5>
                                </div>
                                </div>
                            </div>
                            
                            <hr class="my-5">

                            

                        
                   
                    

                </div>
                <!-- /.container-fluid -->



            </div>
            <!-- End of Main Content -->


              <!--Carousel Wrapper-->
              <div class="container">
                <div class="row">
                    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                        <div class="MultiCarousel-inner">
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="pad15">
                                    <img src="img/prof.jpg" width="50%" height="50%">
                                    <p class="lead">Nama</p>
                                    <p>Jabatan</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                    </div>
                </div>
            </div>
                                <!--/.Carousel Wrapper-->

            <?php include 'components/footer.php';?>

</body>

</html>