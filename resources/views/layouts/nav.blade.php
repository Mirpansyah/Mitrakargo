<header class="{{ (request()->is('/')) ? 'header-isNot-active' : 'header-active' }}">
    <nav>
        <a href="/">
            <div class="nav_logo">
                <img src="img/logo.png" class="nav_logo__img" alt="logo mitrakargo" />
            </div>
        </a>
        <div class="nav__menu-bar">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </div>
        <ul class="nav_links">
            <li class="nav_links__underline">
                <a href="/#layanan">
                    Layanan
                </a>
            </li>
            <li class="nav_links__underline">
                <a href="/blog">
                    Blog
                </a>
            </li>
            <li class="nav_links__underline">
                <a href="/about">
                    Tentang Kami
                </a>
            </li>
            <li class="nav_links__underline">
                <a href="/contact">
                    Contact Us
                </a>
            </li>
        </ul>
    </nav>
</header>