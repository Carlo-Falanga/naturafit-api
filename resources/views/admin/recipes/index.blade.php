@extends('layouts.admin')

@section('content')

    {{-- intestazione pagina --}}
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <h1 class="fw-bold mb-0">Ricette</h1>
            <p class="text-muted mb-0">{{ $recipes->count() }} ricette nel catalogo</p>
        </div>

        <a href="{{ route('admin.recipes.create') }}" class="btn btn-success text-nowrap">+ Crea nuova</a>
    </div>

    {{-- tabella ricette --}}
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Tempo</th>
                        <th>kcal</th>
                        <th class="text-end">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recipes as $recipe)
                        <tr>
                            {{-- nome + immagine + tag --}}
                            <td>
                                <div class="d-flex align-items-center">
                                    @if ($recipe->image)
                                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}"
                                            class="rounded me-3" style="width: 48px; height: 48px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded me-3" style="width: 48px; height: 48px;"></div>
                                    @endif

                                    <div>
                                        <div class="fw-semibold">{{ $recipe->title }}</div>
                                        <small class="text-muted">
                                            {{ $recipe->tags->pluck('name')->join(', ') }}
                                        </small>
                                    </div>
                                </div>
                            </td>

                            {{-- categoria --}}
                            <td>
                                <span class="badge text-bg-light">{{ $recipe->category?->name ?? '—' }}</span>
                            </td>

                            {{-- tempo --}}
                            <td>{{ $recipe->prep_time + $recipe->cook_time }} min</td>

                            {{-- calorie --}}
                            <td>
                                <span class="badge bg-success rounded-pill">{{ $recipe->calories }} kcal</span>
                            </td>

                            {{-- azioni --}}
                            <td class="text-end">
                                <a href="{{ route('admin.recipes.edit', $recipe) }}"
                                    class="btn btn-sm btn-outline-success">Modifica</a>

                                <form action="{{ route('admin.recipes.destroy', $recipe) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
