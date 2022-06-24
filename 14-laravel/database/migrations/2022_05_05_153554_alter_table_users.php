<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'fullname');           
            $table->bigInteger('phone')->after('email');           
            $table->date('birthday')->after('phone');           
            $table->string('gender')->after('birthday');           
            $table->string('address')->after('gender');            
            $table->string('photo')->default('images/no-photo.png')->after('address');           
            $table->string('role')->default('Customer')->after('photo');           
            $table->boolean('active')->default(1)->after('role');           

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
            $table->renameColumn('fullname', 'name');           
            $table->dropColumn('phone', 'birthday','gender','address','photo','role','active');      
        });
    }
};
