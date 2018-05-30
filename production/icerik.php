<?php include 'header.php';
include '../ayarlar/baglan.php';

if(isset($_POST['arama'])){
    $aranan=$_POST['aranan'];

$iceriksor=$db->prepare("SELECT * FROM icerik WHERE icerik_ad LIKE '%$aranan%' ORDER BY icerik_id ASC limit 25");
$iceriksor->execute();
$say=$iceriksor->rowCount();
    
} else {
    
    $iceriksor=$db->prepare("SELECT * FROM icerik ORDER BY icerik_id DESC limit 25");
$iceriksor->execute();
$say=$iceriksor->rowCount();  
}
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Yazılar</h3>     
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <form action="" method="post">
                   <div class="input-group">
                    <input type="text" class="form-control" name="aranan" placeholder="Anahtar kelime...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="arama">Ara!</button>
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>İçerik İşlemleri<small>
                       <?php  echo $say. " kayıt listelendi";
                        if ($_GET['durum']=='ok') { ?>
       
                         <b style="color:green;">İşlem başarılı...</b>
                         
                         <?php } elseif ($_GET['durum']=='no'){ ?>
                           
                            <b style="color:red;">İşlem başarısız...</b>
                            
                       <?php } ?>
                       </small>
                       </h2>
                    <div align="right" class="col-md-12">
                     <a href="icerik-ekle.php"><button style="margin-top:30px;" class="btn btn-primary "><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button></a>
                      </div>
                    <div class="clearfix"></div>
                  </div>
                   <div class="x_content">
                    
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">

                            <th class="column-title">Yazı Başlık </th>
                            <th class="column-title">Yazı Tarih </th>
                            <th class="column-title">Yazı Durum </th>
                            <th width="80" class="column-title"> </th>
                            <th width="80" class="column-title"> </th>
                          
                          </tr>
                        </thead>
                        <tbody>
    
                        <?php
                            
                        
                        while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)){
                        ?>
                          <tr>
                           
                            
                            <td class=""> <?php echo $icerikcek['icerik_ad'] ?></td>
                            <td class=" "> <?php echo $icerikcek['icerik_zaman'] ?></td>
                            <td class=" "><?php 
                                
                                if($icerikcek['icerik_durum']=="1"){
                                    echo "AKTİF";
                                } else {
                                    echo "PASİF";
                                }
                            
                            ?></td>
                            
                              <td class=" "><a href="icerik-duzenle.php?icerik_id=<?php echo $icerikcek['icerik_id']; ?>"><button style="width:80px" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button></a></td>
                            
                            <td class=" "><a href="../ayarlar/islem.php?iceriksil=ok&icerik_id=<?php echo $icerikcek['icerik_id']; ?>"><button style="width:80px" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Sil</button></a></td>
                            
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>	
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
