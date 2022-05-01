<!-- FOOTER -->
<div class="footer">
    <div class="footer_logo">
        <h2><?php echo $json_data['logo'] ?></h2>
    </div>
    <div class="footer_links">
        <h2><?php echo $json_data['links_title'] ?></h2>
        <div class="links_data">
            <?php foreach($json_data['links_data'] as $index => $post){
                    echo '<a href='.$post['url'].'>'.$post['title'].'</a>';
                } ?>
        </div>
    </div>
    <div class="footer_address">
        <h2><?php echo $json_data['address_title'] ?></h2>
        <p><?php echo $json_data['address_paragraph'] ?></p>
    </div>
    <div class="footer_go_buttons">
        <a class="button" href="#">Call Manchester</a>
        <a class="button" href="#">Call London</a>
        <a class="button" href="#">Call Twitter</a>
    </div>
</div>