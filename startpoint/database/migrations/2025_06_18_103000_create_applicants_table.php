<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
        $table->id(); // id (auto-increment integer)
        $table->string('title')->nullable();
        $table->string('first_name', 50);
        $table->string('middle_name', 50)->nullable();
        $table->string('last_name', 50);
        $table->string('phone_number', 30);
        $table->string('cohort', 150);
        $table->string('email_address', 200)->unique();
        $table->string('password', 255);
        $table->boolean('is_active')->default(true);
        $table->string('created_by', 200)->nullable();
        $table->timestamps(); // creates created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
