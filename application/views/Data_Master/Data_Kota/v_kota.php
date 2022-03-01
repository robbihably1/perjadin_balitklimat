<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Kota</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-4 grid-margin">
                            <a href="<?php echo base_url() ?>kota/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah Kota</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 ">
                                        <table id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" style="width:100%; height:100%">
                                                <thead class="table-secondary">
                                                    <tr>
                                                        <th style="width:10%;">No</th>
                                                        <th>Kota / Kabupaten</th>
                                                        <th>Provinsi</th>
                                                        <th>Luar Kota</th>
                                                        <th>Dalam Kota</th>
                                                        <th style="width:10%;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_kota as $j) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td><?php echo $j->kota ?></td>
                                                            <td><?php echo $j->nama_provinsi ?></td>
                                                            <td><?php echo 'Rp'.number_format($j->luar_kota,0,',','.') ?></td>
                                                            <td><?php echo 'Rp'.number_format($j->dalam_kota,0,',','.') ?></td>
                                                            <td>
                                                                <a title="Edit data kota"  class="btn btn-sm btn-success" href="<?php echo base_url() ?>kota/edit?id_kota=<?php echo $j->id_kota?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a title="Hapus data kota"  id="hapus_kota" class="btn btn-sm btn-danger" href="<?php echo site_url('/kota/hapus/' . $j->id_kota) ?>"><i class="mdi mdi-trash-can"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>