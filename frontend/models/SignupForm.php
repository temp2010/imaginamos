<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $nombre;
    public $usuario;
    public $contrasena;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['nombre', 'filter', 'filter' => 'trim'],
            ['nombre', 'required'],
            ['nombre', 'string', 'min' => 1, 'max' => 128],

            ['usuario', 'filter', 'filter' => 'trim'],
            ['usuario', 'required'],
            ['usuario', 'email'],
            ['usuario', 'string', 'max' => 128],
            ['usuario', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este correo ya se encuentra registrado.'],

            ['contrasena', 'required'],
            ['contrasena', 'string', 'min' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre:',
            'usuario' => 'Correo electronico:',
            'contrasena' => 'Contraseña:',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->nombre = $this->nombre;
            $user->usuario = $this->usuario;
            $user->contrasena = md5($this->contrasena);
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
