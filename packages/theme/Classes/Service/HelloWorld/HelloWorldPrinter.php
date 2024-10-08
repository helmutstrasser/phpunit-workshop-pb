<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and licence information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Workshop\Theme\Service\HelloWorld;

readonly class HelloWorldPrinter
{
    public function __construct(
        private TextProviderInterface $helloWorldProvider
    ) {
    }

    public function printHelloWorld(): string
    {
        return $this->helloWorldProvider->getText();
    }
}
