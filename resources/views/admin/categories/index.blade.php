@extends('layouts.admin')

@section('content')

    {{-- intestazione pagina --}}
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <h1 class="fw-bold mb-0">Categorie</h1>
            <p class="text-muted mb-0">{{ $categories->count() }} categorie</p>
        </div>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-success">
            + Crea nuova
        </a>
    </div>

    {{-- messaggio di errore --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Chiudi"></button>
        </div>
    @endif

    {{-- tabella categorie --}}
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ricette</th>
                        <th class="text-end">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="fw-semibold">{{ $category->name }}</td>
                            <td>
                                <span class="badge text-bg-light">{{ $category->recipes_count }}</span>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.categories.edit', $category) }}"
                                    class="btn btn-sm btn-outline-success">
                                    Modifica
                                </a>

                                @if ($category->recipes_count > 0)
                                    <button class="btn btn-sm btn-outline-danger" disabled
                                        title="Non eliminabile: {{ $category->recipes_count }} {{ $category->recipes_count === 1 ? 'ricetta collegata' : 'ricette collegate' }}">
                                        Elimina
                                    </button>
                                @else
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $category->id }}">
                                        Elimina
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- modali di conferma eliminazione --}}
    @foreach ($categories as $category)
        @if ($category->recipes_count === 0)
            <x-delete-modal id="deleteModal-{{ $category->id }}"
                :action="route('admin.categories.destroy', $category)" name="la categoria {{ $category->name }}" />
        @endif
    @endforeach

@endsection
