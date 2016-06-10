<?php

namespace app\controllers;

use Yii;
use app\models\UbicacionDescuento;
use app\models\UbicacionDescuentoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UbicacionDescuentoController implements the CRUD actions for UbicacionDescuento model.
 */
class UbicacionDescuentoController extends Controller
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
     * Lists all UbicacionDescuento models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UbicacionDescuentoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UbicacionDescuento model.
     * @param integer $id_ubicacion
     * @param integer $id_descuento
     * @return mixed
     */
    public function actionView($id_ubicacion, $id_descuento)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_ubicacion, $id_descuento),
        ]);
    }

    /**
     * Creates a new UbicacionDescuento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UbicacionDescuento();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_ubicacion' => $model->id_ubicacion, 'id_descuento' => $model->id_descuento]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UbicacionDescuento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_ubicacion
     * @param integer $id_descuento
     * @return mixed
     */
    public function actionUpdate($id_ubicacion, $id_descuento)
    {
        $model = $this->findModel($id_ubicacion, $id_descuento);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_ubicacion' => $model->id_ubicacion, 'id_descuento' => $model->id_descuento]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing UbicacionDescuento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_ubicacion
     * @param integer $id_descuento
     * @return mixed
     */
    public function actionDelete($id_ubicacion, $id_descuento)
    {
        $this->findModel($id_ubicacion, $id_descuento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UbicacionDescuento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_ubicacion
     * @param integer $id_descuento
     * @return UbicacionDescuento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_ubicacion, $id_descuento)
    {
        if (($model = UbicacionDescuento::findOne(['id_ubicacion' => $id_ubicacion, 'id_descuento' => $id_descuento])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
