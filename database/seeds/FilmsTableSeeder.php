
<?php

use Illuminate\Database\Seeder;
use App\Film;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::create([
            // 1
            'name' => 'El Caso de Richard Jewell',
            'duration' => 129,
            'description' => 'Richard Jewell (Paul Walter Hauser) es un guardia de seguridad que se convierte en un héroe cuando salva cientos de vidas durante las Olimpiadas de 1996 en Atlanta, al evitar la explosión de un artefacto explosivo. Pero a los pocos días, Jewell se convierte en el primer sospechoso del intento de ataque terrorista para el FBI, dejando atrás su papel de héroe y convirtiéndose en un villano para el público y la prensa. Watson Bryant (Sam Rockwell), un abogado independiente, intenta limpiar el nombre de Ricard, pero es una tarea complicada ya que son muchos quienes quieren destruir su vida.',
            'year' => 2019,
            'url'=>'https://www.youtube.com/watch?v=Blp961s8z6Y',
            'image' => '1.jpg',
            'imagesec' => '1.jpg',
            'starts' => 5
        ]);
        Film::create([
            // 2
            'name' => 'El Escándalo',
            'duration' => 108,
            'description' => 'Roger Allies es un hombre que es consciente del poder que tiene. En su cargo como director de la cadena estadounidense de televisión Fox News, Allies está convencido de que es intocable. Gracias a esta posición superiori, el dirigente no tiene ningún reparo en basar la política de su negocio en hombres que ocupan todos los altos cargos. Hartas de este régimen, un grupo de mujeres encabezados por Megyn Kelly deciden unirse para finalizar, de una vez por todas, con la discriminación en su lugar de trabajo.',
            'year' => 2019,
            'url'=>'https://www.youtube.com/watch?v=MMG8lp0IkBs',
            'image' => '2.jpg',
            'imagesec' => '2.jpg',
            'starts' => 3
        ]);
        Film::create([
            // 3
            'name' => 'El Hombre que Invento la Navidad',
            'duration' => 104,
            'description' => 'Cuento de Navidad" constituyó uno de los grandes éxitos de Charles Dickens en 1843; sin embargo, a pesar de su éxito, sus tres últimas obras constituyeron un rotundo fracaso. Todos sus editores acabaron rechazándole, por lo que él mismo se vio obligado a publicar su nueva obra para paliar así las dificultades económicas por las que estaba pasando. Esta historia se centra en cómo se creó la novela con la que Dickens dio auténtico sentido al espiritu de la navidad.',
            'year' => 2017,
            'url'=>'https://www.youtube.com/watch?v=_fOTQkeDpCg',
            'image' => '3.jpg',
            'imagesec' => '3.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 4
            'name' => 'Michael Jackson: This Is It',
            'duration' => 111,
            'description' => '"This Is It" de Michael Jackson ofrecerá a los fanáticos de Jackson y a los amantes de la música de todo el mundo una mirada rara y detrás de escena al intérprete mientras se desarrolla, crea y ensaya para sus conciertos con entradas agotadas que habrían tenido lugar a partir de este verano en Londres. O2 Arena. Cronometrando los meses de marzo a junio de 2009, la película se produce con el apoyo total de Estate of Michael Jackson y se extrae de más de cien horas de escenas detrás de escena, con Jackson ensayando varias de sus canciones para el show.',
            'year' => 2009,
            'url'=>'https://www.youtube.com/watch?v=zUniG6F_RzY',
            'image' => '4.jpg',
            'imagesec' => '4.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 5
            'name' => 'Una Mente Brillante',
            'duration' => 135,
            'description' => 'John Forbes Nash Jr. (Russel Crow ) es un estudiante de la Universidad de Princeton que destaca por su brillantez, su excentricidad y por su competitividad. Desde hace tiempo, ha estado trabajando en una importante teoría sobre los mercados financieros que ha logrado una enorme repercusión, lo que le ha valido para obtener un puesto en el MIT (Instituto Tecnológico de Massachusetts) en el que trabaja en secreto para el gobierno de los Estados Unidos. Allí conoce a Alicia Lardé (Jennifer Connelly ), una estudiante de la que se enamora y con la que termina contrayendo matrimonio.',
            'year' => 2001,
            'url'=>'https://www.youtube.com/watch?v=SbqU4EyCN7I',
            'image' => '5.jpg',
            'imagesec' => '5.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 6
            'name' => 'Un Crimen Perfecto',
            'duration' => 107,
            'description' => 'Steven Taylor, un industrial millonario que atraviesa un mal momento financiero, está casado con Emily, una joven adinerada de familia rica que mantiene un pasional romance con David, un artista bohemio. Tras conocer la infidelidad de su esposa, Steve averigua también el turbio pasado del amante, un estafador que seduce a mujeres ricas, y entonces le encarga que asesine a su esposa.',
            'year' => 1998,
            'url'=>'https://www.youtube.com/watch?v=K8X6yTa92VY',
            'image' => '6.jpg',
            'imagesec' => '6.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 7
            'name' => 'La Caída del Imperio Americano',
            'duration' => 129,
            'description' => 'Un conductor de camión de reparto tímido e inseguro llega accidentalmente a la escena de un crimen importante y, al recoger dos bolsas de dinero en efectivo, las esconde en su camión. Como si un interrogatorio de dos duros detectives de la policía no fuera suficiente, el tipo, que tiene un título de doctor en filosofía que hace que su mente se mezcle con el remordimiento, debe encontrar la manera de deshacerse de este dinero sucio. Solo la ayuda de una prostituta y un ex motorista liberado de la cárcel podría sacarlo de problemas, especialmente porque un líder de una pandilla está muy ansioso por recuperar su dinero o matar a quien sea responsable de este desastre. Sin embargo, incluso los dos detectives torpes también están monitoreando el caso.',
            'year' => 2018,
            'url'=>'https://www.youtube.com/watch?v=AOdZzrgHWKg',
            'image' => '7.jpg',
            'imagesec' => '7.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 8
            'name' => 'Bad Boys For Life',
            'duration' => 90,
            'description' => 'Miami vuelve a ser el escenario de esta nueva entrega de Dos policías rebeldes. Allí, los detectives Mike Lowrey (Will Smith) y Marcus Burnett (Martin Lawrence) vuelven a hacer de las suyas, y su nueva aventura volverá a estar plagada de acción, bandas, persecuciones de coches y explosiones. Con unos métodos únicos y un peculiar sentido de afrontar los problemas y el peligro que abunda en las calles, incluidas las constantes discusiones entre ambos, este par de policías afrontará nuevos retos y siempre estarán preparados para saltarse las normas cuando la justicia lo requiera.',
            'year' => 2020,
            'url'=>'https://www.youtube.com/watch?v=jKCj3XuPG8M',
            'image' => '8.jpg',
            'imagesec' => '8.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 9
            'name' => 'Navidad de Locura',
            'duration' => 120,
            'description' => 'Trudie es una joven y apuesta rubia de 27 años, está presionada por sus padres, pues desean que tenga un buen puesto como ejecutiva de ventas y que por fin se case con su novio Nick, a quien aun no conocen. Su madre aprovecha la víspera de navidad, para formalizar la relación. Pero con lo que no contaba Trudie, es que justo ese día, terminaría su relación con Nick. Entonces, Trudie, decide secuestrar a David, un chico apuesto, que estaba en el restaurante donde trabaja. Durante el camino le plantea el plan para hacer la farsa de que es su novio y parezca real ante sus padres. David intentará decirle a la familia de Trudie que fue secuestrado, pero entre más tiempo pase con su familia la magia de la navidad los unirá.',
            'year' => 2007,
            'url'=>'https://www.youtube.com/watch?v=pxE61E9RrxI',
            'image' => '9.jpg',
            'imagesec' => '9.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 10
            'name' => 'Tea Pets',
            'duration' => 93,
            'description' => 'Nathan es una pequeña figurita de te, que no cambia de color cuando se le moja, lo cual es muy importante para él. Cuando conoce a un robot al que bautiza como Timebot, se aventura con su ayuda a descubrir cual es el problema. Solo hay un lugar donde le pueden contestar y para ello ambos amigos se verán envueltos en multitud de problemas con el malvado Flash, una rata de las alcantarillas, que se interpondrá en su camino, hasta el final.',
            'year' => 2017,
            'url'=>'https://www.youtube.com/watch?v=TFP4hxz30jQ',
            'image' => '10.jpg',
            'imagesec' => '10.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 11
            'name' => 'Paulie',
            'duration' => 91,
            'description' => 'Marie tiene un loro de color verde llamado Paulie que es capaz de imitar la voz humana y que de hecho la emplea a todas horas, hablando sin parar. Sin embargo, un día sus padres les separan por temor a que la niña se encariñe demasiado con su mascota, y el pobre loro se encuentra solo y desorientado en un mundo que no conoce. Paulie iniciará un apasionante y peligroso viaje con el fin de reencontrarse con su dueña. En el camino caerá en la cuenta de que su habilidad para hablar y su parloteo incesante pueden meterle en más de un problema, pero también se encontrará con una gran cantidad de amigos dispuestos a ayudarle en su búsqueda. El loro charlatán vivirá así mil y una memorables aventuras, escapando de malvados y superando peligros.',
            'year' => 1998,
            'url'=>'https://www.youtube.com/watch?v=AGV8nB_EEAU',
            'image' => '11.jpg',
            'imagesec' => '11.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 12
            'name' => 'La Era de Hielo: Una Navidad Tamaño Mamut',
            'duration' => 26,
            'description' => 'Cuando Sid destruye accidentalmente la roca navideña de la herencia de Manny y termina en la lista traviesa de Santa, lidera una divertida búsqueda del Polo Norte para arreglar las cosas y empeora las cosas. Ahora le toca a Manny y su grupo prehistórico unirse y salvar la Navidad para todo el mundo.',
            'year' => 2011,
            'url'=>'https://www.youtube.com/watch?v=4N2V-_BShlE',
            'image' => '12.jpg',
            'imagesec' => '12.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 13
            'name' => 'La Navidad Vuelve A Canaan',
            'duration' => 85,
            'description' => 'En la historia, el hijo de Daniel, Bobber, necesita una cirugía ortopédica extensa y meses de fisioterapia intensiva para recuperarse de ser atropellado por un automóvil. Rodney Freeman, el joven negro que Daniel llevó a su casa y crió como otro hijo, se ha convertido en un famoso escritor y ofrece volar a Daniel y Bobber a San Francisco y pagar la cirugía. Una vez en San Francisco, Daniel se encuentra y se enamora de Briony Adair, un especialista en rehabilitación física que trabajará para la recuperación de Bobber. Cuando la terapia avanza lentamente, Bobber invita a Briony a regresar a Canaan para pasar la Navidad con los Burton y continuar su tratamiento. Briony es natural en el cuidado de una familia próspera, pero Sarah, la hija de Daniel, se distancia y no quiere deshonrar el recuerdo de su difunta madre, y una desastrosa visita de Navidad separa a Daniel y Briony. En la búsqueda del alma que sigue, Daniel encuentra la fuerza para volver a abrir su corazón e invitar al amor a su vida.',
            'year' => 2011,
            'url'=>'https://www.youtube.com/watch?v=7oxqhsxWdkk',
            'image' => '13.jpg',
            'imagesec' => '13.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 14
            'name' => 'Día de Muertos',
            'duration' => 93,
            'description' => 'En un pequeño pueblo donde los espíritus regresan una vez al año durante las fiestas de Día de Muertos vive Salma, una tenaz y entusiasta joven de 16 años, que es la única en el pueblo que no puede traer a nadie pues no conoce el paradero ni identidad de sus padres y desde pequeña lo ha investigado sin éxito, pero este año en compañía de sus dos queridos amigos, Jorge y Pedro, descubren un antiguo libro de hechizos que podría ser el eslabón perdido hacia su pasado pero en cambio los lleva por un camino lleno de aventuras, fantasmas, calaveras y un hombre misterioso hasta que llegan al mismísimo inframundo. Durante el viaje no sólo descubrirán los orígenes de Salma y de la celebración del Día de Muertos, también correrán grandes peligros que tendrán que librar para salvar a sus seres queridos.',
            'year' => 2019,
            'url'=>'https://www.youtube.com/watch?v=VHj3-IteMtM',
            'image' => '14.jpg',
            'imagesec' => '14.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 15
            'name' => 'El Faro',
            'duration' => 110,
            'description' => 'Una remota y misteriosa isla de Nueva Inglaterra en la década de 1890. El veterano farero Thomas Wake (Willem Dafoe) y su joven ayudante Ephraim Winslow (Robert Pattinson) deberán convivir durante cuatro semanas. Su objetivo será mantener el faro en buenas condiciones hasta que llegue el relevo que les permita volver a tierra. Pero las cosas se complican cuando surjan conflictos por jerarquías de poder entre ambos.',
            'year' => 2019,
            'url'=>'https://www.youtube.com/watch?v=RwmfQ1kjhMo',
            'image' => '15.jpg',
            'imagesec' => '15.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 16
            'name' => 'Another Evil',
            'duration' => 90,
            'description' => 'Dan y su mujer, Mary, tienen una segunda residencia en la montaña. La aprovechan para desconectar, pintar y pasar el rato en familia. El problema llega cuando Dan empieza a ver seres malignos que le despiertan de noche. Desesperado, decide ponerse en manos de un profesional y finalmente encuentra a Os, un exorcista “graduado”. Aunque Mary no lo ve del mismo modo, Dan se encierra un fin de semana con Os para intentar exorcizar la casa. Pero poco a poco descubrirá que Os es un personaje tan peculiar como los fantasmas que habitan la casa.',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=5g35dDAXRi8',
            'image' => '16.jpg',
            'imagesec' => '16.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 17
            'name' => 'Los Huéspedes',
            'duration' => 101,
            'description' => 'The Innkeepers se centrará en los dos últimos empleados de un hotel antes que este cierre sus puertas. Después de cien años en el negocio, el Yankee Pedlar Hotel está a punto de cerrar. Sus dos últimos empleados son Claire, una chica alrededor de los veinte que ha aceptado su lugar en la vida, y Luke, un chico experto en computadoras y solitario. Ambos tienen la obsesión de que el hotel está maldito y están dispuestos a demostrarlo. El tiempo se les echa encima en los días de la operación, con misteriosos invitados como Leanne Reese-Jones, una antigua actriz de televisión reconvertida en psíquica, y una anciano que persiste en quedarse en su habitación, la 353. Varios acontecimientos extraños se empiezan a suceder, y Claire y Luke deberán tomar la crucial decisión sobre que creer y que no creer.',
            'year' => 2011,
            'url'=>'https://www.youtube.com/watch?v=ZyiRacsBgAc',
            'image' => '17.jpg',
            'imagesec' => '17.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 18
            'name' => 'Una Cenicienta Moderna: Un Deseo de Navidad',
            'duration' => 85,
            'description' => 'La aspirante a cantante y compositora puede tener grandes sueños, pero tiene problemas aún mayores. Tratada como una sirvienta por su vanidosa madrastra y hermanastras egoístas, Kat se ve obligada a realizar un trabajo desmoralizador como elfa cantante en la Tierra de Santa del multimillonario Terrence Wintergarden. Pero hay un punto brillante para el trabajo: Nick, el nuevo y guapo Santa en el lote de árboles. Cuando Kat es invitada a la prestigiosa Gala de Navidad Wintergarden, su familia adoptiva está decidida a evitar que asista y enganche su propia invitación.',
            'year' => 2019,
            'url'=>'https://www.youtube.com/watch?v=tExU3nn2tV8',
            'image' => '18.jpg',
            'imagesec' => '18.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 19
            'name' => 'Una Receta Inolvidable',
            'duration' => 84,
            'description' => 'La compañía Christmas Cookie Company de la tía Sally se vende a un gran conglomerado y la ejecutiva Hannah (Wagner) debe cerrar el trato y cerrar la fábrica, que es la pequeña ciudad del alma de Cookie Jar. Lo que se suponía que era una tarea simple para Hannah se complica cuando conoce a Jake (Brown), el dueño de la fábrica que está decidido a mantener la fábrica en la ciudad. A pesar de no ser un fanático de las vacaciones, el espíritu navideño en esta pequeña ciudad es contagioso y se deja llevar por la alegría de la temporada mientras se enamora. Protagonizada por Jill Wagner y Wes Brown.',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=L5hWyn6BanQ',
            'image' => '19.jpg',
            'imagesec' => '19.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 20
            'name' => 'El Reino de Las Ranas',
            'duration' => 86,
            'description' => 'Cuando el Rey Rana anuncia que el ganador de las Olimpiadas de su reino se casará con su hija, ésta se niega a aceptar el matrimonio. La Princesa Rana quiere ser independiente así que se revela y confiesa que no quiere un marido. Para evitar su casamiento, decide participar en los juegos olímpicos y ser la ganadora. Convencida de que puede con todo, empieza a entrenar junto a su amigo Freddie para superar todas las pruebas. Solo hay un problema: una serpiente enemiga tiene sus propios planes para arruinar los juegos y hará todo lo posible para conseguirlo.',
            'year' => 2013,
            'url'=>'https://www.youtube.com/watch?v=FI7McN3zR28',
            'image' => '20.jpg',
            'imagesec' => '20.jpg',
            'starts' => 4
        ]);

        // Mini Slide
        Film::create([
            // 21
            'name' => 'God’s Compass',
            'duration' => 99,
            'description' => 'On the night Suzanne Waters celebrates her retirement, she is faced with a series of crisis she could not have imagined.',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=qLtD4orE2r4',
            'image' => '21.jpg',
            'imagesec' => '21.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 22
            'name' => 'The Apostle Peter: Redemption',
            'duration' => 89,
            'description' => 'Tormented by his denial of Christ, Peter spent his life attempting to atone for his failures. Now as he faces certain death at the hand of Nero, will he falter again, his weakness betray him or will he rise up triumphant in his final moment?',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=43aUvmQw55Q',
            'image' => '22.jpg',
            'imagesec' => '22.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 23
            'name' => 'Do not Think Twice',
            'duration' => 92,
            'description' => 'When a member of a popular New York City improv troupe gets a huge break, the rest of the group - all best friends - start to realize that not everyone is going to make it after all.',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=9RFTpObS95U',
            'image' => '23.jpg',
            'imagesec' => '23.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 24
            'name' => 'Un espía y medio',
            'duration' => 107,
            'description' => 'After he reconnects with an awkward pal from high school through Facebook, a mild-mannered accountant is lured into the world of international espionage.',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=D8f2oWWOCWs',
            'image' => '24.jpg',
            'imagesec' => '24.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 25
            'name' => 'Mi amigo el gigante',
            'duration' => 117,
            'description' => 'An orphan little girl befriends a benevolent giant who takes her to Giant Country, where they attempt to stop the man-eating giants that are invading the human world.',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=iy0ULGtOw8o',
            'image' => '25.jpg',
            'imagesec' => '25.jpg',
            'starts' => 4
        ]);
        Film::create([
            // 26
            'name' => 'La luz entre los océanos',
            'duration' => 133,
            'description' => 'A lighthouse keeper and his wife living off the coast of Western Australia raise a baby they rescue from a drifting rowing boat.',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=NPwGM5-JWiM',
            'image' => '26.jpg',
            'imagesec' => '26.jpg',
            'starts' => 4
        ]);
        /*Film::create([
            // 27
            'name' => 'Greater',
            'duration' => 130,
            'description' => 'The story of Brandon Burlsworth, possibly the greatest walk-on in the history of college football.',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=v0Ow6lhvPNk',
            'image' => '27.jpg',
            'imagesec' => '27.jpg',
            'starts' => 4
        ]);*/
        /*Film::create([
            // 28
            'name' => 'X-Men: Apocalipsis',
            'duration' => 143,
            'description' => 'Desde el inicio de los tiempos Apocalipsis, el mutante más poderoso que ha existido nunca, era adorado como un dios mientras acumulaba los poderes del resto de mutantes convirtiéndose en un ser inmortal. Tras miles de años dormido, despierta en un mundo que no le gusta y por ello recluta un equipo, encabezado por Magneto, para acabar con toda la humanidad y crear un nuevo orden mundial. Pero el Profesor X, con la ayuda de Mística, se unirá a un grupo de jóvenes mutantes para tratar de detener al mayor enemigo contra el que se hayan enfrentado jamás.',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=TBZjPqYty8E',
            'image' => '28.jpg',
            'imagesec' => '28.jpg',
            'starts' => 4
        ]);*/
        /*Film::create([
            // 29
            'name' => 'Citizen Soldier',
            'duration' => 105,
            'description' => 'CITIZEN SOLDIER is a dramatic feature film, told from the point of view of a group of Soldiers in the Oklahoma Army National Guard\'s 45th Infantry Brigade Combat Team, known since World War II as the "Thunderbirds." Set in one of the most dangerous parts of Afghanistan at the height of the surge, it is a heart-pounding, heartfelt grunts\' eye-view of the war. A modern day Band of Brothers, Citizen Soldier tells the true story of a group of Soldiers and their life-changing tour of duty in Afghanistan, offering an excruciatingly personal look into modern warfare, brotherhood, and patriotism. Using real footage from multiple cameras, including helmet cams, these Citizen Soldiers give the audience an intimate view into the chaos and horrors of combat and, in the process, display their bravery and valor under the most hellish of conditions.',
            'year' => 2016,
            'url'=>'https://www.youtube.com/watch?v=-d-BcfRGl7c',
            'image' => '29.jpg',
            'imagesec' => '29.jpg',
            'starts' => 4
        ]);*/

    }
}
