<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET["10kqty"])) {
            $tenkqty = $_GET["10kqty"];
            $modprice = 0;
            $goldfeed = file_get_contents('http://gold-feed.com/iframe/gold-feed-plain.php');
            $metalprice = $goldfeed / 28.3495;
            $preresult = number_format($metalprice, 1);
            $result2 = $preresult * 42 / 100;
            $tenkresult = number_format($result2, 1) * $tenkqty + $modprice;
        } else {
            $tenkqty = 0;
            $tenkresult = 0;
        }
        if (isset($_GET["14kqty"])) {
            $fourkqty = $_GET["14kqty"];
            $modprice = 0;
            $goldfeed = file_get_contents('http://gold-feed.com/iframe/gold-feed-plain.php');
            $metalprice = $goldfeed / 28.3495;
            $preresult = number_format($metalprice, 1);
            $result2 = $preresult * 58 / 100;
            $fourkresult = number_format($result2, 1) * $fourkqty + $modprice;
        } else {
            $fourkqty = 0;
            $fourkresult = 0;
        }
        if (isset($_GET["18kqty"])) {
            $eightkqty = $_GET["18kqty"];
            $modprice = 0;
            $goldfeed = file_get_contents('http://gold-feed.com/iframe/gold-feed-plain.php');
            $metalprice = $goldfeed / 28.3495;
            $preresult = number_format($metalprice, 1);
            $result2 = $preresult * 75 / 100;
            $eightkresult = number_format($result2, 1) * $eightkqty + $modprice;
        } else {
            $eightkqty = 0;
            $eightkresult = 0;
        }
        if (isset($_GET["22kqty"])) {
            $twentykqty = $_GET["22kqty"];
            $modprice = 0;
            $goldfeed = file_get_contents('http://gold-feed.com/iframe/gold-feed-plain.php');
            $metalprice = $goldfeed / 28.3495;
            $preresult = number_format($metalprice, 1);
            $result2 = $preresult * 91.7 / 100;
            $twentykresult = number_format($result2, 1) * $twentykqty + $modprice;
        } else {
            $twentykqty = 0;
            $twentykresult = 0;
        }
       $total = $fourkresult + $tenkresult + $eightkresult + $twentykresult;
       number_format($total, 1);
        ?>
        <link href="style.css" type="text/css" rel="stylesheet" >
        <div id="goldgrabber">
            <form action="#" method="get" />
            <div class="int">
                <div class="row">
                    <input type="text" name="10kqty" value="<?php
        if (isset($_GET["10kqty"])) {
            echo $_GET["10kqty"];
        } else {
            echo 0;
        }
        ?>" class="qty"><input type="text" class="payout" value="<?php echo $tenkresult; ?>">
                </div>
                <div class="row">
                    <input type="text" name="14kqty" value="<?php
                    if (isset($_GET["14kqty"])) {
                        echo $_GET["14kqty"];
                    } else {
                        echo 0;
                    }
        ?>" class="qty"><input type="text" class="payout" value="<?php echo $fourkresult; ?>">
                </div>
                <div class="row">
                    <input type="text" name="18kqty" value="<?php
                    if (isset($_GET["18kqty"])) {
                        echo $_GET["18kqty"];
                    } else {
                        echo 0;
                    }
        ?>" class="qty"><input type="text" class="payout" value="<?php echo $eightkresult; ?>" >
                </div>
                <div class="row">
                    <input type="text" name="22kqty" value="<?php
                    if (isset($_GET["22kqty"])) {
                        echo $_GET["22kqty"];
                    } else {
                        echo 0;
                    }
        ?>" class="qty"><input type="text" class="payout" value="<?php echo $twentykresult; ?>">
                </div>
                <div class="row">
                    <input type="text" class="qty" value="N/A"><input type="text" class="payout" value="N/A">
                </div>
                <input type="text" class="total" value="<?php echo $total; ?>">
            </div>
            <input type="submit">


            </form>
        </div>
    </body>
</html>