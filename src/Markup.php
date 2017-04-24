<?php

namespace Barnebys\Protocol;

use function is_null;
use function var_dump;

/**
 * Class Markup
 * @package Barnebys\Protocol
 */
abstract class Markup
{
    const VERSION = '1.0';

    const META_ATTR = 'property';

    const PREFIX = 'barnebys';

    const SECTION = null;

    /**
     * @param string $prefix
     * @return string
     */
    public function toHTML($prefix = self::PREFIX)
    {
        $content = '';

        foreach (get_object_vars($this) as $property => $value) {
            if(is_null($value)) continue;

            if($value instanceof Markup) {
                $content .= $value;
            } else {

                if(!is_null($this::SECTION)) {
                    $property = $this::SECTION . ':' . $property;
                }

                $content .= '<meta ' . self::META_ATTR . '="' . $prefix;
                if ( is_string($property) && !empty($property) )
                    $content .= ':' . htmlspecialchars( $property );
                $content .= '" content="' . htmlspecialchars($value) . '">' . PHP_EOL;
            }
        }

        return $content;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toHTML();
    }
}