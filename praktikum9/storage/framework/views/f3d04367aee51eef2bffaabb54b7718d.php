

<h2>Form Pendaftaran Checkup</h2>

<form method="post" action="<?php echo e(route('user/checkup')); ?>">
    <?php echo csrf_field(); ?>
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" placeholder="Masukan Nama Anda">
    <br><br>
    <label for="usia">Usia</label>
    <input type="number" name="usia" id="usia" placeholder="Masukan Usia Anda">
    <br><br>
    <label for="tgl">Tanggal Pemeriksaan</label>
    <input type="date" name="tgl" id="tgl" >
    <br><br>
    <label for="jk">Jenis Kelamin</label>
    <select name="jk" id="">
        <?php  foreach($jenis as $jk) {  ?>
            <option value="<?= $jk; ?>">  <?=  $jk ?>  </option>
        <?php }?>
    </select>
    <br><br>
    <input type="submit" name="" id="" value="Submit">
</form><?php /**PATH C:\app\pemweb2-app\resources\views/user/form.blade.php ENDPATH**/ ?>