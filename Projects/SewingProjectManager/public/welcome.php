<?php include '../private/initialize.php'; ?>
<?php 
if(!isset($page_title)) { $page_title = 'Sewing Project Manager';}
?>
<!--header-->
<?php include (SHARED_PATH . '/public_header.php'); ?>
<!-- end header-->
<body>
<!--menu--> 
<?php include (SHARED_PATH . '/public_menu.php'); ?>
<!--end menu -->
    <div class="container-fluid">
        <div class="row">
<!--sidebar -->    
<?php include (SHARED_PATH . '/public_sidebar.php'); ?>
<!--end sidebar -->       
            <div class="col">
                <h1 style="font-size: 30px;">Welcome</h1>
                <p><strong>content goes below here</strong></p>
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation" style="color: var(--bs-blue);"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Supplies</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Customizer</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Projects</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-5">Reports</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <h2 style="font-size: 20px;">Supplies Overview</h2>
                            <p>put the fabric query here&nbsp;</p>
                            <h3 style="font-size: 18px;"><a href="fabric.php">Fabric</a></h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Color</th>
                                            <th>Status</th>
                                            <th>Location</th>
                                            <th>Yardage</th>
                                            <th>Tags</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>fabric_descri</td>
                                            <td>color_id</td>
                                            <td>status_id</td>
                                            <td>location_id</td>
                                            <td>fabric_yardage</td>
                                            <td>tag_id</td>
                                        </tr>
                                        <tr>
                                            <td>fabric_descri</td>
                                            <td>color_id</td>
                                            <td>status_id</td>
                                            <td>location_id</td>
                                            <td>fabric_yardage</td>
                                            <td>tag_id</td>
                                        </tr>
                                        <tr>
                                            <td>fabric_descri</td>
                                            <td>color_id</td>
                                            <td>status_id</td>
                                            <td>location_id</td>
                                            <td>fabric_yardage</td>
                                            <td>tag_id</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>put the notions query here</p>
                            <h3><a href="notion.php" style="font-size: 18px;">Notions</a></h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Type</th>
                                            <th>Qty</th>
                                            <th>Status</th>
                                            <th>Location</th>
                                            <th>Tag</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>notion_descri</td>
                                            <td>notion_type</td>
                                            <td>notion_qty</td>
                                            <td>status_id</td>
                                            <td>location_id</td>
                                            <td>tag_id</td>
                                        </tr>
                                        <tr>
                                            <td>notion_descri</td>
                                            <td>notion_type</td>
                                            <td>notion_qty</td>
                                            <td>status_id</td>
                                            <td>location_id</td>
                                            <td>tag_id</td>
                                        </tr>
                                        <tr>
                                            <td>notion_descri</td>
                                            <td>notion_type</td>
                                            <td>notion_qty</td>
                                            <td>status_id</td>
                                            <td>location_id</td>
                                            <td>tag_id</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>put the pattern query here</p>
                            <h3><a href="notion.php" style="font-size: 18px;">Patterns</a></h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Brand</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>pattern_number</td>
                                            <td>brand_id</td>
                                            <td>pattern_descri</td>
                                            <td>image_id</td>
                                        </tr>
                                        <tr>
                                            <td>pattern_number</td>
                                            <td>brand_id</td>
                                            <td>pattern_descri</td>
                                            <td>image_id</td>
                                        </tr>
                                        <tr>
                                            <td>pattern_number</td>
                                            <td>brand_id</td>
                                            <td>pattern_descri</td>
                                            <td>image_id</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>put the trims query here</p><a href="trim.php" style="font-size: 18px;">Trims</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Type</th>
                                            <th>Yardage</th>
                                            <th>Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>trim_descri</td>
                                            <td>trim_type</td>
                                            <td>trim_yardage</td>
                                            <td>location_id</td>
                                        </tr>
                                        <tr>
                                            <td>trim_descri</td>
                                            <td>trim_type</td>
                                            <td>trim_yardage</td>
                                            <td>location_id</td>
                                        </tr>
                                        <tr>
                                            <td>trim_descri</td>
                                            <td>trim_type</td>
                                            <td>trim_yardage</td>
                                            <td>location_id</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>put the tools query here</p><a href="tool.php" style="font-size: 18px;">Tools</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Tool</th>
                                            <th>Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>tool</td>
                                            <td>location_id</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p><strong>end content</strong></p>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2">
                            <h2 style="font-size: 20px;">Customizer</h2>
                            <p><strong>content goes below here</strong></p>
                            <h3 style="font-size: 18px;"><a href="brand.php">Custom Details</a></h3>
                            <p>Paragraph</p>
                            <h3 style="font-size: 18px;"></h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Brand</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>brand</td>
                                        </tr>
                                        <tr>
                                            <td>brand</td>
                                        </tr>
                                        <tr>
                                            <td>brand</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 style="font-size: 18px;"><a href="category.php">Category</a></h3>
                            <p>Paragraph</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>category</td>
                                        </tr>
                                        <tr>
                                            <td>category</td>
                                        </tr>
                                        <tr>
                                            <td>category</td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 style="font-size: 18px;"><a href="location.php">Location</a></h3>
                            <p>Paragraph</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>location</td>
                                        </tr>
                                        <tr>
                                            <td>location</td>
                                        </tr>
                                        <tr>
                                            <td>location</td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 style="font-size: 18px;"><a href="#">Status</a></h3>
                            <p>Paragraph</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>status</td>
                                        </tr>
                                        <tr>
                                            <td>status</td>
                                        </tr>
                                        <tr>
                                            <td>status</td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 style="font-size: 18px;"><a href="#">Style</a></h3>
                            <p>Paragraph</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Style</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>style</td>
                                        </tr>
                                        <tr>
                                            <td>style</td>
                                        </tr>
                                        <tr>
                                            <td>style</td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 style="font-size: 18px;"><a href="#">Tags</a></h3>
                            <p>Paragraph</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Tags</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>tag</td>
                                        </tr>
                                        <tr>
                                            <td>tag</td>
                                        </tr>
                                        <tr>
                                            <td>tag</td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <p><strong>end customizer tab</strong></p>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3">
                            <h1 style="font-size: 20px;">Project List</h1>
                            <p>content goes below here</p>
                            <h1 style="font-size: 18px;"><a href="#">Projects</a></h1>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Pattern Number</th>
                                            <th>Brand</th>
                                            <th>Fabric</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>project_name</td>
                                            <td>pattern_number</td>
                                            <td>brand_id</td>
                                            <td>fabric_id</td>
                                            <td>location_name</td>
                                            <td>status_id</td>
                                        </tr>
                                        <tr>
                                            <td>project_name</td>
                                            <td>pattern_number</td>
                                            <td>brand_id</td>
                                            <td>fabric_id</td>
                                            <td>location_name</td>
                                            <td>status_id</td>
                                        </tr>
                                        <tr>
                                            <td>project_name</td>
                                            <td>pattern_number</td>
                                            <td>brand_id</td>
                                            <td>fabric_id</td>
                                            <td>location_name</td>
                                            <td>status_id</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>end of project content</p>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-5">
                            <h1 style="font-size: 20px;">Reports</h1>
                            <p>Reports is a future development goal</p>
                            <h4>Shopping List</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Column 1</th>
                                            <th>Column 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Cell 2</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 3</td>
                                            <td>Cell 4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p>end of reports content</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/smart-forms.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/Logged-in-Sidebar.js"></script>
<!--footer -->
<?php include (SHARED_PATH . '/footer.php'); ?>
<!-- end footer --> 
</body>
</html>