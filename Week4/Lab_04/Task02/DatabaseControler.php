<?php

class DataControl{

    private $Database;

    public function __construct (){
        $this->Database = json_decode(file_get_contents("./Database/sales.json"),true);
    }

    protected function fetchData(string $service){
        $Database = $this->Database[$service];
        $length = count($data);
        for($i = 0;$i < $length;$i++){
            $Database[$i]['method'] = $service;
        }
        return $Database;
    }
}

?>