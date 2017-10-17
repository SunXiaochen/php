<?php 

	# 创建一个类
	class Person{
		private $name;
		public $email;

		private static $age =40;

		public static function getAge(){
			return Person::$age;
		}
		public function setName($sbqname){
			$this->name = $sbqname;
		}

		public function getName(){
			return $this->name;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getEmail(){
			return $this->email;
		}

		#构造函数
		public function __construct($name="henry",$email="henry@qq.com"){
			$this->name = $name;
			$this->email = $email;
			// echo "Person 对象已被创建!";
			echo __CLASS__."对象已被创建!";
		}
		# 析构函数
		public function __destruct(){
			echo __CLASS__."对象已被销毁!";
		}
	}

	// $person1 = new Person;
	// $person1->name = "laji";
	// echo $person1->name;
	// $person1->setName("小忱");
	// echo $person1->getName();
	// $person1->setEmail("228348258@qq.com");
	// echo $person1->getEmail();
	// $person1 = new Person('miaojie','mj@gmail.com');
	// echo $person1->getName();

	# 继承
	class Customers extends Person{
		private $salary;
		public function setSalary($salary){
			$this->salary = $salary;
		}

		public function getSalary(){
			return $this->salary;
		}

		public function setName($name){
			$this->name = $name;
		}
		public function __construct($name,$email,$salary){
			parent::__construct($name,$email);
			$this->salary = $salary;
		}

	}
	$customer = new Customers("bucky","bucky@gmail.com",3000);
	$customer->setName("henry");
	// $customer->getName();
	echo $customer->name;

	// $customer->setSalary(3000);
	// echo $customer->getName();
	// echo $customer->getEmail();
	// echo $customer->getSalary();

	//调用静态变量
	//echo Person::$age;
	//echo Person::getAge();
 ?>














