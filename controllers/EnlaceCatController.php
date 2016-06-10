<?php

namespace app\controllers;

use Yii;
use app\models\EnlaceCat;
use app\models\EnlaceCatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EnlaceCatController implements the CRUD actions for EnlaceCat model.
 */
class EnlaceCatController extends Controller
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
     * Lists all EnlaceCat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EnlaceCatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EnlaceCat model.
     * @param integer $id_subcat
     * @param integer $id_cat
     * @return mixed
     */
    public function actionView($id_subcat, $id_cat)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_subcat, $id_cat),
        ]);
    }

    /**
     * Creates a new EnlaceCat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EnlaceCat();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_subcat' => $model->id_subcat, 'id_cat' => $model->id_cat]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EnlaceCat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_subcat
     * @param integer $id_cat
     * @return mixed
     */
    public function actionUpdate($id_subcat, $id_cat)
    {
        $model = $this->findModel($id_subcat, $id_cat);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_subcat' => $model->id_subcat, 'id_cat' => $model->id_cat]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EnlaceCat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_subcat
     * @param integer $id_cat
     * @return mixed
     */
    public function actionDelete($id_subcat, $id_cat)
    {
        $this->findModel($id_subcat, $id_cat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EnlaceCat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_subcat
     * @param integer $id_cat
     * @return EnlaceCat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_subcat, $id_cat)
    {
        if (($model = EnlaceCat::findOne(['id_subcat' => $id_subcat, 'id_cat' => $id_cat])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
