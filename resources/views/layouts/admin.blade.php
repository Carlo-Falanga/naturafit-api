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

    {{-- topbar --}}
    <nav class="navbar bg-white border-bottom d-md-none sticky-top">
        <div class="container-fluid">
            <button class="btn border-0 fs-3 p-0 lh-1" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-label="Apri menu">
                <i class="bi bi-list"></i>
            </button>
            <span class="fw-bold">NaturaFit</span>
            <span style="width: 24px;"></span>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            {{-- sidebar --}}
            <aside class="col-md-3 col-lg-2 bg-white border-end p-0">
                <div class="offcanvas-md offcanvas-start min-vh-100" tabindex="-1" id="sidebar">

                    {{-- logo + chiudi --}}
                    <div class="offcanvas-header border-bottom">
                        <div class="d-flex align-items-center">
                            <span class="bg-success text-white fw-bold rounded d-flex align-items-center justify-content-center me-2"
                                style="width: 32px; height: 32px;">N</span>
                            <span class="fs-5 fw-bold">NaturaFit</span>
                        </div>
                        <button type="button" class="btn-close d-md-none" data-bs-dismiss="offcanvas"
                            data-bs-target="#sidebar" aria-label="Chiudi"></button>
                    </div>

                    <div class="offcanvas-body d-flex flex-column p-3">

                        {{-- links --}}
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
                    </div>
                </div>
            </aside>

            {{-- contenuto --}}
            <main class="col-md-9 col-lg-10 p-4">
                @yield('content')
            </main>

        </div>
    </div>
</body>

</html>
