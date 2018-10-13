<?php


// Route::set('about-us', function() {
//   echo "ABOUT US";
// });

Route::set('index.php', function() {
  //AboutUs::test();
HomePage::CreateView('homepage');
});

Route::set('login', function() {
  TestLayout::CreateView('login');
});

Route::set('about-us', function() {
  AboutUs::test();
});

Route::set('login-page', function() {
  AboutUs::test();
});








 ?>
