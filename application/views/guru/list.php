
  <?php //validasi jika user belum login
	if($this->session->userdata('masuk') != TRUE){
		$url= 'guru/login';
		redirect($url);
	}
  ?>          
            <div class="container-fluid m-t-20">

                <!-- Page-Title -->
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-20">
                            <a class="btn btn-custom btn-rounded waves-effect waves-light" href="<?= site_url('guru/add');?>" aria-expanded="false">Tambah Data</a>
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
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width:120px;">NO</th>
                                    <th>NUPTK</th>
                                    <th>NAMA GURU</th>
                                    <th>GENDER</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($guru as $indeks => $u){ ?>
                                    <tr>
                                        <td><?php echo $indeks + 1; ?></td>
                                        <td><?php echo $u->nuptk ?></td>
                                        <td><?php echo $u->nama_guru ?></td>
                                        <td><?php echo $u->gender = 'W'? 'Perempuan' : 'Laki-laki';?></td>
                                        <td><center>
                                            <a style="padding: 5px 5px;" class="fa fa-edit btn btn-danger" href="<?php echo site_url('guru/edit/' . $u->id_guru); ?>"></a>
                                             | 
                                            <a style="padding: 5px 5px;" class="fa fa-trash btn btn-success" href="<?php echo site_url('guru/delete/' . $u->id_guru); ?>" onClick="confirm('apakah anda yakin menghapus user ini?')"></a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>NO</th>
                                    <th>NUPTK</th>
                                    <th>NAMA GURU</th>
                                    <th>GENDER</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->


            </div> <!-- end container -->
