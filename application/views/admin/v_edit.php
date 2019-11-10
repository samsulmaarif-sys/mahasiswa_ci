  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Halaman Edit Data Mahasiswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Halaman Edit Mahasiswa</a></li>
        <li class="active">Form Edit Mahasiswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-8">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <center><h3 class="box-title"><a class="glyphicon glyphicon-list-alt" ></a> Form Edit Mahasiswa</h3></center>
            </div>             
            <div class="box-body">

               <?php foreach($mahasiswa as $mhs){ ?>
            

            		<form action="<?php echo base_url(). 'admin/crud_mahasiswa/update'; ?>" method="post" enctype="multipart/form-data">

            			<input type="hidden" class="form-control" name="id" value="<?php echo $mhs->id ?>" >

							<div class="form-group">
								<label><a class="fa fa-id-badge"></a>Nim Mahasiswa</label>
								<input type="numeric" class="form-control" name="nim" value="<?php echo $mhs->nim ?>"readonly >
							</div>

							<div class="form-group">
								<label><a class="glyphicon glyphicon-user"></a>Nama Mahasiswa</label>
								<input type="text" class="form-control" name="nama" value="<?php echo $mhs->nama_mahasiswa ?>">
							</div>

							<div class="form-group">
			                <label><a class="fa fa-transgender"></a>Jenis kelamin</label>
			                <select class="form-control select2" name="jk" >
			                	<option selected style="background-color: #50504e;"><?php echo $mhs->jenis_kelamin ?></option>

			                	<option>Laki-laki</option>
			                  	<option>Perempuan</option>
			                 </select>
			             	</div>

							<div class="form-group">
								<label><a class="fa fa-address-book"></a>Alamat</label>
								<input type="text" class="form-control" name="alamat" value="<?php echo $mhs->alamat_mahasiswa ?>">
							</div>

							<div class="form-group">
								<label><a class="fa fa-phone"></a>No. Handphone</label>
								<input type="number" class="form-control" name="no" value="<?php echo $mhs->no_hp ?>">
							</div>

							<div class="form-group">
			                <label><a class="fa fa-calendar"></a> Date Input</label>

			                <div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input type="date" class="form-control pull-right" name="tanggal" id="datepicker" required="tanggal"  value="<?php echo $mhs->tanggal_input ?>">
			                </div>
			                <!-- /.input group -->
			              </div>

							
							<div class="box-footer">
							<input class="btn btn-success btn-block" type="submit" name="btn" value="Simpan" />
							</div>
						</form>
						<?php } ?>
					</div>
			</div>
		</div>
	</div>
</section>
</div>