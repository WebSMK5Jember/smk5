<?php echo form_open('admin/save_input_guru','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Tambah Data Guru</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">NIP </label>
                            <div class="col-md-10">
                                <input type="text" name="NIP" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">KODE GURU </label>
                            <div class="col-md-10">
                                <input type="text" name="KODE_GURU" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                        <div class="form-group">
                             <label class="col-md-2 control-label" for="exampleInputEmail1">NAMA </label>
                                <div class="col-md-10">
                                    <input type="varchar" name="NAMA_GURU" class="form-control" id="exampleInputEmail1">
                                </div>
                        </div>
                         <div class="form-group">
                             <label class="col-md-2 control-label" for="exampleInputEmail1">ALAMAT </label>
                                <div class="col-md-10">
                                    <input type="varchar" name="ALAMAT_GURU" class="form-control" id="exampleInputEmail1">
                                </div>
                        </div>
                         <div class="form-group">
                             <label class="col-md-2 control-label" for="exampleInputEmail1">JUMLAH JAM </label>
                                <div class="col-md-10">
                                    <input type="varchar" name="JUMLAH_JAM" class="form-control" id="exampleInputEmail1">
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
                            <label class="col-md-2 control-label" for="exampleInputEmail1">JABATAN </label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KODE_JABATAN">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($piket as $data){?>
                                        <option value="<?php echo $data->KODE_PIKET?>"><?php echo $data->HARI?></option>
                                        <option value="<?php echo $data->KODE_PIKET?>"><?php echo $data->JAM?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">PIKET </label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KODE_PIKET">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($jabatan as $data){?>
                                        <option value="<?php echo $data->KODE_JABATAN?>"><?php echo $data->NAMA_JABATAN?></option>
                                    <?php } ?>
                                    </select>
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
