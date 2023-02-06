create table users
(
    id              serial
        primary key,
    email           varchar(255)      not null,
    password        varchar(255)      not null,
    id_user_details integer default 0 not null
);

alter table users
    owner to dbuser;

