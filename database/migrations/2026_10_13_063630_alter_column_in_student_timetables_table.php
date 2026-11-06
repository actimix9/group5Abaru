
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
        Schema::table('student_timetables', function (Blueprint $table) {
            $table->foreign('subject_id')
                ->references('id')->on('subjects');

            $table->foreign('day_id')
                ->references('id')->on('days');

            $table->foreign('hall_id')
                ->references('id')->on('halls');

            $table->foreign('user_id')
                ->references('id')->on('users');

            $table->foreign('lecturer_group_id')
                ->references('id')->on('lecturer_groups');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_timetables', function (Blueprint $table) {
            $table->dropForeign(['subject_id']);
            $table->dropForeign(['day_id']);
            $table->dropForeign(['hall_id']);
            $table->dropForeign(['user_id']);
            $table->dropForeign(['lecturer_group_id']);
        });
    }
};
