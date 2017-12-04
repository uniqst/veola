<?php
namespace frontend\components;

use Yii;
use yii\base\Widget;
use frontend\models\Comments as Comment;

Class Comments extends Widget{
    public $id;
    public function run(){
        $id = $this->id;
        $model = Comment::find()->where(['product_id' => $id])->all();
        $comment = new Comment();
        if($comment->load(Yii::$app->request->post()) && $comment->save());
        return $this->render('comments', compact('model', 'comment'));
    }
}