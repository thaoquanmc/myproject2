<?php
session_start();
define ("DATABASE_SERVER","localhost");
define ("DATABASE_NAME","fpt-project");
define ("DATABASE_USER","root");
define ("DATABASE_PASS","");
require_once './mvc/bridge.php';
new app();
