<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php">PHP BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-bars"></i> Font Awesome fontawesome.com -->
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/index.php">Домой</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/contacts.php">Контакты</a></li>
                <?php
                     if(!isset($_COOKIE['log'])):
                     
                ?>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/reg.php">Регистрация</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/auth.php">Вход</a></li>
                <?php
                    else:
                ?>
                 <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/article.php">Добавить статью</a></li>';
                 <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/auth.php">Кабинет пользователя</a></li>
                <?php
                    endif;
                ?>
            </ul>
        </div>
    </div>
</nav>


<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Ваш Блог</h1>
                    <span class="subheading">Присоединяйся прямо сейчас!</span>
                </div>
            </div>
        </div>
    </div>
</header>