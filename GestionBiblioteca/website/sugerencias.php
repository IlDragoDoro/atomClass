<?php

$personas[] = "Draco";
$personas[] = "Natsu";
$personas[] = "Xiuhcóatl";
$personas[] = "Zu";
$personas[] = "Griffin";
$personas[] = "Hydra";
$personas[] = "Jawzahr";
$personas[] = "Jormunand";
$personas[] = "Wawel";
$personas[] = "Beowulf's";
$personas[] = "LaidlyWorm";
$personas[] = "Ryu";
$personas[] = "Sirrush";
$personas[] = "Smaug";
$personas[] = "Brightwing";
$personas[] = "Deathwing";
$personas[] = "Tarasque";
$personas[] = "Tiamat";
$personas[] = "Quetzcóatl";
$personas[] = "Leviatán";
$personas[] = "Níðhöggr";
$personas[] = "EL piasa";
$personas[] = "Amaru";
$personas[] = "Yinglong";
$personas[] = "Huanglong";
$personas[] = "Dilong";
$personas[] = "Fafnir";
$personas[] = "Herensuge";
$personas[] = "Haku";
$personas[] = "Tianlong";
$personas[] = "Balagos";
$personas[] = "Hydra";
$personas[] = "Colchian";
$personas[] = "Fucanglong";
$personas[] = "Ladón";
$personas[] = "Seiryū";
$personas[] = "Yamata-no-orochi";
$personas[] = "Shenlong";
$personas[] = "Anfíteres";
$personas[] = "Kreston";
$personas[] = "Klauth";
$personas[] = "Mushu";
$personas[] = "Charizard";
$personas[] = "Drake";
$personas[] = "Puff";
$personas[] = "Aaronarra";
$personas[] = "Abagizal";
$personas[] = "Katla";
$personas[] = "Norberta";
$personas[] = "Falkor";
$personas[] = "King-ghidorah";
$personas[] = "Bentley";
$personas[] = "Aldous";
$personas[] = "Percival";
$personas[] = "Sly-cooper";
$personas[] = "Murray";
$personas[] = "carmelita-fox";
$personas[] = "Dimitri";
$personas[] = "Dr.M";
$personas[] = "Don-octavio";
$personas[] = "Penélope";
$personas[] = "Barón-negro";
$personas[] = "Muggshot";
$personas[] = "Rey-panda";
$personas[] = "General-Tsao";
$personas[] = "Pete-Manchamala";

$req = $_REQUEST['q'];
$sugerencia = "";
if($req !== ""){
    $req = strtolower($req);
    $len = strlen($req);
    foreach($personas as $persona){
        if(stristr($req, substr($persona, 1, $len))){
            if($sugerencia === ""){
                $sugerencia = $persona;
            } else {
                $sugerencia .= ", $persona";
            }
        }
    }
}
if ($sugerencia === ""){
    echo "No hay sugerencias";
}else{
    echo $sugerencia;
}
