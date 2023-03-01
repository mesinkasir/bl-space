<div class="row">
<nav class="navbar">
<a class="nav-link text-white" href="<?php echo Theme::siteUrl(); ?>">Home</a>
<?php foreach ($staticContent as $staticPage): ?>
  <a class="nav-link text-white" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
  <?php endforeach ?>
</nav>
<div class="col-md-6 p-3  p-md-5 mt-3">
<?php if ($site->logo()): ?><img alt="<?php echo $site->title(); ?>" class="img-fluid rounded-circle" width="40" height="40" src="<?php echo $site->logo(); ?>"/> <?php endif ?>
<br/>
<h1 class="display-2"><strong><a href="<?php echo Theme::siteUrl(); ?>"><?php echo $site->title(); ?></a></strong></h1>
<h2><?php echo $site->description(); ?></h2>
</div>

<div class="col-md-6 p-3  p-md-5 text-center mt-3">
 <?php if ($site->logo()): ?>
 <img alt="<?php echo $site->title(); ?>" class="img-fluid rounded-circle" 
src="<?php echo $site->logo(); ?>"/> 
<?php endif ?>
</div>
</div>



