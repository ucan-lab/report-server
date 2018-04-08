<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailies', function (Blueprint $table) {
            $table->increments('id');
            $table->date('work_day')->comment('作業日');
            $table->dateTime('work_start_at')->comment('始業時間');
            $table->dateTime('work_end_at')->comment('終業時間');
            $table->float('work_time', 4, 2)->default(0)->comment('作業時間');
            $table->float('late_time', 4, 2)->default(0)->comment('遅刻時間');
            $table->string('hollow_time', 4, 2)->default(0)->comment('中抜け時間');
            $table->string('remarks')->nullable()->comment('備考');
            $table->text('notice')->nullable()->comment('その他連絡事項');
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
        Schema::dropIfExists('dailies');
    }
}
