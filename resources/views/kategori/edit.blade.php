@extends('layouts.app')
{{-- Customize layout section --}}
@section('subtitle','Kategori')
@section('content_header_title','Kategori')
@section('content_header_subtitle','Edit')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ubah Kategori</h3>
            </div>
            
            <form method="POST" action="{{ route('kategori.update', $data->kategori_id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="kategori_kode">Kode Kategori</label>
                        <input type="text" class="form-control" id="kategori_kode" name="kategori_kode" value="{{ $data->kategori_kode }}">
                    </div>
                    <div class="form-group">
                        <label for="kategori_nama">Nama Kategori</label>
                        <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" value="{{ $data->kategori_nama }}">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('/kategori') }}" class="btn btn-secondary">Kembali</a>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection