<?php //validasi jika user belum login
	if($this->session->userdata('masuk') != TRUE){
		$url= 'dashboard/login';
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
            <h4 class="page-title">Edit Data Tahun Akademik</h4>
        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Silahkan isi field yang ingin diubah</h4>
                <!-- <p class="text-muted m-b-30 font-14">
                    
                </p> -->
                <?php if (validation_errors()): ?>
                    <div class="alert alert-warning">
                    <?php echo validation_errors(); ?>
                    </div>
                <?php endif ?>
                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <!-- <form class="form-horizontal" role="form"> -->
                            <?php 
                                echo form_open_multipart(); 
                                echo form_hidden('id_tahun_akademik', $user['id_tahun_akademik']);
                            ?>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Tahun Akademik</label>
                                    <div class="col-6">
                                        <?php echo form_input('tahun_akademik', set_value('tahun_akademik', $user['tahun_akademik']), 'class="form-control" placeholder="Masukkan Kode Ruang Lengkap Anda"'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Is Active</label>
                                    <div class="col-2">
                                        <?php echo form_dropdown('is_active', array(
                                            'y' => 'Aktif',
                                            'n' => 'Tidak Aktif'), set_value('is_active', $user['is_active']), "class='form-control'"); 
                                        ?>
                                    </div>
                                </div>
                                    <center><button type="submit" name="submit" class="btn btn-primary btn-rounded">SIMPAN</button>
                                    &emsp;&emsp;&emsp;<?php echo anchor('tahunakademik/list','KEMBALI', array('class'=>'btn btn-success btn-rounded')); ?></center>
                                    
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

