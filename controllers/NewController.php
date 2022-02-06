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
        Yii::$app->view->title = "Головна сторінка";
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

        Yii::$app->view->title = 'Змінити записку';

        $model = new Card();
        $data = $model->cardById($id, Yii::$app->user->id);

        if ($this->request->isPost && $data->load($this->request->post()) && $data->save()) {
            $this->redirect('/new/index');
        }

        return $this->render('card', [
            'model' => $data
        ]);
    }

    public function actionCreateCard(){

        Yii::$app->view->title = 'Створити записку';

        $model = new Card();

        $model->id_user = Yii::$app->user->id;
        $model->date_create = date("Y-m-d H:i:s");
        $model->del = 0;

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            $this->redirect('/new/index');
        }

        return $this->render('card', [
            'model' => $model
        ]);
    }

    public function actionDeleteCard($id){

        $model = new Card();

        if (Yii::$app->user->isGuest) {
            return $this->redirect('/new/index');
        }

        $model->deleteCardById($id, Yii::$app->user->id, 'save');
        return $this->redirect('/new/index');
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