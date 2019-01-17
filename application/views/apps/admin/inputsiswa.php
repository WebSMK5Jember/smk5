<?php echo form_open('admin/save_input_siswa','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Tambah Data Siswa</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
          
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">NIS </label>
                            <div class="col-md-10">
                                <input type="text" name="NIS" class="form-control" id="exampleInputEmail1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">NAMA </label>
                            <div class="col-md-10">
                                <input type="text" name="NAMA_SISWA" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">PRODI</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KD_PRODI">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($prodi as $data){?>
                                        <option value="<?php echo $data->KODE_PRODI?>"><?php echo $data->NAMA_PRODI?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">KELAS</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KD_KELAS">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($kelas as $data){?>
                                        <option value="<?php echo $data->KODE_KELAS?>"><?php echo $data->NAMA_KELAS ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TEMPAT LAHIR </label>
                            <div class="col-md-10">
                                <input type="text" name="TEMPAT_LAHIR" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TANGGAL LAHIR </label>
                            <div class="col-md-10">
                                <input type="date" name="TANGGAL_LAHIR" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">ALAMAT </label>
                            <div class="col-md-10">
                                <input type="text" name="ALAMAT_SISWA" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">JENIS KELAMIN  </label>
                            <div class="col-md-10">
                                <div class="radio radio-custom">
                                    <input type="radio" name="JENIS_KELAMIN" id="radio12" value="L">
                                    <label for="radio12">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="radio radio-custom">
                                    <input type="radio" name="kategori" id="radio12" value="P">
                                    <label for="radio12">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">NAMA ORANG TUA </label>
                            <div class="col-md-10">
                                <input type="text" name="NAMA_ORANG_TUA" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>


                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">ASAL SEKOLAH </label>
                            <div class="col-md-10">
                                <input type="text" name="ASAL_SEKOLAH" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>


                          <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">NO. IJAZAH </label>
                            <div class="col-md-10">
                                <input type="text" name="NO_IJASAH" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>

                       
                      
                            <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                            <button style="margin-top: 20px;" type="submit" onclick="history-1" class="btn btn-warning waves-effect waves-light">Back</button>
                            </div>
                        </div>
       
            <!-- end row -->
                    </div>
                </div>
            </div>
        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>