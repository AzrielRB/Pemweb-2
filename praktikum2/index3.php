<!-- BIODATA MAHASISWA -->
<?php
  
    $_name = $_POST['nama'] ;
    $_mk = $_POST['matkul'] ;
    $_uts =  $_POST['uts'] ;
    $_uas = $_POST['uas'] ;
    $_tugas = $_POST['tugas'] ;
    $_total = ($_uts * 30 / 100) + ($_uas * 35 / 100) + ($_tugas * 35 / 100);
    echo '<br>  --------------------------------';
    echo '<br> Nama Mahasiswa : ' .$_name;
    echo '<br> Mata Kuliah :  ' .$_mk;
    echo '<br> Nilai UTS :  ' .$_uts;
    echo '<br> Nilai UAS :  ' .$_uas;
    echo '<br> Nilai Tugas :  ' .$_tugas;
    echo '<br>  --------------------------------';
?>

<?php
    
    if($_total > 55){
        $grade  = " LULUS";
    } else {
        $grade = " TIDAK LULUS";
    }
    echo '<br> <br> Persentase Nilai    :   '   .$_total  , "%" ;
    echo '<br> Kamu Dinyatakan    :   '  .$grade;
?>

<?php
    
    if($_uts && $_uas && $_tugas >= 85    &&  $_uts && $_uas && $_tugas <= 100){
        $grade = "A";
    }elseif($_uts && $_uas && $_tugas >=70     && $_uts && $_uas && $_tugas <= 84){
        $grade = "B";
    }elseif($_uts && $_uas && $_tugas >= 56   &&  $_uts && $_uas && $_tugas <= 69){
        $grade = "C";
    }elseif($_uts && $_uas && $_tugas >= 36   &&  $_uts && $_uas && $_tugas <= 55){
        $grade = "D";
    }elseif($_uts && $_uas && $_tugas >= 0    &&  $_uts && $_uas && $_tugas <=35){
        $grade = "E";
    }elseif($_uts && $_uas && $_tugas < 0 &&  $_uts && $_uas && $_tugas >100){
        $grade = "I";
    }else{
        $grade = "Ada Yang Salah Dengan Nilai Kamu";
    }
    echo '<br> <br> Grade Nilai Kamu Adalah :   '   .$grade;
?>

<?php
    
    if($grade == "A"){
        $predikat = "Sangat Memuaskan";
    }elseif($grade == "B"){
        $predikat = "Memuaskan";
    }elseif($grade == "C"){
        $predikat = "Cukup";
    }elseif($grade == "D"){
        $predikat = "Kurang";
    }elseif($grade == "E"){
        $predikat = "Sangat Kurang";
    }elseif($grade == "I"){
        $predikat = "Tidak Ada Grade";
    }else{
        $predikat = "Tidak Ada";
    }
    echo '<br/> Predikat Kamu    :   ' .$predikat;
    echo '<br>  --------------------------------';
?>