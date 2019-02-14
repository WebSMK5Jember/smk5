<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
                <h2 class="m-t-0 header-title"><b>Daftar Prakerin yang sudah di review  </b></h2>
                
                
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
   
     <table  class="table table-striped table-bordered dataTable no-footer"  >
                <thead>
                <tr role="row">



                                  <?php
            if($limit==1){
            ?> 
                   
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20px;">NIS
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 0px;">GURU PEMBIMBING
                    </th>
                    <th  tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30px;">TEMPAT
                    </th>
                    
               
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        
                        foreach($list as $data){ ?>
                        
                        <td><?php echo $data->NIS ?></td>
                        <td><?php echo $data->guru_nama ?></td>
                         <td><?php echo $data->NAMA_TEMPAT_PRAKERIN ?></td>
        
                         
                    </tr>
                        <?php }?>
                       
            </tbody>
        </table>

         <!-- <?php }else if($limit==2){?>

                <div class="panel panel-color panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Penginputan Belum Diijinkan</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Jadwal Penginputan Judul Tugas Akhir Belum Ditentukan
                        </p>
                    </div>
                </div> -->
        <?php }else{?>
                <div class="panel panel-color panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pengumuman Belom Bisa Diakses</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            PEngumuman Hasil Review Pengajuan Tempat Prakerin :<br>
                            <?php echo $tgl_awal['tgl_awal']." Sampai dengan ".$tgl_akhir['tgl_akhir'];?>
                        </p>
                    </div>
                </div>
        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- end row -->
    </div>
</div>
</div>
        </div>
    </div>
</div>