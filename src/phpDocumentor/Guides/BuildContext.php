<?php declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link http://phpdoc.org
 * @author Ryan Weaver <ryan@symfonycasts.com> on the original DocBuilder.
 * @author Mike van Riel <me@mikevanriel.com> for adapting this to phpDocumentor.
 */

namespace phpDocumentor\Guides;

use League\Flysystem\FilesystemInterface;

class BuildContext
{
    private $outputFilesystem;

    public function __construct(FilesystemInterface $output)
    {
        $this->outputFilesystem = $output;
    }

    public function getOutputFilesystem() : FilesystemInterface
    {
        return $this->outputFilesystem;
    }
}
