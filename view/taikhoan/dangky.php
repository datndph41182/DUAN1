<div class="row mb">
    <div class="boxtraii mr " style="width: 100%;">
        <div class="row mb">
            <div class="boxtitle">Đăng ký tài khoản</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                <div class="row mb10">
                    Email
                    <input type="email" name="email" required>
                </div>
                <div class="row mb10">
                    User
                    <input type="text" name="user" required>
                </div>
                <div class="row mb10">
                    Password
                    <input type="password" name="pass" required>
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng ký" name="dangky">
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
    <!-- <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div> -->