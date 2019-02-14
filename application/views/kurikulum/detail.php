
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
                        <h4 class="page-title ">Detail Kurikulum</h4>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <?php 
                echo $this->session->flashdata;
                
                ?>

                <div class="row">
                    <div class="col-5">
                        <div class="card-box table-responsive">
                        <h4>Filter</h4>
                            <table class="table table-bordered">
                            <tr>
                                <td>Jurusan</td>
                                <td><?php echo cmb_dinamis('jurusan', 'tbl_jurusan', 'nama_jurusan', 'kd_jurusan', null, "id='jurusan' onChange='loadData()'")?></td>
                                
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>
                                <select id="kelas" class ="form-control" onchange="loadData()">
                                <?php for($i = 1; $i <= $info['jumlah_kelas']; $i++){
                                    echo "<option value='$i'>Kelas $i </option>";
                                    }?>
                                </select>
                                </td>
                            </tr>
                            </table>
                        </div>
                    </div>
                                    
                    <div class="col-7">
                        <div class="card-box table-responsive">
                        <h4>Daftar Pelajaran</h4>
                            <div id="tabel"></div>
                        </div>
                    </div>
                    </div> <!-- end row -->
                


            </div> <!-- end container -->





            
