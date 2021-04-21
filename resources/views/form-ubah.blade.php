<h1 style="text-align: center">Ubah Data</h1>
<style>
    h1 {
        font-family: arial, sans-serif;
        position: relative;
        left: 20px;
    }
    form {
        position: relative;
        left: 20px;
    }
</style>
<div class="container">
<form action="/ubah" method="POST" >
<div class="form-group">
        <label for="nopol">No. Polisi : </label>
        <input class="form-control" type="text" name="nopol" id="nopol" value="{{ $data[0]->nopol }}">
    </div>
    <div class="form-group">
        <label for="merk">Merk : </label>
        <input class="form-control" type="text" name="merk" id="merk" value="{{ $data[0]->merk }}">
    </div>
    <div class="form-group">
        <label for="tipe">Tipe : </label>
        <input class="form-control" type="text" name="tipe" id="tipe" value="{{ $data[0]->tipe }}">
    </div>
    <input type="hidden" value="{{ $data[0]->id }}" id="id" name="id">
    <input class="btn btn-success" type="submit" value="Simpan"><br>
</form>
</div>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

