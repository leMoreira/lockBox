<?php

$db = new PDO('sqlite:database.sqlite');

$query = $db->query("select * from livros");

$livros = $query->fetchAll();

// $livros = [
//     ['id' => 1,
//     'titulo' => 'Senhor dos anéis',
//     'autor' => 'J. R. R. Tolkien',
//     'descricao' => 'lorem ipsum',
//     'img' => 'https://br.web.img3.acsta.net/medias/nmedia/18/92/91/32/20224832.jpg',
// ],
// ['id' => 2,
//     'titulo' => '1984',
//     'autor' => 'George Owell',
//     'descricao' => 'lorem ipsum',
//     'img' => 'https://cdl-static.s3-sa-east-1.amazonaws.com/covers/gg/9788535932966/1984-edicao-especial.jpg',
// ],
// ['id' => 3,
//     'titulo' => 'Cachorrinho Samba',
//     'autor' => 'Maria José Dupré',
//     'descricao' => 'lorem ipsum',
//     'img' => 'https://m.media-amazon.com/images/I/61Tq5fU-a4L._AC_UF1000,1000_QL80_.jpg',
// ],
// ['id' => 4,
//     'titulo' => 'O grande Gatsby',
//     'autor' => 'F. Scott Fitzgerald',
//     'descricao' => 'lorem ipsum',
//     'img' => 'https://m.media-amazon.com/images/I/91TggmMvmDL._AC_UF1000,1000_QL80_.jpg',
// ],
// ['id' => 5,
//     'titulo' => 'Orgulho e Preconceito',
//     'autor' => 'Jane Austein',
//     'descricao' => 'lorem ipsum',
//     'img' => 'https://m.media-amazon.com/images/I/71Xta4Nf7uL._AC_UF1000,1000_QL80_.jpg',
// ],
// ['id' => 6,
//     'titulo' => 'Moby Dick',
//     'autor' => 'Herman Melville',
//     'descricao' => 'lorem ipsum',
//     'img' => 'https://www.antofagica.com.br/wp-content/uploads/2022/07/atf_5MobyDick_1Cadastro_2Antosite-1.png',
// ],
// ['id' => 7,
//     'titulo' => 'Gerra e Paz',
//     'autor' => 'Liev Tolstói',
//     'descricao' => 'lorem ipsum',
//     'img' => 'https://cirandacultural.fbitsstatic.net/img/p/guerra-e-paz-70946/257462.jpg?w=520&h=520&v=no-change&qs=ignore',
// ],
// ['id' => 8,
//     'titulo' => 'O apanhador no campo de Centeio',
//     'autor' => 'J. D. Salinger',
//     'descricao' => 'lorem ipsum',
//     'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiA3yQ1R-uICjmnmCkuR1XVP-Jwn9jcBJR7w&s',

// ],
// ['id' => 9,
//     'titulo' => 'Crime e Castigo',
//     'autor' => 'Fiódor Dostoiévski',
//     'descricao' => 'lorem ipsum',
//     'img' => 'https://www.lpm.com.br/livros/imagens/crime_e_castigo_9788525416476_hd.jpg',
// ],
// ['id' => 10,
//     'titulo' => 'Ulisses',
//     'autor' => 'Maria Alberta Menéres',
//     'descricao' => 'Uma obra-prima modernista',
//     'img' => 'https://m.media-amazon.com/images/I/61-5X0w8VqS._AC_UF1000,1000_QL80_.jpg',
// ],

// ]


?>