
<?php 
$json = file_get_contents( './data/posts.json' );
$obj = json_decode($json, true);
?>


<?php
// sort array to date 9 > 0 
array_multisort(array_column($obj, 'post_date'), SORT_DESC, $obj);

foreach($obj as $post){
?>
    <h1>
        <?php echo $post['title']; ?>
    </h1>

    <p>
        <?php echo date('F j, Y', $post['post_date']); ?>
    </p>
    <p> 
        By <?php echo $post['author'];?> 
    </p>

    <p>
        <?php echo $post['content'];  
        ?>
    </p>
    <hr>
    <?php
    }
    ?>