<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5><?= $title ?></h5>
                            <div class="card-header-right">
                                <a href="<?=base_url()?>kriteria/tambah_kriteria" class="btn btn-sm btn-primary py-2"><i class="fas fa fa-print text-white"></i></a>
                            </div>
                        </div>
                        <div class="card-block">
                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <td>Rank</td>
                                        <td>Nama Alternatif</td>
                                        <td>Hasil</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no=1;
                                if ($total_d == 0) {?>
                                    <tr>
                                        <td colspan=4>Tidak Ada Data</td>
                                    </tr>
                                <?php    
                                }else{
                                    foreach ($rank as $val):
                                ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$val->nama_alternatif?></td>
                                        <td><?=$val->hasil?></td>
                                    </tr>
                                <?php
                                    endforeach;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>