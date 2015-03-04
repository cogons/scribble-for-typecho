<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    <?php if($this->allow('comment')): ?>

    </div>
    
    </div>

<div id='container'>
    
    <div class="comment">
    
    
    
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="{{ page.id }}" data-title="{{ page.title }}" data-url="http://cogons.net{{ page.url }}"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"cogonsblog"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->
 
    <?php endif; ?>
</div>
