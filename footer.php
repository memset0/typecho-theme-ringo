<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

		<!-- </div>end .row -->

<footer id="footer" role="contentinfo">

	&copy; 2017 - <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
	<br/>浙ICP备19006255号-1
	<!-- <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>. -->

</footer><!-- end #footer -->

<div class="site-search">
	<form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
		<label for="s" class="sr-only">搜索关键字</label>
		<input type="text" id="s" name="s" class="text" placeholder="在这里输入关键字哦 ~ (回车搜索)" />
		<!-- <button type="submit" class="submit">搜索</button> -->
	</form>
</div>

	</div>

</div><!-- end #body -->

<script async src="//busuanzi.ibruce.info/busuanzi/2.3/busuanzi.pure.mini.js"></script>
<!-- <style>.MathJax:focus {outline: none;}</style>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
	extensions: ["tex2jax.js"],
	jax: ["input/TeX","output/HTML-CSS"],
	"fast-preview": {disabled: true},
	tex2jax: {inlineMath:[ ["$", "$"] ],displayMath:[ ["$$","$$"] ],processEscapes: true},
	"HTML-CSS": { availableFonts: ["TeX"] }
});
</script>
<script type="text/javascript" src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script> -->


<script src="https://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
<!-- <script src="<?php $this->options->themeUrl('ripple.js'); ?>"></script> -->
<script> hljs.initHighlightingOnLoad(); </script>

<script>
var _hmt = _hmt || [];
(function() {
	var hm = document.createElement("script");
	hm.src = "https://hm.baidu.com/hm.js?d8c0a4185322e94013582201484f9131";
	var s = document.getElementsByTagName("script")[0]; 
	s.parentNode.insertBefore(hm, s);
})();
</script>

<?php $this->footer(); ?>
</body>
</html>