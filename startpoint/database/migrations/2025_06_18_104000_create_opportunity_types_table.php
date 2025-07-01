<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunityTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunity_types', function (Blueprint $table) {
            $table->id(); // id: integer (auto-increment)
            $table->string('type', 255);
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('created_by', 200)->nullable();
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
        Schema::dropIfExists('opportunity_types');
    }
}
