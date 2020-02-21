<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name')->nullable();
            $table->string('site_description')->nullable();
            $table->string('site_keywords')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('admin_notify')->nullable();
            $table->string('cabinet_notify')->nullable();
            $table->string('google_analytics')->nullable();
            $table->string('user_role_name')->default('user');
            $table->string('admin_role_name')->default('GlAdmin');
            $table->boolean('site_active')->default(true);
            $table->string('smtp_host')->nullable();
            $table->string('smtp_port')->nullable();
            $table->string('smtp_username')->nullable();
            $table->string('smtp_password')->nullable();
            $table->string('smtp_sertificate')->default('tls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
