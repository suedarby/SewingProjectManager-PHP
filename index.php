<?php include 'private/initialize.php'; ?>
<!--header-->
    <?php include (SHARED_PATH . '/header.php'); ?>
<!-- end header-->
<body>
<!--menu--> 
    <?php include (SHARED_PATH . '/menu.php'); ?>
<!--end menu -->
<div class="container-fluid">
    <div class="row">
<!--sidebar -->    
    <?php include (SHARED_PATH . '/sidebar.php'); ?>
<!--end sidebar -->
        <div class="col-9 flex-grow-1 flex-wrap" data-bs-toggle="tooltip" data-bss-tooltip="">
            <h1 style="color: var(--bs-blue);font-family: Baskervville, serif;font-style: italic;">Sewing Project Manager</h1>
            <p style="font-family: Baskervville, serif;font-size: 21px;color: var(--bs-blue);"><strong><em>Take Stock of Your Stash!</em></strong></p>
            <div class="row">
                <div class="col">
                    <p>This is a project and supplies tracker for sewing projects.&nbsp; It can track what items need to be purchased or what is&nbsp;already "in stock" to avoid over buying which is a bad habit of those who sew!&nbsp;<br></p>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Problems</h4>
                        <ul class="list-group">
                            <li class="list-group-item"><span>What Projects do I have, where are they and at what stage are they at?</span></li>
                            <li class="list-group-item"><span>What Patterns do I already have? Do I have something close to what I want already? Is the pattern complete or has a piece or two been lost?</span></li>
                            <li class="list-group-item"><span>What Notions or Tools do I have and what do I need?</span></li>
                            <li class="list-group-item"><span>What Machine Embroidery Designs do I have and where did I find it? What tools do I need or want? What thread do I have? What do I need?</span></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Solutions</h4>
                        <ul class="list-group">
                            <li class="list-group-item"><span>List out your Projects and see the details of what you do and don't have to complete it.</span></li>
                            <li class="list-group-item"><span>Check your list of Patterns before you buy another one. You may have something in your stash and can save money to be used on fabric of course! Track where those internet patterns came from so if something goes wrong you know where to go for help or replacement pattern pieces.</span></li>
                            <li class="list-group-item"><span>Track your Notions and know when you need something by using the Shopping List feature. Track your Tools and&nbsp; Embroidery Thread, see where they are and if you need to replace any, add it to the Shopping List.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer -->
    <?php include (SHARED_PATH . '/footer.php'); ?>
<!-- end footer -->    
</body>

</html>