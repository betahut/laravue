<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManageFtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_ftps', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('user_id');
            $table->string('hostname');
            $table->string('username');
            $table->string('password');
            $table->string('port');
            $table->ipAddress('user_ip');
            $table->softDeletes();
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
        Schema::dropIfExists('manage_ftps');
    }
}
