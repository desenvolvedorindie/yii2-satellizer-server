<?php

namespace wfcreations\satellizer\actions;

use yii\base\Action;

class GithubAction extends Action {

    public function run() {
        if (Yii::$app->getRequest()->isPost) {
            Yii::$app->getRequest()->parsers = [
                'application/json' => 'yii\web\JsonParser',
            ];
            // TODO
        }
    }

}
