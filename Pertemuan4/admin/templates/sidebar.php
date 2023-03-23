<?php
$menu = [
    'home' => 'index.php',
    'daftar' => 'daftar.php',
    'produk' => 'produk.php',
    'profile' => 'profile.php',
    'about' => 'about.php'
];

$sicons = [
    'home' => 'home',
    'daftar' => 'plus',
    'produk' => 'list',
    'profile' => 'user',
    'about' => 'info-circle',

];
?>

<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <?php foreach($menu as $key  => $value): ?>
                            <a class="nav-link" href="<?= $value ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-<?= $sicons[$key] ?>"></i></div>
                                <?= $key ?>
                            </a>
                            <?php endforeach ?>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">