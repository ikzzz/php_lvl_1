<?include_once 'inc/model.php';
//момент ниже мне не понятен, мочему-то переменная $connect не инклудилась и была тут пустой,
//пришлось объявить повторно тут, для того чтобы функция updateViews сработала
$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных!");?>

<a href="index.php"> Назад </a>
  <div>
    <?
    $id = $_GET['ID'];
    while($image = mysqli_fetch_assoc($pic)){
    echo "<img src=\"img/full/".$image['NAME']."\"><br>";
    	$views = $image['views'];
    	$views++;
	};
	$seen = updateViews($connect, $views, $id);
	echo "Количество просмотров:".$views;
 ?>
  </div>