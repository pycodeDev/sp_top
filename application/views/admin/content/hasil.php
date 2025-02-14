<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5><?= $title ?></h5>
                        </div>
                        <div class="card-block">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Rangking</td>
                                        <td>Nama Alternatif</td>
                                        <td>Nilai</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no=1;
                                foreach ($rank as $value):
                                ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$value->nama_alternatif?></td>
                                        <td><?=$value->hasil?></td>
                                    </tr>
                                <?php
                                endforeach;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h5>Perangkingan</h5>
                            <span>Hasil Perangkingan</span>
                        </div>
                        <div class="card-block">
                            <div id="coba"></div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>