@extends('layouts.admin')

@section('content')

    <div class="mb-4">
        <div class="mb-1">
            <a href="{{ route('admin.categories.index') }}" class="text-success text-decoration-none">Categorie</a>
            <span class="text-muted">/ Nuova</span>
        </div>
        <h1 class="fw-bold mb-0">Crea categoria</h1>
    </div>

    <x-name-form :action="route('admin.categories.store')" :back="route('admin.categories.index')"
        placeholder="Es. Colazione" />

@endsection
