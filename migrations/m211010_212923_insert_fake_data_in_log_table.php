<?php

use yii\db\Migration;
use app\models\Log;
/**
 * Class m211010_212923_insert_fake_data_in_log_table
 */
class m211010_212923_insert_fake_data_in_log_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        for ($i=0; $i < 250; $i++) { 
            $model = new Log();
            $model->message = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum neque totam dolores id provident. In facilis aliquam hic deleniti eius, incidunt animi, laboriosam sed est ex corrupti error voluptatibus at!";
            $model->type = rand(1, 10);
            $model->save();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211010_212923_insert_fake_data_in_log_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211010_212923_insert_fake_data_in_log_table cannot be reverted.\n";

        return false;
    }
    */
}
