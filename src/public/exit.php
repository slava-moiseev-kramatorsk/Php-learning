<?php
if (isset($_POST)) {
    header('Location: http://example.palmo/index.php');
    session_destroy();
}