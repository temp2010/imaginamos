<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Configuracion".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $parametro
 */
class Configuracion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Configuracion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'parametro'], 'required'],
            [['nombre'], 'string', 'max' => 32],
            [['parametro'], 'string', 'max' => 128]
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
            'parametro' => 'Parametro',
        ];
    }
}
