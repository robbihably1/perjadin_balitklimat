<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Capsah-PNS(2)</title>
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
        <?php
        $p = $isi_surat;
        ?>
        <hr width=120% color="black" style="margin-top:98.6mm; margin-left:-50px; position:absolute; z-index:0; height:0.2px">
        <hr width=120% color="black" style="margin-top:197.2mm; margin-left:-50px; position:absolute; z-index:0; height:0.2px">
        <hr width=120% color="black" style="margin-top:212mm; margin-left:-50px; position:absolute; z-index:0; height:0.2px">
        <hr width=1.2px color="black" style="margin-left:47%;margin-top:-318px; position:absolute; z-index:0; height:100%">

        <p style="text-align:justify;margin-top:10px;margin-left:-20px; width:75%; position:absolute;z-index:5">IV. <br>
        <p style="text-align:justify;margin-top:10px;margin-left:10px;width:80%;position:absolute; z-index:0">Tiba di
        <p style="text-align:justify;margin-top:10px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:30px;margin-left:10px;width:80%;position:absolute; z-index:0">Pada Tanggal
        <p style="text-align:justify;margin-top:30px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:50px;margin-left:10px;width:80%;position:absolute; z-index:0">Kepala
        <p style="text-align:justify;margin-top:50px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:left;margin-top:280px;margin-left:110px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_pegawai ?></b>
        <p style="text-align:left;margin-top:310px;margin-left:110px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip ?>

        <p style="text-align:justify;margin-top:10px;margin-left:400px;width:80%;position:absolute; z-index:0">Berangkat dari
        <p style="text-align:justify;margin-top:10px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:30px;margin-left:400px;width:80%;position:absolute; z-index:0">Pada Tanggal
        <p style="text-align:justify;margin-top:30px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:50px;margin-left:400px;width:80%;position:absolute; z-index:0">Ke
        <p style="text-align:justify;margin-top:50px;margin-left:500px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:70px;margin-left:400px;width:80%;position:absolute; z-index:0">Kepala
        <p style="text-align:justify;margin-top:70px;margin-left:500px;width:80%;position:absolute; z-index:0">:

        <p style="text-align:left;margin-top:280px;margin-left:500px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_pegawai ?>
        <p style="text-align:left;margin-top:310px;margin-left:500px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip ?>

        <p style="text-align:justify;margin-top:410px;margin-left:-20px; width:75%; position:absolute;z-index:5">V. <br>
        <p style="text-align:justify;margin-top:410px;margin-left:10px;width:80%;position:absolute; z-index:0">Tiba kembali di
        <p style="text-align:justify;margin-top:410px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:justify;margin-top:430px;margin-left:110px;width:80%;position:absolute; z-index:0; font-size:10px;letter-spacing:0.1px">&nbsp (tempat kedudukan)
        <p style="text-align:justify;margin-top:450px;margin-left:10px;width:80%;position:absolute; z-index:0">Pada Tanggal
        <p style="text-align:justify;margin-top:450px;margin-left:110px;width:80%;position:absolute; z-index:0">:
        <p style="text-align:left;margin-top:510px;margin-left:110px;width:80%;position:absolute;z-index:1">An. Kuasa Pengguna Anggaran
        <p style="text-align:left;margin-top:530px;margin-left:110px;width:80%;position:absolute;z-index:2">Pejabat Pembuat Komitmen
        <p style="text-align:left;margin-top:670px;margin-left:110px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_ppk ?></b>
        <p style="text-align:left;margin-top:700px;margin-left:110px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip_ppk ?>

        <p style="text-align:left;margin-top:410px;margin-left:400px;width:40%;position:absolute; z-index:0;font-size:11px">Telah diperiksa, dengan keterangan bahwa perjalanan tersebut di atas benar dilakukan atas
            perintahnya semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya
        <p style="text-align:left;margin-top:510px;margin-left:500px;width:80%;position:absolute;z-index:1">An. Kuasa Pengguna Anggaran
        <p style="text-align:left;margin-top:530px;margin-left:500px;width:80%;position:absolute;z-index:2">Pejabat Pembuat Komitmen
        <p style="text-align:left;margin-top:670px;margin-left:500px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_ppk ?></b>
        <p style="text-align:left;margin-top:700px;margin-left:500px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip_ppk ?>

        <p style="text-align:justify;margin-top:765px;margin-left:-20px; width:75%; position:absolute;z-index:5">VI. <br>
        <p style="text-align:justify;margin-top:765px;margin-left:10px;width:80%;position:absolute; z-index:0">CATATAN LAIN-LAIN
        <p style="text-align:justify;margin-top:835px;margin-left:-20px; width:75%; position:absolute;z-index:5">VII. <br>
        <p style="text-align:justify;margin-top:835px;margin-left:10px;width:80%;position:absolute; z-index:0">PERHATIAN
        <p style="text-align:justify;margin-top:860px;margin-left:10px;width:84%;position:absolute; z-index:0;font-size:11px">Pejabat yang berwenang menerbitkan SPPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal
            berangkat/tiba serta bendaharawan bertanggung jawab berdasarkan peraturan-peraturan Keuangan Negara, apabila Negara menderita
            rugi akibat kesalahan, kelalaian dan kealpaannya. (Angka 8, lampiran Surat Edaran Menteri Keuangan tanggal 23 April 1996 Nomor: SE67/A/622/0496).


    </section>
    <?php

    function tanggal_indonesia($tanggal)
    {

        $bulan = array(
            1 =>       'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $var = explode('-', $tanggal);

        return $var[2] . ' ' . $bulan[(int)$var[1]] . ' ' . $var[0];
        // var 0 = tanggal
        // var 1 = bulan
        // var 2 = tahun
    } ?>

</body>

</html>