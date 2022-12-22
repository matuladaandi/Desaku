<!DOCTYPE html>
<html lang="en">
<head>
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Data Warga</title>
</head>
<body>
    <h1 class="h2">Data Warga</h1>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIK</th>
              <th scope="col">Nama</th>
              <th scope="col">TTL</th>
              <th scope="col">J. Kelamin</th>
              <th scope="col">Alamat</th>
              <th scope="col">Agama</th>
              <th scope="col">Sts Perkawinan</th>
              <th scope="col">Pekerjaan</th>
              <th scope="col">Kewarganegaraan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warga as $item)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->ttl }}</td>
                <td>{{ $item->j_klmn }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->agama }}</td>
                <td>{{ $item->sts_perkawinan }}</td>
                <td>{{ $item->pekerjaan }}</td>
                <td>{{ $item->warganegara }}</td>
                </tr>   
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        window.print();
    </script>
</body>
</html>