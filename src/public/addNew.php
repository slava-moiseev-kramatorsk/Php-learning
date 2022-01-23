<p>Добавьте новость</p>
<form name="feedback" method="post" action="PostNews.php">
    <label>Название новости <input type="text" name="nameOfNews"></label>
    <label>Краткое описание новости <input type="text" name="shortNews"></label>
    <label>Содержание новости <input type="text" name="bodyOfNews"></label>
    <label>Автор<input type="text" name="autor"></label>
    <label>Время созадния новости <input type="date" name="realDate"></label>
    <label>Черновик<input type="radio"  name="inp1" value=""></label>
    <label>Чистовик<input type="radio"  name="inp2" value=""></label>
    <label><input type="submit" name="pub" value="Опубликовать" </label>
</form>

<form name="feedback" method="post" action="PostNews.php" enctype="multipart/form-data">
    <label>Загрузить файл <input type="file" name="yourFile"></label>

</form>