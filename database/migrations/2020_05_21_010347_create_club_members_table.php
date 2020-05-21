<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('club_id');
            $table->unsignedBigInteger('member_id');
            $table->foreign('club_id')->references('id')->on('clubs');
            $table->foreign('member_id')->references('id')->on('users');
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
        Schema::dropIfExists('club_members');
    }
}
