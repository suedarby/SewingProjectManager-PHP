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
                    <h1 style="font-size: 30px;">Shopping</h1>
                    <p><strong>Shopping list for supplies you are running out of or need to finish a long term UFO</strong></p>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Purchased</th>
                                            <th>Item</th>
                                            <th>Low_stock</th>
                                            <th>Project</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>shopping_id purchased boolean</td>
                                            <td>shopping_id shopping item pulled from project</td>
                                            <td>shopping_id low_stock item pulled from notions trims tools</td>
                                            <td>shopping_id needs_supplies project name item goes with</td>
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