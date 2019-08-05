<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        #simple {
            width: 450px;
            height: 300px;
            margin: 0 auto;
            padding:0 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        #simple h1 {
            color: navy;
        }


        #Caculator input {
            padding-left: 5px;
            width: 15em;
            float: left;
            margin-bottom: auto;
        }

        #Caculator label {
            padding-left: 7px;
            float: left;
            color: red;
            width: 10em;
        }

        #button input {
            padding-left: 20px;
            float: left;
        }

        #Caculator select {
            float: left;
        }
    </style>
</head>
<body>
<div id="simple">
    <h1>Simple Caculator</h1>
    <form method="post" action="index.php">
    <div id="Caculator">
        <label>First operand:</label>
        <input type="number" name="first" placeholder="input number"><br> <br>
        <label>Operator:</label>
        <select name="crystal">
            <option value="+">Summation</option>
            <option value="-">Subtraction</option>
            <option value="*">multiplication</option>
            <option value="/">division</option>
        </select><br> <br>
        <label>Second operand</label>
        <input type="number" name="second" placeholder="input number"><br><br
        >
    </div>
    <div id="button">
        <input type="submit" value="Caculate">
    </form>
    </div>
</div>
</body>
</html>

