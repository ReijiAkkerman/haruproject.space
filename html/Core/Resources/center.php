<?php
    $counter = 0;
    if($values === 2) {
        $connection = mysqli_connect("localhost", "$login", "$password", "$login");
        if($connection) {
            $mysql_command = "SELECT * FROM Diary";
            $result = mysqli_query($connection, $mysql_command);
            foreach($result as $row) {
                $counter++;
                if($counter) {
                    $values = 1;
                    break;
                }
            }
            if($values === 2)
                $values = 0;
        }
        else 
            include "errors/status2.php";
    }
?>

<?php 
    if(!$values) { 
?>

<section class="articles">
    <article class="content_block">
        <div class="subblock">
            <div class="content_bar">
                <h3>Возможности проекта.</h3>
                <p>Привет <?php echo $login; ?>. Это краткое введение инструментов этого сайта. На сайте есть все для продуктивного планирования своих дел и удобного взаимодействия с ними.<br><br>Основной и наиболее часто используемый инструмент - Органайзер. Органайзер - это инструмент экстренного планирования дел и отображения обьективной оценки твоей трудовой деятельности. При помощи штампов можно быстро организовать свой день по типовым задачам, а статистика поможет тебе в поиске проблем при работе над собой.<br><br>Развитие. Сюда можно размещать материалы необходимые для изучения - чтобы всегда и везде иметь возможность развиваться. Здесь ты можешь не только хранить собственные материалы, но также находить материалы других пользователей которые открыли доступ к своим ресурсам.<br><br>Для сохранения заметок, записи примечательных моментов своей жизни и т. д. используй дневник.<br><br>Более подробную информацию о возможностях сайта ты можешь получить ниже - во вкладке "О проекте".<br><br></p>
            </div>
        </div>
    </article>
    <article class="content_block">
        <div class="subblock">
            <div class="content_bar">
                <h3><button class="registration" id="central_button">Создать первую запись.</button></h3>
            </div>
        </div>
    </article>
</section>
<div class="toolbar">
    <div class="tool_item">
        <ul>
            <li title="Создать новую запись">
                <button action="">
                    <svg width="35" height="35" viewBox="0 0 24 24">
                        <path d="M12 3c.5 0 .9.4.9.9v7.2h7.2a.9.9 0 1 1 0 1.8h-7.2v7.2a.9.9 0 1 1-1.8 0v-7.2H3.9a.9.9 0 1 1 0-1.8h7.2V3.9c0-.5.4-.9.9-.9Z" fill="currentColor"></path>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
</div>

<?php }
    else { 
?>

<section class="articles">

<?php
    foreach($result as $row)
        $counter++;
    for((int)$i = 0; (int)$i < $counter; (int)$i++) {
        
    }
?>

</section>

<?php
    }
?>