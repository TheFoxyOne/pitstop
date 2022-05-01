<!-- OUR EVENTS -->
<div class="events">
    <div class="events_title">
        <h1><?php echo $data['events_title'] ?></h1>
        <div class="title_line">
            <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/minus.svg"); ?>
        </div>
    </div>
    <div class="events_filter_dates">
        <div id="events_filter_buttons_container" class="events_filter_buttons_container">
            <?php foreach($events['events'] as $index => $event){
                $button = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/dist/assets/small_button.svg");
                $button_date = $event["button_date"];
                $isActive = $index == 0 ? 'active' : ''; 
                echo '
                <button class="button '.$isActive.'" onclick="filterSelection(\'events_date_'.$index.'\')">
                    '.$button.'
                    <div class="events_filter_dates_date">'.$button_date.'</div>
                </button>
                ';
            } ?>

        </div>
    </div>
    <div class="events_date">
        <?php foreach($events['events'] as $index => $event){
                $event_date = $event["date"];
                $isActive = $index == 0 ? 'show' : ''; 
                echo '
                <h1 class="filterDiv events_date_'.$index.' '.$isActive.'">'.$event_date.'</h1>
                ';
            } ?>
    </div>
    <div class="events_cards">
    <?php foreach($events['events'] as $index => $event){
                foreach ($event['cards'] as $key => $card) {
                    $button = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/dist/assets/book_now.svg");    
                    $isActive = $index == 0 ? 'show' : '';
                    $image = $card["image"];
                    $title = $card["title"];
                    $description = $card["description"];
                    $link = $card["link"];
                    echo '
                    <div class="card filterDiv events_date_'.$index.' '.$isActive.'">
                        <div class="events_cards_image">
                            <img src="'.$image.'" alt="">
                        </div>
                        <h3>'.$title.'</h3>
                        <p>'.$description.'</p>
                        <a class="button" href="'.$link.'">'.$button.'</a>
                    </div>
                    ';
                }
            } ?>
    </div>
</div>