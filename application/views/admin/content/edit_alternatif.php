<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?=base_url();?>admin/alternatif"><i class="fa fa-arrow-circle-left"></i></a><h5><?= $title ?></h5>
                        </div>
                        <div class="card-block">
                            <form action='<?=base_url();?>alternatif/act_e' method='post'>
                                <input type='hidden' name='id_alternatif' value="<?=$var->id_alternatif?>" />
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Alternatif</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?=$var->nama_alternatif?>" name="nama_al" class="form-control form-control-round" placeholder="Nama Alternatif">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <div class="mx-5">
                                <hr/>
                            </div>
                            <button class="btn btn-sm btn-primary float-right">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>