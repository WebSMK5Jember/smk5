
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>PILIH KELAS</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
<?php
                            $no=0;
                            foreach ($list->result_array() as $i) :
                               $no++;
                               $id_kelas=$i['kelas_id'];
                    
                       $kelas=$i['kelas_nama'];
                       

                    ?>


 <?php endforeach;?>

                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">KELAS</label>
                                        <div class="col-sm-7">
                                          <select class="form-control">
                                            <option value="">-Pilih-</option>
                                            <?php
                                                foreach ($list->result_array() as $k) {
                                                  $id_kelas=$k['kelas_id'];
                                                  $nama_kelas=$k['kelas_nama'];

                                            ?>
                                            <option value="<?php echo $id_kelas;?>"><?php echo $nama_kelas;?></option>
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
