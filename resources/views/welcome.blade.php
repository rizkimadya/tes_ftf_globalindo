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
    @include('sweetalert::alert')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4 shadow border-0">
                    <p class="text-center">DATA MEMBER</p>
                    <form action="{{url('/')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Nomor Handphone</label>
                            <input type="number" class="form-control" name="no_hp" id="no_hp"
                                placeholder="Masukkan Nomor Handphone">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                placeholder="Masukkan Nama">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" style="width: 100%;" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" value="Islam" type="radio" name="agama"
                                        id="Islam" checked>
                                    <label class="form-check-label" for="Islam">
                                        Islam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="Kristen" type="radio" name="agama"
                                        id="Kristen">
                                    <label class="form-check-label" for="Kristen">
                                        Kristen
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="Hindu" type="radio" name="agama"
                                        id="Hindu">
                                    <label class="form-check-label" for="Hindu">
                                        Hindu
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="Budha" type="radio" name="agama"
                                        id="Budha">
                                    <label class="form-check-label" for="Budha">
                                        Budha
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hobby</label>
                            <div class="form-check">
                                <input class="form-check-input" value="Musik" type="checkbox" name="hobby[]"
                                    id="Musik" checked>
                                <label class="form-check-label" for="Musik">
                                    Musik
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Olahraga" type="checkbox" name="hobby[]"
                                    id="Olahraga">
                                <label class="form-check-label" for="Olahraga">
                                    Olahraga
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Kesenian" type="checkbox" name="hobby[]"
                                    id="Kesenian">
                                <label class="form-check-label" for="Kesenian">
                                    Kesenian
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Games" type="checkbox" name="hobby[]"
                                    id="Games">
                                <label class="form-check-label" for="Games">
                                    Games
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Otomotif" type="checkbox" name="hobby[]"
                                    id="Otomotif">
                                <label class="form-check-label" for="Otomotif">
                                    Otomotif
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Makan" type="checkbox" name="hobby[]"
                                    id="Makan">
                                <label class="form-check-label" for="Makan">
                                    Makan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Tidur" type="checkbox" name="hobby[]"
                                    id="Tidur">
                                <label class="form-check-label" for="Tidur">
                                    Tidur
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex gap-3">
                                <div class="w-100">
                                    <label class="form-label" for="tahun">Tahun</label>
                                    <select name="tahun" id="tahun" class="form-control">
                                        <option value="" selected disabled>Pilih Tahun</option>
                                    </select>
                                </div>
                                <div class="w-100">
                                    <label class="form-label" for="umur">Umur</label>
                                    <input type="text" value="" name="umur" id="umur"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="{{url('/member')}}" class="btn btn-warning">Cetak Data</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Ambil elemen select untuk tahun dan elemen input untuk umur berdasarkan ID
        const selectTahun = document.getElementById('tahun');
        const inputUmur = document.getElementById('umur');

        // Menghasilkan daftar tahun dari 2024 hingga 1980
        const currentYear = new Date().getFullYear();
        const startYear = 2024;
        const endYear = 1980;
        const years = [];

        for (let year = startYear; year >= endYear; year--) {
            years.push(year);
        }

        // Tambahkan opsi tahun ke dalam dropdown select
        years.forEach(year => {
            const option = document.createElement('option');
            option.value = year;
            option.text = year;
            selectTahun.appendChild(option);
        });

        // Tambahkan event listener untuk memantau perubahan pada select tahun
        selectTahun.addEventListener('change', () => {
            // Ambil nilai tahun yang dipilih dari select
            const tahunLahir = parseInt(selectTahun.value);

            // Dapatkan tahun saat ini
            const tahunSekarang = currentYear;

            // Hitung umur berdasarkan selisih tahun
            const umur = tahunSekarang - tahunLahir;

            // Masukkan nilai umur ke dalam input umur
            inputUmur.value = umur;
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
