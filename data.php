<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');
require_once('objectFactory.php');

$juice = ObjectFactory::createDrink('JUS', 12000, 'img\juice.png', 'dingin');
$coffee = ObjectFactory::createDrink('KOPI', 15000, 'img\coffee.png', 'panas');
$chocolate = ObjectFactory::createDrink('COKELAT', 20000, 'img\chocolate.jpg', 'panas');
$curry = ObjectFactory::createFood('GULAI', 30000, 'img\curry.png', 3);
$pasta = ObjectFactory::createFood('PASTA', 50000, 'img\pasta.png', 2);
$lasagna = ObjectFactory::createFood('LASAGNA', 45000, 'img\lasagna.jpg', 1);

$menus = array($juice, $coffee, $chocolate, $curry, $pasta, $lasagna);

$user1 = ObjectFactory::createUser('Alex', 'pria');
$user2 = ObjectFactory::createUser('Emma', 'wanita');
$user3 = ObjectFactory::createUser('Jessica', 'wanita');
$user4 = ObjectFactory::createUser('Chris', 'pria');
$user5 = ObjectFactory::createUser('Ryle', 'pria');
$user6 = ObjectFactory::createUser('Lily', 'wanita');

$users = array($user1, $user2, $user3, $user4, $user5, $user6);

// Hapus $review1 sampai $review8 dan tempel code di bawah
$review1 = ObjectFactory::createReview($juice->getName(), $user1->getId(), 'Yummy');
$review2 = ObjectFactory::createReview($curry->getName(), $user1->getId(), 'Sangat sehat');
$review3 = ObjectFactory::createReview($coffee->getName(), $user2->getId(), 'Wanginya harum');
$review4 = ObjectFactory::createReview($pasta->getName(), $user2->getId(), 'Sausnya enak :)');
$review5 = ObjectFactory::createReview($juice->getName(), $user3->getId(), 'Hanya jus jeruk biasa');
$review6 = ObjectFactory::createReview($curry->getName(), $user3->getId(), 'Rasanya enak untuk harganya');
$review7 = ObjectFactory::createReview($coffee->getName(), $user4->getId(), 'Kepahitannya cukup.');
$review8 = ObjectFactory::createReview($pasta->getName(), $user4->getId(), 'Bahan yang digunakan berkualitas.');
$review9 = ObjectFactory::createReview($lasagna->getName(), $user5->getId(), 'Lasagna terbaik yang pernah saya makan');
$review10 = ObjectFactory::createReview($lasagna->getName(), $user6->getId(), 'Rasanya mantap');
$review11 = ObjectFactory::createReview($chocolate->getName(), $user5->getId(), 'Delicioso!');
$review12 = ObjectFactory::createReview($chocolate->getName(), $user6->getId(), 'Tidak terasa istimewa');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8, $review9, $review10, $review11, $review12);

?>