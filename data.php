<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('JUS', 12000, 'img\juice.png', 'dingin');
$coffee = new Drink('KOPI', 15000, 'img\coffee.png', 'panas');
$chocolate = new Drink('COKELAT', 20000, 'img\chocolate.jpg', 'panas');
$curry = new Food('GULAI', 30000, 'img\curry.png', 3);
$pasta = new Food('PASTA', 50000, 'img\pasta.png', 2);
$lasagna = new Food('LASAGNA', 45000, 'img\lasagna.jpg', 1);

$menus = array($juice, $coffee, $chocolate, $curry, $pasta, $lasagna);

$user1 = new User('Alex', 'pria');
$user2 = new User('Emma', 'wanita');
$user3 = new User('Jessica', 'wanita');
$user4 = new User('Chris', 'pria');
$user5 = new User('Ryle', 'pria');
$user6 = new User('Lily', 'wanita');

$users = array($user1, $user2, $user3, $user4, $user5, $user6);

// Hapus $review1 sampai $review8 dan tempel code di bawah
$review1 = new Review($juice->getName(), $user1->getId(), 'Yummy');
$review2 = new Review($curry->getName(), $user1->getId(), 'Sangat sehat');
$review3 = new Review($coffee->getName(), $user2->getId(), 'Wanginya harum');
$review4 = new Review($pasta->getName(), $user2->getId(), 'Sausnya enak :)');
$review5 = new Review($juice->getName(), $user3->getId(), 'Hanya jus jeruk biasa');
$review6 = new Review($curry->getName(), $user3->getId(), 'Rasanya enak untuk harganya');
$review7 = new Review($coffee->getName(), $user4->getId(), 'Kepahitannya cukup.');
$review8 = new Review($pasta->getName(), $user4->getId(), 'Bahan yang digunakan berkualitas.');
$review9 = new Review($lasagna->getName(), $user5->getId(), 'Lasagna terbaik yang pernah saya makan');
$review10 = new Review($lasagna->getName(), $user6->getId(), 'Rasanya mantap');
$review11 = new Review($chocolate->getName(), $user5->getId(), 'Delicioso!');
$review12 = new Review($chocolate->getName(), $user6->getId(), 'Tidak terasa istimewa');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8, $review9, $review10, $review11, $review12);

?>