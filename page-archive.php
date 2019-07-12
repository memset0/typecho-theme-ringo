<?php
/**
 * 文章汇总输出
 *
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

	<!-- <?php while($this->next()): ?>
		<article class="post post-atmain" itemscope itemtype="http://schema.org/BlogPosting">
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
	<?php endwhile; ?> -->


<?php
$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
$year = 0;
$mon = 0;
$output = ''; 
while ($archives->next()):
	$year_tmp = date('Y', $archives->created);
	$mon_tmp = date('m', $archives->created);
	if ($mon != $mon_tmp || $year != $year_tmp) {   
		$year = $year_tmp;
		$mon = $mon_tmp;
		$output .= '
			<div class="post post-atmain archive-model">
				<h2 class="archive-mouth">'.$year.' · '.$mon.'</h2>
			</div>
		';
	} //输出年份   
	$output .= '
		<article class="post post-atmain archive-model" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="archive-title" itemprop="name headline">
				<a itemprop="url" href="'.$archives->permalink .'">
					<time class="archive-time" datetime="'.date('c',$archives->created).'" itemprop="datePublished">'.date('m-d', $archives->created).'</time>
					· '. $archives->title .'
				</a>
			</h2>
		</article>
	'; //输出文章日期和标题
endwhile;
?>

<div class="col-12" id="main" role="main">
	<?php echo $output; ?>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>