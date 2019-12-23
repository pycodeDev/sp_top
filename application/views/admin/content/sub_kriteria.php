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
                        <div class="container my-2">
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-md btn-success">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama Kriteria</td>
                                        <td>Jenis Kriteria</td>
                                        <td>aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Anggaran</td>
                                        <td>Cost</td>
                                        <td>
                                            <a class="btn btn-warning btn-sm text-white"><i class="fa fa-pencil"></i> Edit</a>
                                            <a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>