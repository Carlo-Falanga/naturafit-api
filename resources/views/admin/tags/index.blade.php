@extends('layouts.admin')

@section('content')

    {{-- intestazione pagina --}}
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <h1 class="fw-bold mb-0">Tag</h1>
            <p class="text-muted mb-0">{{ $tags->count() }} tag</p>
        </div>
        <a href="{{ route('admin.tags.create') }}" class="btn btn-success">
            + Crea nuovo
        </a>
    </div>

    {{-- tabella tag --}}
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
                    @foreach ($tags as $tag)
                        <tr>
                            <td class="fw-semibold">{{ $tag->name }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.tags.edit', $tag) }}"
                                    class="btn btn-sm btn-outline-success">
                                    Modifica
                                </a>

                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Sei sicuro di voler eliminare il tag?')">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
