<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id(); // id: integer
            $table->unsignedBigInteger('user_id'); // user_id: integer (foreign key)
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->string('file_path', 255);
            $table->string('file_name', 255);
            $table->string('file_extension', 10);
            $table->float('file_size_in_kilobytes');
            $table->boolean('is_active')->default(true);
            $table->string('created_by', 200)->nullable();
            $table->timestamps(); // created_at and updated_at

            // Foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
