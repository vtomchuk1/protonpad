<?php


namespace app\controllers;


use app\models\Card;
use app\models\LoginForm;
use app\models\User;
use phpDocumentor\Reflection\Types\Array_;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class NewController extends AppController
{
    public $layout = 'new';
    public $data_user;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index'],
                'rules' => [
                    /*
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    */
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex(){
        $model = new Card();
        $data = $model->allCardByIdUser(Yii::$app->user->id);
        $this->data_user = [
            'first_name'    => Yii::$app->user->identity->first_name,
            'last_name'     => Yii::$app->user->identity->last_name,
        ];


        return $this->render('index', [
            'data'      => $data,
        ]);
    }

    public function actionCard($id){

        $model = new Card();
        $data = $model->cardById($id, Yii::$app->user->id);

        return $this->render('card', [
            'model' => $data
        ]);
    }

    public function actionLogin(){
        $this->layout = 'login';

        if (!Yii::$app->user->isGuest) {
            $this->redirect('/new/index');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $this->redirect('/new/index');
        }

        $model->password = '';


        return $this->render('login', [
            'model' => $model
        ]);
    }

    public function actionLogout(){
        Yii::$app->user->logout();
        $this->redirect('/');
    }
}