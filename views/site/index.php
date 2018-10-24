<?php

/* @var $this yii\web\View */
/* @var $friends  */

$this->title = Yii::$app->name;
?>
<div class="site-index">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><i class="glyphicon glyphicon-user"></i>Вы: <?=Yii::$app->user->identity['username']?>. Ваше друзья: </h2>
            </div>
           <div class="col-lg-12">
               <table class="table table-bordered">
                   <thead>
                    <th class="text-center" width="60px">Аватар</th>
                    <th>Имя</th>
                   </thead>
                   <tbody>
                    <?php foreach ($friends as $friend): ?>
                        <tr>
                            <td><?= \yii\helpers\Html::img($friend['photo']) ?></td>
                            <td><?=$friend['first_name'] .' '. $friend['last_name']?></td>
                        </tr>
                    <?php endforeach; ?>
                   </tbody>
               </table>
           </div>
        </div>
    </div>
</div>
