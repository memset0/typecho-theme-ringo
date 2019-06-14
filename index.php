<?php
/**
 * 你愿意，等我回来吗？
 * 
 * @package typecho-theme-ringo
 * @author memset0
 * @version 0.0.4
 * @link https://memset0.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="col-12" id="main" role="main">
	<?php while($this->next()): ?>
	<?php if ($title = $this->pluginHandle()->trigger($plugged)->title($this->title, $this) != "此内容被密码保护"): ?>
		<article class="post post-atmain" itemscope itemtype="http://schema.org/BlogPosting" onclick="window.open('<?php $this->permalink() ?>','_self')">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
				<li><?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 comment', '1 comment', '%d comments'); ?></a></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
				<?php $this->content('READ MORE'); ?>
            </div>
		</article>
	<?php endif; ?>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo;', '&raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
