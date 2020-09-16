<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->

	<article class="main-content col-xs-8">


		<?php

		/* 
			Step 1: Use the Make a class called Dog

			Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

			Step 4: Make a method named ShowAll that echos all the properties

			Step 5: Instantiate the class / create object and call it pitbull

			Step 6: Call the method ShowAll
		
		*/

		class Dog
		{
			public $eye_color;
			public $nose_color;
			public $fur_color;

			public function __construct($eye_color, $nose_color, $fur_color)  // can not be protected
			{
				$this->eye_color = $eye_color;
				$this->nose_color = $nose_color;
				$this->fur_color = $fur_color;
			}

			public function show_all()
			{
				$result =  "Eye color is " . $this->eye_color . ", ";
				$result .= "Nose color is " . $this->nose_color . ", ";
				$result .= "Fur color is " . $this->fur_color . "<br>";
				echo $result;
			}
		}


		$pitbull = new Dog("red", "green", "blue");
		$pitbull->show_all();

		?>





	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php" ?>