<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('travel_requests', function (Blueprint $table) {
            // id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
            $table->id();

            // Foreign Key Columns (BIGINT NOT NULL)
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('policy_id');

            // purpose TEXT NOT NULL
            $table->text('purpose');

            // destination VARCHAR(255) NOT NULL
            $table->string('destination');

            // start_date & end_date DATE NOT NULL
            $table->date('start_date');
            $table->date('end_date');

            // estimated_cost DECIMAL(8, 2) NOT NULL
            $table->decimal('estimated_cost', 8, 2);

            // status ENUM NOT NULL (silakan sesuaikan opsi status di dalam array)
            $table->enum('status', ['draft', 'pending', 'approved', 'rejected', 'completed']);

            // created_at & updated_at TIMESTAMP NOT NULL
            $table->timestamps();

            // Opsional: Relasi Foreign Key Constraints ke tabel terkait
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            // $table->foreign('policy_id')->references('id')->on('travel_policies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
