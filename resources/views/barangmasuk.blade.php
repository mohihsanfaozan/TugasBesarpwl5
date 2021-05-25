@extends('adminlte::page')

@section('title', 'barang masuk')

@section('content_header')
<center>
<h1>BARANG MASUK</h1>
</center>
    
@stop

@section('content')
    <div class="container">
        <div class="row justifly-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">{{ __('  ') }}</div> -->

                    <div class="card-body">
                    <a href="{{ route('print_barangmasuk') }}" target="_blank" class="btn btn-secondary float-right"><i class="fa fa-print"></i> Cetak PDF</a>
                        <hr/>
                        <hr/>
                        <table id="table-data" class="table table-borderer">
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
                                @foreach($barangmasuks as $barangmasuk)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $barangmasuk->name }}</td>
                                        <td>{{ $barangmasuk->qty }}</td>
                                        <td>{{ $barangmasuk->created_at}}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        
    </script>
@stop 