<?php

namespace app\controllers;

use Yii;
use app\models\ErrorUbicacion;
use app\models\ErrorUbicacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ErrorUbicacionController implements the CRUD actions for ErrorUbicacion model.
 */
class ErrorUbicacionController extends Controller
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
     * Lists all ErrorUbicacion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ErrorUbicacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ErrorUbicacion model.
     * @param integer $id_ubicacion
     * @param string $email_admin
     * @return mixed
     */
    public function actionView($id_ubicacion, $email_admin)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_ubicacion, $email_admin),
        ]);
    }

    /**
     * Creates a new ErrorUbicacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ErrorUbicacion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_ubicacion' => $model->id_ubicacion, 'email_admin' => $model->email_admin]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ErrorUbicacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_ubicacion
     * @param string $email_admin
     * @return mixed
     */
    public function actionUpdate($id_ubicacion, $email_admin)
    {
        $model = $this->findModel($id_ubicacion, $email_admin);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_ubicacion' => $model->id_ubicacion, 'email_admin' => $model->email_admin]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ErrorUbicacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_ubicacion
     * @param string $email_admin
     * @return mixed
     */
    public function actionDelete($id_ubicacion, $email_admin)
    {
        $this->findModel($id_ubicacion, $email_admin)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ErrorUbicacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_ubicacion
     * @param string $email_admin
     * @return ErrorUbicacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_ubicacion, $email_admin)
    {
        if (($model = ErrorUbicacion::findOne(['id_ubicacion' => $id_ubicacion, 'email_admin' => $email_admin])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
