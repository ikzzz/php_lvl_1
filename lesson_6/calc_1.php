
<!DOCTYPE HTML>
<html lang="ru">
<head>
     <meta charset = "UTF-8">
</head>
<body>
     <h1>Калькулятор - 1</h1>
<form action="" method="get" enctype="multipart/form-data">
    <input type="text" name="x" value="<?=$_GET['x']?>">
     <select name="operator">
     	<?
     	echo ($_GET['operator'] == "+") ? "<option value=\"+\" selected>+</option>" : "<option value=\"+\">+</option>";
     	echo ($_GET['operator'] == "-") ? "<option value=\"-\" selected>-</option>" : "<option value=\"-\">-</option>";
     	echo ($_GET['operator'] == "*") ? "<option value=\"*\" selected>*</option>" : "<option value=\"*\">*</option>";
     	echo ($_GET['operator'] == "/") ? "<option value=\"/\" selected>/</option>" : "<option value=\"/\">/</option>";
     	?>
     </select>
     <input type="text" name="y" value="<?=$_GET['y']?>">
     <input type="submit" value="="><?=$res?>

<?
$x = $_GET['x'];
$y = $_GET['y'] ;
switch ($_GET['operator']) {
    case '+':
        $res = $x + $y;
        break;
    case '-':
        $res = $x - $y;
        break;
    case '*':
        $res = $x * $y;
         break;
    case '/':
     if ($x == 0 || $y == 0){
          $res="операция не возможна";}
          else
            $res = $x/$y;
        break;
    default:
        return 'Операция не поддерживается';
     }

?>
<?=$res?>
</form>