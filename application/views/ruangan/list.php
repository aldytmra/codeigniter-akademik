
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
                        <h4 class="page-title ">Daftar Mata Pelajaran</h4>
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
                                    <th style="width:120px;">KODE RUANG</th>
                                    <th>NAMA RUANG</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($ruangan as $u){ ?>
                                    <tr>
                                        <td><?php echo $u->kd_ruangan ?></td>
                                        <td><?php echo $u->nama_ruangan ?></td>
                                        <td><center>
                                            <a style="padding: 5px 5px;" class="fa fa-edit btn btn-danger" href="<?php echo site_url('ruangan/edit/' . $u->kd_ruangan); ?>"></a>
                                             |
                                            <a style="padding: 5px 5px;" class="btn fa fa-trash btn btn-success" id="sa-warning" href="<?= site_url('ruangan/delete/' . $u->kd_ruangan);?>" OnClick="confirm('apakah anda yakin ?'")></a>
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
            
