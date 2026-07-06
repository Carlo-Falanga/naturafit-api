@extends('layouts.admin')

@section('content')

    {{-- breadcrumb + titolo --}}
    <div class="mb-4">
        <div class="mb-1">
            <a href="{{ route('admin.recipes.index') }}" class="text-success text-decoration-none">Ricette</a>
            <span class="text-muted">/ {{ $recipe->title }}</span>
        </div>
        <h1 class="fw-bold mb-0">{{ $recipe->title }}</h1>
    </div>

    {{-- immagine + dati base --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="row g-4">
                <div class="col-md-4">
                    @if ($recipe->image)
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}"
                            class="img-fluid rounded w-100" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="bg-success-subtle text-success d-flex align-items-center justify-content-center rounded"
                            style="height: 200px;">
                            Nessuna immagine
                        </div>
                    @endif
                </div>

                <div class="col-md-8">
                    <span class="badge text-bg-light mb-2">{{ $recipe->category?->name ?? '—' }}</span>
                    <p>{{ $recipe->description }}</p>

                    <ul class="list-unstyled mb-0">
                        <li><strong>Porzioni:</strong> {{ $recipe->servings }}</li>
                        <li><strong>Preparazione:</strong> {{ $recipe->prep_time }} min</li>
                        <li><strong>Cottura:</strong> {{ $recipe->cook_time }} min</li>
                        <li><strong>Difficoltà:</strong> {{ $recipe->difficulty }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- valori nutrizionali --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <h5 class="fw-bold mb-4">Valori nutrizionali <small class="text-muted fw-normal">(per porzione)</small></h5>
            <ul class="list-unstyled mb-0">
                <li><strong>Calorie:</strong> {{ $recipe->calories }} kcal</li>
                <li><strong>Proteine:</strong> {{ $recipe->protein }} g</li>
                <li><strong>Carboidrati:</strong> {{ $recipe->carbs }} g</li>
                <li><strong>Grassi:</strong> {{ $recipe->fats }} g</li>
                <li><strong>Fibre:</strong> {{ $recipe->fiber }} g</li>
                <li><strong>Zuccheri:</strong> {{ $recipe->sugar }} g</li>
            </ul>
        </div>
    </div>

    {{-- istruzioni --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <h5 class="fw-bold mb-4">Istruzioni</h5>
            <p class="mb-0">{{ $recipe->instructions }}</p>
        </div>
    </div>

    {{-- tag --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <h5 class="fw-bold mb-4">Tag</h5>
            @foreach ($recipe->tags as $tag)
                <span class="badge text-bg-success">{{ $tag->name }}</span>
            @endforeach
        </div>
    </div>

    <div class="d-flex gap-2">
        <a href="{{ route('admin.recipes.edit', $recipe) }}" class="btn btn-success">Modifica</a>
        <a href="{{ route('admin.recipes.index') }}" class="btn btn-outline-secondary">Torna indietro</a>
    </div>

@endsection
