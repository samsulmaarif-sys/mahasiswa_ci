  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Riwayat Mahasiswa
        <small>Tabel Riwyat Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Riwayat</a></li>
        <li class="active">Tabel Riwayat Mahasiswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> <a class="glyphicon glyphicon-list-alt"></a> Data detail mahasiswa</h3>
            </div>
            <div class="col-xs-12" style="margin-bottom: 5px;">
          </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th><a class="glyphicon glyphicon-align-center"></a>No</th>
                  <th><a class="fa fa-id-badge"></a>Nim</th>
                  <th><a class="glyphicon glyphicon-user"></a>Nama Mahasiswa</th>
                  <th><a class="glyphicon glyphicon-phone"></a>No. Hp Sebelumnya</th>
                  <th><a class="glyphicon glyphicon-phone"></a>No. Hp Sekarang</th>
                  <th><a class="glyphicon glyphicon-calendar"></a>Date Input</th>

                </tr>
                </thead>
                
                <tbody>
                  <?php 
          $no = 1;
          foreach($mahasiswa as $mhs){ 
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $mhs->nim ?></td>
            <td><?php echo $mhs->nama_mahasiswa ?></td>
            <td><?php echo $mhs->no_hp_lama ?></td>
            <td><?php echo $mhs->no_hp_baru ?></td>
            <td><?php echo $mhs->tanggal_input ?></td>

<!--             <td><a href="<?php echo site_url('admin/crud_mahasiswa/edit/'.$mhs->id) ?>"
                        class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a></td>

            <td><a href="<?php echo site_url('admin/crud_mahasiswa/hapus/'.$mhs->id) ?>"
                        class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td> -->
          </tr>
          <?php } ?>
                </tbody>              
                <tfoot>
                <tr>
                  <th><a class="glyphicon glyphicon-align-center"></a>No</th>
                  <th><a class="fa fa-id-badge"></a>Nim</th>
                  <th><a class="glyphicon glyphicon-user"></a>Nama Mahasiswa</th>
                  <th><a class="glyphicon glyphicon-phone"></a>No. Hp Sebelumnya</th>
                  <th><a class="glyphicon glyphicon-phone"></a>No. Hp Sekarang</th>
                  <th><a class="glyphicon glyphicon-calendar"></a>Date Input</th>

                </tr>
                </tfoot>
              </table>
            </div>
        </div>
      </div>

   </section>
    <!-- /.content -->
  </div>