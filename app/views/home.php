<h1>Home Page</h1>
<h2>Category:</h2>
<?php

foreach ($data['category'] as $key => $value ) {
    echo $value['title_category_product'].'<br>' ;
}
?>