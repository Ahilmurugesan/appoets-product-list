<?php
use Vinkla\Hashids\Facades\Hashids;
use App\Exceptions\DecryptIdException;

/**
 * function for encrypting the id
 *
 * @param $id
 * @return string
 */
function encryptId($id): string
{
    return Hashids::encode($id);
}

/**
 * function for decrypting the id
 *
 * @param $hash
 * @return mixed
 * @throws Throwable
 */
function decryptId($hash){
    $id = Hashids::decode($hash);

    throw_if(empty($id), new DecryptIdException());

    return $id[0];
}
