
  <?php //validasi jika user belum login
	if($this->session->userdata('masuk') != TRUE){
		$url= 'mapel/login';
		redirect($url);
	}
  ?>          
            <div class="container-fluid m-t-20">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-20">
                        <a class="btn btn-custom btn-rounded waves-effect waves-light" href="<?= site_url('mapel/add');?>" aria-expanded="false">Tambah Data</a>
                        </div>
                        <h4 class="page-title ">Daftar Mata Pelajaran</h4>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width:120px;">KODE MAPEL</th>
                                    <th>NAMA MATA PELAJARAN</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($mapel as $u){ ?>
                                    <tr>
                                        <td><?php echo $u->kd_mapel ?></td>
                                        <td><?php echo $u->nama_mapel ?></td>
                                        <td><center>
                                            <a style="padding: 5px 5px;" class="fa fa-edit btn btn-danger" href="<?php echo site_url('mapel/edit/' . $u->kd_mapel); ?>"></a>
                                             | 
                                            <a style="padding: 5px 5px;" class="fa fa-trash btn btn-success" href="<?php echo site_url('mapel/delete/' . $u->kd_mapel); ?>" onClick="confirm('apakah anda yakin menghapus user ini?')"></a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>KODE MAPEL</th>
                                    <th>NAMA MATA PELAJARAN</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->


            </div> <!-- end container -->
