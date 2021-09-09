<?php
    $serverName = "localhost";
    $database = "db_mahasiswa";
    $username ="root";
    $password = "";

    // untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$connect = mysqli_connect($serverName, $username, $password, $database);

    $id=$_POST['id'];
    $nama = $_POST ['nama'];
    $alamat =$_POST['alamat'];
    $jalan = $_POST['jalan'];
    $nomor = $_POST['hp'];
    $Hobby = $_POST['Hobi'];
    
    $query = mysqli_query ($connect, "INSERT INTO tb_identitas(id,nama,alamat,nama_jalan) values('$id','$nama','$alamat','$jalan')");
    $sql = 'select * from tb_identitas';

   // $tampil=mysqli_query($query,$sql);

    echo $query;
    
        echo 'id :'.$_POST["id"].'<br>';
        echo 'Nama Anda :'.$_POST["nama"].'<br>';
        echo 'Alamat :'.$_POST["alamat"].'<br>';
        echo 'Nama Jalan : '.$_POST["jalan"].'<br>';
        echo 'Nomor HP :'.$_POST["hp"].'<br>';
        echo 'Hobi Pelanggan : '.$_POST["Hobi"].'<br>';
        echo '<pre>'; print_r($_POST);// untuk menampilkan array yang di tampung
   
// mengecek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
    
}else{
    echo "Koneksi berhasil";
}

mysqli_close($connect);
?>
