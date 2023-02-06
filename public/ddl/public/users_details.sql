create table users_details
(
    id      integer default nextval('user_details_id_seq'::regclass) not null
        constraint user_details_pkey
            primary key,
    name    varchar(100)                                             not null,
    surname varchar(100)                                             not null,
    phone   varchar(20)
);

alter table users_details
    owner to dbuser;

