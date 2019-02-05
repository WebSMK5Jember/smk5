<?php echo form_open('guru_si/nilai_siswa_input','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>INPUT NILAI SISWA </b></h4>
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
                            <label class="col-md-2 control-label" for="exampleInputEmail1">KODE KELAS </label>
                                <div class="col-md-10">
                                    <select class="form-control" name="KODE_KELAS">
                                        <option disabled selected value>- Pilih -</option>
                                        <?php foreach($kelas as $data){?>
                                        <option value="<?php echo $data->kelas_id?>"><?php echo $data->kelas_nama?></option>
                                        
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
                            <label class="col-md-2 control-label" for="exampleInputEmail1"> SEMESTER </label>
                            <div class="col-md-10">
                                <input type="text" name="SEMESTER" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                         
                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TUGAS 1</label>
                            <div class="col-md-10">
                                <input type="text" name="TUGAS1" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TUGAS 2 </label>
                            <div class="col-md-10">
                                <input type="text" name="TUGAS2" class="form-control" id="exampleInputEmail1">
                            </div>

                         </div>


                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TUGAS 3 </label>
                            <div class="col-md-10">
                                <input type="text" name="TUGAS3" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                       

                       <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TUGAS 4 </label>
                            <div class="col-md-10">
                                <input type="text" name="TUGAS4" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>


                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">TUGAS 5 </label>
                            <div class="col-md-10">
                                <input type="text" name="TUGAS5" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>          

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Ulangan Harian 1 </label>
                            <div class="col-md-10">
                                <input type="text" name="UH1" class="form-control" id="exampleInputEmail1">
                            </div>
                             </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Ulangan Harian 2 </label>
                            <div class="col-md-10">
                                <input type="text" name="UH2" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Ulangan Harian 3</label>
                            <div class="col-md-10">
                                <input type="text" name="UH3" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Ulangan Harian 4 </label>
                            <div class="col-md-10">
                                <input type="text" name="UH4" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>


                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Ulangan Tengah Semester </label>
                            <div class="col-md-10">
                                <input type="text" name="UTS" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Ulangan Akhir Semester </label>
                            <div class="col-md-10">
                                <input type="text" name="UAS" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">NILAI AKHIR </label>
                            <div class="col-md-10">
                                <input type="text" name="NRATARAPOT" class="form-control" id="exampleInputEmail1">
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
