<?php

use yii\db\Migration;

/**
 * Class m191224_100859_User
 */
class m191224_100859_User extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('UserIdentity', [
            'id' => $this->primaryKey(), //Не обязательный параметр но очень желательный
            'login' => $this->string('50')->notNull(),
            'password' => $this->string('50')->notNull(),
            'role' => $this->integer()->defaultValue('0')
           /*При регистрации у пользователя будет роль = 0 , Меняем на 1 - бац он стал админ*/
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191224_100859_User cannot be reverted.\n";
        /*Пользователей удалять не будем=)*/
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191224_100859_User cannot be reverted.\n";

        return false;
    }
    */
}
