<?php $titre = 'Mon Blog'; ?>
<?php ob_start(); ?>
<?php foreach ($billets as $billet): ?>
<article>
    <header>
        <a href="<?= 'index.php?action=billet&id=' . $billet['id'] ?>">
            <header class="major"><h2><?= $billet['titre'] ?></h2></header>
        </a>
        <time><?= $billet['date'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
</article>
<hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>