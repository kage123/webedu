#类
1. 什么是面向对象
面向对象程序设计（objec-oriented programming OOP）是一种程序设计范式，同时也是程序开发方法。他将对象作为程序设计的基本单元，将程序和数据封装其中，以提高软件的重用性，灵活性和可扩展性。
2. 核心思想
 * 对象
 * 封装
 * 可重用性
 * 可扩展性
3. 面向对象的行与本
 * 类是对象的抽象组织，对象是类的具体存在
 * 类定义了属性与方法，并提供实际的操作细节，方法可以对属性进行加工
 * 对象是含有类属性的具体值，就是类的实例化
4. 类


|类             |对象            |
| ------------- |:-------------:|
|姓名           |小明             |
|年龄           |18               |
|性别           |男               |
|身高           |175              |
|体重           |75               |

 * 定义类
`
class classname{
}
`
 * 构造函数
类创建时自动调用的函数

`

	class classname{	
		public function __construct($param){
			echo "hello ".$param;
		}
	}
`

 * 析构函数
类销毁时自动调用的函数

`

	class classname{
		public function __destruct($param){
			echo "goodbye ".$param;
		}
	}
`

 * 类的实例化
用new来创建一个对象


`

	class classname{	
		 public function __construct($param){
			echo "hello ".$param;
		}
	}
	$a = new classname("first");
`

 * this指针

`

	class classname{	
		public $attribute;
		public function operation($param){
			$this -> attribute = $param;
			echo $this -> attribute;
		}
	
	}
	$a = new classname();
	$a -> attribute = "123";
	$a -> operation("123");
`

 * 关键字控制访问
 
public 公有 公有的属性或方法可以在类的内部和外部进行访问
private  私有 被标记的属性或方法只能在类的内部进行访问
protected 保护

 * 使用get set 方法

`

	class classname{	
		private $name;
		public function __set($name,$value){
			$this -> $name = $value;		
		}	
		public function __get($name){
			return $this -> name;		
		}
	
	}
	$a = new classname();
	$a->__set("name"，"xiaoming");
	$a->__get("name");

`
	
 * 继承
extends关键字

`
	
	class B extends A {
		public $attribute2;
		public function operation2(){
			echo "operation2";
		}
	}

	class A {
		public $attribute1;
		public function operation1(){
			echo "operation1";
		}
	}
	$b = new B();
	$b -> operation1();
	$b -> attribute1 = 10;
	$b -> operation2();
	$b -> attribute2 = 10;
`
类B派生于类A，可以操作operation1()和属性$attribute1，尽管这些操作和属性是在类A里面声明的。作为A的子类，B具有与A一样的功能和数据。此外,B还声明了自己的一个属性和一个操作。

 * 通过继承使用private和protected访问修饰符控制可见性

 * private 对外部可见，不能被继承
 * protected 对外部不可见，可以被继承

 * 重写

当一个子类继承一父类，而子类中的方法与父类中的方法的名称，参数个数、类型都完全一致时，就称子类中的这个方法重写了父类中的方法。

通常,派生类继承基类的方法,因此,在调用对象继承方法的时候,调用和执行的是基类的实现.但是,有时需要对派生类中的继承方法有不同的实现. 　　
`
	
	class B extends A {
		public function operation(){
			echo "operation2";
		}
	}

	class A {
		public function operation(){
			echo "operation1";
		}
	}
	$b = new B();
	$b -> operation();
	$a = new A();
	$a -> operation();
` 
 * final关键字

禁止继承与重写

 * 面向接口编程
 * 接口

"对于实现我的所有类，看起来都应该像我现在这个样子"

在程序里，接口的方法必须全部实现
 * interface关键字

`

	interface mobile{
		public function run();
	}
	
	class plain	implements mobile{
		public function run(){
			echo "我是飞机";
		}
	}
	

`

 * 面向对象设计的六大原则

1. 单一职责原则

	一个是避免相同的职责分散到不同的类中，另一个是避免一个类承担太多职责

2. 接口隔离原则

	客户端不应该依赖它不需要的接口；一个类对另一个类的依赖应该建立在最小的接口上

3. 开放-封闭原则
	
	一个软件实体如类、模块和函数应该对扩展开放，对修改关闭。

4. 替换原则

	子类型必须能够替换掉他们的父类型，并出现在父类能够出现的任何地方
5. 依赖倒置原则

	高层模块不应该依赖低层模块，二者都应该依赖其抽象；抽象不应该依赖细节；细节应该依赖抽象
6. 迪米特法则

	一个对象应该对其他对象保持最少的了解。