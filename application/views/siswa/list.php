
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
                        <h4 class="page-title ">Daftar Siswa</h4>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>FOTO</th>
                                    <th>NIM</th>
                                    <th>NAMA</th>
                                    <th>GENDER</th>
                                    <th>TEMPAT LAHIR</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($siswa as $u){ ?>
                                    <tr>
                                        <td><img class="rounded" width="50px" height="50px" src="<?php echo base_url('uploads/'. $u->foto); ?>"></td>
                                        <td><?php echo $u->nim ?></td>
                                        <td><?php echo $u->nama ?></td>
                                        <td><?php echo $u->gender ?></td>
                                        <td><?php echo $u->tanggal_lahir ?></td>
                                        <td><?php echo $u->tempat_lahir ?></td>
                                        <td><center>
                                            <a style="padding: 5px 5px; border-radius: 5px;" class="btn fa fa-edit btn-danger" href="<?php echo site_url('siswa/edit/' . $u->nim); ?>"></a>
                                             |
                                            <a style="padding: 5px 5px; border-radius: 5px;" class="btn fa fa-trash btn btn-success" id="sa-warning" href="<?= site_url('siswa/delete/' . $u->nim);?>" OnClick="OnClick="confirm('apakah anda yakin ?')""></a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                <th>FOTO</th>
                                    <th>NIM</th>
                                    <th>NAMA</th>
                                    <th>GENDER</th>
                                    <th>TEMPAT LAHIR</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th><center>AKSI</center></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->


            </div> <!-- end container -->
