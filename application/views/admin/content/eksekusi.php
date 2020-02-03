<?php

// var_dump($lol);
// echo 4/13,22;
?>
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
                            <a href="<?=base_url()?>admin/hasil" class="btn btn-sm text-white btn-primary my-1 <?= $er > 1 ? '' : 'disabled' ?>">Eksekusi Ranking</a>
                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama Alternatif</td>
                                        <td>Sudah Input Data?</td>
                                        <td>aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no =1;
                                        for ($i=0; $i < sizeof($variable); $i++) {
                                ?>
                                    <tr>
                                        <td><?=$no++?></td>
                                        <td><?=$variable[$i]['nama_alternatif']?></td>
                                        <td><span class="<?=$variable[$i]['status'] == 'sudah'? "badge badge-success" : "badge badge-danger"?>"><?=$variable[$i]['status']?></span></td>
                                        <td>
                                            <?php
                                            if ($variable[$i]['status'] == 'sudah') {
                                                echo '<a href="'.base_url().'eksekusi/edit_eksekusi/'.$variable[$i]['id_alternatif'].'" class="btn btn-sm btn-warning mr-1">Edit</a>';
                                                echo '<a href="'.base_url().'eksekusi/act_d/'.$variable[$i]['id_alternatif'].'" class="btn btn-sm btn-danger">Hapus</a>';
                                            }elseif ($variable[$i]['status'] == 'belum') {
                                                echo '<a href="'.base_url().'eksekusi/tambah_eksekusi/'.$variable[$i]['id_alternatif'].'" class="btn btn-sm btn-success">Tambah</a>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
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