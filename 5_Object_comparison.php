<?php

function areUsersEqual(User $user1, User $user2)
{
    return $user1->id === $user2->id;
}