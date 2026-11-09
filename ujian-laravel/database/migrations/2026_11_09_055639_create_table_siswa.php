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
        Schema::create('table_siswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelas_id')->unsigned();
            $table->foreign('kelas_id')->references('id')->on('table_kelas')->onDelete('restrict');
            $table->string('nis',20)->unique();
            $table->string('nama_lengkap',100);
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('tempat_lahir',100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_hp',20)->nullable();
            $table->string('email',255)->nullable();
            $table->string('asal_sekolah',150);
            $table->string('jurusan',100);
            $table->string('nama_ayah',100)->nullable();
            $table->string('nama_ibu',100)->nullable();
            $table->string('no_hp_wali',20);
            $table->enum('status', ['Aktif','Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_siswa');
    }
};
