<link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/css/event.css">



<div class="page">

    <h1 style="font-weight: 700px;"><?php echo $lang['aee'] ?></h1>
    <p><?php echo $lang['Description'] ?>  ...<a href="#"><?php echo $lang['rm'] ?> </a>
    </p>
            
          
    <script>function magnify(imgID, zoom) {
    var img, glass, w, h, bw;
    img = document.getElementById(imgID);
    /*create magnifier glass:*/
    glass = document.createElement("DIV");
    glass.setAttribute("class", "img-magnifier-glass");
    /*insert magnifier glass:*/
    img.parentElement.insertBefore(glass, img);
    /*set background properties for the magnifier glass:*/
    glass.style.backgroundImage = "url('" + img.src + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = (1520 * zoom) + "px " + (img.height * zoom) + "px";
    bw = 3;
    w = glass.offsetWidth / 2;
    h = glass.offsetHeight / 2;
    /*execute a function when someone moves the magnifier glass over the image:*/
    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
    /*and also for touch screens:*/
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);

    function moveMagnifier(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;
        /*prevent the magnifier glass from being positioned outside the image:*/
        if (x > 1520 - (w / zoom)) { x = 1520 - (w / zoom); }
        if (x < w / zoom) { x = w / zoom; }
        if (y > img.height - (h / zoom)) { y = img.height - (h / zoom); }
        if (y < h / zoom) { y = h / zoom; }
        /*set the position of the magnifier glass:*/
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        /*display what the magnifier glass "sees":*/
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    }

    function getCursorPos(e) {
        var a, x = 0,
            y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return { x: x, y: y };
    }
}</script>


    <div class="img-magnifier-container">
        <div class="mySlides">
            <div class="numbertext">1 / 12</div>
            <img id="myimage1" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e8.jpg"  width="100%" height="540">
            <script>
                magnify("myimage1", 2);
            </script>
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 12</div>
            <img id="myimage2" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e2.jpg" width="100%" height="540">
        <script>
            magnify("myimage2", 3);
        </script>
        </div>
       

        <div class="mySlides">
            <div class="numbertext">3 / 12</div>
            <img id="myimage3" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e3.jpg" width="100%" height="540">
        </div>
        <script>
            magnify("myimage3", 2);
        </script>
        <div class="mySlides">
            <div class="numbertext">4 / 12</div>
            <img id="myimage4" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e4.jpg"  width="100%" height="540">
        </div>
        <script>

            magnify("myimage4", 2);
        </script>
        <div class="mySlides">
            <div class="numbertext">5 / 12</div>
            <img id="myimage5" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/i7.jpg" width="100%" height="540">
        </div>
        <script>

            magnify("myimage5", 2);
        </script>
        <div class="mySlides">
            <div class="numbertext">6 / 12</div>
            <img id="myimage6" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e6.jpg"  width="100%" height="540">
        </div>
        <script>

            magnify("myimage6", 2);
        </script>

        <div class="mySlides">
            <div class="numbertext">7 / 12</div>
            <img id="myimage7" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e7.jpg"  width="100%" height="540">
        </div>
        <script>

            magnify("myimage7", 2);
        </script>
        <div class="mySlides">
            <div class="numbertext">8 / 12</div>
            <img id="myimage8" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/i8.jpg"  width="100%" height="540">
        </div>
        <script>

            magnify("myimage8", 2);
        </script>
        <div class="mySlides">
            <div class="numbertext">9 / 12</div>
            <img id="myimage9" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/i1.jpg"  width="100%" height="540">
        </div>
        <script>

            magnify("myimage9", 2);
        </script>
        <div class="mySlides">
            <div class="numbertext">10 / 12</div>
            <img id="myimage10" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/i2.jpg"  width="100%" height="540">
        </div>
        <script>

            magnify("myimage10", 2);
        </script>
        <div class="mySlides">
            <div class="numbertext">11 / 12</div>
            <img id="myimage11" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/i3.jpg"  width="100%" height="540">
        </div>
        <script>

            magnify("myimage11", 2);
        </script>
        <div class="mySlides">
            <div class="numbertext">12 / 12</div>
            <img id="myimage12" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e1.jpg"  width="100%" height="540">
        </div>
        <script>

            magnify("myimage12", 2);
        </script>

        <a class="prev" onclick="plusSlides(-1)"> <</a>
        <a class="next" onclick="plusSlides(1)"> ></a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <div class="row">
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e8.jpg" height="150" width="100%" onclick="currentSlide(1)" alt="<?php echo $lang['i44'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e2.jpg" height="150" width="100%" onclick="currentSlide(2)" alt="<?php echo $lang['e22'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e3.jpg" height="150" width="100%" onclick="currentSlide(3)" alt="<?php echo $lang['e33'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e4.jpg" height="150" width="100%" onclick="currentSlide(4)" alt="<?php echo $lang['e44'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/i7.jpg" height="150" width="100%" onclick="currentSlide(5)" alt="<?php echo $lang['i77'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e6.jpg" height="150" width="100%" onclick="currentSlide(6)" alt="<?php echo $lang['e66'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e7.jpg" height="150" width="100%" onclick="currentSlide(7)" alt="<?php echo $lang['e77'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/i8.jpg" height="150" width="100%" onclick="currentSlide(8)" alt="<?php echo $lang['e88'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/i1.jpg" height="150" width="100%" onclick="currentSlide(9)" alt="<?php echo $lang['i11'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/i2.jpg" height="150" width="100%" onclick="currentSlide(10)" alt="<?php echo $lang['i22'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/i3.jpg" height="150" width="100%" onclick="currentSlide(11)" alt="<?php echo $lang['i33'] ?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="http://localhost/programmation-web-2---s4---2020-master/assets/img/e1.jpg" height="150" width="100%" onclick="currentSlide(12)" alt="<?php echo $lang['e11'] ?>">
            </div>
        </div>
    </div>
    <h2><?php echo $lang['av'] ?></h2>


</div>

