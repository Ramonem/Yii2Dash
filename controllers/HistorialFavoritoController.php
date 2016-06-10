<?php

namespace app\controllers;

use Yii;
use app\models\HistorialFavorito;
use app\models\HistorialFavoritoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HistorialFavoritoController implements the CRUD actions for HistorialFavorito model.
 */
class HistorialFavoritoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all HistorialFavorito models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HistorialFavoritoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HistorialFavorito model.
     * @param integer $id_historial_desc
     * @param string $email
     * @return mixed
     */
    public function actionView($id_historial_desc, $email)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_historial_desc, $email),
        ]);
    }

    /**
     * Creates a new HistorialFavorito model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HistorialFavorito();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_historial_desc' => $model->id_historial_desc, 'email' => $model->email]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HistorialFavorito model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_historial_desc
     * @param string $email
     * @return mixed
     */
    public function actionUpdate($id_historial_desc, $email)
    {
        $model = $this->findModel($id_historial_desc, $email);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_historial_desc' => $model->id_historial_desc, 'email' => $model->email]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HistorialFavorito model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_historial_desc
     * @param string $email
     * @return mixed
     */
    public function actionDelete($id_historial_desc, $email)
    {
        $this->findModel($id_historial_desc, $email)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HistorialFavorito model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_historial_desc
     * @param string $email
     * @return HistorialFavorito the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_historial_desc, $email)
    {
        if (($model = HistorialFavorito::findOne(['id_historial_desc' => $id_historial_desc, 'email' => $email])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
