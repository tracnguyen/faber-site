<?php
// $Id: template.php,v 1.16.2.3 2010/05/11 09:41:22 goba Exp $

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$variables) {
		$links = array();

    // creating a link to the home page
    $links[] = l('Home', '<front>');

    // yet another link
    $links[] = l('Some Other Link', $variables['node']->path);

    // lastly, overwrite the contents of the breadcrumbs variable in the page scope
    $variables['breadcrumb'] = theme('breadcrumb', $links);
  
}