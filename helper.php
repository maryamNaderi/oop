<?php
//connect to database
class help {
    public $host ;
    public $dbname ;
    public $usernaem ;
    public $password ;

    public function connection () {
        $this->host = 'localhost';
        $this->dbname = 'help';
        $this->username = 'root';
        $this->password = '';
        try {
            $connection = new PDO("mysql:host=localhost;dbname=".$this->dbname,$this->username,$this->password);
            return $connection;
        } catch(PDOException $e) {
            echo $e->getmessage();
        }
    }
}

//to insert data 

 class student extends help { 

    function stu() {
        $data = [
            'name' => 'safa',
            'email' => 'safa@gmail.com',
            'password' => '1234',
        ];

        try {
        $connection = $this->connection();

        $result = $connection->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
       
        $result->bindParam(':name', $data['name']);
        $result->bindParam(':email', $data['email']);
        $result->bindParam(':password', $data['password']);
        
        $result->execute();

        echo 'insert';
        } catch (PDOExecption $e) {
            exit ($e->getMessage());
        }
    }
}
$st = new student;
 $st->stu();

 //to select from database

class showrecords extends help {
    function sh() {
        try{
            $connection = $this->connection();
            $s=$connection->prepare('SELECT * FROM users');
            $s->execute();
            var_dump($s->fetchAll());

        }catch(PDOException $e){  
            echo $e->getmessage();
        }
     }  
    }
  $sr = new showrecords;
  $sr->sh();

//to update the records
class update extends help {
     
    function up() {
        $connection = $this->connection();  
        try{
        
            $upd = $connection->prepare("UPDATE users SET name=:name WHERE id=:id");
            $name ='safa';
            $id = '2';
            $upd->bindparam(':name',$name);
            $upd->bindparam(':id',$id);
            $upd->execute();
        }catch(PDOException $e){
            echo $e->getmessage();
        }  
    }
}
 $u = new update;
 $u->up();

 //to delete a records

class delete extends help{

    function de(){
        $connection = $this->connection();
        try{ 
        $delete= $connection->prepare("DELETE FROM users WHERE id=:id ");
        $id = '1';
        $delete->bindparam(':id',$id);
        $delete->execute();
        } catch(PDOException $e){
            echo $e->getmessage();
        }
    }
}
$d = new delete;
$d->de();

?>