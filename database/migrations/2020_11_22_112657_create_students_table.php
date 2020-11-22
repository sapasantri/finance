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
            $table->String('phone');
            $table->enum('active', array('active', 'inactive'));
            $table->char('village_id', 10);
            $table->Text('address');
            $table->timestamps();

            $table->foreign('village_id')
            ->references('id')
            ->on(config('laravolt.indonesia.table_prefix').'villages')
            ->onUpdate('cascade')->onDelete('restrict');

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
