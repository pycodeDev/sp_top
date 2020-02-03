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
                            <form action='<?=base_url();?>kriteria/act_e' method='post'>
                            <input type="hidden" name='id_kriteria' value="<?=$var->id_kriteria?>">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Kriteria</label>
                                    <div class="col-sm-10">
                                        <select name="jenis_k" class="form-control">
                                            <option value="">Pilih Jenis</option>
                                            <option value="cost" <?=$var->jenis_kriteria == 'cost' ? 'selected' : ''?> >Cost</option>
                                            <option value="benefit" <?=$var->jenis_kriteria == 'benefit' ? 'selected' : ''?>  >Benefit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Kriteria</label>
                                    <div class="col-sm-10">
                                        <input type="text" name='nama_k' value="<?=$var->nama_kriteria?>" class="form-control form-control-round" placeholder="Nama Kriteria">
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