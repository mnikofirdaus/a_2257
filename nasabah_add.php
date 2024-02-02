<?php
ob_start();

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $no_rekening = $_POST['no_rekening'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $no_ktp = $_POST['no_ktp'];
    $email = $_POST['email'];

    $query = "INSERT INTO tbl_nasabah (no_rekening, nama, alamat, no_hp, no_ktp, email) VALUES ('$no_rekening', '$nama', '$alamat', '$no_hp', '$no_ktp', '$email')";

    if ($conn->query($query) === TRUE) {
        echo '<script>window.location.href = "index.php?page=nasabah.php";</script>';
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

ob_end_flush();
?>


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12"> 

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Horizontal Form</h3>
                    </div>


                    <form class="form-horizontal" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nama" maxlength="25" name="nama">
                                </div>

                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No Rekening</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="No Rekening" maxlength="25" name="no_rekening">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Alamat" maxlength="25" name="alamat">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No KTP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="No KTP" maxlength="16" name="no_ktp">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No HP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="No HP" maxlength="16" name="no_hp">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" placeholder="Email" maxlength="50" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                <div class="form-check">
                                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck2"> -->
                                <!-- <label class="form-check-label" for="exampleCheck2">Remember me</label> -->
                                </div>
                                </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Tambahkan</button>
                                <button type="submit" class="btn btn-default float-right">Cancel</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        <!-- /.col -->
        </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->