<!-- ABOUT PITSTOP -->
<div class="about_pitstop">
    <div class="about_pitstop_column_a">
        <div class="about_pitstop_column_a_content">
            <h1><?php echo $data['about_pitstop_title'] ?></h1>
            <div class="title_line">
                <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/minus.svg"); ?>
            </div>
            <h3><?php echo $data['about_pitstop_description'] ?></h3>
            <p><?php echo $data['about_pitstop_content_a'] ?>
                <span><?php echo $data['about_pitstop_content_b'] ?></span>
            </p>
            <p>
                <?php echo $data['about_pitstop_content_c'] ?>
            </p>
            <div class="button book_your_tickets_now_svg">
                <a href="<?php echo $data['about_pitstop_button_link'] ?>">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/book_tickets_now.svg"); ?>
                </a>
            </div>
        </div>
    </div>
    <div class="about_pitstop_column_b">
        <div class="about_pitstop_color_background"></div>
        <div class="about_pitstop_tire_background"></div>
    </div>
</div>