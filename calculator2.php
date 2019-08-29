<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
</head>
<body>
  <form method="post" id="formElem" action="calculatorFunctions2.php">
    <input type="text" name="operand1" value="" id="op1">
    <button type="submit" name="operation" value="Умножить">*</button>
    <button type="submit" name="operation" value="Разделить">/</button>
    <button type="submit" name="operation" value="Вычесть">-</button>
    <button type="submit" name="operation" value="Сложить">+</button>
    <input type="text" name="operand2" value="" id="op2">
     =
    <input type="text" name="result" value="" id="res">
  </form>
  <script>
      document.getElementById('formElem').addEventListener('click', async (e) => {
        e.preventDefault();
        if (event.target.type === 'submit') {

        let operand1 = document.getElementById('op1').value;
        let operand2 = document.getElementById('op2').value;
        let operation = event.target.value;
      
        let data = {
        operand1,
        operand2,
        operation
      }
      
        let response = await fetch('calculatorFunctions2.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      });

      let result = await response.json();

      document.getElementById('res').value = result['result'];
    }
  });
  </script>
</body>
</html>