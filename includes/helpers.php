<?php
function getCurrentPage()
{
    return basename($_SERVER['REQUEST_URI']);
}

function isActive($pageName)
{
    $currentPage = getCurrentPage();

    // Remove query string if exists
    $currentPage = explode('?', $currentPage)[0];

    return ($currentPage == $pageName) ? 'eg-active' : '';
}