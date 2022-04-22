<?php


function getVoters($conn)
{
    $query = "SELECT * FROM voters";
    $result = mysqli_query($conn, $query);

    return mysqli_num_rows($result);
}


function getVotes($conn)
{
    $query = "SELECT * FROM votes";
    $result = mysqli_query($conn, $query);

    return mysqli_num_rows($result);
}

function getCandidates($conn)
{
    $query = "SELECT * FROM candidates";
    $result = mysqli_query($conn, $query);

    return mysqli_num_rows($result);
}

function getPositions($conn)
{
    $query = "SELECT * FROM positions";
    $result = mysqli_query($conn, $query);

    return mysqli_num_rows($result);
}


function getParty($conn)
{
    $query = "SELECT * FROM party";
    $result = mysqli_query($conn, $query);

    return mysqli_num_rows($result);
}


function getAdmin($conn)
{
    $query = "SELECT * FROM admin";
    $result = mysqli_query($conn, $query);

    return mysqli_num_rows($result);
}






















?>