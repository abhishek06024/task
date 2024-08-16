<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $uid
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $password
 * @property int $status
 * @property int $role
 * @property int $contact_email
 * @property int $contact_phone
 * @property string $auth_key
 * @property string $created
 * @property string $updated
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid', 'username', 'name', 'email', 'password', 'auth_key', 'updated'], 'required'],
            [['status', 'role', 'contact_email', 'contact_phone'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['uid', 'password', 'auth_key'], 'string', 'max' => 60],
            [['username'], 'string', 'max' => 45],
            [['name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 225],
            [['uid'], 'unique'],
            [['email'], 'unique'],
            [['auth_key'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'uid' => Yii::t('app', 'Uid'),
            'username' => Yii::t('app', 'Username'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'status' => Yii::t('app', 'Status'),
            'role' => Yii::t('app', 'Role'),
            'contact_email' => Yii::t('app', 'Contact Email'),
            'contact_phone' => Yii::t('app', 'Contact Phone'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
        ];
    }
}
