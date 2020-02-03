<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5><?= $title ?></h5>
                            <div class="card-header-left">
                                <div id="btn_print"></div>
                            </div>
                        </div>
                        <div class="container my-2">
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-control" id="lapsub">
                                        <?php
                                        foreach ($krit as $var):?>
                                            <option value="<?=$var->id_kriteria?>"><?=$var->nama_kriteria?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <button id="lapsub_krit" class="btn btn-md btn-success">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <table class="table" id="lapsubkrit">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama Kriteria</td>
                                        <td>Nama Sub Kriteria</td>
                                        <td>Jenis Kriteria</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td colspan="4"> Pilih Filter</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>