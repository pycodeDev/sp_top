<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5><?= $title ?></h5>
                            <div class="card-header-left">
                                <a href="<?=base_url()?>alternatif/tambah_alternatif" class="btn btn-sm btn-primary text-white">Tambah Data</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama Alternatif</td>
                                        <td>aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if ($total_d == 0) {?>
                                    <tr>
                                        <td colspan=3>Data Tidak Ada</td>
                                    </tr>
                                <?php
                                }else{
                                    $no=1;
                                    foreach ($d_al as $val):
                                ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$val->nama_alternatif?></td>
                                        <td>
                                            <a href="<?=base_url()?>alternatif/edit_alternatif/<?=$val->id_alternatif?>" class="btn btn-warning btn-sm text-white"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="<?=base_url()?>alternatif/act_d/<?=$val->id_alternatif?>" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
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