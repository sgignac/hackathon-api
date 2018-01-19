<?php

    include "getcartype.php";
    include "getcars.php";

    try{

        getCarType();
        getCars();

        $res["formData"] = $formData;
        //$res["quote"]["types"]=$cartypes;
        //$res["quote"]["ranges"]=$carrange;
        
        $res["quote"]["code"]= array_search(max($cartypes),$cartypes);
        $res["quote"]["cars"] = $cars;


        $result["success"]=true;
        $result["message"]="Request success";
        $result["results"]["count"]=count($res);
        $result["results"]["data"]=$res;
    }
    catch(PDOException $e){
        $result["success"]=false;
        $result["message"]="Query error / " . $e->getMessage();
        $result["results"]="";
    }
    
?>