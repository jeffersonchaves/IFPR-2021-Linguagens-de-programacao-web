<?php
ini_set('display_errors', 1);

session_start();
unset($_SESSION);
session_destroy();
