<div class="container-fluid">
<div class="row">
<?php include(THEME_DIR_PHP.'404.php'); ?>
<div class="row">
<?php foreach ($content as $page): ?>
<div class="col-md-4 p-3">
<?php Theme::plugins('pageBegin'); ?>
<?php if ($page->coverImage()): ?>
<a title="<?php echo $page->title(); ?>" href="<?php echo $page->permalink(); ?>">
<img class="img-fluid rounded-circle" width="100%" height="100%" alt="<?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>"/>
</a>
<?php endif ?>
</div>
<div class="col-md-8 p-3">
<h3><strong>
<a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></strong></h2>
<?php if ($page->description()): ?>
<p><?php echo $page->description(); ?></p>
<?php endif ?>
<?php echo $page->contentBreak(); ?> 
<?php if ($page->readMore()): ?><a class="btn btn-dark" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?> <?php echo $L->get('Info'); ?></a><?php endif ?>
<div>
</div>
<?php Theme::plugins('pageEnd'); ?>
</div>
<?php endforeach ?>
</div>
<?php include(THEME_DIR_PHP.'navigation.php'); ?>
</div>
</div>