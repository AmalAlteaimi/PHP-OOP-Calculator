<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content-type: "application/json">
    <title>Basic calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <section id="calculator">
        <div class="container">
            <div class="row">
            	<h2> Basic Calculator </h2>
                <div class="col-12">
					<form id="calc" accept-charset="utf-8">
						<label class="input_label" for="operator">Operator:</label>
						<select name="operator" id="operator">
							<option value="add"> + </option>
							<option value="subtract">-</option>
							<option value="multiply">*</option>
							<option value="divide">/</option>
							
						</select><br>
						<label class="input_label" for="left_operand">First Number:</label>
						<input type="text" name="a" id="left_operand" required><br>
						<label class="input_label" for="right_operand">Second Number:</label>
						<input type="text" name="b" id="right_operand" required><br>
						<button id="calculate" type="submit">Calculate</button>
					</form>                    
               </div>
            </div>
            <div class="row">
                <div class="col-12 result">
                   
                    <p><span class="label">Result:</span><span id="result">&nbsp;</span></p>
                </div>
            </div>
        </div>
    </section>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
	<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
