<!-- TRADER CONTACT FORM -->
<div class="trader_form">
    <div class="trader_form_title">
        <h1><?php echo $data['trader_form_title'] ?></h1>
        <div class="title_line">
            <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/minus.svg"); ?>
        </div>
    </div>
    <form class="trader_form_contact_form" action="/dist/pages/submit_page/submit_trader.php" method="post">
        <div class="form_container">
            <div class="form_column_a">
                <label for="companyName"><?php echo $data['trader_form_company_name'] ?></label>
                <input type="text" name="companyName" id="companyName">
                <label for="onSale"><?php echo $data['trader_form_onsale'] ?></label>
                <input type="text" name="onSale" id="onSale">
                <label for="package"><?php echo $data['trader_form_package'] ?></label>
                <input type="text" name="package" id="package">
                <label for="power"><?php echo $data['trader_form_power'] ?></label>
                <input type="text" name="power" id="power">
                <label for="wifi"><?php echo $data['trader_form_wifi'] ?></label>
                <input type="text" name="wifi" id="wifi">

                <label for="traderSelectStop"><?php echo $data['trader_form_select'] ?></label>

                <input type="hidden" id="traderSelectStop" name="traderSelectStop" value="<?php echo $data['trader_form_stop_one'] ?>">
                <input type="button" class="button selected" id="traderStop1Button" onclick="selectStop(this.id, this.value)"
                    value="<?php echo $data['trader_form_stop_one'] ?>">
                <input type="button" class="button" id="traderStop2Button" onclick="selectStop(this.id, this.value)"
                    value="<?php echo $data['trader_form_stop_two'] ?>">
                <input type="button" class="button" id="traderStop3Button" onclick="selectStop(this.id, this.value)"
                    value="<?php echo $data['trader_form_stop_three'] ?>">

            </div>
            <div class="form_column_b">
                <div class="form_row">
                    <div class="form_column">
                        <label for="traderFirstName"><?php echo $data['trader_form_first_name'] ?></label>
                        <input type="text" name="firstName" id="traderFirstName">
                    </div>
                    <div class="form_column">
                        <label for="traderLastName"><?php echo $data['trader_form_last_name'] ?></label>
                        <input type="text" name="lastName" id="traderLastName">
                    </div>
                </div>

                <label for="traderEmail"><?php echo $data['trader_form_email'] ?></label>
                <input type="text" name="email" id="traderEmail">
                <label for="traderContactNumber"><?php echo $data['trader_form_contact_number'] ?></label>
                <input type="text" name="contactNumber" id="traderContactNumber">
                <label for="traderAddress1"><?php echo $data['trader_form_address1'] ?></label>
                <input type="text" name="address1" id="traderAddress1">
                <label for="traderAddress2"><?php echo $data['trader_form_address2'] ?></label>
                <input type="text" name="address2" id="traderAddress2">

                <div class="form_row">
                    <div class="form_column">
                        <label for="traderCity"><?php echo $data['trader_form_city'] ?></label>
                        <input type="text" name="city" id="traderCity">
                    </div>
                    <div class="form_column">
                        <label for="traderPostcode"><?php echo $data['trader_form_postcode'] ?></label>
                        <input type="text" name="postcode" id="traderPostcode">
                    </div>
                </div>

                <label for="traderNotes"><?php echo $data['trader_form_notes'] ?></label>
                <textarea name="notes" id="traderNotes" cols="10" rows="10"></textarea>

            </div>
        </div>
        <input class="button submit_button" type="submit" value="<?php echo $data['trader_form_submit'] ?>">
    </form>
</div>