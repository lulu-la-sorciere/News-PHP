<?php

// Salut !!!
// Oui, je suis le premier fichier PHP exécuté pour oNews, mais malheureusement, je ne fais rien du tout :(
// A toi d'ajouter des lignes afin que je sois utile :D

include 'inc/data.php';

// Dans ce fichier on mettra des :
// - Déclaration de variables
// - Calculs, Algo, ...

// $postId = $_GET['id'];
$postId = filter_input(INPUT_GET, 'id');

// Tableau associatif de l'article dont l'id est indiqué dans l'url
// index.php?id=2 ==> $postId = 2 ==> $articleData article numero 2
// index.php?id=3 ==> $postId = 3 ==> $articleData article numero 3
$articleData = $postList[$postId]; // $postList[2]

// $articleData = [
//     'title' => 'Lorem ipsum dolor article 2',
//     'author' => 'Darren Collison',
//     'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, exercitationem. Aliquam dolores soluta tenetur, itaque aut, doloribus sunt harum recusandae tempore necessitatibus laboriosam odit vero error doloremque iure dolore consequuntur. Nostrum, voluptatibus fugit? Itaque dolore accusamus obcaecati tempore ab? Voluptates, omnis! Provident maxime libero quia delectus sequi consequuntur quidem harum, atque tenetur veniam aut iusto, ex illo odit nulla assumenda deserunt tempora odio culpa, voluptate magnam. Molestias mollitia placeat velit porro dolor quae esse aliquam ullam in totam doloribus officiis aspernatur numquam sed magnam, quo maiores? Eligendi incidunt ipsa aperiam similique repellendus. Ducimus rerum cupiditate illum culpa officiis nostrum molestias perspiciatis at, soluta id neque aut quam! Debitis voluptatum cupiditate tempora illum voluptatem tenetur, voluptatibus error, sint, sed minima maxime voluptate pariatur eum quasi maiores. Repudiandae voluptas dolores commodi quaerat ex delectus incidunt repellendus eius omnis, alias possimus nisi quasi? Voluptatibus esse incidunt ex consequuntur? Quo mollitia provident iusto aperiam quae itaque laborum placeat, explicabo, dolor eaque reprehenderit quia exercitationem atque sed! Optio quidem quae incidunt, alias deserunt nihil expedita a excepturi veritatis earum temporibus explicabo corporis repellendus eligendi perferendis ab consequatur recusandae ducimus delectus accusamus sed animi esse! Similique consectetur assumenda dolores adipisci repellat, nam neque numquam, in hic voluptas molestiae perferendis vitae. Atque sit quo repellat eos ratione corrupti neque itaque eius, iusto earum voluptate odit? Beatae, rerum natus tempore architecto animi veritatis ut mollitia quos explicabo! Rerum maxime incidunt doloremque error architecto, delectus dolores explicabo facilis illum et hic quaerat? Nemo temporibus minima consequuntur, eum nihil expedita soluta? At esse itaque repellendus enim? Nobis accusantium facere possimus eos minima fugit, quia quas et numquam incidunt culpa saepe praesentium tenetur labore tempora magnam reprehenderit vero dolore nam veniam quibusdam error, corporis, voluptatibus est. Modi ea totam sit adipisci soluta, magnam repudiandae quaerat quo obcaecati voluptate, vel quam natus, quidem illum labore aut excepturi. Voluptates officia ex et sed aliquam eos illo sunt explicabo doloribus. Eaque molestiae ad expedita harum minima rem aliquid eveniet itaque enim quos facilis ab vero voluptatum quas earum assumenda neque in, perferendis quibusdam! Veritatis adipisci similique saepe quia error facilis possimus hic minus quas ab sapiente distinctio quisquam tempora et, quos libero non ducimus natus qui sit sequi suscipit quidem consequatur voluptatem. Iure, natus minus. Eligendi, asperiores cum. Perspiciatis praesentium quod atque porro! Natus, at! Architecto doloribus veniam voluptates nisi rem minus dolorem alias, quis, sed suscipit iste aut ullam dolore odit perspiciatis cumque!',
//     'category' => 'team',
//     'datetime' => '2018-02-10',
//     'publication_date' => 'le 10 février 2018',
//     'author_image' => '../images/icon-dar.png'
// ];


// On va inclure au moins ces trois fichiers de templates
// à la fin du fichier
include 'inc/header.tpl.php';
include 'inc/article.tpl.php';
include 'inc/footer.tpl.php';