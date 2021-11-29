<?php 


class Constants {
    const STRING_VALUE = "Value1 changed to: ";
    const NAME_FROM = "Name from parent: ";

}

// PUBLIC

class ParentClassPublic {
    public $array = array(
        "value1" => "1"
    );

    public function __set( $key, $value ){
        $this->array[ $key ] = $value;
        print_r(Constants::STRING_VALUE.$this->array[ $key ]);
    }

    public function __get($name) {
        echo Constants::NAME_FROM.$name;
    }

}

class ChildClassPublic extends ParentClassPublic {

    function call_set_parent() {
        parent::__set("value1", "100");
    }

    function call_get_parent() {
        parent::__get("Public");
    }
}

// PROTECTED

class ParentClassProtected {
    protected $array = array(
        "value1" => "1"
    );

    protected function __set( $key, $value ){
        $this->array[ $key ] = $value;
        print_r(Constants::STRING_VALUE.$this->array[ $key ]);
    }

    protected function __get($name) {
        echo Constants::NAME_FROM.$name;
    }

}

class ChildClassProtected extends ParentClassProtected {
    function call_set_parent() {
        parent::__set("value1", "100");
    }

    function call_get_parent() {
        parent::__get("Protected");
    }
}

// PRIVATE

class ParentClassPrivate {
    private $array = array(
        "value1" => "1"
    );

    private function __set( $key, $value ){
        $this->array[ $key ] = $value;
        print_r(Constants::STRING_VALUE.$this->array[ $key ]);
    }

    private function __get($name) {
        echo Constants::NAME_FROM.$name;
    }

}

class ChildClassPrivate extends ParentClassPrivate {
    //! No lo puedo ver
    function call_set_parent() {
        // parent::__set("value1", "100");
    }

    function call_get_parent() {
        //! No lo puedo ver
        // parent::__get("Private");
    }
}

$instance_public_child = new ChildClassPublic();
$instance_protected_child = new ChildClassProtected();

echo "Accedemos al get y set de PUBLIC del padre";
echo"<br>";
print_r($instance_public_child->call_set_parent());
echo"<br>";
print_r($instance_public_child->call_get_parent());

echo"<br><br>";
echo "Accedemos al get PROTECTED del padre";
echo"<br>";
print_r($instance_protected_child->call_set_parent());
echo"<br>";
print_r($instance_protected_child->call_get_parent());

echo"<br><br>";
echo "Accedemos al get PRIVATE del padre";
echo"<br>";
echo"No se pueden ejecutar los métodos GET o SET al estar en private";
// print_r($instance_private_child->call_set_parent());
echo"<br>";
// print_r($instance_protected_child->call_get_parent());

?>