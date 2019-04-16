<?php
 
 class initController() {
    public static function setUpBeforeClass() {
        \OCP\User::checkLoggedIn();
    }
 }

initController::setUpBeforeClass();
\OCP\Util::addScript('flowupload', 'angular');
\OCP\Util::addScript('flowupload', 'ng-flow-standalone');
\OCP\Util::addScript('flowupload', 'app');
\OCP\Util::addStyle('flowupload', 'bootstrap-combined');
\OCP\Util::addStyle('flowupload', 'style');

$tpl = new OCP\Template("flowupload", "main", "user");
$tpl->printPage();
