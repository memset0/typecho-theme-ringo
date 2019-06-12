<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="sidebar" role="complementary">
	<section class="widget sidebar-foot">
        <ul class="widget-list">
            <li>Proudly powered by <a href="http://www.typecho.org">Typecho</a></li>
            <li>Theme designed by <a href="https://memset0.cn">memset0</a></li>
            <li>
                <span id="busuanzi_value_site_pv">......</span> visits ·
                <span id="busuanzi_value_site_uv">......</span> visitors ·
                <span id="words_counter"><?php WordsCounter_Plugin::allOfCharacters(); ?></span> words
            </li>
        </ul>
    </section>
</div><!--end #sidebar -->

<div id="helpbar">
    <div class="back-to-top">
        <button id="back2top">↑</button>
        <script>
            back2top.onclick = function() {
                var movement = document.body.scrollTop || document.documentElement.scrollTop;
                scrollBy(0, -movement);
            }
        </script>
    </div>
</div><!--end #helpbar -->