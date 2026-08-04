@extends('layouts.admin')

@section('content')

    <div class="mb-4">
        <div class="mb-1">
            <a href="{{ route('admin.tags.index') }}" class="text-success text-decoration-none">Tag</a>
            <span class="text-muted">/ Nuovo</span>
        </div>
        <h1 class="fw-bold mb-0">Crea tag</h1>
    </div>

    <x-name-form :action="route('admin.tags.store')" :back="route('admin.tags.index')" placeholder="Es. Vegano" />

@endsection
