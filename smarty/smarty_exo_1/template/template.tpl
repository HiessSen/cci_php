<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Smarty - exo 1</title>
    <link rel="stylesheet" type="text/css" href="{$smarty.const.STYLESHEET_PATH}css/style.css">
</head>
<body>
<div id="container">
    {foreach $articles as $article}
        <div id="article">
            <p>{$article.id}</p>
            <p>{$article.titre}</p>
            <p>{$article.contenu}</p>
            <p>{$article.auteur} {$article.date}</p>
        </div>
        {foreach $commentaires as $commentaire}
                <div id="commentaire">
                {if $article.id eq $commentaire.article_id}
                    <p>{$commentaire.auteur}</p>
                    <p>{$commentaire.contenu}</p>
                {/if}
            </div>
        {/foreach}
    {/foreach}
</div>
</body>
</html>
