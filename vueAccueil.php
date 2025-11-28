<?php $titre = 'Mon Blog'; ?>
<?php ob_start(); ?>
<?php foreach ($billets as $billet): ?>
<article>
<header>
<header class="major"><h2><?= $billet['titre'] ?></h2></header>
<time><?= $billet['date'] ?></time>
</header>
<p><?= $billet['contenu'] ?></p>
</article>
<hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>