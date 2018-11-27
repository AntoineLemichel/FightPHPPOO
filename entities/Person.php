<?php

declare(strict_types=1);
class Person
{
    protected $id;
    protected $name;
    protected $damage;

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
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Getters for ID.
     *
     * @return self
     */
    public function getId()
    {
        return $this->id;
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
     * Getters for damage.
     *
     * @return self
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Setters for id.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId($id)
    {
        $id = (int) $id;
        if (is_numeric($id)) {
            $this->id = $id;

            return $this;
        }
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
     * Setters for damage.
     *
     * @param string $damage
     *
     * @return self
     */
    public function setDamage($damage)
    {
        $damage = (int) $damage;

        if (is_numeric($damage)) {
            $this->damage = $damage;

            return $this;
        }
    }
}
