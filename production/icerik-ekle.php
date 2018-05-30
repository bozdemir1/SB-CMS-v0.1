<?php
include 'header.php';
include '../ayarlar/baglan.php';
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Ayarlar</h3>
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
                        <h2>İçerik İşlemleri<small>
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
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="file" id="first-name"   name="icerik_resimyol"   class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Ad<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="first-name"  name="icerik_ad"  class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Zaman<span class="required">*</span>
                                </label>
                                <div class="col-md-3">
                                    <input type="date" id="first-name"  required="required"  name="icerik_tarih"  class="form-control col-md-7 col-xs-12" >
                                </div>
                                <div class="col-md-2">
                                    <input type="time" id="first-name" required="required"   name="icerik_saat"  class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Detay<span class="required">*</span> 
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea class="ckeditor" id="editor1" name="icerik_detay"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Keyword<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="first-name"  name="icerik_keyword" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Durum<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select id="heard" class="form-control" name="icerik_durum"  required>
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="reset">Temizle</button>
                                    <button type="submit" name="icerikkaydet" class="btn btn-success">Kaydet</button>
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

<?php include 'footer.php'; ?>
