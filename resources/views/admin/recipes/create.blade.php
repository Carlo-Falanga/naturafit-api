@extends('layouts.admin')

@section('content')

    {{-- breadcrumb + titolo --}}
    <div class="mb-4">
        <div class="mb-1">
            <a href="{{ route('admin.recipes.index') }}" class="text-success text-decoration-none">Ricette</a>
            <span class="text-muted">/ Nuova</span>
        </div>
        <h1 class="fw-bold mb-0">Crea ricetta</h1>
    </div>

    <form action="{{ route('admin.recipes.store') }}" method="POST">
        @csrf

        {{-- dati base --}}
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="fw-bold mb-4">Dati base</h5>

                <div class="row g-3">
                    <div class="col-md-8">
                        <label for="title" class="form-label">Nome ricetta</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Es. Bowl di salmone e avocado" value="{{ old('title') }}">
                    </div>

                    <div class="col-md-4">
                        <label for="category_id" class="form-label">Categoria</label>
                        <select name="category_id" id="category_id" class="form-select">
                            <option value="">— Seleziona —</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" class="form-control" rows="2"
                            placeholder="Breve descrizione del piatto...">{{ old('description') }}</textarea>
                    </div>

                    <div class="col-md-3">
                        <label for="servings" class="form-label">Porzioni</label>
                        <input type="number" name="servings" id="servings" class="form-control"
                            value="{{ old('servings') }}">
                    </div>

                    <div class="col-md-3">
                        <label for="prep_time" class="form-label">Prep (min)</label>
                        <input type="number" name="prep_time" id="prep_time" class="form-control"
                            value="{{ old('prep_time') }}">
                    </div>

                    <div class="col-md-3">
                        <label for="cook_time" class="form-label">Cottura (min)</label>
                        <input type="number" name="cook_time" id="cook_time" class="form-control"
                            value="{{ old('cook_time') }}">
                    </div>

                    <div class="col-md-3">
                        <label for="difficulty" class="form-label">Difficoltà</label>
                        <select name="difficulty" id="difficulty" class="form-select">
                            <option value="">— Seleziona —</option>
                            <option value="facile" @selected(old('difficulty') == 'facile')>Facile</option>
                            <option value="media" @selected(old('difficulty') == 'media')>Media</option>
                            <option value="difficile" @selected(old('difficulty') == 'difficile')>Difficile</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        {{-- immagine --}}
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="fw-bold mb-4">Immagine</h5>

                <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <div class="bg-success-subtle text-success d-flex align-items-center justify-content-center rounded"
                            style="height: 130px;">
                            Anteprima
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="image" class="form-label">Foto del piatto (URL)</label>
                        <input type="text" name="image" id="image" class="form-control"
                            placeholder="https://..." value="{{ old('image') }}">
                        <div class="form-text">Inserisci il link dell'immagine (JPG o PNG).</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- valori nutrizionali --}}
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="fw-bold mb-4">Valori nutrizionali <small class="text-muted fw-normal">(per porzione)</small></h5>

                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="calories" class="form-label">Calorie</label>
                        <div class="input-group">
                            <input type="number" name="calories" id="calories" class="form-control"
                                value="{{ old('calories') }}">
                            <span class="input-group-text">kcal</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="protein" class="form-label">Proteine</label>
                        <div class="input-group">
                            <input type="number" step="0.01" name="protein" id="protein" class="form-control"
                                value="{{ old('protein') }}">
                            <span class="input-group-text">g</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="carbs" class="form-label">Carboidrati</label>
                        <div class="input-group">
                            <input type="number" step="0.01" name="carbs" id="carbs" class="form-control"
                                value="{{ old('carbs') }}">
                            <span class="input-group-text">g</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="fats" class="form-label">Grassi</label>
                        <div class="input-group">
                            <input type="number" step="0.01" name="fats" id="fats" class="form-control"
                                value="{{ old('fats') }}">
                            <span class="input-group-text">g</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="fiber" class="form-label">Fibre</label>
                        <div class="input-group">
                            <input type="number" step="0.01" name="fiber" id="fiber" class="form-control"
                                value="{{ old('fiber') }}">
                            <span class="input-group-text">g</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="sugar" class="form-label">Zuccheri</label>
                        <div class="input-group">
                            <input type="number" step="0.01" name="sugar" id="sugar" class="form-control"
                                value="{{ old('sugar') }}">
                            <span class="input-group-text">g</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- istruzioni --}}
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="fw-bold mb-4">Istruzioni</h5>
                <textarea name="instructions" id="instructions" class="form-control" rows="4"
                    placeholder="Passaggi di preparazione...">{{ old('instructions') }}</textarea>
            </div>
        </div>

        {{-- tag --}}
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="fw-bold mb-4">Tag</h5>
                @foreach ($tags as $tag)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                            id="tag-{{ $tag->id }}" class="form-check-input"
                            @checked(in_array($tag->id, old('tags', [])))>
                        <label class="form-check-label" for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">Salva</button>
            <a href="{{ route('admin.recipes.index') }}" class="btn btn-outline-secondary">Annulla</a>
        </div>
    </form>

@endsection
