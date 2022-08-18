<!DOCTYPE html>
<html>
<head>
	<title>WEB AGENDA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        .footer {
        position: fixed;
        left: 0;
        bottom: -10;
        width: 100%;
        background-color: red;
        color: white;
        text-align: right;
        }
        </style>
</head>
<body>
 
	<center>
		<h2>TIM PERCEPATAN PEMBANGUNAN DAERAH KABUPATEN GARUT</h2>
		<h4>LAPORAN KEGIATAN</h4>
	</center>
 
	<br/>
    <?php
    include 'config.php';
    if (isset($_GET['id'])) {
                if ($_GET['id'] != "") {
                    
                    $id = $_GET['id'];

                    $query = mysqli_query($conn,"SELECT * FROM kegiatan WHERE id='$id'");
                    $row = mysqli_fetch_array($query);

                }else{
                    header("location:kunjungan.php");
                }
            }else{
                header("location:kunjungan.php");
            }

       
        ?>
        <table>
        <tbody>
            <td>Tanggal<td>
            <td>:<td>
            <td><?php echo $row['tgl']; ?><td>
        </tbody>
        </table>

            <h4>
                KEGIATAN
            <h4>
                            
            <p>
                <?php echo $row['kegiatan']; ?>
            </p>

            <h4>
                Daftar Hadir
            <h4>
            <?php echo $row['org']; ?>

 
	
 
	<script>
		window.print();
	</script>
	
</body>
</html>