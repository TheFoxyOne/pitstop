<!-- FOOTER -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/dist/pages/home_page/helpers/make_faqs.php'; ?>
<div class="footer">
    <div class="footer_left_triangle">
        <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/triangle_left.svg"); ?>
    </div>
    <div class="footer_right_triangle">
        <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/triangle_right.svg"); ?>
    </div>

    <div class="footer_faqs">
        <div class="footer_faqs_title">
            <h1><?php echo $data['footer_faqs_title'] ?></h1>
            <div class="title_line">
                <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/minus.svg"); ?>
            </div>
        </div>

        <div class="footer_faqs_collapse">
            <?php foreach($faqs['faqs'] as $index => $faq){
            echo makeFaqs($faq['title'], $faq['content']);
        } ?>
        </div>
    </div>

    <div class="footer_find_us">
        <div class="footer_find_us_title">
            <h1><?php echo $data['footer_find_us_title'] ?></h1>
            <div class="title_line">
                <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/minus.svg"); ?>
            </div>
        </div>
        <div class="footer_find_us_address">
            <p><?php echo $data['footer_find_us_address'] ?></p>
            <p><?php echo $data['footer_find_us_contact'] ?> <a
                    href="mailto: <?php echo $data['footer_find_us_email'] ?>"><?php echo $data['footer_find_us_email'] ?></a>
            </p>
        </div>

        <div class="footer_find_us_map">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="700" height="300" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Park%20Hall%20Rd%20Charnock%20Richard&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        title="Our Location on Google Maps"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                </div>
            </div>

            <div class="footer_find_us_map_copyright">
                <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/powered_by_skinz.svg"); ?>

                <div class="footer_find_us_map_social">
                    <a href="<?php echo $data['footer_find_us_social_facebook_link'] ?>" aria-label="Facebook" class="button circle">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo $data['footer_find_us_social_instagram_link'] ?>" aria-label="Instagram" class="button circle">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>