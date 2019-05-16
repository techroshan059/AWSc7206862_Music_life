<?php  
	class concert{

		private $id;
        private $name;
        private $Dest;
    
		public function __construct($id){
			$this->id= $id;
			echo "Constructor is running <br/>";
        }
        
        public function getID(){
			return $this->id;
        }

        public function getName(){
			return $this->name;
        }

		public function setName($name){
			$this->name= $name;
        }

		public function getDestination(){
			return $this->dest;
        }

        public function setDestination($dest){
			$this->dest= $dest;
        }
    
        public function run(){
           echo "success";
        }
        public function __destruct(){
			echo "<br/> Destroying " .$this->name;
		}


    }


?>