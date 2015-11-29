<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Usuarios".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $usuario
 * @property string $contrasena
 * @property string $imagen
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'usuario'], 'required'],
            [['contrasena', 'imagen'], 'required', 'on' => 'create'],
            [['nombre', 'usuario', 'imagen'], 'string', 'max' => 128],
            [['contrasena'], 'string', 'max' => 32],
            [['imagen'], 'file', 'extensions' => 'jpg, jpeg, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'usuario' => 'Usuario',
            'contrasena' => 'Contrasena',
            'imagen' => 'Imagen',
        ];
    }
}
