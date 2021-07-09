<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .grid{
            margin-left: 12vw;
        }
        .grid-item { width: 24vw;margin: 8px; }
        .grid-item img { width: 24vw; }
    
    </style>
</head>
<body>
    <div class="grid">
        <div class="grid-item"> <img src="img/img1.jpg" alt=""></div>
        <div class="grid-item"> <img src="img/img2.jpg" alt=""></div>
        <div class="grid-item"> <img src="img/img3.jpg" alt=""></div>
        <div class="grid-item"> <img src="img/img4.jpg" alt=""></div>
        <div class="grid-item"> <img src="img/img5.jpg" alt=""></div>
        <div class="grid-item"> <img src="img/img6.jpg" alt=""></div>
        <div class="grid-item"> <img src="img/img7.jpg" alt=""></div>
        <div class="grid-item"> <img src="img/img8.jpg" alt=""></div>
  </div>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>var elem = document.querySelector('.grid');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});

// element argument can be a selector string
//   for an individual element
var msnry = new Masonry( '.grid', {
  // options
});</script>
</body>

</html>