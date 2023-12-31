<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Notes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class=" <?= urlIs('/projects/php/notes/index.php') ? 'nav-link active' : 'nav-link' ?>" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="<?= $_SERVER['REQUEST_URI'] === '/projects/php/notes/about.php' ? 'nav-link active' : 'nav-link' ?>" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="<?= $_SERVER['REQUEST_URI'] === '/projects/php/notes/contact.php' ? 'nav-link active' : 'nav-link' ?>" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="<?= $_SERVER['REQUEST_URI'] === '/projects/php/notes/notes.php' ? 'nav-link active' : 'nav-link' ?>" href="/notes">Notes</a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
