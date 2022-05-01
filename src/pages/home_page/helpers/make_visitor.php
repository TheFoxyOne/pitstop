<!-- FUNCTION FOR MAKING A VISITOR COMPONENT -->

<?php

function makeVisitor($title, $secondary, $paragraph, $forth, $link){
    $titleLine = file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/minus.svg");
    $button = file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/book_tickets_now.svg");
    return '
        <h2>'.$title.'</h2>
        <div class="title_line">
            '.$titleLine.'
        </div>
        <h4>'.$secondary.'</h4>
        <p>'.$paragraph.'</p>
        <h4 class="visitor_forth">'.$forth.'</h4>
        
        <div class="button"><a href="'.$link.'">'.$button.'</a></div>
    ';
}

?>