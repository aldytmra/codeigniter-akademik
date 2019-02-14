
  <?php //validasi jika user belum login
	if($this->session->userdata('masuk') != TRUE){
		$url= 'dashboard/login';
		redirect($url);
	}
  ?>          
            <div class="container-fluid m-t-20">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-20">
                        <a style="padding: 5px 10px; border-radius: 7px;" class="btn btn-custom waves-effect waves-light" href="<?php echo site_url('tahunakademik/add'); ?>"><i class="fa fa-plus-square-o l-r-10"></i> Tambah data</a>
                        
                        </div>
                        <h4 class="page-title ">Daftar Tahun Akademik</h4>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <?php 
                echo $this->session->flashdata;
                
                ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width:120px;">No</th>
                                    <th>Tahun Akademik</th>
                                    <th>Is Active</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($tahunakademik as $indeks => $u){ ?>
                                    <tr>
                                        <td><?php echo $indeks + 1; ?></td>
                                        <td><?php echo $u->tahun_akademik?></td>
                                        <td><?php echo $u->is_active=='y'?'Aktif':'Tidak Aktif';?></td>
                                        <td><center>
                                            <a style="padding: 5px 5px; border-radius: 7px;" class="btn fa fa-edit btn-danger" href="<?php echo site_url('tahunakademik/edit/' . $u->id_tahun_akademik); ?>"></a>
                                             |
                                            <a style="padding: 5px 5px; border-radius: 7px;" class="btn fa fa-trash btn btn-success" id="sa-warning" href="<?= site_url('tahunakademik/delete/' . $u->id_tahun_akademik);?>" OnClick="confirm('apakah anda yakin ?')"></a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>KODE RUANG</th>
                                    <th>NAMA RUANG</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->


            </div> <!-- end container -->
            
