<?php echo form_open('guru_si/nilai_siswa_input','class="form-horizontal" role="form"');?>

    
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
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"  style="width: 50px;">NIS
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
                    
                    </tr>
                        <?php }?>
            </tbody>
             </table>



                            <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                            <button style="margin-top: 20px;" type="submit" onclick="history-1" class="btn btn-warning waves-effect waves-light">Back</button>
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
