<?php require('views/partials/head.php') ?>

<header>
    <?php require('views/partials/nav.php') ?>
</header>

<!-- Begin page content -->
<main role="main" class="container py-5">
    <h1 class="mt-5">My Notes</h1>

    <ul>
        <?php foreach ($notes as $note) : ?>
            <a href="/note?id=<?= $note['id'] ?>" class="text-blue">
                <li> <?= $note['body']  ?></li>
            </a>
        <?php endforeach; ?>
    </ul>
</main>

<?php require('views/partials/footer.php') ?>
