<?php if (Paginator::numberOfPages()>1): ?>
<nav class="paginator">
<ul class="pagination flex-wrap justify-content-center">
<?php if (Paginator::showPrev()): ?>
<li class="page-item mr-2">
<a class="page-link" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <!--<?php echo $L->get('Previous'); ?>--></a>
</li>
<?php endif; ?>
<li class="page-item <?php if (Paginator::currentPage()==1) echo 'disabled' ?>">
<a class="page-link" href="<?php echo Theme::siteUrl() ?>"><?php echo $L->get('Home'); ?></a>
</li>
<?php if (Paginator::showNext()): ?>
<li class="page-item ml-2">
<a class="page-link" href="<?php echo Paginator::nextPageUrl() ?>"><!--<?php echo $L->get('Next'); ?>--> &#9658;</a>
</li>
<?php endif; ?>
</ul>
</nav>
<?php endif ?>