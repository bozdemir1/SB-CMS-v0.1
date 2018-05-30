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
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Etkinlik Ad<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="first-name"  name="etkinlikler_ad"   class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Etkinliik Zaman<span class="required">*</span>
                                </label>
                                <div class="col-md-3">
                                    <input type="date" id="first-name"  required="required"  name="etkinlikler_tarih"  class="form-control col-md-7 col-xs-12" >
                                </div>
                                <div class="col-md-2">
                                    <input type="time" id="first-name" required="required"   name="etkinlikler_saat"  class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Etkinlik Sahibi Ad Soyad<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="first-name"    name="etkinlikler_sahip"  class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Etkinlik Açıklama<span class="required">*</span> 
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea class="ckeditor" id="editor1" name="etkinlikler_aciklama"></textarea>
                                </div>
                            </div>
            
                           <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Motor Modeli Seç</label>
                                    <div class="col-md-6 col-sm-4 col-xs-12">
                                        <select class="select2_single form-control" required="required" name="etkinlikler_motor_modeller" tabindex="-1">
                                            <option value="Motor Modeli Seçiniz">Motor Modeli Seçiniz</option>
                                             <option value="Ducati"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Ducati'){echo "selected";}?>>Ducati</option>
                                             <option value="Honda"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Honda'){echo "selected";}?>>Honda</option>
                                             <option value="Yamaha"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Yamaha'){echo "selected";}?>>Yamaha</option>
                                             <option value="Kawasaki"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Kawasaki'){echo "selected";}?>>Kawasaki</option>
                                             <option value="Triumph"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Triumph'){echo "selected";}?>>Triumph</option>
                                             <option value="KTM"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='KTM'){echo "selected";}?>>KTM</option>
                                             <option value="Suzuki"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Suzuki'){echo "selected";}?>>Suzuki</option>
                                             <option value="BMW"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='BMW'){echo "selected";}?>>BMW</option>
                                             <option value="Mondial"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Mondial'){echo "selected";}?>>Mondial</option>
                                             <option value="Harley-Davidson"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Harley-Davidson'){echo "selected";}?>>Harley-Davidson</option>
                                             <option value="Vespa"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Vespa'){echo "selected";}?>>Vespa</option>
                                             <option value="Indian"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Indian'){echo "selected";}?>>Indian</option>
                                             <option value="Victory"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Victory'){echo "selected";}?>>Victory</option>
                                             <option value="Aprilla"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Aprilla'){echo "selected";}?>>Aprilla</option>
                                             <option value="Bajaj"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Bajaj'){echo "selected";}?>>Bajaj</option>
                                             <option value="Moto-Guzzi"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Moto-Guzzi'){echo "selected";}?>>Moto-Guzzi</option>
                                             <option value="Royal-Enfield"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Royal-Enfield'){echo "selected";}?>>Royal-Enfield</option>
                                             <option value="Husqvarna"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Husqvarna'){echo "selected";}?>>Husqvarna</option>
                                             <option value="MV-Agusta"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='MV-Agusta'){echo "selected";}?>>MV-Agusta</option>
                                             <option value="Hero"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Hero'){echo "selected";}?>>Hero</option>
                                             <option value="TVS"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='TVS'){echo "selected";}?>>TVS</option>
                                             <option value="Peugeot"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Peugeot'){echo "selected";}?>>Peugeot</option>
                                             <option value="Benelli"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Benelli'){echo "selected";}?>>Benelli</option>
                                             <option value="Piaggio"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Piaggio'){echo "selected";}?>>Piaggio</option>
                                             <option value="SYM"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='SYM'){echo "selected";}?>>SYM</option>
                                             <option value="Ural"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Ural'){echo "selected";}?>>Ural</option>
                                             <option value="Hyosung"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Hyosung'){echo "selected";}?>>Hyosung</option>
                                             <option value="Jawa-CZ"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Jawa-CZ'){echo "selected";}?>>Jawa CZ</option>
                                             <option value="Kymco"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Kymco'){echo "selected";}?>>Kymco</option>
                                             <option value="Daelim"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Daelim'){echo "selected";}?>>Daelim</option>
                                             <option value="Derbi"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Derbi'){echo "selected";}?>>Derbi</option>
                                             <option value="Gilera"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Gilera'){echo "selected";}?>>Gilera</option>
                                             <option value="Megelli"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Megelli'){echo "selected";}?>>Megelli</option>
                                             <option value="Gas-Gas"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Gas-Gas'){echo "selected";}?>>Gas-Gas</option>
                                             <option value="Sherco"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Sherco'){echo "selected";}?>>Sherco</option>
                                             <option value="Beta"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Beta'){echo "selected";}?>>Beta</option>
                                             <option value="TM-Racing"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='TM-Racing'){echo "selected";}?>>TM-Racing</option>
                                             <option value="Oset"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Oset'){echo "selected";}?>>Oset</option>
                                             <option value="Cagiva"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Cagiva'){echo "selected";}?>>Cagiva</option>
                                             <option value="Kanuni"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Kanuni'){echo "selected";}?>>Kanuni</option>
                                             <option value="Haojue"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Haojue'){echo "selected";}?>>Haojue</option>
                                             <option value="CF-Moto"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='CF-Moto'){echo "selected";}?>>CF-Moto</option>
                                             <option value="RKS"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='RKS'){echo "selected";}?>>RKS</option>
                                             <option value="Kuba"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Kuba'){echo "selected";}?>>Kuba</option>
                                             <option value="Zero"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Zero'){echo "selected";}?>>Zero</option>
                                             <option value="Volta"  <?php if($etkinlikcek["etkinlikler_motor_modeller"]=='Volta'){echo "selected";}?>>Volta</option>
                                        </select>
                                    </div>
                                </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Etkinlik Harita ID<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="first-name"   name="etkinlikler_harita_id"  class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Etkinlik Harita Özel Anahtar<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" id="first-name"   name="etkinlikler_harita_privatekey" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Etkinlik Durum<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select id="heard" class="form-control" name="etkinlikler_durum"  required>
                                        <option value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Temizle</button>
                                        <button type="submit" name="etkinlikkaydet" class="btn btn-success">Kaydet</button>
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
