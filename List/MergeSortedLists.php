<?php

function Merge($pHead1, $pHead2) {
    if($pHead1 == NULL){
        return $pHead2;
    }elseif($pHead2 == NULL){
        return $pHead1;
    }

    $pMergeHead = NULL;

    if($pHead1->val <= $pHead2->val){
        $pMergeHead = $pHead1;
        $pMergeHead->next = Merge($pHead1->next,$pHead2);
    }else{
        $pMergeHead = $pHead2;
        $pMergeHead->next = Merge($pHead1,$pHead2->next);
    }
    return $pMergeHead;
}