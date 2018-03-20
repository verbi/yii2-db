<?php
namespace verbi\Yii2Db\mysql;

class Schema extends \yii\db\mysql\Schema {
    /**
     * {@inheritdoc}
     */
    public $columnSchemaClass = 'verbi\Yii2Db\mysql\ColumnSchema';
}