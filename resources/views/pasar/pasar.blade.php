@extends('layouts.master')
@section('title', 'Master Pasar | FindPeken')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pasar</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Data Pasar</li>
        </ol>
        <div class="card-header">
            <a class="btn btn-primary float-right" type="button" href="#" data-toggle="collapse"
                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-plus-square"></i> Tambah
            </a>
        </div>
        @include('pasar.addpasar')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Master Data Pasar
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="example2" width="100%"
                                cellspacing="0">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Alamat</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td>{{$value->pasar_nama}}</td>
                                        <td>{{$value->pasar_deskripsi}}</td>
                                        <td>{{$value->pasar_alamat}}</td>
                                        <td>{{$value->latitude}} </td>
                                        <td>{{$value->longitude}}</td>
                                        {{-- <td>{{$value->pasar_status}}</td> --}}
                                        <td class="text-center">
                                            <a class="btn-outline-primary btn-sm"
                                                href="{{ URL::to('/')}}/pasar/edit/{{$value->pasar_id}}"
                                                role="button"><i class="far fa-edit edit"></i></a>|<a
                                                class="btn-outline-danger btn-sm delete pasar" href="#" role="button"
                                                id="{{$value->pasar_id}}" role="button"><i
                                                    class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection