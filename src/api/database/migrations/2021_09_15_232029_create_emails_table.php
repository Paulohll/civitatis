<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('type_email')->references('id')->on('categories');
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('account');
            $table->string('token')->nullable();
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
       
        Schema::table('emails', function (Blueprint $table) {
            $table->dropForeign('emails_type_email_foreign');
            $table->dropForeign('emails_user_id_foreign')->nullable()->after('id');; //
           $table->dropColumn('user_id'); //
        });

        Schema::dropIfExists('emails');

    }
}
