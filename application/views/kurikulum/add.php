<?php //validasi jika user belum login
	if($this->session->userdata('masuk') != TRUE){
		$url= 'dashboard/login';
		redirect($url);
	}
?>
<div class="container-fluid">
<?php echo $this->session->flashdata('message'); ?>
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        
        <h4 class="page-title">Tambah Kurikulum</h4>
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
            <h4 class="m-t-0 header-title">Silahkan Isi Semua Field</h4>
            <!-- <p class="text-muted m-b-30 font-14">
                
            </p> -->

            <div class="row">
                <div class="col-12">
                    <div class="p-20">
                        <!-- <form class="form-horizontal" role="form"> -->
                        <?php echo form_open_multipart(); ?>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Kurikulum</label>
                                    <div class="col-6">
                                        <?php echo form_input('id_kurikulum', '','class="form-control" placeholder="Masukkan Kurikulum"'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Is Active</label>
                                    <div class="col-2">
                                        <?php echo form_dropdown('nama_kurikulum', array(
                                            'n' => 'Tidak Aktif',
                                            'y' => 'Aktif'),'', "class='form-control'"); 
                                        ?>
                                    </div>
                                </div>
                                    <center><button type="submit" name="submit" class="btn btn-primary btn-rounded">SIMPAN</button>
                                    &emsp;&emsp;&emsp;<?php echo anchor('kurikulum/list','KEMBALI', array('class'=>'btn btn-success btn-rounded')); ?></center>
                                    
                            <?php echo form_close(); ?>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<!-- end row -->
