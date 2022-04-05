<?php session_start() ?>

<nav class="navbar navbar-custom bg-dark navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navbar-icon" href="/all_things_anime/src/views/index.php">
                <img src="/all_things_anime/assets/images/favicon.png" width="50" height="40" alt="">
            </a>
            <a class="navbar-brand" href="/all_things_anime/src/views/index.php">All Things Anime!</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle nav-item-custom" href="#" data-toggle="dropdown">Anime</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/all_things_anime/src/views/anime/filter-anime-by-letter.php?letter=A&tab=1">Explore Anime</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle nav-item-custom" href="#" data-toggle="dropdown">Manga</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Explore Anime</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <span class="nav-item-custom icon-gears dropdown-toggle" href="#" data-toggle="dropdown" aria-hidden="true"></span>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li>
                            <?php
                            if (!isset($_SESSION['login_user'])) {
                                echo ('<a href="auth/login.php">Login</a>');
                            } else {
                                echo ('<a href="#">Profile</a>');
                            }
                            ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>