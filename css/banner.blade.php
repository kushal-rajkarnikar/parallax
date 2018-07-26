<!-- <section class="banner flex-box">
    <div class="container flex-box">

        <div class="row flex-box" id="vertically-align-center">
            <div class="col-md-offset-3 col-md-5 col-sm-6">
                <div class="stay">
                   <!- -  <p>
                        Stay Updated With Our Mobile App <br>
                        <span>ANYTIME ANYWHERE</span>
                    </p>
                    <h5> get free mobile app & enjoy reading news</h5>
                    <p>
                        Download Our Mobile App and Stay Updated <br>
                        <span>ANYTIME ANYWHERE</span>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="app">
                 <a href="<?php echo $appStore; ?>" class="app1" target="_blank">
                   <i class="fa fa-apple ios"></i><br>
                   for IOS
               </a>
           </div>
           <div class="app">
             <a href="<?php echo $googlePlay; ?>" class="app1" target="_blank">
               <i class="fa  fa-android android"></i><br>
               for ANDROID
           </a>
       </div>
       
   </div>
   
</div>
</div>
</section> 
-->


<div class="gif-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                $header_2_ad = app('App\Http\Controllers\News')->otherAdvertisement('header-2');
                if($header_2_ad) {
                ?>
                <a href="<?php echo $header_2_ad->url; ?>" target="_blank">
                    <img src="<?php echo $addvertisementImageUrl . $header_2_ad->image; ?>" alt=""
                         class="img-responsive pull-right ad" id="top-banner">
                </a>
                <?php } else { ?>
                <a href="#" target="_blank">
                    <img src="https://www.inheadline.com/public/assets/images/ad-space-available-1170-by-90.jpg" alt=""
                         class="img-responsive pull-right ad" id="top-banner">
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>