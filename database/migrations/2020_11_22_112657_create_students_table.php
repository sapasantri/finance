<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('nisn');
            $table->string('full_name');
            $table->enum('gender', array('perempuan', 'laki-laki'));
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->mediumText('hobby');
            $table->mediumInteger('phone');
            $table->enum('active', array('active', 'inactive'));
            $table->Text('address');
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
        Schema::dropIfExists('students');
    }
}
