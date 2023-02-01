        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning text-dark"  id="navbarNav">
        <!--<a class="navbar-brand" href="index.php">
            <img src="./imagens/jmj2023abt.png" width="50" height="50" alt="">
        </a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav">

    

                <?php
                if (@$_SESSION['usuario_id'] == TRUE) {
                ?>
                    <form class="form-inline my-2 my-lg-0 mx-4">
                        <?Php
                        echo "<img class='img-profile' src='../imagens/userm.jpg' width='40px' height='40px'>";

                        ?>
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link"><?= @$_SESSION['usuario_nome']. " ". $_SESSION['usuario_apelido']  ?></a>
                            </li>
                        </ul>
                    </form>
                <?php
                }
                ?>


            </ul>
        </div>
        </div>
    </nav>