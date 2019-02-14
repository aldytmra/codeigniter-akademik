<?php //validasi jika user belum login
	if($this->session->userdata('masuk') != TRUE){
		$url= 'mhs/login';
		redirect($url);
	}
?>
<div class="container-fluid">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-20">
                <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>
            <h4 class="page-title">Edit Data Mahasiswa</h4>
        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <?php if (validation_errors()): ?>
		<div class="alert alert-warning">
		<?php echo validation_errors(); ?>
		</div>
	<?php endif ?>
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit Data Diri Mahasiswa</h4>
                <!-- <p class="text-muted m-b-30 font-14">
                    
                </p> -->

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <!-- <form class="form-horizontal" role="form"> -->
                            <?php echo form_open_multipart(); ?>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">NIM</label>
                                    <div class="col-10">
                                        <?php echo form_input('nim', set_value('nim', $user['nim']), 'class="form-control" placeholder="Masukkan NIM Lengkap Anda"'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Nama</label>
                                    <div class="col-10">
                                        <?php echo form_input('nama', set_value('nama', $user['nama']), 'class="form-control" placeholder="Masukkan Nama Lengkap Anda"'); ?>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-10">
                                        <?php echo form_dropdown('gender', array(
                                            'jenis'  => 'Pilih Jenis Kelamin anda',
                                            'P' => 'Laki-laki',
                                            'W' => 'Perempuan'), set_value('gender', $user['gender']), "class='form-control'"); 
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Agama</label>
                                    <div class="col-10">
                                        <?php echo cmb_dinamis('agama','tbl_agama','nama_agama','kd_agama',$user['kd_agama']);
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                
                                    <label class="col-2 col-form-label">Tempat/Tanggal Lahir</label>
                                    <div class="col-5">
                                        <?php echo form_input('tempat_lahir', set_value('tempat_lahir', $user['tempat_lahir']), 'class="form-control" placeholder="Masukkan Nama Lengkap Anda"'); ?>
                                    </div>
                                    <div class="col-5">
                                        <input class="form-control" name="tanggal_lahir" type="date" name="date" value="<?php echo $user['tanggal_lahir'];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Foto</label>
                                    <div class="col-3">
                                    <?php echo form_upload('foto', $user['foto'], 'class="form-control"'); ?>
                                    </div>
                                </div>
                                    <center><button type="submit" name="submit" class="btn btn-primary btn-rounded">SIMPAN</button>
                                    &emsp;&emsp;&emsp;<?php echo anchor('siswa','KEMBALI', array('class'=>'btn btn-success btn-rounded')); ?></center>
                                    
                            <?php echo form_close(); ?>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- end card-box -->
        </div><!-- end col -->
    </div>
    <!-- end row -->
</div>

