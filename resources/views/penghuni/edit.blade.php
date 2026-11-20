@extends('layouts.app')

@section('title', 'Edit Penghuni')
@section('judul', 'Edit Data Penghuni')

@section('content')
<div class="table-container">
    <form action="{{ route('penghuni.update', $penghuni) }}" method="POST" class="form-penghuni">
        @method('PUT')
        @include('penghuni._form')
    </form>
</div>
@endsection