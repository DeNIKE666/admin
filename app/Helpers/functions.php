<?php

// Добавления значка с доступом к роли

if (!function_exists('checkLabelRoleOrPermission'))
{
    function checkLabelRoleOrPermission($permission)
    {
        return user()->hasPermissionTo($permission) || user()->hasRole('GlAdmin') ? '<span data-toggle="tooltip" data-placement="top" title="Разрешено управление данным разделом" class="label-role-permission access"><i class="fal fa-check-circle"></i></span>' : '<span data-toggle="tooltip" data-placement="top" title="Запещено управление данным разделом" class="label-role-permission denied""><i class="fal fa-times-circle"></i></span>';
    }
}

// Получить роль

if (!function_exists('getRoles'))
{
    function getRoles()
    {
        return user()->getRoleNames()[0];
    }
}

// Получить настройки

if (!function_exists('settings'))
{
    function settings()
    {
        return \App\Setting::first();
    }
}

