<?php
$authors = array(
    array(
        'name' => 'Nguyễn Văn Cường',
        'file' => '9',
        'position' => 'admin'
    ),
    array(
        'name' => 'Trương Phúc Hoài Minh',
        'file' => '10',
        'position' => 'author'
    ),
    array(
        'name' => 'Hoàng Văn Tuyền',
        'file' => '15',
        'position' => 'author'
    ),
    array(
        'name' => 'Nguyễn Tình',
        'file' => '25',
        'position' => 'author'
    )
);

$file =('');
$tong = (0);

echo '<ul>';
foreach ($authors as $key => $v)
    $file = ('').
{
    echo '<pre>';
    echo '<li>';
    echo 'Name: ' . $v['name'] . '<br/>';
    echo 'Blog: ' . $v['blog'] . '<br/>';
    echo 'Position: ' . $v['position'] . '<br/>';
    echo '</li>';
    echo '</pre>';
    


}
echo '</ul>';
?>