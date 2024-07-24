<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sql PHP 2 </title>
</head>
<body>
    <h2> Data Siswa </h2>
    <br/>
    <!-- <a href="tambah.php"> 
        + TAMBAH KELAS<a/> <br/><br/> -->
    <table border="1">
        <tr>
            <th>Id Kelas</th>
            <th>Nama </th>
            <th>Kelas</th>
            <th>Siswa Aktif</th>
            <th>Tahun Masuk</th>
            <th>Keterangan</th>
          
        </tr>
        <?php
        include 'koneksi.php' ;
        $data = mysqli_query ($koneksi,"select * from siswa");
        while ($d = mysqli_fetch_array($data) ) {
            ?>
            <tr>
                <td><?php echo $d['id_siswa']; ?></td>
                <td><?php echo $d['nama_siswa']; ?></td>
                <td><?php echo $d['kelas_siswa']; ?></td>
                <td><?php if ($d['siswa_aktif'] == 1){
                    echo "<button> Non Aktif</button>";
                }else if($d['siswa_aktif'] == 0){
                    echo "<button> Aktifkan</button>";
                }
                ?></td>
                <td><?php echo $d['tahun_masuk']; ?></td>
                <td><?php if ($d['tahun_masuk'] <= 2021){
                    echo "Angkatan lama"; 
                    
                }else{
                    echo "Angkatan Baru";
                }
                 ?></td>      
               
              
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>