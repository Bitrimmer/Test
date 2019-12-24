<?php

use yii\db\Migration;

/**
 * Class m191224_100234_Company
 */
class m191224_100234_Company extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Company', [
            'id' => $this->primaryKey(), //Не обязательный параметр но очень желательный
            'name' => $this->string()->notNull(),
            'inn' => $this->integer()->notNull(),
            'ceo' => $this->string('50')->notNull(),
            'address' => $this->text(),//Если честно я не знаю может быть он не обязателен
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('Company'); //ну вдруг....


    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191224_100234_Company cannot be reverted.\n";

        return false;
    }
    */
}
