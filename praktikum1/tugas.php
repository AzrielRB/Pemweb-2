<?php
    $ns1 = ['id'=>1, 'nim'=>'01234', 'uts'=>80, 'uas'=>84, 'tugas'=>78];
    $ns2 = ['id'=>2, 'nim'=>'55678', 'uts'=>50, 'uas'=>54, 'tugas'=>58];
    $ns3 = ['id'=>3, 'nim'=>'91011', 'uts'=>60, 'uas'=>64, 'tugas'=>68];
    $ns4 = ['id'=>4, 'nim'=>'12131', 'uts'=>70, 'uas'=>74, 'tugas'=>78];

    $ar_nilai = [$ns1,$ns2,$ns3,$ns4]
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>


    <h1>Hello, world!</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>  
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $nomor = 1;
    
    foreach ($ar_nilai as $ns){
        $nilai_akhir = ( $ns['uts'] +  $ns['uas'] + $ns['tugas']) /3;


    ?>

    <tr>
        <td> <?= $nomor ?> </td>
        <td> <?= $ns ['nim'] ?> </td>
        <td> <?= $ns ['uts'] ?> </td>
        <td> <?= $ns ['uas'] ?> </td>
        <td> <?= $ns ['tugas'] ?> </td>
        <td> <?= number_format ($nilai_akhir,2 ,',',',') ?> </td>
    </tr>

    <?php
    $nomor++;
        }
    ?>

  </tbody>
</table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>