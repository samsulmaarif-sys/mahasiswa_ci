  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mahasiswa
        <small>Tabel Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data mahasiswa</a></li>
        <li class="active">Detail mahasiswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> <a class="glyphicon glyphicon-list-alt"></a> Data detail mahasiswa</h3>
            </div>
            <div class="col-xs-12" style="margin-bottom: 5px;">
             <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-default">
                Tambah
              </button>
              </div>
              <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><a class="fa fa-plus"></a> Tambah Mahasiswa</h4>
              </div>
              <div class="modal-body">
                 
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?php echo base_url(). 'admin/crud_mahasiswa/tambah_aksi'; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="unit"><a class="fa fa-id-badge"></a>Nim Mahasiswa</label>
                  <input type="number" class="form-control" name="nim" id="unit" placeholder="16124xxx" required="Nim">
                </div>
                <div class="form-group">
                  <label for="unit"><a class="fa fa-id-card"></a>Nama Mahasiswa</label>
                  <input type="text" class="form-control" name="nama" id="unit" placeholder="Nama Mahasiswa" required="jml">
                </div>
                <div class="form-group">
                  <label for="unit"><a class="fa fa-address-book"></a>Alamat Mahasiswa</label>
                  <input type="text" class="form-control" name="alamat" id="unit" placeholder="Alamat" required="jml">
                </div>
                
                <div class="form-group">
                <label for="unit"><a class="fa fa-transgender"></a>Jenis kelamin</label>
                <select class="form-control select2" name="jk" required="jenis kelamin"style="width: 100%;">
                	<option>Laki-laki</option>
                  	<option>Perempuan</option>
                 </select>
             	</div>

                <div class="form-group">
                  <label for="unit"><a class="fa fa-phone"></a>No. Handphone</label>
                  <input type="number" class="form-control" name="no" id="unit" placeholder="08xxx" required="no">
                </div>

              <div class="form-group">
                <label><a class="fa fa-calendar"></a> Tanggal Input</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="tanggal" id="datepicker" required="tanggal">
                </div>
                <!-- /.input group -->
              </div>
                <!-- Date -->

              <!-- /.form group -->
              </div>
              <!-- /.box-body -->

              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-success btn-block" name="tambah">Submit</button>
              </div>
            </form>
          </div>
        </div>
              </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        <!-- /.modal -->
            <!-- /.box-header -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th><a class="glyphicon glyphicon-align-center"></a>No</th>
                  <th><a class="fa fa-id-badge"></a>Nim</th>
                  <th><a class="glyphicon glyphicon-user"></a>Nama Mahasiswa</th>
                  <th><a class="fa fa-transgender"></a>Jenis Kelamin</th>
                  <th><a class="fa fa-address-book"></a>Alamat</th>
                  <th><a class="glyphicon glyphicon-phone"></a>No. Hp</th>
                  <th><a class="glyphicon glyphicon-calendar"></a>Date Input</th>
                  <th><a class="fa fa-edit"></a>Ubah</th>
                  <th><a class="glyphicon glyphicon-trash"></a>Hapus</th>
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
						<td><?php echo $mhs->jenis_kelamin ?></td>
						<td><?php echo $mhs->alamat_mahasiswa ?></td>
						<td><?php echo $mhs->no_hp ?></td>
            <td><?php echo $mhs->tanggal_input ?></td>
						<td><a href="<?php echo site_url('admin/crud_mahasiswa/edit/'.$mhs->id) ?>"
                      	class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a></td>

                      	<td><a href="<?php echo site_url('admin/crud_mahasiswa/hapus/'.$mhs->id) ?>"
                      	class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
					</tr>
					<?php } ?>
                </tbody>              
                <tfoot>
                <tr>
                  <th><a class="glyphicon glyphicon-align-center"></a>No</th>
                  <th><a class="fa fa-id-badge"></a>Nim</th>
                  <th><a class="glyphicon glyphicon-user"></a>Nama Mahasiswa</th>
                  <th><a class="fa fa-transgender"></a>Jenis Kelamin</th>
                  <th><a class="fa fa-address-book"></a>Alamat</th>
                  <th><a class="glyphicon glyphicon-phone"></a>No. Hp</th>
                  <th><a class="glyphicon glyphicon-calendar"></a>Date Input</th>
                  <th><a class="fa fa-edit"></a>Ubah</th>
                  <th><a class="glyphicon glyphicon-trash"></a>Hapus</th>
                </tr>
                </tfoot>
              </table>

            </div>
            <!-- /.box-body -->
            <!-- left column -->
        
          <!-- /.box -->

        </div>
        <!-- /.col -->

      </div>

   </section>
    <!-- /.content -->
  </div>