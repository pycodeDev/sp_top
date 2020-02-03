                                            <!-- Project statustic start -->
                                            <div class="col-xl-12">
                                                <div class="card proj-progress-card">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-md-6">
                                                                <h6>Kriteria</h6>
                                                                <h5 class="m-b-20 f-w-700"><?=$row_krit?></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-green" style="width:<?=$row_krit?>%"></div>
                                                                </div>
                                                                <div style="margin-top:15px">
                                                                    <a href="<?= base_url() ?>admin/kriteria" class="btn btn-block btn-sm btn-success" style="color:#fff"><i class="fa fa-search"></i> Cek</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-md-6">
                                                                <h6>Sub Kriteria</h6>
                                                                <h5 class="m-b-20 f-w-700"><?=$row_subkrit?></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-yellow" style="width:<?=$row_subkrit?>%"></div>
                                                                </div>
                                                                <div style="margin-top:15px">
                                                                    <a href="<?= base_url() ?>admin/sub_kriteria" class="btn btn-block btn-sm btn-warning" style="color:#fff"><i class="fa fa-search"></i> Cek</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-md-6">
                                                                <h6>Alternatif</h6>
                                                                <h5 class="m-b-20 f-w-700"><?=$row_alter?></h5>
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-c-red" style="width:<?=$row_alter?>%"></div>
                                                                </div>
                                                                <div style="margin-top:15px">
                                                                    <a href="<?= base_url() ?>admin/alternatif" class="btn btn-block btn-sm btn-danger" style="color:#fff"><i class="fa fa-search"></i> Cek</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Project statustic end -->
                                            <!-- Area Chart start -->
                                            <div class="col-lg-12">
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
                                            <!-- Area Chart Ends -->