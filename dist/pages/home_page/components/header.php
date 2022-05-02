<!-- HEADER -->
<div class="header">
    <div class="header_container">
        <div class="header_logo">
            <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/pit_stop_logo.svg"); ?>
        </div>
        <div class="header_book">
            <h2><?php echo $data['our_first_show'] ?><span><?php echo $data['our_first_show_date'] ?></span></h2>

            <div class="button book_your_tickets_now_svg">
                <a href="<?php echo $data['header_button_link'] ?>">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/book_tickets_now.svg"); ?>
                </a>
            </div>
        </div>
    </div>
</div>