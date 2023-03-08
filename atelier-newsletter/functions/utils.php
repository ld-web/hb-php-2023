<?php

/**
 * Redirects to given location and exits
 *
 * @param string $location URL, can include params
 * @return void
 */
function redirect(string $location): void
{
  header('Location: ' . $location);
  exit;
}
