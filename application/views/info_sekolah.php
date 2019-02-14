<?php //validasi jika user belum login
	if($this->session->userdata('masuk') != TRUE){
		$url= 'mhs/login';
		redirect($url);
	}
?>
<div class="container-fluid">
<?php echo $this->session->flashdata('message'); ?>
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
        <h4 class="page-title">Edit Data Sekolah</h4>
        <?php if (validation_errors()): ?>
		<div class="alert alert-warning">
		<?php echo validation_errors(); ?>
		</div>
	<?php endif ?>
    </div>
</div>
<!-- end page title end breadcrumb -->


<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Masukan Data Sekolah</h4>
            <!-- <p class="text-muted m-b-30 font-14">
                
            </p> -->

            <div class="row">
                <div class="col-12">
                    <div class="p-20">
                        <!-- <form class="form-horizontal" role="form"> -->
                        <?php echo form_open_multipart(); ?>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Nama Sekolah</label>
                                <div class="col-10">
                                    <?php echo form_input('nama_sekolah', set_value('nama_sekolah', $info['nama_sekolah']), 'class="form-control" placeholder="Masukkan Nama Sekolah"'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Alamat Sekolah</label>
                                <div class="col-10">
                                    <?php echo form_input('alamat_sekolah', set_value('alamat_sekolah', $info['alamat_sekolah']), 'class="form-control" placeholder="Masukkan Alamat Sekolah"'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Email / Telepon</label>
                                <div class="col-5">
                                    <?php echo form_input('email', set_value('email', $info['email']), 'class="form-control" placeholder="Masukkan Email Sekolah"'); ?>
                                </div>
                                <div class="col-5">
                                    <?php echo form_input('telepon', set_value('telepon', $info['telepon']), 'class="form-control" placeholder="Masukkan Nomor"'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Jenjang Sekolah</label>
                                <div class="col-2">
                                    <?php echo form_dropdown('id_jenjang_sekolah', array(
                                        '1' => 'SD / MI',
                                        '2' => 'SMP / MTS',
                                        '3' => 'SMA / SMK'), set_value('id_jenjang_sekolah', $info['id_jenjang_sekolah']), "class='form-control'"); 
                                    ?>
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
