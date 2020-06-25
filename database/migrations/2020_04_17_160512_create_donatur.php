<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donatur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_donatur');
            $table->string('jenis_kelamin_donatur');
            $table->string('status');
            $table->string('afiliasi');
            $table->string('no_rekening')->nullable();
            $table->string('alamat_donatur');
            $table->integer('group_id');
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
        Schema::dropIfExists('donatur');
    }
}
