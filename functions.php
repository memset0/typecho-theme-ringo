<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO。<b>会将默认下方的文字效果替换！</b>'));
    $form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    $displayTitle = new Typecho_Widget_Helper_Form_Element_Text('displayTitle', NULL, NULL, _t('显示站点标题'), _t('<p class="description">在侧边栏显示的站点标题，如不设置默认为当前站点标题，可以通过插入<b>&lt;br / &gt;</b>进行换行！</p><p class="description"><b>当前版本建议一行内不超过10字符以确保最佳体验</b></p>'));
    $form->addInput($displayTitle);
    $displayCoTitle = new Typecho_Widget_Helper_Form_Element_Text('displayCoTitle', NULL, NULL, _t('显示站点副标题/站点描述'), _t('在侧边栏显示的站点副标题(站点标题下方一行灰色小字)，如不设置默认为站点描述，可以通过插入<b>&lt;br / &gt;</b>进行换行！'));
    $form->addInput($displayCoTitle);

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
