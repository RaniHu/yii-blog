<!--======头图======-->
<div class="main-image detail-page">

</div>

<!--中间内容-->
<div class="content-wrapper clearFix">

    <!-- ======左侧文章详情======-->
    <div class="left-content">
        <div class="article-detail-box">
                <!--标题-->
                <h1><?= $curArticle['article_title'] ?></h1>
                <!--发布时间-->
                <p class="article-attach-info">
                    <span class="cate-name"><?= $curCate['cate']?></span>
                    <span class="article-pub-time"><?= $curArticle->pub_date ?></span>
                </p>
                <!--tag标签-->
                <ul class="cur-article-tag-all">
                    <li><a></a></li>
                </ul>
                <!--文章内容-->
                <div class="cur-article-text">
                    <?= $curArticle->article_content ?>
                </div>

        </div>

    </div>

    <!--======右侧菜单栏======-->
    <?= $this->render('sidebar.php', ['cates' => $cates, 'tags' => $tags]) ?>

</div>

