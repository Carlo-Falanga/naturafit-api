@props([
    'id',
    'title',
    'action',
    'method' => 'POST',
    'value' => '',
    'placeholder' => '',
])

<div class="modal fade" id="{{ $id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ $action }}" method="POST">
                @csrf
                
                @if ($method !== 'POST')
                    @method($method)
                @endif

                <div class="modal-header">
                    <h5 class="modal-title">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <label for="name-{{ $id }}" class="form-label">Nome</label>
                    <input type="text" name="name" id="name-{{ $id }}" class="form-control"
                        value="{{ old('name', $value) }}" placeholder="{{ $placeholder }}">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annulla</button>
                    <button type="submit" class="btn btn-success">Salva</button>
                </div>
            </form>
        </div>
    </div>
</div>
