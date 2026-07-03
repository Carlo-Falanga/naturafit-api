@extends('layouts.admin')

@section('content')

    @php
        $recipes = \App\Models\Recipe::with('category')->latest()->get();
        $totRecipes = \App\Models\Recipe::count();
        $totCategories = \App\Models\Category::count();
        $totTags = \App\Models\Tag::count();
        $mediaKcal = round(\App\Models\Recipe::avg('calories'));
    @endphp

    {{-- intestazione --}}
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <h1 class="fw-bold mb-0">Dashboard</h1>
            <p class="text-muted mb-0">Panoramica del catalogo ricette</p>
        </div>
        <a href="{{ route('admin.recipes.create') }}" class="btn btn-success">+ Nuova ricetta</a>
    </div>

    {{-- card statistiche --}}
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="text-muted text-uppercase small">Ricette</div>
                    <div class="display-6 fw-bold text-success">{{ $totRecipes }}</div>
                    <div class="text-muted small">pubblicate</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="text-muted text-uppercase small">Categorie</div>
                    <div class="display-6 fw-bold text-success">{{ $totCategories }}</div>
                    <div class="text-muted small">attive</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="text-muted text-uppercase small">Tag</div>
                    <div class="display-6 fw-bold text-success">{{ $totTags }}</div>
                    <div class="text-muted small">in anagrafica</div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="text-muted text-uppercase small">Media kcal</div>
                    <div class="display-6 fw-bold text-success">{{ $mediaKcal }}</div>
                    <div class="text-muted small">per porzione</div>
                </div>
            </div>
        </div>
    </div>

    {{-- ricette recenti --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0">Ricette recenti</h5>
            <a href="{{ route('admin.recipes.index') }}" class="btn btn-sm btn-outline-success">Vedi tutte</a>
        </div>
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>kcal</th>
                        <th>Macro (P/C/G)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recipes as $recipe)
                        <tr>
                            <td>{{ $recipe->title }}</td>
                            <td>
                                <span class="badge text-bg-light">{{ $recipe->category?->name ?? '—' }}</span>
                            </td>
                            <td>
                                <span class="badge bg-success rounded-pill">{{ $recipe->calories }}</span>
                            </td>
                            <td class="text-muted">
                                P {{ $recipe->protein }}g · C {{ $recipe->carbs }}g · G {{ $recipe->fats }}g
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
