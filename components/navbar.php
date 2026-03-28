<header>
    <div class="logo">BestChoiceTires</div>
    <nav>
        <ul class="main-nav">
            <li><a href="#">Home</a></li>
            <li class="dropdown">
                <a href="#">Tires</a>
                <ul class="submenu">
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Sizes</a></li>
                    <li><a href="#">Condition</a></li>
                </ul>
            </li>
            <li><a href="#">Rims</a></li>
            <li><a href="#">Accesories</a></li>
            <li><a href="#">Services</a></li>
        </ul>
    </nav>
    <style>
        .main-nav { list-style:none; display:flex; gap:1rem; margin:0; padding:0; }
        .main-nav li { position:relative; }
        .submenu { display:none; position:absolute; top:100%; left:0; background:#333; border-radius:4px; padding:0.5rem 0; min-width:150px; list-style:none; margin:0; }
        .submenu li { padding:0; }
        .submenu li a { color:#fff; display:block; padding:0.4rem 0.8rem; text-decoration:none; }
        .dropdown:hover .submenu { display:block; }
    </style>
    <div>
        <input type="text" placeholder="Search tires...">
        <button>Search</button>
        <a href="#" style="color: white; margin-left: 1rem;">Cart (0)</a>
    </div>
</header>