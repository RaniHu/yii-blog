<?php

use yii\helpers\Url;

?>

<!--======头图======-->
<div class="main-image tag-page">

</div>

<!--中间内容-->
<div class="content-wrapper clearFix">

    <!--左侧标签分类-->
    <div class="left-content">

        <!--所有标签-->
        <div class="tag-page-info">
<!--            <div class="all-tag">-->
<!--                <ul>-->
<!--                    --><?php //foreach ($tags as $tag): ?>
<!--                        <li><a href="--><?//= Url::to(['blog/tag', 'id' => $tag['id']]) ?><!--">--><?//= $tag->tag ?><!--</a></li>-->
<!--                    --><?// endforeach; ?>
<!--                </ul>-->
<!--            </div>-->

            <!--按标签分类-->
            <?php foreach ($curTagArticle as $curTagArticles): ?>
                <div class="tag-list">
                    <h3><?= $curTagArticles[0]['tagsName'][0]['tag'] ?></h3>
                    <ol class="cur-tag-article-list">
                        <?php foreach ($curTagArticles as $curArticleInfo) : ?>
                            <li><a href="<?= Url::to(['blog/detail', 'id' =>$curArticleInfo['article_id']]) ?>"><?= $curArticleInfo['tagArticle'][0]['article_title'] ?></a></li>
                        <?php endforeach; ?>

                    </ol>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!--右侧菜单栏-->
    <?= $this->render('sidebar.php', ['cates' => $cates, 'tags' => $tags]) ?>
</div>
