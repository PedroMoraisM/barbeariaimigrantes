<!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="painel.php">
                            <img width="75" src="images/icon/logo2.png" alt="" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="painel.php">
                                <i class="fas fa-tachometer-alt"></i>Mensagens</a>
                        </li>
                        
                            <a href="verificaruser.php">
                                <i class="fas fa-user-plus"></i>Controle de Usuários</a>
                        </li>						
						<li>
                            <a href="barbeiros.php">
                                <i class="fas fa-map-marker-alt"></i>Barbeiros</a>
                        </li>
                         <li>
                            <a href="servicos.php">
                                <i class="fas fa-map-marker-alt"></i>Servicos</a>
                        </li>
						<li>
                            <a href="blog.php">
                                <i class="fas fa-map-marker-alt"></i>Blog</a>
                        </li>
						<li>
                            <a href="videos.php">
                                <i class="fas fa-map-marker-alt"></i>Vídeos</a>
                        </li>
						<li>
                            <a href="galeria.php">
                                <i class="fas fa-map-marker-alt"></i>Galeria</a>
                        </li>
						<li>
                            <a href="produtos.php">
                                <i class="fas fa-map-marker-alt"></i>Produtos</a>
                        </li>
						<li>
                            <a href="textos.php">
                                <i class="fas fa-file-alt"></i>Textos e Conteúdo</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img width="75" src="images/icon/logo.png" alt="" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="painel.php">
                                <i class="fas fa-tachometer-alt"></i>Mensagens</a>
                        </li>                 
						<li>
                            <a href="verificaruser.php">
                                <i class="fas fa-user-plus"></i>Controle de Usuários</a>
                        </li>
						<li>
                            <a href="barbeiros.php">
                                <i class="fas fa-users"></i>Barbeiros</a>
                        </li>
						<li>
                            <a href="servicos.php">
                                <i class="fas fa-briefcase"></i>Serviços</a>
                        </li>
						<li>
                            <a href="blog.php">
                                <i class="fab fa-blogger"></i>Blog</a>
                        </li>
						<li>
                            <a href="videos.php">
                                <i class="fab fa-youtube"></i>Vídeos</a>
                        </li>
						<li>
                            <a href="galeria.php">
                                <i class="fas fa-images"></i>Galeria</a>
                        </li>
						<li>
                            <a href="produtos.php">
                                <i class="fas fa-shopping-basket"></i>Produtos</a>
                        </li>
						<li>
                            <a href="textos.php">
                                <i class="fas fa-file-alt"></i>Textos e Conteúdo</a>
                        </li>						
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Pesquisar..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
							
                            <div class="header-button">                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar.png" alt="" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Sair</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">										
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar.png" alt="" />
                                                    </a>
                                                </div>                                                
                                            </div>													
                                            <div class="account-dropdown__footer">
                                                <a href="endsession.php">
                                                    <i class="zmdi zmdi-power"></i>Sair</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
                        </div>
                    </div>
                </div>
            </header>