<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b> PEROLEHAN NILAI "<?php echo $this->session->userdata('name_session');?>" </b></h2>
				
				
             <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
    <div class="col-sm-12">
        <table  class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                   
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20px;">NIS
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 0px;">MATA PELAJARAN
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">KELAS
                    </th>
					
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">GURU
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">SEMESTER
                    </th>
					<th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TUGAS 1 
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TUGAS 2
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TUGAS 3
                    </th>
                     <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TUGAS 4
                    </th> <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TUGAS 5
                    </th> <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">UH 1
                    </th> <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">UH 2
                    </th> <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">UH 3
                    </th> <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">UH 4
                    </th> <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">UTS
                    </th> <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">UAS
                    </th>
                </th> <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">NILAI AKHIR
                    </th>


					
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        
                        foreach($list as $data){ ?>
                        
                        <td><?php echo $data->NIS ?></td>
                        <td><?php echo $data->NAMA_MAPEL ?></td>
                         <td><?php echo $data->NAMA_KELAS ?></td>
                          <td><?php echo $data->NAMA_GURU ?></td>
                        <td><?php echo $data->SEMESTER ?></td>
                         <td><?php echo $data->TUGAS1 ?></td>
                        <td><?php echo $data->TUGAS2 ?></td>
                         <td><?php echo $data->TUGAS3 ?></td>
                          <td><?php echo $data->TUGAS4 ?></td>
                        <td><?php echo $data->TUGAS5 ?></td>
                        <td><?php echo $data->UH1 ?></td>
                        <td><?php echo $data->UH2 ?></td>
                        <td><?php echo $data->UH3 ?></td>
                        <td><?php echo $data->UH4 ?></td>
                        <td><?php echo $data->UTS?></td>
                        <td><?php echo $data->UAS ?></td>
                         <td><?php echo $data->NRATARAPOT?></td>

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