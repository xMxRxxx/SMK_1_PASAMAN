 

<?php 
	//memasukan modul koneksi
include "db/koneksi.php";

if (isset($_GET['tipe'])) {
		// code...
	if($_GET['tipe']=="login"){
		if ($_POST['jenis_login'] == "guru") {
				// code...
			$queryLoginUser = mysqli_query($konek,"SELECT * FROM biodata_guru WHERE username='$_POST[username]' AND password='$_POST[password]';");
			if(mysqli_num_rows($queryLoginUser) == 1){
				while ($user = mysqli_fetch_array($queryLoginUser)) {
					// this code bro...
					$_SESSION['id_user']  = $user['id_guru'];
					$_SESSION['username'] = $user['username'];
					$_SESSION['password'] = $user['password'];
					$_SESSION['akses']	  =	$user['jabatan_guru'];
					$_SESSION['fotoProfil']	 =	$user['foto_guru'];
					if($_SESSION['akses'] == "guru"){
						Header("Location:guru");
					}else if($_SESSION['akses'] == "wali kelas"){
						Header("Location:wali_kelas");
					}else if($_SESSION['akses'] == 'operator' || $_SESSION['akses'] == 'admin'){
						Header("Location:operator");
					}

				}
			} 
			
		}else if ($_POST['jenis_login'] == "siswa") {
				// code...
			$queryLoginUser = mysqli_query($konek,"SELECT * FROM biodata_siswa WHERE username='$_POST[username]' AND password='$_POST[password]';");
			if(mysqli_num_rows($queryLoginUser) == 1){
				while ($user = mysqli_fetch_array($queryLoginUser)) {
					// this code bro...
					$_SESSION['id_user']  = $user['id_siswa'];
					$_SESSION['username'] = $user['username'];
					$_SESSION['password'] = $user['password'];
					$_SESSION['kelas']    = $user['kelas_siswa'];
					$_SESSION['ruangan']  = $user['lokal_siswa'];
					$_SESSION['jurusan']  = $user['jurusan_siswa'];
					$_SESSION['akses'] = "siswa";
					Header("Location:siswa");

				}
			} 
			
		}else{
			Header("Location:404.php");
		}

	}
}

?>