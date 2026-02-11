<?php
$courses = [
    ["title"=>"Chemistry Module","desc"=>"Basics of chemistry and reactions"],
    ["title"=>"Physics Module","desc"=>"Motion, forces and energy"],
    ["title"=>"Mathematics Module","desc"=>"Algebra and calculus basics"],
    ["title"=>"Biology Module","desc"=>"Living organisms and cells"],
    ["title"=>"Computer Science","desc"=>"Programming fundamentals"],
    ["title"=>"History Module","desc"=>"Major world events"],
    ["title"=>"Geography Module","desc"=>"Earth and maps"],
    ["title"=>"Economics Module","desc"=>"Market and finance basics"],
    ["title"=>"Philosophy Module","desc"=>"Critical thinking"],
   
];

$search = $_GET['search'] ?? '';
include "courses.html ";
