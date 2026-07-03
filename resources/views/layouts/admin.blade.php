<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NaturaFit - Admin</title>

    @vite(['resources/js/app.js'])
</head>

<body class="bg-body-tertiary">
    <div class="container-fluid">
        <div class="row">

            {{-- sidebar --}}
            <aside class="col-md-3 col-lg-2 bg-white border-end vh-100 p-3">

                {{-- logo --}}
                <div class="d-flex align-items-center mb-4">
                    <span class="bg-success text-white fw-bold rounded d-flex align-items-center justify-content-center me-2"
                        style="width: 32px; height: 32px;">N</span>
                    <span class="fs-5 fw-bold">NaturaFit</span>
                </div>

                {{-- link di navigazione --}}
                <div class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}"
                        class="list-group-item list-group-item-action border-0 rounded {{ request()->routeIs('dashboard') ? 'list-group-item-success fw-semibold' : '' }}">
                        Dashboard
                    </a>

                    <a href="{{ route('admin.recipes.index') }}"
                        class="list-group-item list-group-item-action border-0 rounded {{ request()->routeIs('admin.recipes.*') ? 'list-group-item-success fw-semibold' : '' }}">
                        Ricette
                    </a>

                    <a href="{{ route('admin.categories.index') }}"
                        class="list-group-item list-group-item-action border-0 rounded {{ request()->routeIs('admin.categories.*') ? 'list-group-item-success fw-semibold' : '' }}">
                        Categorie
                    </a>

                    <a href="{{ route('admin.tags.index') }}"
                        class="list-group-item list-group-item-action border-0 rounded {{ request()->routeIs('admin.tags.*') ? 'list-group-item-success fw-semibold' : '' }}">
                        Tag
                    </a>
                </div>

                <hr>

                {{-- logout --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-link text-danger text-decoration-none px-3">Esci</button>
                </form>
            </aside>

            {{-- contenuto --}}
            <main class="col-md-9 col-lg-10 p-4">
                @yield('content')
            </main>

        </div>
    </div>
</body>

</html>
