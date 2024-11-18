<div class="navbar bg-base-100 shadow-lg sticky top-0 z-50">
    <!-- Logo e Menu Mobile -->
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="/" class="{{request()->is('/') ? 'active' : ''}}">Home</a></li>
                <li>
                    <a class="{{request()->is('prodotti*') ? 'active' : ''}}">
                        Prodotti
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <ul class="p-2 bg-base-100">
                        <li><a href="/prodotti/erbe-medicinali">Erbe Medicinali</a></li>
                        <li><a href="/prodotti/oli-essenziali">Oli Essenziali</a></li>
                        <li><a href="/prodotti/integratori">Integratori</a></li>
                    </ul>
                </li>
                <li><a href="/chi-siamo" class="{{request()->is('chi-siamo') ? 'active' : ''}}">Chi Siamo</a></li>
                <li><a href="/contatti" class="{{request()->is('contatti') ? 'active' : ''}}">Contatti</a></li>
            </ul>
        </div>
        <a href="/" class="normal-case font-ff text-xl">
            <span class="text-primary font-bold">Vita</span>Healx
        </a>
    </div>

    <!-- Menu Desktop -->
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/" class="{{request()->is('/') ? 'active' : ''}}">Home</a></li>
            <li>
                <details>
                    <summary class="{{request()->is('prodotti*') ? 'active' : ''}}">Prodotti</summary>
                    <ul class="p-2 bg-base-100 rounded-t-none">
                        @foreach ($categories as $category)
                            <li><a href="/prodotti/{{ $category->name }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </details>
            </li>
            <li><a href="/chi-siamo" class="{{request()->is('chi-siamo') ? 'active' : ''}}">Chi Siamo</a></li>
            <li><a href="/contatti" class="{{request()->is('contatti') ? 'active' : ''}}">Contatti</a></li>
        </ul>
    </div>

    <!-- Azioni Utente -->
    <div class="navbar-end">
        <div class="flex items-center gap-2">
            <!-- Cerca -->
            <button class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
            
            <!-- Carrello -->
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="badge badge-sm indicator-item">0</span>
                    </div>
                </label>
                <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                    <div class="card-body">
                        <span class="font-bold text-lg">0 Prodotti</span>
                        <span class="text-info">Totale: €0</span>
                        <div class="card-actions">
                            <a href="/carrello" class="btn btn-primary btn-block">Vai al Carrello</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account -->
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://ui-avatars.com/api/?name={{ Auth::check() ? Auth::user()->name : 'Guest' }}" />
                    </div>
                </label>
                @guest
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Registrati</a></li>
                    </ul>
                @endguest
                @auth
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="/profilo">Profilo</a></li>
                        <li><a href="/ordini">I miei ordini</a></li>
                        <li><a href="/impostazioni">Impostazioni</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                @endauth
            </div>
        </div>
    </div>
</div>