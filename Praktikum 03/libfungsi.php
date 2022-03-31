<?php
// method persentase nilai akhir
function persentase($_nilai_uts, $nilai_uas, $nilai_tugas){
    $result = (30*(int)$_nilai_uts/100) + (30*(int)(int)$nilai_uas/100) + (30*(int)$nilai_tugas/100);
    return $result;
}

//method kelulusan
function kelulusan($_nilai){
    if($_nilai > 55){
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }

}

// method grade nilai
function grade_nilai($_nilai){
    if ($_nilai > 85){
        return "A";
    } else if ($_nilai > 70){
        return "B";
    } else if ($_nilai > 56){
        return "C";
    } else if ($_nilai > 36){
        return "D";
    } else if ($_nilai > 0){
        return "E";
    } else {
        return "I";
    }
}

// method predikat nilai
function predikat_nilai($_kelas){
    switch($_kelas){
    case "A":
        return "Sangat Memuaskan";
        break;
    case "B":
        return "Memuaskan";
        break;
    case "C":
        return "Cukup";
        break;
    case "D":
        return "Kurang";
        break;
    case "E";
        return "Sangat Kurang";
        break;
    default:
        return "Tidak Terdeteksi";
    }
}