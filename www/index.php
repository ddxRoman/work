<?    
session_start();
// require_once "function/checkaut.php";
require_once "function/checkrole.php";
require_once "action/connect.php";
require_once "action/users/StyleAndSettings.php";
$button = mysqli_query($connect, "SELECT * FROM `button_user` WHERE `user_id`=$id_user "); // Подключение к определенной таблице, и получение Статуса записи
$button = mysqli_fetch_all($button); // Выбирает все строки из набора $product и помещает их в массив  $product

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image" href="file/icons/Logo/Logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/button.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ff0000"/>
    <link rel="manifest" href="JavaScript/manifest.json">
    <script>
        if('serviceWorker' in navigator) {
          navigator.serviceWorker.register('sw.js');
        };
      </script>
</head>

<body>
    <div class="all">
        <!-- Общий блок на всю страницу-->
        <div class="header">
            <!-- Общий Блок на шапку-->
            <div class="quick_transition">
                <!-- Блок С полями в левом верхнем углу-->
                <? require_once "folders/quick_transition.php"; ?>
                <!-- Подключение файла в котором поля с нашими заказами-->
            </div>
            <div class="knowledge">
                <!--  Просто кнопка на Хелпер -->
                <? if($_SESSION['user']['status'] == 9){?>
                    <a href="index_admin.php" target="_self">
                    <!--  Просто кнопка на Админка -->
                    <button class="MD">Админка</button>
                </a><!--  Просто кнопка на Админку-->
                <?} else{?>
                <a href="folders/knowledge.php" target="_blank">
                    <!--  Просто кнопка на Хелпер -->
                    <button class="MD">База знаний</button>
                </a><!--  Просто кнопка на Хелпер --> <?}?>
            </div><!--  Просто кнопка на Хелпер -->
            <div class="Right_head">
                <!-- Правый верхний блок с профилем-->
                <? require_once "action/profileindex.php"; ?>
                <!-- Просто подключение другого файла в этот блок-->
            </div><!-- Правый верхний блок с профилем-->
        </div> <!-- Конец хедера-->
        <div class="MisPanel">
            <!-- Тут начинает МИС панель.-->
            <? $mailLink=$_SESSION['user']['mail'];
            ?>
            <a href="action/users/settings.php" target="_blank"><button><img src="file/icons/settings.png" >Настройки</button></a>
            <a href="https://meet.google.com/" target="_blank"><button><img src="file/icons/yabridg.png">Meet</button></a>
            <a href="https://mail.google.com" target="_blank"><button>Почта</button></a>
            <a href="https://topvisor.com/project/keywords/7394510/#&volumeType=6&priceType=P11" target="_blank"><button><b>TOP</b><i>visor</i></button></a>
            <a href="https://docs.google.com/spreadsheets/d/1831n04opuq0QCen2fzRKy6H8lgLxIxD5sODwKxvh6s4/edit#gid=1808514170" target="_blank"><button>Шорт Аналики</button></a>
            <a href="https://jira.bizonoff-dev.net/projects/KINDPEOPLE/" target="_blank"><button>Наша Жира</button></a>
            <a href="folders/countsymbolForm.php" target="1"><button>Подсчёт</button></a>
           </div><!-- Тут заканчивается МИС панель-->
        <hr class="misPanel-hr" width="85%"><!-- ХРка полоска -->
       <div class="body">   <!-- Начало Тела сайта -->
            <div class="lmenu"> 
            <a href="folders/docs.php" target="1"><button>Доки</button></a><br>
                    <a href="folders/helper.php" target="1"><button>Хелпер</button></a><br>         
                    <a href="/folders/GooglFolders.php" target="1"><button>Папки</button></a><br>                   
                    <a href="folders/Backlog.php" target="1"><button>Старье</button></a><br>
                    <a href="folders/mis.php" target="1"><button>Миски</button></a><br>
                    <a href="folders/sites.php" target="1"><button class="site_btn">Сайты</button></a><br>
                    <a href="https://docs.google.com/spreadsheets/d/1mFn7zDyJ47eAOvhSJ-e8eDeBEnwHVbKv/edit#gid=1585440672" target="_blank"><button class="document">МояДока</button></a><br>
                    <a href="https://drive.google.com/drive/u/0/my-drive" target="_blank"><button class="document">ГуглДиск</button></a><br>
            <? foreach($button as $buttons){
                    ?><a href="<?=$buttons[3]?>" target="_blank"><button><?=$buttons[2]?></button></a>
<?
            }
            ?>

             </div>
            <div class="container frame">
                <iframe name="1" src="folders/news.php">
                    
                </iframe>
            </div>
            <?php if ($_SESSION['user']['status'] == 9) { ?><!-- Берем Роль пользователя и проверяем если она равно 9 (у нас это админ) то показываем Правое меню-->
                <div class="rmenu">
                    <iframe name="task" src="Taskmanager/Task.php">
                    </iframe>
                </div>
            <?  } else { 
            ?>
            <div class="rmenu">
                    <iframe name="task" src="Taskmanager/task_user.php">
                    </iframe>
                </div>
            <?
            }
            ?>
        </div>
        <hr class="footer-hr">
        <div class="footer">
                <div>
                    <?require_once 'function/weather.php';?>
                </div>
            <div class="refresh">
            <p class="ink"><img src="file/icons/Logo.png" alt="test"><br>
                 ORStudio <br> Оксентий Роман Сергеевич Студио <br> Copyright 2022-2023 </p>
            </div>
            <div id="clock" class="clock">         
            <script src="JavaScript/clock.js">
            </script> <!-- Подключение файла с часами-->
            </div><!-- ЧАСЫ-->
        </div>
    </div>
</body>

</html>
<script>
       $('.info__add').click(function () {
           name= prompt('Введите название кнопки: ', ['Новая кнопка']);
           url= prompt('URL ', ['']);
           if(name!="null" && url!=""){  
         $(this).parent().append($('<a>', { 
           'text': name, 'href': 'http://'+url, 'target': '_blank'}));
        }
        else{}
       }
       );
     </script>