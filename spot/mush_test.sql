drop table test_mush;

create table test_mush
(MushID int unsigned not null auto_increment primary key,
CommonName varchar(50),
LatinName varchar(60)
);

insert into test_mush values (NULL,"Ox Tongue","Fistulina hepatica");
insert into test_mush values (NULL,"Honey Mushroom","Armillaria mellea");
insert into test_mush values (NULL,"Lion's Mane","Hericium erinaceus");
insert into test_mush values (NULL,"Matsutake","Tricholoma magnivelare");
insert into test_mush values (NULL,"Candy Cap","Lactarius rubidus");
insert into test_mush values (NULL,"Black Trumpet","Craterellus cornucopioides");
insert into test_mush values (NULL,"Chanterelle","Cantharellus cibarius");
insert into test_mush values (NULL,"Pig's Ear","Gomphus clavatus");
insert into test_mush values (NULL,"Wood Ear","Auricularia auricula");
insert into test_mush values (NULL,"Straw Mushroom","Volvariella volvacea");
insert into test_mush values (NULL,"Enoki","Flammulina velutipes");
insert into test_mush values (NULL,"King Oyster","Pleurotus eryngii");
insert into test_mush values (NULL,"Blue Chanterelle","Polyozellus multiplex");
insert into test_mush values (NULL,"Red Chanterelle","Cantharellus cinnabarinus");
insert into test_mush values (NULL,"Flower Pot Parasol","Leucocoprinus birnbaumii");
insert into test_mush values (NULL,"Yellow Coral","Ramaria rasilispora");
insert into test_mush values (NULL,"Pink Coral","Ramaria araiospora");
insert into test_mush values (NULL,"Deer Mushroom","Pluteus cervinus");
insert into test_mush values (NULL,"Blue Knight","Albatrellus flettii");
insert into test_mush values (NULL,"Hen of the Woods","Grifola frondosa");
insert into test_mush values (NULL,"Morel","Morchella elata");
insert into test_mush values (NULL,"Death Cap","Amanita phalloides");
insert into test_mush values (NULL,"Fly Agaric","Amanita muscaria");
insert into test_mush values (NULL,"Elfin Saddle","Helvella lacunosa");
insert into test_mush values (NULL,"Porcini","Boletus edulis");

/*
1.	Ox Tongue
2.	Honey
3.	Lion’s Mane
4.	Matsutake
5.	Candy Cap
6.	Black Trumpet
7.	Chanterelle
8.	Pig’s Ear
9.	Wood Ear
10.	Straw
11.	Enoki
12.	King Oyster
13.	Blue Chanterelle
14.	Red Chanterelle
15.	Flower Pot Parasol
16.	Yellow Coral (Ramaria rasilispora)
17.	Pink Coral (Ramaria araiospora)
18.	Deer
19.	Blue Knight
20.	Hen
21.	Morel
22.	Death Cap
23.	Fly Agaric
24.	Elfin Saddle
25.	Porcini
*/