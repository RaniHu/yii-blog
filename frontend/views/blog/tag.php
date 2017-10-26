<!--======头图======-->
<div class="main-image tag-page">

</div>

<!--中间内容-->
<div class="content-wrapper clearFix">

    <!--左侧标签分类-->
    <div class="left-content">

        <!--所有标签-->
        <div class="all-tag">
            <ul>
                <?php foreach ($tags as $tag): ?>
                    <li><?= $tag->tag ?></li>
                <? endforeach; ?>
            </ul>
        </div>

        <!--按标签分类-->
        <?php foreach ($tags as $tag): ?>
            <div class="tag-list">
                <h3><?= $tag->tag ?></h3>
                <ul class="cur-tag-article-list">
                    <li></li>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>

    <!--右侧菜单栏-->
    <?= $this->render('sidebar.php', ['cates' => $cates, 'tags' => $tags]) ?>
</div>
