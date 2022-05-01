<!-- VISITOR -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/dist/pages/home_page/components/make_visitor.php'; ?>
<div class="visitor">
    <div class="visitor_container">
        <?php echo makeVisitor($data['visitor_title'],$data['visitor_secondary'],$data['visitor_paragraph'],$data['visitor_forth'], $data['visitor_link']) ?>
    </div>
    <div class="white_vertical_line"></div>
    <div class="exhibit_container">
        <?php echo makeVisitor($data['exhibit_title'],$data['exhibit_secondary'],$data['exhibit_paragraph'],$data['exhibit_forth'], $data['exhibit_link']) ?>
    </div>
</div>