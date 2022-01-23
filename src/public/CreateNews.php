<?php


if (isset($_POST)) {
    if ($_POST['create']) {
        header('Location: http://example.palmo/addNew.php');
    }
    if ($_POST['view']) {
        header('Location: http://example.palmo/newsList.php');
    }
}
