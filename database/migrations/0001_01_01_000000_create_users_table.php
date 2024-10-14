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
        // Tabel untuk pengguna
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Big Integer PK
            $table->string('name'); // Nama pengguna
            $table->string('email')->unique(); // Email unik
            $table->timestamp('email_verified_at')->nullable(); // Waktu verifikasi email
            $table->string('password'); // Password
            $table->rememberToken(); // Token untuk remember me
            $table->timestamps(); // Kolom created_at dan updated_at
        });

        // Tabel untuk token reset password
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Email sebagai primary key
            $table->string('token'); // Token reset
            $table->timestamp('created_at')->nullable(); // Waktu pembuatan token
        });

        // Tabel untuk sesi pengguna
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // ID sesi sebagai primary key
            $table->foreignId('user_id')->nullable()->index(); // User ID sebagai foreign key
            $table->string('ip_address', 45)->nullable(); // Alamat IP pengguna
            $table->text('user_agent')->nullable(); // Informasi user agent
            $table->longText('payload'); // Payload sesi
            $table->integer('last_activity')->index(); // Aktivitas terakhir pengguna
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus tabel jika rollback dilakukan
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
?>