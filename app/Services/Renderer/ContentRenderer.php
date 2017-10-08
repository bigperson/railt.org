<?php
/**
 * This file is part of laravel.su package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace App\Services\Renderer;

/**
 * Interface ContentRenderer
 */
interface ContentRenderer
{
    /**
     * @param string $original
     * @return string
     */
    public function render(string $original): string;
}
