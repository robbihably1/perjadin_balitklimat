<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Perjalanan Dinas</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <a href="<?php echo base_url() ?>perjalanan_dinas/tambah" class="btn btn-success btn-md"><i class="ti ti-plus"></i>Tambah Perjalanan Dinas</a>
                            <a href="<?php echo base_url() ?>anggota_perjadin/anggota" class="btn btn-info btn-md">Daftar Perjalanan Dinas By Pegawai</a>
                        </div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 ">
                                            <table id="datatable" class="table table-bordered table-md" cellspacing="0" style="width:100%; height:100%">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width:2%">No</th>
                                                        <th style="width:5%">Kode Kegiatan</th>
                                                        <th style="width:7%">Judul Kegiatan</th>
                                                        <th style="width:6%">Dalam Rangka</th>
                                                        <th style="width:0.5%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data_perjalanan_dinas as $j) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no++ . ' ' ?><a title="Lihat daftar anggota perjalanan dinas" data-toggle="collapse" data-target="#data<?php echo $j->id_perjalanan_dinas ?>" class="accordion-toggle btn btn-light btn-sm mdi mdi-account-multiple"></a></td>
                                                            <td><?php echo $j->kode_kegiatan ?></td>
                                                            <td><?php echo $j->judul_kegiatan ?></td>
                                                            <td><?php echo $j->dalam_rangka ?></td>
                                                            <td>
                                                                <a title="Detail data perjalanan dinas" style="color:white" class="btn btn-sm btn-warning" href="<?php echo base_url('perjalanan_dinas/detail/' . $j->id_perjalanan_dinas) ?>"><i class="mdi mdi-car"></i></a>
                                                                <a title="Edit data perjalanan dinas" class="btn btn-sm btn-success" href="<?php echo base_url() ?>perjalanan_dinas/edit?id_perjalanan_dinas=<?php echo $j->id_perjalanan_dinas ?>"><i class="mdi mdi-pencil"></i></a>
                                                                <a title="Tambah anggota perjalanan dinas" style="color:white" class="btn btn-sm btn-secondary" href="<?php echo base_url() ?>anggota_perjadin/tambah?id_perjalanan_dinas=<?php echo $j->id_perjalanan_dinas ?>"><i class="mdi mdi-account-multiple-plus"></i></a>
                                                                <!-- <a title="Lihat anggota perjalanan dinas" style="color:white" class="btn btn-sm btn-secondary" href="<?php echo base_url() ?>anggota_perjadin?id_perjalanan_dinas=<?php //echo $j->id_perjalanan_dinas 
                                                                                                                                                                                                                                        ?>"><i class="mdi mdi-account-multiple-outline"></i></a> -->
                                                                <a title="Hapus data perjalanan dinas" id="hapus_perjalanan_dinas" class="btn btn-sm btn-danger" href="<?php echo site_url('/perjalanan_dinas/hapus/' . $j->id_perjalanan_dinas) ?>"><i class="mdi mdi-trash-can"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="12" class="hiddenRow">
                                                                <div class="accordian-body collapse" id="data<?php echo $j->id_perjalanan_dinas ?>">
                                                                    <table style="margin-top:5px; width:97%; margin-left:21px;margin-bottom:5px;" class="table table-bordered table-md">
                                                                        <a style="margin-top:10px; margin-left:21px;margin-bottom:5px;"class="btn btn-sm btn-info mdi mdi-file"> Surat Pengajuan</a>
                                                                        <a style="margin-top:10px; margin-left:21px;margin-bottom:5px;"class="btn btn-sm btn-info mdi mdi-file"> Perincian</a>
                                                                        <a style="margin-top:10px; margin-left:21px;margin-bottom:5px;"class="btn btn-sm btn-info mdi mdi-file" href="<?php echo base_url('pdf/surat_tugas/' . $j->id_perjalanan_dinas) ?>"> Surat Tugas (Kepala Balai)</a>
                                                                        <a style="margin-top:10px; margin-left:21px;margin-bottom:5px;"class="btn btn-sm btn-info mdi mdi-file" href="<?php echo base_url('pdf/surat_tugas_plt/' . $j->id_perjalanan_dinas) ?>"> Surat Tugas (Plh. Kepala Balai)</a>
                                                                        <a style="margin-top:10px; margin-left:21px;margin-bottom:5px;"class="btn btn-sm btn-info mdi mdi-file"> Norminatif</a>
                                                                        
                                                                        <thead class="thead-light">
                                                                            <tr class="info">
                                                                                <th style="width:5%">Nama Pegawai</th>
                                                                                <th style="width:4%">Uang Harian</th>
                                                                                <th style="width:4%">Transportasi</th>
                                                                                <th style="width:5%">Penginapan</th>
                                                                                <th style="width:2%">Status Perjalanan Dinas</th>
                                                                                <th style="width:1%">Dokumen</th>
                                                                                <th style="width:1%">Aksi</th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            foreach ($data_anggota_perjadin as $d) {
                                                                            ?>
                                                                                <tr data-toggle="collapse" class="accordion-toggle">
                                                                                    <?php if ($j->id_perjalanan_dinas == $d->id_perjalanan_dinas) { ?>
                                                                                        <td><?php echo $d->nama_anggota_perjadin ?></td>
                                                                                        <td><?php echo 'Rp' . number_format($d->uang_harian, 0, ',', '.') ?></td>
                                                                                        <td><?php echo 'Rp' . number_format($d->uang_transportasi, 0, ',', '.') ?></td>
                                                                                        <td><?php echo 'Rp' . number_format($d->uang_penginapan, 0, ',', '.') ?></td>
                                                                                        <td><?php if ($d->status_perjalanan_dinas == 'Belum Berangkat') {
                                                                                            ?> <button style="color:white; margin-left:15px" class="btn btn-warning btn-sm"> Belum Berangkat </button> <?php
                                                                                                                                                                                                    } elseif ($d->status_perjalanan_dinas == 'Sedang Berlangsung') {
                                                                                                                                                                                                        ?> <button style="margin-left:7px" class="btn btn-success btn-sm"> Sedang Berlangsung </button> <?php
                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                        ?> <button style="margin-left:45px" class="btn btn-info btn-sm"> Selesai </button> <?php
                                                                                                                                                                                                                                                                                                                                                                                        } ?></td>
                                                                                        <td>
                                                                                            <div class="dropdown">
                                                                                                <button class="btn btn-info dropdown-toggle btn-sm mdi mdi-file" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    File
                                                                                                </button>
                                                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                                    <a class="dropdown-item " href="#"><b>- SPPD</a>
                                                                                                    <a class="dropdown-item" href="#"><b>- Capsah-PNS(1)</a>
                                                                                                    <a class="dropdown-item" href="#"><b>- Capsah-PNS(2)</a>
                                                                                                    <a class="dropdown-item" href="#"><b>- Kuitansi</a>
                                                                                                    <a class="dropdown-item" href="#"><b>- Pernyataan</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a title="Edit data anggota perjalanan dinas" class="btn btn-sm btn-success" href="<?php echo base_url() ?>anggota_perjadin/edit?id_anggota_perjadin=<?php echo $d->id_anggota_perjadin ?>"><i class="mdi mdi-pencil"></i></a>
                                                                                            <a title="Hapus data anggota perjalanan dinas" id="hapus_anggota_perjalanan_dinas" class="btn btn-sm btn-danger" href="<?php echo base_url() ?>anggota_perjadin/hapus/<?php echo $d->id_anggota_perjadin . '/' . $d->kode_mak . '/' . $d->kode_kegiatan ?>"><i class="mdi mdi-trash-can"></i></a>
                                                                                        </td>
                                                                                    <?php } ?>
                                                                                </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- <input type="hidden" name="id_perjalanan_dinas" value="<?php //echo $j->id_perjalanan_dinas
                                                                                                                    ?>"> -->
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