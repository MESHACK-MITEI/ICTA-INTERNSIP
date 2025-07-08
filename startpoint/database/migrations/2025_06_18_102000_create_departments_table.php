<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
        $table->id(); // id (integer, auto-increment)
        $table->string('name', 255);
        $table->string('department_head')->nullable(); // Allow null values
        $table->text('description')->nullable();
        $table->boolean('is_active')->default(true);
        $table->string('created_by', 200)->nullable(); // <- Add nullable here
        $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
