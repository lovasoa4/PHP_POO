create table transport(
    id int AUTO_INCREMENT primary key,
    type varchar(50) not null,
    model varchar(50) not null,
    marque varchar(50) not null,
    nbrRoues int not null,
    immatriculation varchar(50) unique not null
)