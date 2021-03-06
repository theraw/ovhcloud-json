<?php
header('Content-Type: application/json');
$json_array = array(
    "IMAGE" => array(
      "GRA3-DEBIAN9" => array(
            "visibility" => "public",
            "flavorType" => "null",
            "status" => "active",
            "region" => "GRA3",
            "name" => "Debian 9",
            "minDisk" => "0",
            "size" => "1.46484375",
            "creationDate" => "2017-10-09",
            "minRam" => "0",
            "user" => "debian",
            "id" => "370cd41a-efbc-43a6-a8e8-038ddc70079b",
            "type" => "linux",
            "username" => "debian",
            "extraCost" => "0"
        ),
      "GRA3-CENTOS7" => array(
            "visibility" => "public",
            "flavorType" => "null",
            "status" => "active",
            "region" => "GRA3",
            "name" => "Centos 7",
            "minDisk" => "0",
            "size" => "4.8828125",
            "creationDate" => "2017-08-10",
            "minRam" => "0",
            "user" => "centos",
            "id" => "0945c37b-482e-4945-b0c5-13630341b015",
            "type" => "linux",
            "username" => "linux",
            "extraCost" => "0"
        ),
      "GRA3-UBUNTU14" => array(
            "visibility" => "public",
            "flavorType" => "null",
            "status" => "active",
            "region" => "GRA3",
            "name" => "Ubuntu 14.04",
            "minDisk" => "0",
            "size" => "2.19921875",
            "creationDate" => "2017-08-10",
            "minRam" => "0",
            "user" => "ubuntu",
            "id" => "d1517a07-bc48-4523-b80c-b22f4e506c9e",
            "type" => "linux",
            "username" => "ubuntu",
            "extraCost" => "0"
        ),
      "SBG3-DEBIAN9" => array(
            "visibility" => "public",
            "flavorType" => "null",
            "status" => "active",
            "region" => "SBG3",
            "name" => "Debian 9",
            "minDisk" => "0",
            "size" => "1.46484375",
            "creationDate" => "2017-10-09",
            "minRam" => "0",
            "user" => "debian",
            "id" => "ec3f2599-675d-4278-8ff0-a4fb7bac36b0",
            "type" => "linux",
            "username" => "debian",
            "extraCost" => "0"
        ),
      "SBG3-CENTOS7" => array(
            "visibility" => "public",
            "flavorType" => "null",
            "status" => "active",
            "region" => "SBG3",
            "name" => "Centos 7",
            "minDisk" => "0",
            "size" => "4.8828125",
            "creationDate" => "2017-08-10",
            "minRam" => "0",
            "user" => "centos",
            "id" => "89cb8cfb-e5a0-4e1c-ab3c-1e4181a0ce0f",
            "type" => "linux",
            "username" => "centos",
            "extraCost" => "0"
        ),
      "SBG3-UBUNTU14" => array(
            "visibility" => "public",
            "flavorType" => "null",
            "status" => "active",
            "region" => "SBG3",
            "name" => "Ubuntu 14.04",
            "minDisk" => "0",
            "size" => "2.19921875",
            "creationDate" => "2017-08-10",
            "minRam" => "0",
            "user" => "ubuntu",
            "id" => "880b586d-45af-4f5b-ad68-11d0ef4fa7b4",
            "type" => "linux",
            "username" => "ubuntu",
            "extraCost" => "0"
        ),
    )
);
$json_obj = json_encode($json_array);
echo $json_obj;
?>
