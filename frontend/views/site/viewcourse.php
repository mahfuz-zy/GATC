<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Course */

$this->title = $model->nama_course;
$this->params['breadcrumbs'][] = ['label' => 'Course', 'url' => ['course']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-view ">
    
    <div class="kursus col-lg-12">
<table style="width:100%;">

    <tr>
        <td align="center">
        <img src="../../backend/web/<?= $model->image; ?>" class="fotodetail img-rounded" >
        </td>
    </tr>

    <tr>
        <td>
            <h1 align="center"><?= $model->nama_course; ?></h1><br>
        </td>
    </tr>
    
    <tr>
        <td>
            <p align="justify" class=".text-nowrap">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo Yii::$app->formatter->asNtext($model->detail_course); ?>
            </p>
        </td>
    </tr>
    
    <tr>
        <td>
            <h4>
             <?php
                if($model->harga==0){
                    echo "Biaya: Free";
                }else{
                    echo "Biaya: Rp.".$model->harga.'/orang';
                }
            ?>
            </h4>
        </td>
    </tr>
    
    <tr>
        <td>
            <h4>Tanggal Pelaksanaan : 
            <?php
                if(!empty($model->tanggal_berakhir)){
                echo $model->tanggal_pelaksanaan.' sampai '.$model->tanggal_berakhir; 
                }else{ echo $model->tanggal_pelaksanaan; }
            ?>
            </h4>
        </td>
    </tr>
    
    <tr>
        <td>
            <h4>Pendaftaran ditutup pada <?= $model->tanggal_tutup; ?></h4>
        </td>
    </tr>
    
    <tr>
        <td>
            
            <?php
                if($model->jumlah_max==99999){
                    echo '<h4>Kuota tidak terbatas</h4>';
                }else{
                    echo '<h4>Peserta terbatas untuk '.$model->jumlah_max.' orang</h4>';   
                }
            ?>
        </td>
    </tr>
    
    <tr>
        <td>
            <h4>
                Kontak :</h4><h4>
                <?php
                    echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$model->kontak1;
                    if(!empty($model->kontak2)){
                        echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;'.$model->kontak2;
                        if(!empty($model->kontak3)){
                             echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;'.$model->kontak3;
                        }
                    }
                ?>            
            </h4>
        </td>
    </tr>
    <tr>
        <td>
            <br>
        <?php 
    if(!Yii::$app->user->isGuest){
    echo Html::a('&nbsp;&nbsp; Daftar &nbsp;&nbsp;', ['peserta/create','id_kursus'=>$model->ID], ['class' => 'btn btn-success pull-left']); 
    }else{
    echo Html::a('&nbsp;&nbsp; Daftar &nbsp;&nbsp;', ['login'], ['class' => 'btn btn-success pull-left']); 
    }
            ?>
        </td>
    </tr>
</table>
</div>
    
</div>