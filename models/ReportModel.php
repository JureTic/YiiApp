<?php
namespace app\models;

use Yii;

class ReportModel{

    public static function getprogress(){
        $haha = Yii::$app->db->createCommand('
                SELECT SUM(tom_report.percent_done) / COUNT(tom_report.percent_done) AS progress
                FROM tom_report
                LEFT JOIN tom_task
                ON tom_report.task_id = tom_task.id
                WHERE tom_task.project_id = 1')
            ->queryOne();

        return $haha;
    }

}