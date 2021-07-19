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
<!--form -->
<div class="col">
    <div class="col-8">
        <h4 class="">Embroidery Thread</h4>
            <div class="row">
                <div class="col-3">Thread Brand</div>
                <div class="col">by id</div>
            </div>
            <div class="row">
                <div class="col-3">Color</div>
                <div class="col">by id hex code/pantone/rgb API</div>
            </div>   
            <div class="row">
                <div class="col-3">Location</div>
                <div class="col">by id</div>
            </div>
            <div class="row">
                <div class="col-3">Tags</div>
                <div class="col">by id</div>
            </div>
            <div class="row">
                <div class="col-3">Category</div>
                <div class="col">by id</div>
            </div>
        </div>
            <div class="col-3">
                <a href="embroidery_thread.php">
                    <button class="btn btn-light btn-outline-primary" type="button" data-bs-dismiss="">Close</button></a>
            </div>
</div>
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