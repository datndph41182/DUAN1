<div class="row mb ">
    </div>
    <div class="row mb">
    <div class="boxtitle">Danh mục</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm="index.php?act=sanpham&iddm=".$id;
                    echo '<li>
                            <a href="'.$linkdm.'">'.$name.'</a>
                        </li>';
                }
            ?>
        </ul>
    </div>
    <div class="boxfooter searbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" placeholder="Tìm kiếm">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
    </div>
    <div class="row">
    <div class="boxtitle">Top 10 yêu thích</div>
    <div class="row boxcontent">
        <?php
            foreach ($dstop10 as $sp) {
                extract($sp);
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $img=$img_path.$img;
                echo '<div class="row mb top10">
                    <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                    <a href="'.$linksp.'">'.$name.'</a>
                </div>';
            }
        ?>
    </div>
</div>