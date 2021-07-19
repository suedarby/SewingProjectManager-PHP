<?php include '../../private/initialize.php'; ?>
<!--header-->
<?php include (SHARED_PATH . '/public_header.php'); ?>
<!-- end header-->
<!--menu--> 
<body>
    <?php include (SHARED_PATH . '/public_menu.php'); ?>
<!--end menu -->
    <div class="container-fluid">
        <div class="row">
<!--sidebar -->    
<?php include (SHARED_PATH . '/public_sidebar.php'); ?>
<!--end sidebar -->
<div class="col">
    <div class="col-8">
        <h4 class="">Embroidery Designs</h4>
            <div class="row">
                    <div class="col-3">File Name</div>
                    <div class="col">emb_name</div>
                    <div class="col-3">Image<------ new</div>
                    <div class="col">emb_image</div>   
            </div>
            <div class="row">
                    <div class="col-3">Description</div>
                    <div class="col">emb_descri</div>

            </div>
            <div class="row">
                    <div class="col-3">URL</div>
                    <div class="col">emb_url</div>
            </div>
            <div class="row">
                    <div class="col-3">File Location<----- change to file path</div>
                    <div class="col">file_path<------ new</div>
            </div>
            <div class="row">
                    <div class="col-3">Tags</div>
                    <div class="col">tag -- loop for multi select</div>
            </div>
            <div class="row">
                    <div class="col-3">Category</div>
                    <div class="col">category  -- loop for multi select</div>
            </div>                         
    </div>
</div>
        </div>

        <div class="row">
            <a href="embroidery.php">
                <button class="btn btn-light btn-outline-primary" type="button" data-bs-dismiss="">Close</button>
            </a>
        </div>
    </div>
    <!--footer -->
<?php include (SHARED_PATH . '/footer.php'); ?>
<!-- end footer --> 
    <!--scripts-->
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/smart-forms.min.js"></script>
    <script src="../../assets/js/bs-init.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/Logged-in-Sidebar.js"></script>
</body>
</html>