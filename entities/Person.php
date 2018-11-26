<?php

declare(strict_types=1);
class Person
{
    protected $name;
    protected $domage;

    /**
     * Construct for class Person.
     *
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->hydrate($array);
    }

    /**
     * Hydrate function for class Person.
     *
     * @param array $array
     */
    public function hydrate(array $array)
    {
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Getters for name.
     *
     * @return self
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Getters for domage.
     *
     * @return self
     */
    public function getDomage()
    {
        return $this->domage;
    }

    /**
     * Setters for name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_string($name)) {
            $this->name = $name;

            return $this;
        }
    }

    /**
     * Setters for domage.
     *
     * @param string $domage
     *
     * @return self
     */
    public function setDomage($domage)
    {
        $domage = (int) $domage;

        if (is_numeric($domage)) {
            $this->domage = $domage;

            return $this;
        }
    }
}
