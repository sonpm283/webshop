<h1>Home Page</h1>
<h2>Category:</h2>
<?php
foreach ($data as $item ) {
    echo $item['cateOne'].'<br>';
    echo $item['cateTwo'].'<br>';
    echo $item['cateThree'].'<br>';
}
?>