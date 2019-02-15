<?php echo form_open('siswa_si/save_input_prakerin','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>DAFTAR PRAKERIN</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                      
                                  <?php
            if($limit==1){
            ?>  
                         
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">NIS </label>
                            <div class="col-md-10">
                                <input type="text" name="NIS" class="form-control" id="exampleInputEmail1" value="<?php echo $this->session->userdata('id_session');?>">
                            </div>
                         </div>
                        
                       
                       
                       
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1"> GURU PEMBIMBING</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KODE_GURU_P">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($guru as $data){?>
                                        <option value="<?php echo $data->guru_id?>"><?php echo $data->guru_nama?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TEMPAT PRAKERIN</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KODE_TEMPAT_P">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($tempat as $data){?>
                                        <option value="<?php echo $data->KODE_TEMPAT?>"><?php echo $data->NAMA_TEMPAT_PRAKERIN?></option>
                                        
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">MINAT/BAKAT </label>
                            <div class="col-md-10">
                                <input type="text" name="MINAT" class="form-control"  id="exampleInputEmail1">
                            </div>
                         </div>

                         <div class="form-group">
                                        <label class="col-md-2 control-label" for="exampleInputEmail1">Upload Surat Persetujuan Orang Tua</label>
                                        <div class="col-md-10-7">
                                            <input type="file" name="PERSETUJUAN_ORGTUA" class="form-control" id="exampleInputEmail1">
                                        </div>
                                    </div>



                     
                       

                           
                            <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                            <button style="margin-top: 20px;" type="submit" onclick="history-1" class="btn btn-warning waves-effect waves-light">Back</button>




                                </div>
                        </div>


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
                        <h3 class="panel-title">Pendaftaran Belum Diijinkan</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Jadwal Pendaftaran Prakerin :<br>
                            <?php echo $tgl_awal['tgl_awal']." Sampai dengan ".$tgl_akhir['tgl_akhir'];?>
                        </p>
                    </div>
                </div>
        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
