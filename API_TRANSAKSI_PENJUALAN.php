<?php
    include "connection.php";

    $sql = "SELECT * FROM tb_transaksi";
    $que = mysqli_query($conn, $sql);

    while($data = mysqli_fetch_array($que)){
        //echo $data["Nama_Pengirim"]." ";
        $item[] = array(
            'idtransaksi'=>$data["ID_Transaksi"],
            'idpaket'=>$data["ID_Packet"],
            'idpegawai'=>$data["ID_Pegawai"],
            'idstatus'=>$data["ID_Status"],
            'namapengirim'=>$data["Nama_Pengirim"],
            'namapenerima'=>$data["Nama_Penerima"],
            'tujuan'=>$data["Alamat_tujuan"],
            'date'=>$data["Date"],
            'desc'=>$data["Deskripsi"],
            'kodepos'=>$data["Kode_pos"],
            'nohppenerima'=>$data["NoHP_Penerima"],
            'nohppengirim'=>$data["NoHP_Pengirim"],
        );
        $response = array(
            'status'=>'OK',
            'data'=>$item
        );
        echo json_encode($response);
    }
?>