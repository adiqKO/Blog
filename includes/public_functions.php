<?php

function getPublishedPosts(){
    global $connect;
    $sql = "SELECT image, slug, title, created_at  FROM posts WHERE published = true";
    mysqli_query($connect, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
    $result = mysqli_query($connect, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $posts;
}

function getPost($postSlug){
    global $connect;
    $sql = "SELECT * FROM posts WHERE slug='$postSlug'";
    mysqli_query($connect, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
    $result = mysqli_query($connect, $sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}

function getPostTopic($topic_id){
    global $connect;
    $sql = "SELECT * FROM posts WHERE id IN (SELECT post_id FROM post_topic WHERE topic_id = $topic_id)";
    $result = mysqli_query($connect, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $posts;
}