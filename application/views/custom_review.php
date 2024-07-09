
<head>
    <title>Freshoo</title>
    <meta name="description" content="">
    <?php // include 'include/header.php' ?>
    <link rel="stylesheet" href="assets/css/custom-plan-review.css">
    <style>
    </style>
</head>
<body>
    <div>
        <?php //include 'include/menu-sec.php' ?>
    </div>
    <section class="custom-plan">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Custom Plan<span> Review</span></h2>
            </div>
            <?php
           $essential_vegetables= $this->session->userdata('storeEssential_vegetables');
           $leafy_vegetables= $this->session->userdata('leafy_vegetables');
           $root_vegetables= $this->session->userdata('root_vegetables');
           $squash_vegetables= $this->session->userdata('squash_vegetables');
           $podded_vegetables= $this->session->userdata('podded_vegetables');
           $other_vegetables= $this->session->userdata('other_vegetables');
            ?>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="essential-veg">
                        <h2 class="text-center">Essential <span>Vegetables</span></h2>
                        <ul class="list-group list-group-horizontal margin-btm-style">
                            <li class="list-group-item">
                                <h6 class="text-center margin-lft-style-2">Image</h6>
                            </li>
                            <li class="list-group-item">
                                <h6 class="text-center margin-lft-style-2">Item</h6>
                            </li>
                            <li class="list-group-item list-header">
                                <h6 class="text-center margin-lft-style-2">Weight</h6>
                            </li>
                        </ul>
                        <!-- dynamic -->
                        <?php foreach ($essential_vegetables as $vegetable): ?>
                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item">
                                    <img src="<?=base_url();?>/assets/images/<?=$vegetable['item']?>.jpg" style="width:35px;height:35px;">                                   
                                </li>
                                <li class="list-group-item text-center">
                                    <?php echo $vegetable['item']; ?>
                                </li>
                                <li class="list-group-item text-center">
                                    <?php 
                                    
                                    if ($vegetable['kg'] != null) {
                                        echo $vegetable['kg'] . " Kg";
                                    }
                                    if ($vegetable['gms'] != null) {
                                        if ($vegetable['kg'] != null) {
                                            echo ", ";
                                        }
                                        echo $vegetable['gms'] . " Gms";
                                    }
                                    ?>
                                </li>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
                    <?php if ($leafy_vegetables['kgValue'] != null || $leafy_vegetables['gmValue'] != null): ?>
                        <div class="row justify-content-center">
                        <div class="col-12 col-md-8">
                            <div class="essential-veg">
                            <h2 class="text-center">Leafy <span>Vegetables</span></h2>
                            <ul class="list-group list-group-horizontal margin-btm-style">
                            <li class="list-group-item"><h6 class="text-center margin-lft-style-2">Item</h6></li>
                            <li class="list-group-item list-header"><h6 class="text-center margin-lft-style-2">Weight</h6></li>
                                    <li class="list-group-item list-header">
                                        <h6 class="text-center margin-lft-style-2"></h6>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-group-item">
                                        <?php echo $leafy_vegetables['leafyitems']; ?>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <?php 
                                        if ($leafy_vegetables['kgValue'] != null) {
                                            echo $leafy_vegetables['kgValue'] . " Kg";
                                        }
                                        if ($leafy_vegetables['gmValue'] != null) {
                                            if ($leafy_vegetables['kgValue'] != null) {
                                                echo ", ";
                                            }
                                            echo $leafy_vegetables['gmValue'] . " Gms";
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item"></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    <?php endif; ?>

                <?php if ($root_vegetables['kgValue'] != null || $root_vegetables['gmValue'] != null): ?>
                <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                <div class="essential-veg">
                    <h2 class="text-center">Root <span>Vegetables</span></h2>
                    <ul class="list-group list-group-horizontal margin-btm-style">
                        <li class="list-group-item">
                            <h6 class="text-center margin-lft-style-2">Item</h6>
                        </li>
                        <li class="list-group-item">
                            <h6 class="text-center margin-lft-style-2">Weight</h6>
                        </li>
                    </ul>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <?php echo $root_vegetables['rootitems']; ?>
                        </li>
                        <li class="list-group-item text-center">
                            <?php 
                            if ($root_vegetables['kgValue'] != null) {
                                echo $root_vegetables['kgValue'] . " Kg";
                            }
                            if ($root_vegetables['gmValue'] != null) {
                                if ($root_vegetables['kgValue'] != null) {
                                    echo ", ";
                                }
                                echo $root_vegetables['gmValue'] . " Gms";
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                </div>
                </div>
                <?php endif; ?>
                <?php if ($squash_vegetables['kgValue'] != null || $squash_vegetables['gmValue'] != null): ?>
                <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                <div class="essential-veg">
                    <h2 class="text-center">Squash <span>Vegetables</span></h2>
                    <ul class="list-group list-group-horizontal margin-btm-style">
                        <li class="list-group-item">
                            <h6 class="text-center margin-lft-style-2">Item</h6>
                        </li>
                        <li class="list-group-item">
                            <h6 class="text-center margin-lft-style-2">Weight</h6>
                        </li>
                    </ul>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <?php echo $squash_vegetables['squashitems']; ?>
                        </li>
                        <li class="list-group-item text-center">
                            <?php 
                            if ($squash_vegetables['kgValue'] != null) {
                                echo $squash_vegetables['kgValue'] . " Kg";
                            }
                            if ($squash_vegetables['gmValue'] != null) {
                                if ($squash_vegetables['kgValue'] != null) {
                                    echo ", ";
                                }
                                echo $squash_vegetables['gmValue'] . " Gms";
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                </div>
                </div>
                <?php endif; ?>
                <?php if ($podded_vegetables['kgValue'] != null || $podded_vegetables['gmValue'] != null): ?>
                <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                <div class="essential-veg">
                    <h2 class="text-center">Podded <span>Vegetables</span></h2>
                    <ul class="list-group list-group-horizontal margin-btm-style">
                        <li class="list-group-item">
                            <h6 class="text-center margin-lft-style-2">Item</h6>
                        </li>
                        <li class="list-group-item">
                            <h6 class="text-center margin-lft-style-2">Weight</h6>
                        </li>
                    </ul>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <?php echo $podded_vegetables['poddeditems']; ?>
                        </li>
                        <li class="list-group-item text-center">
                            <?php 
                            if ($podded_vegetables['kgValue'] != null) {
                                echo $podded_vegetables['kgValue'] . " Kg";
                            }
                            if ($podded_vegetables['gmValue'] != null) {
                                if ($podded_vegetables['kgValue'] != null) {
                                    echo ", ";
                                }
                                echo $podded_vegetables['gmValue'] . " Gms";
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                </div>
                </div>
                <?php endif; ?>

                    <?php if ($other_vegetables['kgValue'] != null || $other_vegetables['gmValue'] != null): ?>
                        <div class="row justify-content-center">
                        <div class="col-12 col-md-8">
                        <div class="essential-veg">
                            <h2 class="text-center">Other <span>Vegetables</span></h2>
                            <ul class="list-group list-group-horizontal margin-btm-style">
                                <li class="list-group-item">
                                    <h6 class="text-center margin-lft-style-2">Item</h6>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="text-center margin-lft-style-2">Weight</h6>
                                </li>
                            </ul>
                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item">
                                    <?php echo $other_vegetables['otheritems']; ?>
                                </li>
                                <li class="list-group-item text-center">
                                    <?php 
                                    if ($other_vegetables['kgValue'] != null) {
                                        echo $other_vegetables['kgValue'] . " Kg";
                                    }
                                    if ($other_vegetables['gmValue'] != null) {
                                        if ($other_vegetables['kgValue'] != null) {
                                            echo ", ";
                                        }
                                        echo $other_vegetables['gmValue'] . " Gms";
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                        </div>
                        </div>
                    <?php endif; ?>

                    <a href="" class="text-white text-decoration-none">
                        <button class="btn-next">
                            NEXT
                        </button>
                    </a>
              
        </div>
    </section>
    <?php //include 'include/footer-main.php' ?>
</body>
</html>
