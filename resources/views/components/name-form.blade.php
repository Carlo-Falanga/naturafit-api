@props([
    'action',
    'method' => 'POST',
    'value' => '',
    'placeholder' => '',
    'back',
])

<form action="{{ $action }}" method="POST">
    @csrf
    @method($method)

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $value }}"
                placeholder="{{ $placeholder }}">
        </div>
    </div>

    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-success">Salva</button>
        <a href="{{ $back }}" class="btn btn-outline-secondary">Annulla</a>
    </div>
</form>
