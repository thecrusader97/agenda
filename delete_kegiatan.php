<?php 
include 'config.php';
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		// Mengambil ID diURL
		$id = $_GET['id'];

		// Mengambil data siswa_foto didalam table siswa
		$get_doc = "SELECT doc FROM kegiatan WHERE id='$id'";
		$data_doc = mysqli_query($conn, $get_doc); 
        // Mengubah data yang diambil menjadi Array
		$doc_lama = mysqli_fetch_array($data_doc);

        // Menghapus Foto lama didalam folder FOTO
		unlink("file/".$doc_lama['doc']);    

		// Mengapus data siswa berdasarkan ID
		$query = mysqli_query($conn,"DELETE FROM kegiatan WHERE id='$id'");
		if ($query) {
			header("location:kegiatan.php");
		}else{
			header("location:kegiatan.php");
		}
		
	}else{
		// Apabila ID nya kosong maka akan dikembalikan kehalaman index
		header("location:kegiatan.php");
	}
}else{
	// Jika tidak ada Data ID maka akan dikembalikan kehalaman index
	header("location:kegiatan.php");
}

?>