<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?=base_url();?>admin/kriteria"><i class="fa fa-arrow-circle-left"></i></a><h5><?= $title ?></h5>
                        </div>
                        <div class="card-block">
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kriteria</label>
                                    <div class="col-sm-10">
                                        <select name="select" class="form-control">
                                            <option value="">Pilih Jenis</option>
                                            <option value="opt2">Cost</option>
                                            <option value="opt3">Benefit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Kriteria</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-round" placeholder="Nama Kriteria">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="mx-5">
                                <hr/>
                            </div>
                            <button class="btn btn-sm btn-primary float-right">Simpan</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>