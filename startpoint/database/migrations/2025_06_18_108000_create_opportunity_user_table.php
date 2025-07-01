<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunityUserTable extends Migration
{
    public function up()
    {
        Schema::create('opportunity_user', function (Blueprint $table) {
            $table->id();

            // ✅ Match types with applicants and opportunities tables
            $table->unsignedBigInteger('user_id'); // actually applicant_id
            $table->unsignedBigInteger('opportunity_id');

            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // ✅ Reference applicants NOT users
            $table->foreign('user_id')
                  ->references('id')
                  ->on('applicants')
                  ->onDelete('cascade');

            $table->foreign('opportunity_id')
                  ->references('id')
                  ->on('opportunities')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('opportunity_user');
    }
}
