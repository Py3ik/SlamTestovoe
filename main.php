<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css"></link>
    <link rel="stylesheet" href="/css/style.css"></link>
    <link rel="stylesheet" href="/js/bootstrap.bundle.min.js"></link>
    <title>Testovoe slam</title>
</head>
<body>
    <div class="container col-6">
        <div class="row">
            <header class="sds">
                <div class="col-md-auto">
                    <img src="/img/logo.png" class=" navbar-brand mx-auto d-block logo" alt="">
                </div>
            </header>
            <hr>
                    <div class="col-2 col-md-2 sitebar sds">
                        <ol>
                            <li>
                                <a href="/index.php">Главная</a> 
                            </li>
                            <li>
                                <a href="/main.php">Задание 1</a> 
                            </li>
                        </ol>
                    </div>
                    
                    <div class="col md-3 border-bottom box-shadow">
                        <h1>Задание 1</h1>
                        <form class="forma_poluchit rounded border border-3 border-dark mb-2" action="" method="POST">
                                <input class="first-input" type="number" placeholder="Первое число" name="first">
                                <input type="number" placeholder="Второе число" name="last">
                                <button type="submit" class="btn btn-dark text-center poluchit">Получить</button>
                        </form>
                        <?php
                                
                                $first = $_POST['first'];
                                $last = $_POST['last'];
                                $arr = array();
                                if ($first == 0 or $last == 0){
                                     echo 'Введите числа в поля';
                                }
                                else if ($first > 10 or $last > 10 and $first < 0 or $last < 0){
                                    echo 'Введите числа от 1 до 10';
                                }
                                else
                                {
                                $array = [];                              
                                    for ( $i = 0; $i < $first; $i++ ) {
                                        for ($j = 0; $j < $last; $j++) {
                                            $array[$i][$j] = rand( 0, 99 );        
                                        }
                                    }
                                    echo '<h2>Результат:</h2>';                
                                    echo "<table>";
                                    echo "<tbody>";
                                    foreach ($array as $result){
                                            echo "<tr>";
                                            foreach ($result as $rValue){
                                                    echo "<td>{$rValue}</td>";
                                            }
                                            echo "</tr>";
                                    }
                                    echo "</tbody>";
                                    echo "</table>";                               
                                }
                        ?>
                    </div> 
            <div class="col-md-auto fixed-bottom">
                <footer class="fixed-bottom footer">
                    <div class="fot container col-6 text-center sds cveta">
                        <h5>Copiright by Nikita Kashko</h5>
                    </div>
                </footer>
            </div>
    </div>
</body>