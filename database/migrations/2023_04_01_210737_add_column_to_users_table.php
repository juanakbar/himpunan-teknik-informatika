<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('divisi_id')->after('id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('kwsb_id')->after('id')->nullable()->constrained('k_w_s_b_s')->cascadeOnDelete();
            $table->string('image')->nullable();
            $table->year('angkatan')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('nim')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('divisi_id');
            $table->dropColumn('image');
            $table->dropColumn('angkatan');
            $table->dropColumn('jurusan');
            $table->dropColumn('nim');
            $table->dropColumn('no_hp');
            $table->dropColumn('alamat');
            $table->dropColumn('tempat_lahir');
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('jenis_kelamin');
        });
    }
};
