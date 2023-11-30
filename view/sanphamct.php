<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <?php extract($onesp); ?>
            <div class="boxtitle"><?=$name?></div>
            <div class="row boxcontent">
                <?php
                    
                    $img=$img_path.$img;
                    echo '<div class="row mb spct"><img src="'.$img.'"></div><br>';
                    echo $mota;
                ?>
                <div class="box_content">
                        <div class="imgsp">
                            <img src="images/Frame_6.png" width="350px" height="350" id="main-img">
                            <p>
                                <img src="images/Frame_6.png" width="100" />
                                <img src="images/z4922720325983_8fef6add3bbaf3fadc2819fd03f21ef1.jpg" width="90" />
                                <img src="images/z4922720335738_b15f44ad027486d79edade562cb0a682.jpg" width="90" />
                                <img src="images/z4922720344974_8e32a55f3b760aed8c222913378d12b9.jpg" width="90" />
                            </p>
                        </div>
                        <div class="ndsp">
                            <h1>Paco Rabnne Phantom</h1>
                            <p>★★★★★</p>
                            <hr>
                            <h3>Giá: $40.00</h3>
                            <p><s>$50.00</s> | Tiết kiệm: $10.00</p>
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
                            <h2>MÔ TẢ SẢN PHẨM</h2>
                            <hr>
                            <p>.....................................................................................</p>
                            <br>
                            <p>......................</p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">Bình luận</div>
            <div class="row boxcontent">
                
            </div>
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