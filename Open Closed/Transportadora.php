<?php 
class Transportadora implements Transporta{
	public function para($cidade) {
        if(strtoupper($cidade) == "SAO PAULO"){
            return 12;
        }
        return 22;
	}
}

 ?>