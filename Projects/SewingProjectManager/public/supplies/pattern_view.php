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
                <div class="col-6">
                    <h4 class="">Add or Update an Item</h4>
                        <p>Brands</p>
                    <div class="row">
                        <div class="col">
                            <form action="action" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label text-start float-start" style="text-align: left;">Pattern</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck-1">
                                        <label class="form-check-label" for="formCheck-1">Add to Shopping List</label>
                                    </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="formCheck-2">
                                        <label class="form-check-label" for="formCheck-2">Low Stock&nbsp;</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label text-start float-start" style="text-align: left;">Description</label>
                                        <textarea class="form-control form-control-lg"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label text-start float-start" style="text-align: left;">Image</label>
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label float-start">Number</label>
                                    <input class="form-control" type="text"></div>
                                    <div class="col">
                                        <label class="form-label float-start">Brand</label>
                                    <select class="form-select">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label float-start">Size</label>
                                    <select class="form-select">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label float-start">Style</label>
                                        <select class="form-select" multiple="">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label float-start">Location</label>
                                        <select class="form-select">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label float-start">Category</label>
                                        <select class="form-select" multiple="">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label float-start">Tags</label>
                                        <select class="form-select" multiple="">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            </div>
                    </div>
                <div class="">
                <a href="brand.php"><button class="btn btn-light btn-outline-primary" type="button" data-bs-dismiss="">Close</button></a>
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