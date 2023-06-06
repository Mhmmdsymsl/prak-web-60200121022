<?php

namespace app\controllers;
use \app\models\Profil;
use yii\data\ActiveDataProvider;



class ProfilController extends \yii\web\Controller
{

    public function actionCreate() {
        $model = new Profil();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

             return $this->redirect(['view', 'id' => $model->profil]);

        } else {

            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }


    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Profil::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}

