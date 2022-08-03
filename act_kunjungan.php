<?php 
// Menghubungkan file ini dengan file database
include 'config.php';

// Mengambil data dari form lalu ditampung didalam variabel
$tgl = $_POST['tgl'];
$kegiatan = $_POST['kegiatan'];

$doc = $_FILES['doc']['name'];
$doc_size = $_FILES['doc']['size'];

// Mengecek apakah file lebih besar 2 MB atau tidak
if ($doc_size > 100097152) {
	// Jika File lebih dari 2 MB maka akan gagal mengupload File
	header("location:add_kunjungan.php?pesan=size");
}else{

	// Mengecek apakah Ada file yang diupload atau tidak
	if ($doc != "") {

		// Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
		$ekstensi_izin = array('png','jpg','jepg','pdf','docx','xlsx');
		// Memisahkan nama file dengan Ekstensinya
		$pisahkan_ekstensi = explode('.', $doc ); 
		$ekstensi = strtolower(end($pisahkan_ekstensi));
		// Nama file yang berada di dalam direktori temporer server
		$file_tmp = $_FILES['doc']['tmp_name'];   
		// Membuat angka/huruf acak berdasarkan waktu diupload
		$tanggal = md5(date('Y-m-d h:i:s'));
		// Menyatukan angka/huruf acak dengan nama file aslinya
		$doc_new = $tanggal.'-'.$doc; 

		// Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
		if(in_array($ekstensi, $ekstensi_izin) === true)  {
			// Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'file/'.$doc_new);

            // Query untuk memasukan data kedalam table SISWA
            $query = mysqli_query($conn, "INSERT INTO kunjungan VALUES ('','$tgl', '$kegiatan',  '$doc_new')");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:add_kunjungan.php?pesan=berhasil");
            } else {
                header("location:add_kunjungan.php?pesan=gagal");
            }

        } else { 
        	// Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
        	header("location:add_kunjungan.php?pesan=ekstensi");        }

    }else{

    	// Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
    	 $query = mysqli_query($conn, "INSERT INTO kunjungan (tgl, kegiatan, jenis) VALUES ('$tgl', '$kegiatan')");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:add_kunjungan.php?pesan=berhasil");
            } else {
                header("location:add_kunjungan.php?pesan=gagal");
            }

    }

}
?>