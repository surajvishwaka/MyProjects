<style>
    .s12:hover {
        background-color: #f0f5ff;
    }

    .s12 {
        padding-left: 30px;
    }

    ul {
        padding-left: 0px;
        margin: 0px 25px;
    }

    #about415 {
        font-size: 12px;
    }

    #searcherr {
        width: 200px;
    }

    #searcherr1 {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 18px;
    }

    .searcherr1 {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<?php

include_once "connection2.php";

if (isset($_GET['q'])) {
    $q = $_GET['q'];
    //xxs
    $q = htmlentities($q);
    //sql
    $q = mysqli_real_escape_string($conn, $q);
    $sql = "SELECT * FROM  datasearch WHERE materialname = '$q' or materialname LIKE '%$q' or materialname LIKE '$q%' or materialname LIKE '%$q%'";
    // $sql = "SELECT * FROM datasearch WHERE materialname LIKE '%$q%'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
?>
        <ul class="collection row">
            <?php
            while ($x = mysqli_fetch_assoc($res)) {
            ?>
                <li class="collection-item s12 text-secondary" style="list-style: none; margin:5px;">
                    <div class="d-flex">

                        <!-- <img style="width: 40px; margin-right: 10px;" class="img-fluid" src="'<?php echo $x['picture']; ?>'"> -->
                        <div class="d-block">
                            <p class="text-primary" style="margin-bottom: 0px;">
                                <a href="product.php" style="text-decoration: none; color:black; font-weight:500;">
                                    <?php echo $x['materialname']; ?>
                                </a>
                            </p>
                            <span id="about415" class="text-primary"><?php echo $x['about']; ?> </span>
                        </div>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
<?php
    } else {
        echo "
            <div id='searcherr1'>
                <img id='searcherr' src='images/searcherr.png'>
            </div>
            <div class='searcherr1'><h3 class='text-danger'>Not Found!</h3></div>
        ";
    }
} else {
    echo "<p class='text-danger'>Bad request.</p>";
}

?>