<?php
namespace console\controllers;

use yii\console\Controller;

/**
 * 访问方法，在项目根目录运行 php yii test/test
 */

class TestController extends Controller
{
    public function actionTest()
    {
        $i = 1;
        while (1) {
            $i++;
            echo $i.chr(10); // $i."\n";
        }
    }
}