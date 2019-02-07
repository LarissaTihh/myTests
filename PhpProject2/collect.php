
<?php
header("Content-Type: text/html;charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html;charset=utf=8"/>

<?php
if (!empty($POST['data'])) {
    echo 'stroka iz forma1:' . $POST['data'];
    
}elseif (!empty($POST['data'])) {
    echo 'stroka iz forma2:' . $GET['data'];
}


