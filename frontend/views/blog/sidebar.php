
<!--====右侧菜单栏====-->
<div class="right-sidebar">
    <!--搜索框-->
    <div class="search-input">
        <input type="text" placeholder="search">
        <i class="article-search-icon"></i>
    </div>
    <!--分类列表-->
    <div class="sort-wrapper">
        <h3><i class="article-cate-icon"></i> <span>分类</span></h3>
        <ul class="sorts-list">
            <?php foreach ($cates as $cate): ?>
            <li><a><i></i><?= $cate->cate ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!--文章标签-->
    <div class="tag-wrapper">
        <h3><i class="article-tag-icon"></i> <span>标签</span></h3>
        <ul class="tag-list">
            <?php foreach ($tags as $tag): ?>
            <li><a><i></i><?= $tag->tag ?></a></li>
            <?php endforeach; ?>

        </ul>
    </div>
    <!--时间轴-->
    <div class="timeline">
        <h3><i class="article-timeline-icon"></i> <span>时间轴</span></h3>
        <ul class="timeline-list">

            <li><a><span class="time-list-year">2017年</span><span class="time-list-total">(10)</span></a></li>
            <li><a><span class="time-list-year">2016年</span><span class="time-list-total">(3)</span></a></li>
            <li><a><span class="time-list-year">2015年</span><span class="time-list-total">(4)</span></a></li>
        </ul>
    </div>

</div>