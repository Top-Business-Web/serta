<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('adminHome')}}">
            <img src="{{ asset($setting->logo) }}" class="header-brand-img light-logo1"
                 alt="">
        </a>
        <!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>العناصر</h3></li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('adminHome')}}">
                <i class="icon icon-home side-menu__icon"></i>
                <span class="side-menu__label">الرئيسية</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admins.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">المشرفين</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('careers.index')}}">
                <i class="fa fa-comment side-menu__icon"></i>
                <span class="side-menu__label">رسائل الوظائف</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('categories.index')}}">
                <i class="fa fa-bars side-menu__icon"></i>
                <span class="side-menu__label">فئات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('benefits.index')}}">
                <i class="fa fa-bars side-menu__icon"></i>
                <span class="side-menu__label">فوائدنا</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('subcategories.index')}}">
                <i class="fa fa-list side-menu__icon"></i>
                <span class="side-menu__label">فئات فرعية</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('product.index')}}">
                <i class="fe fe-codepen side-menu__icon"></i>
                <span class="side-menu__label">المشاريع</span>
            </a>
        </li>


        <li class="slide">
            <a class="side-menu__item" href="{{route('services.index')}}">
                <i class="fe fe-slack side-menu__icon"></i>
                <span class="side-menu__label">الخدمات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('about_us.index')}}">
                <i class="fa fa-users side-menu__icon"></i>
                <span class="side-menu__label">معلومات عنا</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('faqs.index')}}">
                <i class="fa fa-question side-menu__icon"></i>
                <span class="side-menu__label">الأسئلة الشائعة</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('post.index')}}">
                <i class="fa fa-blog side-menu__icon"></i>
                <span class="side-menu__label">المنشورات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('contact.index')}}">
                <i class="icon icon-phone side-menu__icon"></i>
                <span class="side-menu__label">الرسائل</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('partners_success.index')}}">
                <i class="fa fa-newspaper side-menu__icon"></i>
                <span class="side-menu__label">شركاء النجاح</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('quotes.index')}}">
                <i class="fa fa-paper-plane side-menu__icon"></i>
                <span class="side-menu__label">الطلبات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('background_image.index')}}">
                <i class="fa fa-images side-menu__icon"></i>
                <span class="side-menu__label">خلفيات الصفحات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('sliders.index')}}">
                <i class="fe fe-sliders side-menu__icon"></i>
                <span class="side-menu__label">السلايدر</span>
            </a>
        </li>


        <li class="slide">
            <a class="side-menu__item" href="{{route('settings.index')}}">
                <i class="fe fe-settings side-menu__icon"></i>
                <span class="side-menu__label">الاعدادات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.logout')}}">
                <i class="fa fa-door-open side-menu__icon"></i>
                <span class="side-menu__label">تسجيل الخروج</span>
            </a>
        </li>

    </ul>
</aside>