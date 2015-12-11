<?php

use yii\db\Schema;
use console\migrations\Migration;

class m151210_112842_service_wx extends Migration
{
    public function up()
    {
        $this->createTable('{{%service_wx}}', [
            'id' => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT "客服微信id"',
            0 => 'PRIMARY KEY (`id`)',
            'nickname' => 'VARCHAR(25) NULL DEFAULT "" COMMENT "微信昵称"',
            'wx' => 'VARCHAR(25) NOT NULL COMMENT "微信号"',
            'type' => 'TINYINT(4) NOT NULL COMMENT "类型（1、PC 端 2、移动端）"',
            'sort' => 'INT(11) NOT NULL COMMENT "排序"',
            'status' => 'TINYINT(4) NOT NULL COMMENT "状态（0、停用 1、启用）"',
            'qrcode_url' => 'VARCHAR(255) NULL DEFAULT "" COMMENT "二维码url"',
            'qrcode' => 'VARCHAR(255) NULL DEFAULT "" COMMENT "二维码"',
            'create_time' => 'INT(11) UNSIGNED NULL DEFAULT "0" COMMENT "创建时间"',
            'update_time' => 'INT(11) UNSIGNED NULL DEFAULT "0" COMMENT "修改时间"',
        ], $this->tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%service_wx}}');
    }
}
