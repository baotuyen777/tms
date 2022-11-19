<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/" class="nav-link {{request()->is('/')?'active': ''}}">home</a>
            </li>
            <li class="nav-item">
                <a href="about" class="nav-link">about</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">link1</a>
            </li>
        </ul>
    </div>
</nav>
