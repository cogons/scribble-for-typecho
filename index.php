<?php /** * Cogons.net version 2 */ if (!defined( '__TYPECHO_ROOT_DIR__')) exit; $this->need('header.php'); ?>



    <div class="notice"><?php Notice_Plugin::render(true); ?></div>
    <hr>
    <ul class="posts">
        <?php while($this->next()): ?>
        <li>
            <span class="c"><?php $this->category('') ?></span>
          
            <small class="datetime muted" data-time="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?> </small>
            <a href="<?php $this->permalink() ?>">
                <?php $this->title() ?></a>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php $this->pageNav('上一页', '下一页'); ?>

<!-- end #main-->

<!--<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>