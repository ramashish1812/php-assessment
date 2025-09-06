<!-- Create a simple MVC application that demonstrates the separation of concerns by
implementing a basic "User" module with a model, view, and controller. -->


<?php

class user{
    public $id,$name,$email;

    function __construct($id,$name,$email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}

class usermodel{
    private $users = [];

    function adduser(user $users){
         $this->users[$users->id] = $users;
    }

    function getuser($id){
        return $this->users[$id] ?? null;
    }

    function alluser(){
        return $this->users;
    }
}

class userview{
    function showuser($user){
        if($user){
            echo "user id: ".$user->id."<br>";
            echo "user name: ".$user->name."<br>";
            echo "user email: ".$user->email."<br>";
        }
        else{
            echo "user not found.<br><br>";
        }
    }

    function showalluser($users){
        echo "<h3>all users:</h3>";
        foreach($users as $user){
            $this->showuser($user);
            echo "<hr>";
        }
    }
}

class usercontroller{
    private $model,$view;

    function __construct($model,$view){
        $this->model = $model;
        $this->view = $view;
    }

    function createuser($id, $name, $email) {
        $user = new user($id, $name, $email);
        $this->model->adduser($user); 
    }

    function displayuser($id) {
        $user = $this->model->getuser($id);
        $this->view->showuser($user);
    }

    function displayalluser() {
        $users = $this->model->alluser();
        $this->view->showalluser($users);
    }
}

$model = new Usermodel();
$view = new Userview();
$controller = new UserController($model, $view);


$controller->createUser(1, "nitesh", "nitesh@gamil.com");
$controller->createUser(2, "bhavesh", "bhavesh@gamil.com");

$controller->displayUser(1);

$controller->displayalluser();

?>