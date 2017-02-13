                  <form enctype="multipart/form-data" action="../upload.php" method="POST" class="form">
                    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <!-- Название элемента input определяет имя в массиве $_FILES -->
                    <h3>Choose csv file:</h3>
                    <input name="userfile" type="file" class="file-form" />
                    <button type="submit" class="btn btn-default">Upload</button>
                </form>
            
    <!--
    <h2>Main</h2>
    <form action ="search.php" method="POST">
        <input type="text" name="commodity" placeholder="123"/>
        <input type="submit" placeholder="345"/>
    </form>
    <h3>загрузка файла</h3>
    -->

