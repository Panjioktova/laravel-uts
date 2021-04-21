<span class="d-block p-2 bg-success text-dark">
    <h3>Tambah Data Surat Keluar</h3>
</span>
<div class="card border-light">
<style>
    h3 {
        font-family: arial, sans-tanggalf;
        position: relative;
        text-align: center;
    }
    form {
        position: relative;
    }
</style>
<div class="card-body">
<div class="container">
<form action="simpan-surat" method="POST" >
    <div class="form-group">
        <label for="nomor_surat">Nomor Surat : </label>
        <input class="form-control" type="text" name="nomor_surat" id="nomor_surat">
    </div>
    <div class="form-group">
        <label for="tanggal_surat">Tanggal Surat : </label>
        <input class="form-control" type="text" name="tanggal_surat" id="tanggal_surat">
    </div>
    <div class="form-group">
        <label for="judul_surat">Judul Surat: </label>
        <input class="form-control" type="text" name="judul_surat" id="judul_surat">
    </div>
    <input class="btn btn-success" type="submit" value="Simpan"><br>
</form>
</div>
</div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

