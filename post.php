<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>




    <section class='post'>
        <h1 class="upcase">
            <div class='date'><?php $this->date('F j, Y'); ?></div>
            <?php $this->title() ?>
            <div class='tags'><?php $this->category(' ',''); ?></div>
          </h1>
        
        
            <?php $this->content(); ?>
        <?php $this->need('signoff.php'); ?>
    </section>

  

    <ul class="post-near">
        <li class="left"><?php $this->thePrev('%s','没有更旧的'); ?></li>
        <li class="right"><?php $this->theNext('%s','这是最新的'); ?></li>
    </ul>
</div><!-- end #main-->
<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>  