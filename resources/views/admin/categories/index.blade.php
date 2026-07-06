@extends('layouts.admin')

@section('content')

    {{-- intestazione pagina --}}
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <h1 class="fw-bold mb-0">Categorie</h1>
            <p class="text-muted mb-0">{{ $categories->count() }} categorie</p>
        </div>
        {{-- apre la modale di creazione --}}
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
            + Crea nuova
        </button>
    </div>

    {{-- tabella categorie --}}
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th class="text-end">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="fw-semibold">{{ $category->name }}</td>
                            <td class="text-end">
                                {{-- apre la modale di modifica --}}
                                <button type="button" class="btn btn-sm btn-outline-success"
                                    data-bs-toggle="modal" data-bs-target="#editModal-{{ $category->id }}">
                                    Modifica
                                </button>

                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Elimina</button>
                                </form>
                            </td>
                        </tr>

                        {{-- modale modifica --}}
                        <x-name-modal id="editModal-{{ $category->id }}" title="Modifica categoria" method="PUT"
                            :action="route('admin.categories.update', $category)" :value="$category->name" />
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- modale creazione --}}
    <x-name-modal id="createModal" title="Nuova categoria"
        :action="route('admin.categories.store')" placeholder="Es. Colazione" />

@endsection
