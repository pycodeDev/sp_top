<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?=base_url();?>admin/sub_kriteria"><i class="fa fa-arrow-circle-left"></i></a><h5><?= $title ?></h5>
                        </div>
                        <?php
                        if ($type->jenis_kriteria == 'cost') {
                            ?>
                            <form action='<?=base_url();?>sub_kriteria/act_t/<?=$id?>' class="form-material" method='post'>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-default">
                                                <input type="hidden" name="krit" value="<?=$id?>">
                                                <input type="text" name="namasub1" class="form-control" required>
                                                <input type="hidden" name="sub1" value="5">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nama Sub Kriteria</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <!-- <label class="col-sm-2 col-form-label">Sub Kriteria</label> -->
                                                <div class="col-sm-10">
                                                    <select name="select" disabled class="form-control">
                                                        <option value=1">Sangat Tinggi</option>
                                                        <option value=2">Tinggi</option>
                                                        <option value=3">Cukup</option>
                                                        <option value=4">Rendah</option>
                                                        <option value=5" selected>Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-default">
                                                <input type="text" name="namasub2" class="form-control" required>
                                                <input type="hidden" name="sub2" value="4">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nama Sub Kriteria</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <!-- <label class="col-sm-2 col-form-label">Sub Kriteria</label> -->
                                                <div class="col-sm-10">
                                                    <select name="select" disabled class="form-control">
                                                        <option value=1">Sangat Tinggi</option>
                                                        <option value=2">Tinggi</option>
                                                        <option value=3">Cukup</option>
                                                        <option value=4" selected>Rendah</option>
                                                        <option value=5" >Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-default">
                                                <input type="text" name="namasub3" class="form-control" required>
                                                <input type="hidden" name="sub3" value="3">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nama Sub Kriteria</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <!-- <label class="col-sm-2 col-form-label">Sub Kriteria</label> -->
                                                <div class="col-sm-10">
                                                    <select name="select" disabled class="form-control">
                                                        <option value=1">Sangat Tinggi</option>
                                                        <option value=2">Tinggi</option>
                                                        <option value=3" selected>Cukup</option>
                                                        <option value=4">Rendah</option>
                                                        <option value=5" >Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-default">
                                                <input type="text" name="namasub4" class="form-control" required>
                                                <input type="hidden" name="sub4" value="2">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nama Sub Kriteria</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <!-- <label class="col-sm-2 col-form-label">Sub Kriteria</label> -->
                                                <div class="col-sm-10">
                                                    <select name="select" disabled class="form-control">
                                                        <option value=1">Sangat Tinggi</option>
                                                        <option value=2" selected>Tinggi</option>
                                                        <option value=3">Cukup</option>
                                                        <option value=4">Rendah</option>
                                                        <option value=5" >Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-default">
                                                <input type="text" name="namasub5" class="form-control" required>
                                                <input type="hidden" name="sub5" value="1">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nama Sub Kriteria</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <!-- <label class="col-sm-2 col-form-label">Sub Kriteria</label> -->
                                                <div class="col-sm-10">
                                                    <select name="select" disabled class="form-control">
                                                        <option value=1" selected>Sangat Tinggi</option>
                                                        <option value=2">Tinggi</option>
                                                        <option value=3">Cukup</option>
                                                        <option value=4">Rendah</option>
                                                        <option value=5" >Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </div>
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
                        <?php
                        }else {?>
                            <form action='<?=base_url();?>sub_kriteria/act_t/<?=$id?>' class="form-material" method='post'>
                            <div class="card-block">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-default">
                                            <input type="hidden" name="krit" value="<?=$id?>">
                                                <input type="text" name="namasub1" class="form-control" required>
                                                <input type="hidden" name="sub1" value="1">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nama Sub Kriteria</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <!-- <label class="col-sm-2 col-form-label">Sub Kriteria</label> -->
                                                <div class="col-sm-10">
                                                    <select name="select" disabled class="form-control">
                                                        <option value=5">Sangat Tinggi</option>
                                                        <option value=4">Tinggi</option>
                                                        <option value=3">Cukup</option>
                                                        <option value=2">Rendah</option>
                                                        <option value=1" selected>Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-default">
                                                <input type="text" name="namasub2" class="form-control" required>
                                                <input type="hidden" name="sub2" value="2">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nama Sub Kriteria</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <!-- <label class="col-sm-2 col-form-label">Sub Kriteria</label> -->
                                                <div class="col-sm-10">
                                                    <select name="select" disabled class="form-control">
                                                        <option value=5">Sangat Tinggi</option>
                                                        <option value=4">Tinggi</option>
                                                        <option value=3">Cukup</option>
                                                        <option value=2" selected>Rendah</option>
                                                        <option value=1" >Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-default">
                                                <input type="text" name="namasub3" class="form-control" required>
                                                <input type="hidden" name="sub3" value="3">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nama Sub Kriteria</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <!-- <label class="col-sm-2 col-form-label">Sub Kriteria</label> -->
                                                <div class="col-sm-10">
                                                    <select name="select" disabled class="form-control">
                                                        <option value=5">Sangat Tinggi</option>
                                                        <option value=4">Tinggi</option>
                                                        <option value=3" selected>Cukup</option>
                                                        <option value=2">Rendah</option>
                                                        <option value=1" >Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-default">
                                                <input type="text" name="namasub4" class="form-control" required>
                                                <input type="hidden" name="sub4" value="4">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nama Sub Kriteria</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <!-- <label class="col-sm-2 col-form-label">Sub Kriteria</label> -->
                                                <div class="col-sm-10">
                                                    <select name="select" disabled class="form-control">
                                                        <option value=5">Sangat Tinggi</option>
                                                        <option value=4" selected>Tinggi</option>
                                                        <option value=3">Cukup</option>
                                                        <option value=2">Rendah</option>
                                                        <option value=1" >Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-default">
                                                <input type="text" name="namasub5" class="form-control" required>
                                                <input type="hidden" name="sub5" value="5">
                                                <span class="form-bar"></span>
                                                <label class="float-label">Nama Sub Kriteria</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <!-- <label class="col-sm-2 col-form-label">Sub Kriteria</label> -->
                                                <div class="col-sm-10">
                                                    <select name="select" disabled class="form-control">
                                                        <option value=5" selected>Sangat Tinggi</option>
                                                        <option value=4">Tinggi</option>
                                                        <option value=3">Cukup</option>
                                                        <option value=2">Rendah</option>
                                                        <option value=1" >Sangat Rendah</option>
                                                    </select>
                                                </div>
                                            </div>
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
                        <?php
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>