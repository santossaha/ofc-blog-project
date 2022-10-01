<li class="kt-menu__item {{$activeRoute?'kt-menu__item--active':''}}" aria-haspopup=" true"><a href="{{ $route }}"
    class="kt-menu__link ">
    <i {{ $attributes->merge(['class' => 'kt-menu__link-icon fa']) }}></i><span class="kt-menu__link-text">
        {{ $name }}</span></a>
    </li>
