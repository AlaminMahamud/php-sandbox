<?php

date_default_timezone_set('Asia/Dhaka');


class Fruit implements JsonSerializable {
  public
    $type      = 'Apple',
    $lastEaten = null;

  public function __construct () {
    $this->lastEaten = new DateTime();
  }

  public function jsonSerialize () {
    return [
      'type'        => $this->type,
      'lastEaten'   => $this->lastEaten->format(DateTime::ISO8601)
    ];
  }
}


echo
  "<pre>" .
  json_encode(new Fruit(), JSON_PRETTY_PRINT) .
  "</pre>";

?>
