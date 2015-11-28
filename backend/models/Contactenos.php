<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Contactenos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $correo
 * @property string $mensaje
 */
class Contactenos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Contactenos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'correo', 'mensaje'], 'required'],
            [['mensaje'], 'string'],
            [['nombre', 'correo'], 'string', 'max' => 128]
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
            'correo' => 'Correo',
            'mensaje' => 'Mensaje',
        ];
    }
}
