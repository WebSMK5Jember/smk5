<?php echo form_open('siswa/save_input_prakerin','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>DAFTAR PRAKERIN</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        
                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">KODE PRAKERIN </label>
                            <div class="col-md-10">
                                <input type="text" name="KODE_PRAKERIN" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">NIS </label>
                            <div class="col-md-10">
                                <input type="text" name="NIS" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                        
                       
                       
                       
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1"> GURU PEMBIMBING</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KODE_GURU">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($guru as $data){?>
                                        <option value="<?php echo $data->KODE_GURU?>"><?php echo $data->NAMA_GURU?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TEMPAT PRAKERIN</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KODE_TEMPAT">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($tempat as $data){?>
                                        <option value="<?php echo $data->KODE_TEMPAT?>"><?php echo $data->NAMA_TEMPAT_PRAKERIN?></option>
                                        
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TANGGAL MULAI </label>
                            <div class="col-md-10">
                                <input type="date" name="TANGGAL_DFTAR" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TANGGAL SELESAI </label>
                            <div class="col-md-10">
                                <input type="date" name="TANGGAL_KELUAR" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">KETERANGAN </label>
                            <div class="col-md-10">
                                <input type="text" name="KETERANGAN" class="form-control" id="exampleInputEmail1">
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
