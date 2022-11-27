<div class="detail">
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
                        <th scope="col">Nomor KK</th>
                        <th scope="col">Nomor NIK</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Operasi</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $masyarakat->noDaftar }}</td>
                        <td>{{ $masyarakat->namaDepan }}</td>
                        <td>{{ $masyarakat->namaBelakang }}</td>
                        <td>{{ $masyarakat->noKK }}</td>
                        <td>{{ $masyarakat->noNIK }}</td>
                        <td>{{ $masyarakat->umur }}</td>
                        <td>{{ $masyarakat->alamat }}</td>
                        <td>{{ $masyarakat->noTelp }}</td>
                        <td>
                            <div>
                                <form action="{{ url('delete', $masyarakat->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $masyarakat->id }}">
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
