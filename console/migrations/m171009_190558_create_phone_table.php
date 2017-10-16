<?php

use yii\db\Migration;

/**
 * Handles the creation of table `phone`.
 */
class m171009_190558_create_phone_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('phone', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer(),
            'number' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('phone');
    }
}
