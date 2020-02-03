<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5><?= $title ?></h5>
                            <div class="card-header-left">
                                <a href="<?=base_url()?>kriteria/tambah_kriteria" class="btn btn-sm btn-primary text-white">Tambah Data</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama Kriteria</td>
                                        <td>Jenis Kriteria</td>
                                        <td>aksi</td>
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
                                    foreach ($d_krit as $val):
                                ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$val->nama_kriteria?></td>
                                        <td><?=$val->jenis_kriteria?></td>
                                        <td>
                                            <a href="<?=base_url()?>kriteria/edit_kriteria/<?=$val->id_kriteria?>" class="btn btn-warning btn-sm text-white"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="<?=base_url()?>kriteria/act_d/<?=$val->id_kriteria?>" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i> Hapus</a>
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