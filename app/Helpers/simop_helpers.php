<?php

function jenis_waktu_to_kegiatan($jenis_waktu, $nilai_waktu) {
    switch($jenis_waktu) {
        case 'Tahunan':
            return $jenis_waktu;
            break;
        case 'Triwulanan':
            return 'Triwulan '.$nilai_waktu;
            break;
        case 'Subround':
            return $jenis_waktu.' '.$nilai_waktu;
        case 'Semester':
            return $jenis_waktu.' '.$nilai_waktu;
    }
}