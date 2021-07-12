<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src = "js/jquery-3.5.1.min.js"></script>
    <script src = "js/script.js"></script>
    <title>Abooking-Сайт для бронирования</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden;
        }

       header {
           width: 100vw;
           height: 100px;
           background-color: black;
           position: fixed;
           color: white;
       }

       #banner {
           height: 100vh;
           width: 100vw;
           background-image: url('https://vmeste.ru/upload/iblock/ec2/Kvartira_aparty_2.jpg');
           display: flex;
           justify-content: center;
           align-items: center;
           background-size: cover;
       }

       section h1 {
           font-size: 70px;
           font-weight: bold;
           color: rgb(255, 255, 255);
           border-bottom: none;
           text-align: center;
       }
.line{
border-bottom:2px solid #fff;
padding-bottom:15px;
}

       #calendar {
           height: 100vh;
           width: 100vw;
           display: flex;
           justify-content: center;
           align-items: center;
           
       }

       #calendar h1 {
        color: black;
       }
       
       tr>td>input{
       display: none;
       }

       footer {
           width: 100vw;
           height: 100px;
           background-color: black;
           color: white;
           padding: 10px;
       }
    </style>
   </head>
   <body>
    <header>
        <div class="logo"> <p><img src="img/logo1.png" width="146" height="76"></p></div>
    </header>

    <section id="banner">
        <h1 class="line"><b>Abooking</b></h1>
    </section>

    
    <section id="calendar">
        <div class="Calendar">
            <div class="calendar__month">
            <form action="mail.php" method="POST">
                <h2>Июль 2021</h2>
                <table class = "July">
                    <thead class = "Head-table">
                        <th>Пн</th>
                        <th>Вт</th>
                        <th>Ср</th>
                        <th>Чт</th>
                        <th>Пт</th>
                        <th>Сб</th>
                        <th>Вс</th>
                    </thead>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>01</td>
                        <td>02</td>
                        <td>03</td>
                        <td>04</td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>06</td>
                        <td>07</td>
                        <td>08</td>
                        <td>09</td>
                        <td>10</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td>31</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="modal">
            <div class = "modal-window">
                
                    <div class = "Form">
                    <div class = "cost-booking">
                    <span>Стоимость бронирования составляет (будни - 10 BYN,выходные - 30 BYN)
                    <input type="text" name = "cost" placeholder="Введите цену: ">
                    </span>
                </div>
                       <label for="select_time">Время заселения</label>
                       <input type="time" name="sel_time" list="time-list">
                       <datalist id="time-list">
                           <option value="10:00" label="Первый вариант">
                           <option value="12:00" label="Второй вариант">
                           <option value="14:00" label="Третий вариант">
                       </datalist>
                   <input type="text" name = "name" id = "" placeholder="Введите имя: ">
                   <input type="email" name = "email" id = ""  placeholder="Введите email: ">
                   <button type = "submit">Забронировать</button>
                </form>
            </div>
       </div> 
       </div>
    </section>

    <footer>
      <p>© Тарасевич Юлия </p>
      <p>Сайт разработан для бронирования апартаментов, с использованием оповещения об успешном бронировании на Ваш еmail.</p>
    </footer>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    


</body>
</html>