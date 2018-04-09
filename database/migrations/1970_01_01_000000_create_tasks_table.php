<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->comment('プロジェクトID');
            $table->integer('type')->comment('種別 0: 通常 1: 問題');
            $table->string('title')->comment('タイトル');
            $table->text('content')->nullable()->comment('内容');
            $table->date('due_date')->nullable()->comment('期限');
            $table->float('work_hour', 4, 2)->default(0)->comment('作業時間');
            $table->integer('progress_rate')->default(0)->comment('進捗率');
            $table->float('budget', 5, 2)->default(0)->comment('予定工数');
            $table->float('actual', 5, 2)->default(0)->comment('実績工数');
            $table->date('started_date')->nullable()->comment('開始日');
            $table->date('completed_date')->nullable()->comment('完了日');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
