<?php

    // cartypes
    $cartypes["SM"] = 0;
    $cartypes["MD"] = 0;
    $cartypes["LG"] = 0;
    $cartypes["VA"] = 0;
    $cartypes["SU"] = 0;
    $cartypes["PK"] = 0;
    
    // range
    $carrange["ECO"] = 0;
    $carrange["MR"] = 0;
    $carrange["LUX"] = 0;

    function getCarType(){
        calculateUsage();
        calculateEnvironment();
        calculateCareer();
        calculateFamily();
    }

    function calculateUsage(){
        global $formData;
        $data;
        switch($formData["usage"]){
            case "C":
                $data = '{"types": {"SM":2, "MD":1, "LG":0, "VA":0, "SU":-1, "PK":-2}, "ranges": {"ECO":1, "MR":0, "LUX":-1}}';
                break;
            case "W":
                $data = '{"types": {"SM":0, "MD":1, "LG":2, "VA":-1, "SU":1, "PK":-2}, "ranges": {"ECO":0, "MR":1, "LUX":1}}';
                break;
            case "T":
                calculateGoods();
                $data = '{"types": {"SM":-1, "MD":0, "LG":1, "VA":2, "SU":2, "PK":3}, "ranges": {"ECO":0, "MR":1, "LUX":0}}';
                break;
            case "S":
                $data = '{"types": {"SM":-2, "MD":-1, "LG":0, "VA":1, "SU":2, "PK":2}, "ranges": {"ECO":1, "MR":2, "LUX":1}}';
                break;
            default: 
                $data = '{"types": {"SM":0, "MD":0, "LG":0, "VA":0, "SU":0, "PK":0}, "ranges": {"ECO":0, "MR":0, "LUX":0}}';
        }
        appendData($data);
    }

    function calculateEnvironment(){
        global $formData;
        $data;
        switch($formData["environment"]){
            case "C":
                $data = '{"types": {"SM":2, "MD":1, "LG":0, "VA":0, "SU":1, "PK":0}, "ranges": {"ECO":1, "MR":0, "LUX":1}}';
                break;
            case "Y":
                $data = '{"types": {"SM":0, "MD":1, "LG":2, "VA":1, "SU":1, "PK":1}, "ranges": {"ECO":0, "MR":1, "LUX":1}}';
                break;
            case "W": 
                $data = '{"types": {"SM":0, "MD":0, "LG":0, "VA":1, "SU":2, "PK":2}, "ranges": {"ECO":0, "MR":1, "LUX":0}}';
                break;
            default: 
                $data = '{"types": {"SM":0, "MD":0, "LG":0, "VA":0, "SU":0, "PK":0}, "ranges": {"ECO":0, "MR":0, "LUX":0}}';
        }
        appendData($data);
    }

    function calculateCareer(){
        global $formData;
        $data;
        switch($formData["career"]){
            case "S":
                $data = '{"types": {"SM":2, "MD":1, "LG":0, "VA":-1, "SU":-1, "PK":-2}, "ranges": {"ECO":1, "MR":0, "LUX":-1}}';
                break;
            case "H":
                $data = '{"types": {"SM":2, "MD":1, "LG":1, "VA":1, "SU":0, "PK":-2}, "ranges": {"ECO":1, "MR":1, "LUX":-1}}';
                break;
            case "E":
                $data = '{"types": {"SM":1, "MD":2, "LG":1, "VA":1, "SU":1, "PK":0}, "ranges": {"ECO":1, "MR":1, "LUX":-1}}';
                break;
            case "P":
                $data = '{"types": {"SM":1, "MD":2, "LG":2, "VA":2, "SU":2, "PK":2}, "ranges": {"ECO":0, "MR":1, "LUX":2}}';
                break;
            case "R": 
                $data = '{"types": {"SM":1, "MD":1, "LG":2, "VA":1, "SU":1, "PK":0}, "ranges": {"ECO":1, "MR":2, "LUX":1}}';
                break;
            default: 
                $data = '{"types": {"SM":0, "MD":0, "LG":0, "VA":0, "SU":0, "PK":0}, "ranges": {"ECO":0, "MR":0, "LUX":0}}';

        }
        appendData($data);
    }

    function calculateFamily(){
        global $formData;
        $data;
        switch($formData["family"]){
            case "S":
                $data = '{"types": {"SM":2, "MD":2, "LG":1, "VA":-1, "SU":0, "PK":0}, "ranges": {"ECO":0, "MR":1, "LUX":2}}';
                break;
            case "C":
                $data = '{"types": {"SM":1, "MD":2, "LG":2, "VA":0, "SU":1, "PK":1}, "ranges": {"ECO":0, "MR":1, "LUX":2}}';
                break;
            case "F":
                $data = '{"types": {"SM":0, "MD":1, "LG":2, "VA":1, "SU":2, "PK":-1}, "ranges": {"ECO":1, "MR":2, "LUX":0}}';
                break;
            default: 
                $data = '{"types": {"SM":-1, "MD":1, "LG":1, "VA":2, "SU":2, "PK":-2}, "ranges": {"ECO":1, "MR":2, "LUX":0}}';
        }
        appendData($data);
    }

    function calculateGoods(){
        global $formData;
        $data;
        switch($formData["goods"]){
            case "P":
                $data = '{"types": {"SM":1, "MD":2, "LG":2, "VA":2, "SU":1, "PK":-2}, "ranges": {"ECO":1, "MR":1, "LUX":2}}';
                break;
            case "F":
                $data = '{"types": {"SM":2, "MD":2, "LG":1, "VA":0, "SU":0, "PK":-2}, "ranges": {"ECO":1, "MR":2, "LUX":0}}';
                break;
            case "S":
                $data = '{"types": {"SM":1, "MD":2, "LG":2, "VA":2, "SU":1, "PK":1}, "ranges": {"ECO":1, "MR":2, "LUX":0}}';
                break;
            case "M":
                $data = '{"types": {"SM":0, "MD":0, "LG":0, "VA":1, "SU":1, "PK":2}, "ranges": {"ECO":1, "MR":2, "LUX":0}}';
                break;
            case "V": 
                $data = '{"types": {"SM":-1, "MD":-1, "LG":0, "VA":0, "SU":1, "PK":2}, "ranges": {"ECO":1, "MR":2, "LUX":0}}';
                break;
            default: 
                $data = '{"types": {"SM":0, "MD":0, "LG":0, "VA":0, "SU":0, "PK":0}, "ranges": {"ECO":0, "MR":0, "LUX":0}}';

        }
        appendData($data);
    }
    
    function appendData($data){
        global $cartypes, $carrange;
        $dta = json_decode($data, TRUE);
        foreach($dta as $action => $valueaction){
            if($action==='types'){
                foreach($valueaction as $keyt => $valuet){
                    $cartypes[$keyt] = $cartypes[$keyt] + $valuet;
                }
            }
            if($action==='ranges'){
                foreach($valueaction as $keyr => $valuer){

                    $carrange[$keyr] = $carrange[$keyr] + $valuer;
                }
            }
        }
    }


?>