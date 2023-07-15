@extends('layout.admin.admin')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($kategori_produk as $k)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $k->nama }}</td>
                            <!--- nama_kategori diambil dari join yang ada di controller produk yang sudah dibuatkan join -->
                        </tr>
                        @php $no++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection