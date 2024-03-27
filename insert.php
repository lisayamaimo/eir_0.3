<?php
//1. POSTデータ取得
$shipping_line = $_POST['shipping_line'];
$place = $_POST['place'];
$date_time = $_POST['date_time'];
$carrier = $_POST['carrier'];
$vessel = $_POST['vessel'];
$voy = $_POST['voy'];
$bkg_bl_no = $_POST['bkg_bl_no'];
$container_no = $_POST['container_no'];
$seal_no = $_POST['seal_no'];
$size = $_POST['size'];
$type = $_POST['type'];
$status = $_POST['status'];
$pod = $_POST['pod'];
$discharging_port = $_POST['discharging_port'];
$loading_port = $_POST['loading_port'];
$por = $_POST['por'];
$tare_weight = $_POST['tare_weight'];
$imo_no = $_POST['imo_no'];
$mg_set_no = $_POST['mg_set_no'];
$ref_temperature = $_POST['ref_temperature'];
$shipper_consignee = $_POST['shipper_consignee'];
$yard_location = $_POST['yard_location'];
$conditions = $_POST['conditions'];
$destination = $_POST['destination'];
$return_place = $_POST['return_place'];
$remarks = $_POST['remarks'];


//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO gs_eir(shipping_line,place, date_time, carrier, vessel, voy, bkg_bl_no, container_no, seal_no, size, type,status,pod,discharging_port,loading_port,por,tare_weight,imo_no,mg_set_no,ref_temperature,shipper_consignee,yard_location,conditions,destination,return_place,remarks) VALUES(:shipping_line, :place, sysdate(), :carrier,:vessel, :voy, :bkg_bl_no, :container_no, :seal_no, :size, :type,:status,:pod,:discharging_port,:loading_port,:por,:tare_weight,:imo_no,:mg_set_no,:ref_temperature,:shipper_consignee,:yard_location,:conditions,:destination,:return_place,:remarks);');

$stmt->bindValue(':shipping_line', $shipping_line, PDO::PARAM_STR);
$stmt->bindValue(':place', $place, PDO::PARAM_STR);
// $stmt->bindValue(':date_time', $date_time, PDO::PARAM_STR); // Note: For datetime, consider formatting it as a string
$stmt->bindValue(':carrier', $carrier, PDO::PARAM_STR);
$stmt->bindValue(':vessel', $vessel, PDO::PARAM_STR);
$stmt->bindValue(':voy', $voy, PDO::PARAM_STR);
$stmt->bindValue(':bkg_bl_no', $bkg_bl_no, PDO::PARAM_STR);
$stmt->bindValue(':container_no', $container_no, PDO::PARAM_STR);
$stmt->bindValue(':seal_no', $seal_no, PDO::PARAM_STR);
$stmt->bindValue(':size', $size, PDO::PARAM_STR);
$stmt->bindValue(':type', $type, PDO::PARAM_STR);
$stmt->bindValue(':status', $status, PDO::PARAM_STR);
$stmt->bindValue(':pod', $pod, PDO::PARAM_STR);
$stmt->bindValue(':discharging_port', $discharging_port, PDO::PARAM_STR);
$stmt->bindValue(':loading_port', $loading_port, PDO::PARAM_STR);
$stmt->bindValue(':por', $por, PDO::PARAM_STR);
$stmt->bindValue(':tare_weight', $tare_weight, PDO::PARAM_STR);
$stmt->bindValue(':imo_no', $imo_no, PDO::PARAM_STR);
$stmt->bindValue(':mg_set_no', $mg_set_no, PDO::PARAM_STR);
$stmt->bindValue(':ref_temperature', $ref_temperature, PDO::PARAM_STR);
$stmt->bindValue(':shipper_consignee', $shipper_consignee, PDO::PARAM_STR);
$stmt->bindValue(':yard_location', $yard_location, PDO::PARAM_STR);

$stmt->bindValue(':conditions', $conditions, PDO::PARAM_STR);
$stmt->bindValue(':destination', $destination, PDO::PARAM_STR);
$stmt->bindValue(':return_place', $return_place, PDO::PARAM_STR);
$stmt->bindValue(':remarks', $remarks, PDO::PARAM_STR);

$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('index.php');
}
