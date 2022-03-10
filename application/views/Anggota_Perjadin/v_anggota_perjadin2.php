<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Anggota Perjalanan Dinas</h3><br>
                        <div class="flash-data" id="flash2" data-flash="<?= $this->session->flashdata('sukses'); ?>"></div>
                        <div class="flash-data" id="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                        <div class="col-md-12 grid-margin">
                            <div class="card shadow mb-12">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <!-- <div class="card-body"> -->
                                        <div class="table-responsive pt-3 ">
                                            <table id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" style="width:130%; height:100%">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width:5%">Nama</th>
                                                        <th style="width:4%">No Surat Tugas</th>
                                                        <th style="width:5%">Kegiatan</th>
                                                        <th style="width:6%">Dalam Rangka</th>
                                                        <th style="width:2%">Lokasi</th>
                                                        <th style="width:0.5%">Berangkat</th>
                                                        <th style="width:0.5%">Kembali</th>
                                                        <th style="width:0.5%">Jumlah Hari</th>
                                                        <th style="width:0.5%">Pengeluaran</th>
                                                        <th style="width:0.5%">PUMK</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($data_anggota_perjadin as $j) {
                                                    ?>
                                                        <tr>
                                                             <td style="font-size: 12px;"><?php echo $j->nama_anggota_perjadin ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->no_surat_tugas ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->judul_kegiatan ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->dalam_rangka ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->kota_tujuan ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->tanggal_berangkat ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->tanggal_kembali ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->lama_perjalanan ?></td>
                                                             <td style="font-size: 12px;"><?php echo 'Rp'.number_format($j->total_pendapatan) ?></td>
                                                             <td style="font-size: 12px;"><?php echo $j->nama_pumk ?></td>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            <!-- <span id="hasil"></span>
                                         -->
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