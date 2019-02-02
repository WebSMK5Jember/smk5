<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b> ABSENSI "<?php echo $this->session->userdata('name_session');?>" </b></h2>
				   
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
    <div class="col-sm-12">
        <table class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">

                <thead>
                <tr role="row">
                   
                    </th>
                  <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">MATA PELAJARAN
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 0px;">KETERANGAN
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">JUMLAH KEHADIRAN
                    </th>
					
					
										


					
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        
                        foreach($list as $data){ ?>
                         <td><?php echo $data->NAMA_MAPEL ?></td>
                 
                        <td><?php echo $data->KETERANGAN ?></td>
                         <td><?php echo $data->JUMLAH_HADIR?></td>
                   
                     

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