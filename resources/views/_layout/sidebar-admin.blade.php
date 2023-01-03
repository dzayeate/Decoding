<?php
$user =  Auth::user();
?>

<div class="nav-content d-flex">
    <!-- Logo Start -->
    <div class="logo position-relative">
        <a href="/Dashboards/">
            <!-- Logo can be added directly -->
            <!-- <img src="/img/logo/logo-white.svg" alt="logo" /> -->

            <!-- Or added via css to provide different ones for different color themes -->
            <div class="img"></div>
        </a>
    </div>
    <!-- Logo End -->

    <!-- Language Switch Start -->
    <div class="language-switch-container">
        <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">DE</a>
            <a href="#" class="dropdown-item active">EN</a>
            <a href="#" class="dropdown-item">ES</a>
        </div>
    </div>
    <!-- Language Switch End -->

    <!-- User Menu Start -->
    <div class="user-container d-flex">
        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="/img/profile/killua.jpg" />
            <div class="name">{{$user->name}}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">ACCOUNT</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="/Dashboards/Profile/{{$user->id}}/Edit">User Info</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <form action="/Pages/Authentication/Logout" method="post">
                                @csrf
                            <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- User Menu End -->

    <!-- Icons Menu Start -->
    <ul class="list-unstyled list-inline text-center menu-icons">
        <li class="list-inline-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                <i data-acorn-icon="search" data-acorn-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" id="pinButton" class="pin-button">
                <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" id="colorButton">
                <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
            </a>
        </li>
    </ul>
    <!-- Icons Menu End -->

    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu">
            <li>
                <a href="/Admin/">
                    <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                    <span class="label">Dashboards</span>
                </a>
            <li>
                <a href="#crud">
                    <i data-acorn-icon="compass" class="icon" data-acorn-size="18"></i>
                    <span class="label">CRUD</span>
                </a>
                <ul id="crud">
                    <li>
                        <a href="/Admin/Courses">
                            <span class="label">Course</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Quiz">
                            <span class="label">Quiz</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Categories">
                            <span class="label">Categories</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#authentication">
                    <i data-acorn-icon="toy" class="icon" data-acorn-size="18"></i>
                    <span class="label">Authentication</span>
                </a>
                <ul id="authentication">
                    <li>
                        <a href="/Admin/Authentication/Users">
                            <span class="label">Users </span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Authentication/Roles">
                            <span class="label">Roles</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Authentication/Permissions">
                            <span class="label">Permissions</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Menu End -->

    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Scrollspy Mobile Button Start -->
        <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
            <i data-acorn-icon="menu-dropdown"></i>
        </a>
        <!-- Scrollspy Mobile Button End -->

        <!-- Scrollspy Mobile Dropdown Start -->
        <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
        <!-- Scrollspy Mobile Dropdown End -->

        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-acorn-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->
</div>
<div class="nav-shadow"></div>
