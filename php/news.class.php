<?php

class News {

    public $IdNews;
    public $Data;
    public $Titolo;
    public $Testo;
    public $Foto;
    public $DataIns;

    public function printNews() {
        return 0;
    }

    public function toArray() {
        $array = [
            "IdNews" => $this->IdNews,
            "Data" => $this->Data,
            "Titolo" => $this->Titolo,
            "Testo" => $this->Testo,
            "Foto" => $this->Foto,
            "DataIns" => $this->DataIns,
        ];

        return $array;
    }

    public function toString($glue = ",") {
        $array = $this->toArray();
        $string = implode($glue, $array);

        return $string;
    }

}

?>