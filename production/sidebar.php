<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">
            <li><a href="index.php"><i class="fa fa-home"></i>Anasayfa</a>
            </li> 
            <li><a href="etkinlikler.php"><i class="fa fa-book"></i>Etkinlikler</a>
            </li> 
            <li><a href="menu.php"><i class="fa fa-list"></i>Menüler</a>
            </li> 
            <li><a href="slider.php"><i class="fa fa-image"></i>Slider</a>
            </li> 
            <li><a href="icerik.php"><i class="fa fa-pencil"></i>İçerik</a>
            </li> 
            <li>
                <?php
                    $admin = $_SESSION['kullanici_ad'];
                    $adminsor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_ad=:ad ");
                    $adminsor->execute(array(
                        'ad' => $_SESSION['kullanici_ad']
                    ));
                    $admincek = $adminsor->fetch(PDO::FETCH_ASSOC);

                    if ($admincek['kullanici_yetki'] == "admin")
                    {
                        ?>
                <a><i class="fa fa-cog"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                        <li><a href="genel-ayar.php">Genel Ayarlar</a></li>
                    <li><a href="iletisim-ayar.php">İletişim Ayarlar</a></li>
                    <li><a href="api-ayar.php">API Ayarlar</a></li>
                    <li><a href="sosyal-ayar.php">Sosyal Medya Ayarlar</a></li>
                    <li><a href="mail-ayar.php">Mail Ayarlar</a></li>
                </ul>
               <?php } ?>
            </li>
        </ul>
    </div>
</div>