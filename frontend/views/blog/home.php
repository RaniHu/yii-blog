<?php

use yii\widgets\LinkPager;

//AppAsset::register($this);
//AppAsset::addCss($this, '@web/static/css/blog/blog.css');
$this->title = '我的博客';
?>

<!--======头图======-->
<div class="main-image home-page">

</div>

<!--中间内容-->
<div class="content-wrapper clearFix">
    <!--左侧文章列表-->
    <?= $this->render('list.php', ['articleAndCate'=>$articleAndCates]) ?>

    <!--右侧菜单栏-->
    <?= $this->render('sidebar.php', ['cates' => $cates, 'tags' => $tags]) ?>

    <!--分页器-->
<!--    --><?//= LinkPager::widget(['pagination' => $pagination]) ?>
</div>



