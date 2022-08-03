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
                        <h1 class="h3 mb-0 text-gray-800">About Us</h1>
                        
                    </div>

                   

                    <div class="row justify-content-center ">
                    <h1>CREATED BY</h1>
                    </div>
                    <div class="row justify-content-center ">
                    <h3>PROUDLY PRESENT</h3>
                    </div>
                    <br>
                    <div class="row justify-content-center ">
                    <table>
                    <tr>
                       
                    </tr>
                    <tr>
                        <td> <img src="img/prof.jpg" width="10%" height="10%"></td>
                        <td>Nadia Eka Ayuningtyas</td>
                        
                        
                    </tr>
                    <tr>
                        <td> <img src="img/wa.png" width="10%" height="10%"></td>
                        <td>...................</td>
                        
                        
                    </tr>
                    <tr>
                        <td> <img src="img/mail.png" width="10%" height="10%"></td>
                        <td>...................</td>
                        
                        
                    </tr>
                    </table>
                    </div>

                    <!-- Content Row -->

                    


                            

                        
                   
                    

                </div>
                <!-- /.container-fluid -->



            </div>
            <!-- End of Main Content -->


             

            <?php include 'components/footer.php';?>

</body>

</html>