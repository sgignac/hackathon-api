<?php 

    // proposed cars
    $cars["ECO"] = "";
    $cars["MR"] = "";
    $cars["LUX"] = "";

    $pricerange["ECO"] = "";
    $pricerange["MR"] = "";
    $pricerange["LUX"] = "";

    function getCars(){
        global $cartypes, $carrange, $cars, $pricerange;
        $cartype = array_search(max($cartypes),$cartypes);
        $recomrange = array_search(max($carrange),$carrange);
        
        getInsurancePrice();

        switch($cartype){
            case "SM":
                $cars["ECO"]["description"]="Chevrolet Sonic";
                $cars["ECO"]["related"]="Ford Fiesta; Hyundai Accent; Kia Rio; Mazda 2";
                $cars["ECO"]["pricerange"]="11000;16000";
                $cars["ECO"]["insurancerange"]=$pricerange["ECO"];
                $cars["ECO"]["recommended"]= $recomrange=='ECO';
                $cars["ECO"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8357.jpg";
                $cars["MR"]["description"]="Toyota Yaris";
                $cars["MR"]["related"]="Fiat 500; Honda Fit; Nissan Micra";
                $cars["MR"]["pricerange"]="15000;20000";
                $cars["MR"]["insurancerange"]=$pricerange["MR"];
                $cars["MR"]["recommended"]= $recomrange=='MR';
                $cars["MR"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8131.jpg";
                $cars["LUX"]["description"]="Audi A3";
                $cars["LUX"]["related"]="Mini Cooper; Merdedes Benz A";
                $cars["LUX"]["pricerange"]="19000;29000";
                $cars["LUX"]["insurancerange"]=$pricerange["LUX"];
                $cars["LUX"]["recommended"]= $recomrange=='LUX';
                $cars["LUX"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8230.jpg";
                break;
            case "MD":
                $cars["ECO"]["description"]="Hyundai Elantra";
                $cars["ECO"]["related"]="Kia Forte; Chevrolet Cruz";
                $cars["ECO"]["pricerange"]="13000;17000";
                $cars["ECO"]["insurancerange"]=$pricerange["ECO"];
                $cars["ECO"]["recommended"]= $recomrange=='ECO';
                $cars["ECO"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8385.jpg";
                $cars["MR"]["description"]="Honda Civic";
                $cars["MR"]["related"]="Mazda 3; Nissan Sentra; Subaru Crosstrek; Toyota Matrix";
                $cars["MR"]["pricerange"]="16000;24000";
                $cars["MR"]["insurancerange"]=$pricerange["MR"];
                $cars["MR"]["recommended"]= $recomrange=='MR';
                $cars["MR"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8567.jpg";
                $cars["LUX"]["description"]="Audi A4";
                $cars["LUX"]["related"]="Volvo v40; BMW 318; Infiniti Q60; Mercedes Benz C300";
                $cars["LUX"]["pricerange"]="29000;40000";
                $cars["LUX"]["insurancerange"]=$pricerange["LUX"];
                $cars["LUX"]["recommended"]= $recomrange=='LUX';
                $cars["LUX"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8233.jpg";
                break;
             case "LG":
                $cars["ECO"]["description"]="Chevrolet Malibu";
                $cars["ECO"]["related"]="Hyundai Sonata;";
                $cars["ECO"]["pricerange"]="21000;29000";
                $cars["ECO"]["insurancerange"]=$pricerange["ECO"];
                $cars["ECO"]["recommended"]= $recomrange=='ECO';
                $cars["ECO"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8353.jpg";
                $cars["MR"]["description"]="Chrysler 300";
                $cars["MR"]["related"]="Mazda 6; Nissan Maxima";
                $cars["MR"]["pricerange"]="30000;50000";
                $cars["MR"]["insurancerange"]=$pricerange["MR"];
                $cars["MR"]["recommended"]= $recomrange=='MR';
                $cars["MR"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/7632.jpg";
                $cars["LUX"]["description"]="Audi A8";
                $cars["LUX"]["related"]="Volvo V70; Mercedes Benz S550; BMW 535";
                $cars["LUX"]["pricerange"]="50000;90000";
                $cars["LUX"]["insurancerange"]=$pricerange["LUX"];
                $cars["LUX"]["recommended"]= $recomrange=='LUX';
                $cars["LUX"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/7701.jpg";
                break;
             case "VA":
                $cars["ECO"]["description"]="Kia Sedona";
                $cars["ECO"]["related"]="Chevrolet Orlando; Scion xB";
                $cars["ECO"]["pricerange"]="25000;35000";
                $cars["ECO"]["insurancerange"]=$pricerange["ECO"];
                $cars["ECO"]["recommended"]= $recomrange=='ECO';
                $cars["ECO"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8596.jpg";
                $cars["MR"]["description"]="Dodge Grand Caravan";
                $cars["MR"]["related"]="Honda Odyssey; Nissan Quest";
                $cars["MR"]["pricerange"]="30000;40000";
                $cars["MR"]["insurancerange"]=$pricerange["MR"];
                $cars["MR"]["recommended"]= $recomrange=='MR';
                $cars["MR"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/7759.jpg";
                $cars["LUX"]["description"]="Toyota Sienna";
                $cars["LUX"]["related"]="Chrysler Town & Country; Volkswagen Multivan";
                $cars["LUX"]["pricerange"]="40000;60000";
                $cars["LUX"]["insurancerange"]=$pricerange["LUX"];
                $cars["LUX"]["recommended"]= $recomrange=='LUX';
                $cars["LUX"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8145.jpg";
                break;
             case "SU":
                $cars["ECO"]["description"]="Kia Sportage";
                $cars["ECO"]["related"]="Hyundai Tucson; Kia Rondo";
                $cars["ECO"]["pricerange"]="25000;35000";
                $cars["ECO"]["insurancerange"]=$pricerange["ECO"];
                $cars["ECO"]["recommended"]= $recomrange=='ECO';
                $cars["ECO"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8346.jpg";
                $cars["MR"]["description"]="Nissan Rogue";
                $cars["MR"]["related"]="Honda CRV; Toyota RAV4; Volkswagen Tiguan; Mazda CX5";
                $cars["MR"]["pricerange"]="35000;55000";
                $cars["MR"]["insurancerange"]=$pricerange["MR"];
                $cars["MR"]["recommended"]= $recomrange=='MR';
                $cars["MR"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/7923.jpg";
                $cars["LUX"]["description"]="BMW X3";
                $cars["LUX"]["related"]="Cadillac SRX; Cadillac Escalade; Mercedez Benz GLC";
                $cars["LUX"]["pricerange"]="55000;80000";
                $cars["LUX"]["insurancerange"]=$pricerange["LUX"];
                $cars["LUX"]["recommended"]= $recomrange=='LUX';
                $cars["LUX"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8220.jpg";
                break;
             case "PK":
                $cars["ECO"]["description"]="GMC Canyon";
                $cars["ECO"]["related"]="Chevrolet Colorado; Toyota Tacoma";
                $cars["ECO"]["pricerange"]="25000;35000";
                $cars["ECO"]["insurancerange"]=$pricerange["ECO"];
                $cars["ECO"]["recommended"]= $recomrange=='ECO';
                $cars["ECO"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/7484.jpg";
                $cars["MR"]["description"]="Chevrolet Silverado 1500";
                $cars["MR"]["related"]="Dodge Ram 1500; Ford F150; Nissan Titan";
                $cars["MR"]["pricerange"]="35000;45000";
                $cars["MR"]["insurancerange"]=$pricerange["MR"];
                $cars["MR"]["recommended"]= $recomrange=='MR';
                $cars["MR"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8355.jpg";
                $cars["LUX"]["description"]="Ford F150 Raptor";
                $cars["LUX"]["related"]="GMC Sierra 1500;Toyota Tundra; Dodge Ram 3500";
                $cars["LUX"]["pricerange"]="45000;60000";
                $cars["LUX"]["insurancerange"]=$pricerange["LUX"];
                $cars["LUX"]["recommended"]= $recomrange=='LUX';
                $cars["LUX"]["image"]="https://buyersguide.caranddriver.com/media/assets/submodel/8380.jpg";
                break;
        }


    }

     function getInsurancePrice(){

        global $cartypes, $formData, $pricerange;
        $cartype = array_search(max($cartypes),$cartypes);

        $baseprice["SM"]["FROM"] = 200;
        $baseprice["SM"]["TO"] = 300;
        $baseprice["MD"]["FROM"] = 250;
        $baseprice["MD"]["TO"] = 350;
        $baseprice["LG"]["FROM"] = 300;
        $baseprice["LG"]["TO"] = 400;
        $baseprice["VA"]["FROM"] = 350;
        $baseprice["VA"]["TO"] = 450;
        $baseprice["SU"]["FROM"] = 375;
        $baseprice["SU"]["TO"] = 525;
        $baseprice["PK"]["FROM"] = 300;
        $baseprice["PK"]["TO"] = 515;

        $modifier = 0;
        // usage
        $usage["C"] = 0.5;
        $usage["W"] = 0.1;
        $usage["T"] = 0.75;
        $usage["S"] = 0.25;
        $modifier = $modifier + $usage[$formData["usage"]];

        $baseprice[$cartype]["FROM"] = $baseprice[$cartype]["FROM"] + ( $baseprice[$cartype]["FROM"] * $modifier );
        $baseprice[$cartype]["TO"] = $baseprice[$cartype]["TO"] + ( $baseprice[$cartype]["TO"] * $modifier );

        $pricerange["ECO"] = $baseprice[$cartype]["FROM"] . ";" . $baseprice[$cartype]["TO"];
        $pricerange["MR"] = ($baseprice[$cartype]["FROM"] * 1.3) . ";" . ($baseprice[$cartype]["TO"] * 1.3);
        $pricerange["LUX"] = ($baseprice[$cartype]["FROM"] * 1.6) . ";" . ($baseprice[$cartype]["TO"] * 1.6);
        

    }

?>