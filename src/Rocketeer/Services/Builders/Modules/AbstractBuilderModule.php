<?php

/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Rocketeer\Services\Builders\Modules;

use League\Container\ContainerAwareInterface;
use Rocketeer\Services\Builders\Builder;
use Rocketeer\Services\Modules\AbstractModule;
use Rocketeer\Traits\ContainerAwareTrait;

abstract class AbstractBuilderModule extends AbstractModule implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * @var Builder
     */
    protected $modulable;
}
