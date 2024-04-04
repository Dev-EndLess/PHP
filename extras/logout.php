<?php
session_start();

// destroy the session
session_destroy();
header('Location: /php_tutorial/12_sessions.php');