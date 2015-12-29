<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\RouterBundle\Document;

use ONGR\ElasticsearchBundle\Annotation as ES;

/**
 * Trait that adds SEO fields to document.
 */
trait SeoAwareTrait
{
    /**
     * Structure that represents possible URLs for the model.
     *
     * Eg.:
     *
     * <code>
     * array(
     *     array('url' => 'foo/'),
     *     array('url' => 'bar/', 'key' => 'bar_url'),
     * )
     * </code>
     *
     * @var UrlNested[]|\Iterator
     *
     * @ES\Property(name="urls", type="nested", objectName="ONGRRouterBundle:UrlNested", multiple=true)
     */
    public $urls = [];
}
