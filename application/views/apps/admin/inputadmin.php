<?php echo form_open('admin/save_input_admin','class="form-horizontal" role="form"');?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Tambah Data Admin</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        
                         <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">KODE ADMIN </label>
                            <div class="col-md-10">
                                <input type="text" name="KODE_ADMIN" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">NAMA ADMIN </label>
                            <div class="col-md-10">
                                <input type="text" name="NAMA_ADMIN" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                        
                        <div class="form-group">
                             <label class="col-md-2 control-label" for="exampleInputEmail1">JABATAN </label>
                                <div class="col-md-10">
                                    <input type="varchar" name="JABATAN" class="form-control" id="exampleInputEmail1">
                                </div>
                        </div>
                         <div class="form-group">
                             <label class="col-md-2 control-label" for="exampleInputEmail1">EMAIL </label>
                                <div class="col-md-10">
                                    <input type="varchar" name="EMAIL" class="form-control" id="exampleInputEmail1">
                                </div>

                                 </div>
                            <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                            <button style="margin-top: 20px;" type="submit" onclick="history-1" class="btn btn-warning waves-effect waves-light">Back</button>
                                </div>
                        
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
