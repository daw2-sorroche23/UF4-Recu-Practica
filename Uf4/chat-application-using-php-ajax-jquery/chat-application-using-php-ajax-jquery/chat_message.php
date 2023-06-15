<?php
class Chat_message {

        protected $chat_message_id;
        protected $to_user_id;
        protected $from_user_id;
        protected $chat_message;
        protected $timestamp;
        protected $status;

        protected function DefineTableName() {
                return("chat_message");
        }

        protected function DefineRelationMap() {
                return(array(
                        "chat_message_id" => "chat_message_id",
                        "to_user_id" => "to_user_id",
                        "from_user_id" => "from_user_id",
                        "chat_message" => "chat_message",
                        "timestamp" => "timestamp",
                        "status" => "status"
                ));
        }

        public function selectHistory($from_user_id, $to_user_id, $connect) {
            $query = "
            SELECT * FROM chat_message 
            WHERE (from_user_id = '".$from_user_id."' 
            AND to_user_id = '".$to_user_id."') 
            OR (from_user_id = '".$to_user_id."' 
            AND to_user_id = '".$from_user_id."') 
            ORDER BY timestamp DESC
            ";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();

            return $result;
        }

        public function selectMensaje($from_user_id, $to_user_id, $connect) {

            $query = "
            SELECT * FROM chat_message 
            WHERE from_user_id = '$from_user_id' 
            AND to_user_id = '$to_user_id' 
            AND status = '1'
            ";
            $statement = $connect->prepare($query);
            $statement->execute();
            $count = $statement->rowCount();

            return $count;
        }

        public function selectHistoryGroup($connect) {
            $query = "
            SELECT * FROM chat_message 
            WHERE to_user_id = '0'  
            ORDER BY timestamp DESC
            ";
        
            $statement = $connect->prepare($query);
        
            $statement->execute();
        
            $result = $statement->fetchAll();

            return $result;
        }




}

?>