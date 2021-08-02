    <?php

    class DModel {
        protected $db = [];
        public function __construct()
        {
            $connect = 'mysql:dbname=webshop; host=localhost; charset=utf8';
            $username = 'root';
            $password = '';
            $this->db = new Database($connect,$username,$password);
        }

    }