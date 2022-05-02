<!-- EXHIBITOR CONTACT FORM -->
<div class="exhibitor">
    <div class="exhibitor_title">
        <h1><?php echo $data['exhibitor_title'] ?></h1>
        <div class="title_line">
            <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/minus.svg"); ?>
        </div>
    </div>
    <form class="exhibitor_contact_form" action="/dist/pages/submit_page/submit_exhibitor.php" method="post" enctype="multipart/form-data">
        <div class="form_container">
            <div class="form_column_a">
                <label for="model"><?php echo $data['exhibitor_model'] ?></label>
                <input type="text" name="model" id="model">
                <label for="registration"><?php echo $data['exhibitor_registration'] ?></label>
                <input type="text" name="registration" id="registration">
                <label for="type"><?php echo $data['exhibitor_type'] ?></label>
                <input type="text" name="type" id="type">
                <label for="modifications"><?php echo $data['exhibitor_modifications'] ?></label>
                <textarea name="modifications" id="modifications" cols="10" rows="10"></textarea>

                <h5 class="upload_description"><?php echo $data['exhibitor_exterior'] ?> <span><?php echo $data['exhibitor_formats'] ?></span></h5>
                <div class="row">
                    <div class="button_column">
                        <div class="button_row">
                            <input class="upload_button" type="file" name="file1" id="file1" hidden/>
                            <label class="button" for="file1"><?php echo $data['exhibitor_choose_file'] ?></label>
                            <h5 id="file1-chosen"><?php echo $data['exhibitor_no_file_chosen'] ?></h5>
                        </div>
                    </div>
                    <div class="button_column">
                        <div class="button_row">
                            <input class="upload_button" type="file" name="file2" id="file2" hidden />
                            <label class="button" for="file2"><?php echo $data['exhibitor_choose_file'] ?></label>
                            <h5 id="file2-chosen"><?php echo $data['exhibitor_no_file_chosen'] ?></h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="button_column">
                        <div class="button_row">
                            <input class="upload_button" type="file" name="file3" id="file3" hidden />
                            <label class="button" for="file3"><?php echo $data['exhibitor_choose_file'] ?></label>
                            <h5 id="file3-chosen"><?php echo $data['exhibitor_no_file_chosen'] ?></h5>
                        </div>
                    </div>
                    <div class="button_column">
                        <div class="button_row">
                            <input class="upload_button" type="file" name="file4" id="file4" hidden />
                            <label class="button" for="file4"><?php echo $data['exhibitor_choose_file'] ?></label>
                            <h5 id="file4-chosen"><?php echo $data['exhibitor_no_file_chosen'] ?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form_column_b">
                <div class="form_row">
                    <div class="form_column">
                        <label for="firstName"><?php echo $data['exhibitor_first_name'] ?></label>
                        <input type="text" name="firstName" id="firstName">
                    </div>
                    <div class="form_column">
                        <label for="lastName"><?php echo $data['exhibitor_last_name'] ?></label>
                        <input type="text" name="lastName" id="lastName">
                    </div>
                </div>

                <label for="email"><?php echo $data['exhibitor_email'] ?></label>
                <input type="text" name="email" id="email">
                <label for="mobileNumber"><?php echo $data['exhibitor_mobile_number'] ?></label>
                <input type="text" name="mobileNumber" id="mobileNumber">
                <label for="address1"><?php echo $data['exhibitor_address1'] ?></label>
                <input type="text" name="address1" id="address1">
                <label for="address2"><?php echo $data['exhibitor_address2'] ?></label>
                <input type="text" name="address2" id="address2">

                <div class="form_row">
                    <div class="form_column">
                        <label for="city"><?php echo $data['exhibitor_city'] ?></label>
                        <input type="text" name="city" id="city">
                    </div>
                    <div class="form_column">
                        <label for="postcode"><?php echo $data['exhibitor_postcode'] ?></label>
                        <input type="text" name="postcode" id="postcode">
                    </div>
                </div>

                <label for="instagramName"><?php echo $data['exhibitor_instagram_name'] ?></label>
                <input type="text" name="instagramName" id="instagramName">

            </div>
        </div>
        <input class="button submit_button" type="submit" value="<?php echo $data['exhibitor_submit'] ?>">
    </form>
</div>