<?php
$articles = [
    [
        'id' => 1,
        'titre' => 'Les secrets de la 1ère guerre mondiale',
        'contenu' =>'Peu de gens savent que le chef de guerre germano - autrichien, celebre pour se petitesse de taille avait un nom secret. En effet, Adolph Hitler se faisait souvent appeler HUGO HILAIRE lors de ses vacances en France. En effet, la seule chose qui lui importait était le double H',
        'auteur' => 'Hugo HILAIRE',
        'date' => '1945/05/08'
    ],
    [
        'id' => 2,
        'titre' => 'Une histoire de Stéphane',
        'contenu' => 'Un jour, J\'étais avec ma chérie, on mangeait des fraises. Et tu sais, j\'adore les fraises. Ma chérie aussi. A l\'époque j\'avais des cheveux, hein faut le savoir. On travaillait à Bouygues Télécom tous les deux. Moi j\'était télé-opérateur, elle, elle était conseillère auprès des clients. Attends... Je ne sais plus où je voulais en venir... J\'en étais où déjà ?',
        'auteur' => 'Stéphane CARPENTIER',
        'date' => '1792/06/11'
    ],
    [
        'id' => 3,
        'titre' => 'Le frand, le magnifique, le majestueux',
        'contenu' => 'Alors pauvre mec ? Regarde ce boloss là il lis mon article comme un sale dz de mort. Ahahaha ! Avec sa poubelle de merdde !! THP = Toujours En Panne. Sale boloss. Casse toi avec ta C4 de merde la mdrrrrr pauvre type va. Allez j\'me casse je vais écouter Christophe Hondelatte parce que j\'ai 150 ans. UwU',
        'auteur' => 'Imran COSANZO',
        'date' => '622/07/16'
    ],
    [
        'id' => 4,
        'titre' => 'Parfois ma sombritude se retourne contre moi. Mais la plupart du temps...',
        'contenu' => 'Parfois, juste parfois, pas tout le temps, hein, juste parfois, j\'ai un peu envie de fendre le crane de mon voisin de droite. Et c\'est d\'autant plus inquiétant que je ne suis pas du tout raciste. Je n\'ai rien contre les arabes, c\'est juste mon coté smobre lol. Même, j\'aime bien Imran. Pourtant parfois je l\éventrerai bien. J\'aime penser à la mort de cet individu',
        'auteur' => 'Tanguy SIRI',
        'date' => '2011/10/04'
    ],
    [
        'id' => 5,
        'titre' => 'Besoin d\'argent, besoin de cul et besoin d\'une gova',
        'contenu' => 'La St Valentin c\'est dans une dizaine de ours, même pas !. Je vais devoir commander un tas de merdes, allez au reqtaurant, et tout, et tout. Ça me casse les couilles !! Moi ce que je veux \'est garder mon oseille pour m\'acheter une voitiure ! J\'ai bu une Renault Mégane 3 qui me plait beaucoup !!!',
        'auteur' => 'Ilan SENOUCI',
        'date' => '1992/11/26'
    ]
];
$commentaires = [
    [
        'id' => 1,
        'article_id' => 1,
        'auteur' => 'Stéphane CARPENTIER',
        'contenu' => 'Très interessant Hugo. Merci pour cette leçon d\'histoire. Vivement ton prochain coup d\'éclat.',
        'date' => '2025/02/06'
    ],
    [
        'id' => 2,
        'article_id' => 1,
        'auteur' => 'Thierry BRU',
        'contenu' => 'Fascinant. Merci mon Fuhrer',
        'date' => '2025/02/14'
    ],
    [
        'id' => 3,
        'article_id' => 4,
        'auteur' => 'Hugo HILAIRE',
        'contenu' => 'Es ist zeit für reich !! Wir mussen die Juden ausratten ! Nain, nein, nein, nein nein !!!!!!',
        'date' => 'erer'
    ],
    [
        'id' => 4,
        'article_id' => 1,
        'auteur' => 'Imran COSTANZO',
        'contenu' => 'Autant je ne suis pas fan de ton délire "double h", autant, c\'est vrai qu\'un bon juif est un juif mort. Y\a qu\a voir leurs nez pour s\'en persuader',
        'date' => '2023/04/11'
    ],
    [
        'id' => 5,
        'article_id' => 2,
        'auteur' => 'Pao Jimmy VANG',
        'contenu' => 'Merci de cette histoire Stéphane. N\'hésite pas à me contacter en cas de besoin. C\'est toujours un délice de t\'écouter.',
        'date' => 'erer'
    ],
    [
        'id' => 6,
        'article_id' => 3,
        'auteur' => 'Ilan SENOUCI',
        'contenu' => 'Alors déjà je te pisse dessus. Ensuite, ma C4 elle te pisse dessus. Merci de me ramener par contre. C\'est très gentil. J\'apprecie.',
        'date' => '2025/01/21'
    ],
    [
        'id' => 7,
        'article_id' => 3,
        'auteur' => 'Hugo HILAIRE',
        'contenu' => 'Mais c\'est un ouf lui. Pourquoi il insulte les gens ? Bon oublions ça, tu viens me regarder faire caca stp ?',
        'date' => '2025/01/11'
    ],
    [
        'id' => 8,
        'article_id' => 4,
        'auteur' => 'Imran COSTANZO',
        'contenu' => 'J\'accepte, j\'accepte',
        'date' => '2024/08/14'
    ],
    [
        'id' => 9,
        'article_id' => 4,
        'auteur' => 'Stéphane CARPENTIER',
        'contenu' => 'Mais Tanguy, qu\'est ce qu\'il y a ? Tu veux du réconfort ? Sache que tu peux toucher mon crane chauve à tout instant. Il parait que ça fait du bien.',
        'date' => 'erer'
    ],
    [
        'id' => 10,
        'article_id' => 5,
        'auteur' => 'Imran COSTANZO',
        'contenu' => 'Ahaha sale pigeon (oui je suis désagréable)',
        'date' => '2025/02/05'
    ],
    [
        'id' => 11,
        'article_id' => 5,
        'auteur' => 'Élodie OL',
        'contenu' => 'N\'écoute pas cette petite salope d\'Imran. La St Valentin c\'est trop mignon.',
        'date' => '2024/02/14'
    ]
];
