<?php
session_start();
unset($_SESSION["roleflags"]);
unset($_SESSION["ticket"]);
unset($_SESSION["userId"]);
header("Location: /");