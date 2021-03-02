<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HtML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengam angka, tapi boleh mengandung angka
$nama = "Rizky Mahendra";
echo "Halo, nama saya $nama";
echo "<br>";

// Operator
// aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;
echo "<br>";

// penggabung string / concatenation / concat
// .
$nama_depan = "Rizky";
$nama_belakang = "Mahendra";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";

// Assignment
//  =, +=, -=, *=, /=, %=, .=
$x = 1;
$x -= 5;
echo $x;
$nama = "Rizky";
$nama .= " ";
$nama .= "Mahendra";
echo $nama;
echo "<br>";

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 == "1");
echo "<br>";

// identitas
// ===, !==
var_dump(1 === "1");
echo "<br>";

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
