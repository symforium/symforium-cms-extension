<?php

/**
 * This file is part of symforium-cms-extension
 *
 * (c) Aaron Scherer <aequasi@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 */

namespace Symforium\Plugin\CmsPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as Config;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 *
 * @Config\Route("/manage/cms")
 */
class BackendController extends Controller
{
    /**
     *
     * @return array
     *
     * @Config\Route("")
     * @Config\Template()
     */
    public function indexAction()
    {
        return [];
    }
}
 