create table users_memes
(
    id_user integer not null
        constraint user_users_memes___fk
            references users
            on update cascade on delete cascade,
    id_meme integer not null
        constraint meme_users_memes___fk
            references memes
            on update cascade on delete cascade
);

alter table users_memes
    owner to dbuser;

