<?php echo form_open('siswa/save_input_daful','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>DAFTAR ULANG</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        
                         
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">NIS </label>
                            <div class="col-md-10">
                                <input type="text" name="NIS" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                        
                       <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">SEMESTER</label>
                            <div class="col-md-10">
                                <input type="text" name="SEMESTER" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Tanggal Daftar Ulang </label>
                            <div class="col-md-10">
                                <input type="date" name="TANGGAL_DAFUL" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Status </label>
                            <div class="col-md-10">
                                <input type="radio-button" name="STATUS" class="form-control" id="exampleInputEmail1">
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
