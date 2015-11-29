<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Productos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $imagen
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Productos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['imagen'], 'required', 'on' => 'create'],
            [['nombre', 'imagen'], 'string', 'max' => 128],
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
            'imagen' => 'Imagen',
        ];
    }
}
