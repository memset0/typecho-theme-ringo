<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $version = '0.0.5';
    //更友好的界面
    _e('<div id="typecho-welcome">
            <h3>欢迎使用<a href="https://github.com/memset0/typecho-theme-ringo">Typecho Theme Ringo</a>！ <img src="https://img.shields.io/github/stars/memset0/typecho-theme-ringo.svg?style=social"></h3>
            <li> Brought You By <a href="https://github.com/abc1763613206">abc1763613206</a> and <a href="https://memset0.cn">memset0</a> </li>
            <ul>
                <li> <img src="https://img.shields.io/badge/Version-'.$version.'-green.svg?style=flat-square"> <a href="https://github.com/memset0/typecho-theme-ringo"><img src="https://img.shields.io/github/release/memset0/typecho-theme-ringo.svg?style=flat-square" alt="https://img.shields.io/github/release/memset0/typecho-theme-ringo.svg?style=flat-square" ></a> </li> 
                <li> 请在下方进行您的主题设置。<b>务必将每一个单选框都设定一遍</b>以保证在之后的使用中不会出问题。 </li>
                <li> 有问题请在 Github Issues 中反馈：<a href="https://github.com/memset0/typecho-theme-ringo/issues"> https://github.com/memset0/typecho-theme-ringo/issues</a>  </li>
            </ul> 
        </div>
        ');


    //header 相关

    $displayTitle = new Typecho_Widget_Helper_Form_Element_Text(
        'displayTitle',
        NULL,
        NULL,
        _t('显示站点标题'),
        _t('
            <p class="description">在这里填入在侧边栏显示的站点标题，如不设置 <b>默认为当前站点标题</b> ，可以通过插入 <code>&lt;br&gt;</code> 换行！</p>
            <p class="description"><b>建议一行内不超过 10 字符以确保最佳体验</b></p>
        ')
    );
    $form->addInput($displayTitle);

    $displayCoTitle = new Typecho_Widget_Helper_Form_Element_Text(
        'displayCoTitle',
        NULL,
        NULL,
        _t('显示站点描述'),
        _t('
            <p class="description">在这里填入在侧边栏显示的站点副标题（站点标题下方一行灰色小字），如不设置 <b>默认为站点描述</b> ，可以通过插入 <code>&lt;br&gt;</code> 换行！
            <p class="description"><b>建议一行内不超过 10 字符以确保最佳体验</b></p>
        ')
    );
    $form->addInput($displayCoTitle);

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'logoUrl',
        NULL,
        NULL,
        _t('站点 LOGO 地址'),
        _t('
            <p class="description">在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO。</p>
            <p class="description"><b>如果填写会将替换标题和副标题！</b></p>
        ')
    );
    $form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

    //footer 相关
    
    $IfDisplayPages = new Typecho_Widget_Helper_Form_Element_Radio('IfDisplayPages', array('able' => _t('显示'),
            'disable' => _t('不显示'),
        ),
        'able',
        _t('是否在侧边栏显示创建的页面'),
        _t('
            <p class="description">是否显示侧边栏的页面（多用于关于&&友情链接），<b>默认显示</b></p>
        ')
    );
    $form->addInput($IfDisplayPages);
    
    
    $icpNum = new Typecho_Widget_Helper_Form_Element_Text('icpNum', NULL, NULL, _t('网站备案号'), _t('在这里填入中国大陆的ICP网站备案号（无需带a标签，如 <b>浙ICP备19006255号-1</b> ），留空则不显示'));
    $form->addInput($icpNum);
    $statCode = new Typecho_Widget_Helper_Form_Element_Text('statCode', NULL, NULL, _t('站点统计代码'), _t('在这里填入 <b>带 script 标签的</b> 站点统计代码，留空则不显示。（建议您对代码进行简单的压缩）'));
    $form->addInput($statCode);
    $hideStatCode = new Typecho_Widget_Helper_Form_Element_Radio('hideStatCode', array('able' => _t('隐藏'),
            'disable' => _t('显示'),
        ),
        'able',
        _t('是否隐藏统计标志'),
        _t('
            <p class="description">是否将统计标志用 CSS 的 display 函数隐藏起来（常用于隐藏 CNZZ 等统计站点显示的标志，防止影响美观），<b>默认隐藏</b></p>
            <p class="description"><b>现阶段暂没有对显示内容的统计标志做特别优化，因而会出现显示错乱的问题，建议隐藏。</b></p>
        ')
    );
    $form->addInput($hideStatCode);

    //附加功能相关
    
    $EnableBusuanzi = new Typecho_Widget_Helper_Form_Element_Radio('EnableBusuanzi', array('able' => _t('启用'),
            'disable' => _t('停用'),
        ),
        'able',
        _t('是否启用 <a rel="nofollow" target="_blank" href="https://busuanzi.ibruce.info/">不蒜子</a> 统计功能'),
        _t('
            <a rel="nofollow" target="_blank" href="https://busuanzi.ibruce.info/">不蒜子</a>是一个即装即用的网页 js 计数脚本，目前可与主题进行对接显示访问数，<b>默认启用</b>
        ')
    );
    $form->addInput($EnableBusuanzi);

    $EnableWordsCounter = new Typecho_Widget_Helper_Form_Element_Radio('EnableWordsCounter', array('able' => _t('启用'),
            'disable' => _t('停用'),
        ),
        'disable',
        _t('是否启用 <a rel="nofollow" target="_blank" href="https://github.com/elatisy/Typecho_WordsCounter">WordsCounter</a> 功能'),
        _t('
            <p class="description">与插件 <a rel="nofollow" href="https://github.com/elatisy/Typecho_WordsCounter">WordsCounter</a> ，配合使用，可以统计文章字数。<b>默认停用</b></p>
            <p class="description"><b>启用前请务必确保您安装启用好了这个插件！</b></p>
        ')
    );
    $form->addInput($EnableWordsCounter);

    $IfDisplayNone = new Typecho_Widget_Helper_Form_Element_Radio('IfDisplayNone', array('able' => _t('显示'),
            'disable' => _t('不显示'),
        ),
        'disable',
        _t('是否显示 none 标签'),
        _t('
            <p class="description">是否显示文章中的 none 标签，<b>默认不显示</b></p>
            <p class="description">Typecho 的文章如果没有标签，默认会显示一个无样式的 none</p>
            <p class="description">本主题已经对 none 标签进行了特殊优化使其更加美观，当然你也可以直接将其移除</p>
        ')
    );
    $form->addInput($IfDisplayNone);


    //现阶段下该设置基本无用，注释掉好了
    /*
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));

    
    
    $form->addInput($sidebarBlock->multiMode());
    */
}
