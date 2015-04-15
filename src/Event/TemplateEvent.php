<?php

/**
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Event;

use Contao\Template;
use Symfony\Component\EventDispatcher\Event;

/**
 * Allows to execute logic when a template is parsed.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class TemplateEvent extends Event
{
    /**
     * @var string
     */
    private $buffer;

    /**
     * @var string
     */
    private $key;

    /**
     * @var Template
     */
    private $template;

    /**
     * Constructor.
     *
     * @param string   $buffer   The template content
     * @param string   $key      The template key
     * @param Template $template The template object
     */
    public function __construct($buffer, $key, Template $template = null)
    {
        $this->buffer   = $buffer;
        $this->key      = $key;
        $this->template = $template;
    }

    /**
     * Sets the template content.
     *
     * @param string $buffer The template content
     */
    public function setBuffer($buffer)
    {
        $this->buffer = $buffer;
    }

    /**
     * Sets the template key.
     *
     * @param string $key The template key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * Sets the template object.
     *
     * @param Template $template The template object
     */
    public function setTemplate(Template $template = null)
    {
        $this->template = $template;
    }

    /**
     * Returns the template content.
     *
     * @return string The template content
     */
    public function getBuffer()
    {
        return $this->buffer;
    }

    /**
     * Returns the template key.
     *
     * @return string The template key
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Returns the template object.
     *
     * @return Template The template object
     */
    public function getTemplate()
    {
        return $this->template;
    }
}
