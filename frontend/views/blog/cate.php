<!--======头图======-->
<div class="main-image cate-page">

</div>

<!--中间内容-->
<div class="content-wrapper clearFix">
    <!--左侧文章分类-->
    <div class="left-content">
        <?php foreach ($cates as $cate): ?>
        <div class="cate-list">
            <h3><?=$cate->cate?></h3>
            <ul class="cur-cate-article-list">
                <li></li>
            </ul>
        </div>
        <?php endforeach;?>

    </div>

    <!--右侧菜单栏-->
    <?= $this->render('sidebar.php', ['cates' => $cates, 'tags' => $tags]) ?>
</div>