<?php include 'header.php'; 
include'../ayarlar/baglan.php';

$iceriksor=$db->prepare("SELECT * FROM icerik ORDER BY icerik_id");
$iceriksor->execute();
$iceriksay=$iceriksor->rowCount(); 

$etkinliksor=$db->prepare("SELECT * FROM etkinlikler ORDER BY etkinlikler_id");
$etkinliksor->execute();
$etkinliksay=$etkinliksor->rowCount();  

$uyesor=$db->prepare("SELECT * FROM mybb_users ORDER BY uid");
$uyesor->execute();
$uyesay=$uyesor->rowCount();  

?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Genel Bilgiler</h3>
        </div>

        <div class="title_right">
            
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
               <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>-->
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
<!--
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i>Toplam Üye Sayısı</span>
            <div class="count"><?php// echo $uyesay; ?></div>
            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Ortalama Süre</span>
            <div class="count">123.50</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
            <div class="count green">2,500</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
            <div class="count">4,567</div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
            <div class="count">2,315</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
            <div class="count">7,325</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Pie Graph</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="echart_pie" style="height:350px;"></div>
                <div id="mycanvas" style="height:350px;"></div>
            </div>
        </div>
    </div>
-->
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-align-left"></i></div>
                <div class="count"><?php echo $iceriksay; ?></div>
                <h3>Sitedeki Toplam Yazı</h3>
                <p></p>
            </div>
        </div>
        <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-calendar"></i></div>
                <div class="count"><?php echo $etkinliksay; ?></div>
                <h3>Oluşturulan Etkinlik Sayısı</h3>
                <p></p>
            </div>
        </div>
        <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-user"></i></div>
                <div class="count"><?php echo $uyesay; ?></div>
                <h3>Üye Sayısı</h3>
                <p></p>
            </div>
        </div>
    </div> 
</div>

<!-- /page content -->

<?php include 'footer.php'; ?>
