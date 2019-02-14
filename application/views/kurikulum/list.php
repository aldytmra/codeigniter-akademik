
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
                        <a class="btn btn-custom btn-rounded waves-effect waves-light" href="<?php echo site_url('kurikulum/add'); ?>"><i class="fa fa-plus-square-o l-r-10"></i> Tambah data</a>
                        
                        </div>
                        <h4 class="page-title ">Daftar Kurikulum</h4>
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
                                    <th>Kurikulum</th>
                                    <th>Is Active</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($kurikulum as $indeks => $u){ ?>
                                    <tr>
                                        <td><?php echo $indeks + 1; ?></td>
                                        <td><?php echo $u->nama_kurikulum?></td>
                                        <td><?php echo $u->is_active=='y'?'Aktif':'Tidak Aktif';?></td>
                                        <td><center>
                                            <a style="padding: 5px 5px; border-radius: 7px;" class="btn fa fa-eye btn-primary" href="<?php echo site_url('kurikulum/detail/' . $u->id_kurikulum); ?>"></a>
                                             |
                                            <a style="padding: 5px 5px; border-radius: 7px;" class="btn fa fa-edit btn-danger" href="<?php echo site_url('kurikulum/edit/' . $u->id_kurikulum); ?>"></a>
                                             |
                                            <a style="padding: 5px 5px; border-radius: 7px;" class="btn fa fa-trash btn btn-success" id="sa-warning" href="<?= site_url('kurikulum/delete/' . $u->id_kurikulum);?>" OnClick="confirm('apakah anda yakin ?')"></a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th style="width:120px;">No</th>
                                    <th>Kurikulum</th>
                                    <th>Is Active</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->


            </div> <!-- end container -->
            
