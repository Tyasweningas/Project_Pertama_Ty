<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>BELAJAR PHP</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../admin/css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <script src="js/bootstrap.min.js" ></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <div class="container-fluid d-flex align-items-center">
            <div class="animation-zoom d-flex align-items-center">
                <a class="navbar-brand nav-link" style="color: #183153;" href="layout.html">POLITEKNIK NEGERI BATAM</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3"></ul>
                <form class="d-flex ml-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
                <div class="icon ml-4">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> <i class="fas fa-envelope-square mr-3"></i></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> <i class="fas fa-bell-slash mr-3"></i></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> <i class="fas fa-sign-out-alt mr-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</nav>

<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
                <a class="nav-link active text-white" href="index.php">
                <i class="fas fa-tachometer-alt mr- 2"></i> Dashboard</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php"><i class="fas fa-user-graduate mr-2"></i> Daftar Mahasiswa</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i> Daftar Dosen</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="pegawai.php" ><i class="fas fa-users mr-2"></i> Daftar Pegawai</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="jadwal.php" ><i class="far fa-calendar-alt mr-2"></i> Jadwal Kuliah</a>
                <hr class="bg-secondary">
            </li>
        </ul>
    </div>

       
        <div class="col-md-10 p-5 pt-2">
<h3><i class="fas fa-user-graduate mr-2"></i>Jadwal Kuliah</h3><hr>
<a href="tambah_jdwl.php" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambah_jdwl">
<i class="fas fa-plus-circle mr-2"></i>TAMBAH JADWAL KULIAH</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">HARI</th>
                <th scope="col">PENGAJAR</th>
                <th scope="col">MATKUL</th>
                <th scope="col">RUANG</th>
                <th colspan="3" scope="col">AKSI</th>
            </tr>
        </thead>
        <?php
            include 'koneksi.php';

                $query = mysqli_query($koneksi, "SELECT * FROM jadwal");
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
        ?>

            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['hari'];?></td>
                <td><?php echo $data['pengajar'];?></td>
                <td><?php echo $data['matkul'];?></td>
                <td><?php echo $data['ruang'];?></td>
                <td>                 
                    <a href="udah_jdwl.php" data-bs-toggle="modal" data-bs-target="#editjdwl<?php echo $data['hari'];?>" class="bg-warning p-2 text-white rounded"> 
                    <i class="fas fa-edit"></i>Edit</a> 
                    <a href="hapus_jdwl.php?hari=<?php echo $data['hari'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ?')" class=" bg-danger p-2 text-light rounded text-light">
                    <i class="fas fa-trash-alt mr-2"></i>Delete</a>


                </td>
            </tr>

            <!-- Simpan Modal -->
            <div class="example-modal">
            <div id="tambah_jdwl" class="modal fade" role="dialog" style="display:none;">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h3 class="modal-title">Tambah Jadwal Kuliah</h3>
                </div>
                <div class="modal-body">
                <form action="simpan_jdwl.php" method="post" role="form">
                    <div class="form-group">
                    <div class="row">
                    <label class="col-sm3 control-label text-right">HARI</label>
                    <div  class="col-sm-8"><input type="text" class="form-control" name="hari" placeholder="Hari"
                        value="">
                    </div>
                    </div>
                    </div>
                    <div  class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">Pengajar</label>
                    <div  class="col-sm-8"><input type="text" class="form-control" name="pengajar" placeholder="Pengajar"
                    id="pengjar" value="">
                    </div>
                    </div>
                    </div>
                    <div v class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">Matkul</label>
                    <div v class="col-sm-8"><input type="text" class="form-control" name="matkul" placeholder="Matkul"
                    id="matkul" value="">
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">Ruang</label>
                    <div  class="col-sm-8"><input type="text" name="ruang" class="form-control"
                        placeholder="ruang">
                    </input>
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button id="nosave" type="button" class="btn btn-danger pull-left" datadismiss="modal">Batal</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan"> 
                    </div>
                </form>
                </div>
                </div>
            </div>
            </div>
            </div>

            <!-- Update Modal -->
                <div class="example-modal">
                <div class="modal fade" id="editmhs<?php echo $data['hari'];?>" role="dialog">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title">Jadwal Kuliah</h3>
                    </div>
                    <div class="modal-body">
                    <form action="update_jdwl.php" method="post" role="form">
                        <?php
                        $nim = $data['hari'];
                        $query1 = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE hari='$hari'");
                        while ($data1 = mysqli_fetch_assoc($query1)) {
                        ?>
                        <div class="form-group">
                        <div class="row">
                        <label class="col-sm-3 control-label text-right">Hari </label>
                        <div class="col-sm-8"><input type="text" class="form-control" name="hari" value="<?php echo
                        $data1['hari']; ?>"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                        <label class="col-sm-3 control-label text-right">Pengajar</label>
                        <div class="col-sm-8"><input type="text" class="form-control" name="pengajar" value="<?php echo
                        $data1['pengajar']; ?>"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                        <label class="col-sm-3 control-label text-right">Matkul </label>
                        <div class="col-sm-8"><input type="text" class="form-control" name="matkul" value="<?php echo
                        $data1['matkul']; ?>"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                        <label class="col-sm-3 control-label text-right">Ruang </label>
                        <div class="col-sm-8"><input type="text" name="ruang" class="form-control" value="<?php echo
                        $data1['ruang']; ?>">
                        </input>
                </div> 
                    </div> 
                    </div>
                <div class="modal-footer">
                <button id="noedit" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                <input type="submit" name="submit" class="btn btn-primary" value="Update">
                </div>
                <?php
                }
                ?>
                </form> 
                </div> 
            </div> 
        </div> 
    </div>
</div>

            <!-- Modal Delete -->
            <div class="example-modal">
                <div id="deletemhs<?php echo $data['hari']; ?>" class="modal fade" role="dialog" style="display:none;">
                <div class="modal-dialog">
                <div class="modal-content">

                <div class="modal-header">

                <h3 class="modal-title">Konfirmasi Hapus Data</h3>
                </div>
                <div class="modal-body">
                <h5 align="center" >Apakah anda yakin ingin menghapus NIM <?php echo
                $data['hari'];?><strong><span class="grt"></span></strong> ?</h5>
                </div>
                <div class="modal-footer">
                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancle</button>
                <a href="hapus_jdwl.php?nim=<?php echo $data['hari']; ?>" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>


        <?php
            }
        ?>
    </table>

    <?php
    // Check if hari is set in the URL
    if (isset($_GET['hari'])) {
        // Include database connection file
        include 'koneksi.php';

        // Get hari from the URL
        $nim = $_GET['hari'];

        // Execute delete query
        $result = mysqli_query($koneksi, "DELETE FROM jadwal WHERE hari='$hari'");
        
        // Check for success and redirect
        if ($result) {
            header("Location: jadwal.php");
        } else {
            echo "Error deleting record: " . mysqli_error($koneksi);
        }
    }
    ?>

</body>
</html>
