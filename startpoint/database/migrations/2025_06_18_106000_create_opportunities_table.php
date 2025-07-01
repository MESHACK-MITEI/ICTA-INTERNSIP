<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id(); // id: integer
            $table->string('title', 255);
            $table->string('department', 255);
            $table->string('opportunity_type', 255);
            $table->text('opportunity_description')->nullable();
            $table->text('core_competencies')->nullable();
            $table->string('compensation_type', 255);
            $table->string('compensation_currency', 255)->nullable();
            $table->float('compensation_amount')->nullable();
            $table->date('expiry_date')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('created_by', 200)->nullable();
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opportunities');
    }
}
