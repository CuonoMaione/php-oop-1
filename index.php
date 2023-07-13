
<?php
class Movie {
    public $title;
    public $kind;
    public $release;
    public $duration;
    public $direction;

    function __construct($_title, $_kind, $_release, $_duration , $_direction){
        $this->title = $_title;
        $this->kind = $_kind;
        $this->release = $_release;
        $this->duration = $_duration;
        $this->direction = $_direction;
    }

    public function getTitle() {
        return 
        $this->title;
    }
    public function getKind(){
        return    
        $this->kind;
    }
    public function getRealease(){
        return
        $this->release;
    }
    public function getDuration(){ 
        return  
        $this->duration;
    }
    public function getDirection(){
        return
        $this->direction;    
    }
    
}

$trecento = new Movie ('300','epic','2007','117 min','Zack Snyder');
$ilGladiatore = new Movie ('Il Gladiatore', 'epic' , '2000' , '155 min' , 'Ridley Scott');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Migliori film epici:</h1>
    <div>
        <h1>
            <?php echo $trecento->getTitle();?>
        </h1>
        <p> Kind: <?php echo $trecento->getKind()  ?></p>
        <p> Date release: <?php echo $trecento->getRealease()  ?></p>
        <p> Duration: <?php echo $trecento->getDuration()  ?></p>
        <p> Direction: <?php echo $trecento->getDirection()  ?></p>
        
    </div>

    <div>
        <h1>
            <?php echo $ilGladiatore->getTitle();?>
        </h1>
        <p> Kind: <?php echo $ilGladiatore->getKind()  ?></p>
        <p> Date release: <?php echo $ilGladiatore->getRealease()  ?></p>
        <p> Duration: <?php echo $ilGladiatore->getDuration()  ?></p>
        <p> Direction: <?php echo $ilGladiatore->getDirection()  ?></p>
        
    </div>
</body>
</html>