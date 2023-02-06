create table memes
(
    id             serial
        primary key,
    title          varchar(100) not null,
    description    text,
    "like"         integer default 0,
    dislike        integer default 0,
    created_at     date,
    id_assigned_by integer      not null
        constraint memes_users_id_fk
            references users
            on update cascade on delete cascade,
    image          varchar(255)
);

alter table memes
    owner to dbuser;

