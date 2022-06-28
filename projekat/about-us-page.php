<?php
session_start();
// PAGE TITLE
$page = 'about-us-page';

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-about-us-page.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
