<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root","", "mahasiswa");

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $row[] = $row;
    }
    return $rows;
}