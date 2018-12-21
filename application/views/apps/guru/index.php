<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
              <h2 class="m-t-0 header-title"><b>SELAMAT DATANG "<?php echo $this->session->userdata('name_session');?>" DI SIAKAD KALIBER</b></h2>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

        <table  class="table table-striped table-bordered dataTable no-footer"  >
                <thead>
                <tr role="row">
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  style="width: 50px;">KODE GURU
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">NIP
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 250px;">NAMA
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">JABATAN
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">ALAMAT
                    </th>
					
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">MATA PELAJARAN
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">JUMLAH JAM
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">JADWAL PIKET
                    </th>
					
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        
                        foreach($list as $data){ ?>
                        <td><?php echo $data->KODE_GURU ?></td>
                        <td><?php echo $data->NIP ?></td>
                        <td><?php echo $data->NAMA_GURU ?></td>
						 <td><?php echo $data->NAMA_JABATAN ?></td>
						  <td><?php echo $data->ALAMAT_GURU ?></td>
                        <td><?php echo $data->NAMA_MAPEL ?></td>
						 <td><?php echo $data->JUMLAH_JAM ?></td>
						  <td><?php echo $data->HARI?> <?php echo $data->JAM?></td>
					
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