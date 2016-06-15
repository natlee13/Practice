<?php 

class Form {
    public $sHTML;

    public function __construct(){
        $this->sHTML = '';
    }

    public function open(){
        $this->sHTML .= '<form action = "" method = "POST" class="form-horizontal">';
    }

    public function close(){
        $this->sHTML .= '</form>';
    }

    public function makeTextInput($sLabel, $sInputName){
        $this->sHTML .= '<div class="form-group">
                            <label for="'.$sInputName.'" class="col-sm-2 control-label">'.$sLabel.'</label>
                            <div class="col-xs-4">
                                <input type="text" class="form-control" name = "'.$sInputName.'" id="'.$sInputName.'">
                            </div>
                        </div>';
    }

    public function makeSubmit($sLabel, $sInputName){
        $this->sHTML .= '<div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-primary" name="'.$sInputName.'" value="'.$sLabel.'">
                            </div>
                        </div>';
    }

    
}


?>