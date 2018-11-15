<?php

function ReverseList($head) {
    $pReversedHead = NULL;
    $pNode = $head;
    $pPrev = NULL;
    while($pNode != NULL){
        $pNext = $pNode->next;

        if($pNext == NULL){
            $pReversedHead = $pNode;
        }

        $pNode->next = $pPrev;

        $pPrev = $pNode;
        $pNode = $pNext;
    }
    return $pReversedHead;
}