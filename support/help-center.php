<?php
require $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php';
?>
<div class="kd-main">
    <?php
    $active = 'support';
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/support-nav.php';
    ?>
    <div class="kd-separator"></div>
    <div class="kd-box-5 bg-grey-6">
        <div class="container">
            <div class="row justify-content-center vertical-gap">
                <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-feature-color-1 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="<?php echo $_CONFIG['docsurl']; ?>">Documentations</a></div>
                            <div class="kd-feature-text">Phasellus interdum est diam, eu varius odio tincidunt eget ultrices et</div>
                            <a href="<?php echo $_CONFIG['docsurl']; ?>" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-feature-color-2 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-book-bookmark"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="<?php echo $_CONFIG['knowledgebaseurl']; ?>">Knowledge Base</a></div>
                            <div class="kd-feature-text">Aliquam id nisi sit amet massa mollis lobortis interdum felis integer at arcu</div>
                            <a href="<?php echo $_CONFIG['knowledgebaseurl']; ?>" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-feature-color-3 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="<?php echo $_CONFIG['forumsurl']; ?>">Forums</a></div>
                            <div class="kd-feature-text">Sed eget nibh justo euismod maximus et vel nisl pellentesque suscipit nisi</div>
                            <a href="<?php echo $_CONFIG['forumsurl']; ?>" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 kd-feature-variable">
                    <div class="kd-feature kd-feature-3 kd-feature-color-4 kd-block-decorated">
                        <div class="kd-feature-icon">
                            <i class="fa-solid fa-ticket"></i>
                        </div>
                        <div class="kd-feature-cont">
                            <div class="kd-feature-title"><a href="<?php echo $_CONFIG['ticketsurl']; ?>">Support Tickets</a></div>
                            <div class="kd-feature-text">Vivamus sceleriue libero velit blandit, hendrerit nisl at,dapibus sollicitudin</div>
                            <a href="<?php echo $_CONFIG['ticketsurl']; ?>" class="kd-btn kd-btn-link d-flex kd-feature-link">Read More <i class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kd-separator"></div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php';
    ?>