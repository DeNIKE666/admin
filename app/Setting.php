<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',
        'site_description',
        'site_keywords',
        'site_logo',
        'admin_notify',
        'cabinet_notify',
        'google_analytics',
        'user_role_name',
        'admin_role_name',
        'site_active',
        'smtp_host',
        'smtp_port',
        'smtp_username',
        'smtp_password',
        'smtp_sertificate',
    ];

    public $timestamps = false;
}
