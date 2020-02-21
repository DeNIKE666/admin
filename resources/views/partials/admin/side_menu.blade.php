<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            @include('partials.__charedCabinetAndAdmin.user')

            <ul class="nav nav-primary">

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Планы {!! checkLabelRoleOrPermission('plans') !!}</h4>
                </li>

                <li class="nav-item submenu">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('plans') }}">
                                <span class="sub-item">Все планы</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('plans.create') }}">
                                <span class="sub-item">Создать план</span>
                            </a>
                        </li>
                    </ul>
                </li>


                @role('GlAdmin')
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Роли {!! checkLabelRoleOrPermission('roles') !!}</h4>
                    </li>

                    <li class="nav-item submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('roles') }}">
                                    <span class="sub-item">Все роли</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('role.create') }}">
                                    <span class="sub-item">Создать роль</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Права доступа {!!  checkLabelRoleOrPermission('permissions') !!}</h4>
                    </li>

                    <li class="nav-item submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('permissions') }}">
                                    <span class="sub-item">Все права</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('permission.create') }}">
                                    <span class="sub-item">Создать права</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endrole


                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Пользователи {!!  checkLabelRoleOrPermission('users') !!}</h4>
                </li>

                <li class="nav-item submenu">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('users') }}">
                                <span class="sub-item">Все пользователи</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.create') }}">
                                <span class="sub-item">Создать </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Другое {!! checkLabelRoleOrPermission('others') !!}</h4>
                </li>

                <li class="nav-item submenu">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('settings') }}">
                                <span class="sub-item">Настройки</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('f.manager') }}">
                                <span class="sub-item">Ф.Менеджер</span>
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
