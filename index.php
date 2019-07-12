<?php
/**
 * 你愿意，等我回来吗？
 * 
 * @package Typecho Theme Ringo
 * @author memset0, abc1763613206
 * @version 0.0.9
 * @link https://github.com/memset0/typecho-theme-ringo
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<?php if ($this->options->WhereToDisplaySearch == 'top' ): ?>
	<div class="site-search-top">
		<form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
			<label for="s" class="sr-only">搜索关键字</label>
			<input type="text" id="s" name="s" class="text" placeholder="在这里输入关键字哦 ~ (回车搜索)" />
			<!-- <button type="submit" class="submit">搜索</button> -->
		</form>
	</div>
	<?php endif; ?>
<div class="col-12" id="main" role="main">
	<?php while($this->next()): ?>
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
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo;', '&raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>