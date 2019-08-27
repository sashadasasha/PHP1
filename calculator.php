<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
</head>
<body>
  <form method="post" id="formElem" action="calculatorFunctions.php">
    <input type="text" name="operand1" value="" id="op1">
    <select name="oper[]"id="oper">
      <option>Умножить</option>
      <option>Разделить</option>
      <option>Вычесть</option>
      <option>Сложить</option>
    </select>
    <input type="text" name="operand2" value="" id="op2">
    <button class='action' id="math"> = </button>
    <input type="text" name="result" value="" id="res">
  </form>
  <script>
      formElem.onsubmit = async (e) => {
        e.preventDefault();
      let response = await fetch('calculatorFunctions.php', {
        method: 'POST',
        body: new FormData(formElem)
      });

      let result = await response.json();

      document.getElementById('res').value = result['result'];
  };
  </script>
</body>
</html>