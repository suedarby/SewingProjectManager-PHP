<div class="container-fluid">
        <div class="row">
            <div class="col flex-grow-1 flex-shrink-1 flex-wrap flex-sm-grow-0 flex-sm-shrink-1 flex-sm-wrap flex-md-grow-0 flex-md-shrink-1 flex-md-wrap flex-lg-shrink-1 flex-lg-wrap flex-xl-shrink-1 flex-xl-wrap flex-xxl-shrink-1 flex-xxl-wrap">
        <div class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1 flex-lg-shrink-1 flex-xl-shrink-1 flex-xxl-shrink-1" style="font-size: 16px;width: 145.587px;">
            <a class="btn btn-primary btn-sm flex-row flex-shrink-1 flex-sm-grow-0 flex-sm-shrink-1 flex-md-grow-1 flex-md-shrink-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">Menu</a>
            <div class="collapse" id="collapse-1">
                <div class="accordion flex-shrink-1 flex-wrap" role="tablist" id="accordion-1" style="font-size: 12px;width: 136.018px;">
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="false" aria-controls="accordion-1 .item-1" style="font-size: 12px;height: 35px;">Welcome</button></h2>
                        <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordion-1" style="height: 35px;">
                            <div class="accordion-body">
                                <a href="<?php echo url_for('/public/welcome.php'); ?>"><p>Welcome</p></a>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2" style="font-size: 12px;height: 35px;">Supplies</button></h2>
                        <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1" style="height: 258.751px;">
                            <div class="accordion-body">
                                <a href="<?php echo url_for('/public/supplies/embroidery.php'); ?>"><p>Embroidery</p></a>
                                <a href="<?php echo url_for('/public/supplies/embroidery_thread.php'); ?>"><p>Embroidery Thread</p></a>
                                <a href="<?php echo url_for('/public/supplies/fabric.php'); ?>"><p>Fabric</p></a>
                                <a href="<?php echo url_for('/public/supplies/notion.php'); ?>"><p>Notions</p></a>
                                <a href="<?php echo url_for('/public/supplies/pattern.php'); ?>"><p>Patterns</p></a>
                                <a href="<?php echo url_for('/public/supplies/tool.php'); ?>"><p>Tools</p></a>
                                <a href="<?php echo url_for('/public/supplies/trim.php'); ?>"><p>Trims</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3" style="font-size: 12px;height: 35px;">Customizer</button></h2>
                        <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                            <a href="<?php echo url_for('/public/customizer/brand.php'); ?>"><p>Brand</p></a>
                            <a href="<?php echo url_for('/public/customizer/location.php'); ?>"><p>Location</p></a>
                            <a href="<?php echo url_for('/public/customizer/status.php'); ?>"><p>Status</p></a>
                            <a href="<?php echo url_for('/public/customizer/style.php'); ?>"><p>Style</p></a>
                            <a href="<?php echo url_for('/public/customizer/tag.php'); ?>"><p>Tags</p></a>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-4" aria-expanded="false" aria-controls="accordion-1 .item-4" style="font-size: 12px;height: 35px;">Projects</button></h2>
                        <div class="accordion-collapse collapse item-4" role="tabpanel" data-bs-parent="#accordion-1" style="height: 43.6675px;">
                            <div class="accordion-body">
                                <a href="<?php echo url_for('/public/reports/project.php'); ?>">Projects</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-5" aria-expanded="false" aria-controls="accordion-1 .item-5" style="font-size: 12px;height: 35px;">Reports</button></h2>
                        <div class="accordion-collapse collapse item-5" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <a href="<?php echo url_for('/public/reports/shopping.php'); ?>"><p>Shopping</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>