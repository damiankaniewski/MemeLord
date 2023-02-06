create view view_memes (id, title, description, "like", dislike, created_at, id_assigned_by, image) as
SELECT memes.id,
       memes.title,
       memes.description,
       memes."like",
       memes.dislike,
       memes.created_at,
       memes.id_assigned_by,
       memes.image
FROM memes
ORDER BY memes.id;

alter table view_memes
    owner to dbuser;

