<?php 
echo form_open('guru_si/simpan_edit_absensi','class="form-horizontal" role="form"');
echo form_hidden('KODE_ABSENSI', $this->uri->segment(3));

?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Update Absensi <?php echo $list['siswa_nama'] ?></b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">
                        <?php $this ->load ->view($form_edit_absensi); ?>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<?php echo form_close(); ?>