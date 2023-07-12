<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Task module 2</title>
	<style>
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
	</style>
</head>

<body>
	<?php

	interface Input
	{
		public function show();

		public function addStyles(array $params);
	}

	class InputEmail implements Input
	{
		private $_html = '<input type="email">';

		public function show()
		{
			echo '<h2>Input Email</h2><br>' . $this->_html;
		}

		public function addStyles(array $params)
		{
			$stylesStr = '';
			foreach ($params as $key => $value) {
				$stylesStr .= $key . ":" . $value . ";\n";
			}
			echo "<style> input[type='email']{ $stylesStr } </style>";
		}
	}
	class InputFile
	{
		private $_html = '<input type="file">';

		public function show()
		{
			echo '<h2>Input File</h2><br>' . $this->_html;
		}
		public function addStyles(array $params)
		{
			$stylesStr = '';
			foreach ($params as $key => $value) {
				$stylesStr .= $key . ":" . $value . ";\n";
			}
			echo "<style> input[type='file']{ $stylesStr } </style>";
		}
	}
	class InputText
	{
		private $_html = '<input type="text">';

		public function show()
		{
			echo '<h2>Input Text</h2><br>' . $this->_html;
		}
		public function addStyles(array $params)
		{
			$stylesStr = '';
			foreach ($params as $key => $value) {
				$stylesStr .= $key . ":" . $value . ";\n";
			}
			echo "<style> input[type='text']{ $stylesStr } </style>";
		}
	}

	$res = new InputText();
	$res->show();
	$res->addStyles([
		'color' => 'green',
	]);
	$res_2 = new InputFile();
	$res_2->show();
	$res_2->addStyles([
		'color' => 'red',
	]);
	$res_3 = new InputEmail();
	$res_3->addStyles([
		'color' => 'grey',
	]);
	$res_3->show();

	?>
</body>

</html>