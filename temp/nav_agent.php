<header style="background:  #045975 !important">
        <div class="container">
            <div class="row">
                <div >
                <nav class="navbar navbar-expand-lg" style="background:  #045975 !important">
                    <div class="container-fluid">
                        <a class="navbar-brand text-white" href="index.php">Страховая компания</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <a class="nav-link text-white" href="contracts.php">Просмотр договоров</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex">
                        <ul class="navbar-nav">
                            <?php
                                if(!empty($_SESSION['id_user'])){
                                    echo '<li class="nav-item"><a class="nav-link text-white" href="logout.php">Выйти</a></li>';
                                }
                                else{
                                    echo '<li class="nav-item"><a class="nav-link text-white" href="login.php">Войти</a></li>';
                                    echo '<li class="nav-item"><a class="nav-link text-white" href="reg.php">Регистрация</a></li>';
                                }
                            ?>
                        </ul>
                        </div>
                    </div>
                    </nav> 
                </div>
            </div>
        </div>
    </header> 