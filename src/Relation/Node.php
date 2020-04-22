<?php

namespace HelloPablo\RelatedContentEngine\Relation;

use HelloPablo\RelatedContentEngine\Interfaces;

/**
 * Class Node
 *
 * @package HelloPablo\RelatedContentEngine\Relation
 */
class Node implements Interfaces\Relation
{
    /** @var string */
    protected $type;

    /** @var mixed */
    protected $value;

    // --------------------------------------------------------------------------

    /**
     * Node constructor.
     *
     * @param string|null $type  The type of node
     * @param null        $value The node's value
     */
    public function __construct(string $type = null, $value = null)
    {
        $this->type  = $type;
        $this->value = $value;
    }

    // --------------------------------------------------------------------------

    /**
     * Returns the type of node
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    // --------------------------------------------------------------------------

    /**
     * Returns the node's value
     *
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }
}