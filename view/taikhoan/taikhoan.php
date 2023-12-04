<div class="row mb">
<div class=" boxtitle">Tài khoản</div>
    <div class="boxcontent formtaikhoan">
        <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
        ?>
            <div class="row mb10">
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                <?php if($role==1){ ?>
                <li><a href="admin/index.php">Đăng nhập ADMIN</a></li>
                <?php }?>
                <li><a href="index.php?act=dangxuat">Đăng xuất</a></li> 
            </div>
        <?php
            }else{
        ?>
        <form action="index.php?act=dangnhap" method="post">
            <div class="row mb10">
                Tên đăng nhập: <br>
                <input type="text" name="user" id="">
            </div>
            <div class="row mb10">
                Mật khẩu: <br>
                <input type="password" name="pass" id="">
            </div>
            <div class="row mb10">
                <input type="checkbox" name="" id="">Ghi nhớ tài khoản
            </div>
            <div class="row mb10">
                <input type="submit" value="Đăng nhập" name="dangnhap">
            </div>
        </form>
        <li><a href="index.php?act=dangky">Đăng ký tài khoản</a></li>
        <?php }?>
    </div>
</div>
