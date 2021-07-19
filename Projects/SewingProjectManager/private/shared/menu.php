<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
                <div class="container"><i class="fas fa-ruler" style="color: var(--bs-blue);font-size: 30px;"></i><a class="navbar-brand" href="<?php echo url_for('index.php'); ?>" style="font-family: Baskervville, serif;font-style: italic;font-weight: bold;color: var(--bs-blue);">&nbsp; Sewing Project Manager</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo url_for('news.php'); ?>">News</a></li>
                        </ul><span class="navbar-text actions"> </span><span class="navbar-text actions"><a class="btn btn-primary border rounded-pill shadow action-button" role="button" href="<?php echo url_for('register.php'); ?>" style="background: var(--bs-blue);font-size: 12px;color: var(--bs-light);">Log In</a> <a class="btn btn-light action-button" role="button" href="#" style="background: var(--bs-blue);font-size: 12px;color: var(--bs-light);">Sign Up</a></span>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>