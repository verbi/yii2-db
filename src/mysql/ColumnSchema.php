<?php
namespace verbi\Yii2Db\mysql;

class ColumnSchema extends \yii\db\mysql\ColumnSchema {
    /**
     * {@inheritdoc}
     */
    public function dbTypecast($value)
    {
        if($this->name == 'updated_on') {
            die(print_r($value, true));
        }
//        if ($value === null) {
//            return $value;
//        }
//        if ($value instanceof ExpressionInterface) {
//            return $value;
//        }
//        if (!$this->disableJsonSupport && $this->dbType === Schema::TYPE_JSON) {
//            return new JsonExpression($value, $this->type);
//        }
        return parent::dbTypecast($value);
    }
    /**
     * {@inheritdoc}
     */
    public function phpTypecast($value)
    {
        if($this->name == 'updated_on') {
            die(print_r($value, true));
        }
//        if ($value === null) {
//            return null;
//        }
//        if (!$this->disableJsonSupport && $this->type === Schema::TYPE_JSON) {
//            return json_decode($value, true);
//        }
        return parent::phpTypecast($value);
    }
}