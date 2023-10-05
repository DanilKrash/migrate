<?php
foreach ($news as $news): ?>
    <div class="card mb-3">
        <img src="image/<?php echo $news['image'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $news['title'];?></h5>
                <p class="card-text"><?php echo $news['body'];?></p>
                <p class="card-text"><?php echo $news['date'];?></p>
            </div>
    </div>
<?php endforeach;?>
