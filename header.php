<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <!-- start #optimize -->
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
    <link rel="dns-prefetch" href="//secure.gravatar.com" />
    <link rel="dns-prefetch" href="//busuanzi.ibruce.info" />
    <link rel="dns-prefetch" href="//cdn.bootcss.com" />

    <!-- 关闭百度转码 -->
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">

    <!-- end #optimize -->
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- css3-mediaqueries-js 用于尝试在上古浏览器支持自适应viewport函数 -->
    <!--[if lt IE 9]>
    　　<script src="https://cdn.jsdelivr.net/gh/livingston/css3-mediaqueries-js@master/css3-mediaqueries.min.js"></script>
    <![endif]-->
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/necolas/normalize.css@latest/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <!-- <link rel="stylesheet" href="<?php $this->options->themeUrl('ripple.css'); ?>"> -->
    <!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Cinzel Decorative:700"> -->
    <?php if ($this->options->EnableHighlightJS == 'able' ): ?>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/highlight.js@latest/styles/atom-one-light.css">
    <?php endif; ?>
    <!--[if lt IE 9]>
    <script src="//cdn.jsdelivr.net/gh/aFarkas/html5shiv@latest/dist/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/gh/scottjehl/Respond@latest/dest/respond.min.js"></script>
    <![endif]-->

    <?php $this->header(); ?>
</head>
<body>

<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->




<header id="header" class="clearfix" onclick="window.open('<?php $this->options->siteUrl(); ?>','_self')">
    <div class="container">
        <div class="site-name">
        <?php if ($this->options->logoUrl): ?>
            <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
            </a>
        <?php else: ?>
            <a id="logo" class="site-title">
                <?php if ($this->options->displayTitle) { $this->options->displayTitle(); }else{ $this->options->title();}?> 
            </a>
            <p class="description site-description">
                <?php if ($this->options->displayCoTitle) { $this->options->displayCoTitle(); }else{ $this->options->description();}?>
            </p>
        <?php endif; ?>
        </div>
        <!-- <div class="col-mb-12">
            <nav id="nav-menu" class="clearfix" role="navigation">
                <a <?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
            </nav>
        </div> -->
    </div>
</header><!-- end #header -->

<?php $this->need('sidebar.php'); ?>

<div id="body">
    <div class="container">
        <!-- <div class="row"> -->