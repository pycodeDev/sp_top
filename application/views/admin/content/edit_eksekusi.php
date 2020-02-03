<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?=base_url();?>admin/eksekusi"><i class="fa fa-arrow-circle-left"></i></a><h5><?= $title ?></h5>
                        </div>
                        <div class="card-block">
                            <form action='<?=base_url();?>eksekusi/act_e' method='post'>
                            <input type="hidden" name="id_alternatif" value="<?=$alter->id_alternatif?>" >
                                        <div class="form-group row">
                                            <label for="nama_kriteria" class="col-sm-2 col-form-label">Nama Alternatif</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?=$alter->nama_alternatif?>" readonly>
                                            </div>
                                        </div>

                                        <?php
                                            for ($i=0; $i < sizeof($variable); $i++) {
                                        ?>
                                        <div class="form-group row">
                                            <label for="nama_kriteria" class="col-sm-2 col-form-label"><?=key($variable[$i])?></label>
                                            <div class="col-sm-10">
                                                <select name="kriteria<?=$i?>" class="form-control">
                                                    <?php 
                                                    $a =0;
                                                    foreach ($variable[$i][key($variable[$i])][0] as $key):
                                                    ?>
                                                    <option value="<?=$key[key($key)]?>" <?= $cek[$i]['nilai'] == $key[key($key)] ? 'selected':'' ?> ><?=key($key)?></option>
                                                    <?php
                                                    $a++;
                                                    endforeach;
                                                    ?>
                                                </select>
                                            <?= form_error('nama_kriteria', '<small class="text-danger pl-3">','</small>'); ?>
                                            </div>
                                        </div>
                                        <?php
                                           }
                                        ?>
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