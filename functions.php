<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    //header 相关
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO。<b>会将默认下方的文字效果替换！</b>'));
    $form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));



    $displayTitle = new Typecho_Widget_Helper_Form_Element_Text('displayTitle', NULL, NULL, _t('显示站点标题'), _t('<p class="description">在这里填入在侧边栏显示的站点标题，如不设置<b>默认为当前站点标题</b>，可以通过插入<b>&lt;br / &gt;</b>进行换行！</p><p class="description"><b>当前版本建议一行内不超过10字符以确保最佳体验</b></p>'));
    $form->addInput($displayTitle);
    $displayCoTitle = new Typecho_Widget_Helper_Form_Element_Text('displayCoTitle', NULL, NULL, _t('显示站点副标题/站点描述'), _t('在这里填入在侧边栏显示的站点副标题(站点标题下方一行灰色小字)，如不设置<b>默认为站点描述</b>，可以通过插入<b>&lt;br / &gt;</b>进行换行！'));
    $form->addInput($displayCoTitle);

    //footer 相关
    $icpNum = new Typecho_Widget_Helper_Form_Element_Text('icpNum', NULL, NULL, _t('网站备案号'), _t('在这里填入中国大陆的ICP网站备案号（无需带a标签，如 <b>浙ICP备19006255号-1</b> ），留空则不显示'));
    $form->addInput($icpNum);
    $statCode = new Typecho_Widget_Helper_Form_Element_Text('statCode', NULL, NULL, _t('站点统计代码'), _t('在这里填入<b>带script标签的</b>站点统计代码，留空则不显示。（建议您对代码进行简单的压缩）'));
    $form->addInput($statCode);
    $hideStatCode = new Typecho_Widget_Helper_Form_Element_Radio('hideStatCode', array('able' => _t('隐藏'),
            'disable' => _t('显示'),
        ),
        'able', _t('是否隐藏统计标志'), _t('<p class="description">是否将统计标志用 CSS 的 display 函数隐藏起来（常用于隐藏 CNZZ 等统计站点显示的标志，防止影响美观），<b>默认隐藏</b></p><p class="description"><b>现阶段暂没有对显示内容的统计标志做特别优化，因而会出现显示错乱的问题，建议隐藏。</b>'));
    $form->addInput($hideStatCode);

    //附加功能相关
    
    $EnableBusuanzi = new Typecho_Widget_Helper_Form_Element_Radio('EnableBusuanzi', array('able' => _t('启用'),
            'disable' => _t('停用'),
        ),
        'able', _t('是否启用<a rel="nofollow" href="https://busuanzi.ibruce.info/">不蒜子（俗称卜算子）</a>统计功能'), _t('<a rel="nofollow" href="https://busuanzi.ibruce.info/">不蒜子</a>是一个即装即用的网页js计数脚本，目前可与主题进行对接显示访问数。<b>默认启用</b>'));
    $form->addInput($EnableBusuanzi);

    $EnableWordsCounter = new Typecho_Widget_Helper_Form_Element_Radio('EnableWordsCounter', array('able' => _t('启用'),
            'disable' => _t('停用'),
        ),
        'disable', _t('是否启用<a rel="nofollow" href="https://github.com/elatisy/Typecho_WordsCounter">WordsCounter</a>'), _t('与插件<a rel="nofollow" href="WordsCounter">Typecho_WordsCounter</a>，配合使用，可以统计文章字数。<b>默认停用</b>，<b>启用前请务必确保您安装启用好了这个插件！</b>'));
    $form->addInput($EnableWordsCounter);

    $IfDisplayNone = new Typecho_Widget_Helper_Form_Element_Radio('IfDisplayNone', array('able' => _t('显示'),
            'disable' => _t('不显示'),
        ),
        'able', _t('是否显示 none 标签'),_t('<p class="description">是否显示文章中的 none 标签，<b>默认显示</b><p class="description">Typecho 的文章如果没有标签，默认会显示一个无样式的 none 。</p><p class="description">本主题已经对none标签进行了特殊优化使其更加美观，当然你也可以直接将其移除。'));
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
