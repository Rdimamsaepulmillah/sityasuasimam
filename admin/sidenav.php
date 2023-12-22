
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if($_SESSION['role'] === 'admin'){

?>
                            <a class="nav-link" href="berita.php">
                                Berita
                            </a>
                            <a class="nav-link" href="agenda.php">
                                Agenda
                            </a>
                            <a class="nav-link" href="galeri.php">
                                Gallery
                            </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </nav>
            </div>