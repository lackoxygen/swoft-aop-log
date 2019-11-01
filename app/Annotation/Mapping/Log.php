<?php
namespace App\Annotation\Mapping;


use Doctrine\Common\Annotations\Annotation\Target;

/**
 * @since 2.0
 *
 * @Annotation
 *
 * @Target("METHOD")
 */
class Log
{

    /**
     * @var string
     */
    private $value = '';

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }

    public function __construct($value)
    {
        if (isset($value['value'])) {
            $this->value = $value['value'];
        }
    }
}