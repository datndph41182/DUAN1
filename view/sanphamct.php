<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <?php extract($onesp); ?>
            <div class="boxtitle"><?=$name?></div>
            `<div class="row boxcontent">`
                <?php
                    
                    $img=$img_path.$img;
                    
                ?>
                
                <div class="box_content">
                        <div class="imgsp">
                            <img src="<?=$img?>" width="350px" height="350" id="main-img">
<<<<<<< HEAD
=======
                            <p>
                                <img src="<?=$img?>" width="90" /> <br>
                                <img src="<?=$img?>" width="90" /> <br>
                                <img src="<?=$img?>" width="90" /> <br>
                                <img src="<?=$img?>" width="90" /> <br>
                            </p>
>>>>>>> 36f24964213c74b33d7fb586cbf5fd6530279a33
                        </div>
                        <div class="ndsp">
                            <h1><?=$name?></h1>
                            <p>★★★★★</p>
                            <hr>
                            <!-- <h3>Giá: $40.00</h3> -->
                            <p><s><?=$price?></s> | Tiết kiệm: $10.00</p>
                            <div class="product">
                                <span>Số lượng:</span>
                                <div class="quantity">
                                    <button onclick="decreaseQuantity(this)">-</button>
                                    <input type="text" value="1">
                                    <button onclick="increaseQuantity(this)">+</button>
                                </div>
                                <button onclick="addToCart(this)">Thêm vào giỏ hàng</button><br>
                                <button onclick="addToCart(this)">MUA NGAY</button>
                            </div>
                        </div>
                    </div>
                    <h2>MÔ TẢ SẢN PHẨM</h2>
                    <?php echo $mota;?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            });
        </script>
        <div class="row" id="binhluan">
            
        </div>
        <div class="row mb">
            <div class="boxtitle">Sản phẩm cùng loại</div>
            <div class="row boxcontent">
                <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li> ';
                    }
                ?>
            </div>
        </div>
        </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>