<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="table-responsive">
                            <h3 class="m-0 font-weight-bold text-primary">Data Pegawai</h3><br>
                            <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                            <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                            <div class="col-md-4 grid-margin">
                                <a href="<?php echo base_url() ?>data_pegawai/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah Pegawai</a>
                            </div>
                            <div class="col-md-12 grid-margin">
                                <div class="card shadow mb-12">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive pt-8 ">
                                                    <table id="dtBasicExample" class="table table-striped table-bordered table-md" style="width:100%">
                                                        <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th style="width:7%">No</th>
                                                                <th style="width:10%">Nama Pegawai</th>
                                                                <th style="width:10%">NIP
                                                            </th>
                                                                <!-- <th>Pangkat</th> -->
                                                                <!-- <th style="width:4%" class="th-sm">Foto</th> -->
                                                                <th style="width:4%">Jabatan</th>
                                                                <th style="width:10%">Golongan</th>
                                                                <th style="width:4%">Divisi</th>
                                                                <!-- <th style="width:4%">KPA</th>
                                                                <th style="width:4%">Admin</th>
                                                                <th style="width:4%">PPK</th>
                                                                <th style="width:4%">PJ</th>
                                                                <th style="width:4%">Bendahara</th> -->
                                                                <th style="width:4%">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            foreach ($data_pegawai as $dp) {
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $no++ ?></td>
                                                                    <td><?php echo $dp->nama_pegawai ?></td>
                                                                    <td><?php echo $dp->nip ?></td>
                                                                    <!-- <td>
                                                                        <img  style="width:50px;height: 50px;" src="<?php //echo base_url() . 'assets/images/foto/' . $dp->foto ?> " class="zoomable">
                                                                    </td> -->
                                                                    <td><?php echo $dp->jabatan;?></td>
                                                                    <td><?php echo $dp->golongan;?></td>
                                                                    <td><?php echo $dp->divisi;?></td>
                                                                    <td>
                                                                        <a title="Detail data pegawai" style="color:#ffffff" class="btn btn-sm btn-warning" href="<?php echo base_url('data_pegawai/detail/' . $dp->nip) ?>"><i class="mdi mdi-account-card-details"></i></a>
                                                                        <a title="Edit data pegawai"  class="btn btn-sm btn-success" href="<?php echo base_url() ?>data_pegawai/edit?nip=<?php echo $dp->nip?>"><i class="mdi mdi-pencil"></i></a>
                                                                        <a title="Hapus data pegawai"  id="hapus_pegawai" class="btn btn-sm btn-danger" href="<?php echo site_url('data_pegawai/hapus/' . $dp->nip) ?>"><i class="mdi mdi-trash-can"></i></a>
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
        </div>
    </div>