<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Sekolah | Data Jadwal Pelajaran</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php
    $this->load->view('apps/admin/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li class="active">
          <a href="<?php echo base_url().'admin_si_dashboard'?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
       
        
        <li>
          <a href="<?php echo base_url().'admin_si_guru'?>">
            <i class="fa fa-graduation-cap"></i> <span>Data Guru</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
    
    <li>
          <a href="<?php echo base_url().'admin_si_siswa'?>">
            <i class="fa fa-graduation-cap"></i> <span>Data Siswa</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin_si_jurusan'?>">
            <i class="fa fa-graduation-cap"></i> <span>Data Jurusan</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin_si_kelas'?>">
            <i class="fa fa-graduation-cap"></i> <span>Data Kelas</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin_si_jadwal'?>">
            <i class="fa fa-graduation-cap"></i> <span>Data Jadwal</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

 <li>
          <a href="<?php echo base_url().'admin_si_mapel'?>">
            <i class="fa fa-graduation-cap"></i> <span>Data Mata Pelajaran</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

<li>
          <a href="<?php echo base_url().'admin_si_piket'?>">
            <i class="fa fa-graduation-cap"></i> <span>Data Master Piket Guru</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin_si_nilai'?>">
            <i class="fa fa-graduation-cap"></i> <span>Data Master Nilai</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

<li>
          <a href="<?php echo base_url().'admin_si_tempat_prakerin'?>">
            <i class="fa fa-graduation-cap"></i> <span>Data Master Tempat Prakerin</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>


         <li>
          <a href="<?php echo base_url().'login_si/logout'?>">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jadwal Pelajaran
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Jadwal Pelajaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Jadwal Pelajaran</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
          					<th>Kode Kelas</th>
                    <th>Kode Mata Pelajaran</th>
                    <th>Kode Guru</th>
                    <th>Jam</th>
                    <th>Ruang</th>
                    <th>Hari</th>
                  
                  
                  
                  
          					
                  
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;

                      $kode=$i['KODE_JADWAL'];
          					  
          					   $KODE_KELAS=$i['KODE_KELAS'];
                       
                       $KODE_MAPEL=$i['KODE_MAPEL_JADWAL'];

                       $KODE_GURU=$i['KODE_GURU'];

                       $jam=$i['JAM'];

                       $RUANG=$i['RUANG'];

                       $HARI=$i['HARI'];

                      
                    ?>
                <tr>
                 
                  <td><?php echo $KODE_KELAS;?></td>
                  
                  
                  <td><?php echo $KODE_MAPEL;?></td>

                  <td><?php echo $KODE_GURU;?></td>

                  <td><?php echo $jam;?></td>

                  <td><?php echo $RUANG?></td>

                  <td><?php echo $HARI;?></td>


                 
                  
                  
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $kode;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $kode;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">SMKN 5 Jember</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

    <!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Jadwal Pelajaran</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin_si_jadwal/simpan_jadwal'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                             <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kelas</label>
                                        <div class="col-sm-7">
                                          <select name="kodekelas" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($kelas->result_array() as $i) {
                                                  $id_kelas=$i['kelas_id'];
                                                  $nama_kelas=$i['kelas_nama'];

                                            ?>

                                            <option value="<?php echo $id_kelas;?>"><?php echo $nama_kelas;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Mapel</label>
                                        <div class="col-sm-7">
                                          <select name="kodemapel" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($mapel->result_array() as $i) {
                                                  $id_mapel=$i['KODE_MAPEL'];
                                                  $nama_mapel=$i['NAMA_MAPEL'];

                                            ?>

                                    <option value="<?php echo $id_mapel;?>"><?php echo $nama_mapel;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Guru</label>
                                        <div class="col-sm-7">
                                          <select name="kodeguru" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($guru->result_array() as $g) {
                                                  $id_guru=$g['guru_id'];
                                                  $nama_guru=$g['guru_nama'];

                                            ?>

                                              <option value="<?php echo $id_guru;?>"><?php echo $nama_guru;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>



                                     
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">JAM</label>
                                        <div class="col-sm-7">
                                            <input type="time" name="jam" class="form-control" id="inputUserName" placeholder="jam" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Ruangan</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="ruang" class="form-control" id="inputUserName" placeholder="ruang" required>
                                        </div>
                                    </div>
                              <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Hari</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="hari" class="form-control" id="inputUserName" placeholder="hari" required>
                                        </div>
                                    </div>

                              



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

  <!--Modal Edit Album-->
  <?php foreach ($data->result_array() as $i) :
    $kode=$i['KODE_JADWAL'];
             $KODE_KELAS=$i['KODE_KELAS'];
                       
                       $KODE_MAPEL=$i['KODE_MAPEL_JADWAL'];

                       $KODE_GURU=$i['KODE_GURU'];

                       $jam=$i['JAM'];

                       $RUANG=$i['RUANG'];

                       $HARI=$i['HARI'];

                    ?>
             
        <div class="modal fade" id="ModalEdit<?php echo $kode;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Jadwal Pelajaran</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin_si_jadwal/update_jadwal'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $kode;?>"/>
                             
                                   <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">KELAS</label>
                                        <div class="col-sm-7">
                                          <select name="kodekelas" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($kelas->result_array() as $k) {
                                                  $KODE_KELAS=$k['kelas_id'];
                                                  $nama_kelas=$k['kelas_nama'];

                                            ?>

                                            <option value="<?php echo $KODE_KELAS;?>"><?php echo $nama_kelas;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>

 <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Mapel</label>
                                        <div class="col-sm-7">
                                          <select name="kodemapel" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($mapel->result_array() as $m) {
                                                  $id_mapel=$m['KODE_MAPEL'];
                                                  $nama_mapel=$m['NAMA_MAPEL'];

                                            ?>

                                    <option value="<?php echo $id_mapel;?>"><?php echo $nama_mapel;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>
                                   

                                     <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Guru</label>
                                        <div class="col-sm-7">
                                          <select name="kodeguru" class="form-control" required>
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($guru->result_array() as $g) {
                                                  $id_guru=$g['guru_id'];
                                                  $nama_guru=$g['guru_nama'];

                                            ?>

                                            <option value="<?php echo $id_guru;?>"><?php echo $nama_guru;?></option>
                                            <?php } ?>
                                          </select>
                                        </div>
                                    </div>


                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">JAM</label>
                                        <div class="col-sm-7">
                                            <input type="time" name="jam" class="form-control" id="inputUserName" placeholder="Jam" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Ruangan</label>
                                        <div class="col-sm-7">
                                            <input type="time" name="ruang" class="form-control" id="inputUserName" placeholder="ruang" required>
                                        </div>
                                    </div>
                              <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Hari</label>
                                        <div class="col-sm-7">
                                            <input type="time" name="Hari" class="form-control" id="inputUserName" placeholder="Hari" required>
                                        </div>
                                    </div>

                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>
	<!--Modal Edit Album-->

	 <?php foreach ($data->result_array() as $i) :
    $kode=$i['KODE_JADWAL'];
              $KODE_KELAS=$i['KODE_KELAS'];
                       
                       $KODE_MAPEL=$i['KODE_MAPEL_JADWAL'];

                       $KODE_GURU=$i['KODE_GURU'];

                       $jam=$i['JAM'];

                       $RUANG=$i['RUANG'];

                       $HARI=$i['HARI'];

                    ?>
                
            
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $kode;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Mata Pelajaran</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin_si_jadwal/hapus_jadwal'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $kode;?>"/>
                    
                            <p>Apakah Anda yakin mau menghapus jadwal pelajaran <b><?php echo $nama_mapel;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>




<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Jadwal Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Jadwal Pelajaran berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Jadwal Pelajaran Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>
</body>
</html>
