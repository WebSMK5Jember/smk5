  <?php echo form_open('guru_si/pilih_input_nilai','class="form-horizontal" role="form"');?>

  <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>PILIH KATEGORI </b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">

  
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

 
                          


            <td><?php echo anchor('guru_si/nilai_siswa_input/',
            'Pilih','id="btnTest" type="button" class="btn btn-warning btn-bordered waves-effect w-md waves-light"'); ?>
                            
                        </td>

</div>
</div>
</div>
</div>