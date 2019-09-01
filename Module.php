<?php

namespace themroc\humhub\modules\index_hourly;

use Yii;
use humhub\modules\search\jobs\RebuildIndex;

class Module extends \humhub\components\Module
{
    public static function onCron($event)
    {
        $rebuildSearchJob= new RebuildIndex();
        Yii::$app->queue->push($rebuildSearchJob);
    }
}
