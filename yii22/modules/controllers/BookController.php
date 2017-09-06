<?php

namespace app\modules\controllers;

use Yii;
use app\modules\models\Book;
use app\modules\models\BookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends AppAdminController
{
    const file_name_length = 8;
    /**
     * @inheritdoc
     */
    /*public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }*/

    /**
     * Lists all Book models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->get());

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Book model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Book model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Book();
        $status = false;
        return $this->modify($model, $status);
    }

    /**
     * Updates an existing Book model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $status = true;
        return $this->modify($model, $status);
    }

    private function modify($model, $status) {

        $currentPic = $model->pic;


        if ($model->load(Yii::$app->request->post())) {

            if ($status == true){
                unlink(Yii::getAlias('@app'.$currentPic));
            }

            $model->imageFile = UploadedFile::getInstance($model, 'pic');

            $fileName = 'uploads/' . Yii::$app->security->generateRandomString(self::file_name_length) . '.' . $model->imageFile->getExtension();
            $model->pic = '/web/'.$fileName;

            $model->imageFile->saveAs($fileName);
            $model->save();



            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render($model->isNewRecord ? 'create' : 'update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Book model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $currentPic = $this->findModel($id)->pic;
        unlink(Yii::getAlias('@app'.$currentPic));
        $this->findModel($id)->delete();

        return $this->redirect(['index']);

    }

    /**
     * Finds the Book model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Book the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
