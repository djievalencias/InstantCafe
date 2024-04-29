<?php

class ObjectFactory {
  public static function createUser($name, $gender) {
      return new User($name, $gender);
  }

  public static function createReview($menuName, $userId, $body) {
      return new Review($menuName, $userId, $body);
  }

  public static function createFood($name, $price, $image, $spiciness) {
      return new Food($name, $price, $image, $spiciness);
  }

  public static function createDrink($name, $price, $image, $type) {
      return new Drink($name, $price, $image, $type);
  }
}
