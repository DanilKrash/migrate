<?php

use yii\helpers\Url;?>

<div class="row row-cols-1 row-cols-md-3 g-4">

    <?php foreach ($categories as $category):?>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 18rem;">
                <img src="image/<?php echo $category['image'];?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?php echo Url::toRoute(['news/page2', 'id'=>$category['id']]);?>">
                            <?php echo $category['title'];?>
                        </a>
                    </h5>
                    <p class="card-text"><?php echo $category['description'];?></p>
                    <a href="<?php echo Url::toRoute(['news/page2', 'id'=>$category['id']]);?>" class="btn btn-primary">
                        Перейти к новостям
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
