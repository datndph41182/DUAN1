<div class="row mb">
    <div class="boxtraii mr " style="width: 100%;">
        <div class="row mb">
            <div class="boxtitle">Quên mật khẩu</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                <div class="row mb10">
                    Email
                    <input type="email" name="email" required>
                </div>
                
                <div class="row mb10">
                    <input type="submit" value="Gửi" name="guiemail">
                    <input type="reset" value="Nhập lại">
                </div>
                </form>
                <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
            </div>
        </div>
        </div>