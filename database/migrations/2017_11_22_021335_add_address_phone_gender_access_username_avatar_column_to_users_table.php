<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressPhoneGenderAccessUsernameAvatarColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('address');
            $table->text('username');
            $table->text('avatar');
            
            $table->text('phone');
            $table->enum('gender',['M','F']);
            $table->enum('access',['user','admin'])->default('user');
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
            $table->dropColumn('address');
            $table->dropColumn('username');
            $table->dropColumn('avatar');
            $table->dropColumn('phone');
            $table->dropColumn('gender');
            $table->dropColumn('access');
        });
    }
}
