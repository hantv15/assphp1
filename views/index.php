<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../build/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../build/bg-img.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <script>
        const btnMobile = document.querySelector('#btn-mobile');

        btnMobile.addEventListener('click', function () {
            mainMenu.classList.toggle('hidden');
        })
    </script>
</head>
<body>
    <?php   
        include_once './header.php';
    ?>
  <div class="img-banner py-64">
    <!-- content -->
  </div>
  <!--End, banner-->
  <section class="container mx-auto ">
    <div class="grid grid-cols-3 gap-5 mt-12 mx-10">
      <div class="h-h5325 w-t23  ">
        <div class="bg-cl1 w-t23 h-h297  relative ">
          <div class="overflow-hidden">
            <img class="inline-block transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-105"
              src="../img/xbanner-02.jpg.pagespeed.ic.2XKTlVyG8Q.webp" alt="">
          </div>
          <button
            class="inline-block text-center absolute  w-w44 h-12 bg-opacity-89  text-black bg-white hover:bg-orange-700 hover:text-white uppercase bottom-0   transform translate-x-1/2 rounded-sm -translate-y-1/2 ">dresses</button>
        </div>
        <div class="bg-cl1  w-t23 h-h215 mt-5 relative">
          <div class="overflow-hidden">
            <img class="inline-block transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-105"
              src="../img/banner-05.jpg" alt="">
          </div>
          <button
            class="inline-block text-center absolute  w-w44 h-12  bg-opacity-89  text-black bg-white hover:bg-orange-700 hover:text-white uppercase  transform translate-x-1/2 bottom-0 rounded-sm -translate-y-1/2">sunglasses</button>
        </div>
      </div>
      <!--End, item-->
      <div class="h-h5325 w-t23">
        <div class=" bg-cl1 w-t23 h-h215 relative">
          <div class="overflow-hidden">
            <img class="inline-block transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-105"
              src="../img/banner-03.jpg" alt="">
          </div>
          <button
            class="inline-block text-center absolute  w-w44 h-12  text-black bg-white bg-opacity-89 hover:bg-orange-700 hover:text-white uppercase  transform translate-x-1/2 bottom-0 rounded-sm -translate-y-1/2">watches</button>
        </div>
        <div class=" bg-cl1 w-t23 h-h297 mt-5 relative">
          <div class="overflow-hidden">
            <img class="inline-block transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-105"
              src="../img/banner-07.jpg" alt="">
          </div>
          <button
            class="inline-block text-center absolute  w-w44 h-12  text-black  bg-opacity-89 bg-white hover:bg-orange-700 hover:text-white uppercase  transform translate-x-1/2 bottom-0 rounded-sm -translate-y-1/2">footerwear</button>
        </div>
      </div>
      <!--End, item-->
      <div class="h-h5325 w-t23  ">
        <div class="bg-cl1 w-t23 h-h297  relative ">
          <div class="overflow-hidden">
            <img class="inline-block transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-105"
              src="../img/banner-04.jpg" alt="">
          </div>
          <button
            class="inline-block text-center absolute  w-w44 h-12  text-black bg-white  bg-opacity-89 hover:bg-orange-700 hover:text-white uppercase bottom-0   transform translate-x-1/2 rounded-sm -translate-y-1/2 ">bags</button>
        </div>
        <div class=" bg-cl1 mt-5 w-t23 h-h215 relative t">
          <div class="">
            <h4 class="text-center text-3xl px-16 pt-12">
              SIGN UP & GET 20% OFF
            </h4>
            <p class="text-center pt-4 px-16">
              Be the frist to know about the latest fashion news and get exclu-sive offers
            </p>
          </div>
          <button
            class="inline-block text-center absolute  w-w44 h-12  text-white bg-black  hover:bg-orange-700 hover:text-white uppercase  transform translate-x-1/2 bottom-0 rounded-full -translate-y-1/2">sign
            up</button>
        </div>
      </div>
      <!--End, item-->
    </div>
  </section>
  <!--End, section-->
  <section class="container mx-auto ">
    <div class="my-20">
      <h4 class="text-3xl font-bold uppercase text-center">
        Featured products
      </h4>
    </div>
    <div class="grid grid-cols-12 mx-10">
      <div class="h-h225 w-w1687 group relative col-span-3">
        <div class="">
          <img src="../img/item-02.jpg" alt="">
        </div>
        <div
          class="h-h225 w-w1687 bg-opacity-0 bg-black transition duration-700 absolute top-0 group-hover:bg-opacity-25">
        </div>
        <span
          class="px-3 py-1 rounded-full bg-gray-500 text-xs font-semibold text-white absolute top-0 left-0 mt-3 ml-3">New</span>
        <a href="#"
          class="absolute top-0 right-0 pr-3 pt-3 text-white opacity-0 duration-1000 group-hover:opacity-100 group-hover:ease-in-out"><i
            class="far fa-heart fa-lg"></i></a>
        <button
          class="inline-block text-center absolute  w-w44 h-10  text-white bg-black  hover:bg-orange-700 hover:text-white uppercase  transform translate-x-12 bottom-0 rounded-full group-hover:-translate-y-1/2 translate-y-1 opacity-0 duration-700 group-hover:opacity-100">sign
          up</button>
        <div class="mt-2 text-gray-1 font-base">
          <a href="#">Herschel supply co 25l</a>
          <p>$75.00</p>
        </div>
      </div>
      <!--End, item-->
      <div class="h-h225 w-w1687 group relative col-span-3">
        <div class="">
          <img src="../img/item-02.jpg" alt="">
        </div>
        <div
          class="h-h225 w-w1687 bg-opacity-0 bg-black transition duration-700 absolute top-0 group-hover:bg-opacity-25">
        </div>
        <span
          class="px-3 py-1 rounded-full bg-gray-500 text-xs font-semibold text-white absolute top-0 left-0 mt-3 ml-3">New</span>
        <a href="#"
          class="absolute top-0 right-0 pr-3 pt-3 text-white opacity-0 duration-1000 group-hover:opacity-100 group-hover:ease-in-out"><i
            class="far fa-heart fa-lg"></i></a>
        <button
          class="inline-block text-center absolute  w-w44 h-10  text-white bg-black  hover:bg-orange-700 hover:text-white uppercase  transform translate-x-12 bottom-0 rounded-full group-hover:-translate-y-1/2 translate-y-1 opacity-0 duration-700 group-hover:opacity-100">sign
          up</button>
        <div class="mt-2 text-gray-1 font-base">
          <a href="#">Herschel supply co 25l</a>
          <p>$75.00</p>
        </div>
      </div>
      <!--End, item-->
      <div class="h-h225 w-w1687 group relative col-span-3">
        <div class="">
          <img src="../img/item-02.jpg" alt="">
        </div>
        <div
          class="h-h225 w-w1687 bg-opacity-0 bg-black transition duration-700 absolute top-0 group-hover:bg-opacity-25">
        </div>
        <span
          class="px-3 py-1 rounded-full bg-gray-500 text-xs font-semibold text-white absolute top-0 left-0 mt-3 ml-3">New</span>
        <a href="#"
          class="absolute top-0 right-0 pr-3 pt-3 text-white opacity-0 duration-1000 group-hover:opacity-100 group-hover:ease-in-out"><i
            class="far fa-heart fa-lg"></i></a>
        <button
          class="inline-block text-center absolute  w-w44 h-10  text-white bg-black  hover:bg-orange-700 hover:text-white uppercase  transform translate-x-12 bottom-0 rounded-full group-hover:-translate-y-1/2 translate-y-1 opacity-0 duration-700 group-hover:opacity-100">sign
          up</button>
        <div class="mt-2 text-gray-1 font-base">
          <a href="#">Herschel supply co 25l</a>
          <p>$75.00</p>
        </div>
      </div>
      <!--End, item-->
      <div class="h-h225 w-w1687 group relative col-span-3">
        <div class="">
          <img src="../img/item-02.jpg" alt="">
        </div>
        <div
          class="h-h225 w-w1687 bg-opacity-0 bg-black transition duration-700 absolute top-0 group-hover:bg-opacity-25">
        </div>
        <span
          class="px-3 py-1 rounded-full bg-gray-500 text-xs font-semibold text-white absolute top-0 left-0 mt-3 ml-3">New</span>
        <a href="#"
          class="absolute top-0 right-0 pr-3 pt-3 text-white opacity-0 duration-1000 group-hover:opacity-100 group-hover:ease-in-out"><i
            class="far fa-heart fa-lg"></i></a>
        <button
          class="inline-block text-center absolute  w-w44 h-10  text-white bg-black  hover:bg-orange-700 hover:text-white uppercase  transform translate-x-12 bottom-0 rounded-full group-hover:-translate-y-1/2 translate-y-1 opacity-0 duration-700 group-hover:opacity-100">sign
          up</button>
        <div class="mt-2 text-gray-1 font-base">
          <a href="#">Herschel supply co 25l</a>
          <p>$75.00</p>
        </div>
      </div>
      <!--End, item-->
    </div>
    <!--End, list item-->
  </section>
  <section class="mt-48 bg-cl1 h-356 ">
    <div class="flex ml-r4 gap-8 ">
      <div class="h-427 w-570 bg-black mt-r4 group overflow-hidden relative">
        <img class="transition duration-700 ease-in-out transform hover:-translate-y-1 hover:scale-105"
          src="../img/banner-08.jpg" alt="">
        <div class="absolute text-white text-center transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          <p class="text-4xl font-bold ">The Beauty</p>
          <p class="text-6xl uppercase font-bold">lookbook</p>
          <br>
          <a class="text-lg font-light uppercase " href="#">view collection</a>
        </div>
      </div>
      <div class="h-427 w-570 bg-black mt-r4 group overflow-hidden relative">
        <img class="transform transition duration-700 ease-in-out hover:-translate-y-1 hover:scale-105"
          src="../img/shop-item-09.jpg" alt="">
        <div class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 mt-24 text-center">
          <p>Gafas sol Hawkers one</p>
          <strike>$29.5</strike><span class="text-red-700">$15.90</span>
          <!--END-->
          <div class="flex gap-4 mt-10 text-center">
            <div class="w-16 h-16 border-2 border-gray-300">
              <div class="mt-2">
                <p><span>35</br><span class="text-gray-500">days</span></span></p>
              </div>
            </div>
            <!--END, Grid-->
            <div class="w-16 h-16 border-2 border-gray-300">
              <div class="mt-2">
                <p><span>35</br><span class="text-gray-500">hrs</span></span></p>
              </div>
            </div>
            <!--END, Grid-->
            <div class="w-16 h-16 border-2 border-gray-300">
              <div class="mt-2">
                <p><span>35</br><span class="text-gray-500">mins</span></span></p>
              </div>
            </div>
            <!--END, Grid-->
            <div class="w-16 h-16 border-2 border-gray-300">
              <div class="mt-2">
                <p><span>35</br><span class="text-gray-500">secs</span></span></p>
              </div>
            </div>
            <!--END, Grid-->
          </div>
        </div>
      </div>
      <!--END, Attention part-->
    </div>
  </section>
  <!--END, Section-->
  <section class="container mx-auto ml-r4">
    <div class="mt-20 mb-12">
      <h4 class="text-3xl font-bold uppercase text-center">
        Book Introduction
      </h4>
    </div>
    <div class="">
      <div class="flex gap-4">
        <div class="w-93">
          <img width="370px" height="278" src="http://localhost/assigmentPHP1/img/blog-01.jpg" alt="">
          <div class="">
            <div class="">
              <h4 class="text-black font-normal font-light ">Black Friday Guide: Best Sales & Discount Codes</h4>
            </div>
            <!--END, TITLE-->
            <span class="text-gray-600 font-light text-sm">By <span class="text-black" >Nancy Ward</span> on <span class="text-black" >July 22, 2017</span></span>
            <div class="text-gray-600 font-light">
              Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
            </div>
            <!--END, DESCRIPTION-->
          </div>
        </div>
        <!--END, ITEM-->
        
      </div>
    </div>
  </section>
  <!--END, Section-->
  <script src="../js/all.min.js"></script>
  <?php
    include_once './footer.php'
  ?>
</body>
</html>