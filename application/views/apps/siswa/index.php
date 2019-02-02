<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>SELAMAT DATANG "<?php echo $this->session->userdata('name_session');?>" DI SIAKAD KALIBER</b></h2>
				
				
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
			<div class="row">
   
        <table  class="table table-striped table-bordered dataTable no-footer"  >
                <thead>
                <tr role="row">
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">FOTO
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  style="width: 50px;">NIS
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">NAMA
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px;">Jenis Kelamin
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">KELAS
                    </th>
					
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TEMPAT LAHIR
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TANGGAL LAHIR
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">ALAMAT
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">NAMA ORANG TUA
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">ASAL SEKOLAH
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">NOMOR IJAZAH
                    </th>
					
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        
                        foreach($list as $data){ ?>
                        <td><?php echo $data->siswa_photo?></td>
                        <td><?php echo $data->siswa_nis ?></td>
                        <td><?php echo $data->siswa_nama ?></td>
						 <td><?php echo $data->siswa_jenkel ?></td>
						  <td><?php echo $data->siswa_kelas_id ?></td>
                        <td><?php echo $data->siswa_tempat_lahir ?></td>
						 <td><?php echo $data->siswa_tgl_lahir?></td>
						  <td><?php echo $data->siswa_alamat ?></td>
						   <td><?php echo $data->siswa_ortu ?></td>
						    <td><?php echo $data->siswa_asal_sekolah ?></td>
							 <td><?php echo $data->no_ijasah ?></td>
							  
                    </tr>
                        <?php }?>
            </tbody>
        </table>
    </div>
</div>
</div>
        </div>
    </div>
</div>