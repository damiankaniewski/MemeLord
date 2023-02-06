create sequence user_details_id_seq
    as integer;

alter sequence user_details_id_seq owner to dbuser;

alter sequence user_details_id_seq owned by users_details.id;

