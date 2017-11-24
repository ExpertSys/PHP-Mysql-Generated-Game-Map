<?php error_reporting(0);
    class Map extends Database{

      public $x;
      public $y;

      public function __construct($x,$y){
            $this->x = $x;
            $this->y = $y;
            $this->Connect();
      }

      public function createMap(){
          for($x=0; $x < 5; $x++){
              for($y=0; $y < 5; $y++){
                  echo "<div id='map'>";
                  echo "<div class='map_columns' title='{$x}_{$y}' data-x='{$x}' data-y='{$y}' id='{$x}_{$y}'>";
                  $this->spawnPlayers($x,$y);
                  echo "</div>";
              }
              echo "<div class=\"break\"></div>";
          }
      }

      public function spawnPlayers($x,$y){
          $stmt = $this->sql->prepare('SELECT * FROM user WHERE x = "'.$x.'" AND y = "'.$y.'"');
          $stmt->execute();
          while($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo "<img title='{$rows['name']} \n {$rows['x']}|{$rows['y']}'>";
          }
      }

      public function battle(){
          $stmt = $this->sql->prepare("SELECT * FROM user GROUP BY x,y HAVING count(*) > 1");
          $stmt->execute();
          $rows = $stmt->fetch(PDO::FETCH_ASSOC);
          if($rows){
              echo "<input type='submit' id='battle-btn' value='Fight'>";
          } else{
          }
       }

       public function move(){
         if(isset($this->x) && isset($this->y)){
            $stmt = $this->sql->prepare("UPDATE user SET x = '$this->x', y = '$this->y' WHERE name = 'Wiz'");
            $stmt->execute();
         }
       }
    }
?>
