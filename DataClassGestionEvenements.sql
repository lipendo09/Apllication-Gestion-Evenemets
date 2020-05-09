/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     08/05/2020 00:34:16                          */
/*==============================================================*/


/*==============================================================*/
/* Table: Admin                                                 */
/*==============================================================*/
create table Admin
(
   idAdmin              int,
   nom                  varchar(254),
   prenom               varchar(254),
   username             varchar(254),
   passwords            varchar(254) not null,
   primary key (passwords)
);

/*==============================================================*/
/* Table: Commentaire                                           */
/*==============================================================*/
create table Commentaire
(
   idComment            int not null,
   idEv                 int not null,
   commentaires         varchar(254),
   primary key (idComment)
);

/*==============================================================*/
/* Table: Evenement                                             */
/*==============================================================*/
create table Evenement
(
   idEv                 int not null auto_increment,
   nomEv                varchar(254),
   dateDebut            datetime,
   dateFin              datetime,
   organisateur         varchar(254),
   lieu                 varchar(254),
   contact              int,
   decrire              varchar(254),
   primary key (idEv)
);

alter table Commentaire add constraint FK_association1 foreign key (idEv)
      references Evenement (idEv) on delete cascade on update cascade;

