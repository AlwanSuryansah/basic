<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\PrediksiMo;
use app\models\TbDatatran;
use app\models\TbDatatranSearch;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */

    /**
     * Displays about page.
     *
     * @return string
     */


    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionPrediksi()
    {
        $searchModel = new TbDatatranSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = new PrediksiMo();
           if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            echo "sukses";
            die();
        }
        return $this->render('prediksi',compact('model'),compact('dataProvider'));

         

    }

       public function actionMasterdata()
    {
        return $this->render('masterdata');
    }

    




    // public function actionTambah()
    // {
    //     $searchModel = new TbDatatranSearch();
    //     $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    //     return $this->render('tambah', [
    //         'searchModel' => $searchModel,
    //         'dataProvider' => $dataProvider,
    //     ]);
    // }

    
}
