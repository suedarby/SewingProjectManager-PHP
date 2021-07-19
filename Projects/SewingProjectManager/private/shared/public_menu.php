<div class="container-fluid flex-grow-1 flex-shrink-1">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="font-size: 13px;">
                    <div class="container">
                        <a class="navbar-brand" href="<?php echo url_for('index.php'); ?>" style="color: var(--bs-blue);font-family: Baskervville, serif;font-weight: bold;font-style: italic;"><i class="fas fa-ruler" style="color: var(--bs-blue);"></i>Sewing Project Manager</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo url_for('/public/welcome.php'); ?>">Welcome</a></li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Topics</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo url_for('/public/supplies/embroidery.php'); ?>"><p>Embroidery</p></a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/supplies/embroidery_thread.php'); ?>"><p>Embroidery Thread</p></a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/supplies/fabric.php'); ?>"><p>Fabric</p></a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/supplies/notion.php'); ?>"><p>Notions</p></a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/supplies/pattern.php'); ?>"><p>Patterns</p></a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/supplies/tool.php'); ?>"><p>Tools</p></a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/supplies/trim.php'); ?>"><p>Trims</p></a>
                                        <h6 class="dropdown-header">Customizer</h6>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/customizer/brand.php'); ?>"><p>Brand</p></a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/customizer/location.php'); ?>"><p>Location</p></a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/customizer/status.php'); ?>"><p>Status</p></a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/customizer/style.php'); ?>"><p>Style</p></a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/customizer/tag.php'); ?>"><p>Tags</p></a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Reports</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo url_for('/public/reports/project.php'); ?>">Projects</a>
                                        <a class="dropdown-item" href="<?php echo url_for('/public/reports/shopping.php'); ?>"><p>Shopping</p></a></li>
                            </ul>
                            <form class="me-auto search-form" target="_self">
                                <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                            </form><a class="btn btn-light action-button" role="button" href="#" style="background: var(--bs-blue);">LogOut</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>