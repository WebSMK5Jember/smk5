<?php echo form_open('guru_si/hapus_nilai_siswa','class="form-horizontal" role="form"');
 echo form_hidden('ID_NILAI', $this->uri->segment(3));?>
    
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>INPUT NILAI SISWA </b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        
                        
                        
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                       
                       
                       <table  class="table table-striped table-bordered dataTable no-footer"  >
                <thead>
                <tr role="row">
                    <th  tabindex="0" input-type="text" aria-controls="datatable" rowspan="1" colspan="1"  style="width: 50px;">NIS
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30px;">SEMESTER
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30px;">TUGAS 1
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 30px;">TUGAS 2
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TUGAS 3
                    </th>
                    
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TUGAS 4
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TUGAS 5
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">UH 1
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">UH 2
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">UH 3
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">UH 4
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;"> UTS
                    </th>
                     <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;"> UAS
                    </th>
                     <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;"> RATA-RATA RAPOT
                     </th>
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width:15px;">Opsi
                    </th>
                    
                </tr>
                </thead>
                 <tbody>
                    <tr>
                        <?php 
                        
                        foreach($list as $data){ ?>
                        <td><?php echo $data->NIS ?></td>
                        <td><?php echo $data->SEMESTER ?></td>
                        <td><?php echo $data->TUGAS1 ?></td>
                        <td><?php echo $data->TUGAS2 ?></td>
                        <td><?php echo $data->TUGAS3 ?></td>
                        <td><?php echo $data->TUGAS4 ?></td>
                          <td><?php echo $data->TUGAS5 ?></td>
                          <td> <?php echo $data->UH1 ?></td>
                        <td><?php echo $data->UH2 ?></td>
                           <td><?php echo $data->UH3 ?></td>
                        <td><?php echo $data->UH4 ?></td>
                        <td><?php echo $data->UTS ?></td>
                        <td><?php echo $data->UAS ?></td>
                        <td><?php echo $data->NRATARAPOT ?></td>
                    <td><?php 
                       
                        
                        echo anchor('guru_si/edit_nilai/'.$data->ID_NILAI,'Edit','id="btnTest" type="button" class="btn btn-warning btn-bordered waves-effect w-md waves-light" style="margin-bottom:5px;"');
                        echo anchor('guru_si/hapus_nilai_siswa/'.$data->ID_NILAI,'Hapus','id="btnTest" type="button" class="btn btn-danger btn-bordered waves-effect w-md waves-light"');
                        
                   
                        
                       

                         ?></td>
                    </tr>
                        <?php }?>
            </tbody>
             </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
