<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">List Masyarakat</h5>
        <p class="card-text">Berikut merupakan list masyarakat yang daftar vaksin</p>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nomor Daftar</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Nama Belakang</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Operasi</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($masyarakats as $masyarakat)
                    <tr>
                        <td>{{ $masyarakat->noDaftar }}</td>
                        <td>{{ $masyarakat->namaDepan }}</td>
                        <td>{{ $masyarakat->namaBelakang }}</td>
                        <td>{{ $masyarakat->umur }}</td>
                        <td>{{ $masyarakat->alamat }}</td>
                        <td>{{ $masyarakat->noTelp }}</td>
                        <td>
                            <div class="#">
                                <a href="{{ url('/edit/' . $masyarakat->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ url('/show/' . $masyarakat->id) }}" class="btn btn-sm btn-info">Detail</a>
                            </div>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
