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
                <div class="col-4">
                    <h4 class="">Add or Update an Item</h4>
                        <p>Embroidery Designs</p>
                    <div class="row">
                        <div class="col">
                            <form action="add_modal_action" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col"><label class="form-label text-start float-start" style="text-align: left;">File Name</label><input class="form-control" type="text"></div>
                                </div>
                                <div class="row">
                                    <div class="col"><label class="form-label text-start float-start" style="text-align: left;">Description</label><textarea class="form-control form-control-lg"></textarea></div>
                                </div>
                                <div class="row">
                                    <div class="col"><label class="form-label float-start">URL</label><input class="form-control" type="url"></div>
                                    <div class="col"><label class="form-label float-start">File Location</label><input class="form-control" type="text"></div>
                                </div>
                                <div class="row">
                                    <div class="col"><label class="form-label float-start">Tags</label><select class="form-select" multiple="">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select></div>
                                    <div class="col"><label class="form-label float-start">Category</label><select class="form-select" multiple="">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="">
                <a href="embroidery.php"><button class="btn btn-light btn-outline-primary" type="button" data-bs-dismiss="">Close</button></a>
                <button class="btn btn-primary" type="button">Save</button>
            </div>
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