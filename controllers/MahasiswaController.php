<?php

namespace app\controllers;
use \app\models\Mahasiswa;
use yii\data\ActiveDataProvider;



class MahasiswaController extends \yii\web\Controller
{

    public function actionCreate() {
        $model = new Mahasiswa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

             return $this->redirect(['view', 'id' => $model->Mahasiswa]);

        } else {

            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }


    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}

