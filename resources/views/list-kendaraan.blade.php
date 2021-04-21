<h1 style="text-align: center">Daftar Kendaraan</h1>
<div class="container">
<a class="btn btn-primary" style="position: relative; left: 20px;" href="/tambah-kendaraan">Tambah</a> <br><br>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width:50%;
      text-align: center;
    }
    </style>
  
    <table class="table" >
  <thead class="thead-dark">
    <tr>
    <th>NO Kendaraan</th>
    <th>Merk</th>
    <th>Tipe</th>
    <th>ACTION</th>
    </tr>
  </thead>
    @if (empty($data))
        <tr>
            <td colspan="3">Datanya Kosong</td>
        </tr>
    @endif
        @foreach($data as $i)
        <tbody>
        <tr>
            <td>{{ $i->nopol }}</td> 
            <td>{{ $i->merk }}</td> 
            <td>{{ $i->tipe }}</td>
            <td>
                <a class="btn btn-warning" href="/ubah/{{$i->id}}">Edit</a>
                <a class="btn btn-danger" href="/hapus/{{$i->id}}">Hapus</a>
            </td>
        </tr>
        </tbody>
        @endforeach
  </table>
    </div>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  