<?php
if (preg_match("/^https?\:\/\/localhost/", $_GET['redirect'])) {
	header("Location: {$_GET['redirect']}");
} else {
	exit();
}