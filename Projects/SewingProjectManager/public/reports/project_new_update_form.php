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
                <div class="col-11">
                    <h4 class="">Add or Update an Item</h4>
                        <p>Projects</p>
                    <div class="row">
                        <div class="col">
                            <form action="action" method="post" enctype="multipart/form-data">
                                <div class="row"> <!--project name-->
                                    <div class="col-2">
                                        <label class="form-label">Project Name</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row"><!--description-->
                                    <div class="col-2">
                                        <label class="form-label">Description&nbsp;</label>
                                    </div>
                                    <div class="col">
                                        <textarea class="form-control form-control-lg"></textarea>
                                    </div>
                                </div>
                                <div class="row"><!--pattern number & brand-->
                                    <div class="col-2">
                                        <label class="form-label">Pattern Number</label>
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="number">
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Pattern Brand</label>
                                    </div>
                                    <div class="col">
                                        <select class="form-select">
                                                <optgroup label="This is a group">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                            </select>
                                    </div>
                                </div>
                                <div class="row"><!--image-->
                                    <div class="col-2">
                                    <label class="form-label">Image</label>
                                    </div>
                                    <div class="col">
                                    <input class="form-control" type="file">
                                    </div>
                                    <div class="col">
                                    <picture><img class="float-start"></picture>
                                    </div>
                                </div>
                                <div class="row"><!--fabric & notions-->
                                    <div class="col-2"><!--fabric-->
                                        <label class="form-label">Fabric&nbsp;</label>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" multiple="">
                                                <optgroup label="Hold CTRL">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                            </select>
                                    </div>
                                    <div class="col-2"><!--notions-->
                                        <label class="form-label">Notions&nbsp;</label>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" multiple="">
                                                <optgroup label="Hold CTRL">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                            </select>
                                    </div>
                                </div>  
                                <div class="row">  <!--trim & tool-->
                                    <div class="col-2"><!--trim-->
                                        <label class="form-label">Trims&nbsp;</label>
                                    </div>
                                    <div class="col">
                                        <select class="form-select" multiple="">
                                            <optgroup label="Hold CTRL">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-2"><!--tool-->
                                        <label class="form-label">Tools&nbsp;</label>
                                        </div>
                                        <div class="col">
                                            <select class="form-select" multiple="">
                                                <optgroup label="Hold CTRL">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                </div>
                                <div class="row"><!--location & status-->
                                    <div class="col-2"><!--location-->
                                    <label class="form-label">Location&nbsp;</label>
                                    </div>
                                    <div class="col">
                                    <select class="form-select" multiple="">
                                        <optgroup label="This is a group">
                                            <option value="12" selected="">This is item 1</option>
                                            <option value="13">This is item 2</option>
                                            <option value="14">This is item 3</option>
                                        </optgroup>
                                    </select>
                                    </div>
                                    <div class="col-2"><!--status-->
                                        <label class="form-label">Status</label>
                                    </div>
                                    <div class="col">
                                        <select class="form-select" multiple="">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row"> <!--tags-->
                                    <div class="col-2"><!--tags-->
                                        <label class="form-label">Tags</label>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-select" multiple="">
                                            <optgroup label="Hold CTRL">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <label class="form-check-label" for="formCheck-1">Embroidery?</label> 
                                            <input class="form-check-input" type="checkbox" id="formCheck-1">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check">
                                            <label class="form-check-label" for="formCheck-2">Needs Supplies?</label>
                                            <input class="form-check-input" type="checkbox" id="formCheck-2">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label">Design</label>
                                                <select class="form-select">
                                                    <optgroup label="This is a group">
                                                        <option value="12" selected="">This is item 1</option>
                                                        <option value="13">This is item 2</option>
                                                        <option value="14">This is item 3</option>
                                                    </optgroup>
                                                </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Thread Colors</label>
                                                <select class="form-select" multiple="">
                                                <optgroup label="This is a group">
                                                    <option value="12" selected="">This is item 1</option>
                                                    <option value="13">This is item 2</option>
                                                    <option value="14">This is item 3</option>
                                                </optgroup>
                                                </select>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    <div class="row">
                <div class="">
                <a href="project.php">
                    <button class="btn btn-light btn-outline-primary" type="button" data-bs-dismiss="">Close</button>
                </a>
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