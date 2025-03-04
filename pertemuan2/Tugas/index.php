<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <H1>Form Nilai Siswa</H1> <br>
    <hr>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="nilai.php" method="get">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-4">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-4">
      <select id="matakuliah" name="matakuliah" class="custom-select">
        <option value="">-- pilih Mata Kuliah --</option>
        <option value="Dasar Dasar Pemograman">Dasar Dasar Pemograman</option>
        <option value="Pemograman Web">Pemograman Web</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Bahasa Inggris">Bahasa Inggris</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-4">
      <input id="nilaiuts" name="nilaiuts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-4">
      <input id="nilaiuas" name="nilaiuas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
                <label class="col-4 col-form-label" for="nilaiTugasPraktikum">Nilai Tugas/praktikum </label>
                <div class="col-4">
                <input class="form-control" name="nilaitugas" id="nilaiTugasPraktikum" type="number" placeholder="Nilai Tugas/praktikum " data-sb-validations="required" required />
                <div class="invalid-feedback" data-sb-feedback="nilaiTugasPraktikum:required">Nilai Tugas/praktikum is required.</div>
            </div>
          </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>