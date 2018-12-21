<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>SELAMAT DATANG "<?php echo $this->session->userdata('name_session');?>" DI SIAKAD KALIBER</b></h2>
				
				
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
			<div class="row">
   
        <table  class="table table-striped table-bordered dataTable no-footer"  >
                <thead>
                <tr role="row">
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  style="width: 50px;">NIS
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">NAMA
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">PRODI
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">KELAS
                    </th>
					
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TEMPAT LAHIR
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TANGGAL LAHIR
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">ALAMAT
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">JENIS KELAMIN
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
                        
                        <td><?php echo $data->NIS ?></td>
                        <td><?php echo $data->NAMA_SISWA ?></td>
						 <td><?php echo $data->NAMA_PRODI ?></td>
						  <td><?php echo $data->NAMA_KELAS ?></td>
                        <td><?php echo $data->TEMPAT_LAHIR ?></td>
						 <td><?php echo $data->TANGGAL_LAHIR ?></td>
						  <td><?php echo $data->ALAMAT_SISWA ?></td>
						   <td><?php echo $data->JENIS_KELAMIN ?></td>
						    <td><?php echo $data->NAMA_ORANG_TUA ?></td>
							 <td><?php echo $data->ASAL_SEKOLAH ?></td>
							  <td><?php echo $data->NO_IJASAH ?></td>
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