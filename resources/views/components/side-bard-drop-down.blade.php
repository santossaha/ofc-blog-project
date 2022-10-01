<li class="kt-menu__item  kt-menu__item--submenu {{ $activeRoute ? 'kt-menu__item--here kt-menu__item--open' : '' }} "
    aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
        class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa fa-cogs"></i><span
            class="kt-menu__link-text">{{ $lable }}</span><i
            class="kt-menu__ver-arrow la la-angle-right"></i></a>
    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
        <ul class="kt-menu__subnav">
            {{ $slot }}
            </ul>
    </div>
</li>
