@extends('layouts.admin')

@section('content')

    <div class="mb-4">
        <div class="mb-1">
            <a href="{{ route('admin.tags.index') }}" class="text-success text-decoration-none">Tag</a>
            <span class="text-muted">/ Modifica</span>
        </div>
        <h1 class="fw-bold mb-0">Modifica tag</h1>
    </div>

    <x-name-form :action="route('admin.tags.update', $tag)" method="PUT" :value="$tag->name"
        :back="route('admin.tags.index')" />

@endsection
