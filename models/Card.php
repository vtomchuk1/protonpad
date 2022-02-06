<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cards".
 *
 * @property int $id
 * @property int $id_user
 * @property string|null $content
 * @property string $date_create
 * @property string|null $date_update
 * @property int $del
 * @property string|null $category
 */
class Card extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cards';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'date_create', 'del'], 'required'],
            [['id_user', 'del'], 'integer'],
            [['content'], 'string'],
            [['date_create', 'date_update', 'category'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'content' => 'Зміст',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'del' => 'Del',
            'category' => 'Заголовок',
        ];
    }

    public function allCardByIdUser($id_user){
        return $this::find()
            ->where(['id_user' => $id_user, 'del' => 0])
            ->asArray()
            ->all();
    }

    public function cardById($id, $id_user){
        return $this::find()
            ->where(['id' => $id, 'id_user' => $id_user, 'del' => 0])
            ->one();
    }

    public function deleteCardById($id, $id_user, $type){
        if($type == 'save'){
            $model = $this::find()
                ->where(['id' => $id, 'id_user' => $id_user, 'del' => 0])
                ->one();
            $model->del = 1;
            if(!$model->save())
                return 0;
            return 1;
        }

    }
}
