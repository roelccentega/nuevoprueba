<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">

               @include('web.includes.navbar-header')
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->

<style type="text/css">
    .main-menu .navbar-header .navbar-brand .brand-logo .logo {
    height: 70px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    position: relative;
    left: 6px;
}
</style>
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="/">
                          <div class="brand-logo"><img class="logo" src="{{url('images/logolanding.png')}}"/></div>
                    <!-- <h2 class="brand-text mb-0">Ccenter Company</h2><i>.</i></a></li> -->

        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
            @include('web.includes.header-dashboard-courses-gnrl')
            <li class=" navigation-header"><span>HTML 5 Tutorial</span>
            </li>
            <li class=" nav-item tabs"><a href="#" class="tablinks" onclick="openCity(event, 'home')" id="defaultOpen">
                    <i class="bx bx-check-circle"></i><span class="menu-title" data-i18n="Email">Inicio</span></a>
            </li>
            <li class=" nav-item"><a href="#" onclick="openCity(event, 'overview')">
                    <i class="bx bx-check-circle"></i><span class="menu-title"
                                                    data-i18n="Chat">Descripción General</span></a>
            </li>
            <li class=" nav-item"><a href="#" onclick="openCity(event, 'syntax')">
                    <i class="bx bx-check-circle"></i><span class="menu-title"
                                                            data-i18n="Todo">Sintaxis</span></a>
            </li>
            <li class=" nav-item"><a href="#" onclick="openCity(event, 'attributes')">
                    <i class="bx bx-check-circle"></i><span class="menu-title"
                                                        data-i18n="Calendar">Atributos</span></a>
            </li>
            <li class=" nav-item"><a href="#" onclick="openCity(event, 'events')">
                    <i class="bx bx-check-circle"></i><span class="menu-title" data-i18n="Kanban">Eventos</span></a>
            </li>
            <li class=" nav-item"><a href="#" onclick="openCity(event, 'forms')">
                    <i class="bx bx-check-circle"></i><span class="menu-title" data-i18n="Formularios">Formularios</span></a>
            </li>

            <li class=" nav-item"><a href="#" onclick="openCity(event, 'microdata')"><i class="bx bx-check-circle"></i>
                    <span class="menu-title"
                          data-i18n="File Manager">Microdata</span></a>
            </li>


        </ul>
    </div>
</div>
<!-- END: Main Menu-->