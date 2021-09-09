<?php 

// Le fichier data.php va contenir des données qu'on pourra utiliser
// partout dans le site

$menu = [
    'Plan du site' => 'plan_de_site.php',
    'Mentions légales' => 'mentions_legales.php',
    'Contact' => 'contact.php'
];

// Tableau de tableaux
$postList = [

    // foreach($postList as $postId => $postData)
    
    // Article n°1
    // $postId
    1 => [
        // 0 => 'Hello world',
        // $postData ==> Tableau associatif
        'title' => 'Lorem ipsum dolor article 1',
        'author' => 'Darren Collison',
        'text' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vero enim, provident placeat itaque dolores tenetur officia perspiciatis temporibus ipsa nostrum ab quo quam at molestiae a delectus quas reiciendis, odio mollitia laudantium soluta odit. Repudiandae ullam explicabo at recusandae magni? Dolore quam non obcaecati, maiores soluta eveniet. Soluta exercitationem iure error nam quaerat necessitatibus, vel laborum voluptate accusamus, fuga provident obcaecati maiores ullam iusto cumque repellat a minus adipisci quo eveniet. Corrupti officiis praesentium laudantium dolorum mollitia doloremque impedit, beatae modi enim fugit voluptatibus incidunt optio aliquam amet fugiat qui, a provident iure quod? Cupiditate beatae, expedita tempore eligendi aliquid suscipit nostrum. Consequuntur, ducimus perspiciatis repudiandae repellat deleniti porro atque nisi, cum doloremque veritatis velit a officiis veniam odio quasi iste eveniet pariatur. Dolorem distinctio eum enim magnam tenetur nostrum recusandae dolore nisi! Asperiores quas mollitia nesciunt repudiandae, illum reprehenderit atque sapiente, qui fugiat nobis provident ipsa facilis, consectetur magnam sit repellat tempore ab iste dolores aliquam praesentium? Consequuntur, a?</p>",
        'summary' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pacers, perferendis, saepe.",
        'category' => 'team',
        'datetime' => '2018-02-10',
        'publication_date' => 'le 10 février 2018',
        'author_image' => 'icon-dar.png'
    ],

    // Article n°2
    2 => [
        'title' => 'Lorem ipsum dolor article 2',
        'author' => 'John Marchill',
        'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium accusamus est quasi nostrum saepe velit perspiciatis incidunt nemo similique, ut fugit vitae quidem, beatae nobis totam asperiores consequatur. Fugit ipsam sequi error excepturi aspernatur omnis minus? Explicabo eaque beatae velit eligendi dolorum sit dolorem dicta minus facere doimus ex a eaque dignissimos vitae ratione nesciunt obcaecati nulla molestiae, sint corrupti ut ullam voluptas earum reiciendis! Illo eaque odio dolore quae quaerat rerum autem pariatur sunt quisquam cupiditate similique, velit dignissimos non harum sit nam. Eaque dicta, nobis ea impedit corporis qui doloribus asperiores itaque nesciunt laborum nam aliquid rem optio maiores voluptatum excepturi harum eos?</p>',
        'summary' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos id impedit at quo, expedita iure, molestias error ullam distinctio vel.",
        'category' => 'news',
        'datetime' => '2018-03-27',
        'publication_date' => 'le 27 mars 2018',
        'author_image' => 'icon-john.png'
    ],


    // Article n°3
    3 => [
        'title' => 'Lorem ipsum dolor article 3',
        'author' => 'Olivier Hertz',
        'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium accusamus est quasi nostrum saepe velit perspiciatis incidunt nemo similique, ut fugit vitae quidem, beatae nobis totam asperiores consequatur. Fugit ipsam sequi error excepturi aspernatur omnis minus? Explicabo eaque beatae velit eligendi dolorum sit dolorem dicta minus facere doimus ex a eaque dignissimos vitae ratione nesciunt obcaecati nulla molestiae, sint corrupti ut ullam voluptas earum reiciendis! Illo eaque odio dolore quae quaerat rerum autem pariatur sunt quisquam cupiditate similique, velit dignissimos non harum sit nam. Eaque dicta, nobis ea impedit corporis qui doloribus asperiores itaque nesciunt laborum nam aliquid rem optio maiores voluptatum excepturi harum eos?</p>
        <p>Repellat nulla suscipit porro accusantium dicta cumque maiores iste nobis ipsum maxime. Ipsam, fuga. Excepturi non natus laboriosam, nihil mollitia modi dignissimos nulla fuga sint libero sit enim assumenda repudiandae magnam voluptatibus dolorum, odit suscipit et sapiente, iure ab eaque rer lo incidunt eos! Reiciendis officia animi neque. Minus quis totam commodi. Repellat laudantium ab, dignissimos, velit ea ducimus fuga error debitis consequuntur nobis voluptates at! Sint cumque maxime a quaerat autem corporis reiciendis laboriosam maiores praesentium modi, aliquam pariatur earum mollitia similique saepe voluptatem debitis ipsum eius inventore molestias fuga veritatis iure! Mollitia, libero maxime.</p>',
        'summary' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Location magnam, distinctio! Vero blanditiis nisi veritatis id perferendis, quod quaerat necessitatibus ullam nobis quidem ipsam optio sit quibusdam ad quae voluptatibus doloremque!",
        'category' => 'news',
        'datetime' => '2018-05-05',
        'publication_date' => 'le 5 mai 2018',
        'author_image' => 'icon-ohz.png'
    ],

    // Article n°4
    4 => [
        'title' => 'Lorem ipsum dolor article 4',
        'author' => 'Jack Sparrow',
        'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium accusamus est quasi nostrum saepe velit perspiciatis incidunt nemo similique, ut fugit vitae quidem, beatae nobis totam asperiores collo eaque odio dolore quae quaerat rerum autem pariatur sunt quisquam cupiditate similique, velit dignissimos non harum sit nam. Eaque dicta, nobis ea impedit corporis qui doloribus asperiores itaque nesciunt laborum nam aliquid rem optio maiores voluptatum excepturi harum eos?</p>
        <p>Repellat nulla suscipit porro accusantium dicta cumque maiores iste nobis ipsum maxime. Ipsam, fuga. Excepturi non natus laboriosam, nihil mollitia modi dignissimos nulla fuga sint libero sit enim assumenda repudiandae magnam em corporis reiciendis laboriosam maiores praesentium modi, aliquam pariatur earum mollitia similique saepe voluptatem debitis ipsum eius inventore molestias fuga veritatis iure! Mollitia, libero maxime.</p>', 'summary' => "<p>Lorem ipsum dolor sit amet consectetur adipisici. Lorem ipsum dolor sit amet.</p>",
        'summary' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pirates molestias molestiae, obcaecati et. Veritatis, laudantium!",
        'category' => 'work',
        'datetime' => '2018-07-31',
        'publication_date' => 'le 27 mars 2018',
        'author_image' => 'icon-spr.png'
    ],

    // Article n°5
    5 => [
        'title' => 'Lorem ipsum dolor article 5',
        'author' => 'Terry Rozier',
        'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium accusamus est quasi nostrum saepe velit perspiciatis incidunt nemo similique, ut fugit vitae quidem, beatae nobis totam asperiores collo eaque odio dolore quae quaerat rerum autem pariatur sunt quisquam cupiditate similique, velit dignissimos non harum sit nam. Eaque dicta, nobis ea impedit corporis qui doloribus asperiores itaque nesciunt laborum nam aliquid rem optio maiores voluptatum excepturi harum eos?</p>
        <p>Repellat nulla suscipit porro accusantium dicta cumque maiores iste nobis ipsum maxime. Ipsam, fuga. Excepturi non natus laboriosam, nihil mollitia modi dignissimos nulla fuga sint libero sit enim assumenda repudiandae magnam em corporis reiciendis laboriosam maiores praesentium modi, aliquam pariatur earum mollitia similique saepe voluptatem debitis ipsum eius inventore molestias fuga veritatis iure! Mollitia, libero maxime.</p>', 'summary' => "<p>Lorem ipsum dolor sit amet consectetur adipisici. Lorem ipsum dolor sit amet.</p>",
        'summary' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Celtics nostrum obcaecati sit odit eveniet, unde hic animi molestiae, odio a quia aut perspiciatis dicta.",
        'category' => 'team',
        'datetime' => '2018-09-02',
        'publication_date' => 'le 2 septembre 2018',
        'author_image' => 'icon-tr.png'
    ],

    // Article n°6
    6 => [
        'title' => 'Lorem ipsum dolor article 6',
        'author' => 'Trevor Bayne',
        'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium accusamus est quasi nostrum saepe velit perspiciatis incidunt nemo similique, ut fugit vitae quidem, beatae nobis totam asperiores collo eaque odio dolore quae quaerat rerum autem pariatur sunt quisquam cupiditate similique, velit dignissimos non harum sit nam. Eaque dicta, nobis ea impedit corporis qui doloribus asperiores itaque nesciunt laborum nam aliquid rem optio maiores voluptatum excepturi harum eos?</p>
        <p>Repellat nulla suscipit porro accusantium dicta cumque maiores iste nobis ipsum maxime. Ipsam, fuga. Excepturi non natus laboriosam, nihil mollitia modi dignissimos nulla fuga sint libero sit enim assumenda repudiandae magnam em corporis reiciendis laboriosam maiores praesentium modi, aliquam pariatur earum mollitia similique saepe voluptatem debitis ipsum eius inventore molestias fuga veritatis iure! Mollitia, libero maxime.</p>', 'summary' => "<p>Lorem ipsum dolor sit amet consectetur adipisici. Lorem ipsum dolor sit amet.</p>",
        'summary' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nascar vitae assumenda reiciendis doloremque, quisquam.",
        'category' => 'work',
        'datetime' => '2018-10-25',
        'publication_date' => 'le 25 octobre 2018',
        'author_image' => 'icon-spr.png'
    ],


    // Article n°7
    7 => [
        'title' => 'Lorem ipsum dolor article 7',
        'author' => 'Victor Paumier',
        'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium accusamus est quasi nostrum saepe velit perspiciatis incidunt nemo similique, ut fugit vitae quidem, beatae nobis totam asperiores collo eaque odio dolore quae quaerat rerum autem pariatur sunt quisquam cupiditate similique, velit dignissimos non harum sit nam. Eaque dicta, nobis ea impedit corporis qui doloribus asperiores itaque nesciunt laborum nam aliquid rem optio maiores voluptatum excepturi harum eos?</p>
        <p>Repellat nulla suscipit porro accusantium dicta cumque maiores iste nobis ipsum maxime. Ipsam, fuga. Excepturi non natus laboriosam, nihil mollitia modi dignissimos nulla fuga sint libero sit enim assumenda repudiandae magnam em corporis reiciendis laboriosam maiores praesentium modi, aliquam pariatur earum mollitia similique saepe voluptatem debitis ipsum eius inventore molestias fuga veritatis iure! Mollitia, libero maxime.</p>', 'summary' => "<p>Lorem ipsum dolor sit amet consectetur adipisici. Lorem ipsum dolor sit amet.</p>",
        'summary' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nascar vitae assumenda reiciendis doloremque, quisquam.",
        'category' => 'work',
        'datetime' => '2021-03-12',
        'publication_date' => 'le 12 mars 2021',
        'author_image' => 'icon-spr.png'
    ],


    // Article n°8
    8 => [
        'title' => 'Lorem ipsum dolor article 8',
        'author' => 'Victor Paumier',
        'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium accusamus est quasi nostrum saepe velit perspiciatis incidunt nemo similique, ut fugit vitae quidem, beatae nobis totam asperiores collo eaque odio dolore quae quaerat rerum autem pariatur sunt quisquam cupiditate similique, velit dignissimos non harum sit nam. Eaque dicta, nobis ea impedit corporis qui doloribus asperiores itaque nesciunt laborum nam aliquid rem optio maiores voluptatum excepturi harum eos?</p>
        <p>Repellat nulla suscipit porro accusantium dicta cumque maiores iste nobis ipsum maxime. Ipsam, fuga. Excepturi non natus laboriosam, nihil mollitia modi dignissimos nulla fuga sint libero sit enim assumenda repudiandae magnam em corporis reiciendis laboriosam maiores praesentium modi, aliquam pariatur earum mollitia similique saepe voluptatem debitis ipsum eius inventore molestias fuga veritatis iure! Mollitia, libero maxime.</p>', 'summary' => "<p>Lorem ipsum dolor sit amet consectetur adipisici. Lorem ipsum dolor sit amet.</p>",
        'summary' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nascar vitae assumenda reiciendis doloremque, quisquam.",
        'category' => 'team',
        'datetime' => '2021-03-12',
        'publication_date' => 'le 12 mars 2021',
        'author_image' => 'icon-spr.png'
    ]
];


// Le Premier article : un tableau associatif
// var_dump($postList[1]);

// le Titre du premier article
// var_dump($postList[1]['title']);


// // le Titre du premier article
// var_dump($postList[2]['title']);

// // Comment afficher le nom de l'auteur du 4e article
// var_dump($postList[4]['author']);