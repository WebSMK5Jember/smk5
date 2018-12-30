<?php echo form_open('admin/save_input_jadwal','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>TAMBAH JADWAL PELAJARAN</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        

                                     
                          <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">KELAS</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KODE_KELAS">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($kelas as $data){?>
                                        <option value="<?php echo $data->KODE_KELAS?>"><?php echo $data->NAMA_KELAS?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>

                          <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">MATA PELAJARAN</label>
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
                            <label class="col-md-2 control-label" for="exampleInputEmail1">GURU PENGAJAR</label>
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
                             <label class="col-md-2 control-label" for="exampleInputEmail1">JAM </label>
                                <div class="col-md-10">
                                    <input type="time" name="JAM class="form-control" id="exampleInputEmail1">
                                </div>
                        </div>
                         <div class="form-group">
                             <label class="col-md-2 control-label" for="exampleInputEmail1">RUANGAN </label>
                                <div class="col-md-10">
                                    <input type="varchar" name="RUANG" class="form-control" id="exampleInputEmail1">
                                </div>
                        </div>
                         <div class="form-group">
                             <label class="col-md-2 control-label" for="exampleInputEmail1">HARI </label>
                                <div class="col-md-10">
                                    <input type="text" name="HARI" class="form-control" id="exampleInputEmail1">
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
