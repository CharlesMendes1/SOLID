<?php 
class Frete implements Transporta{
	
	public function para($cidade) {
        if(strtoupper($cidade) == "SAO PAULO"){
            return 15;
        }
        return 30;
	}
}

 ?>