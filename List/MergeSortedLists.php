<?php

/**
 * 合并两个已排序的链表
 * 输入两个单调递增的链表，输出两个链表合成后的链
 * 表，当然我们需要合成后的链表满足单调不减规则。
 *
 * @param  ListNode $pHead1
 * @param ListNode $pHead2
 * @return ListNode $pMergeHead
 */
function Merge($pHead1, $pHead2) {

    //如有任一链表为空，则返回另一链表
    if($pHead1 == NULL){
        return $pHead2;
    }elseif($pHead2 == NULL){
        return $pHead1;
    }

    $pMergeHead = NULL;

    //节点值的比较与递归合并
    if($pHead1->val <= $pHead2->val){
        $pMergeHead = $pHead1;
        $pMergeHead->next = Merge($pHead1->next,$pHead2);
    }else{
        $pMergeHead = $pHead2;
        $pMergeHead->next = Merge($pHead1,$pHead2->next);
    }

    return $pMergeHead;
}