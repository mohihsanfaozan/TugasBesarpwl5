<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center">Data Barang</h1>
    <p class="text-center">Laporan Data Barang Tahun 2021 </p>
    <br/>
    <table id="table-data" class="table table-bordered">
    <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>QTY</th>
                                    <th>TANGGAL MASUK</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($barangmasuk as $barangmasuk)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $barangmasuk->name }}</td>
                                        <td>{{ $barangmasuk->qty }}</td>
                                        <td>{{ $barangmasuk->created_at}}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
    </table>
</body>
</html>    