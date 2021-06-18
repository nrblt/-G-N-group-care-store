<?php


class DBConnection
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    
    public $con;


    // class constructor
    public function __construct(
        $dbname = "CarProject",

        $servername = "localhost",
        $username = "root",
        $password = "root"
    )
    {
        $this->dbname = $dbname;
//        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;


        $this->con = mysqli_connect($servername, $username, $password);


        if (!$this->con) {
            die("Connection failed : " . mysqli_connect_error());
        }

        $this->con = mysqli_connect($servername, $username, $password, $dbname);
    }

    public function getData($table)
    {

        $sql = "SELECT * FROM $table";

        $result = mysqli_query($this->con, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
//        else{
//            reutrn
//        }
    }

    public function addUser($username, $pass)
    {
        $big = 0;
        $small = 0;
        $number = 0;
        $other = 0;
        for ($i = 0; $i < strlen($pass); $i++) {
            $c = $pass[$i];
            if ($c >= '1' && $c <= '9') {
                $number = 1;
            }
            if ($c >= 'A' && $c <= 'Z') {
                $big = 1;
            }
            if ($c >= 'a' && $c <= 'z') {
                $small = 1;
            }

        }
        if (strlen($pass) < 8 || ($big + $small + $number != 3 && $big + $small + $number != $pass)) {
//            header('Location:registration.php');
            return "write again";
        }
        $sql = <<<SQL
        insert into users(username,pass) values(

            "$username", "$pass"
        )
        SQL;

        $this->con->query($sql);
        header('Location:index.php');


    }

    public function isUserIn($username, $pass)
    {
        $database = new DBConnection();
        $result = $database->getData("users");

        $fl = 1;
        if ($pass != "-1")
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['username'] == $username && $pass == $row['pass']) {
                    $fl = 0;
                    break;
                }
            }
        else {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['username'] == $username) {
                    $fl = 0;
                    break;
                }
            }
        }
        if (!$fl)
            return $username;
        return "false";
    }

    public function addCar($sel, $name, $model, $type, $volume, $fuel, $mile, $trans, $color, $location, $price, $image)
    {

        $sql = <<<SQL
        insert into car(car_seller,car_name,car_image,car_model,car_type,car_volume,car_fuel_type,car_mileage,car_transission,
                         car_color,car_location,car_price) values(
            "$sel","$name","$image","$model","$type","$volume","$fuel","$mile","$trans","$color","$location","$price"
        )
        SQL;
        $this->con->query($sql);


    }

    public function getById($id)
    {

        $sql = "SELECT * FROM car where car_id=$id";

        $result = mysqli_query($this->con, $sql);
        $ans = $result->fetch_all(MYSQLI_ASSOC);
        return $ans;

    }

    public function getByName($name)
    {

        $sql1 = "SELECT * FROM seller where seller_id=1";
//    echo $name;

        $result1 = mysqli_query($this->con, $sql1);
//        if($result)return true;
//        return false;
//        return $result;
//        return $result;
        $ans = $result1->fetch_all(MYSQLI_ASSOC);
        return $ans;

    }

    public function deleteById($id)
    {
        $sql = "delete  FROM car where car_id=$id";

        mysqli_query($this->con, $sql);
//
    }

    public function editById($id, $name, $model, $type, $volume, $fuel, $mile, $trans, $color, $location, $price, $image)
    {
        $sql = <<<SQL
    UPDATE car SET car_name="$name",car_image="$image", car_model="$model", car_type="$type",car_volume="$volume",car_fuel_type="$fuel",
    car_milleage ="$mile",car_transmission="$trans",car_color="$color",car_location="$location",car_price="$price"   WHERE id = "$id"
    SQL;
        mysqli_query($this->con, $sql);
    }

    public function findBystart($model)
    {
        $sql = "SELECT * FROM car WHERE car_name LIKE '$model%'";

        $result = mysqli_query($this->con, $sql);
        $ans = $result->fetch_all(MYSQLI_ASSOC);
        return $ans;
    }
    public function findByalot($city,$name)
    {
        $sql = "SELECT * FROM car WHERE car_location='$city' and car_name='$name'";

        $result = mysqli_query($this->con, $sql);
        $ans = $result->fetch_all(MYSQLI_ASSOC);
        return $ans;
    }
}