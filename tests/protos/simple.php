<?php
// DO NOT EDIT! Generated by Protobuf for PHP protoc plugin @package_version@
// Source: simple.proto
//   Date: 2011-04-04 14:28:24

namespace tests {

  class Simple extends \DrSlump\Protobuf\Message {

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor("\tests\Simple");

        // required  foo = 1
        $f = new \DrSlump\Protobuf\Field(array(
          'number'  => 1,
          'name'    => 'foo',
          'type'    => 9,
          'rule'    => 2,
        ));
        $descriptor->addField($f);

        // required  bar = 2
        $f = new \DrSlump\Protobuf\Field();
        $f->number    = 2;
        $f->name      = "bar";
        $f->type      = 5;
        $f->rule      = 2;
        $descriptor->addField($f);

        // optional  baz = 3
        $f = new \DrSlump\Protobuf\Field();
        $f->number    = 3;
        $f->name      = "baz";
        $f->type      = 9;
        $f->rule      = 1;
        $descriptor->addField($f);

        foreach (self::$__extensions as $cb) {
          $descriptor->addField($cb(), true);
        }

      return $descriptor;
    }

    /** @var string */
    public $foo = null;
    
    /** @var int */
    public $bar = null;
    
    /** @var string */
    public $baz = null;
    

    /**
     * Check if <foo> has a value
     *
     * @return boolean
     */
    public function hasFoo(){
      return $this->_has(1);
    }
    
    /**
     * Clear <foo> value
     *
     * @return \tests\Simple
     */
    public function clearFoo(){
      return $this->_clear(1);
    }
    
    /**
     * Get <foo> value
     *
     * @return string
     */
    public function getFoo(){
      return $this->_get(1);
    }
    
    /**
     * Set <foo> value
     *
     * @param string $value
     * @return \tests\Simple
     */
    public function setFoo( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <bar> has a value
     *
     * @return boolean
     */
    public function hasBar(){
      return $this->_has(2);
    }
    
    /**
     * Clear <bar> value
     *
     * @return \tests\Simple
     */
    public function clearBar(){
      return $this->_clear(2);
    }
    
    /**
     * Get <bar> value
     *
     * @return int
     */
    public function getBar(){
      return $this->_get(2);
    }
    
    /**
     * Set <bar> value
     *
     * @param int $value
     * @return \tests\Simple
     */
    public function setBar( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <baz> has a value
     *
     * @return boolean
     */
    public function hasBaz(){
      return $this->_has(3);
    }
    
    /**
     * Clear <baz> value
     *
     * @return \tests\Simple
     */
    public function clearBaz(){
      return $this->_clear(3);
    }
    
    /**
     * Get <baz> value
     *
     * @return string
     */
    public function getBaz(){
      return $this->_get(3);
    }
    
    /**
     * Set <baz> value
     *
     * @param string $value
     * @return \tests\Simple
     */
    public function setBaz( $value){
      return $this->_set(3, $value);
    }
    
  }
}