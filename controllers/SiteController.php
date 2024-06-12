<?php

namespace app\controllers;

use app\models\Leads;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SiteController implements the CRUD actions for Leads model.
 */
class SiteController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Leads models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Leads::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $leads = $query->where(['customer' => 0])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();    
        return $this->render('index', [
            'leads' => $leads,
        ]);
    }

        /**
     * View only customers.
     *
     * @return string
     */
    public function actionViewcustomers()
    {
        $query = Leads::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $leads = $query->where(['customer' => 1])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('customers', [
            'leads' => $leads,
        ]);
    }

            /**
     * View only leads.
     *
     * @return string
     */
    public function actionViewleads()
    {
        $query = Leads::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $leads = $query->where(['customer' => 0])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('leads', [
            'leads' => $leads,
        ]);
    }

    /**
     * Displays a single Leads model.
     * @param varchar $email
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionSearch($email)
    {
        $query = Leads::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $leads = $query->where(['email' => $email])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'leads' => $leads,
        ]);
    }

     /**
     * Send Email.
     */
    public function actionMail($email)
    {
        // Create email message
        $message = Yii::$app->mailer->compose();
        $message->setFrom(['your_email@example.com' => 'Your Name']);
        $message->setTo($email);
        $message->setSubject('Subject of the Email');
        $message->setHtmlBody('<p>This is the body of the email.</p>');

        // Send email
        if ($message->send()) {
        echo 'Email sent successfully.';
        } else {
        echo 'Error sending email.';
        }
    }


        /**
     * Displays a all Leads model.
     */
    public function actionViewall()
    {
        $leads = Leads::find()->all();
        return $this ->render('viewall', ['leads'=>$leads]);
    }

        /**
     * Displays a all Leads model.
     */

    /**
     * Creates a new Leads model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Leads();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['index', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Leads model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

        /**
     * Updates an existing Leads to customer.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionEdit($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('edit', [
            'model' => $model,
        ]);
    }


    /**
     * Deletes an existing Leads model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Leads model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Leads the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Leads::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
