<header>
    <div class="topbar">
        <div class="container d-flex">
            <nav class="menu left">
                <ul class="d-flex">
                    <li>
                        <a href="{{ route('donna') }}">Donna</a>
                    </li>
                    <li>
                        <a href="{{ route('uomo') }}">Uomo</a>
                    </li>
                    <li>
                        <a href="{{ route('bambini') }}">Bambini</a>
                    </li>
                </ul>
            </nav>

            <div class="logo">
                {{-- <img src="/img/boolean-logo.png" alt="Booleando Logo" /> --}}
            </div>

            <div class="menu right">
                <nav>
                    <ul class="d-flex">
                        {{-- <li v-for="(item, index) in icons" :key="index">
                            <a :href="item.link" v-html="item.pic"></a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
