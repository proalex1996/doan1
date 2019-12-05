<?php
namespace frontend\controllers;

use frontend\models\BaiViet\BaiViet;
use frontend\models\BaiViet\BaiVietUtil;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\User\LoginForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * @return mixed
     */
    public function actionIndex()
    {
        $modelBaiViet = new BaiViet();
        $listTrangChu = $modelBaiViet->getTrangChu();
        $listTrending = $modelBaiViet->getTrending();
        $listWC = $modelBaiViet->getListBaiViet(3);
        return $this->render('index', [
            'listTrangChu' => $listTrangChu,
            'listTrending' => $listTrending,
            'listWC' => $listWC,


        ]);
    }



    /**
     * Logs in a user.
     *
     * @return mixed
     */
    /**
     * Requests password reset.
     *
     * @return mixed
     */

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    /**
     * Resend verification email
     *
     * @return mixed
     */
}
