<div id="nav" class="nav-container d-flex">
    <div class="nav-content d-flex">
        <!-- Logo Start -->
        <div class="logo position-relative">
            <a href="/dashboards">
                <!-- Logo can be added directly -->
                <!-- <img src="img/logo/logo-white.svg" alt="logo" /> -->

                <!-- Or added via css to provide different ones for different color themes -->
                <div class="img"></div>
            </a>
        </div>
        <!-- Logo End -->

        <!-- Language Switch Start -->
        <div class="language-switch-container">
            <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">ID</a>
                <a href="#" class="dropdown-item active">EN</a>
            </div>
        </div>
        <!-- Language Switch End -->

        <!-- User Menu Start -->
        <div class="user-container d-flex">
            <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="profile" alt="profile" src="img/profile/killua.jpg" />
                <div class="name">Admin 1</div>
            </a>
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
                    <a href="#dashboards">
                        <i data-acorn-icon="home-garage" class="icon" data-acorn-size="18"></i>
                        <span class="label">Home</span>
                    </a>
                    <ul id="dashboards">
                        <li>
                            <a href="/admin">
                                <span class="label">Dashboards</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#courses">
                        <i data-acorn-icon="online-class" class="icon" data-acorn-size="18"></i>
                        <span class="label">Learning</span>
                    </a>
                    <ul id="courses">
                        <li>
                            <a href="/courses">
                                <span class="label">All Courses</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#quiz">
                        <i data-acorn-icon="quiz" class="icon" data-acorn-size="18"></i>
                        <span class="label">Quiz</span>
                    </a>
                    <ul id="quiz">
                        <li>
                            <a href="/quis">
                                <span class="label">All Quiz</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#more">
                        <i data-acorn-icon="gear" class="icon" data-acorn-size="18"></i>
                        <span class="label">More</span>
                    </a>
                    <ul id="more">
                        <li>
                            <a href="/login">
                                <span class="label">Logout</span>
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
</div>
