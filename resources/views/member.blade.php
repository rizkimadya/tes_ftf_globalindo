<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TES WEB PT FTF GLOBALINDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4 border-0 shadow">
                    <p class="text-center">DAFTAR DATA MEMBER</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Hanphone</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Hobby</th>
                                <th scope="col">Tahun Lahir</th>
                                <th scope="col">Umur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($member as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>
                                        @php
                                            $hobbies = json_decode($item->hobby, true);
                                        @endphp

                                        @if (!empty($hobbies))
                                            <ul>
                                                @foreach ($hobbies as $hobby)
                                                    <li>{{ $hobby }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <span>Tidak ada hobby</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->tahun }}</td>
                                    <td>{{ $item->umur }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex gap-3">
                        <a href="{{ url('/') }}" class="btn btn-warning">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
