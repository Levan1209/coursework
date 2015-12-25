<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>


</section>
<!--content end-->
<!--footer -->
<footer>
    <div class="wrapper">
        <ul id="icons">
            <li><a href="#" class="normaltip"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icon1.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icon2.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icon3.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icon4.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icon5.jpg" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="<?=SITE_TEMPLATE_PATH;?>/images/icon6.jpg" alt=""></a></li>
        </ul>
        <div class="links">Copyright &copy; <?echo date("Y")?> <a href="#">Турфирма глобус</a> All Rights Reserved<br>
            Design by <a target="_blank" href="#">Levan Goshadze</a></div>
    </div>
</footer>
<!--footer end-->
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
    $(document).ready(function () {
        tabs.init();
    });
    jQuery(document).ready(function ($) {
        $('#form_1, #form_2, #form_3').jqTransform({
            imgPath: 'jqtransformplugin/img/'
        });
    });
    $(window).load(function () {
        $('#slider').nivoSlider({
            effect: 'fade', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
            slices: 15,
            animSpeed: 500,
            pauseTime: 6000,
            startSlide: 0, //Set starting Slide (0 index)
            directionNav: false, //Next & Prev
            directionNavHide: false, //Only show on hover
            controlNav: false, //1,2,3...
            controlNavThumbs: false, //Use thumbnails for Control Nav
            controlNavThumbsFromRel: false, //Use image rel for thumbs
            controlNavThumbsSearch: '.jpg', //Replace this with...
            controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
            keyboardNav: true, //Use left & right arrows
            pauseOnHover: true, //Stop animation while hovering
            manualAdvance: false, //Force manual transitions
            captionOpacity: 1, //Universal caption opacity
            beforeChange: function () {},
            afterChange: function () {},
            slideshowEnd: function () {} //Triggers after all slides have been shown
        });
    });
</script>
</body>
</html>