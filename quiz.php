<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Квиз</title>
  <style>
    body {
      font-family: "Gill Sans", sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f4f4f9;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      color: #007bff;
    }
    .question {
      margin-bottom: 20px;
    }
    .question h3 {
      margin-bottom: 10px;
    }
    .question input {
      margin-right: 10px;
    }
    .submit-btn {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .submit-btn:hover {
      background-color: #0056b3;
    }
    .result {
      text-align: center;
      margin-top: 20px;
      font-size: 20px;
      font-weight: bold;
      display: none;
    }
    .back-to-menu {
      text-align: center;
      margin-top: 20px;
    }
    .back-to-menu a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s;
    }
    .back-to-menu a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Тест из 5 вопросов</h1>
    <form id="quiz-form">
      <div class="question">
        <h3>1. сколько весит самая тяжелая жемчужина?</h3>
        <input type="radio" name="q1" value="0" required> 200гр<br>
        <input type="radio" name="q1" value="0">500гр<br>
        <input type="radio" name="q1" value="1"> 6кг<br>
        <input type="radio" name="q1" value="0"> 10кг
      </div>
      
      <div class="question">
        <h3>2. Какого роста самый высокий человек в мире?</h3>
        <input type="radio" name="q2" value="0" required> 267см<br>
        <input type="radio" name="q2" value="1"> 251см<br>
        <input type="radio" name="q2" value="0"> 290см<br>
        <input type="radio" name="q2" value="0"> 240см
      </div>
  
      <div class="question">
        <h3>3. сколько длился самый долгий полет курицы?</h3>
        <input type="radio" name="q3" value="1" required> 13с<br>
        <input type="radio" name="q3" value="0"> 10с<br>
        <input type="radio" name="q3" value="0"> 1мин<br>
        <input type="radio" name="q3" value="0"> 30с
      </div>
        
      <div class="question">
        <h3>4. Какая настоящая фамилия Ленина?</h3>
        <input type="radio" name="q4" value="0" required> Джугашвили<br>
        <input type="radio" name="q4" value="1"> Ульянов<br>
        <input type="radio" name="q4" value="0"> Петров<br>
        <input type="radio" name="q4" value="0"> Иванов
      </div>
        
      <div class="question">
        <h3>5. Как назывался первый фильм в истории?</h3>
        <input type="radio" name="q5" value="1" required> Прибытие поезда на вокзал Ла-Сиоты<br>
        <input type="radio" name="q5" value="0"> Титаник<br>
        <input type="radio" name="q5" value="0"> Бульварный роман<br>
        <input type="radio" name="q5" value="0"> Вплавь вдоль сены
      </div>
        
      <div class="question">
        <h3>6. Сколько лет было самому старому человеку?</h3>
        <input type="radio" name="q6" value="1" required> 122 года<br>
        <input type="radio" name="q6" value="0"> 132 года<br>
        <input type="radio" name="q6" value="0"> 124 года<br>
        <input type="radio" name="q6" value="0"> 141 год
      </div>

      <button type="button" class="submit-btn" onclick="checkQuiz()">Отправить</button>
    </form>
    
    <div class="result" id="result"></div>

    <!-- Кнопка возврата в меню -->
    <div class="back-to-menu">
      <a href="index.php">Вернуться в меню</a>
    </div>
  </div>

  <script>
    function checkQuiz() {
      const quizForm = document.getElementById('quiz-form');
      const formData = new FormData(quizForm);
      let score = 0;
      let totalQuestions = 6; // Задаем количество вопросов

      // Проверяем ответы
      for (let pair of formData.entries()) {
        score += parseInt(pair[1]); // Добавляем результат ответа
      }

      // Показываем результат
      const resultDiv = document.getElementById('result');
      resultDiv.style.display = 'block';
      resultDiv.textContent = `Ваш результат: ${score} из ${totalQuestions}`;

      // Прокрутка к результату
      resultDiv.scrollIntoView();
    }
  </script>
</body>
</html>