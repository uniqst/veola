<?php
namespace frontend\components;

use Yii;
use yii\base\Widget;
use frontend\models\Comments as Comment;

Class Comments extends Widget{
    public $id;
    public function run(){
        $id = $this->id;
        $comment = new Comment();
        if($comment->load(Yii::$app->request->post())){
            $comment->save();
        }
        $model = Comment::find()->where(['product_id' => $id])->all();

        return $this->render('comments', compact('model', 'comment', 'id'));
    }
}