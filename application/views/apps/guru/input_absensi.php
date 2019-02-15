<?php 
 echo form_hidden('KODE_ABSENSI', $this->uri->segment(3)); ?>







    
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>INPUT ABSENSI SISWA </b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        
                        
                        
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                       
                       
                     <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr role="row">
                      <th  tabindex="0" input-type="text" aria-controls="datatable" rowspan="1" colspan="1"  style="width: 50px;">KELAS
                    </th>

                    <th  tabindex="0" input-type="text" aria-controls="datatable" rowspan="1" colspan="1"  style="width: 50px;">MAPEL
                    </th>

                     <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30px;">NIS
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30px;">NAMA SISWA
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30px;">JUMLAH HADIR
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 30px;">JUMLAH IZIN
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">JUMLAH SAKIT
                    </th>
                    
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">JUMLAH ALPA
                    </th>
                   
                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width:15px;">Opsi
                    </th>
                    
                </tr>
                </thead>
                 <tbody>
                    <tr>
                        <?php 
                        

                        foreach($list as $data){ ?>
                            <td><?php echo $data->kelas_nama?></td>
                        <td><?php echo $data->NAMA_MAPEL ?></td>
                        <td><?php echo $data->NIS_ABSEN ?></td>
                        <td><?php echo $data->siswa_nama ?></td>
                        <td><?php echo $data->JUMLAH_HADIR ?></td>
                        <td><?php echo $data->JUMLAH_IZIN ?></td>
                        <td><?php echo $data->JUMLAH_SAKIT ?></td>
                          <td><?php echo $data->JUMLAH_ALPA ?></td>
              
                    <td><?php 
                       

                  
                        
                        echo anchor('guru_si/edit_absensi/'.$data->KODE_ABSENSI,'Edit','id="btnTest" type="button" class="btn btn-warning btn-bordered waves-effect w-md waves-light" style="margin-bottom:5px;"');
                   
                   
                        
                       

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
