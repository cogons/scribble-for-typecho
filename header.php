<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <link href='/images/fav.png' rel='shortcut icon'>
<link href='<?php $this->options->themeUrl('/stylesheets/style.css'); ?>' rel='stylesheet' type='text/css' />
<link href='<?php $this->options->themeUrl('/stylesheets/syntax.css'); ?>' rel='stylesheet' type='text/css' />
<link href='<?php $this->options->themeUrl('/stylesheets/responsive.css'); ?>' rel='stylesheet' type='text/css' />
<!-- - -->
<script src='<?php $this->options->themeUrl('/javascripts/jquery.js'); ?>' type='text/javascript'></script>
<script src='<?php $this->options->themeUrl('/javascripts/pd.js'); ?>' type='text/javascript'></script>
<script src='<?php $this->options->themeUrl('/javascripts/basics.js'); ?>' type='text/javascript'></script>
<!-- - -->
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
<meta content='text/html; charset=utf-8' http-equiv='content-type' />
<meta content="http://muan.co/images/og.png" property="og:image" />

<!-- - -->

    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

   
    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
    
<header>
<a id="go-back-home" href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->themeUrl('/images/scribble.png'); ?>" alt="scribble" width="53" height="59"></a>
<p><?php $this->options->title() ?></p>
</header> 

    <div id='container'>


          <div class="block">
  
    <a target="_top" class="main" href="about.html">关于</a>
  
    <a target="_blank" class="main" href="feed">订阅</a>
  
    <a target="_blank" class="main" href="http://weibo.com/cogons">微博</a>
  
    <a target="_blank" class="main" href="http://github.com/cogons">GitHub</a>
  
</div>
    <div class="content">
