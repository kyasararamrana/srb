<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SRB | <?php echo $pageTitle; ?></title>
    <?php echo $links; ?>
  </head>
  <body>
    <div id="app">
      <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <?php echo $header; ?>
        <?php echo $sidebar; ?>
        <div class="main-content">
            <section class="section">
                <h1 class="section-header">
                    <div>Dashboard</div>
                </h1>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card card-sm-3">
                            <div class="card-icon bg-primary">
                                <i class="ion ion-pricetags"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Categories</h4>
                                </div>
                                <div class="card-body">
                                   <?php echo $category;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card card-sm-3">
                            <div class="card-icon bg-danger">
                                <i class="ion ion-ios-albums-outline"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Products</h4>
                                </div>
                                <div class="card-body">
                                   <?php //echo $products_count;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card card-sm-3">
                            <div class="card-icon bg-warning">
                                <i class="ion ion-ios-cart"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Orders</h4>
                                </div>
                                <div class="card-body">
                                 <?php //echo $orders_count;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card card-sm-3">
                            <div class="card-icon bg-success">
                                <i class="ion ion-person"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Customers</h4>
                                </div>
                                <div class="card-body">
                                   <?php //echo $users_count;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </div>
    </div>
    <?php echo $scripts; ?>
  </body>
</html>
