<?php echo form_open('guru_si/absensi_siswa_input','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>INPUT ABSENSI SISWA </b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        
                        
                        
                       
                       
                       
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1"> NIS</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="nis">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($nis as $data){?>
                                        <option value="<?php echo $data->siswa_nis?>"><?php echo $data->siswa_nama?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">KODE MATA  PELAJARAN </label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KODE_MAPEL">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($mapel as $data){?>
                                        <option value="<?php echo $data->KODE_MAPEL?>"><?php echo $data->NAMA_MAPEL?></option>
                                        
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>

                        

                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">KODE GURU </label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KODE_GURU">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($guru as $data){?>
                                        <option value="<?php echo $data->guru_id?>"><?php echo $data->guru_nama?></option>
                                        
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1"> KETERANGAN </label>
                            <div class="col-md-10">
                                <input type="text" name="SEMESTER" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">JUMLAH HADIR</label>
                            <div class="col-md-10">
                                <input type="text" name="TUGAS1" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>

                       

                            <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                            <button style="margin-top: 20px;" type="submit" onclick="history-1" class="btn btn-warning waves-effect waves-light">Back</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
