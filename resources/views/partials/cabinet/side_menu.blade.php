<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Финансы</h4>
                </li>

                <li class="nav-item submenu">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('pay') }}">
                                <span class="sub-item">Пополнить баланс</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('deposits') }}">
                                <span class="sub-item">Депозиты</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('withdraw') }}">
                                <span class="sub-item">Вывод средств</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Другое</h4>
                </li>

                <li class="nav-item submenu">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('stats') }}">
                                <span class="sub-item">Статистика</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('stats') }}">
                                <span class="sub-item">Реф. программа</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
