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
        <h4 style="text-align:center;margin-top:-30px"><b><?php echo $header->eslon_tiga ?></b></h4><br>
        <p style="text-align:center;margin-top:-25px"><?php echo $header->alamat ?></p>
        <hr color="black" style="margin-top:-10px; height:0.1px">
        <hr color="black" style="margin-top:-14px; height:0.1px"><br><br><br>
        <h4 style="text-align:center;margin-top:-60px"><b>DAFTAR PENGELUARAN RIIL</b></h4>
        <?php
        $p = $isi_surat;
        ?>
            <p style="text-align:justify;margin-top:30px;margin-left:25px;width:92%">Yang bertanda tangan di bawah ini:<br>
            <p style="text-align:justify;margin-top:10px;margin-left:25px;width:92%">Nama &nbsp &nbsp : <?php echo $p->nama_pegawai?>
            <p style="text-align:justify;margin-top:-5px;margin-left:25px;width:92%">NIP &nbsp &nbsp &nbsp &nbsp : <?php echo $p->nip?>
            <p style="text-align:justify;margin-top:-5px;margin-left:25px;width:92%">Jabatan &nbsp: <?php echo $p->jabatan?><br> 
            <p style="text-align:justify;margin-top:10px;margin-left:25px;width:92%">Berdasarkan Surat Perintah Perjalanan Dinas (SPPD) pada :
            <p style="text-align:justify;margin-top:-5px;margin-left:25px;width:92%">Tanggal :
            <p style="text-align:justify;margin-top:-5px;margin-left:25px;width:92%">Nomor &nbsp : <?php echo $p->no_sppd.$p->no_sppd2?><br>
            <p style="text-align:justify;margin-top:10px;margin-left:25px;width:75%; position:absolute;z-index:5">1. <br>
            <p style="text-align:justify;margin-top:10px;margin-left:50px;width:80%; position:absolute;z-index:5">Biaya transport pegawai dan / atau biaya penginapan di bawah ini yang tidak dapat diperoleh bukti-bukti
                pengeluarannya meliputi:<br>

            <p style="text-align:left;margin-top:450px;margin-left:430px;width:92%;position:absolute;z-index:0">................, .....................................
            <p style="text-align:left;margin-top:470px;margin-left:430px;width:92%;position:absolute;z-index:1">Pejabat Negara/Pegawai Negeri
            <p style="text-align:left;margin-top:490px;margin-left:430px;width:92%;position:absolute;z-index:2">Yang melakukan Perjalanan Dinas,
            <p style="text-align:left;margin-top:600px;margin-left:430px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_kb ?></b>
            <p style="text-align:left;margin-top:630px;margin-left:430px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip_kb ?>

            <p style="text-align:left;margin-top:450px;margin-left:50px;width:92%;position:absolute;z-index:0">Mengetahui/Menyetujui:
            <p style="text-align:left;margin-top:470px;margin-left:50px;width:92%;position:absolute;z-index:1">An. Kuasa Pengguna Anggaran
            <p style="text-align:left;margin-top:490px;margin-left:50px;width:92%;position:absolute;z-index:2">Pejabat Pembuat Komitmen
            <p style="text-align:left;margin-top:600px;margin-left:50px;width:92%;position:absolute;z-index:3"><?php echo $p->nama_kb ?>
            <p style="text-align:left;margin-top:630px;margin-left:50px;width:92%;position:absolute;z-index:4">NIP.<?php echo ' ' . $p->nip_kb ?>
            <table id="table" class="table table-bordered table-sm" style="width:92%;margin-left:30px;color:black;margin-top:85px;">
                <!-- <table  id="dtBasicExample" class="table table-striped table-bordered table-md" cellspacing="0" height='50%'> -->
                <thead>
                    <tr>
                        <th style="width:7%;text-align:center">No</th>
                        <th style="text-align:center">Uraian</th>
                        <th style="width:25%;text-align:center">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="height: 120px;">
                        <td style="text-align:center"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:center"></td>
                        <td style="text-align:center"><b>Jumlah</b></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <p style="text-align:justify;margin-top:25px;margin-left:25px;width:75%; position:absolute;z-index:5">2. <br>
            <p style="text-align:justify;margin-top:25px;margin-left:50px;width:80%; position:absolute;z-index:5">Jumlah uang tersebut pada angka 1 di atas benar-benar dikeluarkan untuk pelaksanaan perjalanan dinas
                dimaksud dan apabila di kemudian hari terdapat kelebihan atas pembayaran, kami bersedia untuk menyetorkan
                kelebihan tersebut ke Kas Negara.
            <p style="text-align:justify;margin-top:95px;margin-left:50px;width:80%; position:absolute;z-index:5">Demikian pernyataan ini kami buat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.
                <br>

    </section>

</body>

</html>