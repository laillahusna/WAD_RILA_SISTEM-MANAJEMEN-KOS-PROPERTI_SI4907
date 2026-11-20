@extends('layouts.app')

@section('title', 'Tambah Penghuni')
@section('judul', 'Form Penghuni Baru')
@section('subjudul', 'Isi data pribadi penghuni baru.')

@section('content')
<div class="kotak-form">
    <form action="{{ route('penghuni.store') }}" method="POST">
        @include('penghuni._form')
    </form>
</div>
@endsection
