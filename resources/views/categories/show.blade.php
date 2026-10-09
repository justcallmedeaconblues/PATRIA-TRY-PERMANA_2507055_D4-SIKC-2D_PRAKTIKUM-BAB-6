@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Detail Kategori</h2>

    <div class="card">
        <div class="card-body">
            <h5>ID Laporan: {{ $category->id }}</h5>
            <h5>Nama Laporan : {{ $category->name }}</h5>
            <h5>Deskripsi : {{ $category->description ?? '-' }}</h5>
            
            <p class="text-muted mb-0">
                Dibuat : {{ $category->created_at }}
            </p>
        </div>
    </div>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
