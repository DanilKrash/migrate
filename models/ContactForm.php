<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends ActiveRecord
{

    /**
     * @return array the validation rules.
     */
    public static function tableName()
    {
        return 'proposal';
    }
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body', 'telefon'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['telefon', 'integer'],
            // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'name' => 'Имя',
            'patronymic' => 'Фамилия',
            'surname' => 'Отчество',
            'email' => 'Почта',
            'telefon' => 'Телефон',
            'subject' => 'Тема',
            'body' => 'Текст',

        ];
    }
    public function saveProposal(){
        $proposal = new ContactForm();
        $proposal->name = $this->name;
        $proposal->email = $this->email;
        $proposal->subject = $this->subject;
        $proposal->body = $this->body;

        $proposal->save();
    }

}
