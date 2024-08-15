<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "place_lang".
 *
 * @property int $id
 * @property int $place_id
 * @property string $locality
 * @property string $country
 * @property string $lang
 */
class PlaceLang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'place_lang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['place_id', 'locality', 'country', 'lang'], 'required'],
            [['place_id'], 'integer'],
            [['locality', 'country'], 'string', 'max' => 45],
            [['lang'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'place_id' => Yii::t('app', 'Place ID'),
            'locality' => Yii::t('app', 'Locality'),
            'country' => Yii::t('app', 'Country'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }
}
