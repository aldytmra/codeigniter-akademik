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
            <h4 class="page-title">Edit Data Guru</h4>
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
                <h4 class="m-t-0 header-title">Silahkan Edit Data Guru</h4>
                <!-- <p class="text-muted m-b-30 font-14">
                    
                </p> -->

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <!-- <form class="form-horizontal" role="form"> -->
                            <?php echo form_open_multipart(); ?>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">NUPTK</label>
                                    <div class="col-10">
                                        <?php echo form_input('nuptk', set_value('nuptk', $user['nuptk']), 'class="form-control" placeholder="Masukkan NIM Lengkap Anda"'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">NAMA GURU</label>
                                    <div class="col-10">
                                        <?php echo form_input('nama_guru', set_value('nama_guru', $user['nama_guru']), 'class="form-control" placeholder="Masukkan NIM Lengkap Anda"'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">JENIS KELAMIN</label>
                                    <div class="col-2">
                                        <?php echo form_dropdown('gender', array(
                                            'jenis'  => 'Pilih Jenis Kelamin anda',
                                            'p' => 'Laki-laki',
                                            'w' => 'Perempuan'), set_value('gender', $user['gender']), "class='form-control'"); 
                                        ?>
                                    </div>
                                </div>
                                
                                    <center><button type="submit" name="submit" class="btn btn-primary btn-rounded">SIMPAN</button>
                                    &emsp;&emsp;&emsp;<?php echo anchor('guru','KEMBALI', array('class'=>'btn btn-success btn-rounded')); ?></center>
                                    
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

