<!-- TRADER -->
<div class="trader">
    <div class="trader_card">
        <div class="trader_card_column_a">
            <div class="trader_title">
                <h1><?php echo $data['trader_title'] ?></h1>
                <div class="title_line">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/minus.svg"); ?>
                </div>
                <h3><?php echo $data['trader_subtitle'] ?></h3>
                <p><?php echo $data['trader_description'] ?></p>
                <h4><?php echo $data['trader_followup'] ?></h4>

                <a href="<?php echo $data['trader_button_link'] ?>" class="button book_your_space_now_svg">
                    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/long_button.svg"); ?>
                    <h2><?php echo $data['trader_button_text'] ?></h2>
                </a>
            </div>
        </div>
        <div class="trader_card_column_b">
            <h2><?php echo $data['trader_stop_one'] ?></h2>
            <div class="seperator_line"></div>
            <h2><?php echo $data['trader_stop_two'] ?></h2>
            <div class="seperator_line"></div>
            <h2><?php echo $data['trader_stop_three'] ?></h2>
            <div class="seperator_line"></div>
            <h2 class="trader_apply"><?php echo $data['trader_apply'] ?></h2>
        </div>
    </div>
</div>