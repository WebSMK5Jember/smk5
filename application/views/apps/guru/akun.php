<?php 
 echo form_hidden('pengguna_id', $this->uri->segment(3)); ?>







    
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Pengaturan Akun </b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        
                        
                        
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                       
                       
                       <table  class="table table-striped table-bordered dataTable no-footer"  >
                <thead>
                <tr role="row">
                    <th  tabindex="0" input-type="text" aria-controls="datatable" rowspan="1" colspan="1"  style="width: 50px;">USERNAME
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30px;">PASSWORD
                    </th>
             

                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width:15px;">Opsi
                    </th>
                    
                </tr>
                </thead>
                 <tbody>
                    <tr>
                        <?php 
                        
                        foreach($list as $data){ ?>
                        <td><?php echo $data->pengguna_guru ?></td>
                        <td><?php echo $data->pengguna_password ?></td>

                    <td><?php 
                       

          
                        
                        echo anchor('guru_si/edit_akun/'.$data->pengguna_id,'Edit','id="btnTest" type="button" class="btn btn-warning btn-bordered waves-effect w-md waves-light" style="margin-bottom:5px;"');
          
                        
                   
                        
                       

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
