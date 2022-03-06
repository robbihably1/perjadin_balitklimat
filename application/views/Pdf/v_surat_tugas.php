<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Surat Tugas</title>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/vertical-layout-light/style.css">

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A4
        }
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A4">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-10mm">

        <!-- Write HTML just like a web page -->
        <p style="text-align:center"><?php echo $header->nama_kementerian ?></p><br>
        <h4 style="text-align:center;margin-top:-10px"><b><?php echo $header->eslon_tiga ?></b></h4><br>
        <p style="text-align:center;margin-top:-25px"><?php echo $header->alamat ?></p>
        <hr color="black" style="margin-top:-10px; height:0.1px">
        <hr color="black" style="margin-top:-14px; height:0.1px"><br><br><br>
        <h4 style="text-align:center;margin-top:-10px;letter-spacing:3px"><b>SURAT TUGAS</b></h4>
        <hr width=23% color="black" style="margin-top:-9px; height:1px"><br>
        <?php
        foreach ($data_anggota_perjadin as $p) {
        ?>
            <p style="text-align:center;margin-top:-15px">Nomor : &nbsp <?php echo $p->no_st.$p->no_surat_tugas ?></p><br><br>

            <p style="text-align:justify;margin-top:-15px;margin-left:25px;width:92%">Yang bertanda tangan di bawah ini Kepala Balai Penelitian Agroklimat dan Hidrologi,
                memberi TUGAS untuk melaksanakan perjalanan dinas kepada :<br><br>

            <p style="text-align:left;margin-top:450px;margin-left:420px;width:92%;position:absolute;z-index:0">Dikeluarkan di &nbsp :
            <p style="text-align:left;margin-top:470px;margin-left:420px;width:92%;position:absolute;z-index:1">Pada tanggal &nbsp &nbsp :
            <p style="text-align:left;margin-top:490px;margin-left:420px;width:92%;position:absolute;z-index:2"><b>Kepala Balai,</b>
            <p style="text-align:left;margin-top:620px;margin-left:420px;width:92%;position:absolute;z-index:3"><b><?php echo $p->nama_kb ?></b>
            <p style="text-align:left;margin-top:650px;margin-left:420px;width:92%;position:absolute;z-index:4"><b>NIP.<?php echo ' ' . $p->nip_kb ?></b>
            <table id="table" class="table table-bordered table-sm" style="width:90%;margin-left:30px;color:black">
                <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
                <thead>
                    <tr>
                        <th style="width:7%;text-align:center">No</th>
                        <th style="text-align:center">Nama Pegawai</th>
                        <th style="text-align:center">Gol</th>
                        <th style="text-align:center">Nomor SPPD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($isi_surat as $j) {
                    ?>
                        <tr>
                            <td style="text-align:center"><?php echo $no++ ?></td>
                            <td><?php echo $j->nama_pegawai ?></td>
                            <td style="text-align:center"><?php echo $j->golongan ?></td>
                            <td><?php echo $j->no_sppd.$j->no_sppd2 ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <p style="text-align:left;margin-top:30px;margin-left:25px;width:94%;">Maksud perjalanan &nbsp &nbsp: <?php echo $p->dalam_rangka ?>
            <p style="text-align:left;margin-top:50px;margin-left:25px;width:94%;">Tempat tujuan &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: <?php echo $p->kota . ', ' . $p->nama_provinsi ?>
            <p style="text-align:left;margin-top:10px;margin-left:25px;width:94%;">Lama perjalanan &nbsp &nbsp &nbsp &nbsp: <?php echo $p->lama_perjalanan . ' hari' ?>
            <p style="text-align:justify;margin-top:25px;margin-left:25px;width:92%">Demikian surat tugas ini diberikan untuk dapat dilaksanakan sebagaimana mestinya dan
                setelah menyelesaikan tugas tersebut, bersangkutan wajib membuat dan menyampaikan
                laporan secara tertulis.
            <?php } ?>

    </section>

</body>

</html>