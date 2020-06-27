<?php namespace ProcessWire;

/**
 * Class to hold a simple address
 *
 */

class SimpleAddress extends WireData
{
    public function __construct()
    {
        try {
            $this->set('street', null);
            $this->set('number', null);
            $this->set('postalcode', null);
            $this->set('city', null);
            $this->set('state', null);
            $this->set('country', null);
        } catch (WireException $e) {
        }
    }

    public function set($key, $value)
    {
        $value = wire('sanitizer')->text($value);
        return parent::set($key, $value);
    }

    public function get($key)
    {
        return parent::get($key);
    }

    /**
    * Method to create combined string of street and number
    * @return string
    */

    public function renderStreet(): string
    {
        $number = ($this->number && $this->street) ? ' '.$this->number : $this->number;
        return ($this->street || $this->number) ? $this->street.$number : '';
    }

    /**
    * Method to create combined string of postalcode and city
    * @return string
    */
    public function renderCity(): string
    {
        $city = ($this->postalcode && $this->city) ? ' '.$this->city : $this->city;
        return ($this->postalcode || $this->city) ? $this->postalcode.$city : '';
    }

    /**
    * Method to create state stringy
    * @return string
    */
    public function renderState(): string
    {
        return ($this->state) ? $this->state : '';
    }

    /**
    * Method to render country string
    * @return string
    */
    public function renderCountry(): string
    {
        return ($this->country) ? $this->country : '';
    }

    /**
    * Method to render complete address string
    * @param array $options => separator, class
    * @return string
    */
    public function renderAddress(array $options = []): string
    {
        $defaultOptions = [
      'separator' => '<br />',
      'class' => ''
    ];

        $addressOptions = array_merge($defaultOptions, $options);

        $addressParts = [
      $this->renderStreet(),
      $this->renderCity(),
      $this->renderState(),
      $this->renderCountry()
    ];
        $cleanAddress = array_filter($addressParts);
        $class = ($addressOptions['class']) ? ' class="'.$addressOptions['class'].'"' : '';
        $out = '<address'.$class.'>';
        $out .= implode($addressOptions['separator'], $cleanAddress);
        $out .= '</address>';
        return $out;
    }

    public function __toString()
    {
        return $this->renderAddress();
    }
}
