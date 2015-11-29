<?php

namespace frontend\models;

use backend\models\Contactenos;
use yii\base\Model;
use Yii;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $nombre;
    public $correo;
    public $mensaje;
    public $verifyCode;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['nombre', 'correo', 'mensaje'], 'required'],
            // email has to be a valid email address
            ['correo', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre:',
            'correo' => 'Correo electrónico:',
            'mensaje' => 'Mensaje:',
            'verifyCode' => 'Digito de verificación:',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->correo => $this->nombre])
            ->setSubject("Contactenos")
            ->setTextBody($this->mensaje)
            ->send();
    }

    public function register()
    {
        $contactenos = new Contactenos();
        $contactenos->nombre = $this->nombre;
        $contactenos->correo = $this->correo;
        $contactenos->mensaje = $this->mensaje;
        if ($contactenos->save()) {
                return $contactenos;
            }

        return null;
    }
}
