<!-- FUNCTION FOR MAKING FAQS ENTRIES -->

<?php

function makeFaqs($title, $content){
    $plusIcon = file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/plus.svg");
    $minusIcon = file_get_contents($_SERVER['DOCUMENT_ROOT']."/dist/assets/minus.svg");
    
    return '
        <button class="footer_faqs_collapse_button">
            <div class="button_text">'.$title.'</div>
            <div class="plus">
                '.$plusIcon.'
            </div>
            <div class="minus">
            '.$minusIcon.'
            </div>
        </button>
        <div class="footer_faqs_collapse_content">
            <p>'.$content.'</p>
        </div>
    ';
}

?>