<?php
include 'header.php';
include '../ayarlar/baglan.php';


if($_SESSION['kullanici_yetki'] == "editor"){
    header('Location:../production/yetki-yok.php');
}


    $ayarsor = $db->prepare("SELECT * FROM ayarlar WHERE site_id=?");
    $ayarsor->execute(array(0));
    $ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);
    ?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Ayarlar </h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Anahtar kelimeniz...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Ara!</button>
                                </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Genel Ayarlar<small>
                                    <?php if ($_GET['durum'] == 'ok')
                                    { ?>

                                        <b style="color:green;">Güncelleme başarılı...</b>

                                    <?php }
                                    elseif ($_GET['durum'] == 'no')
                                    { ?>

                                        <b style="color:red;">Güncelleme başarısız...</b>

    <?php } ?>  
                                </small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form action="../ayarlar/islem.php" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Logo<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <?php if (strlen($ayarcek['site_logo']) > 0)
                                        { ?>     

                                            <img width="200" src="../../<?php echo $ayarcek['site_logo']; ?>">

    <?php }
    else
    { ?>

                                                <img width="125" src="../../img/logoyok.jpg">
    <?php } ?>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Görsel Seç <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="file" id="first-name"  name="site_logo" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['site_logo']; ?>">

                                                    <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                        <button type="submit" name="logoduzenle" class="btn btn-success">Güncelle</button>
                                                    </div>

                                                    </form>

                                                    <form action="../ayarlar/islem.php"  method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Adresi <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input type="text" id="first-name" required="required" name="site_url" value="<?php echo $ayarcek['site_url']; ?>" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığı <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input type="text" id="first-name" required="required" name="site_baslik" value="<?php echo $ayarcek['site_baslik']; ?>" class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklama <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input type="text" id="first-name" required="required" name="site_desc" value="<?php echo $ayarcek['site_desc']; ?>"class="form-control col-md-7 col-xs-12">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Anahtar Kelimeleri <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input type="text" id="first-name" required="required" name="site_keyw" value="<?php echo $ayarcek['site_keyw']; ?>" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                            <button class="btn btn-primary" type="reset">Temizle</button>
                                                            <button type="submit" name="genelayarkaydet" class="btn btn-success">Kaydet</button>
                                                        </div>
                                                    </div>

                                                </form>

                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                <!-- /page content -->

                                                <!-- footer content -->
                                                <footer>
                                                    <div class="pull-right">
                                                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </footer>
                                                <!-- /footer content -->
                                                </div>
                                                </div>

                                                <!-- jQuery -->
                                                <script src="../vendors/jquery/dist/jquery.min.js"></script>
                                                <!-- Bootstrap -->
                                                <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                                                <!-- FastClick -->
                                                <script src="../vendors/fastclick/lib/fastclick.js"></script>
                                                <!-- NProgress -->
                                                <script src="../vendors/nprogress/nprogress.js"></script>

                                                <!-- Custom Theme Scripts -->
                                                <script src="../build/js/custom.min.js"></script>
                                                </body>
                                                </html>
