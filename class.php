<?php
/**
* 
*/
class Person 
{
	public $name;
	public $gender;
	private $warter = 1000;

	public function say(){
		echo "parent say";
		echo "my name is $this->name and my gender is $thsi->gender";
	}

	public function useSay(){
		$this->say();
	}

	public function __set($name,$value){
		$this->$name = $value;
	}

	public function __get($warter){
		if(!isset($warter)){
			$str = "未设置!";
		}else{
			return $this->warter;
		}
	}
}

class Student extends Person{
	public function say(){
		echo 'children say!';
	}

	public function useSay(){
		parent::useSay();  //还是会调用子类的say()方法
	}
}

$student = new Student();
$student->useSay(); 

//通过添加魔法函数__get , __set  可以在类的外面访问类的私有变量  或者通过在类中建立一个public的函数，对私有变量进行读写操作，然后在外部调用这个public函数。
$person = new Person();
echo $person->warter;

$person->name = "cyy";
$person->gender = "girl";
echo serialize($person);

var_dump($person);


class BaseClass {
   function __construct() {
       print "In BaseClass constructor\n";
   }
}

class SubClass extends BaseClass {
   function __construct() {
       parent::__construct();
       print "In SubClass constructor\n";
   }
}

$obj = new BaseClass();
$obj = new SubClass();



?>