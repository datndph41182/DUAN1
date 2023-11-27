<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <img src="view/images/Frame_2.png" style="width:100% object-fit fill">
                </div>

                <div class="mySlides fade">
                <img src="view/images/Frame_3.png" style="width:100% object-fit fill">
                </div>

                <div class="mySlides fade">
                <img src="view/images/Frame_4.png" style="width:100% object-fit fill">
                </div>

                <div class="mySlides fade">
                <img src="view/images/Frame_5.png" style="width:100% object-fit fill">
                </div>

                <div class="mySlides fade">
                <img src="view/images/Frame_6.png" style="width:100% object-fit fill">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i=0;
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh=$img_path.$img;
                    if(($i==2)||($i==5)||($i==8)){
                        $mr="";
                    }else{
                        $mr="mr";
                    }
                    echo '<div class="boxsp '.$mr.'">
                            <div class="row img">
                                <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                            </div>
                            <p class="price">'.$price.'</p>
                        </div>';
                    $i+=1;
                }
            ?>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>