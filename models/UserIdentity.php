<?php

namespace app\models;

class UserIdentity extends User implements \yii\web\IdentityInterface

{


    public static function findIdentity($id)
    {
        //Вот тут нам и понадобится id - впрочем все можно реализовать через имя пользователя (но вдруг оно будет не уникально?)

        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
       /*так как это интерфейс мы должны реализовать функцию токена,
        но у нас нет токена потому мы просто оставляем как есть или можем вернуть false*/
       return false;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($login)
    {

        return static::findOne(['login' => $login]);
    }

/*Функция проверяет админ ли пользователь*/
    public function isAdmin()
    {
        return $this->isAdmin;
    }


    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        /*ключа так же нет но мы просто не будем использовать эту фичу*/
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        //туда же
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        /*Эту штуку будем использовать и даже заморочимся с кодировкой в md5*/
        return $this->password === md5($password);
    }
}
