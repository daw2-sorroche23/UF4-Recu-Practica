<?php

class tierra extends DataBoundObject {

        protected $ID;
        protected $idJson;
        protected $Date;
        protected $Dataset;
        protected $Planet;
        protected $ServiceVersion;

        protected function DefineTableName() {
                return("tierra");
        }

        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "idJson" => "idJson",
                        "date" => "Date",
                        "dataSet" => "Dataset",
                        "planet" => "Planet",
                        "serviceversion" => "ServiceVersion",
                ));
        }

}

?>
