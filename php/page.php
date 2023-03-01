<div class="container">
<div class="row">
<?php Theme::plugins('pageBegin'); ?>
<div class="col-md-5 p-3 p-md-5">
<?php if ($page->coverImage()): ?>
<img class="img-fluid rounded-circle mt-3 mb-3" width="100%" height="100%" alt="<?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>"/>
<?php endif ?>
</div>
<div class="col-md-7 p-3 p-md-5 mt-5">
<h3><strong><a class="p-1" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></strong></h3>
<?php if ($page->description()): ?>
<p class="lead"><?php echo $page->description(); ?></p>
<?php endif ?>
<?php echo $page->content(); ?>
</div>
<?php include(THEME_DIR_PHP.'intro.php'); ?>
<?php Theme::plugins('pageEnd'); ?>
</div>
</div>
</div>