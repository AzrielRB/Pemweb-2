<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<form action="" method="POST">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
  <div class="form-group">
    <label for="nama">Nama :</label>
    <input type="text" class="form-control" id="nama">
  </div>
  <div class="form-group">
    <label for="tgl">tanggal pemeriksaan : </label>
    <input type="date" class="form-control" id="tgl">
  </div>
  <div class="form-group">
    <label for="usia">Usia :</label>
    <input type="number" class="form-control" id="usia" >
  </div>
  <div class="form-group">
    <label for="jk">Jenis Kelamin : </label>
    <label for="jk">Pria</label>
    <input type="radio">
    <label for="jk">Wanita</label>
    <input type="radio">
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
  <br><br>
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Jenis tes darah
						</th>
						<th>
							Hasil pemeriksaan
						</th>
						<th>
							Normal
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							Tekanan darah
						</td>
						<td>
							
						</td>
						<td>
            120/80 mmhg
						</td>
					</tr>
					<tr class="table-active">
						<td>
							2
						</td>
						<td>
							Asam urat
						</td>
						<td>
							
						</td>
						<td>
            Pria : < 7 mg/dl | Wanita: < 6 mg/dl
						</td>
					</tr>
					<tr class="table-success">
						<td>
							3
						</td>
						<td>
            Kolesterol total 
						</td>
						<td>
							
						</td>
						<td>
            < 200 mg/dl
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							4
						</td>
						<td>
							Gula darah
						</td>
						<td>
							
						</td>
						<td>
            Puasa: 70-110 mg/dl
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							5
						</td>
						<td>
							
						</td>
						<td>
							
						</td>
						<td>
            2 jam setelah makan: 100-150 mg/dl
						</td>
					</tr>
          </tr>
					<tr class="table-danger">
						<td>
							6
						</td>
						<td>
							
						</td>
						<td>
							
						</td>
						<td>
            Sewaktu/acak : 70-125 mg/dl
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</form>
</body>
</html>