/*
Создаем массив нужного размера исходя из текущего номера страницы и количества элементов нужных нам в выходном массиве
$items = входящий массив
$arrayToCompilation - исходящий массив
*/

$pagenSize = 500;
$page = $_GET['page'] ? $_GET['page'] : 1;
$arrayToCompilation = [];
foreach ($items as $researchItemNubmer => $researchItem) {
    if ($page * $pagenSize < ($researchItemNubmer + 1)) { //Если номер элемента больше чем текущий шаг + значение пагинации, заканчиваем сбор массива
        break;
    } elseif (($page * $pagenSize) - $pagenSize > ($researchItemNubmer)) { // Если номер элемента меньше, чем текущий шаг*значение пагинации - значение пагинации
        continue;
     } else {
        $arrayToCompilation[] = $researchItem; // Записываем массив для будущей обработки
    }
}
