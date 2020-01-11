<?php

/*
	array $catchrates
		formatted array of names and catch rates

	eg
	print_r($catchrates[0]);
*/

$catchrates = array(
	array('Charmander', 45),
	array('Charmeleon', 45),
	array('Charizard', 45),
	array('Caterpie', 255),
	array('Metapod', 120),
	array('Butterfree', 45),
	array('Pikachu', 190),
	array('Raichu', 75),
	array('Clefairy', 150),
	array('Clefable', 25),
	array('Vulpix', 190),
	array('Ninetales', 75),
	array('Oddish', 255),
	array('Gloom', 120),
	array('Vileplume', 45),
	array('Diglett', 255),
	array('Dugtrio', 50),
	array('Meowth', 255),
	array('Growlithe', 190),
	array('Arcanine', 75),
	array('Machop', 180),
	array('Machoke', 90),
	array('Machamp', 45),
	array('Ponyta', 190),
	array('Rapidash', 60),
	array('Farfetchd', 45),
	array('Shellder', 190),
	array('Cloyster', 60),
	array('Gastly', 190),
	array('Haunter', 90),
	array('Gengar', 45),
	array('Onix', 45),
	array('Krabby', 225),
	array('Kingler', 60),
	array('Hitmonlee', 45),
	array('Hitmonchan', 45),
	array('Koffing', 190),
	array('Weezing', 60),
	array('Rhyhorn', 120),
	array('Rhydon', 60),
	array('Mr. Mime', 45),
	array('Magikarp', 255),
	array('Gyarados', 45),
	array('Lapras', 45),
	array('Ditto', 35),
	array('Eevee', 45),
	array('Vaporeon', 45),
	array('Jolteon', 45),
	array('Flareon', 45),
	array('Snorlax', 25),
	array('Hoothoot', 255),
	array('Noctowl', 90),
	array('Chinchou', 190),
	array('Lanturn', 75),
	array('Pichu', 190),
	array('Cleffa', 150),
	array('Togepi', 190),
	array('Togetic', 75),
	array('Natu', 190),
	array('Xatu', 75),
	array('Bellossom', 45),
	array('Sudowoodo', 65),
	array('Wooper', 255),
	array('Quagsire', 90),
	array('Espeon', 45),
	array('Umbreon', 45),
	array('Wobbuffet', 45),
	array('Steelix', 25),
	array('Qwilfish', 45),
	array('Shuckle', 190),
	array('Sneasel', 60),
	array('Swinub', 225),
	array('Piloswine', 75),
	array('Corsola', 60),
	array('Remoraid', 190),
	array('Octillery', 75),
	array('Delibird', 45),
	array('Mantine', 25),
	array('Tyrogue', 75),
	array('Hitmontop', 45),
	array('Larvitar', 45),
	array('Pupitar', 45),
	array('Tyranitar', 45),
	array('Zigzagoon', 255),
	array('Linoone', 90),
	array('Lotad', 255),
	array('Lombre', 120),
	array('Ludicolo', 45),
	array('Seedot', 255),
	array('Nuzleaf', 120),
	array('Shiftry', 45),
	array('Wingull', 190),
	array('Pelipper', 45),
	array('Ralts', 235),
	array('Kirlia', 120),
	array('Gardevoir', 45),
	array('Nincada', 255),
	array('Ninjask', 120),
	array('Shedinja', 45),
	array('Sableye', 45),
	array('Mawile', 45),
	array('Electrike', 120),
	array('Manectric', 45),
	array('Roselia', 150),
	array('Wailmer', 125),
	array('Wailord', 60),
	array('Torkoal', 90),
	array('Trapinch', 255),
	array('Vibrava', 120),
	array('Flygon', 45),
	array('Lunatone', 45),
	array('Solrock', 45),
	array('Barboach', 190),
	array('Whiscash', 75),
	array('Corphish', 205),
	array('Crawdaunt', 155),
	array('Baltoy', 255),
	array('Claydol', 90),
	array('Feebas', 255),
	array('Milotic', 60),
	array('Duskull', 190),
	array('Dusclops', 90),
	array('Wynaut', 125),
	array('Snorunt', 190),
	array('Glalie', 75),
	array('Budew', 255),
	array('Roserade', 75),
	array('Combee', 120),
	array('Vespiquen', 45),
	array('Cherubi', 190),
	array('Cherrim', 75),
	array('Shellos', 190),
	array('Gastrodon', 75),
	array('Drifloon', 125),
	array('Drifblim', 60),
	array('Stunky', 225),
	array('Skuntank', 60),
	array('Bronzor', 255),
	array('Bronzong', 90),
	array('Bonsly', 255),
	array('Mime Jr.', 145),
	array('Munchlax', 50),
	array('Riolu', 75),
	array('Lucario', 45),
	array('Hippopotas', 140),
	array('Hippowdon', 60),
	array('Skorupi', 120),
	array('Drapion', 45),
	array('Croagunk', 140),
	array('Toxicroak', 75),
	array('Mantyke', 25),
	array('Snover', 120),
	array('Abomasnow', 60),
	array('Weavile', 45),
	array('Rhyperior', 30),
	array('Togekiss', 30),
	array('Leafeon', 45),
	array('Glaceon', 45),
	array('Mamoswine', 50),
	array('Gallade', 45),
	array('Dusknoir', 45),
	array('Froslass', 75),
	array('Rotom', 45),
	array('Purrloin', 255),
	array('Liepard', 90),
	array('Munna', 190),
	array('Musharna', 75),
	array('Pidove', 255),
	array('Tranquill', 120),
	array('Unfezant', 45),
	array('Roggenrola', 255),
	array('Boldore', 120),
	array('Gigalith', 45),
	array('Woobat', 190),
	array('Swoobat', 45),
	array('Drilbur', 120),
	array('Excadrill', 60),
	array('Timburr', 180),
	array('Gurdurr', 90),
	array('Conkeldurr', 45),
	array('Tympole', 255),
	array('Palpitoad', 120),
	array('Seismitoad', 45),
	array('Throh', 45),
	array('Sawk', 45),
	array('Cottonee', 190),
	array('Whimsicott', 75),
	array('Basculin', 25),
	array('Darumaka', 120),
	array('Darmanitan', 60),
	array('Maractus', 255),
	array('Dwebble', 190),
	array('Crustle', 75),
	array('Scraggy', 180),
	array('Scrafty', 90),
	array('Sigilyph', 45),
	array('Yamask', 190),
	array('Trubbish', 190),
	array('Garbodor', 60),
	array('Minccino', 255),
	array('Cinccino', 60),
	array('Gothita', 200),
	array('Gothorita', 100),
	array('Gothitelle', 50),
	array('Solosis', 200),
	array('Duosion', 100),
	array('Reuniclus', 50),
	array('Vanillite', 255),
	array('Vanillish', 120),
	array('Vanilluxe', 45),
	array('Karrablast', 200),
	array('Escavalier', 75),
	array('Frillish', 190),
	array('Jellicent', 60),
	array('Joltik', 190),
	array('Galvantula', 75),
	array('Ferroseed', 255),
	array('Ferrothorn', 90),
	array('Klink', 130),
	array('Klang', 60),
	array('Klinklang', 30),
	array('Elgyem', 255),
	array('Litwick', 190),
	array('Lampent', 90),
	array('Chandelure', 45),
	array('Axew', 75),
	array('Fraxure', 60),
	array('Haxorus', 45),
	array('Cubchoo', 120),
	array('Beartic', 60),
	array('Shelmet', 200),
	array('Accelgor', 75),
	array('Stunfisk', 75),
	array('Golett', 190),
	array('Golurk', 90),
	array('Pawniard', 120),
	array('Bisharp', 45),
	array('Rufflet', 190),
	array('Braviary', 60),
	array('Vullaby', 190),
	array('Mandibuzz', 60),
	array('Heatmor', 90),
	array('Durant', 90),
	array('Deino', 45),
	array('Zweilous', 45),
	array('Hydreigon', 45),
	array('Bunnelby', 255),
	array('Diggersby', 127),
	array('Pancham', 220),
	array('Pangoro', 65),
	array('Espurr', 190),
	array('Meowstic', 75),
	array('Honedge', 180),
	array('Doublade', 90),
	array('Aegislash', 45),
	array('Spritzee', 200),
	array('Aromatisse', 140),
	array('Swirlix', 200),
	array('Slurpuff', 140),
	array('Inkay', 190),
	array('Malamar', 80),
	array('Binacle', 120),
	array('Barbaracle', 45),
	array('Helioptile', 190),
	array('Heliolisk', 75),
	array('Sylveon', 45),
	array('Hawlucha', 100),
	array('Goomy', 45),
	array('Sliggoo', 45),
	array('Goodra', 45),
	array('Phantump', 120),
	array('Trevenant', 60),
	array('Pumpkaboo', 120),
	array('Gourgeist', 60),
	array('Bergmite', 190),
	array('Avalugg', 55),
	array('Noibat', 190),
	array('Noivern', 45),
	array('Grubbin', 255),
	array('Charjabug', 120),
	array('Vikavolt', 45),
	array('Cutiefly', 190),
	array('Ribombee', 75),
	array('Wishiwashi', 60),
	array('Mareanie', 190),
	array('Toxapex', 75),
	array('Mudbray', 190),
	array('Mudsdale', 60),
	array('Dewpider', 200),
	array('Araquanid', 100),
	array('Morelull', 190),
	array('Shiinotic', 75),
	array('Salandit', 120),
	array('Salazzle', 45),
	array('Stufful', 140),
	array('Bewear', 70),
	array('Bounsweet', 235),
	array('Steenee', 120),
	array('Tsareena', 45),
	array('Oranguru', 45),
	array('Passimian', 45),
	array('Wimpod', 90),
	array('Golisopod', 45),
	array('Pyukumuku', 60),
	array('Turtonator', 70),
	array('Togedemaru', 180),
	array('Mimikyu', 45),
	array('Drampa', 70),
	array('Dhelmise', 25),
	array('Jangmo-o', 45),
	array('Hakamo-o', 45),
	array('Kommo-o', 45),
	array('Skwovet', 255),
	array('Greedent', 90),
	array('Rookidee', 255),
	array('Corvisquire', 120),
	array('Corviknight', 45),
	array('Blipbug', 255),
	array('Dottler', 120),
	array('Orbeetle', 45),
	array('Nickit', 255),
	array('Thievul', 127),
	array('Gossifleur', 190),
	array('Eldegoss', 75),
	array('Wooloo', 255),
	array('Dubwool', 127),
	array('Chewtle', 255),
	array('Drednaw', 75),
	array('Yamper', 255),
	array('Boltund', 45),
	array('Rolycoly', 255),
	array('Carkol', 120),
	array('Coalossal', 45),
	array('Applin', 255),
	array('Flapple', 45),
	array('Appletun', 45),
	array('Silicobra', 255),
	array('Sandaconda', 120),
	array('Cramorant', 45),
	array('Arrokuda', 255),
	array('Barraskewda', 60),
	array('Toxel', 75),
	array('Toxtricity', 45),
	array('Sizzlipede', 190),
	array('Centiskorch', 75),
	array('Clobbopus', 180),
	array('Grapploct', 45),
	array('Sinistea', 120),
	array('Polteageist', 60),
	array('Hatenna', 235),
	array('Hattrem', 120),
	array('Hatterene', 45),
	array('Impidimp', 255),
	array('Morgrem', 120),
	array('Grimmsnarl', 45),
	array('Obstagoon', 45),
	array('Perrserker', 90),
	array('Cursola', 30),
	array('Sirfetchd', 45),
	array('Mr. Rime', 45),
	array('Runerigus', 90),
	array('Milcery', 200),
	array('Alcremie', 100),
	array('Falinks', 45),
	array('Pincurchin', 75),
	array('Snom', 190),
	array('Frosmoth', 75),
	array('Stonjourner', 60),
	array('Eiscue', 60),
	array('Indeedee', 30),
	array('Morpeko', 180),
	array('Cufant', 190),
	array('Copperajah', 90),
	array('Dreepy', 45),
	array('Drakloak', 45),
	array('Dragapult', 45),
	array('GMax', 10),
	array('GMax Promoted', 20),
);

?>