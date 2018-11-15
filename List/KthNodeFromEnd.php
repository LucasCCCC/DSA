<?php

function FindKthToTail($head, $k){

    if ($head == NULL || $k == 0){
        return NULL;
    }

    $pAhead = $head;
    $pBehind = $head;

    for ($i = 1;$i < $k;$i++){
        if ($pAhead->next == NULL){
            return NULL;
        }else{
            $pAhead = $pAhead->next;
        }
    }

    while ($pAhead->next != NULL){
        $pAhead = $pAhead->next;
        $pBehind = $pBehind->next;
    }

    return $pBehind->val;
}


