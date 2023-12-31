<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class SignupForm extends Model
{
    public $username;
    public $name;
    public $patronymic;
    public $surname;
    public $password;
    public $email;
    public $password_repeat;
    public $rememberMe = true;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password', 'name', 'email', 'patronymic'], 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такое имя пользователя занято!'],
            [['patronymic', 'surname'], 'trim'],
            ['password', 'string', 'min' => 6],
            ['rememberMe', 'boolean'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'trim'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такая почта уже занята.'],
            ['password_repeat', 'compare', 'compareAttribute' => 'password']
        ];
    }

    public function signup()
    {
        $user = new User();
        $user -> username = $this -> username;
        $user -> name = $this -> name;
        $user -> patronymic = $this -> patronymic;
        $user -> surname = $this -> surname;
        $user -> setPassword($this -> password);
        $user -> email = $this -> email;


        return $user -> save()? $user: null;
    }
}    