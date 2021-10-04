<?php

namespace app\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $intro
 * @property string $content
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';

    }

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'slug',
            ],
        ];
    }

  


    /**
     * {@inheritdoc}
     */
    public function rules()
    {

        return [
            [['title', 'intro', 'content'], 'required'],
            [['title',], 'string', 'max' => 100],
            [['intro'], 'string', 'max' => 1000],
            [['content'], 'string', 'max' => 5000],
        ];
    }

    

    /**
     * {@inheritdoc}
     */

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'intro' => 'Intro',
            'content' => 'Content',
        ];
    }
}
