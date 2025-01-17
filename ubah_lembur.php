<?php 
    include 'koneksi.php';
    include 'cek_status_login.php';
    include 'kepalaUnitFilter.php';

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM form_lembur join user on form_lembur.username = user.username WHERE id='$id'");
while($user_data = mysqli_fetch_array($result)) {
    
    $nama = $user_data['nama'];
    $tanggal = $user_data['tanggal'];
    $jam_mulai = $user_data['jam_mulai'];
    $jam_selesai = $user_data['jam_selesai'];
    $keterangan = $user_data['keterangan'];}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lembur.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>Ubah Lembur</title>
</head>

<body>
    
    <?php include 'template/sidebar.php'; ?>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-users mr-2"></i> Ubah Data Lembur</h3>
            <hr>
            <form action="edit_lembur.php" method="post">
                
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <input type="text" name="idlembur" class="form-control" id="idlembur" style="display:none" value="<?php echo $id;?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Nama</label>
                        <input type="" name="nama" class="form-control" id="nama" value="<?php echo $nama;?>" disabled>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal"value="<?php echo $tanggal;?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Jam Mulai</label>
                        <input type="time" name="jam_mulai" class="form-control" id="jam_mulai" value="<?php echo $jam_mulai;?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Jam Selesai</label>
                        <input type="time" name="jam_selesai" class="form-control" id="jam_selesai" value="<?php echo $jam_selesai;?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Kegiatan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $keterangan;?>">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>
</body>
      <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>