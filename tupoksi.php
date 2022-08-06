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
                        <h1 class="h3 mb-0 text-gray-800">HOME</h1>
                        
                    </div>
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

                    <Br>
                    

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="img/t.svg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="img/t1.svg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="img/t2.svg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>

                    <Br>

                   

                    

                    <!-- Content Row -->

                    


                            

                        
                   
                    

                </div>
                <!-- /.container-fluid -->



            </div>
            <!-- End of Main Content -->


             

            <?php include 'components/footer.php';?>

</body>

</html>