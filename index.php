<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>eir登録</legend>
                <label>shipping line：<input type="text" name="shipping_line"></label><br>
                <label>place：<input type="text" name="place"></label><br>
                <label>carrier：<input type="text" name="carrier"></label><br>
                <label>vessel：<input type="text" name="vessel"></label><br>
                <label>voy：<input type="text" name="voy"></label><br>
                <label>bkg_bl_no：<input type="text" name="bkg_bl_no"></label><br>
                <label>container_no：<input type="text" name="container_no"></label><br>
                <label>seal_no：<input type="text" name="seal_no"></label><br>
                <label>size：<input type="text" name="size"></label><br>
                <label>type：<input type="text" name="type"></label><br>
                <label>status：<input type="text" name="status"></label><br>
                <label>pod：<input type="text" name="pod"></label><br>
                <label>discharging_port：<input type="text" name="discharging_port"></label><br>
                <label>loading_port：<input type="text" name="loading_port"></label><br>
                <label>por：<input type="text" name="por"></label><br>
                <label>tare_weight：<input type="text" name="tare_weight"></label><br>
                <label>imo_no：<input type="text" name="imo_no"></label><br>
                <label>mg_set_no：<input type="text" name="mg_set_no"></label><br>
                <label>ref_temperature：<input type="text" name="ref_temperature"></label><br>
                <label>shipper_consignee：<input type="text" name="shipper_consignee"></label><br>
                <label>yard_location：<input type="text" name="yard_location"></label><br>
                <label>condition：<input type="text" name="condition"></label><br>
                <label>destination：<input type="text" name="destination"></label><br>
                <label>return_place：<input type="text" name="return_place"></label><br>
                <label>remarks：<input type="text" name="remarks"></label><br>
             <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>

</html>
