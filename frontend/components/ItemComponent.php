<?php 
    // TODO: Minggu 5 Latihan
    namespace frontend\components;
    use yii\base\Component;
    use Yii;

    class ItemComponent extends Component
    {
        // define event
        const EVENT_ITEM_LOGGING = 'itemLogging';

        // create event handler
        public static function itemLoggingHandler() {
            $stat = new \app\models\Statistics();
            $stat->access_time = Yii::$app->formatter->asDatetime('now', 'php:Y-m-d H:i:s');
            $stat->user_ip = Yii::$app->request->userIP;
            $stat->user_host = Yii::$app->request->userHost;
            $stat->path_info = Yii::$app->request->pathInfo;
            $stat->query_string = Yii::$app->request->queryString;

            $stat->save();
        }
    }
?>