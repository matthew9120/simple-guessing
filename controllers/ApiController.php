<?php


namespace app\controllers;


use app\models\Numbers;
use yii\web\Controller;

class ApiController extends Controller
{
    /**
     * Services API, which gets number by GET and returns a response in 1, which means too high, -1 which means too low and 0 which means the guessed
     * number is correct.
     *
     * @return string
     */
    public function actionNumber()
    {
        $session = \Yii::$app->session;
        $session->open();

        if ($session->isActive) {
            $numberId = $session->get("pk");

            if ($numberId) {
                $randomizedNumber = Numbers::findOne($numberId)->randomizedNumber;

                $guessedNumber = \Yii::$app->request->get("guess");

                if ($guessedNumber === null) {
                    \Yii::$app->response->statusCode = 400;
                    return "You need to enter guessing number in ?guess=(number).";
                }

                if ($guessedNumber > $randomizedNumber) {
                    return 1;
                } else if ($guessedNumber < $randomizedNumber) {
                    return -1;
                } else {
                    return 0;
                }
            }
        }
    }

    /**
     * Services API, which creates new randomized number
     *
     * @return string
     */
    public function actionCreateNumber()
    {
        $session = \Yii::$app->session;

        if ($session->isActive) {
            $session->close();
            $session->destroy();
        }

        $session->open();

        $number = new Numbers();
        $number->id = rand();
        $number->randomizedNumber = rand(1, 100);

        $number->save();

        $session->set("pk", $number->id);
    }
}