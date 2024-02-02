<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">        

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-2">        
                        <a href="index.php?page=nasabah_add.php" type="button" class="btn btn-block btn-primary">+ Tambah Nasabah</a>
                        </br>
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">

                <?php
                    include 'koneksi.php';
                    
                    global $conn;
                    $query = "SELECT * FROM tbl_nasabah";
                    $result = $conn->query($query);
                ?>

                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No. Rekening</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>NO KTP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>                  
                    
                    <?php 
                        $no = 1;
                        while ($row = $result->fetch_assoc()) {

                            echo "<tr>                
                                    <td>{$no}</td>
                                    <td>{$row['no_rekening']}</td>
                                    <td>{$row['nama']}</td>
                                    <td>{$row['alamat']}</td>                            
                                    <td>{$row['no_hp']}</td>
                                    <td>{$row['no_ktp']}</td>
                                    <td>{$row['email']}</td>                            
                                    <td>
                                        <a href='edit_peminjaman.php?no_bukti={$row['id_nasabah']}'>Edit</a> |
                                        <a href='hapus_peminjaman.php?no_bukti={$row['id_nasabah']}'>Hapus</a>
                                    </td>
                                </tr>";                              
                            $no++;
                        }
                    ?>                  
                  </tbody>                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->