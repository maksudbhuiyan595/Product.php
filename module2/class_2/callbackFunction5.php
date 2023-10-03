<?php
//callback function

$books=[
        ["id"=>"1", "book-Name"=>"ehripoter", "author"=>"jack"],
        ["id"=>"2", "book-Name"=>"test", "author"=>"maksud"],
        ["id"=>"3", "book-Name"=>"test2", "author"=>"Raj"],
        ["id"=>"4", "book-Name"=>"test3", "author"=>"Tanvir"],
        ["id"=>"5", "book-Name"=>"test4", "author"=>"ab"],
];

function sortByAuthorName($book1,$book2){
    if(strlen($book1['author'])>strlen($book2['author'])){
        return 1;
    }
    else if(strlen($book1['author'])<strlen($book2['author'])){
        return -1;
    }else{
        return 0;
    }

}

usort($books,"sortByAuthorName");
print_r($books);
?>