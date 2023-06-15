<?php
        require("class.pdofactory.php");
        require("abstract.databoundobject.php");
        require("user.php");

        print "Running...\n";

        $strDSN = "pgsql:dbname=zeusDb;host=localhost;port=5432;user=postgres;password=Zpoke2001!";
        
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "Zpoke2001!",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $objUser = new tierra($objPDO);

        $html = '{"date":"2014-02-04T03:30:01.210000","id":"LANDSAT/LC08/C01/T1_SR/LC08_127059_20140204",
        "dataset":"LANDSAT/LC08/C01/T1_SR","planet":"earth","service_version":"v5000",
        "url":"https://earthengine.googleapis.com/v1alpha/projects/earthengine-legacy/thumbnails/645e548eec897fc558c8c39d8652b547-5d7ca10cfe0236aaa0e44e7ed23adb79:getPixels"}
        ';


        //$html = file_get_contents("https://api.nasa.gov/planetary/earth/assets?lon=-95.33&lat=29.78&date=2018-01-01&&dim=0.10&api_key=DEMO_KEY");

        $json = json_decode($html, true);

        print_r($json);

        //echo $json["dataset"];

        //$objUser->setID(1);
        $objUser->setDate($json["date"])->setidJson($json["id"])->setDataset($json["dataset"])->setPlanet($json["planet"])->setServiceVersion($json["service_version"])->Save();

        print "Date is " . $objUser->getDate() . "\n";
        print "idJson is " . $objUser->getidJson() . "\n";
        print "Dataset is " . $objUser->getDataset() . "\n";
        print "Planet is " . $objUser->getPlanet() . "\n";
        print "ServiceVersion is " . $objUser->getServiceVersion() . "\n";

        // $id = $objUser->getID();
        // print "ID in database is " . $id . "\n";

        // print "Destroying object...\n";

        // $objUser->MarkForDeletion();

        // unset($objUser);

        // print "Recreating object from ID $id\n";

?>
