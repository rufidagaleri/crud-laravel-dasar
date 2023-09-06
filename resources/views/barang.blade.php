<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center my-5">
        <h1>Belajar Crud Laravel</h1>
        <form action="/barang" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                <input type="text" name="barang" class="" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
                <select name="jenis" id="">
                    <option value="snack">Snack</option>
                    <option value="minuman">Minuman</option>
                </select>
                <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                <input type="text" name="jumlah_barang" class="" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
                <input type="text" name="harga_barang" class="" id="exampleInputEmail1" aria-describedby="emailHelp">
                <button type="submit" class="btn btn-success">Tambah Barang</button>
            </div>
        </form>
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Stok</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $data as $isi)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$isi->nama_barang}}</td>
                        <td>{{$isi->harga_barang}}</td>
                        <td>{{$isi->jumlah_stok}}</td>
                        <td>{{$isi->harga_barang*$isi->jumlah_stok}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-dark">Ubah</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
