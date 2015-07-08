<?php
// print_r($_SERVER);
// exit();
// $fn = (isset($_SERVER['HTTP_X_FILENAME']) ? $_SERVER['HTTP_X_FILENAME'] : false);
// $fn = (isset($_SERVER['X-Filename']) ? $_SERVER['X-Filename'] : false);
// $fn = (isset($_SERVER['X-FILENAME']) ? $_SERVER['X-Filename'] : false);

$test=1;
// if ($fn) {
if ($test == 1) {
    file_put_contents(
        // 'uploads/' . $fn,
        'uploads/' . $_SERVER['REQUEST_TIME_FLOAT'].'.jpg',
        file_get_contents('php://input')
    );
    // echo "http://www.zhangxinxu.com/study/201109/uploads/$fn";
    echo $_SERVER['REQUEST_TIME_FLOAT'];
}

else
{
    //echo "yyyyyyyyyyyyyyyyy";
    foreach($_SERVER as $k=>$v)
    {
        echo $k.':  '.$v.'<br>';
    }
        echo '<hr>';
    print_r($_POST);
}

// exit();


