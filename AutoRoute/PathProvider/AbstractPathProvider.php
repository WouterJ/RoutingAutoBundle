<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2013 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Symfony\Cmf\Bundle\RoutingAutoBundle\AutoRoute\PathProvider;

use Symfony\Cmf\Bundle\RoutingAutoBundle\AutoRoute\PathProviderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * The base PathProvider class.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
abstract class AbstractPathProvider implements PathProviderInterface
{
    protected $resolver;

    /**
     * {@inheritDoc}
     */
    public function configureOptions(OptionsResolverInterface $resolver)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionsResolver()
    {
        if (null === $this->resolver) {
            $this->resolver = new OptionsResolver();
        }

        return $this->resolver;
    }
}
