<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Títulos</title>
    <link rel="stylesheet" type="text/css" href="css/create-title-form.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
</head>

<body>

    <div class="container">
        <h2 class="form-title">Dados Cadastrais</h2>

        <form action="./../src/Controllers/title/create.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="description">Descrição:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="duration">Duração:</label>
            <input type="time" id="duration" name="duration" required>

            <label for="release_date">Data de Lançamento:</label>
            <input type="date" id="release_date" name="release_date" required>

            <label for="poster">Pôster:</label>
            <input type="text" id="poster" name="poster" required>

            <label for="nationality">Nacionalidade:</label>
            <input type="text" id="nationality" name="nationality" required>

            <label for="is_erotic">É Erótico:</label>
            <input type="checkbox" id="is_erotic" name="is_erotic">

            <label for="genre">Gênero:</label>

            <input type="checkbox" id="genre_drama" name="genre[]" value="drama">
            <label for="genre_drama">Drama</label>

            <input type="checkbox" id="genre_comedia" name="genre[]" value="comédia">
            <label for="genre_comedia">Comédia</label>

            <input type="checkbox" id="genre_documentario" name="genre[]" value="documentário">
            <label for="genre_documentario">Documentário</label>

            <input type="checkbox" id="genre_policial" name="genre[]" value="policial">
            <label for="genre_policial">Policial</label>

            <input type="checkbox" id="genre_terror" name="genre[]" value="terror">
            <label for="genre_terror">Terror</label>

            <input type="checkbox" id="genre_ficcao" name="genre[]" value="ficção científica">
            <label for="genre_ficcao">Ficção Científica</label>

            <input type="checkbox" id="genre_romance" name="genre[]" value="romance">
            <label for="genre_romance">Romance</label>

            <input type="checkbox" id="genre_aventura" name="genre[]" value="aventura">
            <label for="genre_aventura">Aventura</label>

            <input type="submit" value="Enviar">
        </form>
    </div>

</body>

</html>