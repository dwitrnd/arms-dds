<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('exams', function (Blueprint $table) {
            //
            $table->unsignedBigInteger("student_exam_id");

            $table->foreign("student_exam_id")->references("id")->on("student_exams")->onDelete("restrict")->onUpdate("cascade");

            $table->dropForeign("exams_student_id_foreign");
            $table->dropColumn("student_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exams', function (Blueprint $table) {
            //
        });
    }
};
