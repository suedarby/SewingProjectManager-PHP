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
                    <h1 style="font-size: 30px;">Tools</h1>
                <p><strong>A list of Tools and where you put them (or where they belong). Sometimes you also have to replace a tool so you can add it to a shopping list.</strong><br><br></p>
                <div class="row">
                        <div class="col" style="text-align: right;">
                            <a href="brand_new_update_form.php">  
                                <button type="button" class="btn btn-primary"   id="brand">                    
                                    <i class="fas fa-pencil-ruler"></i>&nbsp;New Item
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tool</th>
                                        <th>Location</th>
                                        <th>Shopping List</th>
                                        <th>Edit &amp; Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>tool_id tool</p><a href="#"></a>
                                        </td>
                                        <td>tool_id tool_location<br></td>
                                        <td>tool_id tool_shopping<br></td>
                                        <td>
                                            <div class="btn-group" role="group"><button class="btn btn-primary" type="button"><i class="far fa-edit"></i></button><a class="btn btn-primary" role="button"><i class="fa fa-trash"></i></a></div>&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
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