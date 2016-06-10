<?php

namespace app\controllers;

use Yii;
use app\models\Recordar;
use app\models\RecordarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RecordarController implements the CRUD actions for Recordar model.
 */
class RecordarController extends Controller
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
     * Lists all Recordar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RecordarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Recordar model.
     * @param integer $id_descuento
     * @param string $email
     * @return mixed
     */
    public function actionView($id_descuento, $email)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_descuento, $email),
        ]);
    }

    /**
     * Creates a new Recordar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Recordar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_descuento' => $model->id_descuento, 'email' => $model->email]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Recordar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_descuento
     * @param string $email
     * @return mixed
     */
    public function actionUpdate($id_descuento, $email)
    {
        $model = $this->findModel($id_descuento, $email);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_descuento' => $model->id_descuento, 'email' => $model->email]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Recordar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_descuento
     * @param string $email
     * @return mixed
     */
    public function actionDelete($id_descuento, $email)
    {
        $this->findModel($id_descuento, $email)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Recordar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_descuento
     * @param string $email
     * @return Recordar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_descuento, $email)
    {
        if (($model = Recordar::findOne(['id_descuento' => $id_descuento, 'email' => $email])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
