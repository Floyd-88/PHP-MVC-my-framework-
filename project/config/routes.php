<?php
use Core\Route;

return [
    new Route('/furniture/:id', 'furniture', 'one'),
    new Route('/furniture/', 'furniture', 'all'),
];

?>