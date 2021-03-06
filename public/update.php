<?php
/**
 * This file is part of railt.org package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

\shell_exec(implode(' && ', [
    'cd ../',
    'git checkout -f master',
    'git pull origin master',
    'php artisan docs:sync'
]));

\header('Content-Type: application/json');

echo \json_encode([
    'status' => 'OK'
]);
