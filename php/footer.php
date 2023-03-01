<div class="container">
<div class="row text-center">
<?php Theme::plugins('siteSidebar') ?>
<nav class="navbar p-3">
<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
<a class="nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo $label; ?></a><?php endforeach; ?>
<?php if (Theme::rssUrl()): ?>
<a class="nav-link" href="<?php echo Theme::rssUrl() ?>" target="_blank">RSS</a>
</li>
<?php endif; ?>
</nav>
</div>
</div>
<footer class="footer mt-5">
<div class="container-fluid">
<p class="m-0 text-center p-1">
<?php echo $site->footer(); ?><br/><small><a href="<?php echo Theme::siteUrl(); ?>"><?php if ($site->logo()): ?><img class="img-fluid rounded-circle" width="20" height="20" alt="<?php echo $site->title(); ?>" src="<?php echo $site->logo(); ?>"/><?php endif ?> <?php echo $site->title(); ?></a> <a href="https://bludit.com" target="_blank"><img class="img-fluid" width="20" height="20" alt="<?php echo $site->title(); ?>" src="<?php echo Theme::siteUrl(); ?>/bl-themes/space/img/favicon.png"/>Bludit</a> develope by <a target="_blank" href="https://www.fiverr.com/creativitas/design-your-website-with-phyton-django">Creativitas</a></small></p>
</div>
</footer>