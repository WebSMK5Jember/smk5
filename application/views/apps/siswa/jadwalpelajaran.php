<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>JADWAL PELAJARAN "<?php echo $this->session->userdata('name_session');?>" </b></h2>
                
                
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
   
      <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                   
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20px;">KELAS
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 0px;">MATA PELAJARAN
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">GURU
                    </th>
                    
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">JAM
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">RUANGAN
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">HARI
                    </th>
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        
                        foreach($list as $data){ ?>
                        
                        <td><?php echo $data->kelas_nama ?></td>
                        <td><?php echo $data->NAMA_MAPEL ?></td>
                         <td><?php echo $data->guru_nama ?></td>
                          <td><?php echo $data->JAM ?></td>
                        <td><?php echo $data->RUANG ?></td>
                        <td><?php echo $data->HARI?></td>
                         
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