<?php
/*
 * Routes are where you should put all of your routing logic, for instance if you need to interpret user input to
 * reach the appropriate page like user authentication.
 */

require_once $rootPath . "/private/controllers/" . $current_page->page_controller . ".php";