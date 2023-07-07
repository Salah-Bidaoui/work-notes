<?php require('views/partials/head.php') ?>

<header>
    <?php require('views/partials/nav.php') ?>
</header>

<!-- Begin page content -->
<main role="main" class="container py-5">
    <h1 class="mt-5">My Note</h1>
    <ul>
        <li> <?= $note[0]['body']  ?></li>
    </ul>
</main>

<?php require('views/partials/footer.php') ?>
