<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


    <section class='post'>
        <h1 class="upcase">
            <div class='date'><?php $this->date('F j, Y'); ?></div>
            <?php $this->title() ?>
            <div class='tags'><?php $this->category(','); ?></div>
          </h1>
        
        
            <?php $this->content(); ?>
        
    </section>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
