<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewAttibutesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nickname')->unique();
            $table->string('description')->nullable();
            $table->enum('sexo',['mujer','hombre','sn'])->default('sn');
            $table->string('country')->nullable();
            $table->boolean('status')->default(0);
            $table->date('fechaNac')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->text('frontpage_photo_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
             $table->dropColumn('nickname')->unique();
            $table->dropColumn('description')->nullable();
            $table->dropColumn('sexo',['mujer','hombre','sn'])->default('sn');
            $table->dropColumn('country')->nullable();
            $table->dropColumn('status')->default(0);
            $table->dropColumn('fechaNac')->nullable();
            $table->dropColumn('profile_photo_path')->nullable();
            $table->dropColumn('frontpage_photo_path')->nullable();

        });
    }
}
