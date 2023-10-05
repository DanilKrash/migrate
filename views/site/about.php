<?php

/** @var yii\web\View $this */

use yii\bootstrap5\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;


?>
<div class="site-about">
    <div class="d-flex justify-content-between">
        <?php foreach ($categories as $category):?>
            <h3><a href="<?php echo Url::toRoute(['news/page1', 'id'=>$category['id']]); ?>" class="text-dark text-decoration-none">
                    <?php echo $category['title']?>
                </a></h3>
        <?php endforeach;?>
    </div>
    <hr>

    <div class="d-flex justify-content-between">
        <div class="d-flex flex-column">
            <h4>Новости</h4>
            <?php foreach ($news as $news):?>
                <div class="card ms-5 mb-4">
                    <img src="image/<?php echo $news['image']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $news['title']?></h5>
                        <p class="card-text"><?php echo $news['body']?></p>
                        <p class="card-text"><small class="text-muted"><?php echo $news['date']?></small></p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="d-flex flex-column">
        <h4 style="padding-top: 50px" class="text-left">Самые просматриваемые</h4>
        <div class="d-flex justify-content-between">
            <?php foreach ($popular as $news):?>
                <div class="card ms-5 mb-4" style="width: 18rem;">
                    <img src="image/<?php echo $news['image']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $news['title']?></h5>
                        <p class="card-text"><small class="text-muted">Просмотров: <?php echo $news['viewd']?></small></p>
                    </div>
                </div>            <?php endforeach;?>
        </div>
    </div>
</div>

    <div class="h-100 d-flex align-items-center justify-content-center mt-5">
        <?php echo LinkPager::widget([
            'pagination' => $pages,]);?>
    </div>
    <div class="d-flex flex-column">
        <h4 class="mt-4">Последние новости</h4>
        <div class="d-flex justify-content-between">
            <?php foreach ($recent as $news):?>
                <div class="card ms-5 mb-4" style="width: 18rem;">
                    <img src="image/<?php echo $news['image']?>" class="w-100 h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $news['title']?></h5>
                        <p class="card-text"><small class="text-muted"><?php echo $news['date']?></small></p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>