<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kegiatan', function (Blueprint $table) {
           $table->increments('id');
           $table->string('jenis_perolehan');
           $table->date('tanggal_perolehan');
           $table->integer('nilai_ekuivalen');
           $table->biginteger('jumlah_perolehan');
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
        Schema::dropIfExists('detail_kegiatan');
    }
}
